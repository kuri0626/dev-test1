<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>技術選考</title>
    </head>
    <body>
        <h1>PUT</h1>
        <div class="users">
            @foreach($users as $user)
            <form action="/users/{{ $user->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='name'>
                    <h2>名前</h2>
                    <input type='text' name='user[name]' value="{{ $user->name }}">
                </div>
                <div class='age'>
                    <h2>年齢</h2>
                    <input type='number' name="user[age]" min="0" max="150" value="{{ $user->age }}">
                </div>
            @endforeach
            <div class="footer">
                <input type="submit" value="PUT">
            </div>
            </form>
        </div>
    </body>
</html>