<?php

namespace TrySpecter\Specter;

use Illuminate\Support\Facades\View;

class Specter
{
    protected $viewLoadingEvents = [];

    public function routes()
    {
        return __DIR__ . '/../routes/specter.php';
    }

    public function setting($key)
    {

    }

    public function themeView($name, array $parameters = [])
    {
        return $this->view($name, $parameters, 'web');
    }

    public function exists($name, $prefix = 'specter::web')
    {
        return View::exists($prefix .'.'. $name);
    }

    public function view($name, array $parameters = [], $prefix = '')
    {
        foreach ( array_get($this->viewLoadingEvents, $name, []) as $event ) {
            $event($name, $parameters);
        }

        $namespcae = 'specter::';

        $name = trim(trim($name, ".:"));
        if ( empty($prefix) ) {
            $name = $namespcae . $name;
        } else {
            $prefix = trim(trim($prefix, ".:"));
            $name = $namespcae . trim(trim($prefix, ".:")) . '.' . $name;
        }

        return View::make($name, $parameters);
    }
}