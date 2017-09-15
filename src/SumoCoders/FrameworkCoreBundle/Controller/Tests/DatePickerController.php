<?php

namespace SumoCoders\FrameworkCoreBundle\Controller\Tests;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DatePickerController extends Controller
{
    /**
     * @Template()
     * @Route("/datepicker")
     */
    public function indexAction()
    {
        $form = $this->createFormBuilder()
            ->add(
                'date_example1',
                DateType::class,
                array(
                    'widget' => 'choice',
                    'required' => false,
                    'data' => new \DateTime(),
                )
            )
            ->add(
                'date_example2',
                DateType::class,
                array(
                    'widget' => 'single_text',
                    'required' => false,
                    'data' => new \DateTime('20 june 1985 13:37:00'),
                )
            )
            ->add(
                'date_example3',
                DateType::class,
                array(
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                    'data' => new \DateTime('20 june 1985 13:37:00'),
                )
            )
            ->add(
                'date_example4',
                DateType::class,
                array(
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                    'data' => new \DateTime(),
                )
            )
            ->add(
                'date_example5',
                DateType::class,
                array(
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'minimum_date' => new \DateTime('last monday'),
                    'required' => false,
                    'data' => new \DateTime(),
                )
            )
            ->add(
                'date_example6',
                DateType::class,
                array(
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'maximum_date' => new \DateTime('next friday'),
                    'required' => false,
                    'data' => new \DateTime(),
                )
            )
            ->add(
                'date_example7',
                DateType::class,
                array(
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'minimum_date' => new \DateTime('last monday'),
                    'maximum_date' => new \DateTime('next friday'),
                    'required' => false,
                    'data' => new \DateTime(),
                )
            )
            ->add(
                'date_example8',
                DateType::class,
                array(
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                )
            )
            ->add(
                'datetime_example1',
                DateTimeType::class,
                array(
                    'widget' => 'choice',
                    'required' => false,
                    'data' => new \DateTime(),
                )
            )
            ->add(
                'datetime_example2',
                DateTimeType::class,
                array(
                    'widget' => 'single_text',
                    'required' => false,
                    'data' => new \DateTime(),
                )
            )
            ->add(
                'time_example1',
                TimeType::class,
                array(
                    'widget' => 'choice',
                    'required' => false,
                )
            )
            ->add(
                'time_example2',
                TimeType::class,
                array(
                    'widget' => 'single_text',
                    'required' => false,
                )
            )
            ->add(
                'birthday_example1',
                BirthdayType::class,
                array(
                    'widget' => 'choice',
                    'required' => false,
                    'data' => new \DateTime('20 june 1985 13:37:00'),
                )
            )
            ->add(
                'birthday_example2',
                BirthdayType::class,
                array(
                    'widget' => 'single_text',
                    'required' => false,
                    'data' => new \DateTime('20 june 1985 13:37:00'),
                )
            )
            ->add(
                'birthday_example3',
                BirthdayType::class,
                array(
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                    'data' => new \DateTime('20 june 1985 13:37:00'),
                )
            )
            ->add(
                'save',
                SubmitType::class,
                array(
                    'label' => 'Ok',
                )
            )
            ->getForm();

        return array(
            'form' => $form->createView()
        );
    }
}
