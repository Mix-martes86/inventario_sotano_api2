<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/potato')]
class PotatoController
{
    #[Route('/test')]
    public function potato(): Response
    {
        return new Response(
            '<html><body>Hi! This is a very sweet potato!! :D </body></html>'
        );
    }
}
