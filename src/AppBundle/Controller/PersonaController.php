<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/** importante  usar las referencias **/
use AppBundle\Entity\Persona;
use AppBundle\Form\PersonaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

/**
 * Persona controller.
 *
 */
class PersonaController extends Controller
{
    /**
     * Lists all persona entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personas = $em->getRepository('AppBundle:Persona')->findAll();



        return $this->render('AppBundle:Persona:index.html.twig', array(
            'personas' => $personas,
        ));
    }

    /**
     * Creates a new persona entity.
     *
     */
    public function newAction(Request $request)
    {
        $persona = new Persona();
        $form = $this->createForm('AppBundle\Form\PersonaType', $persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $nextAction = $form->get('saveAndAdd')->isClicked()
//                'task_new'
//                'task_success'
                   if ($form->get('saveAndAdd')->isClicked()
                      return $this->redirect("www.google.com"))

            return $this->redirectToRoute('Persona_lista');
        }

        return $this->render('AppBundle:Persona:new.html.twig', array(
            'persona' => $persona,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/lista", name="lista")
     */
    public function listaAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Persona');

        // recupero *todas* las personas
        $personas = $repository->findAll();

        return $this->render('AppBundle:Persona:lista.html.twig', array("Personas"=> $personas));

    }


     /**
     * @Route("/{idPersona}/edit", requirements={"idPersona": "\d+"}, name="editar")
     *
     */
    public function editAction(Persona $persona, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(PersonaType::class, $persona);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //Guardar el usuario!
            $em = $this->getDoctrine()->getManager();
            $em->persist($persona);
            $em->flush();

            $repository = $this->getDoctrine()->getRepository('AppBundle:Persona');

            // recupero *todas* las personas
            $persona = $repository->findAll();

            return $this->redirectToRoute('lista', array("persona"=> $persona));
        }

        return $this->render('AppBundle:Persona:editar.html.twig', [
            'persona' => $persona,
            'form' => $form->createView(),
        ]);

    }

     /**
     * @Route("/{idPersona}/delete", requirements={"idPersona": "\d+"}, name="eliminar")
     *
     */
    public function deleteAction(Request $request, Persona $persona)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(PersonaType::class, $persona);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($persona);
            $em->flush();

            return $this->redirectToRoute('lista', array("Personas"=> $persona));
        }


    }

}
