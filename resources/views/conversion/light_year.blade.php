<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Light Year Conversion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
        <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Light Year Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="value" class="block text-gray-700 font-semibold mb-1">Enter Light Years</label>
                <input type="number" id="value" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition" placeholder="Enter light years">
            </div>

            <div>
                <label for="to" class="block text-gray-700 font-semibold mb-1">Convert To</label>
                <select id="to" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
                    <option value="km">Kilometers</option>
                    <option value="mi">Miles</option>
                    <option value="au">Astronomical Units</option>
                    <option value="pc">Parsecs</option>
                </select>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Value</h2>
            <div class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold" id="output">--</div>
        </div>
    </div>

    <script>
        const valueInput = document.getElementById('value');
        const toSelect = document.getElementById('to');
        const output = document.getElementById('output');

        const conversionRates = {
            km: 9.461e+12,
            mi: 5.879e+12,
            au: 63241.1,
            pc: 0.306601
        };

        function convert() {
            const lightYears = parseFloat(valueInput.value);
            const unit = toSelect.value;

            if (!isNaN(lightYears)) {
                const result = lightYears * conversionRates[unit];
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
