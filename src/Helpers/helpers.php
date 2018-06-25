<?php

if ( !function_exists('setting') ) {
    function setting($key, $default = null)
    {
        return TrySpecter\Specter\Facades\Specter::setting($key, $default);
    }
}
