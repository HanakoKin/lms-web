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
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active">Quiz</button>
                            </li>

                        </ul>

                        <div class="tab-content pt-2">

                            <!-- Quiz Page -->
                            <div class="tab-pane fade show active">
                                <div class="card-header">
                                    <h6>Bootstrap 5 Table</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-nowrap">
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
                                <!-- End Quiz Page -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
