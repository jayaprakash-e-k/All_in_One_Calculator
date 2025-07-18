<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inch-lbs ↔ Foot-lbs Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 flex items-center justify-center">

<div class="w-full max-w-lg bg-white/90 p-8 rounded-2xl shadow-2xl space-y-6">
    <h1 class="text-3xl font-extrabold text-center text-blue-700">Inch-lbs ↔ Foot-lbs Converter</h1>

    <div>
        <label class="block text-gray-700 font-semibold mb-2">Enter Torque</label>
        <input type="number" id="inputValue" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="Enter value">
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 font-semibold mb-1">From</label>
            <select id="fromUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                <option value="inlb">Inch-pounds (in-lbs)</option>
                <option value="ftlb">Foot-pounds (ft-lbs)</option>
            </select>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mb-1">To</label>
            <select id="toUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                <option value="ftlb">Foot-pounds (ft-lbs)</option>
                <option value="inlb">Inch-pounds (in-lbs)</option>
            </select>
        </div>
    </div>

    <div class="text-center mt-6">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Value</h2>
        <div id="output" class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold">--</div>
    </div>
</div>

<script>
    const inputValue = document.getElementById('inputValue');
    const fromUnit = document.getElementById('fromUnit');
    const toUnit = document.getElementById('toUnit');
    const output = document.getElementById('output');

    const conversionFactor = 1 / 12; // 1 ft-lb = 12 in-lbs

    function convertTorque() {
        const val = parseFloat(inputValue.value);
        if (!isNaN(val)) {
            let result;
            if (fromUnit.value === 'inlb' && toUnit.value === 'ftlb') {
                result = val * conversionFactor;
            } else if (fromUnit.value === 'ftlb' && toUnit.value === 'inlb') {
                result = val / conversionFactor;
            } else {
                result = val;
            }
            output.textContent = result.toFixed(6).replace(/\.?0+$/, '');
        } else {
            output.textContent = '--';
        }
    }

    inputValue.addEventListener('input', convertTorque);
    fromUnit.addEventListener('change', convertTorque);
    toUnit.addEventListener('change', convertTorque);
    window.addEventListener('DOMContentLoaded', convertTorque);
</script>

</body>
</html>
