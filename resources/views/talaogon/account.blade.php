<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Account - PitoySenpai</title>
</head>
<body>
    <img src="{{ asset('pictures/guko.png') }}" class="bg">
    <header>
        <div>
            <div class="logo"><span></span></div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a class="active" href="{{ route('account') }}">Account</a></li>
                    @if(data_get(Session::get('user'), 'username') === 'admin')
                        <li><a href="{{ route('admin.index') }}" style="color: red;">Admin</a></li>
                    @endif
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <h1>Welcome, {{ data_get($user, 'firstname') }}!</h1>
    
    <div style="text-align: center; color: white; margin-bottom: 20px; font-size: 18px;">
        <p style="margin-bottom: 8px;"><strong>Username:</strong> {{ data_get($user, 'username') }}</p>
        <p><strong>Name:</strong> {{ data_get($user, 'firstname') }} {{ data_get($user, 'lastname') }}</p>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('logout') }}" style="color: white; font-size: 18px; font-weight: bold; text-decoration: none; background: rgba(0,0,0,0.7); padding: 10px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.3);">Logout</a>
    </div>
</body>
</html>