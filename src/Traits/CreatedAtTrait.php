<?php

namespace App\Traits;

use DateTime;

trait CreatedAtTrait
{
    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @return DateTime
     */
    public function getCreatedAt() :DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $created
     */
    public function setCreatedAt(DateTime $createdAt) :void
    {
        $this->createdAt = $createdAt;
    }
}
