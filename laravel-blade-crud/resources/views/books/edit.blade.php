<h1>Edit Book</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}">
    </div>

    <div>
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}">
    </div>

    <div>
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" value="{{ old('genre', $book->genre) }}">
    </div>

    <div>
        <label for="year">Year</label>
        <input type="number" name="year" id="year" value="{{ old('year', $book->year) }}">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description">{{ old('description', $book->description) }}</textarea>
    </div>

    <button type="submit">Update Book</button>

</form>
