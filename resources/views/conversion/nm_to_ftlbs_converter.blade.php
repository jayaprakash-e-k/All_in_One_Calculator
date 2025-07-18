<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nm to ft-lbs Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-blue-100">
        <h1 class="text-3xl font-extrabold text-blue-700 mb-6 text-center tracking-tight">Nm to ft-lbs Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="nmInput" class="block text-gray-700 font-medium mb-1">Torque (in Nm)</label>
                <input type="number" id="nmInput" class="w-full p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition" placeholder="Enter torque in Newton meters">
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Torque in ft-lbs</h2>
            <div class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold" id="output">-- ft-lbs</div>
        </div>
    </div>

    <script>
        const nmInput = document.getElementById('nmInput');
        const output = document.getElementById('output');

        function convertNmToFtlbs() {
            const nm = parseFloat(nmInput.value);
            if (!isNaN(nm)) {
                const ftLbs = nm * 0.737562;
                output.textContent = ftLbs.toFixed(4).replace(/\.?0+$/, '') + ' ft-lbs';
            } else {
                output.textContent = '-- ft-lbs';
            }
        }

        nmInput.addEventListener('input', convertNmToFtlbs);
        window.addEventListener('DOMContentLoaded', convertNmToFtlbs);
    </script>
</body>
</html>
