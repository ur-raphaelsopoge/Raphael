<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>John Raphael Abino</title>
</head>
<body>
    <img src="{{ asset('pictures/guko.png') }}" class="bg">
    <header>
        <div>
            <div class="logo"><span></span></div>
            <nav>
                <ul>
                    <li><a class="active" href="{{ route('home') }}">Home</a></li>
                    
                    @if(Session::has('user'))
                        <li><a href="{{ route('account') }}">Account</a></li>

                        @if(data_get(Session::get('user'), 'username') === 'admin')
                            <li><a href="{{ route('admin.index') }}" style="color: red;">Admin</a></li>
                        @endif

                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('signup') }}">Sign-Up</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <h1>PITOYSENPAI</h1>
    <p>Feel free to browse <:</p>

    <div class="categories">
        <nav>
            <a href="#">All</a>
            <a href="#">Action</a>
            <a href="#">Adventure</a>
            <a href="#">Romance</a>
            <a href="#">Comedy</a>
            <a href="#">Drama</a>
        </nav>
    </div>

    <div class="container">
        <div class="movie-card">
            <a href="https://drive.google.com/file/d/1zw4RwMKVYNVVZyVugS93Ahm_LDyQAEJx/view?usp=drive_link" target="_blank">
                <img src="https://image.tmdb.org/t/p/w185/tuFaWiqX0TXoWu7DGNcmX3UW7sT.jpg" alt="A Silent Voice Tagalog">
                <h3>A Silent Voice</h3>
            </a>
        </div>
        <div class="movie-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScr3794q7y-uPVQH1m4FpRWWD_Q0ydwASCVbZaCbsbJ4GsxX_X6r4yhLTCJDNpf_rLK4Jo&s=10" alt="Spider-Man: Across the Spider-Verse Tagalog">
            <h3>Spider-Man: Across the Spider-Verse</h3>
        </div>
        <div class="movie-card">
            <img src="https://image.tmdb.org/t/p/w185/o5ENtNf4uNACilr90RNTIhd2CtU.jpg" alt="HK: Forbidden Super Hero Tagalog">
            <h3>HK: Forbidden Super Hero</h3>
        </div>
        <div class="movie-card">
            <img src="https://image.tmdb.org/t/p/w185/23oJaeBh0FDk2mQ2P240PU9Xxfh.jpg" alt="Jujutsu Kaisen 0 Tagalog">
            <h3>Jujutsu Kaisen</h3>
        </div>
        <div class="movie-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe6MvnL0y9uDq_df8L8xAy_Vfhws2N9tYCmHXL0-zignurKo6M7FVsmSan&s=10" alt="Jujutsu Kaisen">
            <h3>Jujutsu Kaisen 0</h3>
        </div>
        <div class="movie-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl74r1XGDcwIA3H5zYEwRQXjQPJXhyyOrq4BEPQT2_D0mVulNChnNzSB1Va5CwZft_ym_-Yg&s=10" alt="One Piece">
            <h3>One Piece Film: Red</h3>
        </div>
        <div class="movie-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPW9gKvK5FIipVRNnfeIOTH_GW8h4bu0RPiTAma6NS2ZFNDsF51yYbtrxfeB_YfpqEGfiIPg&s=10" alt="Suzume">
            <h3>Suzume</h3>
        </div>
        <div class="movie-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9uGf6hrJrdacDNQjKQNa1hU2EBAnDgWcvafdM7mnNNN3mPM3rfODurZlx7qDKEgvRQkKf&s=10" alt="Your Name">
            <h3>Your Name</h3>
        </div>
        <div class="movie-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMMxdifhqFfwXu7FZVa7of1ucappKTBkugMcHuw8qQS40irsBMGaM7q9FlibXcoZS2uvSYKrPdOhhlWezpOY_pYqJV5svjUZo_8MyqFCE&s=10" alt="Your Name">
            <h3>Sakamotp</h3>
        </div>
        <div class="movie-card">
            <img src="https://windbreaker-anime.com/assets/teaser/img/top/main_6th_catch.jpg" alt="Your Name">
            <h3>Windvreaker</h3>
        </div>
        <div class="movie-card">
            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTSJHn8PADfV324wj0NeescCQzKd7z8zfKaeI556n6_FAaP_ttB" alt="Your Name">
            <h3>Attack of titan</h3>
        </div>
         <div class="movie-card">
            <img src="https://m.media-amazon.com/images/M/MV5BMWU1OGEwNmQtNGM3MS00YTYyLThmYmMtN2FjYzQzNzNmNTE0XkEyXkFqcGc@._V1_.jpg" alt="Your Name">
            <h3>Demon Slayer</h3>
        </div>
    </div>
</body>
</html>