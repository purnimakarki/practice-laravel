<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>List of Book</h1>
<div class="row">
    <table border="1">
        <tr>
            <th>ID</th>
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <th>PageCount</th>
            <td>{{$book->pagecount}}</td>
        </tr>
        <tr>
            <th>image</th>
            <td><img src="{{asset('image/book/'.$book->image)}}" alt=""></td>
        </tr>
    </table>
</div>

</body>
</html>
