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

                    <div class="card-body pt-3">

                        <form action="{{ route('subject.attach-student', $subject) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <!-- Assign Student Form -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="students">Select
                                                    Students*</label>
                                                <select id="students" name="students[]" multiple="multiple"
                                                    class="form-control radius">
                                                    @foreach($students as $student)
                                                    <option value="{{$student->id}}">{{$student->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('students')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit"
                                                class="btn btn-primary btn-block radius">Assign</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
