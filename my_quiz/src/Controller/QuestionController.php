<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Question;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question", name="question")
     */
    public function index()
    {
    	$questions = $this->getDoctrine()->getRepository(Question::class)->findAll();
    	return $this->render('question/index.html.twig', array('questions' => $questions));
    }

    // /**
    //  * @Route("/categorie/{id}", name="categorie_show")
    //  */
    // public function show($id){
    // 	$questions = $this->getDoctrine()->getRepository(Question::class)->find($id);
    // 	return $this->render('categorie/show.html.twig', array('question' => $questions));
    // }


}
