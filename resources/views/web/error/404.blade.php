<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>{{ $meta_title or 'Specter' }}</title>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {{--<link rel="stylesheet" type="text/css" href="{{ asset "built/screen.css"}}"/>--}}
</head>
<body class="error-template">
<div class="site-wrapper">
    {{--<header class="site-header outer {{#if feature_image}}"--}}
            {{--style="background-image: url({{feature_image}}){{else}}no-cover{{/if}}">--}}
        {{--<div class="inner">--}}
            {{--<nav class="site-nav-center">--}}
                {{--{{#if @blog.logo}}--}}
                {{--<a class="site-nav-logo" href="{{@blog.url}}"><img src="{{@blog.logo}}" alt="{{@blog.title}}"/></a>--}}
                {{--{{else}}--}}
                {{--<a class="site-nav-logo" href="{{@blog.url}}">{{@blog.title}}</a>--}}
                {{--{{/if}}--}}
            {{--</nav>--}}
        {{--</div>--}}
    {{--</header>--}}

    {{--<main id="site-main" class="site-main outer">--}}
        {{--<div class="inner">--}}

            {{--<section class="error-message">--}}
                {{--<h1 class="error-code">{{code}}</h1>--}}
                {{--<p class="error-description">{{message}}</p>--}}
                {{--<a class="error-link" href="{{@blog.url}}">Go to the front page →</a>--}}
            {{--</section>--}}
        {{--</div>--}}
    {{--</main>--}}

    {{--{{#get "posts" limit="3"}}--}}
    {{--<aside class="outer">--}}
        {{--<div class="inner">--}}
            {{--<div class="post-feed">--}}
                {{--{{#foreach posts}}--}}
                {{--{{> "post-card"}}--}}
                {{--{{/foreach}}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</aside>--}}
    {{--{{/get}}--}}
</div>
</body>
</html>
