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
                <div class="card-body py-2">
                    <div class="tab-content pt-0">

                        <!-- Storage -->
                        <div class="tab-pane active pt-2">

                            @include('include.alert')

                            <div class="pt-2 pb-3">
                                <h5 class="card-title pt-0 pb-2 mb-0">Add new Folder</h5>

                                <div class="filter">

                                    <div class="pe-3 pb-2">
                                        <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                            data-bs-target="#add-folder">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>

                                </div>
                                @include('include.add_folder')
                            </div>

                            <div class="row flex-row flex-nowrap overflow-x-scroll pb-0" style="height: 170px">

                                @foreach ($folders as $folder)

                                <div class="col-md-3 mb-3 pb-3">
                                    <div class="col-md-6">
                                        <div class="class storage-card" style="width: 200px">
                                            <div class="pt-2 ps-5">
                                                <div class="card-icon rounded-circle d-flex align-items-center">
                                                    <i class="bi bi-folder-fill"></i>
                                                </div>
                                                <div class="pt-0 pb-3">
                                                    <h4>{{ $folder->name }}</h4>
                                                    <a href="/class/storage/showfolder/{{ $folder->id }}"
                                                        class="text-muted small pt-1 stretched-link">{{
                                                        $folder->file_count }} Files</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>


                            <!--Storage Quiz -->
                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>
            <div class="card">
                <div class="card-body py-2">
                    <div class="table-responsive pb-2">
                        <table class="table table-hover table-nowrap">
                            <h5 class="card-title mb-0">Recent Upload</h5>
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Owner</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Last Modified</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($uploads as $upload)

                                <tr>
                                    <td data-label="#"> <span>{{ $loop->iteration }}</span> </td>
                                    <td data-label="Owner"> <span>{{ $upload->teacher->name}}</span> </td>
                                    <td data-label="File"> <span>{{ $upload->data_file}}</span> </td>
                                    <td data-label="Last Modified"> <span>{{ $upload->updated_at }}</span>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
