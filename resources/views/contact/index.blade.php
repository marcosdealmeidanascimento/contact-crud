<div class="dashboard">

    <h1>Contact Management</h1>

    <div class="dashboard-table">
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
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->contact }}</td>
                        <td>
                            <a href="{{ route('contact.show', $contact->id) }}">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('contact.create') }}" class="teal-button">Create New Contact</a>

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
