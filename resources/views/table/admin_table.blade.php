<table id="datatable" class="table table-borderless">
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
        @foreach ($admins as $admin)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->username }}</td>
            <td>{{ $admin->email }}</td>
            <td>
                <a onclick="editadmin({{ $admin->id }})" data-bs-toggle="modal" data-bs-target="#editModalAdmin"
                    class="badge bg-success"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/dashboard/admin/deleteadmin/{{ $admin->id }}" onclick="return confirm('Are you sure ?')"
                    class="badge bg-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
