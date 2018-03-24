<html>
<head>
    <title>Result</title>
</head>
<body>
<table>
    <tr><th>First Name</th><th>Last Name</th><th>Special</th><th>Language(s)</th></tr>
    @foreach($guest as $g)
    <tr><td>{{$g->fname}}</td><td>{{$g->lname}}</td><td>{{$g->special}}</td><td>{{$g->languages}}</td></tr>
    @endforeach
</table>
</body>
</html>