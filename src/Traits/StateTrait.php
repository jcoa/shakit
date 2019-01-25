<?php

namespace App\Traits;

trait StateTrait
{
    /**
     * @var string
     */
    protected $state;

    /**
     * @return string
     */
    public function getState() :string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
        
    }
}
