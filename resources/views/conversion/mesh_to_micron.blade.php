<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mesh to Micron Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
        <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Mesh to Micron Converter</h1>

        <form class="space-y-5">
            <div>
                <label for="mesh" class="block text-gray-700 font-semibold mb-1">Enter Mesh Size</label>
                <input type="number" id="mesh" class="w-full p-3 border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition" placeholder="e.g., 20">
            </div>
        </form>

        <div class="mt-8 text-center">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Micron Size (Approx.)</h2>
            <div class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold" id="output">--</div>
        </div>
    </div>

    <script>
        const meshInput = document.getElementById('mesh');
        const output = document.getElementById('output');

        // Standard mesh-to-micron lookup (partial but accurate)
        const meshToMicronTable = {
            3: 6730,
            4: 4760,
            5: 4000,
            6: 3360,
            7: 2830,
            8: 2380,
            10: 2000,
            12: 1680,
            14: 1410,
            16: 1190,
            18: 1000,
            20: 841,
            25: 707,
            30: 595,
            35: 500,
            40: 425,
            45: 354,
            50: 297,
            60: 250,
            70: 210,
            80: 177,
            100: 149,
            120: 125,
            140: 105,
            170: 88,
            200: 74,
            230: 63,
            270: 53,
            325: 44,
            400: 37
        };

        function convert() {
            const mesh = parseInt(meshInput.value);
            if (!isNaN(mesh) && mesh > 0) {
                if (meshToMicronTable.hasOwnProperty(mesh)) {
                    output.textContent = `${meshToMicronTable[mesh]} μm (standard)`;
                } else {
                    const estimated = (14900 / mesh).toFixed(2);
                    output.textContent = `${estimated} μm (approximate)`;
                }
            } else {
                output.textContent = "--";
            }
        }

        meshInput.addEventListener('input', convert);
        window.addEventListener('DOMContentLoaded', convert);
    </script>
</body>
</html>
