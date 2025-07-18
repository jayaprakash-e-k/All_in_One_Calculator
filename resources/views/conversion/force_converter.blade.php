<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enhanced Force Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 flex items-center justify-center">

<div class="w-full max-w-lg bg-white/90 p-8 rounded-2xl shadow-2xl space-y-6">
    <h1 class="text-3xl font-extrabold text-center text-blue-700">Force Converter</h1>

    <div>
        <label class="block text-gray-700 font-semibold mb-2">Enter Force</label>
        <input type="number" id="inputValue" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="Enter value">
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 font-semibold mb-1">From</label>
            <select id="fromUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                <option value="N">Newton (N)</option>
                <option value="kN">Kilonewton (kN)</option>
                <option value="lbf">Pound-force (lbf)</option>
                <option value="kgf">Kilogram-force (kgf)</option>
                <option value="dy">Dyne (dy)</option>
                <option value="tonfUS">Ton-force (US)</option>
                <option value="tonfUK">Ton-force (UK)</option>
                <option value="kip">Kip-force (kip)</option>
            </select>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mb-1">To</label>
            <select id="toUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                <option value="N">Newton (N)</option>
                <option value="kN">Kilonewton (kN)</option>
                <option value="lbf">Pound-force (lbf)</option>
                <option value="kgf">Kilogram-force (kgf)</option>
                <option value="dy">Dyne (dy)</option>
                <option value="tonfUS">Ton-force (US)</option>
                <option value="tonfUK">Ton-force (UK)</option>
                <option value="kip">Kip-force (kip)</option>
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

    const forceFactorsToN = {
        N: 1,
        kN: 1000,
        lbf: 4.44822,
        kgf: 9.80665,
        dy: 0.00001,
        tonfUS: 8896.44323,
        tonfUK: 9964.016384,
        kip: 4448.2216152605
    };

    function convertForce() {
        const val = parseFloat(inputValue.value);
        if (!isNaN(val)) {
            const from = fromUnit.value;
            const to = toUnit.value;
            const newtons = val * forceFactorsToN[from];
            const result = newtons / forceFactorsToN[to];
            output.textContent = result.toFixed(6).replace(/\.?0+$/, '');
        } else {
            output.textContent = '--';
        }
    }

    inputValue.addEventListener('input', convertForce);
    fromUnit.addEventListener('change', convertForce);
    toUnit.addEventListener('change', convertForce);
    window.addEventListener('DOMContentLoaded', convertForce);
</script>

</body>
</html>
