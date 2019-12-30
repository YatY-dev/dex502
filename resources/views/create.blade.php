<html>
<head>
    <title>REST_FORM</title>
</head>
<body>
<form action="/rest/1" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="send">
</form>
</body>
</html>