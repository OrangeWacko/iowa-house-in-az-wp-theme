<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55XQN26"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="main-img-intro overflow-hidden p-0 m-0 text-center bg-light">
      <div class="col-md-7 p-lg-5 mx-auto my-5">
        <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/white-logo.png" alt="The Iowa House" width="90"/>
        <h1 class="font-weight-normal">The Iowa House: Your Perfect Getaway</h1>
        <p class="lead font-weight-normal">Enjoy this exclusive property rental, offered to Midwestern residents, located in the heart of the magnificent Arizona.</p>
        <a class="btn red" href="https://www.airbnb.com/rooms/34544046?location=6738%20East%20Oak%20Street%2C%20Scottsdale%2C%20AZ%2C%20USA&guests=1&adults=1&sl_alternate_dates_exclusion=true&source_impression_id=p3_1557606128_nxwv23WEVHnsp%2B%2Bg&check_in=2019-05-15&check_out=2019-05-18&children=0&infants=0" target="_blank">Reserve Now</a>
        <a class="btn purple" href="/about-the-house#gallery">View Gallery</a>
      </div>
    </div>
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main-intro">
          @yield('content')
        </main>
      </div>
    </div>

    <div class="container-fluid home-features">
      <div class="row">
        <div class="col col-md-6 offset-md-6 features-list">
          <h2>Home Features</h2>
          <ul class="row">
            <li class="col-6 col-md-4 p-3 my-1">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/games.svg" alt="Outdoor Games"/>
              <div class="feature-name">Outdoor Games</div>
            </li>
            <li class="col-6 col-md-4  p-3 my-1">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/grill.svg" alt="Large Gas Grill"/>
              <div class="feature-name">Large Gas Grill</div>
            </li class="col-6 col-md-4  p-3 ">
            <li class="col-6 col-md-4  p-3 my-1">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/pool.svg" alt="Full-Size Pool"/>
              <div class="feature-name">Full-Size Pool</div>
            </li>
            <li class="col-6 col-md-4  p-3 my-1">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/tv.svg" alt="Flat-Screen TV"/>
              <div class="feature-name">Flat-Screen TVs</div>
            </li>
            <li class="col-6 col-md-4  p-3 my-1">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/location.svg" alt="Prime Location"/>
              <div class="feature-name">Prime Location</div>
            </li>
            <li class="col-6 col-md-4  p-3 my-1">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/safe.svg" alt="Kid-Friendly &amp; Safe Neighborhood"/>
              <div class="feature-name">Kid-Friendly Neighborhood</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    @include ('partials.testimonials')
    @include('partials.our-location')
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>
