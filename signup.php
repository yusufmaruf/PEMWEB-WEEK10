<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <!-- CSS only -->
    <!-- import css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <h2 class="alert alert-primary text-center mt-3">Sign Up</h2>
            <form method="post" action="signupact.php">
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control"  name="nama">
                </div>
                <div class="mb-3">
                    <label for="addres" class="form-label">addres</label>
                    <input type="text" class="form-control"  name="addres">
                </div> <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control"  name="email">
                </div> <div class="mb-3">
                    <label for="homepage" class="form-label">homepage</label>
                    <input type="text" class="form-control"  name="homepage">
                </div> <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control"  name="username">
                </div>
                </div> <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" class="form-control"  name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>