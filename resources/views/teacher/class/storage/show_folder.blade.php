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

                        <!-- Show Folder -->
                        <div class="tab-pane active pt-3 px-2">

                            <div class="pt-0 pb-3">
                                <h5 class="card-title pt-0 pb-0 mb-0">Add new File</h5>

                                <div class="filter">

                                    <div class="pe-3 pb-2">
                                        <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                            data-bs-target="#add-file">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>

                                </div>

                                @foreach ($folders as $folder)

                                @include('include.add_file')

                                @endforeach

                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap">
                                    <h5 class="card-title mb-0">Folder</h5>
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">File</th>
                                            <th scope="col">Last Modified</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($files as $file)
                                        <tr>
                                            <td data-label="#"> <span>{{ $loop->iteration }}</span> </td>
                                            <td data-label="File"> <span>{{ $file->data_file}}</span> </td>
                                            <td data-label="Last Modified"> <span>{{ $file->updated_at }}</span>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
