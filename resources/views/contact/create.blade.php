<form action="{{ route('contact.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>

    <div>
        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact">
    </div>

    <button type="submit">Submit</button>
</form>

<a href="{{ route('contact.index') }}">Back to Contact List</a>