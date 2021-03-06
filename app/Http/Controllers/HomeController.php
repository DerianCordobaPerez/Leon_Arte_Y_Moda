<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\ViewService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use ViewService;

    public function __construct() { }

    public function index(): View|Factory
    {
        return $this->render('index');
    }

    public function about(): View|Factory
    {
        return $this->render('about');
    }

    public function gallery(): View|Factory
    {
        $posts = Post::all();

        return $this->render(
            'gallery',
            ['posts' => $posts]
        );
    }

    public function contact(): View|Factory
    {
        return $this->render('contact');
    }
}
