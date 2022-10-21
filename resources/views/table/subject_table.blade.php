<table id="datatable4" class="table table-borderless py-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subject)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $subject->name }}</td>
                <td>
                    <a onclick="editsubject({{ $subject->id }})" data-bs-toggle="modal" data-bs-target="#editModalSubject"
                        class="badge bg-success"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/dashboard/subject/deletesubject/{{ $subject->id }}"
                        onclick="return confirm('Are you sure ?')" class="badge bg-danger"><i
                            class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
