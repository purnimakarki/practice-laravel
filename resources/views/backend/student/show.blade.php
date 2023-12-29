<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>student list</h1>
<div class="row">
    <table border="1">
        <tr>
            <th>StudentID</th>
            <td>{{$students->studentId}}</td>
        </tr>
        <tr>
            <th>Class</th>
            <td>{{$students->class}}</td>
        </tr>
    </table>
</div>
</body>
</html>
