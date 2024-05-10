@extends('layouts.admin_header')
@section('title')
    edit_product
@endsection
@section('content')
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
        <link rel="stylesheet" href="{{asset('./css/edit.css')}}" />
    </head>
    <body>
    <!-- //////start nav////////////////////////////////////////////////////////////////// -->
    <!-- ///////end nav///////////////////////////////////////////////////////////////// -->
    <header class="pb-3">
    <div class="container text-center text-white   fs-1">
    <h2 class="text-center pt-5 fs-1 ">Edit Product</h2>

        <!-- @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif -->
        
    </div>

    
        
        <form class="form-control"  action="{{route('update.product',$product->id)}}"  method="get" enctype="multipart/form-data">
            <!-- @csrf -->
            <div class="row  ">
                <div class="col-lg-12 m-auto">
                <div class="inner position-relative overflow-hidden">
                    <img src="{{url($product->photo)}}" class="w-100" />
                    </div>
                </div>
                </div>      
            <div class="d-flex column-gap-2">  
                <input class="form-control my-3" type="number" name='old_price' readonly placeholder='Old price:- {{$product->price}} $'>
                <input class="form-control my-3" type="number" name='price' placeholder='New price'>
                <span style="color:red">
                    @error('price')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="">
            <input class="form-control my-3 " type="text-area" name='old_description' readonly placeholder="Old description:-  {{$product->description}}">
            <input class="form-control my-3 " type="text-area" name='description' placeholder="New description">
            <span style="color:red">
                @error('description')
                    {{$message}}
                @enderror
            </span>
            </div>
            <label for="">Type</label>
            {{-- <select name="type" id="" class="rounded-2 mb-3" >
                <option value="t-shirt">T-Shirt</option>
                <option value="pants">Pants</option>
                <option value="jacket">Jacket</option>
                <option value="shirt">Shirt</option>
                <option value="hoody">Hoody</option>
            </select> --}}
            <select name="type">
                <option value="red" {{ $product->type == 't-shirt' ? ' selected' : '' }}>T-shirt</option>
                <option value="blue"{{ $product->type == 'pants' ? ' selected' : '' }}>Pant</option>
                <option value="jacket"{{$product->type == 'jacket' ? ' selected' : '' }}>Jacket</option> <!-- تحديد اللون الأخضر كمحدد افتراضي -->
                <option value="shirt"{{ $product->type == 'shirt' ? ' selected' : '' }}>Shirt</option>
                <option value="hoody"{{ $product->type == 'hoody' ? ' selected' : '' }}>Hoody</option>
            </select>
            <span style="color:red">
                @error('type')
                    {{$message}}
                @enderror
            </span>
            <div class="form-group mb-3">
                available-size<br>
                <input type="checkbox" name="available_size[]"  class="form-check-input"  value='M' >M
                <input type="checkbox" name="available_size[]"  class="form-check-input"  value='L'>L 
                <input type="checkbox" name="available_size[]"  class="form-check-input"  value='XL'>XL 
                <input type="checkbox" name="available_size[]"  class="form-check-input"  value='XXL'>XXL
                <input type="checkbox" name="available_size[]"  class="form-check-input"  value='XXXL'>XXXL 
            </div>
            <span style="color:red">
                @error('available_size')
                    {{$message}}
                @enderror
            </span>
            <input type="submit" value='Save Edit' class="btn btn-outline-danger save">
        </form>
    </header>

        <!-- start footer --> 
        <!-- end footer -->
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