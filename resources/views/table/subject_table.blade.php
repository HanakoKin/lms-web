<table id="datatable4" class="table table-borderless py-2">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Students Number</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subject)
        <tr>
            <td>{{ $subject->name }}</td>
            <td>{{ $subject->description }}</td>
            <td>{{ $subject->students_count }}</td>
            <td>
                <a onclick="editsubject({{ $subject->id }})" title="edit subject" data-bs-toggle="modal"
                    data-bs-target="#editModalSubject" class="badge bg-success"><i
                        class="fa-solid fa-pen-to-square"></i></a>
                <a href="{{ route('subject.show', $subject) }}" class="badge bg-info"><i
                        class="fa-solid fa-eye"></i></a>
                <a href="{{ route('subject.assign-student', $subject) }}" class="badge bg-warning"><i
                        class="fa-solid fa-users"></i></a>
                <a href="subject/deletesubject/{{ $subject->id }}" onclick="return confirm('Are you sure ?')"
                    class="badge bg-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
