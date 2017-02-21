<?php

namespace GOL\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GOL\ContentBundle\Entity\Profile;

/**
 * Perfil Class, is the main Class that manage all profiles
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class PerfilController extends Controller {

    /**
     * Display all registered profiles in DB
     * @return render
     */
    public function perfilesAction() {
        $dataProfile = $this->getAllProfiles();
        return $this->render('GOLContentBundle:Perfil:perfiles.html.twig', array(
                    'dataProfile' => $dataProfile,
                    'env' => $this->getEnv(),
        ));
    }

    /**
     * Display all profile details from a profile Id
     * @param integer $profileId
     * @return render
     */
    public function perfilAction($profileId) {
        $dataProfile = $this->getProfileById($profileId);
        return $this->render('GOLContentBundle:Perfil:perfil.html.twig', array(
                    'dataProfile' => $dataProfile,
                    'env' => $this->getEnv(),
        ));
    }

    /**
     * Creates a new row for profile, get form data and save it in DB
     * @param Request $request
     * @return render
     */
    public function crearPerfilAction(Request $request) {
        $createResponse = $this->createProfile($request);
        if ($createResponse['status'] == 'ok')
            return $this->redirect($this->getEnv() . 'perfiles');

        return $this->render('GOLContentBundle:Perfil:form-perfil.html.twig', array(
            'env' => $this->getEnv(),
        ));
    }

    /**
     * Get new data from form and update if has changes
     * @param integer $profileId
     * @param Request $request
     * @return render
     */
    public function editarPerfilAction($profileId, Request $request) {
        $dataProfile = $this->getProfileById($profileId);
        
        if ($request->getMethod() == 'POST') {
            $editResponse = $this->editProfile($profileId, $request);
            return $this->redirect($this->getEnv() . 'perfiles');
        }

        return $this->render('GOLContentBundle:Perfil:form-perfil.html.twig', array(
                    'dataProfile' => $dataProfile,
                    'env' => $this->getEnv(),
        ));
    }
    
    /**
     * Delete a row from DB filtered by profile Id
     * @param integer $profileId
     * @return type
     */
    public function eliminarPerfilAction($profileId) {
        $deleteResponse = $this->deleteProfile($profileId);
        if ($deleteResponse['status'] == 'ok')
            return $this->redirect($this->getEnv() . 'perfiles');

        return $this->render('GOLContentBundle:Perfil:form-perfil.html.twig');
    }

    // ========== Funciones genéricas ===============

    /**
     * Get all data profile from DB
     * @return array
     */
    public function getAllProfiles() {
        $repository = $this->getDoctrine()->getManager();
        $profilesDB = $repository->getRepository('GOLContentBundle:Profile')->findAll();
        
        echo "<pre>";
        var_dump($profilesDB);
        die;

        foreach ($profilesDB as $profileDB) {
            $dataProfile[] = array(
                'id' => $profileDB->getId(),
                'image' => $profileDB->getImage(),
                'name' => $profileDB->getName(),
                'phone' => $profileDB->getPhone(),
                'email' => $profileDB->getEmail(),
                'profile' => $profileDB->getProfile(),
                'profession' => $profileDB->getProfession(),
                'hobby1' => $profileDB->getHobby1(),
                'percent1' => $profileDB->getPercent1(),
                'hobby2' => $profileDB->getHobby2(),
                'percent2' => $profileDB->getPercent2(),
                'hobby3' => $profileDB->getHobby3(),
                'percent3' => $profileDB->getPercent3(),
            );
        }

        return $dataProfile;
    }

    /**
     * Get profile detail for a profile Id
     * @param integer $profileId
     * @return array
     */
    public function getProfileById($profileId) {
        $filtros = array('id' => $profileId);
        $repository = $this->getDoctrine()->getManager();
        $profileDB = $repository->getRepository('GOLContentBundle:Profile')->findOneBy($filtros);

        $dataProfile = array(
            'id' => $profileDB->getId(),
            'image' => $profileDB->getImage(),
            'name' => $profileDB->getName(),
            'phone' => $profileDB->getPhone(),
            'email' => $profileDB->getEmail(),
            'profile' => $profileDB->getProfile(),
            'profession' => $profileDB->getProfession(),
            'hobby1' => $profileDB->getHobby1(),
            'percent1' => $profileDB->getPercent1(),
            'hobby2' => $profileDB->getHobby2(),
            'percent2' => $profileDB->getPercent2(),
            'hobby3' => $profileDB->getHobby3(),
            'percent3' => $profileDB->getPercent3(),
        );

        return $dataProfile;
    }

    /**
     * Register a new row in DB from form
     * @param Request $request
     * @return array
     */
    public function createProfile($request) {
        if ($request->getMethod() == 'POST') {
            $profile = new Profile();

            if ($request->get('imageUpload') !== NULL) {
                $file = fopen(__DIR__ . "/../../../../web/uploads/img/profile" . "/" . $request->get('imageUpload'), "w+");
                fwrite($file, $request->get('fileContent'));
                fclose($file);
                
                $profile->setImage($request->get('imageUpload'));
            } else {
                foreach ($request->files as $uploaded) {
                    $fileName = $uploaded->getClientOriginalName();
                    $file = $uploaded->move(__DIR__ . "/../../../../web/uploads/img/profile", "/" . $fileName);
                    
                    $profile->setImage($fileName);
                }
            }
            
            $profile->setName($request->get('name'));
            $profile->setProfession($request->get('profession'));
            $profile->setPhone($request->get('phone'));
            $profile->setEmail($request->get('email'));
            $profile->setProfile($request->get('profile'));
            $profile->setHobby1($request->get('hobby1'));
            $profile->setPercent1($request->get('percent1'));
            $profile->setHobby2($request->get('hobby2'));
            $profile->setPercent2($request->get('percent2'));
            $profile->setHobby3($request->get('hobby3'));
            $profile->setPercent3($request->get('percent3'));

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($profile);
            $em->flush();
            return array('status' => 'ok');
        }
        return array('status' => 'error');
    }
    
    /**
     * Get data from from and update DB if has changes
     * @param integer $profileId
     * @param Request $request
     * @return array
     */
    public function editProfile($profileId, $request) {
        $filtros = array('id' => $profileId);
        $repository = $this->getDoctrine()->getManager();
        $profileDB = $repository->getRepository('GOLContentBundle:Profile')->findOneBy($filtros);
        
        if ($request->getMethod() == 'POST') {
            if ($request->get('imageUpload') !== NULL || $request->get('image') !== NULL){
                if ($request->get('imageUpload') !== NULL) {
                    $file = fopen(__DIR__ . "/../../../../web/uploads/img/profile" . "/" . $request->get('imageUpload'), "w+");
                    fwrite($file, $request->get('fileContent'));
                    fclose($file);

                    $profileDB->setImage($request->get('imageUpload'));
                } else {
                    foreach ($request->files as $uploaded) {
                        $fileName = $uploaded->getClientOriginalName();
                        $file = $uploaded->move(__DIR__ . "/../../../../web/uploads/img/profile", "/" . $fileName);

                        $profileDB->setImage($fileName);
                    }
                }
            }
            
            $profileDB->setName($request->get('name'));
            $profileDB->setProfession($request->get('profession'));
            $profileDB->setPhone($request->get('phone'));
            $profileDB->setEmail($request->get('email'));
            $profileDB->setProfile($request->get('profile'));
            $profileDB->setHobby1($request->get('hobby1'));
            $profileDB->setPercent1($request->get('percent1'));
            $profileDB->setHobby2($request->get('hobby2'));
            $profileDB->setPercent2($request->get('percent2'));
            $profileDB->setHobby3($request->get('hobby3'));
            $profileDB->setPercent3($request->get('percent3'));

            $repository->flush();
            return array('status' => 'ok');
        }
        return array('status' => 'error');
    }
    
    /**
     * Delete row filtered by profile Id
     * @param integer $profileId
     * @return array
     */
    public function deleteProfile($profileId) {
        $filtros = array('id' => $profileId);
        $repository = $this->getDoctrine()->getManager();
        $profileDB = $repository->getRepository('GOLContentBundle:Profile')->findOneBy($filtros);
        $repository->remove($profileDB);
        $repository->flush();
        return array('status' => 'ok');
    }

    /**
     * Get environment
     * @global type $kernel
     * @return string
     */
    public function getEnv() {
        global $kernel;
        return $kernel->getEnvironment() == "prod" ? "/" : "/app_dev.php/";
    }

}
