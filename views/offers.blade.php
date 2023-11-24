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
        <div class="room_amenities room_amenities--down">
            <img src="./resources/icons/rooms/bed.svg" alt="bedIcon" class="room_amenities_icon" />
            <img src="./resources/icons/rooms/wifi.svg" alt="wifiIcon" class="room_amenities_icon" />
            <img src="./resources/icons/rooms/automobile.svg" alt="carIcon" class="room_amenities_icon" />
            <img src="./resources/icons/rooms/air-conditioner.svg" alt="acIcon" class="room_amenities_icon" />
            <img src="./resources/icons/rooms/gym.svg" alt="gymIcon" class="room_amenities_icons" />
            <img src="./resources/icons/rooms/no-smoking.svg" alt="nonsmokeIcon" class="room_amenities_icon" />
            <img src="./resources/icons/rooms/cocktails.svg" alt="barIcon" class="room_amenities_icon" />
        </div>
        <div class="swiper rooms-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-room">
                    <img src="./resources/assets/rooms/room1.jpg" alt="room" />
                </div>
                <div class="swiper-slide swiper-slide-room">
                    <img src="./resources/assets/rooms/room2.jpg" alt="room" />
                </div>
                <div class="swiper-slide swiper-slide-room">
                    <img src="./resources/assets/rooms/room3.jpg" alt="room" />
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination pagination-swiper"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-btn-prev"></div>
            <div class="swiper-btn-next"></div>
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <div class="room-container room-container--popular">
            <div class="room-name">
                <h4 class="third-subtitle room-subtitle-related">
                    Minimal Duplex Room
                </h4>
                <p class="room-description">
                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                    eiusmod tempor.
                </p>
                <div class="room-price">
                    <span class="room-price-related"> $345</span>
                    <span class="room-price-related">/Night</span>
                    <a href="./room_details.php" class="room-booking-now">Booking Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection