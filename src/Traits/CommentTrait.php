<?php

namespace App\Traits;

trait CommentTrait
{
    /**
     * @var string
     */
    protected $comment;

    /**
     * @param string $comment
     */
    public function setComment(string $comment) :void
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment() :string
    {
        return $this->comment;
    }
}
