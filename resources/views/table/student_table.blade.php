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
                        class="btn btn-success">Edit</a>
                    <form action="/dashboard/posts" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
