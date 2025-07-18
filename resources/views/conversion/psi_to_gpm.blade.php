<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSI to GPM Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-orange-100 via-white to-red-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-orange-100">
        <h1 class="text-3xl font-extrabold text-orange-700 mb-6 text-center tracking-tight">PSI to GPM Calculator</h1>

        <form class="space-y-5">
            <div>
                <label for="pressure" class="block text-gray-700 font-medium mb-1">Pressure (PSI)</label>
                <input type="number" id="pressure" class="w-full p-3 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition" placeholder="Enter pressure in PSI">
            </div>

            <div>
                <label for="diameter" class="block text-gray-700 font-medium mb-1">Pipe Diameter (inches)</label>
                <input type="number" id="diameter" class="w-full p-3 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition" placeholder="Enter pipe diameter">
            </div>

            <div>
                <label for="coefficient" class="block text-gray-700 font-medium mb-1">Discharge Coefficient (C)</label>
                <input type="number" id="coefficient" value="0.6" step="0.1" class="w-full p-3 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition" placeholder="Discharge coefficient (0.6 default)">
            </div>

            <div>
                <label for="units" class="block text-gray-700 font-medium mb-1">Output Units</label>
                <select id="units" class="w-full p-3 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition">
                    <option value="gpm">GPM (Gallons per minute)</option>
                    <option value="lpm">LPM (Liters per minute)</option>
                    <option value="cfs">CFS (Cubic feet per second)</option>
                    <option value="cms">CMS (Cubic meters per second)</option>
                </select>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Flow Rate</h2>
            <div class="inline-block bg-gradient-to-r from-orange-200 via-red-200 to-pink-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-orange-800 font-semibold" id="output">--</div>
        </div>

        <div class="mt-4 text-sm text-gray-600 text-center">
            <p>Formula: Q = C × A × √(2gh)</p>
            <p>Where h = P/(ρg), P = pressure, ρ = density, g = gravity</p>
        </div>
    </div>

    <script>
        const pressureInput = document.getElementById('pressure');
        const diameterInput = document.getElementById('diameter');
        const coefficientInput = document.getElementById('coefficient');
        const unitsSelect = document.getElementById('units');
        const output = document.getElementById('output');

        function convert() {
            const pressure = parseFloat(pressureInput.value);
            const diameter = parseFloat(diameterInput.value);
            const coefficient = parseFloat(coefficientInput.value) || 0.6;
            const units = unitsSelect.value;

            if (!isNaN(pressure) && !isNaN(diameter) && pressure > 0 && diameter > 0) {
                // Convert PSI to head (feet)
                const head = pressure * 2.31; // 1 PSI = 2.31 feet of head
                
                // Calculate area in square feet
                const area = Math.PI * Math.pow(diameter / 12, 2) / 4;
                
                // Calculate flow rate in cubic feet per second
                const cfs = coefficient * area * Math.sqrt(2 * 32.174 * head);
                
                let result;
                switch(units) {
                    case 'gpm':
                        result = cfs * 448.831; // CFS to GPM
                        break;
                    case 'lpm':
                        result = cfs * 1699.01; // CFS to LPM
                        break;
                    case 'cfs':
                        result = cfs;
                        break;
                    case 'cms':
                        result = cfs * 0.0283168; // CFS to CMS
                        break;
                }
                
                output.textContent = result.toLocaleString(undefined, { maximumFractionDigits: 3 });
            } else {
                output.textContent = "--";
            }
        }

        pressureInput.addEventListener('input', convert);
        diameterInput.addEventListener('input', convert);
        coefficientInput.addEventListener('input', convert);
        unitsSelect.addEventListener('change', convert);
    </script>
</body>
</html>