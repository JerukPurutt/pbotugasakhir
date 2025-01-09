<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('../img/card4.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
    <title>Reservation Receipt</title>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <!-- Receipt Container -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">

        <!-- Header -->
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Struk Sangym</h2>
            <p class="text-gray-600 text-sm">Terima kasih telah reservasi!</p>
        </div>

        <!-- Reservation Details -->
        <div class="mt-6 space-y-4">
            <div>
                <span class="font-semibold text-gray-700">Name:</span>
                <span class="text-gray-600">Hasan Abdul Latif</span>
            </div>
            <div>
                <span class="font-semibold text-gray-700">Email:</span>
                <span class="text-gray-600">hasan@gmail.com</span>
            </div>
            <div>
                <span class="font-semibold text-gray-700">Package:</span>
                <span class="text-gray-600">Paket Bulanan</span>
            </div>
            <div>
                <span class="font-semibold text-gray-700">Date:</span>
                <span class="text-gray-600">2024-12-20</span>
            </div>
            <div>
                <span class="font-semibold text-gray-700">Harga :</span>
                <span class="text-gray-600">40.000</span>
            </div>
        </div>
        <!-- Token for Gym Access -->
        <div class="mt-6 border-t border-gray-300 pt-4">
            <p class="text-gray-600 text-sm">Token GYM :</p><br>
            <div class="bg-blue-800 text-white font-bold text-lg py-2 px-4 rounded-lg text-center">
                GYM-TOKEN-123456
            </div>
            <p class="text-gray-600 text-sm mt-2 text-center">Gunakan token untuk masuk ke GYM. <a href="landing_pages.php" class="text-blue">home</a></p>
        </div>
        
    </div>

</body>
</html>
