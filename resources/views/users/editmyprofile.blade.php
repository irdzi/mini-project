@extends('users.components.master')

@section('title', 'Notifikasi Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/editprofile.css') }}">
@endsection
    
@section('content')

       <!-- Main content -->
       <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4 mt-3 main-content" style="background-color: rgb(30, 30, 30);">
        <div class="container">
            <div style="display: flex;  padding-top: 50px; flex-direction: column; margin-left: 500px;">
                <img src="{{ asset('assets/img/default_profile.png') }}" width="80px;" class="rounded-circle mr-2" alt="User">
                <h6 class="mt-3">Edit Profile</h6>
            </div>
            <div style="display: flex; gap: 30px;  margin-left: 200px; flex-direction: column;" class="mt-4">
                <div style="display: flex; gap: 100px;">
                    <label for="">Username</label>
                    <input type="text" name="name" class="" style="background-color: rgb(30, 30, 30);; border: 1px solid gray; border-radius: 5px; width: 450px; color: white;">
                </div >
                <div  style="display: flex; gap: 130px;">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="" style="background-color: rgb(30, 30, 30);; border: 1px solid gray; border-radius: 5px; width: 450px; color: white;">
                </div>

                <div  style="display: flex; gap: 150px;">
                    <label for="">Bio</label>
                    <textarea name="name" rows="4" style="background-color: rgb(30, 30, 30);; border: 1px solid gray; border-radius: 5px; width: 450px; color: white;"></textarea>
                </div>
                
                <div style="margin-left: 525px; ">
                    <button class="btn btn-info" style="border-radius: 10px; width: 100px;">Edit</button>
                </div>

            </div>
        </div>
     
    </main>

@endsection