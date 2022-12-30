@extends('layouts.admin')
@section('main-content')
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<div class="card mb-4">
	<div class="card-header">
	    Default Card Example
	</div>
	<div class="card-body">
		<form action="{{ route('store-student') }}" method="POST">
			@csrf
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">First Name</label>
		      <input type="name" name="firstname" class="form-control" id="inputEmail4">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Last Name</label>
		      <input type="name" name="lastname" class="form-control" id="inputPassword4">
		    </div>
		  </div>

  		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Enrollment Number</label>
		      <input type="name" name="enrollment_number" class="form-control" id="inputEmail4">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">GR Number</label>
		      <input type="name" name="gr_number" class="form-control" id="inputPassword4">
		    </div>
		  </div>

		   <div class="form-row">
		      <div class="form-group col-md-4">
		      <label for="inputState">Course</label>
		      <select id="inputState" class="form-control" name="course">
		        <option selected>Choose...</option>
		        <option value="php">PHP</option>
		        <option value="java">JAVA</option>
		        <option value="dbms">DBMS</option>
		      </select>
		    </div>
		       <div class="form-group col-md-4">
		      <label for="inputState">Gender</label>
		      <select id="inputState" class="form-control" name="gender">
		        <option selected>Choose...</option>
		        <option value="male">Male</option>
		        <option value="female">Female</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputZip">DOB</label>
		      <input type="date" name="birth_date" class="form-control" id="inputZip">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputAddress">Address</label>
		    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
		  </div>

		  <div class="form-group">
		    <label for="inputAddress2">Address 2</label>
		    <input type="text" name="address_two" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
		  </div>

		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">City</label>
		      <input type="text" name="city" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputState">State</label>
		      <select id="inputState" class="form-control" name="state">
		        <option selected>Choose...</option>
		        <option value="gujarat">Gujarat</option>
		        <option value="delhi">Delhi</option>
		        <option value="kalanataka">Kalanataka</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputZip">Zip</label>
		      <input type="text" name="zip_code" class="form-control" id="inputZip">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" name="is_active" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Active
		      </label>
		    </div>
		  </div>

		  <button type="submit" class="btn btn-primary">Save</button>
		  <a href="{{ route('students') }}"><button type="button" class="btn btn-danger">Back</button></a>
		</form>
	</div>
</div>

@endsection