<!DOCTYPE html>
<html amp>
<head>
    <meta charset="utf-8">

    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700" rel="stylesheet">


    @stack('amp-component')

    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    @stack('boilerplate')

    @stack('ampCanon')

    <style amp-custom>
        @stack('customStyle')
    </style>

    <title>
        Google AMP Test
    </title>
</head>
<body>
    @include('amp.partials.component.header')

    <div class="container">
        <div class="pageTitle">
            <h1>
                @yield('pageTitle')
            </h1>
        </div>
        @yield('content')
    </div>

    @include('amp.partials.component.footer')
</body>
</html>
