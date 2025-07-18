<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Torr to atm Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-teal-100 via-white to-cyan-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-teal-100">
        <h1 class="text-3xl font-extrabold text-teal-700 mb-6 text-center tracking-tight">Torr to atm Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="value" class="block text-gray-700 font-medium mb-1">Enter Pressure Value</label>
                <input type="number" id="value" class="w-full p-3 border border-teal-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-400 transition" placeholder="Enter value">
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <label for="from" class="block text-gray-700 font-medium mb-1">From</label>
                    <select id="from" class="w-full p-3 border border-teal-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-400 transition">
                        <option value="torr">Torr</option>
                        <option value="atm">Atmosphere (atm)</option>
                        <option value="mmhg">mmHg</option>
                        <option value="inhg">inHg</option>
                        <option value="mbar">Millibar (mbar)</option>
                        <option value="pascal">Pascal (Pa)</option>
                        <option value="kpa">Kilopascal (kPa)</option>
                        <option value="psi">PSI</option>
                        <option value="bar">Bar</option>
                        <option value="mtorr">Millitorr (mTorr)</option>
                        <option value="micron">Micron (μm Hg)</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label for="to" class="block text-gray-700 font-medium mb-1">To</label>
                    <select id="to" class="w-full p-3 border border-teal-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-400 transition">
                        <option value="torr">Torr</option>
                        <option value="atm" selected>Atmosphere (atm)</option>
                        <option value="mmhg">mmHg</option>
                        <option value="inhg">inHg</option>
                        <option value="mbar">Millibar (mbar)</option>
                        <option value="pascal">Pascal (Pa)</option>
                        <option value="kpa">Kilopascal (kPa)</option>
                        <option value="psi">PSI</option>
                        <option value="bar">Bar</option>
                        <option value="mtorr">Millitorr (mTorr)</option>
                        <option value="micron">Micron (μm Hg)</option>
                    </select>
                </div>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Converted Value</h2>
            <div class="inline-block bg-gradient-to-r from-teal-200 via-cyan-200 to-blue-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-teal-800 font-semibold" id="output">--</div>
        </div>

        <div class="mt-4 text-sm text-gray-600 text-center">
            <p>1 atm = 760 Torr = 760 mmHg</p>
        </div>
    </div>

    <script>
        const valueInput = document.getElementById('value');
        const fromSelect = document.getElementById('from');
        const toSelect = document.getElementById('to');
        const output = document.getElementById('output');

        // All values are in Torr
        const units = {
            torr: 1,                      // Torr
            atm: 760,                     // Atmosphere
            mmhg: 1,                      // mmHg (same as Torr)
            inhg: 25.4,                   // inHg
            mbar: 0.750062,               // Millibar
            pascal: 0.00750062,           // Pascal
            kpa: 7.50062,                 // Kilopascal
            psi: 51.7149,                 // PSI
            bar: 750.062,                 // Bar
            mtorr: 0.001,                 // Millitorr
            micron: 0.001                 // Micron
        };

        function convert() {
            const inputValue = parseFloat(valueInput.value);
            const fromUnit = fromSelect.value;
            const toUnit = toSelect.value;

            if (!isNaN(inputValue)) {
                const inTorr = inputValue * units[fromUnit];
                const result = inTorr / units[toUnit];
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