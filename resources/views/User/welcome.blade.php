    @extends('layouts.header_footer')
        @section('title')
            ZADAC
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
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
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
                                            <h3 class="text-white h6"> {{$item->description}}</h3>
                                            <h4 class="text-white h5">{{$item->price}} $</h4>
                                            {{-- <h3 class="text-white h6"> {{$item->available_size}}</h3> --}}
                                            <div class="footer">
                                                <button class="btn btn-success w-100 text-white"><a href="{{route('addtocard',$item->id)}}">Add To Cart</a></button>
                                            </div> 
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
                                            <h3 class="text-white h6"> {{$item->description}}</h3>
                                            <h4 class="text-white h5">{{$item->price}} $</h4>
                                            {{-- <h3 class="text-white h6"> {{$item->available_size}}</h3>
                                            mahmoud --}}
                                            <div class="footer">
                                                <button class="btn btn-success w-100 text-white"><a href="{{route('addtocard',$item->id)}}">Add To Cart</a></button>
                                            </div> 
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
                                            <h3 class="text-white h6"> {{$item->description}}</h3>
                                            <h4 class="text-white h5">{{$item->price}} $</h4>
                                            {{-- <h3 class="text-white h6"> {{$item->available_size}}</h3> --}}
                                            <div class="footer">
                                                <button class="btn btn-success w-100 text-white"><a href="{{route('addtocard',$item->id)}}">Add To Cart</a></button>
                                            </div> 
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
                                            <h3 class="text-white h6"> {{$item->description}}</h3>
                                            <h4 class="text-white h5">{{$item->price}} $</h4>
                                            {{-- <h3 class="text-white h6"> {{$item->available_size}}</h3> --}}
                                            <div class="footer">
                                                <button class="btn btn-success w-100 text-white"><a href="{{route('addtocard',$item->id)}}">Add To Cart</a></button>
                                            </div> 
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
                                            <h3 class="text-white h6"> {{$item->description}}</h3>
                                            <h4 class="text-white h5">{{$item->price}} $</h4>
                                            {{-- <h3 class="text-white h6"> {{$item->available_size}}</h3> --}}
                                            <div class="footer">
                                                <button class="btn btn-success w-100 text-white"><a href="{{route('addtocard',$item->id)}}">Add To Cart</a></button>
                                            </div> 
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
        <section id="contact" class="contact ">
        <div class="container py-5">
            <div class="title text-center pb-5">
            <h2><span class="fw-bold">Contact</span> Us</h2>
            <p class="text-muted p-title">
                It is a long established fact that a reader will be of a page when
                established fact looking at its layout.
            </p>
            </div>
            <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 text-center">
                <i class="fa-solid fa-mobile fs-2 text-pink py-3"></i>
                <h5>Call Us On</h5>
                <a href="tel:+985 123 7856" class="text-muted">01156583530</a>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa-regular fa-envelope fs-2 text-pink py-3"></i>
                <h5>Email Us At</h5>
                <a href="mailto:Website.Kerri@gmail.com" class="text-muted"
                >WearSmart@gmail.com
                </a>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa-solid fa-location-dot fs-2 text-pink py-3"></i>
                <h5>Visit Office</h5>
                <a href="#" class="text-muted">Benha Uni</a>
            </div>
            </div>
            <form class="py-5" action="{{route('store.message')}}" method='post'>
                @csrf
                <div class="row g-2">
                    <div class="col-lg-6">
                        <input type="text" placeholder="Your Name .. " class="form-control" name='name'/>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-lg-6">
                    <input
                        type="email"
                        placeholder="Your email .. "
                        class="form-control"
                        name='email'
                    />
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                    <div class="col-lg-12">
                        <input type="text" placeholder="Your Subject .. "class="form-control" name='title'/>
                    </div>
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <div class="col-lg-12">
                        <textarea placeholder="Your Message.." cols="30"rows="4"class="form-control"name='text'></textarea>
                        @if ($errors->has('text'))
                                <span class="text-danger">{{ $errors->first('text') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="text-uppercase btn btn-pink w-fitContent ms-auto py-3 px-4">send massage</button>
                </div>
            </form>
        </div>
        </section>
        <!-- ============================ -->

        <!-- start footer -->

        <!-- end footer -->


        <script src="./js/bootstrap.bundle.min.js"></script>
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
