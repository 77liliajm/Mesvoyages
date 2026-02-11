<?php

namespace App\Form;

use App\Entity\Visite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->add('imageSize')
            ->add('updatedAt', null, [
                'widget' => 'single_text',
            ])
            ->add('ville')
            ->add('pays')
            ->add('datecreation')
            ->add('note')
            ->add('avis')
            ->add('tempmin')
            ->add('tempmax')
            ->add('imageFile', FileType::class, [
    'label' => 'Image',
    'required' => false,])      
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
        ]);
    }
}
