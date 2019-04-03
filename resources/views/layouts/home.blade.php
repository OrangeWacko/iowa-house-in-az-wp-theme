<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="main-img-intro overflow-hidden p-0 m-0 text-center bg-light">
      <div class="col-md-7 p-lg-5 mx-auto my-5">
        <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/white-logo.png" alt="The Iowa House" width="90"/>
        <h1 class="font-weight-normal">The Iowa House: Your Perfect Getaway</h1>
        <p class="lead font-weight-normal">Enjoy this exclusive property rental, offered to Midwestern residents, located in the heart of the magnificent Arizona.</p>
        <a class="btn red" href="/contact-us">Reserve Now</a>
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
            <li class="col-6 col-md-4 p-4">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/tub.svg" alt="Jet Hot Tub"/>
              <div class="feature-name">Jet Hot Tub</div>
            </li>
            <li class="col-6 col-md-4  p-4 my-2">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/grill.svg" alt="Large Gas Grill"/>
              <div class="feature-name">Large Gas Grill</div>
            </li class="col-6 col-md-4  p-4 my-2">
            <li class="col-6 col-md-4  p-4 my-2">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/pool.svg" alt="Full-Size Pool"/>
              <div class="feature-name">Full-Size Pool</div>
            </li>
            <li class="col-6 col-md-4  p-4 my-2">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/tv.svg" alt="Flat-Screen TV"/>
              <div class="feature-name">Flat-Screen TV</div>
            </li>
            <li class="col-6 col-md-4  p-4 my-2">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/drinks.svg" alt="Complimentary Drink Package"/>
              <div class="feature-name">Complimentary Drink Package</div>
            </li>
            <li class="col-6 col-md-4  p-4 my-2">
              <img src="@php echo get_bloginfo('stylesheet_directory') @endphp/assets/images/icons/safe.svg" alt="Kid-Friendly &amp; Safe Neighborhood"/>
              <div class="feature-name">Kid-Friendly & Safe Neighborhood</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    @include('partials.our-location')
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>
