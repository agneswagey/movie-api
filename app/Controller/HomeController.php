<?php

namespace Agneswagey\MovieApi\Controller;

use Agneswagey\MovieApi\App\View;

class HomeController extends BaseController
{
    public function index(): void
    {
        $data = [
            'title' => 'MovieAPI',
            'content' => 'Belajar PHP MVC yuk',
        ];

        View::renderTemplate('header', $data);
        View::render('home/index', $data);
        View::renderTemplate('footer', $data);
    }

    public function search()
    {
        $body = $_POST;
        $response = $this->api->getMovieByTitle($body['keyword']);
        $data['result'] = $response['Search'];
        $data['pageTitle'] = 'MovieAPI';
        $data['title'] = 'Search Movie';

        View::renderTemplate('header', $data);
        View::render('home/index', $data);
        View::renderTemplate('footer', $data);
    }
}