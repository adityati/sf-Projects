<?php

namespace Acme\AddressBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressBookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName','text')
            ->add('lastName','text')
            ->add('companyName','text')
            ->add('street','text')
            ->add('housenumber','text')
            ->add('postcode','text')
            ->add('city','text')
            ->add('country','text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\AddressBookBundle\Entity\AddressBook'
        ));
    }

    public function getName()
    {
        return 'acme_addressbookbundle_addressbooktype';
    }
}
