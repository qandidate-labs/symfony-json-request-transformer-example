<?php

namespace Qandidate\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return new JsonResponse(array('name' => $name));
    }

    /**
     * @Route("/post")
     * @Template()
     */
    public function postAction(Request $request)
    {
        return new JsonResponse(array('foo' => $request->request->get('foo')));
    }
}
