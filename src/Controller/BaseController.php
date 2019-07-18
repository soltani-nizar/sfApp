<?php
namespace App\Controller;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
class BaseController extends AbstractController
{

    /**
     *
     * @Route("/", methods={"GET","HEAD"}, name="accueil")
     */

    public function getAccueil()
    {

        return new Response('Bienvenue');
    }


    /**
     *
     * @Route("articles", methods={"GET","HEAD"}, name="articles")
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"article"})
     */
    public function getArticles()
    {
        $article = new Article();
        $article->setTitle('article1');
        $article2 = new Article();
        $article2->setTitle('article2');

        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->persist($article2);
      //  $this->getDoctrine()->getManager()->flush();

        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
        return $articles;
    }


}