<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Blogfight Vanguard | Connect With Cardfighters Around the World</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/">
                <img class="w-48 m-4" src="{{asset('images/vg-logo.png')}}" alt="" class="logo"/>
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="register.html" class="hover:text-laravel">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>
                </li>
                <li>
                    <a href="login.html" class="hover:text-laravel">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>Login
                    </a>
                </li>
            </ul>
        </nav>

        {{-- View Output --}}
        <main>
            @yield('body')
        </main>
       
        <footer class="fixed bottom-0 left-0 w-full flex justify-between items-center
                        font-bold bg-laravel text-white h-12 mt-24 opacity-90 p-2
                        md:justify-between">
            <p class="text-xs">Copyright &copy; 2023, All Rights reserved</p>

            <a  href="/posts/create"
                class="h-fit bg-black text-white py-1 px-5">
                Create Post
            </a>

            <a  href="report.html"
                class="h-fit bg-black text-white py-1 px-5">
                Report a Problem
            </a> 
        </footer>
        <x-flash-message />
    </body>
</html>