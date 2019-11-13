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
        $cat = $this->getDoctrine()->getRepository(Question::class)->findByIdCategorie();
    	return $this->render('question/index.html.twig', array('questions' => $questions, 'cats' => $cat));
    }

}
