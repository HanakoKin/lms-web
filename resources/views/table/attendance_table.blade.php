<table id="datatable5" class="table table-borderless">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Subject</th>
            <th scope="col">Teacher</th>
            <th scope="col">Student Number</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($attendances as $attendance)
        <tr>
            <td class="text-cappitalize">
                <span class="badge badge-primary text-lg rounded-circle">
                    {{ $loop->iteration }}
                </span>
            </td>
            <td class="text-capitalize">
                {{ $attendance->subject->name }}
            </td>
            <td class="text-capitalize">
                {{ $attendance->teacher->name }}
            </td>
            <td class="text-capitalize">
                {{ $attendance->students_count }}
            </td>
            <td class="text-capitalize">
                {{ $attendance->date->format('D d, m, Y') }}
            </td>
            <td>
                <a href="{{ route('attendance.edit', $attendance) }}" data-bs-toggle="modal"
                    data-bs-target="#editModalAdmin" class="badge bg-success"><i
                        class="fa-solid fa-pen-to-square"></i></a>
                <form action="{{ route('attendance.destroy', $attendance) }}" class="d-inline" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" type="submit"
                        class="badge bg-danger text-white radius" title="delete">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
