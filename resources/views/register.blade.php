<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans" rel="stylesheet">
    <link rel="icon" href="https://indomobilplaza.co.id/IPCMSLogo.png">
    <title>Indomobil Plaza</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.min.css">
</head>
<body>
    @include('sweetalert::alert')
    <div style="display:inline-block">
        {{-- <div class="container" style="border: none">
        </div> --}}
        @if ($message = Session::has('success'))
            {{-- <div class="alert alert-success alert-block"> --}}
                {{-- <button type="button" class="close" data-dismiss="alert"></button> --}}
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>	
                <strong>{{ $message }}</strong> --}}
                <script>
                    import Swal from 'sweetalert2/dist/sweetalert2.js'
                    import 'sweetalert2/src/sweetalert2.scss'
                    Swal("Success", "Registration succeed", "success");
                </script>
            </div>
        @endif
        <img src="https://indomobilplaza.co.id/images/loginbackground.jpg" width="50%" height="50%" alt="">
        {{-- <img src="https://indomobilplaza.co.id/images/logo_indomobil_plaza_red.png" width="30%" alt="" style="position: fixed"> --}}
        {{-- <div class="overlay">Create Your Free Account</div> --}}
        {{-- <br>Sign up now to get more benefits --}}            
        <div style="float: right; width:50%; display:inline-block; padding-top:3pt">
            <form action="/register" method="post" style="padding:0.8cm" id="form">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                    <label for="name">Nama Lengkap</label>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror">
                    {{-- <i class="bi bi-eye-slash" id="togglePassword"></i> --}}
                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                    <input type="checkbox" class="btn btn-outline-secondary" type="button" id="toggle"> Show Password</button>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" class="@error('confirm_password') is-invalid @enderror">
                    <input type="checkbox" class="btn btn-outline-secondary" type="button" id="toggle2"> <i class="bi bi-eye-slash" id="togglePassword"></i></button>
                    <label for="confirm_password">Confirm Password</label>
                    @error('confirm_password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="hp" placeholder="Nomor Handphone" name="hp" value="{{ old('hp') }}" class="@error('hp') is-invalid @enderror">
                    <label for="hp">Nomor Handphone</label>
                    @error('hp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{ old('address') }}" class="@error('address') is-invalid @enderror">
                    <label for="address">Address</label>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="city" aria-label="Floating label select example" name="city_id" value="{{ old('city_id') }}" class="@error('city_id') is-invalid @enderror">
                        <option selected></option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>                
                        @endforeach
                    </select>
                    <label for="city">City</label>
                    @error('city_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <center><button type="submit" class="btn btn-info" style="width:100%; color:white">SIGN UP</button>
                <div class="mb-3 mt-2">
                    By signing up, I agree with <a href="https://indomobilplaza.co.id/">Terms of Use</a>  and <a href="https://indomobilplaza.co.id/">Privacy Policy</a>
                </div>
                Already a member? <a href="https://indomobilplaza.co.id/Login">Sign In</a></center>
            </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>

<script>
    // import Swal from 'sweetalert2/dist/sweetalert2.js'
    // import 'sweetalert2/src/sweetalert2.scss'

    const password = document.querySelector('#password');
    const cpassword = document.querySelector('#confirm_password');
    const toggle = document.querySelector('#toggle');
    const toggle2 = document.querySelector('#toggle2');
    toggle.addEventListener('click', function(){
        const type = password.getAttribute('type')
        password.setAttribute('type', type === 'password' ? 'text' : 'password')
        cpassword.setAttribute('type', type === 'password' ? 'text' : 'password')
    })
    toggle2.addEventListener('click', function(){
        const type = password.getAttribute('type')
        password.setAttribute('type', type === 'password' ? 'text' : 'password')
        cpassword.setAttribute('type', type === 'password' ? 'text' : 'password')
    })
</script>

{{-- <script>
    // import Swal from 'sweetalert2/dist/sweetalert2.js'
    // import 'sweetalert2/src/sweetalert2.scss'
    $(document).ready(function () {
        $("form").submit(function (event) {
            var formData = {
                name: $("#name").val(),
                email: $("#email").val(),
                password: $("#password").val(),
                hp: $("#hp").val(),
                address: $("#address").val(),
                city: $("#city").val(),
            };

            $.ajax({
                type: "POST",
                url: {{ url('/register') }},
                data: formData,
                dataType: "json",
                encode: true,
                // success: function(response){
                // //Redirect
                // window.location.href="/" ;
                // }
                success: function(data){
                    alert('test');
                    // Swal.fire({
                    //     title: 'Success!',
                    //     text: message,
                    //     icon: 'success',
                    //     confirmButtonText: 'Cool'
                    // })
                }
            })

            event.preventDefault();
        });
    });
</script> --}}

</html>