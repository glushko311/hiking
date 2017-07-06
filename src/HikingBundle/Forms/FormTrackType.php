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
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormTrackType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options){
        $builder->add('date', DateType::class,['label'=>'Дата старта', 'attr'=> ['class'=>'form-field track-date-field']])
            ->add('days', IntegerType::class, ['label'=>'Дней в пути', 'attr'=> ['class'=>'form-field track-days-field']])
            ->add('difficult', IntegerType::class, ['label'=>'Сложность','attr'=> ['class'=>'form-field track-difficult-field']])
            ->add('track', TextareaType::class, ['label'=>'Нитка маршрута', 'attr'=> ['class'=>'form-field track-track-field']])
            ->add('status', CheckboxType::class, ['label'=>'Маршрут пройден ?', 'attr'=> ["required"=>"none",'class'=>'form-field track-status-field']] )
            ->add('save', SubmitType::class, ['label'=>'Сохранить маршрут', 'attr'=> ['class'=>'submit-btn track-submit-btn']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'HikingBundle\Entity\Track'
        ]);
    }

}