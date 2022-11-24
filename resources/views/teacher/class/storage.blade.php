@extends('layouts.main')

@section('container')
<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard profile">
    <div class="row">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                    <div class="tab-content pt-2">

                        <!-- Storage -->
                        <div class="tab-pane active pt-3 px-2">
                            <div class="row flex-row flex-nowrap overflow-x-scroll" style="height: 160px">
                                @foreach ($subjects as $subject)

                                <div class="col mb-3 pb-3">
                                    <div class="col-xxl-3">
                                        <div class="class storage-card" style="width: 200px">
                                            <div class="pt-2 ps-5">
                                                <div class="card-icon rounded-circle d-flex align-items-center">
                                                    <i class="bi bi-folder-fill"></i>
                                                </div>
                                                <div class="pt-0 pb-3">
                                                    <h4>{{ $subject->name }}</h4>
                                                    <a href="/subject" class="text-muted small pt-1 stretched-link">12
                                                        Files</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap">
                                    <h5 class="card-title mb-0">Recent Upload</h5>
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Lead Score</th>
                                            <th scope="col">Company</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Job Title"> <img alt="..."
                                                    src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                    class="avatar avatar-sm rounded-circle me-2">
                                                <a class="text-heading font-semibold" href="#">
                                                    Robert Fox </a>
                                            </td>
                                            <td data-label="Email"> <span>Web Designer</span> </td>
                                            <td data-label="Phone"> <a class="text-current"
                                                    href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                            </td>
                                            <td data-label="Lead Score"> <a class="text-current"
                                                    href="tel:202-555-0152">202-555-0152</a> </td>
                                            <td data-label="Company"> <span
                                                    class="badge bg-soft-success text-success">7/10</span>
                                            </td>
                                            <td data-label=""> <a class="text-current" href="#">Dribbble</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td data-label="Job Title"> <img alt="..."
                                                    src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                    class="avatar avatar-sm rounded-circle me-2">
                                                <a class="text-heading font-semibold" href="#">
                                                    Darlene Robertson </a>
                                            </td>
                                            <td data-label="Email"> <span>Developer</span> </td>
                                            <td data-label="Phone"> <a class="text-current"
                                                    href="mailto:darlene@example.com">darlene@example.com</a>
                                            </td>
                                            <td data-label="Lead Score"> <a class="text-current"
                                                    href="tel:224-567-2662">224-567-2662</a> </td>
                                            <td data-label="Company"> <span
                                                    class="badge bg-soft-warning text-warning">5/10</span>
                                            </td>
                                            <td data-label=""> <a class="text-current" href="#">Netguru</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td data-label="Job Title"> <img alt="..."
                                                    src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                    class="avatar avatar-sm rounded-circle me-2">
                                                <a class="text-heading font-semibold" href="#">
                                                    Theresa Webb </a>
                                            </td>
                                            <td data-label="Email"> <span>Marketing
                                                    Specialist</span> </td>
                                            <td data-label="Phone"> <a class="text-current"
                                                    href="mailto:theresa.webb@example.com">theresa.webb@example.com</a>
                                            </td>
                                            <td data-label="Lead Score"> <a class="text-current"
                                                    href="tel:401-505-6800">401-505-6800</a> </td>
                                            <td data-label="Company"> <span
                                                    class="badge bg-soft-danger text-danger">2/10</span>
                                            </td>
                                            <td data-label=""> <a class="text-current" href="#">Figma</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td data-label="Job Title"> <img alt="..."
                                                    src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                    class="avatar avatar-sm rounded-circle me-2">
                                                <a class="text-heading font-semibold" href="#">
                                                    Kristin Watson </a>
                                            </td>
                                            <td data-label="Email"> <span>Sales Manager</span> </td>
                                            <td data-label="Phone"> <a class="text-current"
                                                    href="mailto:cody.fisher@example.com">cody.fisher@example.com</a>
                                            </td>
                                            <td data-label="Lead Score"> <a class="text-current"
                                                    href="tel:307-560-8817">307-560-8817</a> </td>
                                            <td data-label="Company"> <span
                                                    class="badge bg-soft-success text-success">9/10</span>
                                            </td>
                                            <td data-label=""> <a class="text-current" href="#">Mailchimp</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td data-label="Job Title"> <img alt="..."
                                                    src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                    class="avatar avatar-sm rounded-circle me-2">
                                                <a class="text-heading font-semibold" href="#">
                                                    Robert Fox </a>
                                            </td>
                                            <td data-label="Email"> <span>Web Designer</span> </td>
                                            <td data-label="Phone"> <a class="text-current"
                                                    href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                            </td>
                                            <td data-label="Lead Score"> <a class="text-current"
                                                    href="tel:202-555-0152">202-555-0152</a> </td>
                                            <td data-label="Company"> <span
                                                    class="badge bg-soft-success text-success">7/10</span>
                                            </td>
                                            <td data-label=""> <a class="text-current" href="#">Dribbble</a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--Storage Quiz -->
                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
