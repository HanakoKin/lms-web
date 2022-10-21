{{-- Modal Edit Subject --}}

<div class="modal fade" id="editModalSubject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/subject/updatesubject') }}" method="post" id="editFormSubject">

                    @method('put')
                    @csrf

                    <input type="text" id="editidsubject" hidden name="id">
                    <div class="form-floating mb-2">
                        <input type="text" name="name" id="editnamesubject"
                            class="form-control @error('name') is-invalid @enderror" placeholder="name" required>
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="updatedata" class="btn btn-primary">Update Subject</button>
                </form>

            </div>
        </div>
    </div>
</div>
