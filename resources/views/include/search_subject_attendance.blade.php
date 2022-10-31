<form action="" id="form">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label pb-2 ps-2" for="subject">Select
                    Course</label>
                <select id="subject" name="subject_filter" class="form-control radius search">
                    <option value="">Select Subject</option>
                    @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ request()->get('subject_filter') == $subject->id ? 'selected'
                        : '' }}>
                        {{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label pb-2 ps-2" for="date">Choose
                    Date</label>
                <div class="input-group date" id="datepicker2">
                    <input type="text" class="form-control date search" name="date_filter"
                        value="{{ request()->get('date_filter') }}" placeholder="Select date">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
