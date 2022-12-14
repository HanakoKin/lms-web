@extends('layouts.main')

@section('container')
<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard profile">
    <div class="row">
        <div class="col-xl-12">

            <div class="bg-surface-secondary">

                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title pt-0 pb-0 mb-0">Assign Student</h3>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('subject.attach-student', $subject) }}" method="post">

                            @csrf

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label mt-2 mb-2" for="students">Select
                                            Students*</label>
                                        <select id="students" name="students[]" class="form-control radius">
                                            <option value="">Select Student</option>
                                            @foreach( $students as $student )
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('students')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block radius mt-4">Assign</button>
                                </div>

                                @include('include.script_multipleselect')

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
