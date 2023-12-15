
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>

    {{-- @php
       print_r($errors);

    @endphp --}}
    <div class="container">
        <form action="{{url('/')}}/register" method="POST">
            @csrf
            <h1>Registration Form</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" name="name" placeholder="enter your name" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                         {{$message}}
                    @enderror
                </span>
                <br>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="enter your email" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                         {{$message}}
                    @enderror
                </span>
                <br>
                <label for="pass" class="form-label">Password</label>
                <input type="pass" class="form-control" name="pass" placeholder="enter your password" value="{{old('pass')}}">
                <span class="text-danger">
                    @error('pass')
                         {{$message}}
                    @enderror
                </span>
                <br>
                <input type="submit" name="register" value="register" class="btn btn-primary">
            </div>
        </form>
    </div>
     
    <!--bootstrap javascript library -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>