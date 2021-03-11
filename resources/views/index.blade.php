<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue Blog</title>
    <link rel="stylesheet" href="{{ asset("uikit-3.6.17/css/uikit.css") }}">
</head>
<body>
<div id="app">
    <v-header></v-header>
    <main style="margin-top: 20px;">
        <div class="uk-container">
            <router-view></router-view>
        </div>
    </main>
</div>

<script src="{{ asset("uikit-3.6.17/js/uikit.js") }}"></script>
<script src="{{ asset("uikit-3.6.17/js/uikit-icons.js") }}"></script>
<script src="/js/app.js"></script>
</body>
</html>
