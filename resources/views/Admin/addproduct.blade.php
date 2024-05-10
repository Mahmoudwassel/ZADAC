@extends('layouts.admin_header')
@section('title')
    add product
@endsection
@section('content')
    <br><br>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- google fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link
                href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,700;0,800;1,500&family=Nunito+Sans:wght@200;300;400;500;600;700&display=swap"
                rel="stylesheet"
            />
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Philosopher&display=swap');
            </style>
            <!--  css -->
            <link rel="stylesheet" href="{{asset('./css/all.min.css')}}" />
            <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}" />
            <link rel="stylesheet" href="{{asset('./css/addphoto.css')}}" />
        </head>
        <body>
            <!-- //////start nav////////////////////////////////////////////////////////////////// -->
            <!-- ///////end nav///////////////////////////////////////////////////////////////// -->
            <header class="pb-3">

            <div class="container text-center text-white  fs-1">
            <h2 class="text-center pt-5 fs-1 ">Add Product</h2>
                
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif 
            </div>

            {{-- @if ($errors)
                @foreach ($errors->all() as $error)
                    <li style="color:red">
                        {{$error}}
                    </li>
                @endforeach
            @endif --}}
            <form class="form-control"  action="{{route('store.product')}}"  method="post" enctype="multipart/form-data">
                @csrf
                photo
                <input class="form-control" type="file" name="photo" id="image_input" onchange="displayImage(this)" value="{{old('photo')}}">
                <span style="color:red">
                    @error('photo')
                        {{$message}}
                    @enderror
                </span>
                <div id="image_container">
                    <img id="selected_image" src="#" alt="Selected Image" style="display: none; max-width: 200px;">
                </div>

                <input class="form-control my-3" type="number" name='price' placeholder='price' value="{{old('price')}}">
                <span style="color:red">
                    @error('price')
                        {{$message}}
                    @enderror
                </span>

                <input class="form-control my-3" type="text-area" name='description' placeholder="description" value="{{old('description')}}">
                <span style="color:red">
                    @error('description')
                        {{$message}}
                    @enderror
                </span>
                <div class="form-group mb-3">
                    avilable-size<br>
                    <input type="checkbox" name="available_size[]"  class="form-check-input"  value='M' >M <br>
                    <input type="checkbox" name="available_size[]"  class="form-check-input"  value='L'>L <br>
                    <input type="checkbox" name="available_size[]"  class="form-check-input"  value='XL'>XL <br>
                    <input type="checkbox" name="available_size[]"  class="form-check-input"  value='XXL'>XXL<br>
                    <input type="checkbox" name="available_size[]"  class="form-check-input"  value='XXXL'>XXXL <br>
                </div>
                <span style="color:red">
                    @error('available_size')
                        {{$message}}
                    @enderror
                </span><br>
                type
                <select name="type" id="" class="form-control my-3">
                        <option value="t-shirt">T-Shirt</option>
                        <option value="pants">Pants</option>
                        <option value="jacket">Jacket</option>
                        <option value="shirt">Shirt</option>
                        <option value="hoody">Hoody</option>
                </select>
                <input type="submit" value='go' class=" btn btn-primary">

            </form>
        </header>
            <script src="./js/bootstrap.bundle.min.js"></script>
            <script>
                function displayImage(input) {
                    var file = input.files[0];
                    var image = document.getElementById('selected_image');
                    var imageContainer = document.getElementById('image_container');

                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            image.src = e.target.result;
                            image.style.display = 'block';
                            imageContainer.style.display = 'block';
                        };
                        reader.readAsDataURL(file);
                    } else {
                        image.src = '#';
                        image.style.display = 'none';
                        imageContainer.style.display = 'none';
                    }
                }
            </script>
            

        </body>
    </html>
@endsection