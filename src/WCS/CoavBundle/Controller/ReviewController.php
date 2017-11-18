<?php

namespace WCS\CoavBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WCS\CoavBundle\WCSCoavBundle;


/**
 * Class ReviewController
 *
 * @Route("review")
 */
class ReviewController extends Controller
{
    /**
     * @Route("/", name="review_index")
     *
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reviews = $em->getRepository('WCSCoavBundle:Review')->findAll();

        return $this->render('review/index.html.twig', array(
            'reviews' => $reviews
        ));
    }

    /**
     * @Route("/new", name="review_new")
     *
     * @Method({"GET", "POST"})
     */
    public function newAction()
    {
        // A construire...

        return $this->render('review/new.html.twig', array());
    }

}
