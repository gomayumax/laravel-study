<!DOCTYPE html>
<html>
    <head>
        <title>route</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
<h1>行き先は{{url('foo/bar')}}です</h1>
postする
<form action="foo/bar" method="post">
<input  type="submit">
</form>
putする
<form action="foo/bar" method="post">
<input name="_method" type="hidden" value="PUT">
<input  type="submit">
</form>
deleteする
<form action="foo/bar" method="post">
<input name="_method" type="hidden" value="DELETE">
<input  type="submit">
</form>
<h1>行き先は{{url('match')}}です</h1>
postする
<form action="match" method="post">
<input  type="submit">
</form>
putする
<form action="match" method="post">
<input name="_method" type="hidden" value="PUT">
<input  type="submit">
</form>
deleteする
<form action="match" method="post">
<input name="_method" type="hidden" value="DELETE">
<input  type="submit">
</form>
<a href="{{route('shout')}}">かんたを叱る</a>
            </div>
        </div>
    </body>
</html>
