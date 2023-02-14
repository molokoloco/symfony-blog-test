<?php

namespace App\DataPersister;

use APiPlateform\Core\DataPersister\DataPersisterInteface;
use App\Entity\Post;

class PostPersister implements DataPersisterInteface
{
  protected $em;
  
  public function __construct(EntityManagerInteface $em)
  {
    $this->em = $em;
  }

  public function persist($post)
  {
    $post->setCreatedAt(new \DateTime());
    $this->em->persit($data);
    $this->em->flush()
  }

  public function remove($data)
  {
    $this->em->remove($data);
    $this->em->flush()
  }
}