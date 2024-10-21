<!-- resources/views/contacts/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>
        <br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ $contact->phone }}" required>
        <br>

        <button type="submit">Update Contact</button>
    </form>

    <a href="{{ route('contacts.index') }}">Back to Contact List</a>
</body>
</html>
