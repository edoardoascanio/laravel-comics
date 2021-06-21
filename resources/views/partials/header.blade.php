<header>
    <div class="head-credits">
        <div class="center-block">
            <ul>
                <div class="spacing"></div>
                <li><a href="">DC POWER <i class="fa fa-trademark" aria-hidden="true"></i> VISA <i class="fa fa-registered" aria-hidden="true"></i></a></li>
                <li><a href="">ADDITIONAL DC SITIES <i class="fa fa-caret-down"></i></a></li>
            </ul>
        </div>
    </div>

    <nav>

        <ul>
            <li>
                <div class="logo">
                    <a href="{{ url('/')}}">
                        <div class="logo">
                            <img src="{{asset('images/dc-logo.png')}}" alt="dc-logo">
                        </div>
                    </a>
                </div>
            </li>

            <li>
                <a href="{{ route('characters')}}">CHARACTERS</a>
            </li>

            <li>
                <a href="{{ route('comics')}}">COMICS</a>
            </li>

            <li>
                <a href="{{ route('movies')}}">MOVIES</a>
            </li>

            <li>
                <a href="{{ route('tv')}}">TV</a>
            </li>

            <li>
                <a href="{{ route('games')}}">GAMES</a>
            </li>

            <li>
                <a href="{{ route('collectibles')}}">COLLECTIBLES</a>
            </li>

            <li>
                <a href="{{ route('videos')}}">VIDEOS</a>
            </li>

            <li>
                <a href="{{ route('fans')}}">FANS</a>
            </li>

            <li>
                <a href="{{ route('news')}}">NEWS</a>
            </li>

            <li>
                <a id="shop" href="">SHOP <i class="fa fa-caret-down"></i></a>

                <div class="dropdown">
                    <p>DC SHOP</p>
                    <p>PRINT SUBSCRIPTIONS</p>
                    <p>COMIC SHOP LOCATOR</p>
                </div>
            </li>

            <li>
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class="fa fa-search"></i>
                </div>
            </li>
        </ul>

    </nav>
</header>

<div class="hero">

</div>

</body>
</html>
