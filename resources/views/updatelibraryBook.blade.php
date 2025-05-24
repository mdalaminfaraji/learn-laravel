<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="container">
    <h1>Update Library Book</h1>
      {{-- error message --}}
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif
    <a href="{{ route('library.index') }}" class="btn btn-primary">Back</a>
    <form action="{{ route('library.update', $book->id) }}" method="POST" enctype="multipart/form-data" class="form form-group mb-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $book->price }}" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $book->stock }}" required>
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}" required>
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ $book->year }}" required>
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="text" class="form-control" id="pages" name="pages" value="{{ $book->pages }}" required>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input type="text" class="form-control" id="language" name="language" value="{{ $book->language }}" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre }}" required>
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input type="text" class="form-control" id="cover" name="cover" value="{{ $book->cover }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</body>
</html>