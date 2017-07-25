<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 25-Jul-17
 * Time: 17:44
 */

namespace AppBundle\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class MyCalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('one', ButtonType::class, ['label' => '1',  'attr' => ['value' => 1]])
            ->add('two', ButtonType::class, ['label' => '2',  'attr' => ['value' => 2]])
            ->add('three', ButtonType::class, ['label' => '3',  'attr' => ['value' => 3]])
            ->add('four', ButtonType::class, ['label' => '4',  'attr' => ['value' => 4]])
            ->add('five', ButtonType::class, ['label' => '5',  'attr' => ['value' => 5]])
            ->add('six', ButtonType::class, ['label' => '6',  'attr' => ['value' => 6]])
            ->add('seven', ButtonType::class, ['label' => '7',  'attr' => ['value' => 7]])
            ->add('eight', ButtonType::class, ['label' => '8',  'attr' => ['value' => 8]])
            ->add('nine', ButtonType::class, ['label' => '9',  'attr' => ['value' => 9]])
            ->add('zero', ButtonType::class, ['label' => '0',  'attr' => ['value' => 0]])
            ->add('add', ButtonType::class, ['label' => '+',  'attr' => ['value' => '+']])
            ->add('minus', ButtonType::class, ['label' => '-',  'attr' => ['value' => '-']])
            ->add('divid', ButtonType::class, ['label' => '/',  'attr' => ['value' => '/']])
            ->add('times', ButtonType::class, ['label' => '*',  'attr' => ['value' => '*']])
            ->add('equals', SubmitType::class, ['label' => '=',])
            ->add('sum', TextType::class, ['label' => 'Sum', 'attr' => ['readonly' => true]]);


    }
}