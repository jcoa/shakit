<?php

namespace App\Traits;

trait MessageTrait
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $message
     */
    public function setMessage(string $message) :void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage() :?string
    {
        return $this->message;
    }
}
