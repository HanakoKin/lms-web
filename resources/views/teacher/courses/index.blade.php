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

<section class="section dashboard">
    <div class="row">

        <div class="col-lg-12">
            <div class="row">

                <!-- Top Selling -->
                <div class="col-12">

                    @include('include.alert')

                    <div class="card top-selling overflow-auto">
                        <div class="filter">

                            <div class="icon">
                                <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop4">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body pb-2">
                            <h5 class="card-title mb-0">Subjects Table</h5>

                            @include('include.add_subject')

                            @foreach ($subjects as $subject)
                            @include('include.edit_subject')
                            @endforeach

                            @include('table.subject_table')

                            @include('include.script_subject')

                        </div>
                    </div>
                </div><!-- End Top Selling -->

            </div>
        </div>

    </div>
</section>
@endsection
