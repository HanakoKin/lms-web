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
                    <a href="/dashboard/posts" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts" class="badge bg-warning"><span data-feather="edit"></span></a>
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
