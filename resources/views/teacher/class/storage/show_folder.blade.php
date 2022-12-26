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
                    <div class="tab-content pt-0">

                        <!-- Show Folder -->
                        <div class="tab-pane active pt-3 px-2">

                            @include('include.alert')

                            <div class="pt-0 pb-3">
                                <h5 class="card-title pt-0 pb-0 mb-0">Files</h5>

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

                            <div class="table-responsive pb-3">

                                @include('table.file_table')

                                @foreach ($files as $file)
                                @include('include.show_file')
                                @endforeach

                            </div>

                            <a href="/class/storage/deletefolder/{{ $folder->id }}"
                                onclick="return confirm('Are you sure want to delete this folder?')"
                                class="badge bg-danger"><i class="fa-solid fa-trash"></i> Delete this folder</a>
                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
