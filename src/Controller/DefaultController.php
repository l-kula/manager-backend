<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

/**
 * Class DefaultController.
 **/
class DefaultController
{
    /**
     * @Route("/api", methods={"GET"})
     *
     * @OA\Response(
     *     response=200,
     *     description="Return Hello World"
     * )
     *
     * @OA\Parameter(
     *     name="id",
     *     in="query",
     *     @OA\Schema(type="string")
     * )
     */
    public function index(): Response
    {
        return new Response("Hello World");
    }
}