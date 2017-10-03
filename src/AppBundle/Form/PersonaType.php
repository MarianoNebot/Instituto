<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PersonaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('apellido')
            ->add('nombres')
            ->add('numeroDocumento')
            ->add('domicilio')
            ->add('fechaNacimiento')
            ->add('telefono')
            ->add('celular')
            ->add('correoElectronico')
            ->add('activo')
            ->add('nacProvincia', EntityType::class, array(
                'class' => 'AppBundle:Provincia',
                'choice_label' => 'descripcion'
            ))
            ->add('estadoCivil', EntityType::class, array(
                'class' => 'AppBundle:Estadocivil',
                'choice_label' => 'descripcion'
            ))
            ->add('resiProvincia', EntityType::class, array(
                'class' => 'AppBundle:Provincia',
                'choice_label' => 'descripcion'
            ))
            ->add('genero', EntityType::class, array(
                'class' => 'AppBundle:Genero',
                'choice_label' => 'descripcion'
            ))
            ->add('resiLocalidad', EntityType::class, array(
                'class' => 'AppBundle:Localidad',
                'choice_label' => 'descripcion'
            ))
            ->add('nacLocalidad', EntityType::class, array(
                'class' => 'AppBundle:Localidad',
                'choice_label' => 'descripcion'
            ))
            ->add('resiPais', EntityType::class, array(
                'class' => 'AppBundle:Pais',
                'choice_label' => 'descripcion'
            ))
            ->add('nacPais', EntityType::class, array(
                'class' => 'AppBundle:Pais',
                'choice_label' => 'descripcion'
            ))
            ->add('tipoDocum', EntityType::class, array(
                'class' => 'AppBundle:TipoDocum',
                'choice_label' => 'descripcion'
            ))

            ->add('saveAndAdd', SumbitType::class, array(
                'label' => 'Save and Add'
                ->getForm()
            )) ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Persona'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_persona';
    }


}
