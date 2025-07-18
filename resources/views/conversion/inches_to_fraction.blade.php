<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inches to Fraction Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
        <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Inches to Fraction Calculator</h1>

        <form class="space-y-5">
            <div>
                <label for="decimal" class="block text-gray-700 font-semibold mb-1">Enter Inches (decimal)</label>
                <input type="number" step="0.01" id="decimal" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition" placeholder="Example: 2.75">
            </div>
        </form>

        <div class="mt-8 space-y-4 text-center">
            <h2 class="text-xl font-bold text-gray-800">Converted Values</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 p-4 rounded-xl font-mono text-lg text-blue-800 font-semibold">
                    <p>Fraction</p>
                    <div id="fraction">--</div>
                </div>
                <div class="bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 p-4 rounded-xl font-mono text-lg text-blue-800 font-semibold">
                    <p>Millimeters</p>
                    <div id="millimeters">--</div>
                </div>
                <div class="bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 p-4 rounded-xl font-mono text-lg text-blue-800 font-semibold">
                    <p>Centimeters</p>
                    <div id="centimeters">--</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const input = document.getElementById('decimal');
        const fraction = document.getElementById('fraction');
        const millimeters = document.getElementById('millimeters');
        const centimeters = document.getElementById('centimeters');

        const nearestFraction = (dec) => {
            const whole = Math.floor(dec);
            const frac = dec - whole;

            const denominators = [64, 32, 16, 8, 4, 2];
            for (const d of denominators) {
                const n = Math.round(frac * d);
                if (n === 0) return `${whole}"`;
                if (n === d) return `${whole + 1}"`;
                const gcd = (a, b) => b ? gcd(b, a % b) : a;
                const common = gcd(n, d);
                return `${whole} ${n / common}/${d / common}"`;
            }
            return `${dec}"`;
        };

        function convert() {
            const inches = parseFloat(input.value);
            if (!isNaN(inches)) {
                const mm = inches * 25.4;
                const cm = mm / 10;
                fraction.textContent = nearestFraction(inches);
                millimeters.textContent = mm.toLocaleString(undefined, { maximumFractionDigits: 2 });
                centimeters.textContent = cm.toLocaleString(undefined, { maximumFractionDigits: 2 });
            } else {
                fraction.textContent = millimeters.textContent = centimeters.textContent = "--";
            }
        }

        input.addEventListener('input', convert);
        window.addEventListener('DOMContentLoaded', convert);
    </script>
</body>
</html>
