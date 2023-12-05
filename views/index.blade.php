@extends('layout')
@section('index', 'Home')

@section('content')

<!-- Banner Section -->
<section class="banner">
  <h2 class="banner-subtitle subtitle">THE ULTIMATE LUXURY EXPERIENCE</h2>
  <h1 class="banner-main-title main-title main-title-white main-title main-title-white--big">
    The Perfect Base For You
  </h1>
  <div class="banner_button-container">
    <a href="/rooms.php" class="button button_small button_small--gold">
      <div class="button_text">TAKE A TOUR</div>
    </a>
    <a href="/about.php" class="button button_small button_small--transparent">
      <div class="button_text">LEARN MORE</div>
    </a>
  </div>
</section>
<!-- Availability Section -->
<section class="availability">
  <form action="/rooms.php" method="GET" class="availability_form">
    <div class="availability_item">
      <label class="label-text" for="arrivalDate">Arrival Date</label>
      <input class="availability_input" id="arrivalDate" name="arrivalDate" type="date" required />
    </div>
    <div class="availability_item availability_item_left-margin">
      <label class="label-text" for="departureDate">Departure Date</label>
      <input class="availability_input" id="departureDate" name="departureDate" type="date" required />
    </div>
    <button type="submit" class="button button_regular button_regular--gold">
      <div class="button_text">CHECK AVAILABILITY</div>
    </button>
  </form>
</section>
<!-- About Section -->
<section class="about-us">
  <div class="about-us_section-1">
    <h2 class="subtitle about-us-subtitle">About Us</h2>
    <h1 class="main-title main-title-black about-us-title">
      Discover Our Underground.
    </h1>
    <p class="about-us-paragraph">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut
      aliquip ex ea commodo consequat.
    </p>
    <a href="/rooms.php" class="button button_small button_small--gold">
      <div class="button_text">BOOK NOW</div>
    </a>
  </div>
  <div class="about-us_section-2">
    <div class="about-us_section-3">
      <div class="about-us_section-3_image">
        <img class="about-us_img-team" src="./resources/assets/about-us/team.jpg" alt="" />
      </div>
      <div class="about-us_section-3_content">
        <div class="about-us_icon-team-front"></div>
        <div class="about-us_icon-team-background"></div>
        <h4 class="third-subtitle about-us-third-subtitle">Strong Team</h4>
        <p class="about-us-second-paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor.
        </p>
      </div>
    </div>
    <div class="about-us_section-4">
      <div class="about-us_section-4_image">
        <img class="about-us_img-room" src="./resources/assets/about-us/luxury.jpg" alt="" />
      </div>
      <div class="about-us_section-4_content">
        <div class="about-us_icon-calendar"></div>
        <h4 class="third-subtitle about-us-third-subtitle-2">
          Luxury Room
        </h4>
        <p class="about-us-third-paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Rooms Sections -->
<section class="rooms">
  <h2 class="subtitle rooms-subtitle">ROOMS</h2>
  <h1 class="main-title main-title-black rooms-title">Hand Picked Rooms</h1>
  <div class="swiper rooms-swiper">
    <div class="swiper-wrapper">
      @if (isset($rooms) && count($rooms) > 0)
      @foreach ($rooms as $room)
      <div class="swiper-slide swiper-slide-room">
        <div class="room_amenities">
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
        <img src="{{$room['photos']}}" alt="room" />
        <div class="room-container room-container--shadow">
          <div class="room-name">
            <h4 class="third-subtitle room-subtitle">{{$room['room_type']}}</h4>
            <p class="room-description">
              {{$room['description']}}
            </p>
            <div class="room-price">
              <span class="room-price-value"> {{$room['price']}}</span>
              <span class="room-price-nigth">/Night</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endif

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination pagination-swiper"></div>
    <!-- If we need navigation buttons -->
    <div class="swiper-btn-prev"></div>
    <div class="swiper-btn-next"></div>
  </div>
</section>
<!-- video Section -->
<section class="video-section">
  <div class="intro-container">
    <div class="intro-container-text">
      <h2 class="subtitle video-section-subtitle">INTRO VIDEO</h2>
      <h1 class="main-title main-title-white video-section-title">
        Meet With Our Luxury Place.
      </h1>
      <p class="video-section-description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat you have to understand this.
      </p>
      <a href="/rooms.php" class="button button_small button_small--gold video-button--in">
        <div class="button_text">BOOK NOW</div>
      </a>
    </div>
    <div class="video-container">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Bu3Doe45lcU?si=_OomfvosXdgaSATd&amp;start=25&end=80;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
  <a href="/rooms.php" class="button button_small button_small--gold video-button--out">
    <div class="button_text">BOOK NOW</div>
  </a>
</section>
<!-- Facilities Section -->
<section class="facilities">
  <h2 class="subtitle facilities-subtitle">FACILITIES</h2>
  <h1 class="main-title main-title-centered main-title-black">Core Features</h1>
  <div class="facilities-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="feature_icon feature_icon--one"></div>
        <span class="feature_number">01</span>
        <h4 class="third-subtitle feature_title">Have high rating</h4>
        <p class="feature_p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div class="swiper-slide">
        <div class="feature_icon feature_icon--two"></div>
        <span class="feature_number">02</span>
        <h4 class="third-subtitle feature_title">Quiet Hours</h4>
        <p class="feature_p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div class="swiper-slide">
        <div class="feature_icon feature_icon--three"></div>
        <span class="feature_number">03</span>
        <h4 class="third-subtitle feature_title">Best Locations</h4>
        <p class="feature_p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div class="swiper-slide">
        <div class="feature_icon feature_icon--four"></div>
        <span class="feature_number">04</span>
        <h4 class="third-subtitle feature_title">Free Cancellation</h4>
        <p class="feature_p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div class="swiper-slide">
        <div class="feature_icon feature_icon--five"></div>
        <span class="feature_number">05</span>
        <h4 class="third-subtitle feature_title">Payment Options</h4>
        <p class="feature_p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div class="swiper-slide">
        <div class="feature_icon feature_icon--six"></div>
        <span class="feature_number">06</span>
        <h4 class="third-subtitle feature_title">Special Offers</h4>
        <p class="feature_p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="facilities-swiper-pagination" id="facilities-swiper-pagination"></div>
  </div>
