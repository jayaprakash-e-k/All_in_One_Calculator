<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Height in Inches Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
        <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Height in Inches Calculator</h1>

        <form class="space-y-5">
            <div>
                <label for="inches" class="block text-gray-700 font-semibold mb-1">Enter Height (in inches)</label>
                <input type="number" id="inches" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition" placeholder="Example: 65">
            </div>
        </form>

        <div class="mt-8 space-y-4 text-center">
            <h2 class="text-xl font-bold text-gray-800">Converted Values</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 p-4 rounded-xl font-mono text-lg text-blue-800 font-semibold">
                    <p>Feet & Inches</p>
                    <div id="feetInches">--</div>
                </div>
                <div class="bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 p-4 rounded-xl font-mono text-lg text-blue-800 font-semibold">
                    <p>Centimeters</p>
                    <div id="centimeters">--</div>
                </div>
                <div class="bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 p-4 rounded-xl font-mono text-lg text-blue-800 font-semibold">
                    <p>Meters</p>
                    <div id="meters">--</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const input = document.getElementById('inches');
        const feetInches = document.getElementById('feetInches');
        const centimeters = document.getElementById('centimeters');
        const meters = document.getElementById('meters');

        function convert() {
            const inches = parseFloat(input.value);
            if (!isNaN(inches)) {
                const feet = Math.floor(inches / 12);
                const remainingInches = inches % 12;
                const cm = inches * 2.54;
                const m = cm / 100;

                feetInches.textContent = `${feet} ft ${remainingInches.toFixed(1)} in`;
                centimeters.textContent = cm.toLocaleString(undefined, { maximumFractionDigits: 2 });
                meters.textContent = m.toLocaleString(undefined, { maximumFractionDigits: 4 });
            } else {
                feetInches.textContent = centimeters.textContent = meters.textContent = "--";
            }
        }

        input.addEventListener('input', convert);
        window.addEventListener('DOMContentLoaded', convert);
    </script>
</body>
</html>
