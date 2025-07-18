<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weight Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">

<div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
    <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Weight Converter</h1>

    <form class="space-y-6">
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Enter Weight</label>
            <input type="number" id="inputValue" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g., 50">
        </div>

        <div class="flex gap-4">
            <div class="w-1/2">
                <label class="block text-gray-700 font-semibold mb-1">From Unit</label>
                <select id="fromUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                    <option value="mg">Milligram (mg)</option>
                    <option value="g" selected>Gram (g)</option>
                    <option value="kg">Kilogram (kg)</option>
                    <option value="oz">Ounce (oz)</option>
                    <option value="lb">Pound (lb)</option>
                    <option value="t">Tonne (t)</option>
                </select>
            </div>

            <div class="w-1/2">
                <label class="block text-gray-700 font-semibold mb-1">To Unit</label>
                <select id="toUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                    <option value="mg">Milligram (mg)</option>
                    <option value="g">Gram (g)</option>
                    <option value="kg" selected>Kilogram (kg)</option>
                    <option value="oz">Ounce (oz)</option>
                    <option value="lb">Pound (lb)</option>
                    <option value="t">Tonne (t)</option>
                </select>
            </div>
        </div>
    </form>

    <div class="mt-8 text-center">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Weight</h2>
        <div id="output" class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold">--</div>
    </div>
</div>

<script>
    const conversionRates = {
        mg: 0.001,
        g: 1,
        kg: 1000,
        oz: 28.3495,
        lb: 453.592,
        t: 1_000_000
    };

    const input = document.getElementById('inputValue');
    const fromUnit = document.getElementById('fromUnit');
    const toUnit = document.getElementById('toUnit');
    const output = document.getElementById('output');

    function formatNumber(num) {
        return num.toFixed(3).replace(/\.?0+$/, '');
    }

    function convertWeight() {
        const value = parseFloat(input.value);
        if (!isNaN(value)) {
            const grams = value * conversionRates[fromUnit.value];
            const result = grams / conversionRates[toUnit.value];
            output.textContent = formatNumber(result) + ' ' + toUnit.value;
        } else {
            output.textContent = '--';
        }
    }

    input.addEventListener('input', convertWeight);
    fromUnit.addEventListener('change', convertWeight);
    toUnit.addEventListener('change', convertWeight);
    window.addEventListener('DOMContentLoaded', convertWeight);
</script>

</body>
</html>
