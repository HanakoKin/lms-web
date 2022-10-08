@extends('entry.layouts.main')

@section('container')
    <div class="row justify-content-center">
        <main>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Choose your role</h1>
                <p class="fs-5 text-muted">"Look for your choices, pick the best one, then go with it" - Pat Riley.
                </p>
            </div>
            <div class="row row-cols-1 row-cols-md-4 mb-3 text-center justify-content-center">
                <div class="col d-flex h-200">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">King</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><i class="fa-solid fa-crown"></i>
                            </h1>
                            <p>I am, indeed, a king, because I know how to rule myself.</p>
                            <a href="/admin" class="w-100 btn btn-lg btn-outline-primary">Sign up</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex h-200">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Knight</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><i class="fa-solid fa-chess-knight"></i>
                            </h1>
                            <p>The noir hero is a knight in blood caked armor. He's dirty and he does his best to deny the
                                fact that he's a hero the whole time.</p>
                            <a href="/teacher" class="w-100 btn btn-lg btn-outline-primary">Sign up</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex h-200">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Citizen</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><i class="fa-solid fa-chess-pawn"></i>
                            </h1>
                            <p>I had a simple goal in life: to be true to my parents and our country as an honorable son, a
                                caring brother, and a good citizen.</p>
                            <a href="/student" class="w-100 btn btn-lg btn-outline-primary">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
