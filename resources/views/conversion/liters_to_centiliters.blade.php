<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liters to Centiliters Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">

<div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
    <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Liters to Centiliters</h1>

    <form class="space-y-6">
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Enter Volume (Liters)</label>
            <input type="number" id="liter" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g., 2.5">
        </div>
    </form>

    <div class="mt-8 text-center">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Result</h2>
        <div id="output" class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold">--</div>
    </div>
</div>

<script>
    const input = document.getElementById('liter');
    const output = document.getElementById('output');

    function formatNumber(num) {
        return num.toFixed(3).replace(/\.?0+$/, '');
    }

    input.addEventListener('input', () => {
        const value = parseFloat(input.value);
        if (!isNaN(value)) {
            const centiliters = value * 100;
            output.textContent = formatNumber(centiliters) + " cL";
        } else {
            output.textContent = "--";
        }
    });

    window.addEventListener('DOMContentLoaded', () => {
        input.dispatchEvent(new Event('input'));
    });
</script>

</body>
</html>
