<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitoySenpai - Register</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <div class="main">
        <div class="form-container">
            <h2>Register</h2><br>
            @if ($errors->any())
                <div style="background: rgba(255, 0, 0, 0.2); border: 1px solid red; color: darkred; padding: 10px; border-radius: 7px; margin-bottom: 15px; font-size: 13px;">
                    <ul style="margin-left: 15px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('signup.post') }}">
                @csrf
                <div class="grid-form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" value="{{ old('uname') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" name="fname" value="{{ old('fname') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" name="lname" value="{{ old('lname') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <button type="submit">Sign-Up</button>
                </div><br>
                <p style="text-align: center; color: black; font-size: 14px;">
                    Already have an account? <a href="{{ route('login') }}" style="color: #38479e; font-weight: bold;">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>