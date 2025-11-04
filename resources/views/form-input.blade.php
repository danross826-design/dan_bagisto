<form method="POST" action="/submit-form">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}">

    <button type="submit">Submit</button>
</form>