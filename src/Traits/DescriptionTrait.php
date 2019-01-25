<?php

namespace App\Traits;

trait DescriptionTrait
{
    /**
var string
     */
    protected $description;

    /**
return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
param string $description

     */
    public function setDescription($description)
    {
        $this->description = $description;
        
    }
}
