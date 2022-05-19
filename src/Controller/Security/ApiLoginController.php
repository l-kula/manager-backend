<?php

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiLoginController extends AbstractController
{
    /**
     * @Route("/api/login", name="api_login", methods={"POST"})
     */
    public function index(): JsonResponse
    {
        $user = $this->getUser();

        if (isset($user)) {
            return $this->json([
                'email' => $user->getEmail(),
            ]);
        }

        return $this->json("Error");
    }
}
