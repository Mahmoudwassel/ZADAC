@extends('layouts.header_footer')
@section('title')
    payment
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/payment.css" />

</head>
<body>

    <!-- //////start nav////////////////////////////////////////////////////////////////// -->
    
    <!-- ///////end nav///////////////////////////////////////////////////////////////// -->

<div class="payment mt-5">

    <form action="">

        <div class="row">

            <div class="col">
                
                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    
                    <input type="text" placeholder="Full name :">
                </div>
                <div class="inputBox">

                    <input type="text" placeholder="Phone :">
                </div>
                <div class="inputBox">
                    
                    <input type="email" placeholder="Email :">
                </div>
                <div class="inputBox">
                    
                    <input type="text" placeholder="Address :">
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox d-flex  align-items-center">
                    <div class="align-content-center">
                        <span class="align-items-center" >cards accepted :</span>
                    </div>
                    <div>
                        <img src="images/visa.png" alt="">
                    </div>
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Name on card :">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="credit card number : (16)">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Exp month :">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <input type="number" placeholder="Exp year :">
                    </div>
                    <div class="inputBox">
                        <input type="text" placeholder="CVV">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="checkout" class="submit-btn">

    </form>

</div>    

<!-- start footer -->
<!-- end footer -->
<script src="{{asset('./js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('./js/cart.js')}}"></script>
</body>
</html>
@endsection