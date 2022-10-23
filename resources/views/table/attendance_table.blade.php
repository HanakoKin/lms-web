<table id="datatable5" class="table table-borderless">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Job Title</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Lead Score</th>
            <th scope="col">Company</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subject)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td data-label="Name"> <img alt="..." src="https://source.unsplash.com/400x1200?{{ $subject->name }}"
                    class="avatar avatar-sm rounded-circle me-2">
                <a class="text-heading font-semibold" href="#">
                    {{ $subject->name }}</a>
            </td>
            <td data-label="Job Title"> <span>Web Designer</span> </td>
            <td data-label="Email"> <a class="text-current"
                    href="mailto:robert.fox@example.com">robert.fox@example.com</a>
            </td>
            <td data-label="Phone"> <a class="text-current" href="tel:202-555-0152">202-555-0152</a> </td>
            <td data-label="Lead Score"> <span class="badge bg-soft-success text-success">7/10</span>
            </td>
            <td data-label="Company"> <a class="text-current" href="#">Dribbble</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
