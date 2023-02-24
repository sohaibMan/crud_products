<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<section class="p-4" style="background-color: #eee;height:100vh">

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                            <form method="POST" action="signup.php" class="mx-1 mx-md-4">



                                <div class="form-outline mb-3 flex-fill mb-0">
                                    <input type="email" id="form3Example3c" name="email" class="form-control" placeholder="Your Email" required />
                                </div>

                                <div class="form-outline mb-3 flex-fill mb-0">
                                    <input type="text" id="form3Example1c" name="user_name" class="form-control" placeholder="Your name" required />
                                </div>


                                <div class="form-outline mb-3 flex-fill mb-0">
                                    <input type="password" id="form3Example4c" minlength="8" maxlength="20" name="password" class="form-control" placeholder="Your Password" required />
                                </div>


                                <div class="form-outline mb-3 flex-fill mb-0">
                                    <input type="password" id="form3Example4cd" minlength="8" maxlength="20" name="password_repeated" class="form-control" placeholder="Repeat your password" required />
                                </div>
                                <?php isset($error) ? include("./view/Alert.php") : "" ?>
                                <div class="d-flex align-items-center justify-content-center mx-4 mb-3 mb-lg-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    <div class="col">
                                        <a href="/login.php">Already a user Login?</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                            <img src="/view/assets/signup.jpg" class="img-fluid" alt="Sample image">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>