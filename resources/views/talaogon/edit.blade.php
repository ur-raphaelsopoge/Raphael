<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <title>Edit User - PitoySenpai</title>
</head>
<body>
    <div class="main">
        <div class="form-container">
            <h2>Edit User</h2><br>

            <form method="POST" action="{{ route('admin.update', $editUser->id) }}">
                @csrf
                <div class="grid-form">
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" name="fname" value="{{ $editUser->firstname }}" required>
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" name="lname" value="{{ $editUser->lastname }}" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" value="{{ $editUser->password }}" required>
                    </div>
                    <button type="submit">Update User</button>
                </div>
            </form>

            <div style="text-align: center; margin-top: 15px;">
                <a href="{{ route('admin.index') }}" style="color: #38479e; text-decoration: none; font-weight: bold;">Back to Admin Panel</a>
            </div>
        </div>
    </div>
</body>
</html>