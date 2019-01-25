<?php

namespace App\Traits;

use DateTime;

trait UpdatedAtTrait
{
    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @return DateTime
     */
    public function getUpdatedAt() :DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updated
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        
    }
}
