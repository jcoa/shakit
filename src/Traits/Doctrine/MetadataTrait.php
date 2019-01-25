<?php

namespace App\Traits\Doctrine;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;

trait MetadataTrait
{
    /** @var ClassMetadata */
    protected $_metadata;
    
    /**
return ClassMetadata
     */
    public function getMetadata()
    {
        return $this->_metadata;
    }

    /**
param ClassMetadata $metadata
     */
    public function setMetadata(ClassMetadata $metadata)
    {
        $this->_metadata = $metadata;
    }
}
