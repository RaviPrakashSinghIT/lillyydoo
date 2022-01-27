<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\lillydoo\AddressBook;
use Doctrine\ORM\EntityManagerInterface;



class AddressBookController extends Controller
{
    /**
     * @Route("/contactDeatils", name="contactDeatils")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('addressBook/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
