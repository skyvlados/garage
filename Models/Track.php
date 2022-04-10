<?php
namespace Models;

class Track implements AbstractTransport
{
    private Brand $model;
    private int $weightTruck;
    private int $countTrailer;
    private int $weightTrailer;
    private Person $person;

    public function __construct(Brand $model, int $weightTruck, Person $person, int $weightTrailer,int $countTrailer=1)
    {
        $this->model = $model;
        $this->weightTruck = $weightTruck;
        $this->countTrailer = $countTrailer;
        $this->weightTrailer=$weightTrailer;
        $this->person = $person;
    }


    public function getModel(): string
    {
        return $this->model->getName();
    }

    public function getWeight(): int
    {
        return $this->weightTruck+$this->person->getWeight()+$this->countTrailer*$this->weightTrailer;
    }

    public function getPersonName(): string
    {
        return $this->person->getName();
    }
}