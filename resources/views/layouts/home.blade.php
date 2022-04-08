<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNT</title>
    <link rel="stylesheet" href="{{url('depan/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('depan/styles/style.css')}}">
    <script src="https://kit.fontawesome.com/a7d2687a52.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url({{url('depan/images/bg.jpg')}})">
    <div class="card border-primary" style="width: 50%; margin-left: auto; margin-right: auto;">
        <h5 class="card-header">Registration Form CNT</h5>
        <div class="card-body">
            <form action="{{route('registerNow')}}" method="POST">
                @csrf
                <div class="input-group mb-4">
                    <span class="input-group-text" id="basic-addon1" style="background-color: #fff;">
                        <i class="fa-solid fa-user" style="color: #3366cc;"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" name="name">
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text" id="basic-addon1" style="background-color: #fff;">
                        <i class="fa-brands fa-whatsapp-square" style="color: #3366cc;"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Whatsapp" aria-label="Whatsapp" aria-describedby="basic-addon1" name="wa">
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text" id="basic-addon1" style="background-color: #fff;">
                        <i class="fa-solid fa-at" style="color: #3366cc;"></i>
                    </span>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="email">
                </div>
                <button class="btn btn-register" type="submit" style="width: 100%;">Register</button>
            </form>
        </div>
    </div>

    <script src="{{url('depan/vendor/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>