<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'navy': '#1e3a8a',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
<nav class="fixed top-0 w-full bg-white border-gray-200 dark:bg-gray-900 z-50 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="img/logo1.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sangym</span>
            </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="login.php"  class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Log out</a>
                </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-row space-x-8">
                    <li><a href="#home" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Home</a></li>
                    <li><a href="#" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Reservasi Saya</a></li>
                    <li><a href="#about" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">About</a></li>
                    <li><a href="#footer" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-20 p-4">
        <h1 class="text-3xl font-bold text-navy mb-6">Reservasi Saya</h1>
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-navy">Cardio Session</h2>
                    <p>Date : 2023-06-15</p>
                    <p>Nama : </p>
                    <p>Paket: 30 Hari</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary bg-navy">Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
