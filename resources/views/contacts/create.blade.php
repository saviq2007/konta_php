<!-- resources/views/contacts/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
</head>
<body>
    <h1>Add New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>
        <br>

        <button type="submit">Add Contact</button>
    </form>

    <a href="{{ route('contacts.index') }}">Back to Contact List</a>
</body>
</html>
