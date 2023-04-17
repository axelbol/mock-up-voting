<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=open-sans:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4 text-right">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" class="font-semibold text-gray-400 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-400 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-400 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate repudiandae quisquam, ratione corrupti veritatis voluptates accusamus est, odio dolor nisi, tempora ullam quasi deserunt ea doloremque harum. Perspiciatis magni pariatur nesciunt? Soluta minus vitae aliquam modi quasi doloremque architecto illo incidunt itaque pariatur deleniti quae tenetur, magnam reiciendis consequatur perferendis est hic ullam omnis! Eos voluptate excepturi perferendis hic provident ex nisi? Rerum quod et provident maxime hic possimus dolorem libero adipisci est amet fuga suscipit, ad quidem doloribus consequuntur, impedit animi. Fugit aliquid id dolores officiis dolor ratione. Rerum perferendis praesentium tenetur voluptatem expedita est ipsam ex excepturi quae.
            </div>
            <div class="w-175">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt voluptatum veritatis omnis assumenda dignissimos consequatur quae, exercitationem debitis non neque dolores dolor labore illum aspernatur suscipit nostrum, iure nisi eius, fuga deserunt eligendi officia enim obcaecati. Fugiat molestiae repellat minima iusto qui libero sequi quidem sint nam a natus modi voluptas vero tempore dolores, numquam voluptatem voluptates accusantium atque magnam iure. Dolorum libero provident quo dolor exercitationem, aspernatur cum, velit placeat impedit cumque magni, dolorem nam quia? Tenetur expedita adipisci a doloribus aliquam animi, dignissimos eligendi, dicta illo eaque dolores assumenda quam minima rem est aliquid ea hic sed corrupti suscipit inventore autem debitis quae at? Obcaecati nulla ex sapiente impedit, eos quasi, at alias corporis libero aliquid facere cum in unde et provident hic quae inventore recusandae, voluptatem quaerat. Quis ipsum delectus eveniet esse illum nulla consequatur nam quasi amet eligendi, exercitationem corrupti porro sapiente cumque accusamus itaque quos.
            </div>
        </main>
    </body>
</html>
