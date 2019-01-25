<?php

namespace App\Traits\Doctrine\Repository;

use App\Traits\Doctrine\Repository\RepositoryTrait;

trait FindEntityTrait
{
    use RepositoryTrait;
    
    public function find($reference)
    {
        $entity = null;
        $type = gettype($reference);
        switch ($type) {
        case 'integer':
            $entity = $this->getRepository()->findOneById($reference);
            break;
        case 'string':
            $suffix = "Name";
            if (is_numeric($reference)) {
                $suffix = "Id";
            }
            $entity = $this->getRepository()->{"findOneBy".$suffix}($reference);
            break;
        case 'object':
            if (is_object($reference)) {
                $entity = $reference;
            }
            break;
        default:
            $entity = null;
            break;
        }

        return $entity;
    }

    /**
return mixed
     */
    public function getIterableResult()
    {
        $repository =  $this->getRepository();

        return $repository->createQueryBuilder('entity')
            ->select('entity')
            ->getQuery()
            ->iterate()
        ;
    }

    /**
return mixed
     */
    public function findAll()
    {
        return $this->getRepository()->findAll();
    }
}
