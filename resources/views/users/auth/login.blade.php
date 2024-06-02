@extends('users.auth.componentsAuth.masterlogin')

@section('title', 'Login Sosmed')

@section('styles')

    <style>
        .image-sosial img {
            /* Mengatur Jarak  */
            margin-top: 100px !important;
            margin-left: 170px !important;
        }

        .contact-icons {
            color: black; /* Set the icon color to black */
        }

        .contact-text {
            margin: 0;
            display: inline-block;
            vertical-align: middle; /* Ensure text is vertically aligned with icons */
        }

    </style>

@endsection


@section('content')
<div class="container-fluid py-5"  style="background-color: rgb(30, 30, 30);">
    <div class="container p-5">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="image-sosial col-md-6 col-lg-4 mt-3">
                <img src="{{ asset('assets/img/logo-medsos.png') }}" alt="" class="img-fluid mb-4 mt-5">
            </div>
            <div class="col-md-6 col-lg-8">
                <h2 class="text-white mb-5 ms-5 fw-bold px-5">Login</h2>
                <form method="" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label text-white fw-bold">Username</label>
                        <input type="text" class="form-control rounded" id="username" name="" value="" placeholder="Masukan Ussername">
                    </div>
                    <div class="mb-5">
                        <label for="password" class="form-label text-white fw-bold">Password</label>
                        <input type="password" class="form-control rounded-lg" id="password" name="" placeholder="Masukan Password">
                    </div>
                    <div class="d-flex justify-content-end mb-5">
                        <a href="" class="text-decoration-none w-25">
                            <button type="button" class="btn btn-light text-dark w-100 fw-bold">Login</button>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label class="text-white">Belum Punya Akun? 
                            <a href="{{ route('registerpage') }}" class="text-decoration-none">
                                <span class="fw-bold text-white text-decoration-none">Register</span>
                            </a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 px-5">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/logo-medsos.png') }}" alt="" style="height: 50px;">
                    <h5 class="fw-bold ms-2 mt-2 mb-0">Tentang Kami</h5>
                </div>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi reiciendis expedita nobis obcaecati iure labore, consequatur vel corrupti. Maiores adipisci odit quaerat vero ex sequi dicta expedita dolore praesentium assumenda. Maiores adipisci aspi, rocane.</p>
            </div>
            <div class="col-lg-4 mt-3">
                <h5 class="fw-bold mb-3 text-center">Kontak</h5>
                <div class="d-inline-flex align-items-center">
                    <i class="fas fa-house mt-1 me-4 contact-icons"></i>
                    <p class="contact-text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div class="d-inline-flex align-items-center mt-3">
                    <i class="fas fa-envelope me-4 mt-2 contact-icons"></i>
                    <p class="contact-text">amandemyamanah@gmail.com</p>
                </div>
                <div class="d-inline-flex align-items-center mt-3">
                    <i class="fas fa-phone me-4 contact-icons"></i>
                    <p class="contact-text">+62801239120312212</p>
                </div>
            </div>
        </div>
        <div class="border-bottom mt-4"></div>
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center mt-4">
            <div class="container-fluid justify-content-center">
                <ul class="navbar-nav gap-5">
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="#">Terms & Condition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Forums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">PT Amandemy</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
@endsection