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
                                <button class="nav-link active">Discussion</button>
                            </li>

                        </ul>

                        <div class="tab-content pt-2">

                            <!-- Discussion Page -->
                            <div class="tab-pane fade show active">
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
                                                <div class="d-flex flex-row p-3"> <img src="https://i.imgur.com/3J8lTLm.jpg"
                                                        width="40" height="40" class="rounded-circle mr-3">
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
                                                <div class="d-flex flex-row p-3"> <img src="https://i.imgur.com/agRGhBc.jpg"
                                                        width="40" height="40" class="rounded-circle mr-3">
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
