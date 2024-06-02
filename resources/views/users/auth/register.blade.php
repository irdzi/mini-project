@extends('users.auth.componentsAuth.masterlogin')

@section('title', 'Register Sosmed')

@section('styles')

<style>
    .image-sosial img {
        /* Mengatur Jarak  */
        margin-top: 100px !important;
        margin-left: 170px !important;
    }

    .form-group.position-relative {
        position: relative;
    }

    .form-group.position-relative i {
        position: absolute;
        margin-top: 13px;
        margin-left: 13px;
        transform: translateY(-50%);
        cursor: pointer;
        color: white; /* Warna putih untuk ikon mata */
    }
</style>

@endsection

@section('content')
<div class="container-fluid py-5" style="background-color: rgb(30, 30, 30);">
    <div class="container p-5">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="image-sosial col-md-6 col-lg-4 mt-3">
                <img src="{{ asset('assets/img/logo-medsos.png') }}" alt="" class="img-fluid mb-4 mt-5">
            </div>
            <div class="col-md-6 col-lg-8">
                <h2 class="text-white mb-5 ms-5 fw-bold px-5">Register</h2>
                <form method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="username" class="form-label text-white fw-bold">Username</label>
                                <input type="text" class="form-control rounded w-100" id="username" name="username" placeholder="Masukan Username" required>
                            </div>
                            <div class="col-6">
                                <label for="name" class="form-label text-white fw-bold">Nama</label>
                                <input type="text" class="form-control rounded w-100" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white fw-bold">E-mail</label>
                        <input type="email" class="form-control rounded-lg" id="email" name="email" placeholder="Masukan Email" required>
                    </div>
                    
                    <div class="mb-3 form-group position-relative">
                        <label for="password" class="form-label text-white fw-bold">Password <i class="fa-solid fa-eye" id="togglePassword"></i></label>
                        <input type="password" class="form-control rounded-lg" id="password" name="password" placeholder="Masukan Password" required>
                    </div>
                    
                    <div class="mb-3 form-group position-relative">
                        <label for="konfirmasiPassword" class="form-label text-white fw-bold">Konfirmasi Password <i class="fa-solid fa-eye" id="toggleKonfirmasiPassword"></i></label>
                        <input type="password" class="form-control rounded-lg" id="konfirmasiPassword" name="konfirmasiPassword" placeholder="Masukan Konfirmasi Password" required>
                    </div>
                    <div class="d-flex justify-content-end mb-5">
                        <button type="submit" class="btn btn-light text-dark w-25 fw-bold">Register</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label class="text-white">Sudah Punya Akun?
                            <a href="{{ route('loginpage') }}" class="text-decoration-none">
                                <span class="fw-bold text-white text-decoration-none">Login</span>
                            </a> 
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        const toggleKonfirmasiPassword = document.querySelector("#toggleKonfirmasiPassword");
        const konfirmasiPassword = document.querySelector("#konfirmasiPassword");

        togglePassword.addEventListener("click", function() {
            // Toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // Toggle the eye icon
            this.classList.toggle("fa-eye");
            this.classList.toggle("fa-eye-slash");
        });

        toggleKonfirmasiPassword.addEventListener("click", function() {
            // Toggle the type attribute
            const type = konfirmasiPassword.getAttribute("type") === "password" ? "text" : "password";
            konfirmasiPassword.setAttribute("type", type);

            // Toggle the eye icon
            this.classList.toggle("fa-eye");
            this.classList.toggle("fa-eye-slash");
        });
    });
</script>

@endsection

