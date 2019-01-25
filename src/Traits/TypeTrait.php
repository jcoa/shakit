<?php

namespace App\Traits;

trait TypeTrait
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getType() :string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
        
    }
}
