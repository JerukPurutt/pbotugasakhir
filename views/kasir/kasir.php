<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('gambar/jim1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
    <title>Cashier Dashboard</title>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <!-- Cashier Dashboard Container -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Kasir Sangym</h2>
        
        <!-- Token Check Form -->
        <div class="mb-6">
            <label for="token" class="block text-sm font-medium text-gray-700">Masukkan Token</label>
            <input type="text" id="token" name="token" class="mt-2 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter Token">
        </div>

        <!-- Check Button -->
        <div class="flex justify-center">
            <button onclick="checkToken()" class="bg-blue-600 text-white text-sm font-medium py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 w-full">
                Check Token
            </button>
        </div>

        <!-- Result Message -->
        <div id="result" class="mt-4 text-center text-lg font-semibold text-gray-800"></div>
    </div>

    <script>
        // Sample list of tokens in the queue (this would typically come from a backend or database)
        const tokenQueue = [
            "GYM-TOKEN-123456",
            "GYM-TOKEN-234567",
            "GYM-TOKEN-345678",
            "GYM-TOKEN-456789",
            "GYM-TOKEN-567890"
        ];

        // Function to check if the entered token is in the queue
        function checkToken() {
            const token = document.getElementById('token').value.trim();
            const resultElement = document.getElementById('result');
            
            // Check if the token exists in the queue
            if (tokenQueue.includes(token)) {
                resultElement.textContent = "Pelanggan Terdaftar, Silahkan Masuk";
                resultElement.classList.remove('text-red-500');
                resultElement.classList.add('text-green-500');
            } else {
                resultElement.textContent = "Pelanggan Belum Terdaftar";
                resultElement.classList.remove('text-green-500');
                resultElement.classList.add('text-red-500');
            }
        }
    </script>
</body>
</html>
