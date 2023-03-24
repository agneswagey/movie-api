<?php

namespace Agneswagey\MovieApi\Controller;

use Agneswagey\MovieApi\App\View;

class MovieController extends BaseController
{
    public function index($movieId)
    {
        $response = $this->api->getMovieById($movieId);
        $data = $response;

        View::renderTemplate('header', $data);
        View::render('movie/index', $data);
        View::renderTemplate('footer', $data);
    }
}