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
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Absent</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-edit">Storage</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-settings">Quiz</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Discussion</button>
                            </li>

                        </ul>

                        <div class="tab-content pt-2">

                            <!-- Absent -->
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="bg-surface-secondary">
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
                                                @foreach ($subjects as $subject)
                                                    <tr>
                                                        <td data-label="Name"> <img alt="..."
                                                                src="https://source.unsplash.com/400x1200?{{ $subject->name }}"
                                                                class="avatar avatar-sm rounded-circle me-2">
                                                            <a class="text-heading font-semibold" href="#">
                                                                {{ $subject->name }}</a>
                                                        </td>
                                                        <td data-label="Job Title"> <span>Web Designer</span> </td>
                                                        <td data-label="Email"> <a class="text-current"
                                                                href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                                        </td>
                                                        <td data-label="Phone"> <a class="text-current"
                                                                href="tel:202-555-0152">202-555-0152</a> </td>
                                                        <td data-label="Lead Score"> <span
                                                                class="badge bg-soft-success text-success">7/10</span>
                                                        </td>
                                                        <td data-label="Company"> <a class="text-current"
                                                                href="#">Dribbble</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Storage -->
                            <div class="tab-pane fade pt-3" id="profile-edit">
                                <div class="row overflow-hidden" style="height: 160px">
                                    @foreach ($subjects as $subject)
                                        <div class="col mb-3 pb-3">
                                            <div class="col-xxl-3">
                                                <div class="class storage-card" style="width: 200px">
                                                    <div class="row pt-2 ps-5 d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-folder-fill"></i>
                                                        </div>
                                                        <div class="pt-2 pb-2">
                                                            <h4>{{ $subject->name }}</h4>
                                                            <span class="text-muted small pt-2">12 Files</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
                                <!--Storage Quiz -->
                            </div>

                            <!-- Quiz Page -->
                            <div class="tab-pane fade" id="profile-settings">
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

                            <!-- Discussion Page -->
                            <div class="tab-pane fade" id="profile-change-password">
                                <div class="row height d-flex justify-content-center align-items-center">
                                    <div class="col-xxl-3">
                                        <div class="form-card">
                                            <div class="card-header">
                                                <h6>Type Something</h6>
                                            </div>
                                            <div class="mt-3 d-flex flex-row align-items-center p-3">
                                                <img src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                    width="50" class="rounded-circle mr-2">
                                                <input type="text" id="comment" name="comment" class="form-control"
                                                    placeholder="Enter your comment...">
                                            </div>
                                            <div class="mt-2">
                                                <div class="d-flex flex-row p-3"> <img
                                                        src="https://images.unsplash.com/photo-1541534401786-2077eed87a74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                                        class="avatar avatar-sm rounded-circle mr-3">
                                                    <div class="w-100">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-row align-items-center"> <span
                                                                    class="mr-2">Brian selter</span> <small
                                                                    class="c-badge">Top Comment</small> </div>
                                                            <small>12h ago</small>
                                                        </div>
                                                        <p class="text-justify comment-text mb-0">Lorem ipsum dolor
                                                            sit amet, consectetur adipiscing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam</p>
                                                        <div class="d-flex flex-row user-feed"> <span class="wish"><i
                                                                    class="fa fa-heartbeat mr-2"></i>24</span> <span
                                                                class="ml-3"><i
                                                                    class="fa fa-comments-o mr-2"></i>Reply</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row p-3"> <img
                                                        src="https://i.imgur.com/3J8lTLm.jpg" width="40"
                                                        height="40" class="rounded-circle mr-3">
                                                    <div class="w-100">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-row align-items-center"> <span
                                                                    class="mr-2">Seltos Majito</span> <small
                                                                    class="c-badge">Top Comment</small> </div>
                                                            <small>2h ago</small>
                                                        </div>
                                                        <p class="text-justify comment-text mb-0">Tellus in hac
                                                            habitasse platea dictumst vestibulum. Lectus nulla at
                                                            volutpat diam ut venenatis tellus. Aliquam etiam erat
                                                            velit scelerisque in dictum non consectetur. Sagittis
                                                            nisl rhoncus mattis rhoncus urna neque viverra justo
                                                            nec. Tellus cras adipiscing enim eu turpis egestas
                                                            pretium aenean pharetra. Aliquam faucibus purus in
                                                            massa.</p>
                                                        <div class="d-flex flex-row user-feed"> <span class="wish"><i
                                                                    class="fa fa-heartbeat mr-2"></i>14</span> <span
                                                                class="ml-3"><i
                                                                    class="fa fa-comments-o mr-2"></i>Reply</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row p-3"> <img
                                                        src="https://i.imgur.com/agRGhBc.jpg" width="40"
                                                        height="40" class="rounded-circle mr-3">
                                                    <div class="w-100">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-row align-items-center"> <span
                                                                    class="mr-2">Maria Santola</span> <small
                                                                    class="c-badge">Top Comment</small> </div>
                                                            <small>12h ago</small>
                                                        </div>
                                                        <p class="text-justify comment-text mb-0"> Id eu nisl nunc
                                                            mi ipsum faucibus. Massa massa ultricies mi quis
                                                            hendrerit dolor. Arcu bibendum at varius vel pharetra
                                                            vel turpis nunc eget. Habitasse platea dictumst quisque
                                                            sagittis purus sit amet volutpat. Urna condimentum
                                                            mattis pellentesque id.Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                            minim veniam</p>
                                                        <div class="d-flex flex-row user-feed"> <span class="wish"><i
                                                                    class="fa fa-heartbeat mr-2"></i>54</span> <span
                                                                class="ml-3"><i
                                                                    class="fa fa-comments-o mr-2"></i>Reply</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- End Discussion Page -->
                            </div>
                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
