@extends('users.components.master')

@section('title', 'Beranda Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/beranda.css') }}">
@endsection

@section('content')
    <main role="main" class="col-md-8 col-lg-6 px-4 main-content sticky-content"style="background-color: rgb(30, 30, 30);">
        <div class="d-flex flex-column align-items-center pt-3 pb-2 mb-3 header" id="header">
            <img src="{{ asset('assets/img/logo-medsos.png') }}" alt="Logo" class="logo mb-2">
            <div class="d-flex justify-content-center">
                <h5 class="h6 mr-4 active-tab">For You</h5>
                <h5 class="h6">Following</h5>
            </div>
        </div>
        <div class="post-container">             
            <div class="card text-white mb-3 rounded" id="card1" style="background-color: rgb(30, 30, 30);">
                <div class="card-header d-flex justify-content-between align-items-center border-0 bg-transparent">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/default_profile.png') }}" width="50" class="rounded-circle mr-2" alt="User">
                        <div>
                            <h6 class="mt-0 mb-0">@imronrev</h6>
                            <small class="text-muted">1 day ago</small>
                        </div>
                    </div>
                    <i class="far fa-bookmark"></i>
                </div>
                <div>
                    <p class="card-text" style="margin-left: 20px;">Hati buat kamu</p>
                </div>
                <a href="{{ route('seepost') }}">
                    <img src="{{ asset('assets/img/default_profile.png') }}" width="500" class="card-img-top" alt="heart image">
                </a>
                <div class="card-body" style="background-color: rgb(30, 30, 30);">
                    <hr style="border-bottom: 1px solid gray;"> 
                    <div class="d-flex align-items-center mt-2 ">
                        <div class="d-flex align-items-center">
                            <i class="far fa-heart mr-1"></i>
                            <small class="text-muted">1 likes</small>
                        </div>
                        <div class="d-flex align-items-center ml-5">
                            <i class="far fa-comment mr-1"></i>
                            <small class="text-muted">0 comments</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card text-white mb-3 rounded" id="card1" style="background-color: rgb(30, 30, 30);">
                <div class="card-header d-flex justify-content-between align-items-center border-0 bg-transparent">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/default_profile.png') }}" width="50" class="rounded-circle mr-2" alt="User">
                        <div>
                            <h6 class="mt-0 mb-0">@imronrev</h6>
                            <small class="text-muted">1 day ago</small>
                        </div>
                    </div>
                    <i class="far fa-bookmark"></i>
                </div>
                <div>
                    <p class="card-text" style="margin-left: 20px;">Hati buat kamu</p>
                </div>
                <a href="{{ route('seepost') }}">
                    <img src="{{ asset('assets/img/default_profile.png') }}" width="500" class="card-img-top" alt="heart image">
                </a>
                <div class="card-body" style=" background-color: rgb(30, 30, 30);">
                    <hr style="border-bottom: 1px solid gray;"> 
                    <div class="d-flex align-items-center mt-2 ">
                        <div class="d-flex align-items-center">
                            <i class="far fa-heart mr-1"></i>
                            <small class="text-muted">1 likes</small>
                        </div>
                        <div class="d-flex align-items-center ml-5">
                            <i class="far fa-comment mr-1"></i>
                            <small class="text-muted">0 comments</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <aside class="col-md-2 ml-sm-auto col-lg-4 px-5 sugest-userfix" style="background-color: rgb(30, 30, 30); margin-top: 140px;">
        <div class="pt-3 pb-2 mb-3">
            <h5 class="h5 text-white">Siapa yang harus diikuti</h5>
            <small class="text-muted">Orang yang mungkin anda kenal</small>
        </div>
        <div class="suggested-users" style="border-bottom: 2px solid gray; width: 280px;">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/default_profile.png') }}" class="rounded-circle mr-2" alt="...">
                    <div>
                        <h6 class="mt-0 mb-0">imronrev</h6>
                        <p class="mb-0" style="font-size: 10px;">Imron Revady</p>
                    </div>
                </div>
                <button class="btn btn-sm text-info" style="font-weight: bold; margin-right: 10px;">Follow</button>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/default_profile.png') }}" class="rounded-circle mr-2" alt="...">
                    <div>
                        <h6 class="mt-0 mb-0">imronrev</h6>
                        <p class="mb-0" style="font-size: 10px;">Imron Revady</p>
                    </div>
                </div>
                <button class="btn btn-sm text-info" style="font-weight: bold; margin-right: 10px;">Follow</button>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/default_profile.png') }}" class="rounded-circle mr-2" alt="...">
                    <div>
                        <h6 class="mt-0 mb-0">imronrev</h6>
                        <p class="mb-0" style="font-size: 10px;">Imron Revady</p>
                    </div>
                </div>
                <button class="btn btn-sm text-info" style="font-weight: bold; margin-right: 10px;">Follow</button>
            </div>
        </div>
        <div class="text-muted small mt-4">
            <p>Terms of Service Privacy Policy Cookie Policy <br> Accessibility Ads info More © 2024 Sosmed</p>
        </div>
    </aside>
@endsection

@section('scirpts')
<script>
    function handleScroll() {
        var cards = document.querySelectorAll('.card');
        var header = document.getElementById('header').getBoundingClientRect().bottom;

        cards.forEach(function(card) {
            var rect = card.getBoundingClientRect();
            if (rect.top < header) {
                var opacity = 1 - (header - rect.top) / header;
                card.style.opacity = Math.max(0, Math.min(1, opacity));
                card.style.transform = `translateY(${Math.max(0, header - rect.top)}px)`;
                card.style.zIndex = 999; 
            } else {
                card.style.opacity = 1;
                card.style.transform = 'translateY(0px)';
                card.style.zIndex = ''; 
            }
        });
    }

    window.addEventListener('scroll', handleScroll);
    document.addEventListener('DOMContentLoaded', handleScroll);
</script>
@endsection
