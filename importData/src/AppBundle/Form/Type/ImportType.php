<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class ImportType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('file', 'file', array(
                'label' => 'Archivo'
            ))
        ;
    }

    public function getName() {
        return 'import';
    }

}