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
                        class="btn btn-success">EDIT</a>
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
