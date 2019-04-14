<?php

namespace Schedule\WorkoutBundle\Controller;

use Schedule\WorkoutBundle\Entity\Workout;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", "name=schedule_index")
     * @Template("")
     */
    public function indexAction()
    {
        $workout = new Workout();
    }
}
