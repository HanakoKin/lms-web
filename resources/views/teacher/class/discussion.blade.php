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

            <div class="bg-surface-secondary">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title pt-1 pb-0 mb-0">Add new Topic</h5>

                        <div class="filter">

                            <div class="pe-3 pb-2">
                                <button type="button" class="btn py-1 px-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>

                        </div>
                        @include('include.add_topic')
                    </div>
                </div>

                @foreach ($topics as $topic)

                <div class="card">
                    <div class="card-body pt-3 pb-2">
                        <div class="d-flex justify-content-center row px-2">
                            <div class="p-2">
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-row"><img src="/img/haki.jpeg" alt="Profile"
                                            class="d-flex flex-row rounded-xl" width="60">
                                        <div class="d-flex flex-column justify-content-start">
                                            <h5 class="mt-0 ps-3 pt-1">{{
                                                Str::ucfirst($topic->teacher->name)}}</h5>
                                            <p class="pt-1 ps-3">{{ $topic->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h3 class="text-center card-title pt-2 pb-2 mb-0">{{ $topic->judul }}</h3>
                                            <p class="text-justify comment-text mb-0">{{ $topic->deskripsi }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between pt-3">
                                        <div class="d-flex justify-content-between w-100">
                                            @include('include.show_comment')
                                            <button class="badge bg-info" data-bs-toggle="modal"
                                                data-bs-target="#showcomment{{ $topic->id }}"><i
                                                    class="fa-solid fa-comments"></i>
                                                {{ $topic->comment_count }} comment
                                            </button>

                                            <button href="/" class="badge bg-success" data-bs-toggle="modal"
                                                data-bs-target="#addcomment">Add a comment
                                            </button>
                                            @include('include.add_comment')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endsection
