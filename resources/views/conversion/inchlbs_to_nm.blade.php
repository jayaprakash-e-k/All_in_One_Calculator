<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inch-lbs ↔ Nm Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 flex items-center justify-center">

<div class="w-full max-w-lg bg-white/90 p-8 rounded-2xl shadow-2xl space-y-6">
    <h1 class="text-3xl font-extrabold text-center text-blue-700">Inch-lbs ↔ Nm Converter</h1>

    <div>
        <label class="block text-gray-700 font-semibold mb-2">Enter Value</label>
        <input type="number" id="inputValue" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="Enter value">
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 font-semibold mb-1">From</label>
            <select id="fromUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                <option value="inlb">Inch-pounds (in-lbs)</option>
                <option value="nm">Newton-meters (Nm)</option>
            </select>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mb-1">To</label>
            <select id="toUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                <option value="nm">Newton-meters (Nm)</option>
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

    const torqueConversion = {
        inlb: {
            nm: 0.112985,
            inlb: 1
        },
        nm: {
            inlb: 8.85075,
            nm: 1
        }
    };

    function convertTorque() {
        const val = parseFloat(inputValue.value);
        if (!isNaN(val)) {
            const from = fromUnit.value;
            const to = toUnit.value;
            const result = val * torqueConversion[from][to];
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
