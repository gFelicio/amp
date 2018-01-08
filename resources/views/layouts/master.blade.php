<!DOCTYPE html>
<html amp>
<head>
    <meta charset="utf-8">

    <script async src="https://cdn.ampproject.org/v0.js"></script>

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
    <div class="container">
        <div class="pageTitle">
            <h1>
                @yield('pageTitle')
            </h1>
        </div>
        @yield('content')
    </div>
</body>
</html>
