<?php

namespace AllForKids\TransportBundle\Controller;

use AllForKids\TransportBundle\Entity\Covoiturage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Covoiturage controller.
 *
 */
class CovoiturageController extends Controller
{
    /**
     * Lists all covoiturage entities.
     *
     */
    public function testAction()
    {
        return $this->render('@Transport/Formulaire/Formulaire.html.twig');
    }
    public function AfficheAction()
    {
        $em = $this->getDoctrine()->getManager();

        $covoiturages = $em->getRepository('TransportBundle:Covoiturage')->findAll();

        return $this->render('@Transport/covoiturage/index.html.twig', array(
            'covoiturages' => $covoiturages,
        ));
    }

    /**
     * Creates a new covoiturage entity.
     *
     */
    public function AddCovoituraage2Action(Request $request)
    {
        $covoiturage = new Covoiturage();
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $covoiturage->setIduser($request->get('IdUser'));
            $covoiturage->setDepart($request->get('Depart'));
            $covoiturage->setArriver($request->get('Arriver'));
            $covoiturage->setDateoffre($request->get('Date'));
            $covoiturage->setHorraire($request->get('Time'));
            $covoiturage->setNbrplacedispo($request->get('Nbr'));
            $em->persist($covoiturage);
            $em->flush();

            return $this->redirectToRoute('covoiturage_show', array('id' => $covoiturage->getId()));
        }

        return $this->render('TransportBundle:covoiturage:new.html.twig', array(
            'covoiturage' => $covoiturage,

        ));
    }
   /** public function AddCovoituraageAction(Request $request)
    {
        $covoiturage = new Covoiturage();
        $form = $this->createForm('AllForKids\TransportBundle\Form\CovoiturageType', $covoiturage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($covoiturage);
            $em->flush();

            return $this->redirectToRoute('covoiturage_show', array('id' => $covoiturage->getId()));
        }

        return $this->render('TransportBundle:covoiturage:new.html.twig', array(
            'covoiturage' => $covoiturage,
            'form' => $form->createView(),
        ));
    }*/

    /**
     * Finds and displays a covoiturage entity.
     *
     */
    public function showCovoiturageAction(Covoiturage $covoiturage)
    {
        $deleteForm = $this->createDeleteForm($covoiturage);

        return $this->render('TransportBundle:covoiturage:show.html.twig', array(
            'covoiturage' => $covoiturage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing covoiturage entity.
     *
     */
    public function ModifierAction(Request $request, Covoiturage $covoiturage)
    {
        $deleteForm = $this->createDeleteForm($covoiturage);
        $editForm = $this->createForm('AllForKids\TransportBundle\Form\CovoiturageType', $covoiturage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('covoiturage_index', array('id' => $covoiturage->getId()));
        }

        return $this->render('@Transport/covoiturage/edit.html.twig', array(
            'covoiturage' => $covoiturage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
   /** public function ModifierAction(Request $request, Covoiturage $covoiturage)
    {
        $deleteForm = $this->createDeleteForm($covoiturage);
        $editForm = $this->createForm('AllForKids\TransportBundle\Form\CovoiturageType', $covoiturage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('covoiturage_index', array('id' => $covoiturage->getId()));
        }

        return $this->render('@Transport/covoiturage/edit.html.twig', array(
            'covoiturage' => $covoiturage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a covoiturage entity.
     *
     */
    public function deleteAction(Request $request, Covoiturage $covoiturage)
    {
        $form = $this->createDeleteForm($covoiturage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($covoiturage);
            $em->flush();
        }

        return $this->redirectToRoute('covoiturage_index');
    }

    /**
     * Creates a form to delete a covoiturage entity.
     *
     * @param Covoiturage $covoiturage The covoiturage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Covoiturage $covoiturage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('covoiturage_delete', array('id' => $covoiturage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
