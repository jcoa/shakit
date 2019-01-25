<?php

namespace App\Traits;

trait EnabledTrait
{
    /**
var boolean
     */
    protected $enabled = true;


    public function enable() :void
    {
        $this->enabled = true;
        
    }

    public function disable() :void
    {
        $this->enabled = false;
        
    }

    /**
return boolean
     */
    public function isEnabled() :boolean
    {
        return $this->enabled;
    }

    /**
param boolean $enabled

     */
    public function setEnabled(boolean $enabled)
    {
        $this->enabled = $enabled;
        
    }
}
