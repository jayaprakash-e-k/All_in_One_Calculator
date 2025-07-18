<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acreage Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 via-white-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
        <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Acreage Calculator</h1>

        <form class="space-y-5">
            <div>
                <label for="value" class="block text-gray-700 font-semibold mb-1">Enter Area in Acres</label>
                <input type="number" id="value" class="w-full p-3 border-2 border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" placeholder="Enter acres">
            </div>

            <div>
                <label for="to" class="block text-gray-700 font-semibold mb-1">Convert To</label>
                <select id="to" class="w-full p-3 border-2 border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                    <option value="sqm">Square Meters</option>
                    <option value="hectare">Hectares</option>
                    <option value="sqft">Square Feet</option>
                    <option value="sqyd">Square Yards</option>
                </select>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Value</h2>
            <div class="inline-block bg-gradient-to-r from-blue-200 via-white-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold" id="output">--</div>
        </div>
    </div>

    <script>
        const valueInput = document.getElementById('value');
        const toSelect = document.getElementById('to');
        const output = document.getElementById('output');

        const conversionRates = {
            sqm: 4046.86,
            hectare: 0.404686,
            sqft: 43560,
            sqyd: 4840 / 1.0 // 1 acre = 4840 sq yd
        };

        function convert() {
            const acres = parseFloat(valueInput.value);
            const toUnit = toSelect.value;

            if (!isNaN(acres)) {
                const result = acres * conversionRates[toUnit];
                output.textContent = result.toLocaleString(undefined, { maximumFractionDigits: 6 });
            } else {
                output.textContent = "--";
            }
        }

        valueInput.addEventListener('input', convert);
        toSelect.addEventListener('change', convert);
        window.addEventListener('DOMContentLoaded', convert);
    </script>
</body>
</html>
