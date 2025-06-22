<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    #[Route('/api/texts', name: 'get_texts')]
    public function index(): JsonResponse
    {
        $sql = 'SELECT content FROM texts LIMIT 1';
        $result = $this->connection->fetchOne($sql);

        if (!$result) {
            return $this->json(['message' => 'No messages found in the database!']);
        } else {
            $result = 'System operational, database response: ' . $result;
            return $this->json(['message' => $result]);
        }
    }
}