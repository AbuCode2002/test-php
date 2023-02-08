<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Форма</title>
</head>
<body>
<div>
    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="Name" style="width: 60%">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Author_id</label>
            <input name="author_id" type="text" class="form-control" id="Author_id" style="width: 60%">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="Description" style="width: 60%">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Page count</label>
            <input name="page_count" type="text" class="form-control" id="Page_count" style="width: 60%">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
