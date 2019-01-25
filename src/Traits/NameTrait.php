<?php

namespace App\Traits;

trait NameTrait
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $label
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    /**
     * @param string $label
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
