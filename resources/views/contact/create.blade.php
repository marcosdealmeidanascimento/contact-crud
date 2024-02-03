<div class="teal-form">
    <h1>Create New Contact</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <x-alert />

    <a href="{{ route('contact.index') }}" class="btn btn-secondary">Back to Contact List</a>
</div>  

<style>
    a {
        text-decoration: none; /* Removed underline */
    }

    .teal-form {
        padding: 20px;
        color: black; /* Updated color to black */
    }

    .form-group {
        margin-bottom: 10px;
    }

    .form-control {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc; /* Added border */
        border-radius: 5px;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }

    .btn-primary {
        background-color: teal;
    }

    .btn-secondary {
        background-color: teal;
    }
</style>
