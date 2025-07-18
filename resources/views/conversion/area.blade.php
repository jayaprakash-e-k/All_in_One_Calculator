<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
        <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Area Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="value" class="block text-gray-700 font-semibold mb-1">Enter Area</label>
                <input type="number" id="value" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition" placeholder="Enter value">
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <label for="from" class="block text-gray-700 font-semibold mb-1">From</label>
                    <select id="from" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
                        <option value="sqm">Square Meter</option>
                        <option value="sqkm">Square Kilometer</option>
                        <option value="sqft">Square Foot</option>
                        <option value="sqin">Square Inch</option>
                        <option value="acre">Acre</option>
                        <option value="hectare">Hectare</option>
                        <option value="sqyd">Square Yard</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label for="to" class="block text-gray-700 font-semibold mb-1">To</label>
                    <select id="to" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
                        <option value="sqm">Square Meter</option>
                        <option value="sqkm">Square Kilometer</option>
                        <option value="sqft">Square Foot</option>
                        <option value="sqin">Square Inch</option>
                        <option value="acre">Acre</option>
                        <option value="hectare">Hectare</option>
                        <option value="sqyd">Square Yard</option>
                    </select>
                </div>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Value</h2>
            <div class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold" id="output">--</div>
        </div>
    </div>

    <script>
        const valueInput = document.getElementById('value');
        const fromSelect = document.getElementById('from');
        const toSelect = document.getElementById('to');
        const output = document.getElementById('output');

        const areaUnits = {
            sqm: 1,
            sqkm: 1_000_000,
            sqft: 0.092903,
            sqin: 0.00064516,
            acre: 4046.86,
            hectare: 10000,
            sqyd: 0.836127
        };

        function convert() {
            const inputValue = parseFloat(valueInput.value);
            const fromUnit = fromSelect.value;
            const toUnit = toSelect.value;

            if (!isNaN(inputValue)) {
                const inSqMeters = inputValue * areaUnits[fromUnit];
                const result = inSqMeters / areaUnits[toUnit];
                output.textContent = result.toLocaleString(undefined, {maximumFractionDigits: 6});
            } else {
                output.textContent = "--";
            }
        }

        valueInput.addEventListener('input', convert);
        fromSelect.addEventListener('change', convert);
        toSelect.addEventListener('change', convert);

        // Responsive: trigger conversion on load
        window.addEventListener('DOMContentLoaded', convert);
    </script>
</body>
</html>
