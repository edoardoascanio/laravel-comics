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
        <div class="center-block">
            <ul>
                <li>
                    <div class="logo">
                        <a href="{{ url('/')}}"><img src="{{asset('images/dc-logo.png')}}" alt="dc-logo"></a>
                    </div>
                </li>

                <li>
                    <a href="">CHARACTERS</a>
                </li>

                <li>
                    <a href="{{ route('comics')}}">COMICS</a>
                </li>

                <li>
                    <a href="{{ route('comics')}}">TV</a>
                </li>

                <li>
                    <a href="{{ route('comics')}}">GAMES</a>
                </li>

                <li>
                    <a href="{{ route('comics')}}">COLLECTIBLES</a>
                </li>

                <li>
                    <a href="{{ route('comics')}}">VIDEOS</a>
                </li>

                <li>
                    <a href="{{ route('comics')}}">FANS</a>
                </li>

                <li>
                    <a href="{{ route('comics')}}">NEWS</a>
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
        </div>
    </nav>
</header>

<div class="hero">
    <img src="{{asset('images/jumbotron.jpg')}}" alt="jumbotron-img">
</div>


</body>
</html>
