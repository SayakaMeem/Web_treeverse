
<x-login>

    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
            <form action="/loginsystem/login" method="POST">
                @csrf
                <input type="text" placeholder="Enter your email" name="email" required="" value="{{old('email')}}">
                <input type="password" placeholder="Enter your password" name="password" required="">
                {{-- <a href="#">Forgot password?</a> --}}
                <input type="submit" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check">Signup</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Signup</header>
            <form action="/loginsystem/save" method="POST">
                @csrf
                <input type="text" placeholder="Enter your name" name="name" value="{{ old('name') }}" required="">
                <input type="text" placeholder="Enter your email" name="email" value="{{ old('email') }}" required="">
                <input type="password" placeholder="Create a password" name="password" value="{{ old('password') }}" required="">
                <input type="password" placeholder="Confirm your password" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" required="">
                <input type="submit" class="button" value="Signup">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div>
    </div>

</x-login>

