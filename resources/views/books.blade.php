<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Все книги</title>
</head>
<body>
<div class="row">
    @foreach($authors as $author)
        <div>
            {{"Автор:"}} {{$author->name}}
        </div>

        <div>
            @foreach($books as $book)
                @if($author->id == $book->author_id)
                    <div>
                        {{"Книга:"}} {{$book->name}}
                    </div>
                @endif
            @endforeach
        </div>

    @endforeach
</div>
</body>
</html>
