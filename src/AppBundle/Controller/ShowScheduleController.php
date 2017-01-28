<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 16.12.16
 * Time: 13:26
 */

namespace AppBundle\Controller;


use AppBundle\Entity\AddLecturer;
use AppBundle\Entity\Timetable;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ShowScheduleController
 * https://github.com/robmonie/jquery-week-calendar/wiki
 * @package AppBundle\Controller
 * @Route("/show")
 */

class ShowScheduleController extends Controller {
    /**
     * @Route("/eventsjson/{slug}/{id}", name="show_eventsjson", requirements={"slug": "group|classroom|lecturer"})
     */

    public function getEventsFiltered(Request $request, $slug = null, $id = null) {
        switch ($slug) {
            case 'group':
                $timetable = $this->getDoctrine()->getRepository('AppBundle:Timetable')->findBy(['addGroup' => $id]);
                break;
            case 'classroom':
                $timetable = $this->getDoctrine()->getRepository('AppBundle:Timetable')->findBy(['addClass' => $id]);
                break;
            case 'lecturer':
                $timetable = $this->getDoctrine()->getRepository('AppBundle:Timetable')->findBy(['addLecturer' => $id]);
                break;
            default:
                $timetable = [];
                //$this->getDoctrine()->getRepository('AppBundle:Timetable')->findAll();
        }

        $return = array();

        foreach ($timetable as $t) {
            $return[] = [
                'id' => $t->getId(),
                'start' => date('c', $t->getStartTime()->setDate(2007, 1, $t->getDayOfWeek())->getTimestamp()),
                'end' => date('c', $t->getEndTime()->setDate(2007, 1, $t->getDayOfWeek())->getTimestamp()),
                'title' => '<b>'.$t->getAddSubject()->getName().'</b><br/>'.
                    $t->getAddLecturer()->getFirstName().' '.$t->getAddLecturer()->getLastName().'<br>'.
                    $t->getAddGroup()->getName().'<br/>'.
                    $t->getAddClass()->getName()
            ];
        }

        return new JsonResponse($return);
    }



//    /**
//     * @ Route("/eventsjson", name="show_eventsjson")
//     */
//    public function getEvents(Request $request)
//    {
//        //{"id":1, "start":"2009-05-10T13:15:00.000+10:00", "end":"2009-05-10T14:15:00.000+10:00", "title":"Lunch with Mike"},
//        $return = array();
//
//        $timetable = $this->getDoctrine()->getRepository('AppBundle:Timetable')->findAll();
//
//        foreach ($timetable as $t) {
//            $return[] = [
//                'id' => $t->getId(),
//                'start' => date('c', $t->getStartTime()->setDate(2007, 1, $t->getDayOfWeek())->getTimestamp()),
//                'end' => date('c', $t->getEndTime()->setDate(2007, 1, $t->getDayOfWeek())->getTimestamp()),
//                'title' => $t->getAddSubject()->getName().'<br/>'.
//                    $t->getAddLecturer()->getFirstName().' '.$t->getAddLecturer()->getLastName().'<br>'.
//                    $t->getAddGroup()->getName().'<br/>'.
//                    $t->getAddClass()->getName()
//            ];
//        }
//
////        $id = 1;
//
////        $a[] = array(
////            'id' => $id++,
////            'start' => date('c', $this->getDate(13, 15, DaysOfWeek::Monday)),
////            'end' => date('c', $this->getDate(15, 15, DaysOfWeek::Monday)),
////            'title' => 'Inż int<br/>grupa 1<br/>dr hab. ...');
////
////        $a[] = array(
////            'id' => $id++,
////            'start' => date('c', $this->getDate(16, 15, DaysOfWeek::Monday)),
////            'end' => date('c', $this->getDate(17, 15, DaysOfWeek::Monday)),
////            'title' => 'zajecia 2');
////
////        $a[] = array(
////            'id' => $id++,
////            'start' => date('c', $this->getDate(12, 15, DaysOfWeek::Monday)),
////            'end' => date('c', $this->getDate(18, 15, DaysOfWeek::Monday)),
////            'title' => 'zajecia 3');
//
//
//        return new JsonResponse($return);
//    }

//    /**
//     * Return time object for specified hour, minute and day in week
//     * @param $h int hour
//     * @param $m int hour
//     * @param $day number of the day
//     */
//    private function getDate($h, $m, $day) {
//        return mktime($h, $m, 0, 1, $day, 2007);
//    }

    /**
     * @ Route("/", name="show_root")
     * @Route("/{slug}/{id}", name="show_root", requirements={"slug": "group|classroom|lecturer"})
     */
    public function indexAction(Request $request, $slug = null, $id = null) {
        //http://symfony.com/doc/current/form/dynamic_form_modification.html#form-events-submitted-data
//        $form = $this->createForm(TimetableViewType::class);
//        $form->handleRequest($request);

        $builder = $this->createFormBuilder()
            ->add('type', ChoiceType::class, array('choices'  => array(
                'Classroom' => 'classroom',
                'Group' => 'group',
                'Lecturer' => 'lecturer'),
                'placeholder' => '',
                'data' => $slug,
                'label' => 'Show timetable for:'));

        if ($slug !== null) {
            switch ($slug) {
                case 'classroom':
                    $builder->add('options', EntityType::class, array(
                        'class'       => 'AppBundle:AddClass',
                        'placeholder' => '',
                        'choice_label' => 'name',
                        'label' => false,
                        'data' => $id === null ? '' : $this->getDoctrine()->getRepository('AppBundle:AddClass')->find($id)
                    ));
                    break;
                case 'group':
                    $builder->add('options', EntityType::class, array(
                        'class'       => 'AppBundle:AddGroup',
                        'placeholder' => '',
                        'choice_label' => 'name',
                        'label' => false,
                        'data' => $id === null ? '' : $this->getDoctrine()->getRepository('AppBundle:AddGroup')->find($id)
                    ));
                    break;
                case 'lecturer':
                    $builder->add('options', EntityType::class, array(
                        'class'       => 'AppBundle:AddLecturer',
                        'placeholder' => '',
                        'choice_label' => function (AddLecturer $lecturer) {return $lecturer->getFirstName()." ".$lecturer->getLastName();},
                        'label' => false,
                        'data' => $id === null ? '' : $this->getDoctrine()->getRepository('AppBundle:AddLecturer')->find($id)
                    ));
                    break;
                default:
            }

        }

//            ->setAction($this->generateUrl('show_root'))


        $form = $builder->getForm();



        // replace this example code with whatever you need
//        $this->redirectToRoute('');
        return $this->render('io/show_schedule.html.twig', ['slug' => $slug, 'id' => $id, 'form' => $form->createView()]);
    }

