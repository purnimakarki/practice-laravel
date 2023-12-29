<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form method="POST" action="{{ route('backend.borrows.store') }}">
            @csrf

            <div class="mb-3">
                <label for="borrowId" class="form-label">Borrow ID</label>
                <input type="text" class="form-control" id="borrowId" name="borrowId" placeholder="Enter borrow ID" required>
            </div>

{{--           <div class="mb-3">--}}
{{--               <label for="studentId" class="form-label">Student ID</label>--}}
{{--               <input type="text" class="form-control" id="studentId" name="studentId" placeholder="Enter student ID" required>--}}
{{--{           </div>--}}

{{--        <div class="mb-3">--}}
{{--               <label for="bookId" class="form-label">Book ID</label>--}}
{{--                <input type="text" class="form-control" id="bookId" name="bookId" placeholder="Enter book ID" required>--}}
{{--           </div>--}}

            <div class="mb-3">
                <label for="takenDate" class="form-label">Taken Date</label>
                <input type="date" class="form-control" id="takenDate" name="takenDate" required>
            </div>

            <div class="mb-3">
                <label for="broughtDate" class="form-label">Brought Date</label>
                <input type="date" class="form-control" id="broughtDate" name="broughtDate" required>
            </div>

            <button type="submit" class="btn btn-primary">Save Borrow</button>
        </form>
    </div>

</form>
</body>
</html>
