<?php

namespace App\Traits\Doctrine\Repository;

use Doctrine\Common\Persistence\ObjectRepository;

trait RepositoryTrait
{
    /** 
var ObjectRepository
     */
    protected $repository;

    /**
return ObjectRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    public function setRepository(ObjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getMaxId()
    {
        $repo = $this->getRepository();
        return $repo->getMaxId();
    }

    public function findLastId()
    {
        return $this->getRepository()->getMaxId();
    }
}
