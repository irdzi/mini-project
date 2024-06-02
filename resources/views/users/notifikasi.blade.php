@extends('users.components.master')

@section('title', 'Notifikasi Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/notifikasi.css') }}">
@endsection
    
@section('content')

       <!-- Main content -->
       <main role="main" class="col-md-8 col-lg-6 px-4 mt-3 main-content" style="background-color: rgb(30, 30, 30);">
        <div class="d-flex flex-column align-items-center pt-3 pb-2 mb-3 header" id="header">
            <div style="margin-left: -220px;">
                <h5 class="mt-4" style="display: flex; justify-content: center;">Notifikasi</h5>
                <div class="d-flex justify-content-center mt-4">
                    <h5 class="h6 mr-4 active-tab">Semua</h5>
                    <h5 class="h6 mr-4 ">Komentar</h5>
                    <h5 class="h6 mr-4 ">Disukai</h5>
                </div>
            </div>
            <div style="display: flex; flex-direction: column;" class="mt-5">
                <h5 style="font-size: 15px; font-weight: bold; margin-left: -270px;">Semua Notifikasi</h5>
                
                <div style="display: flex; flex-direction: row; gap: 30px;" class="mt-3">
                    <h5 style="font-size: 15px; font-weight: 500; margin-left: -210px;">peserta msib</h5>
                    <p style="margin-top: -4px;">mulai mengikuti anda</p>
                    <img src="{{ asset('assets/img/default_profile.png') }}" style="margin-left: 113px;" width="40px;" class="mr-2" alt="User">
                </div>
                <div style="display: flex; flex-direction: row; gap: 30px;" class="mt-3">
                    <h5 style="font-size: 15px; font-weight: 500; margin-left: -210px;">peserta msib</h5>
                    <p style="margin-top: -4px;">mulai mengomentari anda</p>
                    <img src="{{ asset('assets/img/default_profile.png') }}" style="margin-left: 80px;" width="40px;" class="mr-2" alt="User">
                </div>
                <div style="display: flex; flex-direction: row; gap: 30px;" class="mt-3">
                    <h5 style="font-size: 15px; font-weight: 500; margin-left: -210px;">peserta msib</h5>
                    <p style="margin-top: -4px;">mulai menyukai anda</p>
                    <img src="{{ asset('assets/img/default_profile.png') }}" style="margin-left: 116px;" width="40px;" class="mr-2" alt="User">
                </div>
                
                <div style="display: flex; align-items: start; margin-left: -270px; gap: 10px;" class="mt-3">
                    <img src="{{ asset('assets/img/default_profile.png') }}" width="40px" class="rounded-circle" alt="User">
                    <div style="display: flex; flex-direction: row; gap: 20px; margin-top: 10px; margin-left: 10px;"> 
                        <h5 style="font-size: 15px; font-weight: 500; margin: 0;">rezax</h5>
                        <p style="margin-top: -4px;">mulai mengikuti anda</p>
                    </div>
                </div>
                
                
                
            </div>
        </div>
      
    </main

@endsection


@section('scirpts')


@endsection