<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

    /**
     * @Route("/lucky/{name}")
     */
    public function name($name)
    {
        $notes = [
            'Marek made some note',
            'Marek made some note2',
            'Marek made some note3',
        ];

        return $this->render('lucky/name.html.twig', array(
            'name' => $name,
            'notes' => $notes,
        ));
    }
}