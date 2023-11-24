@extends('layout')
@section('rooms', 'Rooms')

@section('content')

<!-- Banner Section -->
<section class="banner">
    <h2 class="banner-subtitle banner-subtitle-pages subtitle">THE ULTIMATE LUXURY</h2>
    <h1 class="banner-main-title main-title main-title-white rooms-main-title">
        Ultimate Room
    </h1>
    <div class="breadcrumb">
        <a href="./index.php" class="a breadcrumb_a">Home</a><span class="breadcrumb_line">|</span><span class="breadcrumb_current">Rooms</span>
    </div>
</section>
<!-- Rooms Sections -->
<section class="rooms">
    <div class="rooms-page-swiper">
        <div class="swiper-wrapper rooms-page-swiper__wrapper">
            @if (isset($rooms) && count($rooms) > 0)
            @foreach ($rooms as $room)
            <div class="swiper-slide">
                <div class="room_amenities room_amenities--down">
                    @if (strpos($room['amenities'], 'Extra Bed') !== false)
                    <img src="./resources/icons/rooms/bed.svg" alt="bedIcon" class="room_amenities_icon" />
                    @endif
                    @if (strpos($room['amenities'], 'Free Wifi') !== false)
                    <img src="./resources/icons/rooms/wifi.svg" alt="wifiIcon" class="room_amenities_icon" />
                    @endif
                    @if (strpos($room['amenities'], 'Automobile') !== false)
                    <img src="./resources/icons/rooms/automobile.svg" alt="carIcon" class="room_amenities_icon" />
                    @endif
                    @if (strpos($room['amenities'], 'Air Conditioner') !== false)
                    <img src="./resources/icons/rooms/air-conditioner.svg" alt="acIcon" class="room_amenities_icon" />
                    @endif
                    @if (strpos($room['amenities'], 'Gym') !== false)
                    <img src="./resources/icons/rooms/gym.svg" alt="gymIcon" class="room_amenities_icons" />
                    @endif
                    @if (strpos($room['amenities'], 'No Smoking') !== false)
                    <img src="./resources/icons/rooms/no-smoking.svg" alt="nonsmokeIcon" class="room_amenities_icon" />
                    @endif
                    @if (strpos($room['amenities'], 'Cocktails') !== false)
                    <img src="./resources/icons/rooms/cocktails.svg" alt="barIcon" class="room_amenities_icon" />
                    @endif
                </div>
                <img class="room_image" src="{{ $room[ 'photos' ] }}" alt="room" />
                <div class="room-container room-container--down">
                    <div class="room-name">
                        <h4 class="third-subtitle room-subtitle">
                            {{$room['room_type']}}
                        </h4>
                        <p class="room-description">
                            {{$room['description']}}
                        </p>
                        <div class="room-price">
                            <span class="room-price"> {{$room['price']}}</span>
                            <span class="room-price">/Night</span>
                            <a href="./room_details.php" class="room-booking-now">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No rooms available.</p>
            @endif

        </div>
        <!-- If we need pagination -->
        <div class="rooms-page-swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="rooms-page-swiper__button--prev"></div>
        <div class="rooms-page-swiper__button--next"></div>
    </div>
</section>
@endsection