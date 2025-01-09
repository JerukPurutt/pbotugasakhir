<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Gym Reservation Form</title>
    <style>
        body {
                background-image: url('../img/card2.jpg');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
    </style>
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">

    <!-- Reservation Form Container (Smaller Size) -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Form Reservasi Sangym</h2>
        
        <!-- Form -->
        <form>
            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="name" required class="mt-2 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John Doe">
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-2 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="youremail@example.com">
            </div>

            <!-- Package Selection -->
            <div class="mb-4">
                <label for="package" class="block text-sm font-medium text-gray-700">Pilih paket</label>
                <select id="package" name="package" class="mt-2 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="daily">Paket Harian</option>
                    <option value="monthly">Paket Bulanan</option>
                    <option value="yearly">Paket Tahunan</option>
                </select>
            </div>

            <!-- Date Input -->
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Tanggal Reservasi</label>
                <input type="date" id="date" name="date" required class="mt-2 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
            <a href="struk.php" class="w-full bg-blue-600 text-white text-sm font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Reservasi
            </a>
            </div>
        </form>
    </div>

</body>
</html>
