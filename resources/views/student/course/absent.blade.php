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

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active">Absent</button>
                            </li>

                        </ul>

                        <div class="tab-content pt-2">

                            <!-- Absent -->
                            <div class="tab-pane fade show active">
                                <div class="bg-surface-secondary">
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
                                                @foreach ($subjects as $subject)
                                                    <tr>
                                                        <td data-label="Name"> <img alt="..."
                                                                src="https://source.unsplash.com/400x1200?{{ $subject->name }}"
                                                                class="avatar avatar-sm rounded-circle me-2">
                                                            <a class="text-heading font-semibold" href="#">
                                                                {{ $subject->name }}</a>
                                                        </td>
                                                        <td data-label="Job Title"> <span>Web Designer</span> </td>
                                                        <td data-label="Email"> <a class="text-current"
                                                                href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                                        </td>
                                                        <td data-label="Phone"> <a class="text-current"
                                                                href="tel:202-555-0152">202-555-0152</a> </td>
                                                        <td data-label="Lead Score"> <span
                                                                class="badge bg-soft-success text-success">7/10</span>
                                                        </td>
                                                        <td data-label="Company"> <a class="text-current"
                                                                href="#">Dribbble</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
