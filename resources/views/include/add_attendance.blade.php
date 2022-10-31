<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Start new Attendance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('attendance.store') }}" method="post">
                    @csrf

                    <div class="form-floating mb-2">
                        <div class="form-group">
                            <label class="form-control-label" for="subject">Select Subject*</label>
                            <select id="subject" name="subject_id" class="form-control radius">
                                <option value="">Select Subject</option>
                                @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                            @error('subject_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-floating mb-2">
                        <div class="form-group">
                            <label class="form-control-label" for="input-date">Choose Date*</label>
                            <input class="form-control datepicker  @error('date') is-invalid @enderror " name="date"
                                id="datepicker" placeholder="Select date" type="text"
                                value="{{ \Carbon\Carbon::today()->format('m/d/Y') }}">
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
