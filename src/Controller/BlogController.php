<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/blog', name: 'blog')]
class BlogController extends AbstractController
{


    #[Route('', name: '_index')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'a' => 'blogger',
        ]);
    }

    #[Route('/test/{age<\d+>?0}', name: '_TsetAge')]
    public function testAge($age): Response
    {
        return $this->render('blog/testAge.html.twig', [
            'age' => $age
        ]);
    }

    #[Route('/users', name: '_users')]
    public function users(): Response
    {
        $users = [ 
            [ 'name'=> 'foulen' , 'age'=> 20] ,
            [ 'name'=> 'omar' , 'age'=> 90] ,
            [ 'name'=> 'aziz' , 'age'=> 40] 
        ];
        return $this->render('blog/users.html.twig', [
            'users' => $users
        ]);
    }

    #[Route('/article/{auteur}', name: '_article')]
    public function article($auteur = ''): Response
    {

        $Articles = [
            ['titre' => 'Le premier article', 'resume' => 'Résumé du premier article', 'date_publication' => '2024-01-01', 'auteur' => 'Meriam'], 
            ['titre' => 'Le deuxième article ', 'resume' => 'Résumé du deuxième article', 'date_publication' => '2022-05-15', 'auteur' => 'Ahmed'], 
            ['titre' => 'Le troisième article ', 'resume' => 'Résumé du troisième resume', 
            'date_publication' => '2020-03-10', 'auteur' => 'Nidhal'],
            ];

    
        
        return $this->render('blog/article.html.twig', [
            'articles' => $Articles,
            'auteur' => $auteur
            
        ]);
    }

    
}
