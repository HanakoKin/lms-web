<div class="modal fade" id="showfile{{ $file->id }}" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="{{ $file->id }}">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <embed height=500 width=750 src="/files/{{$file->data_file}}" />

            </div>
        </div>
    </div>
</div>
