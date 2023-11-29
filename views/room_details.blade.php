@extends('layout')
@section('title', 'Room Details')

@section('content')

<!-- Banner Section -->
<section class="banner">
  <h2 class="banner-subtitle banner-subtitle-pages subtitle">
    THE ULTIMATE LUXURY
  </h2>
  <h1 class="banner-main-title main-title main-title-white about-title rooms-main-title">
    Ultimate Room
  </h1>
  <div class="breadcrumb">
    <a href="./index.php" class="a breadcrumb_a">Home</a><span class="breadcrumb_line">|</span><span class="breadcrumb_current">Room Details</span>
  </div>
</section>
<!-- Rooms Sections -->
<section class="rooms-details">
  @if (isset($room))

  <div class="rooms-details-container">
    <h2 class="subtitle room-details-subtitle">ROOM CLASS</h2>
    <h1 class="room-luxury-title">{{$room['room_type']}}</h1>
    @if($room['offer_price'])
    <div class="room-price room-price-left">
      <span class="room-price-value room-price-offer">{{round($room['price'] - $room['price']*$room['discount']/100)}}</span>
      <span class="room-price-nigth room-price-offer">/Night</span>
    </div>
    @else
    <div class="room-price room-price-left">
      <span class="room-price-value">{{$room['price']}}</span>
      <span class="room-price-nigth">/Night</span>
    </div>
    @endif
    <img class="room_image" src="{{$room['all_photos']}}" alt="room" />
  </div>

  <!-- Availability -->
  @if($checkin && $checkout)
  <div class="availability--white">
    <h2 class="availability-title">Check Availability</h2>
    <form action="/room_details.php" method="POST" class="availability_form availability_form_rdetails" id="availabilityForm">
      <label class="label-text label-text--black" for="checkIn">Check In</label>
      <input class="availability_input_rdetails" type="date" name="checkIn" id="detailsCheckIn" value="{{$checkin}}"  required />
      <label class="label-text label-text--black" for="checkOut">Check Out</label>
      <input class="availability_input_rdetails" type="date" name="checkOut" id="detailsCheckOut" value="{{$checkout}}"  required />
      <label class="label-text label-text--black" for="fullName">Full Name</label>
      <input class="availability_input_rdetails" type="text" name="fullName" id="detailsFullName" placeholder="Type your name..." required />
      <label class="label-text label-text--black" for="email">Email</label>
      <input class="availability_input_rdetails" type="email" name="email" id="detailsEmail" placeholder="Type your email..." required />
      <label class="label-text label-text--black" for="phone">Phone</label>
      <input class="availability_input_rdetails" type="text" name="phone" id="detailsPhone" placeholder="Type your phone..." required />
      <label class="label-text label-text--black" for="detailsMessage">Message (Special resquest)</label>
      <textarea class="availability_text-area" name="message" id="detailsMessage" cols="30" rows="3" placeholder="Type your message..." required></textarea>
      <input class="button button_big button_big--gold button_text" type="submit" value="BOOK NOW" />
    </form>
  </div>
  @else
  <div class="availability--white">
    <h2 class="availability-title">Check Availability</h2>
    <form class="availability_form availability_form_rdetails" id="availabilityForm">
      <label class="label-text label-text--black" for="checkIn">Check In</label>
      <input class="availability_input_rdetails" type="date" name="checkIn" id="detailsCheckIn" value="{{$checkin}}" disabled required />
      <label class="label-text label-text--black" for="checkOut">Check Out</label>
      <input class="availability_input_rdetails" type="date" name="checkOut" id="detailsCheckOut" value="{{$checkout}}" disabled required />
      <input class="button button_big button_big--gold button_text" type="submit" value="CHECK AVAILABILITY" />
    </form>
  </div>
  @endif
  @endif
  <p class="room-details-paragraph">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
    mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
    error sit voluptatem accusantium doloremque laudantium, totam rem
    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
    beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
    dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
    est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
    sed quia non numquam eius modi tempora incidunt ut labore et dolore
    magnam aliquam quaerat voluptatem.
  </p>

  <!-- Amenities Section-->
  <section class="room-details-amenities">
    <h2 class="third-subtitle">Amenities</h2>
    <div class="room-details-bar"></div>
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
        <div class="amenities-item">
          <div class="amenities-icon amenities-icon-support"></div>
          <div class="amenities-text">24/7 Online Support</div>
        </div>
        <div class="amenities-item">
          <div class="amenities-icon amenities-icon-security"></div>
          <div class="amenities-text">Smart Security</div>
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
        <div class="amenities-item">
          <div class="amenities-icon amenities-icon-locker"></div>
          <div class="amenities-text">Strong Locker</div>
        </div>
        <div class="amenities-item">
          <div class="amenities-icon amenities-icon-expert"></div>
          <div class="amenities-text">Expert Team</div>
        </div>
      </div>
    </div>
  </section>
  <!-- Founder Section -->
  <section class="founder-card">
    <div class="founder-card-avatar">
      <img class="founder-card-avatar-circle" src="./resources/icons/avatars/gold_ellipse.svg" alt="" />
      <img class="founder-card-avatar-checkmark" src="./resources/icons/avatars/check_mark_icon.svg" alt="" />
    </div>
    <h2 class="third-subtitle">Rodrigo E. Martinez</h2>
    <h3 class="subtitle room-details-subtitle room-details-subtitle--gold">
      FOUNDER, QUX CO.
    </h3>
    <p class="room-details-paragraph room-details-paragraph-founder">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore.
    </p>
  </section>
  <section class="cancellation">
    <h2 class="third-subtitle">Cancellation</h2>
    <div class="room-details-bar"></div>
    <p class="room-details-paragraph">
      Phasellus volutpat neque a tellus venenatis, a euismod augue
      facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus.
      Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to
      get a full refund.
    </p>
  </section>
  <section class="related-rooms">
    <h2 class="third-subtitle">Related Rooms</h2>
    <div class="room-details-bar"></div>
    <section>
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
      <div class="room-container room-container--related">
        <div class="room-name">
          <h4 class="third-subtitle room-subtitle-related">
            Minimal Duplex Room
          </h4>
          <p class="room-description">
            Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed
            do eiusmod tempor.
          </p>
          <div class="room-price">
            <span class="room-price-related"> $345</span>
            <span class="room-price-related">/Night</span>
            <a href="./room_details.php" class="room-booking-now">Booking Now</a>
          </div>
        </div>
      </div>
    </section>
  </section>
</section>

@endsection