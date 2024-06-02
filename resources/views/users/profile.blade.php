@extends('users.components.master')

@section('title', 'Notifikasi Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">

    <style>
        .modal-header {
            background-color: rgb(30, 30, 30);
            border-bottom: none;
            
        }

        .modal-header .close {
            color: white;
            opacity: 1;
        }

        .modal-content {
            background-color: rgb(30, 30, 30);
            color: white;
            border: 3px solid gray;
            border-radius: 10px;
        }

        .modal-body input[type="password"], .modal-body input[type="text"] {
            background-color: rgb(30, 30, 30);
            border: 1px solid #ccc;
            color: white;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .modal-footer {
            border-top: none;
        }

        .btn-primary {
            background-color: #333;
            border: none;
        }

        .position-relative .fa-eye, .position-relative .fa-eye-slash {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: white; /* Make the icon white */
        }
    </style>
@endsection
    
@section('content')

       <!-- Main content -->
       <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4 mt-3 main-content" style="background-color: rgb(30, 30, 30);">
        <div class="container">
            <div style="display: flex; flex-direction: row; ">
                <img src="{{ asset('assets/img/default_profile.png') }}" width="100px;" class="rounded-circle " style="margin-left: 50px; margin-top: 20px;" alt="User">
                <h4 style="margin-top: 20px; margin-left: 80px;">imronrev</h4>
                <a href="#" data-toggle="modal" data-target="#passwordModal">
                    <i class="fas fa-cog" style="margin-top: 30px; margin-left: 550px; color: white;"></i>
                </a>
            </div>
            <div style="margin-left: 230px; margin-top: -60px; display: flex; flex-direction: row; gap: 20px; font-size: 12px;">
                <p>1 Post</p>
                <a href="followers.html" style="color: white; text-decoration: none;"><p>2 Followers</p></a>
                <p>3 Following</p>
            </div>
            <div style="margin-left: 232px; margin-top: -11px;">
                <p>Imron Reviardy</p>
            </div>
        </div>
         <div>
            <img src="{{ asset('assets/img/default_profile.png') }}" width="300px;" style="margin-left: 50px; margin-top: 60px;" alt="User">
         </div>
         <div style="display: flex; flex-direction: row; gap: 90px; color: gray; justify-content: center; margin-top: 50px; font-size: 10px;">
            <p>lorem</p>
            <p>lorem</p>
            <p>lorem</p>
            <p>lorem</p>
            <p>lorem</p>
            <p>lorem</p>
            <p>lorem</p>
         </div>
         <div style="font-size: 13px; display: flex; justify-content: center; color: gray;">
            <p>CopyRight 2023</p>
         </div>
    </main>

    <!-- Modal Konfirmasi Password -->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="passwordModalLabel">Konfirmasi Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group position-relative">
                            <input type="password" class="form-control" id="passwordInput" placeholder="Masukkan Password">
                            <i class="fas fa-eye text-white position-absolute" id="togglePassword" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scirpts')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const togglePassword = document.querySelector("#togglePassword");
        const passwordInput = document.querySelector("#passwordInput");

        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
            // toggle the eye icon
            this.classList.toggle("fa-eye");
            this.classList.toggle("fa-eye-slash");
        });
    });
</script>

@endsection