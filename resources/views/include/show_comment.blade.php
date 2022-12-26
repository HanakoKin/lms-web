<div class="modal fade" id="showcomment{{ $topic->id }}" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="{{ $topic->id }}">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Showing all Comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($topic->comment as $data )
                {{ $data->comment }}
                @endforeach

            </div>
        </div>
    </div>
</div>
