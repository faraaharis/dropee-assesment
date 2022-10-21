<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>
    Page {{$page->title}}
</title>
<body>
    {!! $page->body !!}
</body>
</html>
