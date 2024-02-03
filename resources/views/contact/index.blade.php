<h1>Contact Management</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->contact }}</td>
            <td>
                <a href="{{ route('contact.show', $contact->id) }}">View</a>
                {{-- <a href="{{ route('contact.edit', $contact->id) }}">Edit</a>
                <a href="{{ route('contact.destroy', $contact->id) }}">Delete</a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('contact.create') }}">Create New Contact</a>