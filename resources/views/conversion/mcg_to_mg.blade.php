<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mcg to mg Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
<div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl">
    <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6">mcg to mg Converter</h1>

    <form class="space-y-5">
        <label class="block text-gray-700 font-semibold mb-1">Enter Micrograms (mcg)</label>
        <input type="number" id="mcg" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g., 5000">
    </form>

    <div class="mt-6 text-center">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Result</h2>
        <div id="output" class="text-2xl font-mono text-blue-800 font-semibold">--</div>
    </div>
</div>

<script>
    const mcgInput = document.getElementById('mcg');
    const output = document.getElementById('output');

    function convert() {
        const mcg = parseFloat(mcgInput.value);
        const mg = mcg * 0.001;
        output.textContent = isNaN(mg) ? '--' : mg.toFixed(3).replace(/\.?0+$/, '') + ' mg';
    }

    mcgInput.addEventListener('input', convert);
    window.addEventListener('DOMContentLoaded', convert);
</script>
</body>
</html>
