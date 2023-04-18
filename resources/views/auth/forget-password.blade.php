@extends('/auth/header-auth')

    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="E-mail">
        </div>
        <div id="emailHelp" class="form-text">Forget your password? We'll send password reset link to your email.</div><br>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
    <div class="text-center fs-6">
        <a href="login">Back to Login</a> Or <a href="register">Register</a>
    </div>
</body>
</html>
