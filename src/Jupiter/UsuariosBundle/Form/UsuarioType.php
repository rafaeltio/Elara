<?php

namespace Jupiter\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('email')
            ->add('respostaSecreta')
            ->add('senha')
            ->add('perguntaSecreta')
            ->add('prm001')
            ->add('prm002')
            ->add('prm003')
            ->add('prm004')
            ->add('prm005')
            ->add('prm006')
            ->add('prm007')
            ->add('prm008')
            ->add('prm009')
            ->add('prm010')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jupiter\UsuariosBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jupiter_usuariosbundle_usuario';
    }
}
