<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

<div class="contanier">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>Registration</h4>
            <hr>
            <form>
                <div class="form-group">
                    <label for="email"> Email</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="password"> Password</label>
                    <input type="text" class="form-control" placeholder="Enter Password" name="password" value="">
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Register</button>
                </div>
                <br>
                <a href="{{ route("register") }}">Dont Have Account ? Register Here</a>
            </form>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</html>
