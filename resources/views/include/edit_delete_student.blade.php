<div class="modal fade" id="editModalStudent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/student/updatestudent') }}" method="post" id="editFormStudent">

                    @method('put')
                    @csrf

                    <input type="text" id="editidstudent" hidden name="id">
                    <div class="form-floating mb-2">
                        <input type="text" name="name" id="editnamestudent"
                            class="form-control @error('name') is-invalid @enderror" placeholder="name" required>
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="username" id="editusernamestudent"
                            class="form-control @error('username') is-invalid @enderror" placeholder="username"
                            required>
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" id="editnisstudent" name="nis"
                            class="form-control @error('nis') is-invalid @enderror" placeholder="nis" required>
                        <label for="nis">Nis</label>
                        @error('nis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <div class="row mx-auto">
                            <select class="form-select" id="editgenderstudent" name="gender">
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="address" id="editaddressstudent"
                            class="form-control @error('address') is-invalid @enderror" placeholder="address" required>
                        <label for="address">Address</label>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="dateofbirth" id="editdateofbirthstudent"
                            class="form-control @error('dateofbirth') is-invalid @enderror" placeholder="dateofbirth"
                            required>
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
                            <select class="form-select" id="editclassstudent" name="class">
                                <option selected>Class</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <div class="row mx-auto">
                            <select class="form-select" id="editmajorstudent" name="major">
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
                        <input type="email" name="email" id="editemailstudent"
                            class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com"
                            required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="updatedata" class="btn btn-primary">Update Student</button>
                </form>


            </div>
        </div>
    </div>
</div>
