<table class="table table-hover table-nowrap">
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">File</th>
      <th scope="col">Last Modified</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($files as $file)
    <tr>
      <td data-label="#"> <span>{{ $loop->iteration }}</span> </td>
      <td data-label="File"> <span>{{ $file->data_file}}</span> </td>
      <td data-label="Last Modified"> <span>{{ $file->updated_at }}</span>
      </td>
      <td>
        <button class="badge bg-info" data-bs-toggle="modal" data-bs-target="#showfile{{ $file->id }}"><i
            class="fa-solid fa-eye"></i>
        </button>
        <a href="/class/storage/download/{{ $file->data_file }}" class="badge bg-success"><i
            class="fa-solid fa-circle-down"></i></a>
        <a href="/class/storage/delete/{{ $file->id }}" onclick="return confirm('Are you sure ?')"
          class="badge bg-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
