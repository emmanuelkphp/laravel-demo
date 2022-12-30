@extends('layouts.admin')
@section('main-content')
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<div class="card mb-4">
	<div class="card-header">
	    Default Card Example
	</div>
	<div class="card-body">
		<form action="{{ route('update-student', $students->id) }}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="PUT">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">First Name</label>
		      <input type="name" name="firstname" value="{{ $students->firstname }}" class="form-control" id="inputEmail4">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Last Name</label>
		      <input type="name" name="lastname" value="{{ $students->lastname }}" class="form-control" id="inputPassword4">
		    </div>
		  </div>

  		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Enrollment Number</label>
		      <input type="name" name="enrollment_number" value="{{ $students->enrollment_number }}" class="form-control" id="inputEmail4">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">GR Number</label>
		      <input type="name" name="gr_number" value="{{ $students->gr_number }}" class="form-control" id="inputPassword4">
		    </div>
		  </div>

		   <div class="form-row">
		      <div class="form-group col-md-4">
		      <label for="inputState">Course</label>
		      <select id="inputState" class="form-control" name="course">
		        <option selected>Choose...</option>
		        <option value="php" {{ ($students->course == "php") ? "selected" : null }}>PHP</option>
		        <option value="java" {{ ($students->course == "java") ? "selected" : null }}>JAVA</option>
		        <option value="dbms" {{ ($students->course == "dbms") ? "selected" : null }}>DBMS</option>
		      </select>
		    </div>
		       <div class="form-group col-md-4">
		      <label for="inputState">Gender</label>
		      <select id="inputState" class="form-control" name="gender">
		        <option selected>Choose...</option>
		        <option value="male"  {{ ($students->gender == "male") ? "selected" : null }}>Male</option>
		        <option value="female" {{ ($students->course == "female") ? "selected" : null }}>Female</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputZip">DOB</label>
		      <input type="date" name="birth_date" value="{{ $students->birth_date }}" class="form-control" id="inputZip">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputAddress">Address</label>
		    <input type="text" name="address" value="{{ $students->address }}" class="form-control" id="inputAddress" placeholder="1234 Main St">
		  </div>

		  <div class="form-group">
		    <label for="inputAddress2">Address 2</label>
		    <input type="text" name="address_two" value="{{ $students->address_two }}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
		  </div>

		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">City</label>
		      <input type="text" name="city" value="{{ $students->city }}" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputState">State</label>
		      <select id="inputState" class="form-control" name="state">
		        <option selected>Choose...</option>
		        <option value="gujarat" {{ ($students->state == "gujarat") ? "selected" : null }}>Gujarat</option>
		        <option value="delhi" {{ ($students->state == "delhi") ? "selected" : null }}>Delhi</option>
		        <option value="kalanataka" {{ ($students->state == "kalanataka") ? "selected" : null }}>Kalanataka</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputZip">Zip</label>
		      <input type="text" name="zip_code" value="{{ $students->zip_code }}" class="form-control" id="inputZip">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" name="is_active" id="gridCheck" {{ ($students->is_active == 1) ? 'checked' : null; }}>
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