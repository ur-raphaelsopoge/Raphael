<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitoySenpai - Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="main">
        <div class="form-container">
            <h2>Login</h2><br>

            @if(session('error'))
                <p style="color: red; font-size: 13px; text-align: center; margin-bottom: 10px;">{{ session('error') }}</p>
            @endif

            @if(session('success'))
                <p style="color: green; font-size: 13px; text-align: center; margin-bottom: 10px;">{{ session('success') }}</p>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="grid-form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </div><br>
                <p style="text-align: center; color: black; font-size: 14px;">
                    Don't have an account? <a href="{{ route('signup') }}" style="color: #38479e; font-weight: bold;">Sign-Up</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>