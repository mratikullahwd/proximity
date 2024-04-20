
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
  </head>
  <body>

   
<div class="wrapper">
    <div class="logo">
        <img src="https://cdn.discordapp.com/attachments/1171691292070248488/1229812709264982056/UniProx-Network.jpg?ex=66310b56&is=661e9656&hm=ec3e3ee7d7b3c9bf75903adc425b7bde0c25101e892e569f3bb84691d306399a&" alt="">
    </div>
    <div class="text-center mt-4 name">
        UniProx
    </div>
    <form action="{{ route('login') }}" method="post" class="p-3 mt-3">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="userName" placeholder="Email" required>
        </div>
        @error("email") <label class="text-danger">{{ $message }}</label> @enderror
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password" required>
        </div>
        @error("password") <label class="text-danger">{{ $message }}</label> @enderror
        <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
        
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>