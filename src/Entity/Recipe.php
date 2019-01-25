<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use App\Traits\IdTrait;
use App\Traits\NameTrait;
use App\Traits\DescriptionTrait;

/**
 * Defines the  properties of the Recipe entity.
 */
class Recipe
{
    use IdTrait;
    use NameTrait;
    use DescriptionTrait;

    private $ingredients;

    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}