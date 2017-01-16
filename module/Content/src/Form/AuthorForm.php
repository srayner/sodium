<?php

namespace Content\Form;

use Zend\Form\Form;

class AuthorForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('author');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'fullname',
            'type' => 'text',
            'options' => [
                'label' => 'Full Name',
            ],
        ]);
        $this->add([
            'name' => 'email',
            'type' => 'text',
            'options' => [
                'label' => 'Email Address',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Go',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}
