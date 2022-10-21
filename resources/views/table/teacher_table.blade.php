<table id="datatable2" class="table table-borderless py-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->username }}</td>
                <td>{{ $teacher->email }}</td>
                <td>
                    <a onclick="editteacher({{ $teacher->id }})" data-bs-toggle="modal" data-bs-target="#editModalTeacher"
                        class="badge bg-success"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/dashboard/teacher/deleteteacher/{{ $teacher->id }}"
                        onclick="return confirm('Are you sure ?')" class="badge bg-danger"><i
                            class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
