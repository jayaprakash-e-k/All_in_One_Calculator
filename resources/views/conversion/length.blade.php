<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Length Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-blue-100">
        <h1 class="text-3xl font-extrabold text-blue-700 mb-6 text-center tracking-tight">Length Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="value" class="block text-gray-700 font-medium mb-1">Enter Length</label>
                <input type="number" id="value" class="w-full p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition" placeholder="Enter value">
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <label for="from" class="block text-gray-700 font-medium mb-1">From</label>
                    <select id="from" class="w-full p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                        <option value="meter">Meter</option>
                        <option value="kilometer">Kilometer</option>
                        <option value="centimeter">Centimeter</option>
                        <option value="millimeter">Millimeter</option>
                        <option value="inch">Inch</option>
                        <option value="foot">Foot</option>
                        <option value="yard">Yard</option>
                        <option value="mile">Mile</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label for="to" class="block text-gray-700 font-medium mb-1">To</label>
                    <select id="to" class="w-full p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                        <option value="meter">Meter</option>
                        <option value="kilometer">Kilometer</option>
                        <option value="centimeter">Centimeter</option>
                        <option value="millimeter">Millimeter</option>
                        <option value="inch">Inch</option>
                        <option value="foot">Foot</option>
                        <option value="yard">Yard</option>
                        <option value="mile">Mile</option>
                    </select>
                </div>
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Converted Value</h2>
            <div class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold" id="output">--</div>
        </div>
    </div>

    <script>
        const valueInput = document.getElementById('value');
        const fromSelect = document.getElementById('from');
        const toSelect = document.getElementById('to');
        const output = document.getElementById('output');

        const units = {
            meter: 1,
            kilometer: 1000,
            centimeter: 0.01,
            millimeter: 0.001,
            inch: 0.0254,
            foot: 0.3048,
            yard: 0.9144,
            mile: 1609.34
        };

        function convert() {
            const inputValue = parseFloat(valueInput.value);
            const fromUnit = fromSelect.value;
            const toUnit = toSelect.value;

            if (!isNaN(inputValue)) {
                const inMeters = inputValue * units[fromUnit];
                const result = inMeters / units[toUnit];
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
