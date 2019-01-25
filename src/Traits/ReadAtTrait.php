<?php

namespace App\Traits;

use DateTime;

trait ReadAtTrait
{
    /**
     * @var DateTime
     */
    protected $readAt;

    /**
     * @return DateTime
     */
    public function getReadAt() :DateTime
    {
        return $this->readAt;
    }

    /**
     * @param DateTime $updated
     */
    public function setReadAt(DateTime $readAt)
    {
        $this->readAt = $readAt;
        
    }
}
