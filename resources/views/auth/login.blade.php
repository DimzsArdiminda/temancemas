@include('/auth/header-auth')

        <form class="p-3 mt-3">
            {{-- username --}}
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            {{-- password --}}
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" type="submit">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="forget-password">Forget password?</a> or <a href="register">New Account</a>
        </div>
    </div>
</body>
</html>
