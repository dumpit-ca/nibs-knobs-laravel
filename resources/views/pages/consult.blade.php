@extends('layouts.front')
@section('title', 'Consult')
@section('content')
  <div class="container">
    <div class="row text-md-start text-center">
      <div class="col-lg col-sm mt-4">
        <h1 class="display-5 text-uppercase SoraBold">
          BOOK A <br />
          CONSULTATION
        </h1>
        <p class="fs-5">We'll never share your information with anyone else</p>
      </div>
    </div>
  </div>
  {{-- consult form --}}
  <form action="">
    <div class="container-fluid my-5">
      <div class="form-container p-5">
        <div class="row p-0 g-5">
          <div class="col-lg-6">
            <div class="row g-3">
              <div class="col-md-5 mb-3">
                <label for="inputPropertyType" class="form-label user-label">Type of Property</label>
                <select class="form-select user-select" aria-label="Property Type">
                  <option value="Apartment">Apartment</option>
                  <option value="Townhouse">Townhouse</option>
                  <option value="Condominium">Condominium</option>
                </select>
                {{-- <div class="mt-3">
                  <div class="text-danger">Please choose a property type</div>
                </div> --}}
              </div>
              <div class="col-md-5 mb-3">
                <label for="exampleFormControlInput1" class="form-label user-label">Budget</label>
                <input type="text" placeholder="Enter Budget" class="form-control user-number" />
                {{-- <div class="mt-3">
                <div class="text-danger">Please indicate your budget</div>
              </div> --}}
              </div>
              <div class="col-12 form-group mb-3">
                <div class="row">
                  <div class="col">
                    <label for="exampleFormControlInput1" class="form-label user-label SoraBold">I am planning to:</label>
                  </div>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="plan" id="inlineRadio1" value="Renovate" />
                  <label class="form-check-label" for="inlineRadio1">Renovate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="plan" id="inlineRadio1" value="Remodel" />
                  <label class="form-check-label" for="inlineRadio1">Remodel</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="plan" id="inlineRadio1" value="Construct" />
                  <label class="form-check-label" for="inlineRadio1">Construct</label>
                </div>
                {{-- <div class="mt-3">
                <div class="text-danger">Please indicate your plans</div>
              </div> --}}
              </div>
              <div class="col-12 mb-3">
                <label for="exampleFormControlInput1" class="form-label user-label SoraBold">Note for Designer</label>
                <textarea class="form-control user-textarea" placeholder="Know the designer what to expect" rows="5"></textarea>
                {{-- <div class="mt-3" >
              <div class="text-danger" >Please indicate your notes for the designer</div>
            </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row g-3">
              <div class="col-12 mb-3">
                <label for="name" class="form-label user-label">Name</label>
                <input type="text" class="form-control user-input" placeholder="Enter your name" />
                {{-- <div class="mt-3">
                <div class="text-danger">Please enter your full name</div>
              </div> --}}
              </div>
              <div class="col-12 mb-3">
                <label for="name" class="form-label user-label">Email</label>
                <input type="text" class="form-control user-input" placeholder="Email Address" />
                {{-- <div class="mt-3">
                <div class="text-danger">Please enter your full name</div>
              </div> --}}
              </div>
              <div class="col-md-5 mb-3">
                <label for="phone" class="form-label user-label">Phone Number</label>
                <input type="text" class="form-control user-input" formControlName="mobile" placeholder="Phone Number" />
                {{-- <div class="mt-3">
                <div class="text-danger">Please enter your phone number</div>
              </div> --}}
              </div>
              <div class="col-md-5 mb-3">
                <label for="company" class="form-label user-label">Company</label>
                <input type="text" class="form-control user-input" placeholder="Indicate 'None' if NO AFFILIATIONS" />
                {{-- <div class="mt-3">
                <div class="text-danger">Please indicate 'None' if NO AFFILIATIONS</div>
              </div> --}}
              </div>
              <div class="col-md-3 col mb-3">
                <label for="exampleFormControlInput1" class="form-label user-label SoraBold">Consultation Date</label>
                <input type="date" id="inputConsultDate" />
                {{-- <div class="mt-3">
                <div class="text-danger">Please choose a date</div>
              </div> --}}
              </div>
              <div class="col-md-6 col mb-3">
                <div class="row">
                  <div class="col">
                    <label for="exampleFormControlInput1" class="form-label user-label SoraBold">Time Available</label>
                  </div>
                </div>
                <div class="d-inline-block">
                  <input type="time" name="timeAvailable" formControlName="timeAppointment" id="inputTimeAvailable" />
                </div>
                {{-- <div class="mt-3">
                <div class="text-danger" >Please choose a time</div>
              </div> --}}
              </div>
            </div>
            <div class="d-md-flex justify-content-md-end my-5">
              <button class="btn fs-6 mb-4 rounded-pill px-md-5 px-4 py-2 text-uppercase mx-md-0 d-flex align-items-center me-md-2" type="button" onclick="bookedSuccess()">
                BOOK CONSULTANCY
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

@endsection
