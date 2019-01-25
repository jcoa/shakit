<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Session\Session;

trait SessionTrait
{
    /**
     * @var Session
     */
    protected $session;

    /**
     * @return Session
     */
    public function getSession() :Session
    {
        return $this->session;
    }

    /**
     * @param Session
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
        
    }

}
