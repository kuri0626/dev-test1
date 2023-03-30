<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>技術選考</title>
    </head>
    <body>
        <div class='users'>
            <!--ユーザーを全件取得して名前と年齢を表示-->
            @foreach($users as $user)
                <p class='name'>名前　：　{{ $user->name }}</p>
                <p class='age'>年齢　：　{{ $user->age }}</p>
                <a href="/users/{{ $user->id }}/put">編集</a>
            @endforeach
        </div>
        <!--トップへ戻る-->
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>