<h1>Create Book</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{ old('author') }}">
        @error('title')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" value="{{ old('genre') }}">
        @error('genre')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="year">Year</label>
        <input type="number" name="year" id="year" value="{{ old('year') }}">
        @error('year')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description">{{ old('description') }}</textarea>
        @error('description')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Create Book</button>

</form>

<a href="/list">List</a>