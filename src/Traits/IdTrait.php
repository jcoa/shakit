<?php

namespace App\Traits;

trait IdTrait
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @return int the order unique id. 
     */
    public function getId() :int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id) :void
    {
        $this->id = $id;
    }
}
