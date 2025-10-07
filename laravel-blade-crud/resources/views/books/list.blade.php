<h1>Book List</h1>
<ul>
    <li>
        <a href="/create">Create Book</a>
    </li>
    <li>
        <a href="/delete">Delete Book By ID</a>
    </li>
    <li>
        <a href="/edit">Edit Book By ID</a>
    </li>
    <li>
        <a href="">SOFT DATABASE</a>
    </li>
</ul>

@foreach ($bookList as $book)
<div>
    <h2><a href="/show/{{ $book->id }}">{{ $book->id }}</a></h2>
    <li>{{ $book->title }}</li>
    <li>{{ $book->author }}</li>
    <li>{{ $book->genre }}</li>
    <li>{{ $book->year }}</li>
    <li>{{ $book->description }}</li>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Book</button>
    </form>
</div>
@endforeach