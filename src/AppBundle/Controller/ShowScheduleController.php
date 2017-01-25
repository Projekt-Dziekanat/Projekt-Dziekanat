<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 16.12.16
 * Time: 13:26
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ShowScheduleController
 * @package AppBundle\Controller
 * @Route("/show")
 */

class ShowScheduleController extends Controller {
    /**
     * @Route("/eventsjson/{slug}/{id}", name="show_eventsjson", requirements={"slug": "group|classroom|lecturer"})
     */
    // TODO bez domyślnego?

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
                $timetable = $this->getDoctrine()->getRepository('AppBundle:Timetable')->findAll();
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
        // replace this example code with whatever you need
//        $this->redirectToRoute('');
        return $this->render('io/show_schedule.html.twig', ['slug' => $slug, 'id' => $id]);
    }
}
abstract class DaysOfWeek  {
    const Sunday = 7;
    const Monday = 1;
    const Tuesday = 2;
    const Wednesday = 3;
    const Thursday = 4;
    const Friday = 5;
    const Saturday = 6;
}