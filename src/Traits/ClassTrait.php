<?php

namespace App\Traits;

use InvalidArgumentException;

trait ClassTrait
{
    /** @var Object */
    protected $class;
    
    /**
     * @return Object
     */
    public function getClass() :Object
    {
        return $this->class;
    }

    /**
param string $class
param Object
     */
    public function setClass(Object $class)
    {
        $this->class = $class;
    } 

    public function validateClass($entity, $className = null)
    {
        $className = $className ? $className : $this->getClass();
        if (!$entity instanceof $className) {
            throw new InvalidArgumentException('Expected instance of ' . $this->getClass());
        }
    }
}
