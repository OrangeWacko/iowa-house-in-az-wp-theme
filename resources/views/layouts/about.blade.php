<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
      </div>
    </div>
    @include('partials.attractions-map')

    <div class="container-fluid">
      <h2 class="text-center mb-4">House Gallery</h2>
      @php
      $images = get_field('gallery_images');

      if( $images ):
        $imgIndex = 1;
        $customSize ='square-gallery-thumbnail';
        $colSize = 'col-auto';
      @endphp
      <div class="image-grid d-flex flex-wrap">
      @php
        foreach( $images as $image ):
          //echo $imgIndex;
          switch ($imgIndex) {
            case 1:
            case 8:
            case 15:
              $customSize = 'med-large-gallery-thumbnail';
              $colSize = 'image-item---width-64';
              break;
            case 2:
            case 9:
            case 16:
              $customSize = 'narrow-gallery-thumbnail';
              $colSize = 'image-item---width-36';
              break;
            case 3:
            case 4:
            case 10:
            case 11:
            case 17:
            case 18:
              $customSize = 'medium-gallery-thumbnail';
              $colSize = 'image-item---width-50';
              break;
            case 5:
            case 6:
            case 7:
            case 12:
            case 13:
            case 14:
            case 19:
            case 20:
            case 21:
              $customSize = 'square-gallery-thumbnail';
              $colSize = 'image-item---width-33';
              break;
            default:
              $customSize ='square-gallery-thumbnail';
              $colSize = 'image-item---width-33';
              break;
          }
        @endphp
        <div class="img-item @php echo $colSize; @endphp">
          <a href="@php echo $image['url'] @endphp" title="@php echo $image['alt'] @endphp" class="swipebox">
             <img src="<?php echo $image['sizes'][$customSize]; ?>" alt="<?php echo $image['alt']; ?>" />
          </a>
        </div>
      <?php
        $imgIndex++;
      endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
