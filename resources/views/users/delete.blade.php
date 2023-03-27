<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>技術選考</title>
    </head>
    <body>
        <h1>DELETE</h1>
        <div class='users'>
            @foreach($users as $user)
            <p class='name'>{{ $user->name }}</p>
            <form action="/users/{{ $user->id }}" id="form_{{ $user->id }}" method="post">
                @csrf
                @method('DELETE')
            </form>
            <button  type="button" onclick="deleteUser({{ $user->id }})">delete</button>
            @endforeach
        </div>
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