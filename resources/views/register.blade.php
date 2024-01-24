<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open%20Sans' rel='stylesheet'>
    <link rel="icon" href="/images/IPCMSLogo.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>Indomobil Plaza</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.min.css">
</head>
<body>
    @include('sweetalert::alert')
    <div>
        <div class="split left" id="image_container">
            <img id="bg_pic" src="/images/loginbackground.jpg">
            <img id="logo" src="/images/logo_indomobil_plaza_red.png">
            <div class="box-1"></div>
            <div class="box-2"></div>
            <div class="overlay-text">
                <div class="overlay-text-1">Create</div>
                <div class="overlay-text-2">Your Free Account</div>
                <div class="overlay-text-3">Sign up now to get more benefits</div>
            </div>
            <div class="box-3"></div>
            <div class="box-4"></div>        
        </div>
        <div id="form" class="split right">
            <form action="/register" method="post" id="form">
                @csrf
                <div class="floating-form-label-content">
                    <input class="floating-form-input" placeholder=" " type="text" id="name" name="name" value="{{ old('name') }}" autocomplete="on">
                    <label class="floating-form-label" for="name">Nama Lengkap</label>
                </div>
                <div class="floating-form-label-content">
                    <input class="floating-form-input" placeholder=" " type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="on">
                    <label class="floating-form-label" for="email">Email</label>
                </div>
                <div class="floating-form-label-content" style="position: relative;">
                    <input class="floating-form-input" placeholder=" " type="password" id="password" name="password">
                    <span style="position: absolute; right:15px; top:15px">
                        <i class="bi bi-eye-fill" id="toggle"></i>
                    </span>
                    <label class="floating-form-label" for="password">Password</label>
                    <div id="pass_msg">
                        Minimum 8 characters including at least one of each uppercase, lowercase, and number.
                    </div>
                </div>
                <div class="floating-form-label-content">
                    <input class="floating-form-input" placeholder=" " type="password" id="confirm_password" name="confirm_password">
                    <span style="position: absolute; right:15px; top:15px">
                        <i class="bi bi-eye-fill" id="toggle2"></i>
                    </span>
                    <label class="floating-form-label" for="confirm_password">Confirm Password</label>
                    <div id="pass_msg">
                        Must Matched With Password
                    </div>
                </div>
                <div class="floating-form-label-content">
                    <input class="floating-form-input" placeholder=" " type="text" id="hp" name="hp" value="{{ old('hp') }}" autocomplete="on">
                    <label class="floating-form-label" for="hp">Nomor Handphone</label>
                </div>
                <div class="floating-form-label-content">
                    <input class="floating-form-input" placeholder=" " type="text" id="address" name="address" value="{{ old('address') }}" autocomplete="on">
                    <label class="floating-form-label" for="address">Address</label>
                </div>
                <div class="floating-form-label-content">
                    <select class="floating-form-select" id="city" name="city_id" onclick="this.setAttribute('value', this.value);" onchange="this.setAttribute('value', this.value);" value="{{ old('city_id') }}">
                        <option></option>
                        @foreach ($cities as $city)
                            @if ($city->id == old('city_id'))
                                <option value="{{ $city->id }}" selected>{{ $city->name }}</option>
                            @else
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endif                
                        @endforeach
                        
                    </select>
                    <label class="floating-form-label" for="city">City</label>
                </div>
                <center><button id="submit" type="submit" class="btn btn-default btn-info">SIGN UP</button>
            </form>
            <div id="tnc" class="mb-3 mt-2">
                <p>By signing up, I agree with <a href="https://indomobilplaza.co.id/">Terms of Use</a>  and <a href="https://indomobilplaza.co.id/">Privacy Policy</a></p>
            </div>
            <p id="login">Already a member? <a href="https://indomobilplaza.co.id/Login">Sign In</a></center></p>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>

<script>
    const password = document.querySelector('#password');
    const cpassword = document.querySelector('#confirm_password');
    const toggle = document.querySelector('#toggle');
    const toggle2 = document.querySelector('#toggle2');
    toggle.addEventListener('click', function(){
        const type = password.getAttribute('type')
        password.setAttribute('type', type === 'password' ? 'text' : 'password')
        cpassword.setAttribute('type', password.getAttribute('type'))

        const c = toggle.getAttribute('class')
        toggle.setAttribute('class', c === 'bi bi-eye-fill' ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill')
        toggle2.setAttribute('class', toggle.getAttribute('class'))
    })
    toggle2.addEventListener('click', function(){
        const type = cpassword.getAttribute('type')
        cpassword.setAttribute('type', type === 'password' ? 'text' : 'password')
        password.setAttribute('type', cpassword.getAttribute('type'))

        const c = toggle2.getAttribute('class')
        toggle2.setAttribute('class', c === 'bi bi-eye-fill' ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill')
        toggle.setAttribute('class', toggle2.getAttribute('class'))
    })
</script>
</html>