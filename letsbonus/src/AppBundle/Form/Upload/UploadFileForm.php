<?php
/**
 * Created by PhpStorm.
 * User: apuig
 * Date: 7/2/16
 * Time: 21:37
 */

namespace AppBundle\Form\Upload;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;




class UploadFileForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('attachment', FileType::class, array('label'    => 'Upload (.tab, .txt)'))
            ->add('save', SubmitType::class, array('label' => 'Submit'))
        ;
    }
}