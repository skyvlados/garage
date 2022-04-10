<?php
namespace Models;

class Car implements AbstractTransport
{
    private Brand $model;
    private int $weightAuto;
    private bool $isTrailer;
    private int $weightTrailer;
    private Person $person;

    public function __construct(Brand $model, int $weightAuto, Person $person, bool $isTrailer=false,
                                int $weightTrailer=0)
    {
        $this->model = $model;
        $this->weightAuto = $weightAuto;
        $this->isTrailer = $isTrailer;
        $this->weightTrailer = $weightTrailer;
        $this->person = $person;
    }


    public function getModel(): string
    {
        return $this->model->getName();
    }

    public function getWeight(): int
    {
        if ($this->isTrailer) {
            return $this->weightAuto+$this->person->getWeight()+$this->weightTrailer;
        } else {
            return $this->weightAuto+$this->person->getWeight();
        }
    }

    public function getPersonName(): string
    {
        return $this->person->getName();
    }
}