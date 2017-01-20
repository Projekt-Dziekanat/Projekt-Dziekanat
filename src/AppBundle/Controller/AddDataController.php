<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AddClass;
use AppBundle\Entity\AddLecturer;
use AppBundle\Entity\AddSubject;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddDataController extends Controller
{
    /**
     * @Route("/", name="list_all")
     */
    public function listAction(Request $request)
    {
        return $this->render('io/index.html.twig');
    }


    /**
     * @Route("/add_class", name="add_class")
     */
    public function addClassAction(Request $request)
    {
        $addClass= new AddClass();

        $form = $this->createFormBuilder($addClass)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('number', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('isAvailable', ChoiceType::class, array('choices' => array('Yes' => 1, 'No' => 0)))
            ->add('save', SubmitType::class, array('label' => 'Add Class', 'attr'=> array ('class' => 'btn btn-success')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form['name']->getData();
            $number = $form['number']->getData();
            $isAvailable = $form['isAvailable']->getData();

            $addClass->setName($name);
            $addClass->setNumber($number);
            $addClass->setIsActive(1);
            $addClass->setIsAvailable($isAvailable);

            $em = $this->getDoctrine()->getManager();
            $em->persist($addClass);
            $em->flush();

            $this->addFlash(
                'notice',
                'Class Added'
            );
            return $this->redirectToRoute('add_class');
        }
        return $this->render('io/add_class.html.twig', array(
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/add_lecturer", name="add_lecturer")
     */
    public function addLecturerAction(Request $request)
    {
        $addLecturer= new AddLecturer();

        $form = $this->createFormBuilder($addLecturer)
            ->add('firstName', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('lastName', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('degree', ChoiceType::class, array('choices' => array('Master' => 'Master', 'Engineer' => 'Engineer', 'Doctor' => 'Doctor')))
            ->add('save', SubmitType::class, array('label' => 'Add Lecturer', 'attr'=> array ('class' => 'btn btn-success')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fistName = $form['firstName']->getData();
            $lastName = $form['lastName']->getData();
            $degree = $form['degree']->getData();

            $addLecturer->setfirstName($fistName);
            $addLecturer->setLastName($lastName);
            $addLecturer->setDegree($degree);
            $addLecturer->setIsActive(1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($addLecturer);
            $em->flush();

            $this->addFlash(
                'notice',
                'Lecturer'
            );
            return $this->redirectToRoute('add_lecturer');
        }
        return $this->render('io/add_lecturer.html.twig', array(
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/add_subject", name="add_subject")
     */
    public function addSubjectAction(Request $request)
    {
        $addSubject= new AddSubject();

        $form = $this->createFormBuilder($addSubject)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Add Subject', 'attr'=> array ('class' => 'btn btn-success')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form['name']->getData();


            $addSubject->setName($name);

            $em = $this->getDoctrine()->getManager();
            $em->persist($addSubject);
            $em->flush();

            $this->addFlash(
                'notice',
                'Lecturer'
            );
            return $this->redirectToRoute('add_subject');
        }
        return $this->render('io/add_subject.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
