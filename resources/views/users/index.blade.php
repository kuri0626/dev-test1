<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>技術選考</title>
    </head>
    <body>
        <div class='users'>
            <h1>株式会社プロシーズさんの技術選考</h1>
            <!--ユーザーの投稿画面-->
            <a href="/users/post">POST</a>
            <!--ユーザーの取得画面-->
            <a href="/users/get">GET</a>
            <!--ユーザーの更新画面-->
            <a href="/users/article">PUT</a>
            <!--ユーザーの削除画面-->
            <a href="/users/delete">DELETE</a>
        </div>
    </body>
</html>