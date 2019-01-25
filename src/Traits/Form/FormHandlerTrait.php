<?php

namespace App\Traits\Form;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

trait FormHandlerTrait
{
    /** @var FormInterface */
    protected $form;

    /** @var Request */
    protected $request;

    /**
return FormInterface
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
param FormInterface $form
param Form
     */
    public function setForm(FormInterface $form)
    {
        $this->form = $form;
    }

    /**
return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
param Request $request
param Request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

}
