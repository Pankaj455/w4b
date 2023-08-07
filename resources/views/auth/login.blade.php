@section("title", "Login")
@extends("layouts.auth")
@section("form-container")

    <div class="auth-container align-self-center p-32 d-flex flex-column gap-32">
        <div class="text-center">
            <img src="/storage/images/auth/career_media.svg" alt="">
        </div>
        <div class="auth-container-title">
            <h2 class="mb-3">Welcome Back,</h2>
            <p class="text-body-1 mb-0">
                Enter your Email ID / Phone number to password to login to your dashboard screen
            </p>
        </div>

        <form action="#">
            <div class="auth-input-group">
                <input name="email" type="text" class="text-body-2" required>
                <label>Email ID / Phone Number</label>
                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute clear"><i class="ph-bold ph-x"></i></button>
            </div>
            <div class="auth-input-group">
                <input name="password" type="password" class="text-body-2" required>
                <label>Password</label>
                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute clear"><i class="ph-bold ph-x"></i></button>
            </div>
            <button type="submit" class="auth-submit w-100 mb-0">login</button>
        </form>

        <p class="auth-footer text-center text-body-1">Don’t have an account? <a href="/sign-up">Sign Up</a></p>

    </div>

@endsection