<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Register Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/student') }}" method="post">
                    @csrf

                    <div class="form-floating mb-2">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
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
                        <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror"
                            id="nis" placeholder="nis" required value="{{ old('nis') }}">
                        <label for="nis">Nis</label>
                        @error('nis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <input type="hidden" id="role" name="role" value="student">
                    <div class="form-floating mb-2">
                        <div class="row mx-auto">
                            <select class="form-select" name="gender">
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                            id="address" placeholder="address" required value="{{ old('address') }}">
                        <label for="address">Address</label>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="dateofbirth"
                            class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth"
                            placeholder="dateofbirth" required value="{{ old('dateofbirth') }}">
                        <label for="dateofbirth">Date of Birth</label>
                        @error('dateofbirth')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-floating mb-2">
                        <div class='input-group date' id='CalendarDateTime'>
                            <input type='text' class="form-control">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div> --}}
                    <div class="form-floating mb-2">
                        <div class="row mx-auto">
                            <select class="form-select" name="class">
                                <option selected>Class</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <div class="row mx-auto">
                            <select class="form-select" name="major">
                                <option selected>Major Class</option>
                                <option value="Natural Science Major">Natural Science Major
                                </option>
                                <option value="Social Science Major">Social Science Major
                                </option>
                                <option value="Language Major">Language Major</option>
                                <option value="Religion Major">Religion Major</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
