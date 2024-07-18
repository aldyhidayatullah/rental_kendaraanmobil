    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{ route('home') }}"><p class="text-dark">Rental Mobil Pontianak</p></a>
                </div>
                {{-- <div class="user-access">
                    <a href="#">Register</a>
                    <a href="#" class="in">Sign in</a>
                </div> --}}
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="@yield('home_active')" href="{{URL::to('/')}}">Home</a></li>
                        <li><a class="@yield('bookings_active')" href="{{ URL::to('booking/daftarbooking') }}">List Bookings</a></li>
                        <li><a class="" href="{{ URL::to('login') }}">Log in</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->