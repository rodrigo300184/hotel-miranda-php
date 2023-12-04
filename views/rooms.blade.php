@extends('layout')
@section('title', 'Rooms')

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
            <div class="swiper-slide" key="{{$room['id']}}">
                <div class="room_amenities room_amenities--down">
                    @if (strpos($room['all_amenities'], 'Extra Bed') !== false)
                    <img src="./resources/icons/rooms/bed.svg" alt="bedIcon"  />
                    @endif
                    @if (strpos($room['all_amenities'], 'Free Wifi') !== false)
                    <img src="./resources/icons/rooms/wifi.svg" alt="wifiIcon"  />
                    @endif
                    @if (strpos($room['all_amenities'], 'Automobile') !== false)
                    <img src="./resources/icons/rooms/automobile.svg" alt="carIcon"  />
                    @endif
                    @if (strpos($room['all_amenities'], 'Air Conditioner') !== false)
                    <img src="./resources/icons/rooms/air-conditioner.svg" alt="acIcon"  />
                    @endif
                    @if (strpos($room['all_amenities'], 'Gym') !== false)
                    <img src="./resources/icons/rooms/gym.svg" alt="gymIcon" />
                    @endif
                    @if (strpos($room['all_amenities'], 'No Smoking') !== false)
                    <img src="./resources/icons/rooms/no-smoking.svg" alt="nonsmokeIcon"  />
                    @endif
                    @if (strpos($room['all_amenities'], 'Cocktails') !== false)
                    <img src="./resources/icons/rooms/cocktails.svg" alt="barIcon"  />
                    @endif
                </div>
                <img class="room_image" src="{{ $room[ 'all_photos' ] }}" alt="room" />
                <div class="room-container room-container--down">
                    <div class="room-name">
                        <h4 class="third-subtitle room-subtitle">
                            {{$room['room_type']}}
                        </h4>
                        <p class="room-description">
                            {{$room['description']}}
                        </p>
                        <div class="room-price">
                            <form action="/room_details.php" method="GET">
                                @if ($room['offer_price'])
                                <div class="room_offer_title">Discount Price</div>
                                <span class="room-price room-price-offer"> {{round($room['price'] - $room['price']*$room['discount']/100)}}</span>
                                <span class="room-price room-price-offer">/Night</span>
                                @else
                                <span class="room-price"> {{$room['price']}}</span>
                                <span class="room-price">/Night</span>
                                @endif
                                <input type="hidden" name="room_id" value="{{$room['id']}}" />
                                <button type="submit" class="room-booking-now">Booking Now</button>
                            </form>
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