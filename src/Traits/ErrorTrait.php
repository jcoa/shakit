<?php

namespace App\Traits;

trait ErrorTrait
{
    /*
     * @var Array
     */
    protected $errors = [];

    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    public function addError(string $message)
    {
        $this->errors[] = $message;
    }

    public function hasErrors() :boolean
    {
        return count($this->errors) > 0;
    }

    public function getErrors() :array
    {
        return $this->errors;
    }

    public function getErrorsAsString() :string
    {
        $result = '';
        foreach ($this->errors as $error) {
            $error = empty($error) ? "an error occured" : $error;
            $result .= $error."-";
        }

        return $result;
    }

    public function resetErrors()
    {
        $this->errors = [];
    }

    public function mergeErrors($errors)
    {
        $errors = array_merge($errors, $this->getErrors());
        $this->setErrors($errors);
        return $errors;
    }
}
