<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>Registered Users - Admin</title>
</head>
<body>
    <div class="admin-container">
        <a href="{{ route('home') }}" class="btn-back">&larr; Back to Home</a>
        <h2>Registered Users List</h2>
        
        @if(session('success'))
            <p style="color: green; text-align: center; margin-bottom: 15px;">{{ session('success') }}</p>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->password }}</td>
                    <td class="action-btns">
                        <a href="{{ route('admin.edit', $user->id) }}" class="btn-edit">Edit</a>
                        <a href="{{ route('admin.delete', $user->id) }}" class="btn-delete" onclick="return confirm('Sigurado ka bang buburahin mo ito?');">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>