<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @Route("/api/trammetro")
 */
#[Route("/api/trammetro", "api_trammetro")]
class TramController extends AbstractController
{
    
    /**
     * @Route("/index", name="app_tram", methods={"GET"})
     */
    //#[Route("/index", "app_tram", methods=["GET"])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TramController.php',
        ]);
    }


    /**
     * @Route("/{id}", name="tramdata_show", methods={"GET"})
     */
    //#[Route("/{id}", "tramdata_show", methods=["GET"])]
    public function show(EntityManagerInterface $entityManager, int $id): Response
    {
        $trammetro = $entityManager->getRepository(TramentoPuntenasd::class)->find($id);

        if (!$trammetro) {
            throw $this->createNotFoundException(
                '[Tramdata] No data found for id '.$id
            );
        }

        // return new Response('Check out this great product: '.$product->getName());

        return $this->json($trammetro);
        
    }

    /**
     * @Route("/all", name="tramdata_show_all", methods={"GET"})
     */
    //#[Route("/all", "tramdata_show_all", methods=["GET"])]
    public function showAll(EntityManagerInterface $entityManager): Response
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
            SELECT json_build_object('type', 'FeatureCollection', 'features', json_agg(ST_ASGeoJson(*)) 
            FROM trammetro_puntenasd 
            ORDER BY id ASC
            ";

        $resultSet = $conn->executeQuery($sql);

        return $resultSet;
      
    }

}
