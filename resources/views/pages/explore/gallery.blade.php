@extends('layouts.layout')
@section('title', 'Gallery')
@section('content')
  <div class="container-fluid my-5 px-lg-5">
    <div class="row text-md-start text-center flex-column">
      <div class="col-lg col-sm">
        <h1 class="display-5 text-uppercase SoraBold">EXPLORE YOUR</h1>
        <h1 class="display-5">
          Future
          <span class="RockSalt text-uppercase d-inline-block mt-lg-0 mt-4" id="fingertips">Home</span>
        </h1>
        <p class="fs-6 fw-normal" id="text">Browse designs to transform your home!</p>
      </div>
    </div>
  </div>


  {{-- kitchen --}}
  <div class="container-fluid mt-4 px-lg-5">
    <div class="row align-items-center p-0">
      <div class="col-md-8">
        <h1 class="display-6 SoraBold">Kitchen Designs</h1>
        <p class="fs-6">
          The kitchen exudes warmth and caring as the heart of your house. To develop modular kitchens that you would adore, our interior design team
          takes into account your preferences, way of life, and financial constraints.
        </p>
      </div>
      <div class="col-md-4 mt-md-0 mt-2">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="#" class="btn text-uppercase rounded-pill me-md-2 px-md-5 px-4 py-2">SEE ALL DESIGNS</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5 gallery">
    @foreach ($kitchens as $kitchen)
      <div class="gallery-card">
        <div class="card border-0 bg-transparent mx-2">
          <img src="{{ asset("images/home-images/{$kitchen['image']}") }}" class="card-img-top" alt="...">
          <div class="card-body mt-3">
            <h5 class="card-title">{{ $kitchen['name'] }}</h5>
            <p class="card-text fs-6">{{ $kitchen['dimensions'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>


  {{-- bedroom --}}
  <div class="container-fluid mt-4 px-lg-5">
    <div class="row align-items-center p-0">
      <div class="col-md-8">
        <h1 class="display-6 SoraBold mt-md-3">Bedroom Designs</h1>
        <p class="fs-6">
          Our streamlined and fashionable wardrobe designs are perfect for maximizing every square inch of storage space since they are as beautiful as
          they are efficient. We create fantastic environments with outstanding interior design concepts!
        </p>
      </div>
      <div class="col-md-4 mt-md-0 mt-2">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="#" class="btn text-uppercase rounded-pill me-md-2 px-md-5 px-4 py-2">SEE ALL DESIGNS</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5 gallery">
    @foreach ($bedrooms as $bedroom)
      <div class="gallery-card">
        <div class="card border-0 bg-transparent mx-2">
          <img src="{{ asset("images/home-images/{$bedroom['image']}") }}" class="card-img-top" alt="...">
          <div class="card-body mt-3">
            <h5 class="card-title">{{ $bedroom['name'] }}</h5>
            <p class="card-text fs-6">{{ $bedroom['dimensions'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>


  {{-- living room --}}
  <div class="container-fluid mt-4 px-lg-5">
    <div class="row align-items-center p-0">
      <div class="col-md-8">
        <h1 class="display-6 SoraBold mt-md-3">Living Room Designs</h1>
        <p class="fs-6">
          We provide you with innovative home design goods that harmoniously combine to create attractive living places. Get intelligent home interior
          design components that enhance your interiors and create value over time!
        </p>
      </div>
      <div class="col-md-4 mt-md-0 mt-2">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="#" class="btn text-uppercase rounded-pill me-md-2 px-md-5 px-4 py-2">SEE ALL DESIGNS</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5 gallery">
    @foreach ($livingrooms as $livingroom)
      <div class="gallery-card">
        <div class="card border-0 bg-transparent mx-2">
          <img src="{{ asset("images/home-images/{$livingroom['image']}") }}" class="card-img-top" alt="...">
          <div class="card-body mt-3">
            <h5 class="card-title">{{ $livingroom['name'] }}</h5>
            <p class="card-text fs-6">{{ $livingroom['dimensions'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  {{-- Bathroom room --}}
  <div class="container-fluid mt-4 px-lg-5">
    <div class="row align-items-center p-0">
      <div class="col-md-8">
        <h1 class="display-6 SoraBold mt-md-3">Bathroom Designs</h1>
        <p class="fs-6">
          Your bathroom deserves the best, and Nibs and Knobs offers a selection of bathrooms that have been specially selected and ergonomically
          designed to meet your unique needs in terms of functionality, available space, and aesthetic preferences.
        </p>
      </div>
      <div class="col-md-4 mt-md-0 mt-2">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="#" class="btn text-uppercase rounded-pill me-md-2 px-md-5 px-4 py-2">SEE ALL DESIGNS</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5 gallery">
    @foreach ($bathrooms as $bathroom)
      <div class="gallery-card">
        <div class="card border-0 bg-transparent mx-2">
          <img src="{{ asset("images/home-images/{$bathroom['image']}") }}" class="card-img-top" alt="...">
          <div class="card-body mt-3">
            <h5 class="card-title">{{ $bathroom['name'] }}</h5>
            <p class="card-text fs-6">{{ $bathroom['dimensions'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  {{-- Space Saving --}}
  <div class="container-fluid mt-4 px-lg-5">
    <div class="row align-items-center p-0">
      <div class="col-md-8">
        <h1 class="display-6 SoraBold mt-md-3">Space-Saving Designs</h1>
        <p class="fs-6">
          Make the most of small spaces with clever and ingenious space-saving furniture. Using interior designs that make the best use of the space you
          have available, transform your living areas.
        </p>
      </div>
      <div class="col-md-4 mt-md-0 mt-2">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="#" class="btn text-uppercase rounded-pill me-md-2 px-md-5 px-4 py-2">SEE ALL DESIGNS</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5 gallery">
    @foreach ($spacesavings as $spacesaving)
      <div class="gallery-card">
        <div class="card border-0 bg-transparent mx-2">
          <img src="{{ asset("images/home-images/{$spacesaving['image']}") }}" class="card-img-top" alt="...">
          <div class="card-body mt-3">
            <h5 class="card-title">{{ $spacesaving['name'] }}</h5>
            <p class="card-text fs-6">{{ $spacesaving['dimensions'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

@endsection
@section('script')
  <script type="text/javascript">
    $('.gallery').slick({
      centerMode: true,
      centerPadding: '60px',
      infinite: true,
      autoplay: true,
      speed: 1000,
      prevArrow: `<button type="button" class="slick-prev prevArrow d-flex p-1"><i class="fa-solid fa-arrow-left text-white w-100 h-100 m-auto"></i></button>`,
      nextArrow: `<button type="button" class="slick-next nextArrow d-flex p-1"><i class="fa-solid fa-arrow-right text-white w-100 h-100 m-auto"></i></button>`,
      slidesToShow: 4,
      // slidesToScroll: 1,
      responsive: [{
          // small screen
          breakpoint: 992,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 4
          }
        },
        {
          // medium screen
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          // small screen
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  </script>
@endsection
