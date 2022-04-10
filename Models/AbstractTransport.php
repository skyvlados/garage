<?php
namespace Models;

interface AbstractTransport
{
    public function getModel():string;

    public function getWeight():int;

    public function getPersonName():string;
    
}