@section("title", "Confirmation")
@extends("layouts.auth")
@section("form-container")

    <div class="auth-container align-self-center p-32 d-flex flex-column gap-32">
        <div class="text-center">
            <img src="/storage/images/auth/career_media.svg" alt="career-media">
        </div>
        <div class="text-center">
            <img src="/storage/images/auth/thank-you.svg" alt="thank-you">
        </div>
        <h2 class="text-center">Thank you for registration</h2>
        <div class="auth-container-title">
            <p class="text-body-1 mb-0">
                Thank you for registering! Your registration has been received and we will send you a confirmation soon.
            </p>
        </div>
        
        <a href="/analytics" class="auth-submit w-100 mb-0 text-center">Continue to dashboard</a>

    </div>

@endsection