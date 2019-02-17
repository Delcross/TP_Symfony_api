<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;
use App\Repository\UserRepository;

class UserController extends FOSRestController
{
    /**
     * @Rest\Get("/api/users/{email}")
     */
    public function getApiUser(User $user){}

    /**
     * @Rest\Get("/api/users")
     */
    public function getApiUsers(){
        $users = $this->userRepository ->findAll();
        return $this->view($users);
    }

    /**
     * @Rest\Post("/api/users")
     */
    public function postApiUser(User $user){}
    
    /**
     * @Rest\Patch("/api/users/{email}")
     */
    public function patchApiUser(User $user){}

    /**
     * @Rest\Delete("/api/users/{email}")
     */
    public function deleteApiUser(User $user){}
}
