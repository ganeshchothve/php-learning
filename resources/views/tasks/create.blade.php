<h1>New task</h1>

<form method="POST" action="/tasks">
    @csrf

    <label for="title">Title</label>
    <input id="title" name="title" value="{{ old('title') }}">

    @error('title')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Create task</button>
</form>
