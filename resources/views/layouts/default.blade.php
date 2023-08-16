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
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    </head>
    <body>
        <main class="overflow-hidden w-100 vh-100 d-flex">
            @include("includes.sidebar")
            <div class="main flex-grow-1">
                @yield("content")
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

                $(".edit-btn").on("click", function(){
                    const parentSibling = $(this).parent().siblings("#form-edit");
                    parentSibling.removeClass("disable")
                    // $("#form-edit").removeClass("disable")
                    $(this).siblings("#form-control-btns").removeClass("d-none")
                    // $("#form-control-btns").removeClass("d-none")
                    parentSibling.find(".add-variable").removeClass("d-none");
                    // $("#add-variable").removeClass("d-none")
                    $(this).addClass("d-none");
                })

                $(".add-variable").on("click", function(){
                    console.log("add new input");
                })

                $("#upload-file-btn").on("click", function(){
                    $("#fileUpload").click();
                })

            });
        </script>
        @stack('scripts')
    </body>
</html>
