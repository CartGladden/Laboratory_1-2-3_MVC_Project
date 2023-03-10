@extends('reservations.index')

@section('content')
  
  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Reserve a <span>Table</span></h2>
          <h2>When someone tells you they are too <span>'BUSY'</span>… It's not a reflection of their schedule; it's a reflection of <span>YOUR</span> spot on their schedule.</h2>
        </div>

        <form action="{{ route('reservations.store') }}" method="POST" role="form" class="php-booking-form">
			<div class="mb-2">
				{{-- <div class="loading">Loading</div> --}}
				@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
					</div>
				@endif
				@if ($errors->any())
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
					</ul>
				</div>
				@endif
			</div>

			@csrf
		<div class="row">
            <div class="col-lg-4 col-md-6 form-group">
            <h5>Customer's Name</h5>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <h5>Customer's Email</h5>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <h5>Customer's Phone #</h5>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
            <h5>Date Of Appointment</h5>
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
            <h5>Time Of Appointment</h5>
              <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
            <h5>Number Of Customers</h5>
              <input type="number" class="form-control" name="number_of_people" id="number_of_people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              
            </div>
          </div>
          <div class="form-group mt-3">
          <h5>Suggestions and ADD-ONS</h5>
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          
          </div>
          
          <div class="text-center"><button type="submit">Reserve Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

@endsection