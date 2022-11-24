<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add new Topic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{ route('topic.store') }} method="post">
                    @csrf

                    <div class="form-floating mb-2">
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                            id="judul" placeholder="judul" required value="{{ old('judul') }}">
                        <label for="judul">Title</label>
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="deskripsi"
                            class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                            placeholder="deskripsi" required value="{{ old('deskripsi') }}">
                        <label for="deskripsi">Description</label>
                        @error('deskripsi')
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
