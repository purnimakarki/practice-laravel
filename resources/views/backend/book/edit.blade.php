<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>create Book </h1>
<div class="container">
    <div class="row">
        <form action="{{route('backend.book.update',$book->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input value={{$book->name}}  type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>

            <div class="mb-3">
                <label for="pagecount" class="form-label">Pagecount</label>
                <input value={{$book->pagecount}} type="text" class="form-control" id="pagecount" name="pagecount" placeholder="Enter pagecount" required>
            </div>

            <div class="mb-3">
                <label for="point" class="form-label">Point</label>
                <input value={{$book->point}} type="number" class="form-control" id="point" name="point" placeholder="Enter point" required>
            </div>

            <!-- <div class="mb-3">
                 <label for="authorId" class="form-label">Author ID</label>
                 <input type="number" class="form-control" id="authorId" name="authorId" placeholder="Enter author ID" required>
             </div>

             <div class="mb-3">
                 <label for="typeId" class="form-label">Type ID</label>
                 <input type="number" class="form-control" id="typeId" name="typeId" placeholder="Enter type ID" required>
             </div>-->

            <button type="submit" class="btn btn-primary">Save Book</button>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

