<table id="datatable3" class="table table-borderless py-2">
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
        @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->username }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <a onclick="editstudent({{ $student->id }})" data-bs-toggle="modal" data-bs-target="#editModalStudent"
                        class="badge bg-success"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/dashboard/student/deletestudent/{{ $student->id }}"
                        onclick="return confirm('Are you sure ?')" class="badge bg-danger"><i
                            class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
