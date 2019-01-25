<?php

namespace App\Traits\Doctrine;

use DateTime;
use DateTimeZone;
use App\Traits\TimestampableTrait;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\PreUpdateEventArgs;

trait EntityTimestampableTrait
{

    use TimestampableTrait;

    /**
     * Pre persist event listener
     */
    public function beforeSave()
    {
        $this->setCreatedAt($this->generateDate());
        $this->setUpdatedAt($this->generateDate());
    }

    /**
     * Invoked before the entity is updated.
     */
    public function beforeUpdate()
    {
        $this->setUpdatedAt($this->generateDate());
    }

    protected function generateDate()
    {
        return new DateTime('now', new DateTimeZone('UTC'));
    }
}
