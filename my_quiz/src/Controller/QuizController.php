<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Categorie;
use App\Entity\Question;

class QuizController extends AbstractController
{
    /**
     * @Route("/quiz", name="quiz")
     */
    public function index()
    {
        // return $this->render('quiz/index.html.twig', [
        //     'controller_name' => 'QuizController',
        // ]);

        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
    	
        return $this->render('quiz/index.html.twig',array('categories' => $categories));
    }

     /**
     * @Route("/quiz/{id}/{idCategorie}", name="categorie_show")
     */
    public function show($id, $idCategorie){
    	$questions = $this->getDoctrine()->getRepository(Question::class)->findOneById($id);

        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findOneById($idCategorie);

    	return $this->render('quiz/show.html.twig', 
            array(
                'question' => $questions,
                'categories' => $categories,
            ));
    }
}
