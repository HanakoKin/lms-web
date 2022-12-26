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
                        <h5 class="card-title pt-1 pb-0 mb-0">List Tugas</h5>

                        <div class="filter">

                            <div class="pe-3 pb-2">
                                <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>

                        </div>

                        @include('include.add_tugas')
                        @include('include.script_task')

                    </div>

                    <div class="card-body pt-3">

                        @foreach ($tasks as $task)

                        <div class="col-xl-6 col-md-12">
                            <div class="card mb-2">
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between p-md-1">
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <i class="fa-solid fa-book text-primary fa-3x me-4"></i>
                                            </div>
                                            <div>
                                                <h4>{{ $task->name }}</h4>
                                                <p class="mb-0">{{ $task->description }}</p>
                                            </div>
                                        </div>
                                        <div class="align-self-center">
                                            <p class="mb-0">Dikumpulkan pada {{ $task->dateline }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="card">

                    <div class="card-header">
                        <h6>Bootstrap 5 Table</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Lead Score</th>
                                    <th scope="col">Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Job Title"> <img alt="..."
                                            src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                            class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Robert Fox </a>
                                    </td>
                                    <td data-label="Email"> <span>Web Designer</span> </td>
                                    <td data-label="Phone"> <a class="text-current"
                                            href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                    </td>
                                    <td data-label="Lead Score"> <a class="text-current"
                                            href="tel:202-555-0152">202-555-0152</a> </td>
                                    <td data-label="Company"> <span
                                            class="badge bg-soft-success text-success">7/10</span>
                                    </td>
                                    <td data-label=""> <a class="text-current" href="#">Dribbble</a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
