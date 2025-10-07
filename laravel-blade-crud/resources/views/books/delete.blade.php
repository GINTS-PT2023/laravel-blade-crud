<form action="{{ route('books.destroy') }}" method="POST">

    @csrf
    @method('DELETE')

    <div>
        <label for="bookid">Enter Book ID</label>
        <input type="text" name="bookid" value="{{ old('bookid') }}">
    </div>
    <button>Delete Book</button>
</form>

<a href="/list">List</a>