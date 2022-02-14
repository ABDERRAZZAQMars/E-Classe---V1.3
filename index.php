<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(90deg, #00C1FE 19.39%, #FAFFC1 96.69%);">
    <form style="width: 475px; height: 550px; border-radius: 20px; box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.1); margin-top: 100px;" class="container bg-white mx-auto">
        <h1 class="pt-4 fw-bolder ms-5 "><span class="text-info">|</span> E-classe</h1>
        <h3 class="mt-5 text-center fw-bold">SIGN IN</h3>
        <P class="text-center">Entrer your credentials to access your account</P>
        <div class="p-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer your email">
        </div>
        <div class="p-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer your password">
        </div>
        <div class="d-grid">
            <a href="./dashboard.php" type="submit" class="btn btn-info m-3 text-white fw-bold">SIGN IN</a>
        </div>
        <p class="text-center pt-3">Forgot your password? <span class=""><a href="#" class="text-info fw-bold">Reset Password</a></span></p>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>