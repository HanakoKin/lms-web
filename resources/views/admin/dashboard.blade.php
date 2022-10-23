@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

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
                        <div class="filter">

                            <div class="icon">
                                <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body pb-2">

                            <h5 class="card-title mb-0">Admin Table</h5>

                            @include('include.add_admin')

                            @foreach ($admins as $admin)
                            @include('include.edit_admin')
                            @endforeach

                            @include('table.admin_table')

                            @include('include.script_admin')

                        </div>
                    </div>

                    <div class="card top-selling overflow-auto">
                        <div class="filter">

                            <div class="icon">
                                <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop2">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body pb-2">

                            <h5 class="card-title mb-0">Teacher Table</h5>

                            @include('include.add_teacher')

                            @foreach ($teachers as $teacher)
                            @include('include.edit_teacher')
                            @endforeach

                            @include('table.teacher_table')

                            @include('include.script_teacher')

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

                        <div class="card-body pb-2">
                            <h5 class="card-title mb-0">Student Table</h5>

                            @include('include.add_student')

                            @foreach ($students as $student)
                            @include('include.edit_student')
                            @endforeach

                            @include('table.student_table')

                            @include('include.script_student')

                        </div>
                    </div>

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
