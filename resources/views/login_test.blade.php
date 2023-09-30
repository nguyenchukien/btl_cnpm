<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>

<div class="d-flex justify-content-center h-100">
    <div class="card">
        <div class="card-header">
            <h3>Login</h3>
            <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
            </div>            
        </div>
        <div class="card-body">
            <form action="index.php?controller=Member&action=login" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="txtUser" ><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="username" name ="txtUser" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="txtPass" ><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="password" name ="txtPass">
                </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me </a>
                    </div>
                
                <div class="form-group">
                    <input type="submit" value="Login" class="btn float-end login_btn" name ="btnLogin">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center ">
                Don't have an account?<a href="#" class="text-warning text-decoration-none text-sign-up"> Sign Up</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
            </div>
            
        </div>
    </div>
</div>
    
</body>
</html>