
    <br><br><br><br>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style_login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <title>Login Page</title>
    </head>

    <body>
        <div class="container" id="container">

            <div class="form-container sign-up">
                <form method="post" action="{{route('register')}}">
                    @csrf
                    <h1>Create Account</h1>
                    <input type="text" name= 'name' id="name" placeholder="Name" value="{{old('name')}}" >
                    @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif

                    <input type="email" name="Email" id="Email" placeholder="Email" value="{{old('Email')}}" >
                    @if ($errors->has('Email'))
                        <div class="alert alert-danger">
                            {{$errors->first('Email')}}
                        </div>
                    @endif

                    <input type="password" id="Password" name="Password" placeholder="Password" value="{{old('Password')}}" >
                    @if ($errors->has('Password'))
                        <div class="alert alert-danger">
                            {{$errors->first('Password')}}
                        </div>
                    @endif

                    <input type="password" id="Password_confirmation"  name="Password_confirmation"  placeholder="confirm Password">
                    <x-input-error :messages="$errors->get('Password_confirmation')" class="mt-2" />

                    <button type="submit">Sign Up</button>
                </form>
            </div>






            <div class="form-container sign-in">
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <h1>Sign In</h1>
                    <input type="email"  name="email" placeholder="Email" value="{{old('email')}}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <input type="password" name="password" placeholder="Password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <a href="http://127.0.0.1:8000/forgot-password">Forgot your password?</a>
                    <button type="sumit" >Sign In</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Enter your personal details to use all of site features</p>
                        <button class="hidden" id="login">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Hello, Friend!</h1>
                        <p>Register with your personal details to use all of site features</p>
                        <button class="hidden" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="JS/login.js"></script>
        <script src="JS/bootstrap.bundle.min.js"></script>
    </body>

    </html>
