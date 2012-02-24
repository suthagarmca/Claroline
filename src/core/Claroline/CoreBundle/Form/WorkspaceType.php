<?php

namespace Claroline\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class WorkspaceType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'text', array('required' => true));
        $builder->add(
            'type', 
            'choice',
            array(
                'choices' => array(
                    'simple'     => 'Simple',
                    'aggregator' => 'Aggregator',
                ),
                'multiple' => false,
                'required' => true
            )
        );
    }

    public function getName()
    {
        return 'workspace_form';
    }
}