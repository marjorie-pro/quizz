<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Categorie;
use App\Entity\Question;
use App\Entity\Reponse;

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
     * @Route("/quiz/{idCategorie}/{id}", name="categorie_show")
     */
    public function show($idCategorie, $id){
    	$questions = $this->getDoctrine()->getRepository(Question::class)->findOneById($idCategorie);

        $questions = $this->getDoctrine()->getRepository(Question::class)->findOneById($id);

        // $reponses = $this->getDoctrine()->getRepository(Reponse::class)->findOneById($idQuestion);

    	return $this->render('quiz/show.html.twig', 
            array(
                'question' => $questions,
                // 'reponses' => $reponses,
            ));
    }
}
