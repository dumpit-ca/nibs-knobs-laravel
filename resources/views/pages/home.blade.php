@extends('layouts.layout')
@section('title', 'Home')
@section('content')
  <div class="container-fluid">
    <div class="row text-md-start text-center flex-column">
      <div class="col-lg col-sm mt-4">
        <h1 class="display-5 text-uppercase SoraBold">YOUR PERFECT HOME</h1>
        <h1 class="display-5">
          Right at your
          <span class="RockSalt text-uppercase d-inline-block mt-lg-0 mt-4" id="fingertips">fingertips</span>
        </h1>
      </div>
    </div>
  </div>
  {{-- about us --}}
  <section class="container-fluid my-5">
    <div class="row">
      <div class="col col-lg-4 w-lg-50">
        <div class="d-flex flex-column align-items-start flex-shrink-1">
          <h2 class="display-6 SoraBold">What's about us?</h2>
          <p class="fs-5 fw-normal" id="text">
            We came up with a concept. In different probable house problems, many of us struggling with interior design of our homes. Therefore, we
            created this website to provide a great solution for the people with the same issue. This website offers a variety of interior designs for
            many types of set up for your home from tradition to latest design with efficiency, space-saving and aesthetic looking interior design etc.
          </p>
          <a class="btn fs-6 mb-4 rounded-pill px-5 py-1 text-uppercase mx-md-0 d-flex align-items-center">check our services</a>
        </div>
      </div>
      <div class="col-md-auto col-12 d-flex flex-column gap-3 mb-3">
        <img src="/images/home-images/home-1.png" alt="N&K chairs" />
        <img src="/images/home-images/home-2.png" alt="N&K Sofa Set" />
      </div>
      <div class="col-md-auto col-lg-3 col-sm-1 gap-5">
        <img class="img-responsive" id="home-3" src="/images/home-images/home-3.png" alt="" />
      </div>
    </div>
  </section>
  {{-- N&K Culture --}}
  <section class="container-fluid my-lg-5 my-3">
    <h1 class="display-6 text-lg-start text-center SoraBold">The Nibs &amp; Knobs Culture</h1>
    <!-- first row -->
    <div class="row g-0 mt-4 mb-3 p-0">
      <div class="col-md-8 ps-lg-2 ps-md-2 ps-0 mb-md-0 mb-3 culture-text position-relative">
        <img src="/images/home-images/culture-section/culture-1.png" alt="" class="w-100 h-100" />
        <div class="d-flex flex-column gap-1 RockSalt caption overflow-hidden">
          <p class="fs-4 position-absolute mb-0" id="craft-caption">
            we source furniture <br />
            from the finest craftsmen
          </p>
        </div>
      </div>
      <div class="col-12 col-md-4 ps-lg-3 ps-md-3 ps-0 culture-text position-relative">
        <img src="/images/home-images/culture-section/culture-2.png" alt="" class="w-100 h-100" />
        <div class="d-flex flex-column gap-1 RockSalt caption overflow-hidden text-md-end text-start">
          <p class="fs-4 me-0 ms-2 position-absolute mb-0" id="quality-caption">
            quality is the <br />
            aesthetic
          </p>
        </div>
      </div>
    </div>
    <!-- second row -->
    <div class="row g-0 mb-3 p-0">
      <div class="col-sm ps-md-2 pb-md-0 pb-3 culture-text position-relative">
        <img src="/images/home-images/culture-section/culture-3.png" alt="" class="w-100 h-100" />
        <div class="d-flex flex-column gap-1 caption overflow-hidden">
          <p class="fs-4 lh-sm ms-md-0 ms-0 mb-0 position-absolute text-uppercase text-start second-row-caption">
            <span class="SoraBold">consult</span>
            <br />
            <span class="SoraBold">your designs</span>
            <br />
            easily
          </p>
        </div>
      </div>
      <div class="col-sm px-md-2 pb-md-0 pb-3 culture-text position-relative">
        <img src="/images/home-images/culture-section/culture-4.png" alt="" class="w-100 h-100" />
        <div class="d-flex flex-column gap-1 caption overflow-hidden">
          <p class="fs-4 lh-sm ms-md-0 ms-0 mb-0 position-absolute text-uppercase text-start second-row-caption">
            <span class="SoraBold">know</span>
            <br />
            <span class="SoraBold">your space</span>
            <br />
            <span>with us</span>
          </p>
        </div>
      </div>
      <div class="col-sm pe-md-0 pb-md-0 pb-3 culture-text position-relative">
        <img src="/images/home-images/culture-section/culture-5.png" alt="" class="w-100 h-100" />
        <div class="d-flex flex-column gap-1 caption overflow-hidden">
          <p class="lh-sm ms-md-0 ms-0 mb-0 position-absolute text-uppercase text-start" id="beautify-caption">
            <span class="SoraBold fs-4">big? small?</span>
            <br />
            <span class="fs-4">beautify your</span>
            <br />
            <span class="fs-4">home</span>
          </p>
        </div>
      </div>
    </div>
    <!-- third row -->
    <div class="row g-0 p-0">
      <div class="col-12 col-md-4 ps-md-2 ps-0 mb-md-0 mb-3 culture-text position-relative">
        <img src="/images/home-images/culture-section/culture-6.png" alt="" class="w-100 h-100" />
        <div class="d-flex flex-column gap-1 RockSalt caption overflow-hidden">
          <p class="fs-4 m-0 position-absolute third-row-caption">
            your plan? <br />
            we'll work out
          </p>
        </div>
      </div>
      <div class="col-md-8 ps-md-3 ps-0 culture-text position-relative">
        <img src="/images/home-images/culture-section/culture-7.png" alt="" class="w-100 h-100" />
        <div class="d-flex flex-column gap-1 RockSalt caption overflow-hidden">
          <p class="fs-4 m-0 position-absolute third-row-caption" id="nk-caption">
            select your needs &amp; wants <br />
            even your nibs and knobs!
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid my-5">
    <div class="text-md-start text-center my-5">
      <h2 class="display-6 SoraBold">N&amp;K Services</h2>
    </div>
    <div class="row p-0 g-0">
      <div class="col-md-8">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="services-card py-4 mb-3">
              <div class="row g-0 align-items-center">
                <div class="col-md-4">
                  <img src="/images/home-images/services/icon-book.png" alt="N&K Booking icon" class="img-fluid mx-auto d-block" />
                </div>
                <div class="col-md-8">
                  <div class="card-body lh-sm mt-md-0 mt-4 text-md-start text-center">
                    <p class="card-title fs-4">Book Design</p>
                    <p class="card-title fs-4">Consultancy</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="services-card py-4 mb-3">
              <div class="row g-0 align-items-center">
                <div class="col-md-4">
                  <img src="/images/home-images/services/icon-furniture.png" alt="N&K Furniture icon" class="img-fluid mx-auto d-block" />
                </div>
                <div class="col-md-8">
                  <div class="card-body lh-sm mt-md-0 mt-4 text-md-start text-center">
                    <p class="card-title fs-4">Source out</p>
                    <p class="card-title fs-4">Furnitures</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="services-card py-4 mb-3">
              <div class="row g-0 align-items-center">
                <div class="col-md-4">
                  <img src="/images/home-images/services/icon-assessment.png" alt="N&K Assessment icon" class="img-fluid mx-auto d-block" />
                </div>
                <div class="col-md-8">
                  <div class="card-body lh-sm mt-md-0 mt-4 text-md-start text-center">
                    <p class="card-title fs-4">Space</p>
                    <p class="card-title fs-4">Assessment</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="services-card py-4 mb-3">
              <div class="row g-0 align-items-center">
                <div class="col-md-4">
                  <img src="/images/home-images/services/icon-map.png" alt="" class="img-fluid mx-auto d-block" />
                </div>
                <div class="col-md-8">
                  <div class="card-body mt-md-0 mt-4 text-md-start text-center">
                    <p class="card-title lh-sm fs-4">Planning and</p>
                    <p class="card-title lh-sm fs-4">Recommendation</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 ps-md-3 ps-0">
        <div class="fs-5 me-0 mb-0 my-md-0 my-4 text-start">
          <p>What do you need help with? Here are the services offered by Nibs & Knobs.</p>
          <br />
          <p>
            Nibs & Knobs offers different services designed to help customers. Whether its about planning the home interior design, to sourcing out the
            right furnitures and materials, to assessing house spaces, and to asking a professional for a plan or recommendation, Nibs and Knobs got it
            covered. If there are any suggestions, kindly send us a message.
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
