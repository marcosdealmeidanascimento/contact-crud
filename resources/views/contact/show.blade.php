<div class="container">
    <h1>Contact Information</h1>
    <p>Name: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Address: {{ $contact->contact }}</p>
    <a href="{{ route('contact.edit', $contact->id) }}">Edit</a>
    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
        @csrf
        @method('Delete')
        <button type="submit">Delete</button>
    </form>
</div>


<a href="{{ route('contact.index') }}">Back to Contact List</a>
