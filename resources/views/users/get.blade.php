<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>技術選考</title>
    </head>
    <body>
        <h1>GET</h1>
        <div class='users'>
            @foreach($users as $user)
                <p class='name'>名前　：　{{ $user->name }}</p>
                <p class='age'>年齢　：　{{ $user->age }}</p>
            @endforeach
        </div>
    </body>
</html>