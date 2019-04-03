@extends('layouts.home')
@section('content')
  @php the_post() @endphp
  @php the_content() @endphp
@endsection
