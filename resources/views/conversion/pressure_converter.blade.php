<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pressure Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-white to-teal-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-green-100">
        <h1 class="text-3xl font-extrabold text-green-700 mb-6 text-center tracking-tight">Pressure Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="value" class="block text-gray-700 font-medium mb-1">Enter Pressure Value</label>
                <input type="number" id="value" class="w-full p-3 border border-green-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition" placeholder="Enter value">
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <label for="from" class="block text-gray-700 font-medium mb-1">From</label>
                    <select id="from" class="w-full p-3 border border-green-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition">
                        <option value="pascal">Pascal (Pa)</option>
                        <option value="bar">Bar</option>
                        <option value="psi">PSI (pounds per square inch)</option>
                        <option value="atm">Atmosphere (atm)</option>
                        <option value="torr">Torr</option>
                        <option value="mmhg">mmHg</option>
                        <option value="inhg">inHg</option>
                        <option value="kpa">Kilopascal (kPa)</option>
                        <option value="mpa">Megapascal (MPa)</option>
                        <option value="psf">PSF (pounds per square foot)</option>
                        <option value="mbar">Millibar (mbar)</option>
                        <option value="mmh2o">mmH2O</option>
                        <option value="inh2o">inH2O</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label for="to" class="block text-gray-700 font-medium mb-1">To</label>
                    <select id="to" class="w-full p-3 border border-green-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition">
                        <option value="pascal">Pascal (Pa)</option>
                        <option value="bar">Bar</option>
                        <option value="psi">PSI (pounds per square inch)</option>
                        <option value="atm">Atmosphere (atm)</option>
                        <option value="torr">Torr</option>
                        <option value="mmhg">mmHg</option>
                        <option value="inhg">inHg</option>
                        <option value="kpa">Kilopascal (kPa)</option>
                        <option value="mpa">Megapascal (MPa)</option>
                        <option value="psf">PSF (pounds per square foot)</option>
                        <option value="mbar">Millibar (mbar)</option>
                        <option value="mmh2o">mmH2O</option>
                        <option value="inh2o">inH2O</option>
                    </select>
                </div>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Converted Value</h2>
            <div class="inline-block bg-gradient-to-r from-green-200 via-teal-200 to-blue-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-green-800 font-semibold" id="output">--</div>
        </div>
    </div>

    <script>
        const valueInput = document.getElementById('value');
        const fromSelect = document.getElementById('from');
        const toSelect = document.getElementById('to');
        const output = document.getElementById('output');

        // All values are in Pascal (Pa)
        const units = {
            pascal: 1,                    // Pascal
            bar: 100000,                  // Bar
            psi: 6894.76,                 // PSI
            atm: 101325,                  // Atmosphere
            torr: 133.322,                // Torr
            mmhg: 133.322,                // mmHg
            inhg: 3386.39,                // inHg
            kpa: 1000,                    // Kilopascal
            mpa: 1000000,                 // Megapascal
            psf: 47.8803,                 // PSF
            mbar: 100,                    // Millibar
            mmh2o: 9.80665,               // mmH2O
            inh2o: 249.089                // inH2O
        };

        function convert() {
            const inputValue = parseFloat(valueInput.value);
            const fromUnit = fromSelect.value;
            const toUnit = toSelect.value;

            if (!isNaN(inputValue)) {
                const inPascal = inputValue * units[fromUnit];
                const result = inPascal / units[toUnit];
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