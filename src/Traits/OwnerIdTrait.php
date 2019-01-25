<?php

namespace App\Traits;

trait OwnerIdTrait
{
    /**
var integer
     */
    protected $ownerId;

    /**
return integer
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
param integer $owner

     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        
    }
}
