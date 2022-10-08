@extends('layouts.main')

@section('container')
    <div class="pagetitle">
        <h1>Welcome back {{ Str::ucfirst(auth()->user()->name) }}</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

                    <!-- Top Selling -->
                    <div class="col-12">

                        @include('include.alert')

                        <div class="card top-selling overflow-auto">

                            <div class="card-body pb-0">
                                <h5 class="card-title mb-0">Teacher Table</h5>

                                @include('table.teacher_table')

                            </div>

                        </div>

                        <div class="card top-selling overflow-auto">
                            <div class="filter">

                                <div class="icon">
                                    <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop3">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title mb-0">Student Table</h5>

                                @include('include.add_student')

                                @include('table.student_table')

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div>

        </div>
    </section>
@endsection
