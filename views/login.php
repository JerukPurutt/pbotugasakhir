<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            background-image: url('gambar/jim1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-white">
  <section class="flex flex-col items-center justify-center min-h-screen">
  <div class="w-full max-w-xs bg-white rounded-xl shadow-md p-4 space-y-4">
    <h1 class="text-2xl font-extrabold text-center text-gray-900">Login</h1>
    <p class="text-center text-gray-600 text-sm">Login untuk masuk ke dashboard</p>

    <form action="index.php?modul=login&fitur=login" method="POST" class="space-y-3">
        <div>
            <label for="username" class="block text-xs font-medium text-gray-900">Username</label>
            <input type="text" id="username" name="username" class="block w-full mt-1 p-2 text-sm border border-gray-300 rounded-md bg-gray-50 focus:ring-2 focus:ring-blue-500 placeholder-gray-400" placeholder="Hasan" required>
        </div>
        <div>
            <label for="password" class="block text-xs font-medium text-gray-900">Password</label>
            <input type="password" id="password" name="password" class="block w-full mt-1 p-2 text-sm border border-gray-300 rounded-md bg-gray-50 focus:ring-2 focus:ring-blue-500 placeholder-gray-400" placeholder="••••••••" required>
        </div>
        <button type="submit" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 w-full hover:bg-blue-600 transform hover:scale-105 transition-transform duration-300">
            Login
        </button>
    </form>

    <p class="text-xs font-light text-gray-500 text-center">
        Don't have an account? 
        <a href="index.php?modul=login&fitur=register" class="font-medium text-blue-600 hover:underline">Register here</a>
    </p>
</div>

  </section>

</body>
</html>
