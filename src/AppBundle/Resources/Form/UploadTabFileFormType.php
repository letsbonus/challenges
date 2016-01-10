<?php

namespace AppBundle\Resources\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class UploadTabFileFormType
 */
class UploadTabFileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tabfile', FileType::class, array('label' => 'Tab file:'))
            ->add('send', SubmitType::class)
            ->setAction($options['action'])
        ;
    }

    public function getBlockPrefix()
    {
        return 'uploadtabfileform';
    }
}
