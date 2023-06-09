<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>技術選考</title>
    </head>
    <body>
        <h1>DELETE</h1>
        <div class='users'>
            <!--ユーザーを全件取得して名前を表示-->
            @foreach($users as $user)
            <p class='name'>{{ $user->name }}</p>
            <!--選択したユーザーのidをPOST-->
            <form action="/users/{{ $user->id }}" id="form_{{ $user->id }}" method="post">
                @csrf
                @method('DELETE')
            </form>
            <!--deleteボタン->確認のポップアップ-->
            <button  type="button" onclick="deleteUser({{ $user->id }})">delete</button>
            @endforeach
        </div>
        <!--ポップアップで確認後、$user->idをsubmit-->
        <script>
            function deleteUser(id){
                'use strict'
                
                if(confirm('削除すると元に戻せません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>