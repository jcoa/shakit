<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use App\Traits\IdTrait;
use App\Traits\NameTrait;
use App\Traits\DescriptionTrait;

/**
 * Defines the properties of the Ingredient entity.
 */
class Ingredient
{
    use IdTrait;
    use NameTrait;
    use DescriptionTrait;

    private $recipes;

    public function __construct()
    {
        $this->recipes = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}