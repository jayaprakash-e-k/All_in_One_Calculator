<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nm to in-lbs Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-100 via-white to-blue-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-purple-100">
        <h1 class="text-3xl font-extrabold text-purple-700 mb-6 text-center tracking-tight">Nm to in-lbs Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="value" class="block text-gray-700 font-medium mb-1">Enter Torque Value</label>
                <input type="number" id="value" class="w-full p-3 border border-purple-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 transition" placeholder="Enter value">
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <label for="from" class="block text-gray-700 font-medium mb-1">From</label>
                    <select id="from" class="w-full p-3 border border-purple-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 transition">
                        <option value="nm">Newton-meter (Nm)</option>
                        <option value="inchlbs">Inch-pounds (in-lbs)</option>
                        <option value="ftlbs">Foot-pounds (ft-lbs)</option>
                        <option value="kgm">Kilogram-meter (kg⋅m)</option>
                        <option value="ozin">Ounce-inch (oz⋅in)</option>
                        <option value="dynecm">Dyne-centimeter (dyn⋅cm)</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label for="to" class="block text-gray-700 font-medium mb-1">To</label>
                    <select id="to" class="w-full p-3 border border-purple-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 transition">
                        <option value="nm">Newton-meter (Nm)</option>
                        <option value="inchlbs" selected>Inch-pounds (in-lbs)</option>
                        <option value="ftlbs">Foot-pounds (ft-lbs)</option>
                        <option value="kgm">Kilogram-meter (kg⋅m)</option>
                        <option value="ozin">Ounce-inch (oz⋅in)</option>
                        <option value="dynecm">Dyne-centimeter (dyn⋅cm)</option>
                    </select>
                </div>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Converted Value</h2>
            <div class="inline-block bg-gradient-to-r from-purple-200 via-blue-200 to-pink-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-purple-800 font-semibold" id="output">--</div>
        </div>
    </div>

    <script>
        const valueInput = document.getElementById('value');
        const fromSelect = document.getElementById('from');
        const toSelect = document.getElementById('to');
        const output = document.getElementById('output');

        // All values are in Newton-meters (Nm)
        const units = {
            nm: 1,                    // Newton-meter
            inchlbs: 8.85074579,      // Inch-pounds
            ftlbs: 0.737562149,       // Foot-pounds
            kgm: 0.101971621,         // Kilogram-meter
            ozin: 141.611933,         // Ounce-inch
            dynecm: 10000000          // Dyne-centimeter
        };

        function convert() {
            const inputValue = parseFloat(valueInput.value);
            const fromUnit = fromSelect.value;
            const toUnit = toSelect.value;

            if (!isNaN(inputValue)) {
                const inNm = inputValue / units[fromUnit];
                const result = inNm * units[toUnit];
                output.textContent = result.toLocaleString(undefined, { maximumFractionDigits: 6 });
            } else {
                output.textContent = "--";
            }
        }

        valueInput.addEventListener('input', convert);
        fromSelect.addEventListener('change', convert);
        toSelect.addEventListener('change', convert);
    </script>
</body>
</html>