<?php

namespace TrySpecter\Specter\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use TrySpecter\Specter\Facades\Specter;

class HomeController extends Controller
{
    /**
     * SpecterController constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return Specter::themeView('index');
    }

    /**
     * @param Request $request
     * @param $slug
     * @return mixed
     */
    public function story(Request $request, $slug)
    {
        return $this->error(404);
        return Specter::themeView('story');
    }

    public function error($code)
    {
        if ( Specter::exists($view = 'error.' . $code) ) {
            return Specter::themeView($view);
        }
        return Specter::themeView('error');
    }

    /**
     * @param Request $request
     * @param $tag
     * @return mixed
     */
    public function tag(Request $request, $tag)
    {
        return Specter::themeView('category');
    }

    /**
     * @param Request $request
     * @param $category
     * @return mixed
     */
    public function category(Request $request, $category)
    {
        return Specter::themeView('category');
    }

    /**
     * @param Request $request
     * @param $author
     * @return mixed
     */
    public function author(Request $request, $author)
    {
        return Specter::themeView('author');
    }
}