    /**
     * @Route("/edit/{id}", name="show_edit")
     * @ Route("/{slug}/{id_}/edit/{id}", name="show_edit", requirements={"slug": "group|classroom|lecturer"})
     */

    public function editAction(Request $request, Timetable $timetable) {
//        $slug = null;
//        $id_ = null;
        //http://intelligentbee.com/blog/2015/01/19/symfony-2-forms-and-ajax/

        $form = $this->createFormBuilder($timetable, ['attr' => ['id' => 'editFormAjax']])
            ->setAction($this->generateUrl('show_edit', ['id' => $timetable->getId()]))
            ->add('addsubject', EntityType::class, ['label' => 'Subject', 'choice_label' => 'name', 'class' => 'AppBundle\Entity\AddSubject'])
            ->add('addlecturer', EntityType::class, ['label' => 'Lecturer', 'choice_label' => function (AddLecturer $lecturer) {
                return $lecturer->getFirstName()." ".$lecturer->getLastName();}, 'class' => 'AppBundle\Entity\AddLecturer'])
            ->add('addgroup', EntityType::class, ['label' => 'Group', 'choice_label' => 'name', 'class' => 'AppBundle\Entity\AddGroup'])
            ->add('addclass', EntityType::class, ['label' => 'Classroom', 'choice_label' => 'name', 'class' => 'AppBundle\Entity\AddClass'])

            ->add('dayOfWeek', ChoiceType::class, array('choices'  => array(
                'Monday' => 1,
                'Tuesday' => 2,
                'Wednesday' => 3,
                'Thursday' => 4,
                'Friday' => 5,
                'Saturday' => 6,
                'Sunday' => 7,),))

            ->add('startTime', TimeType::class, array('input'  => 'datetime', 'widget' => 'choice', 'with_seconds' => false))
            ->add('endTime', TimeType::class, array('input'  => 'datetime', 'widget' => 'choice', 'with_seconds' => false))


            ->add('save', SubmitType::class, array('label' => 'Save', 'attr' => ['class' => 'btn-primary']))
            ->getForm();


        // handle Ajax
        $form->handleRequest($request);

        if ($request->isXmlHttpRequest() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($timetable);
            $em->flush();

            //$this->addFlash('info', 'Edytowano rekord.');
            return new JsonResponse(array('message' => 'Success!'), 200);

//            return $this->redirectToRoute("software");
        }

        return $this->render('io/show_schedule_edit_modal.html.twig', array('form' => $form->createView()));//
        //, 'slug' => $slug, 'id' => $id_));
    }

    /**
     * @Route("/delete/{id}", name="show_delete")
     */

    public function deleteAction(Request $request, Timetable $timetable) {
        // http://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap
        $em = $this->getDoctrine()->getManager();
        $em->remove($timetable);
        $em->flush();

        return new JsonResponse(array('message' => 'Success!'), 200);
    }



}
//
//class TimetableViewType extends AbstractType  {
//    public function buildForm(FormBuilderInterface $builder, array $options) {
//        $builder
//            ->add('type', ChoiceType::class, array('choices'  => array(
//                'Classroom' => 1,
//                'Group' => 2,
//                'Lecturer' => 3),
//                'placeholder' => ''));
//
////            ->setAction($this->generateUrl('show_root'))
//
//        $builder->addEventListener(
//            FormEvents::PRE_SET_DATA,
//            function (FormEvent $event) {
//                $form = $event->getForm();
//
//                // this would be your entity, i.e. SportMeetup
//                $data = $event->getData();
//                //$aa = $event->getForm()->get('type');
//
////                    var_dump($data);
////                    $data->getType();
//
//                switch ($data) {
//                    case 1:
//                        $form->add('test', TextType::class, array('data' => '1'));
//                        //$options =  $this->getDoctrine()->getRepository('AppBundle:AddClass')->findAll();
//                        $form->add('options', EntityType::class, array(
//                            'class'       => 'AppBundle:AddClass',
//                            'placeholder' => '',
//                            'choice_label' => 'name',
//                        ));
//                        break;
//                    case 2:
//                        $form->add('test', TextType::class, array('data' => '2'));
//                        break;
//                    case 3:
//                        $form->add('test', TextType::class, array('data' => '3'));
//                        break;
//                    case NULL:
//                        $form->add('test', TextType::class, array('data' => 'null'));
//                        break;
//                    default:
//                        $form->add('test', TextType::class, array('data' => 'default'));
//                }
//
//            }
//        );
//    }
//}

//abstract class DaysOfWeek  {
//    const Sunday = 7;
//    const Monday = 1;
//    const Tuesday = 2;
//    const Wednesday = 3;
//    const Thursday = 4;
//    const Friday = 5;
//    const Saturday = 6;
//}