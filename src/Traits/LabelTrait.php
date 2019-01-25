<?php

namespace App\Traits;

trait LabelTrait
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @param string $label
     */
    public function setLabel(string $label) :void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel() :?string
    {
        return $this->label;
    }
}
