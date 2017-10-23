<!DOCTYPE html>
<html>
<head>
    <title>@yield("title")</title>
    @section("head")
        @include("partials.head")
    @show
</head>
<body>
@include("partials.nav")
<div style="padding-top: 70px;"></div>
<div class="container">
    @yield("content")
</div>
</body>
</html>