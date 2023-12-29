<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>List of Students</h1>
<div class="row">
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Birthdate</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Point</th>
            <th>Action</th>

        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->birthdate}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->point}}</td>
                <td><a href="{{route('backend.student.show',$student->studentId)}}">View Details</a>
                    <a href="{{route('backend.student.edit',$student->studentId}}">Edit</a>

                    <form action="{{route('backend.student.destroy',$student->studentId)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Delete">
                    </form>
                </td>

            </tr>
        @endforeach

    </table>
</div>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>--}}

</body>
</html>
