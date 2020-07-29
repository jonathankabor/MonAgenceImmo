<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/admin/picture")
 */
class AdminPictureController extends  AbstractController
{

    /**
     * @Route("/{id}", name="admin.picture.delete", methods="DELETE")
     * @param Request $request
     * @param Picture $picture
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Picture $picture, Request $request)
    {
        $propertyId = $picture->getProperty()->getId();
        //$data = json_decode($request->getContent(), true);
        if ($this->isCsrfTokenValid('delete' .$picture->getId(), $request->get('_token')))
            //if ($this->isCsrfTokenValid('delete' . $picture->getId(), $data['_token']))
        {

            $manager = $this->getDoctrine()->getManager();
            $manager->remove($picture);
            $manager->flush();
            //return new JsonResponse(['success'=> 1],202);
        }
        return $this->redirectToRoute('admin.property.edit', ['id'=> $propertyId]);

        //return new JsonResponse(['error' => 'Token invalide'],400);


    }
}