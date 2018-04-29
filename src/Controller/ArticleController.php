<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
	/**
	* @Route("/", name="app_homepage")
	*/
    public function homepage()
    {
    	return $this->render('article/homepage.html.twig');
        
    }

    /**
	* @Route("/news/{slug}", name="article_show")
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
