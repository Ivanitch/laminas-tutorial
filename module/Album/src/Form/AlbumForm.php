<?php

declare(strict_types=1);

namespace Album\Form;

use Laminas\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('album');

        //$this->setAttribute('method', 'GET');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);

        $this->add([
            'name' => 'title',
            'type' => 'text',
            'options' => [
                'label' => 'Title',
            ],
        ]);

        $this->add([
            'name' => 'artist',
            'type' => 'text',
            'options' => [
                'label' => 'Artist',
            ],
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Go',
                'id'    => 'submit_button',
            ],
        ]);
    }
}