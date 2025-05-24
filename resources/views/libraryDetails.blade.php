<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Library</h1>
    <p>Name: {{ $book->name }}</p>
    <p>Author: {{ $book->author }}</p>
    <p>Price: {{ $book->price }}</p>
    <p>Stock: {{ $book->stock }}</p>
    <a href="{{ route('library.index') }}" class="btn btn-primary">Back</a>

    <form action="{{ route('library.destroy', $book->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</body>
</html>