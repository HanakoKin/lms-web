<div class="modal fade" id="editModalAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/admin/updateadmin') }}" method="post" id="editFormAdmin">

                    @method('put')
                    @csrf

                    <input type="text" id="editidadmin" hidden name="id">
                    <div class="form-floating mb-2">
                        <input type="text" name="name" id="editnameadmin"
                            class="form-control @error('name') is-invalid @enderror" placeholder="name" required>
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="username" id="editusernameadmin"
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
                        <div class="row mx-auto">
                            <select class="form-select" id="editgenderadmin" name="gender">
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="address" id="editaddressadmin"
                            class="form-control @error('address') is-invalid @enderror" placeholder="address" required>
                        <label for="address">Address</label>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" name="email" id="editemailadmin"
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
                    <button type="submit" name="updatedata" class="btn btn-primary">Update Admin</button>
                </form>


            </div>
        </div>
    </div>
</div>
