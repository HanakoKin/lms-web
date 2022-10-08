@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Welcome back, {{ Str::ucfirst(auth()->user()->name) }}</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card table-user overflow-auto px-2 pt-2">
                <div class="table-responsive">
                    <div class="d-flex p-2">

                        <h5 class="text-center ms-3">Admin's Table</h5>
                        <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            add
                        </button>

                    </div>

                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Register Admin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/register" method="post">
                                        @csrf

                                        <div class="form-floating mb-2">
                                            <input type="text" name="name"
                                                class="form-control rounded-top @error('name') is-invalid @enderror"
                                                id="name" placeholder="name" required value="{{ old('name') }}">
                                            <label for="name">Name</label>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" name="username"
                                                class="form-control @error('username') is-invalid @enderror" id="username"
                                                placeholder="username" required value="{{ old('username') }}">
                                            <label for="username">Username</label>
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <div class="row mx-auto">
                                                <label for="category" class="form-label">Gender</label>
                                                <select class="form-select" name="category_id">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                placeholder="name@example.com" required value="{{ old('email') }}">
                                            <label for="email">Email address</label>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="password" name="password"
                                                class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                                id="password" placeholder="password" required>
                                            <label for="password">Password</label>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="/dashboard/posts" class="badge bg-info"><span
                                                data-feather="eye"></span></a>
                                        <a href="/dashboard/posts" class="badge bg-warning"><span
                                                data-feather="edit"></span></a>
                                        <form action="/dashboard/posts" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Are you sure ?')"><span
                                                    data-feather="x-circle"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card table-user overflow-auto px-2 pt-2">
                <div class="table-responsive">
                    <h5 class="text-center">Teacher's Table</h5>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="/dashboard/posts" class="badge bg-info"><span
                                                data-feather="eye"></span></a>
                                        <a href="/dashboard/posts" class="badge bg-warning"><span
                                                data-feather="edit"></span></a>
                                        <form action="/dashboard/posts" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Are you sure ?')"><span
                                                    data-feather="x-circle"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card table-user overflow-auto px-2 pt-2">
                <div class="table-responsive">
                    <h5 class="text-center">Teacher's Table</h5>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="/dashboard/posts" class="badge bg-info"><span
                                                data-feather="eye"></span></a>
                                        <a href="/dashboard/posts" class="badge bg-warning"><span
                                                data-feather="edit"></span></a>
                                        <form action="/dashboard/posts" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Are you sure ?')"><span
                                                    data-feather="x-circle"></span></button>
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
@endsection
