<?php

namespace App\Traits\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;

trait EntityManagerTrait
{
    /**
var ObjectManager
     */
    protected $em;

    /**
var boolean
     */
    protected $autoFlush = true;

    /**
return ObjectManager object manager
     */
    public function getAutoFlush()
    {
        return $this->autoFlush;
    }

    /**
param boolean $autoFlush
     */
    public function setAutoFlush($autoFlush)
    {
        $this->autoFlush = $autoFlush;
    }

    /**
return ObjectManager object manager
     */
    public function getObjectManager()
    {
        return $this->em;
    }

    /**
param ObjectManager object manager
     */
    public function setObjectManager(ObjectManager $em)
    {
        $this->em = $em;
    }

    /** 
param  mixed $entity
return void
     */
    public function persist($entity)
    {
        $this->getObjectManager()->persist($entity);
        $this->flush();
    }

    /** 
param  mixed $entity
return void
     */
    public function refresh($entity)
    {
        $this->getObjectManager()->refresh($entity);
    }

    /** 
param  mixed $entity
return void
     */
    public function remove($entity)
    {
        $this->getObjectManager()->remove($entity);
        $this->flush();
    }

    /** 
return void
     */
    public function clear()
    {
        $this->flush();
        $this->getObjectManager()->clear();
    }

    protected function flush()
    {
        if ($this->getAutoFlush()) {
            $this->getObjectManager()->flush();
        }
    }

}
