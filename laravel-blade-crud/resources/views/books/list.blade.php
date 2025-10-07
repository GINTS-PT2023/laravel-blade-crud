<h1>Book List</h1>

@foreach ($bookList as $book)
    <div>
        <h2>{{ $book->id }}</h2>
        <li>{{ $book->title }}</li>
        <li>{{ $book->author }}</li>
        <li>{{ $book->genre }}</li>
        <li>{{ $book->year }}</li>
        <li>{{ $book->description }}</li>
    </div>
@endforeach
