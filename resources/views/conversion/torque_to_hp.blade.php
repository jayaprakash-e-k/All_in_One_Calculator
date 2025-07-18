<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Torque to HP Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 via-white to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-indigo-100">
        <h1 class="text-3xl font-extrabold text-indigo-700 mb-6 text-center tracking-tight">Torque to HP Calculator</h1>

        <form class="space-y-5">
            <div>
                <label for="torque" class="block text-gray-700 font-medium mb-1">Torque Value</label>
                <input type="number" id="torque" class="w-full p-3 border border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" placeholder="Enter torque value">
            </div>

            <div>
                <label for="torqueUnit" class="block text-gray-700 font-medium mb-1">Torque Unit</label>
                <select id="torqueUnit" class="w-full p-3 border border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">
                    <option value="ftlbs">Foot-pounds (ft-lbs)</option>
                    <option value="nm">Newton-meters (Nm)</option>
                    <option value="inchlbs">Inch-pounds (in-lbs)</option>
                    <option value="kgm">Kilogram-meters (kg⋅m)</option>
                </select>
            </div>

            <div>
                <label for="rpm" class="block text-gray-700 font-medium mb-1">RPM (Revolutions per minute)</label>
                <input type="number" id="rpm" class="w-full p-3 border border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" placeholder="Enter RPM">
            </div>

            <div>
                <label for="powerUnit" class="block text-gray-700 font-medium mb-1">Power Unit</label>
                <select id="powerUnit" class="w-full p-3 border border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">
                    <option value="hp">Horsepower (HP)</option>
                    <option value="kw">Kilowatts (kW)</option>
                    <option value="watts">Watts (W)</option>
                </select>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Power Output</h2>
            <div class="inline-block bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-indigo-800 font-semibold" id="output">--</div>
        </div>

        <div class="mt-4 text-sm text-gray-600 text-center">
            <p>Formula: Power = (Torque × RPM) / Conversion Factor</p>
            <p>HP = (Torque × RPM) / 5252</p>
        </div>
    </div>

    <script>
        const torqueInput = document.getElementById('torque');
        const torqueUnitSelect = document.getElementById('torqueUnit');
        const rpmInput = document.getElementById('rpm');
        const powerUnitSelect = document.getElementById('powerUnit');
        const output = document.getElementById('output');

        function convert() {
            const torque = parseFloat(torqueInput.value);
            const torqueUnit = torqueUnitSelect.value;
            const rpm = parseFloat(rpmInput.value);
            const powerUnit = powerUnitSelect.value;

            if (!isNaN(torque) && !isNaN(rpm) && torque > 0 && rpm > 0) {
                // Convert torque to ft-lbs
                let torqueInFtLbs;
                switch(torqueUnit) {
                    case 'ftlbs':
                        torqueInFtLbs = torque;
                        break;
                    case 'nm':
                        torqueInFtLbs = torque * 0.737562149;
                        break;
                    case 'inchlbs':
                        torqueInFtLbs = torque / 12;
                        break;
                    case 'kgm':
                        torqueInFtLbs = torque * 7.23301;
                        break;
                }
                
                // Calculate horsepower
                const hp = (torqueInFtLbs * rpm) / 5252;
                
                let result;
                switch(powerUnit) {
                    case 'hp':
                        result = hp;
                        break;
                    case 'kw':
                        result = hp * 0.745699872; // HP to kW
                        break;
                    case 'watts':
                        result = hp * 745.699872; // HP to Watts
                        break;
                }
                
                output.textContent = result.toLocaleString(undefined, { maximumFractionDigits: 4 });
            } else {
                output.textContent = "--";
            }
        }

        torqueInput.addEventListener('input', convert);
        torqueUnitSelect.addEventListener('change', convert);
        rpmInput.addEventListener('input', convert);
        powerUnitSelect.addEventListener('change', convert);
    </script>
</body>
</html>