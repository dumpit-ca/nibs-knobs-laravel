@extends('layouts.layout')
@section('title', 'Contact Us')
@section('content')
  <div class="container-fluid g-0">
    <div class="row g-0">
      <div class="col-md-8 col my-5 d-md-block me-md-0 mx-auto px-5">
        <div class="d-flex flex-column text-md-start text-center">
          <h1 class="display-4 text-uppercase SoraBold">CONTACT US</h1>
          <p class="fs-4">
            We would love to hear about a project you have in
            <br />
            mind or discuss the possibility of working together.
          </p>
        </div>
        <form action="" class="row g-3 mt-4">
          <div class="col-md-5 mb-3">
            <label for="inputFullName" class="form-label user-label">Full Name</label>
            <input type="text" class="form-control user-input" placeholder="Full Name" />
            {{-- <div class="mt-3">
            <div class="text-danger" *ngIf="form['name'].errors?.['required']">Please enter your full name</div>
          </div> --}}
          </div>
          <div class="col-md-5 mb-3">
            <label for="inputCompany" class="form-label user-label">Organization/Company</label>
            <input type="text" class="form-control user-input" placeholder="Indicate 'None' if NO AFFILIATIONS" />
            {{-- <div class="mt-3">
            <div class="text-danger" *ngIf="form['name'].errors?.['required']">Please enter your full name</div>
          </div> --}}
          </div>
          <div class="col-md-5 mb-3">
            <label for="inputEmailAddress" class="form-label user-label">Email Address</label>
            <input type="text" class="form-control user-input" placeholder="Email Address" />
            {{-- <div class="mt-3">
            <div class="text-danger" *ngIf="form['name'].errors?.['required']">Please enter your full name</div>
          </div> --}}
          </div>
          <div class="col-md-5 mb-3">
            <label for="inputSubjectConcern" class="form-label user-label">Subject of Concern</label>
            <select id="inputSubjectConcern" class="form-select user-select">
              <option value="Inquiry">Inquiry</option>
              <option value="Suggestions">Suggestions</option>
              <option value="Commendation">Commendation</option>
              <option value="Others">Others</option>
            </select>
            {{-- <div class="mt-3" >
            <div class="text-danger" >Please select your concern</div>
          </div> --}}
          </div>
          <div class="col-12 mb-3">
            <label for="clientMessage" class="form-label SoraBold user-label">Message</label>
            <textarea class="form-control user-textarea" placeholder="Write your message here..." rows="5"></textarea>
            {{-- <div class="mt-3" >
            <div class="text-danger" >Please enter your message</div>
          </div> --}}
          </div>
          <div class="col-12">
            <button class="btn fs-6 rounded-pill px-md-5 px-4 py-2 text-uppercase mx-md-0 d-flex align-items-center me-md-2" type="button" onclick="contactSuccess()">
              SUBMIT MESSAGE
            </button>
          </div>
        </form>
      </div>
      <div class="col-md-4 d-lg-block d-none ms-auto pe-0">
        <img class="vh-100 img-fluid" src="/images/contact-images/form-img.png" alt="" />
      </div>
    </div>
  </div>
@endsection
