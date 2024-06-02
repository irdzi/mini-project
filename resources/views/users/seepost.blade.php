@extends('users.components.master')

@section('title', 'Detail Post')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/seepost.css') }}">
@endsection

@section('content')

      <!-- Main content -->
      <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4 mt-3 main-content" style=" background-color: rgb(30, 30, 30);">
        <div class="d-flex flex-column align-items-center pt-3 pb-2 mb-3 header">
            <img src="{{ asset('assets/img/logo-medsos.png') }}" alt="Logo" class="logo mb-2"> 
        </div>
        <a href="{{ route('beranda') }}" style="color: white; font-weight: bold;"><i class="fas fa-arrow-left"></i> Back</a>
        <div class="post-container mt-3">
            <div class="card text-white mb-3 rounded" style=" background-color: rgb(30, 30, 30);">
                <div class="card-header d-flex justify-content-between align-items-center border-0 bg-transparent">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/default_profile.png') }}" width="50" class="rounded-circle mr-2" alt="User">
                        <div>
                            <h6 class="mt-0 mb-0">@imronrev</h6>
                            <small class="text-muted">1 day ago</small>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <p class="card-text" style="margin-left: 20px;">Hati buat kamu</p>
                        <img src="{{ asset('assets/img/default_profile.png') }}" width="500" class="card-img-top" alt="heart image">
                        <div class="card-body" style=" background-color: rgb(30, 30, 30);">
                            <hr style="border-bottom: 1px solid gray;">
                            <div class="d-flex align-items-center mt-2">
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
                    <div class="col-md-4">
                        <!-- Komentar Section -->
                        <div class="comments-section p-2">
                            <h5 class="text-white">Komentar</h5>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/img/default_profile.png') }}" width="40" class="rounded-circle" alt="User">
                                </div>
                                <div class="">
                                    <h6 class="mt-2 mb-3" >@imronrev</h6>
                                    <small class="text-muted">
                                 </div>
                                 <p class="text-white ml-3 mt-2">Senang Banget Deh</p>
                                 <div class="d-flex justify-content-start ml-3 " style="gap: 125px;">
                                    <div class="d-flex align-items-center" style="gap: 10px;">
                                        <i class="far fa-heart text-info"></i>
                                        <small class="text-white">1 likes</small>       
                                    </div>
                                    <p class="text-danger m-0">Hapus</p>
                                    <p class="text-info m-0">Reply</p>  
                                    
                                </div>  

                                 <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Tambahkan komentar">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-info" type="button">Kirim</button>
                                    </div>
                                </div>


                                    <div class="row mt-3" style="margin-left: 20px;">
                                        <div class="" style="margin-left: 30px;">
                                            <img src="{{ asset('assets/img/default_profile.png') }}" width="40" class="rounded-circle" alt="User">
                                        </div>
                                        <div style="margin-left: 10px; margin-top: -5px;"> 
                                            <h6 class="mt-3 mb-3">@imronrev</h6>
                                            <small class="text-muted"></small>
                                         </div>
                                    </div>
                                    <p class="text-white ml-5 mt-1">Senang Banget Deh</p>
                                    <p class="text-danger m-0" style="margin-left: 350px !important;">Hapus</p>
                                    <div>
                                        <hr style="border: 1px solid gray; width: 400px; position: relative;">
                                      
                                        <div style="display: flex; flex-direction: row-reverse; gap: 20px; margin-right: 321px; ">
                                            
                                            <a href="">
                                                <i class="fas fa-paper-plane text-info" style="font-size: 14px;"></i>
                                            </a>
                                            <a href="">
                                                <i class="far fa-comment mr-1 text-info" style="font-size: 14px;"></i>
                                            </a>
                                            <a href="">
                                                <i class="far fa-heart text-info" style="font-size: 14px;"></i>
                                            </a>
                                            
                                        </div>

                                        <div style="margin-left: 370px; margin-top: -18px;">
                                            <a href="">
                                                <i class="fas fa-bookmark text-info" style="font-size: 14px;"></i>
                                            </a>
                                        </div>
                                        

                                        <p style="font-size: 8px;" class="text-white">1 Like</p>
                                        <p style="font-size: 8px; margin-top: -15px;" class="text-white">1 Day Go</p>

                                    </div>
                                    
                                 <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Tambahkan komentar">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-info" type="button">Kirim</button>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- More post cards... -->
        </div>
    </main>

@endsection


@section('scirpts')

@endsection