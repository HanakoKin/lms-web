<div class="modal fade" id="add-file" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add new File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{ route('storage.addfile') }} method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating mb-2">
                        <input type="hidden" id="folder_id" name="folder_id" value="{{ $folder->id }}">
                        <input type="file" name="filename"
                            class="form-control pt-5 @error('filename') is-invalid @enderror" id="filename"
                            placeholder="filename" required">
                        @error('filename')
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
