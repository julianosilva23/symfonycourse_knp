<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
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
            'slug' => $slug,
            'comments' => $comments,
            
        ]);
        
    }
    
    /**
    * @Route("/news/{slug}/heart", name="article_toggle_heart", methodS={"POST"})
    */
    public function toogleArticleHeart()
    {
        // TODO - actually heart / unheart the article!
        return new JsonResponse(['hearts' => rand(5, 100)]);
    }
}
