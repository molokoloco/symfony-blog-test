<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;

class ApiPostController extends AbstractController
{
    /**
     * @Route("/api/post", name="app_api_post_index", methods={"GET"})
     */
    public function index(): Response //PostRepository $PostRepository, EntityManagerIntefrace $em, ValidatorInterface $validator
    {
        $repo = $this->getDoctrine()->getRepository(Post::class);
        $posts = $repo->findAll();
        return $this->json($posts, 200, [], ['groups' => 'post:read']); // Ref circulaires
    }

    public function store(Request $request, SerializeInterface $serializer): Response
    {
        try {
            $post = $serializer->deserialize($request->getContent(), Post::class, 'json');
            $post->setCreatedAt(new \DateTime());
            $errors = $validator->$validator($post);
            if (count($errors) > 0) {
                return $this->json($errors, 400);
            }
            else {
                $em->persist($post);
                $em->flush();
                return $this->json($post, 201, [], ['groups' => 'post:read']);
            }
        }
        catch(NotEncodableValueException $e) {
            return $this->json([
                'status' => 400,
                'message' => $e->getMessage()
            ], 400);
        }
    }
}