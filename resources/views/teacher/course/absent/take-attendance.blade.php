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

                        <h2 class="mt-4">Attendance for : {{ $subject->name }} Course</h2>
                        <h3>Date: {{ $attendance->date->format('D d, m, Y') }}</h3>
                        <p class="text-bold"> {{ $subject->students->count() }} <i
                                class="fas fa-users-class text-blue"></i> </p>

                    </div>

                    <div class="card-body pt-3">

                        <h2 class="mb-3 text-bold">List of Students</h2>
                        <form action="{{ route('attendance.attach', $attendance) }}" method="post">

                            @csrf

                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Name</th>
                                            <th scope="col" class="sort" data-sort="action">Attendant</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($subject->students as $student)
                                        <tr>
                                            <td class="text-capitalize">
                                                {{ $student->name }}
                                            </td>
                                            <td class="">
                                                <div class="custom-control custom-radio d-inline">
                                                    <input type="radio" id="radio-{{ $student->id }}-on"
                                                        name="status[{{ $student->id }}]" value="on"
                                                        class="custom-control-input" required>
                                                    <label class="custom-control-label"
                                                        for="radio-{{ $student->id }}-on">Present</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline">
                                                    <input type="radio" id="radio-{{ $student->id }}-off"
                                                        name="status[{{ $student->id }}]" value="off"
                                                        class="custom-control-input" required>
                                                    <label class="custom-control-label"
                                                        for="radio-{{ $student->id }}-off">Absent</label>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-block radius">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
