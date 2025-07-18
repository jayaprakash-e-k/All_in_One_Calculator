<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Decimeter to Meter Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
        <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Decimeter to Meter Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="value" class="block text-gray-700 font-semibold mb-1">Enter Value in Decimeters</label>
                <input type="number" id="value" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition" placeholder="Enter decimeters">
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Value (in meters)</h2>
            <div class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold" id="output">--</div>
        </div>
    </div>

    <script>
        const input = document.getElementById('value');
        const output = document.getElementById('output');

        function convert() {
            const decimeters = parseFloat(input.value);
            if (!isNaN(decimeters)) {
                const meters = decimeters * 0.1;
                output.textContent = meters.toLocaleString(undefined, { maximumFractionDigits: 6 });
            } else {
                output.textContent = "--";
            }
        }

        input.addEventListener('input', convert);
        window.addEventListener('DOMContentLoaded', convert);
    </script>
</body>
</html>
