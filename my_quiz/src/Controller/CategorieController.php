<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Categorie;
use App\Entity\Question;


class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index()
    {
    	$categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
    	
        return $this->render('categorie/index.html.twig',array('categories' => $categories));
    }

    /**
     * @Route("/categorie/{id}", name="categorie_show")
     */
    public function show($id){
    	$questions = $this->getDoctrine()->getRepository(Question::class)->find($id);
    	return $this->render('categorie/show.html.twig', array('question' => $questions));
    }

}
