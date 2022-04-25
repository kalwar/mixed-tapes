<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class MixedTapesController extends AbstractController
{
  #[Route('/', name: 'app_homepage')] 
  public function homepage()
  {
    $tracks = [
      ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
      ['song' => 'Waterfalls', 'artist' => 'TLC'],
      ['song' => 'Creep', 'artist' => 'Radiohead'],
      ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
      ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
      ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
    ];
    //dd($tracks); dump and die
    //return new Response("Pink Floyd --- Another Brick In the wall");
    return $this->render('mixed/homepage.html.twig', [
      'title' => 'Mixed 90s Songs',
      'tracks' => $tracks
    ]);
  }

  #[Route('/browse/{slug}', name: 'app_browse')]
  public function browse(string $slug = null): Response
  {
    //return new Response("Guns and Roses --- November Rain");
    $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;
    return $this->render('mixed/browse.html.twig', [
      'genre' => $genre
    ]);
  }
}