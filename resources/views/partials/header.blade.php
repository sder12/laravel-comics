<header>
    <section class="container-topbar">
        <div class="wrapper">
            <div class="topbar text-end py-1">
                <span class="me-5">DC POWER VISA</span>
                <span>ADDITIONAL DC SITES</span>
            </div>
        </div>
    </section>


    <section class="container-header">
        <div class="wrapper">


        {{-- HEADER --}}
            <div class="header">
            {{-- LOGO --}}
                <section class="header__logo">
                    <div>
                        <a href="{{ route('home') }}">
                            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
                        </a>
                    </div>
                </section>
                
                {{-- NAV --}}
                <section class="header__navigation">
                    <ul>                           
                        <li >
                            <a href="#" >characters</a>
                        </li>
                        <li>
                            <a href="" class="active" >comics</a>
                        </li>
                        <li>
                            <a href="#">movies</a>
                        </li>
                        <li>
                            <a href="#">tv</a>
                        </li>
                        <li>
                            <a href="#">games</a>
                        </li>
                        <li>
                            <a href="#">collectibles</a>
                        </li>
                        <li>
                            <a href="#">videos</a>
                        </li>
                        <li>
                            <a href="#">fans</a>
                        </li>
                        <li>
                            <a href="#">news</a>
                        </li>
                        <li>
                            <a href="#">shop</a>
                        </li>                    
                    </ul>
                </section>

                {{-- SEARCH BAR --}}
                <section class="header__search">
                    <span>Search</span>
                </section>
            </div>
            {{-- END HEADER --}}
        </div>
    </section>



</header>