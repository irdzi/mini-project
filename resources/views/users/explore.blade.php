@extends('users.components.master')

@section('title', 'Explore Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/explore.css') }}">
@endsection
    
@section('content')

       <!-- Main content -->
       <main role="main" class="col-md-8 ml-sm-auto col-lg-6 px-4 mt-3 main-content" style=" background-color: rgb(30, 30, 30);">
        <div class="d-flex flex-column align-items-center pt-3 pb-2 mb-3 header">
            <img src="{{ asset('assets/img/logo-medsos.png') }}" alt="Logo" class="logo mb-2" style="margin-left: 320px;"> 
        </div>
        <div class="input-group ml-2" style="width: 60%;">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
            <div class="input-group-append">
                <span class="input-group-text" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>

        <div class="mt-5" style="margin-left: 200px;">
            <h5 class="h5 text-white">Hasil pencarianmu</h5>
            <div class="d-flex align-items-center my-2">
                <img src="{{ asset('assets/img/default_profile.png') }}" class="rounded-circle mr-2" width="40px;" alt="User">
                <div>
                    <h6 class="mt-0 mb-0">arhandev</h6>
                    <small class="text-muted">Farhan Abdul Hamid</small>
                </div>
                <button class="btn btn-sm text-info" style="font-weight: bold; margin-left: 170px;">Follow</button>
            </div>
        </div>

       
    </main>

    <!-- Suggested users -->
    <aside class="col-md-2 ml-sm-auto col-lg-4 px-5" style=" background-color: rgb(30, 30, 30); margin-top: 140px;">
        <div class="pt-3 pb-2 mb-3">
            <h5 class="h5 text-white">Siapa yang harus diikuti</h5>
            <small class="text-muted">Orang yang mungkin anda kenal</small>
        </div>
        <div class="suggested-users" style="border-bottom: 2px solid gray; width: 280px;">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/default_profile.png') }}"  class="rounded-circle mr-2" alt="...">
                    <div>
                        <h6 class="mt-0 mb-0">imronrev</h6>
                        <p class="mb-0" style="font-size: 10px;">Imron Revady</p>
                    </div>
                </div>
                <button class="btn btn-sm text-info" style="font-weight: bold; margin-right: 10px;">Follow</button>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/default_profile.png') }}"  class="rounded-circle mr-2" alt="...">
                    <div>
                        <h6 class="mt-0 mb-0">imronrev</h6>
                        <p class="mb-0" style="font-size: 10px;">Imron Revady</p>
                    </div>
                </div>
                <button class="btn btn-sm text-info" style="font-weight: bold; margin-right: 10px;">Follow</button>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/default_profile.png') }}"  class="rounded-circle mr-2" alt="...">
                    <div>
                        <h6 class="mt-0 mb-0">imronrev</h6>
                        <p class="mb-0" style="font-size: 10px;">Imron Revady</p>
                    </div>
                </div>
                <button class="btn btn-sm text-info" style="font-weight: bold; margin-right: 10px;">Follow</button>
            </div>

            <!-- More suggested users... -->

        </div>
        <div class="text-muted small mt-4">
            <p>Terms of Service Privacy Policy Cookie Policy <br> Accessibility Ads info More © 2024 Sosmed</p>
        </div>
    </aside>

@endsection