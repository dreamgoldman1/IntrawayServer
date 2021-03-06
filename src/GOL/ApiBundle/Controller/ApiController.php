<?php

namespace GOL\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use GOL\ContentBundle\Controller\PerfilController;

/**
 * Api Class, is the listener for third partys
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class ApiController extends Controller
{
    /**
     * Just a testing function
     * @return Response
     */
    public function apiAction()
    {
        return new Response($this->apiGetAllProfilesAction());
    }
    
    /**
     * Return a Json with all profiles registered
     * @return Json
     */
    public function apiGetAllProfilesAction() {
        $repository = $this->getDoctrine()->getManager();
        $dataProfile = PerfilController::getAllProfiles($repository);
        return new Response(json_encode($dataProfile));
    }
    
    /**
     * Return a Json with data filter by profile Id
     * @param integer $profileId
     * @return Json
     */
    public function apiGetProfileByIdAction($profileId) {
        $repository = $this->getDoctrine()->getManager();
        $dataProfile = PerfilController::getProfileById($profileId,$repository);
        return new Response(json_encode($dataProfile));
    }
    
    /**
     * Get the data from POST request and save it in DB
     * @param Request $request
     * @return Json
     */
    public function apiCreateProfileAction(Request $request) {
        $dataProfile = PerfilController::createProfile($request);
        return new Response(json_encode($dataProfile));
    }
    
    /**
     * Get user info and update data is had changes
     * @param integer $profileId
     * @param Request $request
     * @return Json
     */
    public function apiEditProfileAction($profileId, Request $request) {
        $repository = $this->getDoctrine()->getManager();
        $dataProfile = PerfilController::editProfile($profileId, $request, $repository);
        return new Response(json_encode($dataProfile));
    }
    
    /**
     * Delete a row from DB filtered by profile Id
     * @param integer $profileId
     * @return Json
     */
    public function apiDeleteProfileAction($profileId) {
        $repository = $this->getDoctrine()->getManager();
        $dataProfile = PerfilController::deleteProfile($profileId,$repository);
        return new Response(json_encode($dataProfile));
    }
}
