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

    <section class="section">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    @foreach ($subjects as $subject)
                        <div class="col-lg-4 pb-2">
                            <div class="class p-0">
                                <div class="class-image"> <img
                                        src="https://source.unsplash.com/400x1200?{{ $subject->name }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="class-content d-flex flex-column align-items-center">
                                    <h4 class="pt-2">{{ $subject->name }}</h4>
                                    <h5>Creative Desinger</h5>
                                    <ul class="social-icons d-flex justify-content-center">
                                        <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a>
                                        </li>
                                        <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a>
                                        </li>
                                        <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
