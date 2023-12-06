@extends('layout')

@section('offers','Offers')

@section('content')

<!-- Banner Section -->
<section class="banner">
    <h2 class="banner-subtitle banner-subtitle-pages subtitle">
        THE ULTIMATE LUXURY
    </h2>
    <h1 class="main-title main-title-white offers-title">Our Offers</h1>
    <div class="breadcrumb">
        <a href="./index.php" class="a breadcrumb_a">Home</a><span class="breadcrumb_line">|</span><span class="breadcrumb_current">Offers</span>
    </div>
</section>
<!-- Offers Section -->
<section class="offers">
    @for ($i = 0; $i < 4; $i++) <div class="offers-card">
        <div class="offers-container">
            <div class="offers-inner-container">
                <div>
                    <span class="offer-price offer-price-value"> $500</span>
                    <span class="offer-price offer-price-night">/Night</span>
                </div>
                <div>
                    <span class="offer-price offer-price-value offer-price-value--discount">
                        $345</span>
                    <span class="offer-price offer-price-value offer-price-night--discount">/Night</span>
                </div>
            </div>
        </div>
        <h2 class="subtitle room-details-subtitle">DOUBLE BED</h2>
        <h1 class="room-luxury-title">Luxury Double Bed</h1>
        <p class="offers-paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend
            erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <div class="offers-amenities">
            <div class="amenities-container">
                <div class="amenities-inner-container">
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-ac"></div>
                        <div class="amenities-text">Air conditioner</div>
                    </div>
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-breakfast"></div>
                        <div class="amenities-text">Breakfast</div>
                    </div>
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-cleaning"></div>
                        <div class="amenities-text">Cleaning</div>
                    </div>
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-grocery"></div>
                        <div class="amenities-text">Grocery</div>
                    </div>
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-shop"></div>
                        <div class="amenities-text">Shop near</div>
                    </div>
                </div>
                <div class="amenities-inner-container">
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-wifi"></div>
                        <div class="amenities-text">High speed WiFi</div>
                    </div>
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-kitchen"></div>
                        <div class="amenities-text">Kitchen</div>
                    </div>
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-shower"></div>
                        <div class="amenities-text">Shower</div>
                    </div>
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-bed"></div>
                        <div class="amenities-text">Single bed</div>
                    </div>
                    <div class="amenities-item">
                        <div class="amenities-icon amenities-icon-towels"></div>
                        <div class="amenities-text">Towels</div>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="button button_small button_small--gold">
            <div class="button_text">BOOK NOW</div>
        </a>
        </div>
        @endfor
</section>
<section class="popular">
    <div class="popular-rooms">
        <h3 class="popular-title">POPULAR LIST</h3>
        <h2 class="room-luxury-title room-luxury-title--white">Popular Rooms</h2>

        <div class="rooms-related-swiper rooms-related-swiper-popular">
            <div class="swiper-wrapper">
                @if (isset($popularRooms))
                @foreach ($popularRooms as $popularRoom)
                <div class="swiper-slide swiper-slide-room-related">
                    <div class="room_amenities room_amenities--down">
                        @if (strpos($popularRoom['all_amenities'], 'Extra Bed') !== false)
                        <img src="./resources/icons/rooms/bed.svg" alt="bedIcon" />
                        @endif
                        @if (strpos($popularRoom['all_amenities'], 'Free Wifi') !== false)
                        <img src="./resources/icons/rooms/wifi.svg" alt="wifiIcon" />
                        @endif
                        @if (strpos($popularRoom['all_amenities'], 'Automobile') !== false)
                        <img src="./resources/icons/rooms/automobile.svg" alt="carIcon" />
                        @endif
                        @if (strpos($popularRoom['all_amenities'], 'Air Conditioner') !== false)
                        <img src="./resources/icons/rooms/air-conditioner.svg" alt="acIcon" />
                        @endif
                        @if (strpos($popularRoom['all_amenities'], 'Gym') !== false)
                        <img src="./resources/icons/rooms/gym.svg" alt="gymIcon" />
                        @endif
                        @if (strpos($popularRoom['all_amenities'], 'No Smoking') !== false)
                        <img src="./resources/icons/rooms/no-smoking.svg" alt="nonsmokeIcon" />
                        @endif
                        @if (strpos($popularRoom['all_amenities'], 'Cocktails') !== false)
                        <img src="./resources/icons/rooms/cocktails.svg" alt="barIcon" />
                        @endif
                    </div>
                    <img class="swiper-slide-room-related-img" src="{{$popularRoom['all_photos']}}" alt="room" />
                    <div class="room-container room-container--popular">
                        <div class="room-name">
                            <h4 class="third-subtitle room-subtitle-related">
                                {{$popularRoom['room_type']}}
                            </h4>
                            <p class="room-description">
                                {{$popularRoom['description']}}
                            </p>
                            <div class="room-price">
                                <form action="/room_details.php" method="GET">
                                    <span class="room-price"> {{$popularRoom['price']}}</span>
                                    <span class="room-price">/Night</span>
                                    <input type="hidden" name="room_id" value="{{$popularRoom['id']}}" />
                                    <button type="submit" class="room-booking-now">Booking Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>@endforeach
                @else
                <p>No rooms available.</p>
                @endif
            </div>
            <!-- If we need navigation buttons -->
            <div class="rooms-related-swiper-btn-prev rooms-related-swiper-btn-prev-popular"></div>
            <div class="rooms-related-swiper-btn-next rooms-related-swiper-btn-next-popular"></div>
        </div>

    </div>
</section>

@endsection