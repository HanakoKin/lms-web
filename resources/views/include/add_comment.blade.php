<div class="modal fade" id="addcomment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add new Comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{ route('comment.store') }} method="post">
                    @csrf

                    <input type="hidden" id="topic_id" name="topic_id" value="{{ $topic->id }}">
                    <div class="form-floating mb-2">
                        <input type="text" name="comment" class="form-control @error('comment') is-invalid @enderror"
                            id="comment" placeholder="Put a comment" required value="{{ old('comment') }}">
                        <label for="comment">Comment</label>
                        @error('comment')
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
