<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 06.07.2017
 * Time: 11:30
 */

namespace HikingBundle\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormMemberType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options){
        $builder->add('name', TextType::class,['label'=>'Имя', 'attr'=> ['class'=>'form-field mem-name-field']])
            ->add('last_name', TextType::class, ['label'=>'Фамилия', 'attr'=> ['class'=>'form-field mem-last-name-field']])
            ->add('about', TextareaType::class, ['label'=>'Характеристика', 'attr'=> ['class'=>'form-field mem-about-field']] )
            ->add('submit', SubmitType::class, ['label'=>'Сохранить учасника', 'attr'=> ['class'=>'submit-btn mem-submit-btn']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'HikingBundle\Entity\Member'
        ]);
    }

}