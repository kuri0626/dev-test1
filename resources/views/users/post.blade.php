<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>技術選考</title>
    </head>
    <body>
        <h1>ユーザーの新規登録</h1>
        <form action="/users/post" method="POST">
            @csrf
            <!--ユーザーの名前入力欄-->
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="user[name]"/>
            </div>
            <!--ユーザーの年齢入力欄-->
            <div class="age">
                <h2>年齢</h2>
                <input type="number" name="user[age]"  min="0" max="150"/>
            </div>
            <!--投稿ボタン-->
            <input type="submit" value="POST"/>
        </form>
        <!--トップへ戻る-->
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>