</section>
<section class="menu">
  <div class="menu-swiper-container">
    <img src="./resources/icons/menu/donnut.svg" alt="" class="menu-icon" />
    <h2 class="subtitle menu-subtitle">MENU</h2>
    <h1 class="main-title main-title-black menu-title">Our Foods Menu</h1>
    <!-- Slider main container -->
    <div class="menu-swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="menu-container">
            <img style="height: 120px; width: 120px; object-fit: cover" src="./resources/assets/menu/Eggs & Bacon.jpg" alt="Eggs & Bacon" />
            <div>
              <h2 class="third-subtitle menu-food-title">Eggs & Bacon</h2>
              <p class="menu-food-paragraph">
                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                sed do eiusmod tempor.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="menu-container">
            <img style="height: 120px; width: 120px; object-fit: cover" src="./resources/assets/menu/Fruit Parfait.jpg" alt="Fruit Parfait" />
            <div>
              <h2 class="third-subtitle menu-food-title">Fruit Parfait</h2>
              <p class="menu-food-paragraph">
                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                sed do eiusmod tempor.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="menu-container">
            <img style="height: 120px; width: 120px; object-fit: cover" src="./resources/assets/menu/Tea or Coffee.jpg" alt="Tea or Coffee" />
            <div>
              <h2 class="third-subtitle menu-food-title">Tea or Coffee</h2>
              <p class="menu-food-paragraph">
                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                sed do eiusmod tempor.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="menu-container">
            <img style="height: 120px; width: 120px; object-fit: cover" src="./resources/assets/menu/Marmalade Selection.jpg" alt="Marmalade Selection" />
            <div style="display: flexbox; flex-wrap: wrap">
              <h2 class="third-subtitle menu-food-title">
                Marmalade Selection
              </h2>
              <p class="menu-food-paragraph">
                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                sed do eiusmod tempor.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="menu-container">
            <img style="height: 120px; width: 120px; object-fit: cover" src="./resources/assets/menu/Chia Oatmeal.jpg" alt="Chia Oatmeal" />
            <div>
              <h2 class="third-subtitle menu-food-title">Chia Oatmeal</h2>
              <p class="menu-food-paragraph">
                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                sed do eiusmod tempor.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="menu-container">
            <img style="height: 120px; width: 120px; object-fit: cover" src="./resources/assets/menu/Cheese Plate.jpg" alt="Cheese Plate" />
            <div>
              <h2 class="third-subtitle menu-food-title">Cheese Plate</h2>
              <p class="menu-food-paragraph">
                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                sed do eiusmod tempor.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- If we need navigation buttons -->
      <div class="menu-swiper-btn-prev"></div>
      <div class="menu-swiper-btn-next"></div>
    </div>
  </div>
  <div class="food-swiper">
    <div class="food-images-swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="menu-container menu-first">
            <img src="./resources/assets/menu/food1.jpg" alt="spaguetti" />
          </div>
        </div>
        <div class="swiper-slide">
          <img src="./resources/assets/menu/food2.jpg" alt="spaguetti" />
        </div>
        <div class="swiper-slide">
          <img src="./resources/assets/menu/food3.jpg" alt="spaguetti" />
        </div>
        <div class="swiper-slide">
          <img src="./resources/assets/menu/food4.jpg" alt="spaguetti" />
        </div>
        <div class="swiper-slide">
          <img src="./resources/assets/menu/food5.jpg" alt="spaguetti" />
        </div>
        <div class="swiper-slide">
          <img src="./resources/assets/menu/food6.jpg" alt="spaguetti" />
        </div>
      </div>

      <!-- If we need pagination -->
      <div class="food-swiper-pagination" id="food-swiper-pagination"></div>
    </div>
  </div>
</section>
<section class="stats-section">
  <div class="stats">
    <div class="stats-container">
      <img class="stats-icon" src="./resources/icons/stats/icon 5.svg" alt="" />
      <div>
        <span class="stats-number">84k </span>
        <span class="stats-plus">+</span>
      </div>
      <p class="stats-paragraph">Projects are Completed</p>
    </div>

    <div class="stats-container">
      <img class="stats-icon" src="./resources/icons/stats/icon 6.svg" alt="" />
      <div>
        <span class="stats-number">10M</span>
        <span class="stats-plus">+</span>
      </div>
      <p class="stats-paragraph">Active Backers Around World</p>
    </div>
    <div class="stats-container">
      <img class="stats-icon" src="./resources/icons/stats/icon 7.svg" alt="" />
      <div>
        <span class="stats-number">02k</span>
        <span class="stats-plus">+</span>
      </div>
      <p class="stats-paragraph">Categories Served</p>
    </div>
    <div class="stats-container">
      <img class="stats-icon" src="./resources/icons/stats/icon 8.svg" alt="" />
      <div>
        <span class="stats-number">100M</span>
        <span class="stats-plus">+</span>
      </div>
      <p class="stats-paragraph">Idea Raised Funds</p>
    </div>
  </div>
</section>

@endsection