@extends('users.components.master')

@section('title', 'Notifikasi Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/booksmarks.css') }}">
@endsection
    
@section('content')
     <!-- Main content -->
     <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4 mt-3 main-content" style="background-color: rgb(30, 30, 30);">
        <div class="d-flex flex-column align-items-center pt-3 pb-2 mb-3 header">
            <img src="{{ asset('assets/img/logo-medsos.png') }}"  alt="Logo" class="logo mb-2"> 
        </div>
        <a href="" style="color: white; font-weight: bold;">All Bookmarks</a>
        <div class="post-container mt-1" style="margin-left: 30px;">
            <div class="card text-white mb-3 rounded" style="background-color: rgb(30, 30, 30);">
                <div class="card-header d-flex justify-content-between align-items-center border-0 bg-transparent">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/default_profile.png') }}" width="50" class="rounded-circle mr-2" alt="User">
                        <div>
                            <h6 class="mt-2 " style="margin-bottom: -4px;">@imronrev</h6>
                            <small class="text-muted" style="margin-top: 10px !important; ">1 day ago</small>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <img src="{{ asset('assets/img/default_profile.png') }}" width="500" class="card-img-top" alt="heart image">
                    </div>
                </div>
            <!-- More post cards... -->
            </div>

    </main>
@endsection
