<?php

namespace Maris\Interfaces\Geo\AbstractModel;

use ArrayIterator;
use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Calculator\BearingCalculatorInterface;
use Maris\Interfaces\Geo\Calculator\DistanceCalculatorInterface;
use Maris\Interfaces\Geo\Determinant\IntersectionDeterminantInterface;
use Maris\Interfaces\Geo\Determinant\OrientationDeterminantInterface;
use Maris\Interfaces\Geo\Factory\FeatureFactoryInterface;
use Maris\Interfaces\Geo\Finder\IntermediateLocationFinderInterface;
use Maris\Interfaces\Geo\Finder\MidLocationFinderInterface;
use Maris\Interfaces\Geo\Model\FeatureInterface;
use Maris\Interfaces\Geo\Model\GeometryInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;
use Maris\Interfaces\Geo\Model\PolylineInterface;
use Traversable;

abstract class AbstractPolyline implements PolylineInterface
{
    public function count(): int
    {
        return count( $this->toArray() );
    }

    public function jsonSerialize(): array
    {
       return [
           "type" => "LineString",
           "coordinates" => $this->toArray()
       ];
    }

    public function getStart(): LocationInterface|LocationAggregateInterface|null
    {
        return $this->get( 0 );
    }

    public function getEnd(): LocationInterface|LocationAggregateInterface|null
    {
        return $this->get( $this->count() - 1 );
    }

    public function contains(LocationInterface|LocationAggregateInterface $location): bool
    {
        return in_array( $location, $this->toArray() );
    }

    public function addUnique(LocationInterface|LocationAggregateInterface $location): bool
    {
        if(!in_array($location,$this->toArray())){
            $this->add( $location );
            return true;
        }
        return false;
    }

    public function isSection(): bool
    {
        return $this->count() == 2;
    }

    public function getSections(): array
    {
        $coordinates = $this->toArray();
        $sections = [];

        for( $i = 0, $j = 1; isset($coordinates[$j]); $i = $j, $j++)
            $sections[] = (new static())
                ->add($coordinates[$i])
                ->add($coordinates[$j]);

        return $sections;
    }

    public function getLength(DistanceCalculatorInterface $calculator): float
    {
        $distance = 0.0;
        $coordinates = $this->toArray();
        for( $i = 0, $j = 1; isset($coordinates[$j]); $i = $j, $j++)
            $distance += $calculator->calculateDistance( $coordinates[$i], $coordinates[$j] );

        return $distance;
    }

    public function getInitialBearing(BearingCalculatorInterface $calculator): float
    {
        return $calculator->calculateInitialBearing( $this->getStart(), $this->getEnd() );
    }

    public function getFinalBearing(BearingCalculatorInterface $calculator): float
    {
        return $calculator->calculateFinalBearing( $this->getStart(), $this->getEnd() );
    }

    public function getMidLocation(MidLocationFinderInterface $finder): LocationInterface|LocationAggregateInterface|null
    {
        return $finder->findMidLocation( $this->getStart(), $this->getEnd() );
    }

    public function getIntermediateLocation(IntermediateLocationFinderInterface $finder, float $percent): LocationInterface|LocationAggregateInterface|null
    {
        return $finder->findIntermediateLocation( $this->getStart(), $this->getEnd(), $percent );
    }

    public function getReverse(): PolylineInterface
    {
        $instance = new static();
        foreach (array_reverse( $this->toArray() ) as $item)
            $instance->add($item);

        return $instance;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator( $this->toArray() );
    }

    public function intersects(IntersectionDeterminantInterface $determinant, GeometryInterface $geometry): bool
    {
        return $determinant->intersects( $this, $geometry);
    }

    public function getOrientation(OrientationDeterminantInterface $determinant, LocationInterface|LocationAggregateInterface $location): int
    {
        return $determinant->determineOrientation( $this, $location );
    }


    public function toFeature( FeatureFactoryInterface $factory ): FeatureInterface
    {
        return $factory->fromGeometry( $this );
    }
}