<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Students form</h1>
<div class="container">
    <form action="{{route('backend.student.update',$student->studentId)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <div class="mb-3">
            <label for="studentId" class="form-label">Student ID</label>
            <input value= {{$student->studentId}} type="number" class="form-control" id="studentId" name="studentId" placeholder="Enter student ID" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value= {{$student->name}} type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input value= {{$student->surname}}  type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname" required>
        </div>

        <div class="mb-3">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input value= {{$student->birthdate}}  type="date" class="form-control" id="birthdate" name="birthdate" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input  value= {{$student->class}} type="text" class="form-control" id="class" name="class" placeholder="Enter class" required>
        </div>

        <div class="mb-3">
            <label for="point" class="form-label">Point</label>
            <input value= {{$student->point}} type="number" class="form-control" id="point" name="point" placeholder="Enter point" required>
        </div>


        <button type="submit" class="btn btn-primary">Save Student</button>
    </form>
</div>
</body>
</html>

