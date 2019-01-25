<?php

namespace App\Traits;

trait ScopeTrait
{
    /**
     * @var string
     */
    protected $scope;

    /**
     * @return string
     */
    public function getScope() :string
    {
        return $this->scope;
    }

    /**
     * @param string $scope

     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;
        
    }
}
