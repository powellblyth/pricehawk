<?php
// src/AppBundle/Controller/RegistrationController.php
namespace Pricehawk\PricereaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Pricehawk\PricereaderBundle\Entity\Pricesource;

class newSourceController extends Controller
{
    /**
     * @Route("/create", name="source_creation")
     */
    public function createAction(Request $request)
    {
        // 1) build the form
        $user = new Pricesource();
        $form = $this->createForm(Pricesource::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
			// 4) save the Connction!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('replace_with_some_route');
        }

        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );
    }
}