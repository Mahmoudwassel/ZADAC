@extends('layouts.admin_header')
@section('title')
    admin-page
@endsection
@section('content')
<!-- //////start nav////////////////////////////////////////////////////////////////// -->

<!-- ///////end nav///////////////////////////////////////////////////////////////// -->
<!-- header -->
<header
id="home"
class="header d-flex justify-content-center align-items-center"
>

<div class="container text-center w-auto p5 heedercontent">
    <h4>Welcome</h4>
    <h1 ><span>AI ChatBot</span> Assist For Fashion .......</h1>
    
</div>
</header>

<!-- //////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////// -->
<!-- Collection -->
@if(Session::has('add_successfully'))
    <div class="alert alert-success">
        {{ Session::get('add_successfully') }}
    </div>
@endif
@if (session('success'))
        <div class="alert alert-success fs-5 text-dark">
            {{ session('success') }}
        </div>
    @endif
    @if (session('sucsessful'))
        <div class="alert alert-success fs-5 text-dark">
            {{ session('sucsessful') }}
        </div>
    @endif
<section class="Collection py-5" id="Collection">
<div class="container py-5">
    <div class="title  text-center pb-5">
    <h2>Our <span class="fw-bold">Product</span></h2>
    <p class="text-muted p-title">
        It is a long established fact that a reader will be of a page when
        established fact looking at its layout.
    </p>
    </div>
    <ul class=" nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist" >
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-all-tab"  data-bs-toggle="pill" data-bs-target="#pills-all"  type="button" role="tab"  aria-controls="pills-all" aria-selected="true">Hoodies</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link"        id="pills-seo-tab"  data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false" > Jackets </button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link"        id="pills-web-design-tab" data-bs-toggle="pill"  data-bs-target="#pills-web-design" type="button" role="tab" aria-controls="pills-web-design" aria-selected="false"> Shirt</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link"        id="pills-work-tab" data-bs-toggle="pill" data-bs-target="#pills-work" type="button" role="tab" aria-controls="pills-work" aria-selected="false" > T-Shirt</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link"        id="pills-wordpress-tab" data-bs-toggle="pill" data-bs-target="#pills-wordpress" type="button" role="tab" aria-controls="pills-wordpress" aria-selected="false" > Pants</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row g-2">
                    @foreach ($product as $item)
                            @if ($item->type =='hoody')
                            <div class="col-lg-2">
                                <div class="inner position-relative overflow-hidden">
                                    <img src="{{url($item->photo)}}" class="w-100" />
                                    <div class="content text-center position-absolute w-100">
                                        <a href="{{route('destroy.product',$item->id)}}" class="delete" onclick="return confirm('are you sure that you wont to remove this item ')"><i class="fa-solid fa-xmark text-danger fs-3"></i></a>
                                        <h3 class="text-white h6">{{$item->description}}</h3>
                                        <h4 class="text-white h5">{{$item->price}}$</h4>
                                        <a href="{{route('edit.product',$item->id)}}"><i class="fa-solid fa-wrench text-primary fs-2 pt-4"></i></a>
                                    </div>
                                    <div class="layer"></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
    <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab" tabindex="0">
            <div class="row g-2">
                @foreach ($product as $item)
                @if ($item->type =='jacket')
                <div class="col-lg-2">
                    <div class="inner position-relative overflow-hidden">
                        <img src="{{url($item->photo)}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <a href="{{route('destroy.product',$item->id)}}" class="delete" onclick="return confirm('are you sure that you wont to remove this item ')"><i class="fa-solid fa-xmark text-danger fs-3"></i></a>
                            <h3 class="text-white h6">{{$item->description}}</h3>
                            <h4 class="text-white h5">{{$item->price}}$</h4>
                            <a href="{{route('edit.product',$item->id)}}"><i class="fa-solid fa-wrench text-primary fs-2 pt-4"></i></a>
                        </div>
                        <div class="layer"></div>
                    </div>
                </div>
            @endif
        @endforeach
            </div>
    </div>
    <div class="tab-pane fade" id="pills-web-design" role="tabpanel"  aria-labelledby="pills-web-design-tab" tabindex="0">
            <div class="row g-2">
                @foreach ($product as $item)
                @if ($item->type =='shirt')
                <div class="col-lg-2">
                    <div class="inner position-relative overflow-hidden">
                        <img src="{{url($item->photo)}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <a href="{{route('destroy.product',$item->id)}}" class="delete" onclick="return confirm('are you sure that you wont to remove this item ')"><i class="fa-solid fa-xmark text-danger fs-3"></i></a>
                            <h3 class="text-white h6">{{$item->description}}</h3>
                            <h4 class="text-white h5">{{$item->price}}$</h4>
                            <a href="{{route('edit.product',$item->id)}}"><i class="fa-solid fa-wrench text-primary fs-2 pt-4"></i></a>
                        </div>
                        <div class="layer"></div>
                    </div>
                </div>
            @endif
        @endforeach
            </div>
    </div>
    <div class="tab-pane fade" id="pills-work" role="tabpanel"  aria-labelledby="pills-work-tab" tabindex="0">
            <div class="row g-2">
                @foreach ($product as $item)
                @if ($item->type =='t-shirt')
                <div class="col-lg-2">
                    <div class="inner position-relative overflow-hidden">
                        <img src="{{url($item->photo)}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <a href="{{route('destroy.product',$item->id)}}" class="delete" onclick="return confirm('are you sure that you wont to remove this item ')"><i class="fa-solid fa-xmark text-danger fs-3"></i></a>
                            <h3 class="text-white h6">{{$item->description}}</h3>
                            <h4 class="text-white h5">{{$item->price}}$</h4>
                            <a href="{{route('edit.product',$item->id)}}"><i class="fa-solid fa-wrench text-primary fs-2 pt-4"></i></a>
                        </div>
                        <div class="layer"></div>
                    </div>
                </div>
            @endif
        @endforeach
            </div>
    </div>
    <div class="tab-pane fade" id="pills-wordpress" role="tabpanel" aria-labelledby="pills-wordpress-tab" tabindex="0">
            <div class="row g-2">
                @foreach ($product as $item)
                            @if ($item->type =='pants')
                            <div class="col-lg-2">
                                <div class="inner position-relative overflow-hidden">
                                    <img src="{{url($item->photo)}}" class="w-100" />
                                    <div class="content text-center position-absolute w-100">
                                        <a href="{{route('destroy.product',$item->id)}}" class="delete" onclick="return confirm('are you sure that you wont to remove this item ')"><i class="fa-solid fa-xmark text-danger fs-3"></i></a>
                                        <h3 class="text-white h6">{{$item->description}}</h3>
                                        <h4 class="text-white h5">{{$item->price}}$</h4>
                                        <a href="{{route('edit.product',$item->id)}}"><i class="fa-solid fa-wrench text-primary fs-2 pt-4"></i></a>
                                    </div>
                                    <div class="layer"></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
            </div>
    </div>
    </div>
</div>
</section>
<!-- //////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////// -->
<!-- contact -->

<!-- ============================ -->

<!-- start footer -->

<!-- end footer -->


<script src="{{asset('./js/bootstrap.bundle.min.js')}}"></script>
<!-- type.js -->
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>
var typed = new Typed('#mainTitle', {
    strings: ['Kerri Deo', ' A Graphic Designer','A Photographer'],
    typeSpeed: 100,
    loop: true,
    loopCount: Infinity,
    backSpeed: 50,

});
</script>
</body>
@endsection
