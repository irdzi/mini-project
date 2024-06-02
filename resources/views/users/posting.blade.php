@extends('users.components.master')

@section('title', 'Posting Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/posting.css') }}">

    <style>
        .no-border:focus {
            outline: none;
            border: none;
        }

        .custom-file-upload {
            position: relative;
            display: inline-block;
            cursor: pointer;
            background-color: rgb(30, 30, 30);
            padding: 10px 10px;
            border-radius: 5px;
            text-align: center;
            margin-top: 10px;
            max-width: 375px;
            height: 200px;
            border: 1px solid gray;
        }

        .hide-border {
            border: none;
        }

        .file-upload-label {
            cursor: pointer;
            color: white;
            margin-top: 70px;
            border: none;
        }

        .custom-file-upload input[type="file"] {
            display: none;
        }

        #preview {
            max-width: 400px;
            height: 200px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endsection
    
@section('content')

       <!-- Main content -->
       <main role="main" class="col-md-8 col-lg-6 px-4 mt-3 main-content" style="background-color: rgb(30, 30, 30);">
        <div class="d-flex flex-column align-items-center pt-3 pb-2 mb-3 header" id="header">
            <img src="{{ asset('assets/img/logo-medsos.png') }}" alt="Logo" class="logo mb-2"> <!-- Add your logo image here -->
            <div class="d-flex justify-content-center">
                <h5 class="h6 mr-4 active-tab">For You</h5>
                <h5 class="h6">Following</h5>
            </div>
        </div>
        <div class="post-container" >             
            <div class="card text-white mb-3 rounded" id="card1" style="background-color: rgb(30, 30, 30);">
                <div class="card-header d-flex justify-content-between align-items-center border-0 bg-transparent">
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/50" class="rounded-circle mr-2" alt="User">
                    </div>
                    <div style="display: flex; justify-content: c;">
                        <h6 class="mt-0 mb-0">@imronrev</h6>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div style="margin-left: 20px; display: flex; flex-direction: column;">
                    <input type="text" placeholder="Deskripsi Postingan" class="no-border" style="background-color: rgb(30, 30, 30); border: none; color: white; padding: 10px;">
                    <div class="custom-file-upload" id="upload-container">
                        <label for="file-upload" class="file-upload-label" id="file-label">
                            Pilih Gambar
                        </label>
                        <input id="file-upload" type="file" style="display: none;" onchange="previewFile()">
                        <img id="preview" src="#" alt="Preview Gambar" style="display: none;">
                    </div>
                </div>
              
                <div class="card-body" style="background-color: rgb(30, 30, 30);">
                    <hr style="border-bottom: 1px solid gray;"> 
                    <div style="display: flex; justify-content: end;">
                        <button class="btn btn-info" style="border-radius: 10px; ">Posting</button>
                    </div>
                </div>
            </div>
           
            <!-- More post cards... -->

        </div>
    </main>

@endsection


@section('scirpts')

<script>
    function previewFile() {
        const preview = document.getElementById('preview');
        const file = document.getElementById('file-upload').files[0];
        const label = document.getElementById('file-label');
        const uploadContainer = document.getElementById('upload-container');
        const reader = new FileReader();
    
        reader.addEventListener("load", function () {
            // convert image file to base64 string
            preview.src = reader.result;
            preview.style.display = 'block';
            label.style.display = 'none';
            uploadContainer.classList.add('hide-border');
        }, false);
    
        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>

@endsection