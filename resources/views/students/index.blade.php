@extends('layouts.admin')
@section('main-content') 
    <!-- Begin Page Content -->

        <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ __('Students') }}</h1>

    @if (session('status'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <a href="{{ route('add-student') }}" class="btn btn-primary btn-icon-split" style="margin-left: 87.5%"><span class="icon text-white-50"><i class="fas fa-flag"></i></span><span class="text">Add Student</span></a><span></span>
    </div>

<br>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="display: flex; justify-content: space-between;"> 
            <h6 class="m-0 font-weight-bold text-primary">Students List</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Roll Number</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                         <tr>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Roll Number</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>       
                    </tfoot>
                    <tbody>
                        @if(!empty($students))
                            @foreach($students as $value)
                                <tr>
                                    <td>{{ $value->firstname }}</td>
                                    <td>{{ $value->course }}</td>
                                    <td>{{ $value->enrollment_number }}</td>
                                    <td>{{ $value->birth_date }}</td>
                                    <td>{{ $value->address }}</td>
                                    <td>{{ $value->city }}</td>
                                    <td> 
                                        <a href="{{ route('edit-student', $value->id) }}" class="btn btn-primary btn-square btn-sm"><i class="fas fa-check"></i></a>
                                        <a href="{{ route('delete-student', $value->id) }}" class="btn btn-danger btn-square btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif                                              
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    <!-- /.container-fluid -->

</div>

<!-- End of Main Content -->
@endsection 