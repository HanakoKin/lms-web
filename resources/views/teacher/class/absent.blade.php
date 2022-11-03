@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

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
                @include('include.alert')
                @include('include.error')

                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title pt-1 pb-0 mb-0">Filter</h5>

                        <div class="filter">

                            <div class="pe-3 pb-2">
                                <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="card-body pt-3">

                        @include('include.add_attendance')

                        @include('include.search_subject_attendance')

                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="table-responsive">

                            @include('table.attendance_table')

                            @include('include.script_attendance')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
