
{{-- @dd($listmobil) --}}

@extends('layouts.main')
@section('container')
    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="img/honda_jazz2.jpg">
                <div class="container">/
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Rental Mobil Pontianak</h1>
                            <h2>Aman,Nyaman & Terpercaya.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/innova_reborn2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Rental Mobil Pontianak</h1>
                            <h2>Aman,Nyaman & Terpercaya.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Rental Mobil Pontianak</h1>
                            <h2>Aman,Nyaman & Terpercaya.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Type Car</h2>
                        </div>
                        <div class="container my-4">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-filter="*" href="#content">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-filter=".Hatchback" href="#content">Hatchback</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-filter=".Minibus" href="#content">Minibus</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                @foreach ( $listmobil as $data )
                    <div class="col-lg-3 col-sm-6 mix all {{ $data->tipe->nama_tipe }}">
                        <div class="single-product-item">
                            <figure>
                                <a href="#"><img src="{{ asset("img/$data->image") }}" alt=""></a>
                                <div class="p-status">Ready</div>
                            </figure>
                            <div class="product-text">
                                <h6>{{ $data->nama_mobil }}</h6>
                                <p>Rp. {{ $data->harga_sewa }}</p>
                                <a href="{{ URL::to("booking/tambahbooking/$data->id")}}" class="btn btn-primary custom-button">Booking</a>
                            </div>
                        </div>
                    </div>             
                @endforeach
                {{-- <div class="col-lg-3 col-sm-6 mix all minibus">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="img/innova_reborn1.jpg" alt=""></a>
                            <div class="p-status sale">Sold</div>
                        </figure>
                        <div class="product-text">
                            <h6>Toyota Innova Reborn</h6>
                            <p>Rp 550.000</p>
                            <button class="btn btn-primary custom-button">Bookings</button>   
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all minibus">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="img/avanza.jpeg" alt=""></a>
                            <div class="p-status">Ready</div>
                        </figure>
                        <div class="product-text">
                            <h6>Toyota Avanza</h6>
                            <p>Rp 350.000</p>
                            <button class="btn btn-primary custom-button">Bookings</button>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all hatchback">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="img/yaris.jpg" alt=""></a>
                            <div class="p-status popular">Little Left</div>
                        </figure>
                        <div class="product-text">
                            <h6>Toyota Yaris</h6>
                            <p>Rp 400.000</p>
                            <button class="btn btn-primary custom-button">Bookings</button>  
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Latest Product End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.nav-link').on('click', function(event) {
                event.preventDefault(); // Mencegah bawaan dari tautan href
                
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
                
                var filterValue = $(this).attr('data-filter');
                $('#content > .row > div').hide();
                $(filterValue).fadeIn(300);
            });
        });
    </script>
@endsection    