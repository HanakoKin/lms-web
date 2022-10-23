<form action="" id="form">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label pb-2" for="subject">Select
                    Course</label>
                <select id="subject" name="subject_filter" class="form-control radius search">
                    <option value="">Select Subject</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}"
                            {{ request()->get('subject_filter') == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label pb-2" for="input-date">Choose
                    Date</label>
                <input class="form-control search datepicker" name="date_filter"
                    value="{{ request()->get('date_filter') }}" id="input-date" placeholder="Select date"
                    type="text">
            </div>
        </div>
    </div>
</form>
