<div class="dashboard">
    <div class="container">
        <h1>Contact Information</h1>
        <p>Name: {{ $contact->name }}</p>
        <p>Email: {{ $contact->email }}</p>
        <p>Address: {{ $contact->contact }}</p>
        <a href="{{ route('contact.edit', $contact->id) }}" class="teal-button">Edit</a>
        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
            @csrf
            @method('Delete')
            <button type="submit" class="teal-button">Delete</button>
        </form>
    </div>


    <a href="{{ route('contact.index') }}" class="teal-button">Back to Contact List</a>
</div>

<style>
    a {
        text-decoration: none;
        /* Removed underline */

    }

    .dashboard {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .dashboard-table {
        width: 100%;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .teal-button {
        background-color: teal;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px;
    }
</style>
