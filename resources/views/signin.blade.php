<!doctype html>
<!--[if (IE 8)&!(IEMobile)]>
<html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (gte IE 9)| IEMobile |!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Specter Admin</title>
    <meta name="ghost-admin/config/environment"
          content="%7B%22modulePrefix%22%3A%22ghost-admin%22%2C%22environment%22%3A%22production%22%2C%22rootURL%22%3A%22/%22%2C%22locationType%22%3A%22trailing-hash%22%2C%22EmberENV%22%3A%7B%22FEATURES%22%3A%7B%7D%2C%22EXTEND_PROTOTYPES%22%3A%7B%22Date%22%3Afalse%2C%22Array%22%3Atrue%2C%22String%22%3Atrue%2C%22Function%22%3Atrue%7D%2C%22_APPLICATION_TEMPLATE_WRAPPER%22%3Afalse%7D%2C%22APP%22%3A%7B%22version%22%3A%221.24%22%2C%22name%22%3A%22ghost-admin%22%7D%2C%22ember-simple-auth%22%3A%7B%7D%2C%22moment%22%3A%7B%22includeTimezone%22%3A%22all%22%7D%2C%22ember-cli-mirage%22%3A%7B%22usingProxy%22%3Afalse%2C%22useDefaultPassthroughs%22%3Atrue%7D%2C%22exportApplicationGlobal%22%3Afalse%2C%22ember-load%22%3A%7B%22loadingIndicatorClass%22%3A%22ember-load-indicator%22%7D%7D"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta name="pinterest" content="nopin"/>

    <meta http-equiv="cleartype" content="on"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-title" content="Ghost"/>

    <link rel="shortcut icon" href="/vendor/specter/img/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" href="/vendor/specter/img/touch-icon-iphone.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/vendor/specter/img/touch-icon-ipad.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/vendor/specter/img/small.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/vendor/specter/img/medium.png"/>

    <meta name="application-name" content="Specter"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-square70x70logo" content="/vendor/specter/img/small.png"/>
    <meta name="msapplication-square150x150logo" content="/vendor/specter/img/medium.png"/>
    <meta name="msapplication-square310x310logo" content="/vendor/specter/img/large.png"/>

    <link rel="stylesheet" href="/vendor/specter/vendor.css">
    <link rel="stylesheet" href="/vendor/specter/ghost.css" title="light">
</head>
<body>
<div class="gh-app">
    <div class="gh-viewport">
        <main class="gh-main" role="main">
            <div class="gh-flow">
                <div class="gh-flow-content-wrap">
                    <section class="gh-flow-content">
                        <form method="post" action="{{ route('specter.postSignIn') }}" class="gh-signin">
                            @csrf
                            <div class="form-group success ember-view">
                                <span class="gh-input-icon gh-icon-mail">
                                    <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M21 4H3c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h18c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 1l.159.032L12 12.36 2.841 5.032 3 5h18zm1 12c0 .551-.449 1-1 1H3c-.551 0-1-.449-1-1V6c0-.11.03-.21.063-.309l9.625 7.7a.504.504 0 0 0 .624 0l9.625-7.7A.966.966 0 0 1 22 6v11z"></path>
                                    </svg>
                                    <input name="email" tabindex="1" placeholder="Email Address"
                                           class="email ember-text-field gh-input " type="email" autofocus>
                                </span>
                            </div>
                            <div class="form-group ember-view">
                                <span class="gh-input-icon gh-icon-lock forgotten-wrap">
                                <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 14c-.552 0-1 .449-1 1 0 .365.207.672.5.846V18.5a.5.5 0 0 0 1 0v-2.654A.987.987 0 0 0 13 15c0-.551-.448-1-1-1zm8.5-5H18V6c0-3.309-2.691-6-6-6S6 2.691 6 6v3H3.5a.5.5 0 0 0-.5.5v14a.5.5 0 0 0 .5.5h17a.5.5 0 0 0 .5-.5v-14a.5.5 0 0 0-.5-.5zM7 6c0-2.757 2.243-5 5-5s5 2.243 5 5v3H7V6zm13 17H4V10h16v13z"></path>
                                </svg>
                                    <input name="password" placeholder="Password"
                                           class="password ember-text-field gh-input ember-view" type="password">
                                    <a href="#" class="forgotten-link gh-btn gh-btn-link gh-btn-icon ember-view">
                                        <span>Forgot?</span>
                                    </a>
                                </span>
                            </div>
                            <button tabindex="3" class="login gh-btn gh-btn-blue gh-btn-block gh-btn-icon ember-view"
                                    type="submit">
                                <span>Sign in</span>
                            </button>
                        </form>
                    </section>
                </div>
            </div>
        </main>
    </div>
</div>
<div class="ember-view">
</div>
</body>
</html>
