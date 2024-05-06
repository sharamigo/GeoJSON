<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;


/**
 * @Route("/api/airport")
 */
#[Route("/api/airport", "api_airport")]
class AirportController extends AbstractController
{
   
    /**
     * @Route("/index", name="app_airport", methods={"GET"})
     */
    //#[Route("/index", "app_airport", methods=["GET"])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AirportController.php',
        ]);
    }


    /**
     * @Route("/{id}", name="airportdata_show", methods={"GET"})
     */
    //#[Route("/{id}", "airpodata_show", methods=["GET"])]
    public function show(EntityManagerInterface $entityManager, int $id): Response
    {
        $airport = $entityManager->getRepository(Airports::class)->find($id);

        if (!$airport) {
            throw $this->createNotFoundException(
                '[Airport] No data found for id '.$id
            );
        }

        // return new Response('Check out this great product: '.$product->getName());

        return $this->json($airport);
    }

   
    /**
     * @Route("/all", name="airportdata_show_all", methods={"GET"})
     */
    //#[Route("/all", "airportdata_show_all", methods=["GET"])]
    public function showAll(EntityManagerInterface $entityManager): Response
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
            SELECT json_build_object('type', 'FeatureCollection', 'features', json_agg(ST_ASGeoJson(*)) FROM airports 
            ORDER BY scalerank ASC
            ";

        $resultSet = $conn->executeQuery($sql);

        return $resultSet;

      
    }
}
