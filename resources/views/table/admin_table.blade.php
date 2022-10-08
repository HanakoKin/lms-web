<table id="datatable" class="table table-borderless py-2">
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
                        class="btn btn-success">EDIT</a>
                    <a href="#delete{{ $admin->name }}" data-bs-toggle="modal" class="badge bg-warning"><span
                            data-feather="delete"></span></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
