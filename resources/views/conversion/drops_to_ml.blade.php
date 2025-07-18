<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drops to mL Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">

<div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
    <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Drops to mL Converter</h1>

    <form class="space-y-6">
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Enter Volume (Drops)</label>
            <input type="number" id="drops" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g., 20">
        </div>
    </form>

    <div class="mt-8 text-center">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Volume</h2>
        <div id="output" class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold">--</div>
    </div>
</div>

<script>
    const dropsInput = document.getElementById('drops');
    const output = document.getElementById('output');

    function formatNumber(num) {
        return num.toFixed(3).replace(/\.?0+$/, '');
    }

    function convert() {
        const drops = parseFloat(dropsInput.value);
        if (!isNaN(drops)) {
            const ml = drops * 0.05;
            output.textContent = formatNumber(ml) + ' mL';
        } else {
            output.textContent = "--";
        }
    }

    dropsInput.addEventListener('input', convert);
    window.addEventListener('DOMContentLoaded', convert);
</script>

</body>
</html>
