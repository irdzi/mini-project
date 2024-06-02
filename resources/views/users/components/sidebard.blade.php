
<style>
    body {
        background-color: rgb(30, 30, 30);
        color: white;
    }

    .sidebar {
        border: 1px solid gray;
        margin-left: -15px;
        margin-top: -8px;
        height: 101%;
        overflow: hidden; /* Menghilangkan tampilan scrollbar */
        scrollbar-width: none;
    }

    .sidebar-sticky {
        position: sticky;
        top: 0;
        height: 100vh;
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .nav-link {
        color: #17a2b8;
        display: flex;
        align-items: center;
    }

    .nav-link i {
        margin-right: 10px;
    }

    .nav-link.active {
        color: #17a2b8;
        font-weight: bold;
    }

    .nav-item {
        gap: 40px !important;
        margin-top: 15px;
        margin-right: 10px !important;
    }

    .active-tab {
        border-bottom: 2px solid #17a2b8; 
        padding-bottom: 5px; 
    }
</style>


<nav class="col-md-2 d-none d-md-block sidebar-sticky sticky-top" style=" background-color: rgb(30, 30, 30);">
    <div class="sidebar">
        <div style="border-bottom: 1px solid gray; width: 238px !important;">
            <div class="d-flex align-items-center mb-3 mt-3" style="margin-left: 10px;">
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('assets/img/default_profile.png') }}" width="40px;" class="rounded-circle mr-2" alt="User">
                </a>
                <div>
                    <p class="mb-0">pesertamsib</p>
                    <small>Peserta MSIB</small>
                </div>
            </div>
        </div>
        <ul class="nav flex-column mt-1">
            <li class="nav-item">
                <a class="nav-link text-info active" href="{{ route('beranda') }}">
                    <i class="fas fa-home"></i> Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('explorepost') }}">
                    <i class="fas fa-search text-info"></i> Explore
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('notifikasi') }}">
                    <i class="fas fa-bell text-info"></i> Notifikasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('posting') }}">
                    <i class="fas fa-plus text-info"></i> Posting
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('bookmarks') }}">
                    <i class="fas fa-bookmark text-info"></i> Bookmarks
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="login.html">
                    <i class="fas fa-arrow-left text-info"></i> Log out
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Login and Register -->
<div class="bg-info p-3 fixed-bottom text-center text-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h6 class="mb-1" style="text-align: end; margin-left: -73px; font-weight: bold;">Jangan ketinggalan berita terbaru</h6>
                <small style="margin-left: -130px;">login untuk pengalaman yang baru</small>
            </div>
            <div>
               <a href="{{ route('loginpage') }}">
                <button class="btn btn-outline-light mr-2" style="border-radius: 10px;">Login</button>
               </a>
               <a href="{{ route('registerpage') }}">
                <button class="btn btn-light" style="border-radius: 10px;">Register</button>
               </a>
            </div>
        </div>
    </div>
</div>