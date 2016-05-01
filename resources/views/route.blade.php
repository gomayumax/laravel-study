<!DOCTYPE html>
<html>
    <head>
        <title>route</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
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
            </div>
        </div>
    </body>
</html>
