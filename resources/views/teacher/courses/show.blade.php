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
                        <div class="text-center">
                            <h3 class="card-title pt-1 pb-0 mt-4 mb-0">{{ $subject->name }}</h3>
                            <p class="mb-0">{{ $subject->description }}</p>
                            <p class="text-bold"> {{ $subject->students->count() }} <i class="fa-solid fa-users"></i>
                            </p>
                        </div>
                    </div>

                    <div class="card-body">

                        <h3 class="card-title mb-0">List of Students</h3>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush datatable-basic">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="email">Email</th>
                                        <th scope="col" class="sort" data-sort="phone">Phone</th>
                                        <th scope="col" class="sort" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($subject->students as $student)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $student->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $student->email }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $student->phone }}
                                        </td>
                                        <td class="text-capitalize">
                                            <form action="{{ route('subject.remove.student',[$subject, $student]) }}"
                                                class="d-inline" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure?')" type="submit"
                                                    class="badge bg-danger text-white radius" title="Remove student">
                                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
