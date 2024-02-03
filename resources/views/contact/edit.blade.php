<form action="{{ route('contact.update', $contact->id) }}" method="POST">
    @csrf
    @method('Put')

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $contact->name }}">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $contact->email }}">
    </div>
    <div>
        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact" value="{{ $contact->contact }}">
    </div>
    <button type="submit">Update</button>
</form>

<a href="{{ route('contact.index') }}">Back to Contact List</a>
