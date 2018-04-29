<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
	/**
	* @Route("/")
	*/
    public function homepage()
    {
    	return new Response('OMG! MY first page already! Woo !');
        
    }

    /**
	* @Route("/news/{slug}")
	*/
    public function show($slug)
    {
        $comments = [
            'Este é um Comentáro',
            'Que curso mais cansativo',
            'Caramba, que comentário maneiro'
        ];
    	return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', '', $slug)),
            'comments' => $comments,
            
        ]);
        
    }
}
