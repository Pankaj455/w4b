<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>w4b | @yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&family=Urbanist:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        @vite(['resources/sass/app.scss'])
        <script defer src="https://unpkg.com/@phosphor-icons/web@2.0.3"></script>
    </head>
    <body>
        <main>
            <div class="row">
                <div class="col-6 position-relative">
                    <img src="/storage/images/auth/s_login_img.png" class="vh-100" alt="">
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-center h-100">
                        @yield('form-container')
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $('.clear').on('click', function() {
                    const inputElement = $(this).siblings('input');

                    inputElement.val('');
                    inputElement.focus();
                });
            });
        </script>
    </body>
</html>
