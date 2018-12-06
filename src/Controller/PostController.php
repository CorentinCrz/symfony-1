<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/post")
 */
class PostController extends AbstractController
{
    /**
     * @Route("/", name="post")
     */
    public function index()
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->findByPublished();
        return $this->render('post/index.html.twig', [
            'posts' => $post,
        ]);
    }

    /**
     * @Route("/{id}", name="post_show")
     */
    public function show($id)
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);

        if (!$post || !$post->getPublished()) {
            throw $this->createNotFoundException('The product does not exist');
        }

        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }
}
