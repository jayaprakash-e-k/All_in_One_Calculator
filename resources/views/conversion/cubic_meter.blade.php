<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advanced Volume Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">

<div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
    <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Advanced Volume Calculator</h1>

    <form class="space-y-6">
        @foreach(['Length', 'Width', 'Height'] as $dimension)
        @php $lower = strtolower($dimension); @endphp
        <div>
            <label class="block text-gray-700 font-semibold mb-1">{{ $dimension }}</label>
            <div class="flex gap-3">
                <input type="number" id="{{ $lower }}" class="w-3/4 p-3 border-2 border-blue-200 rounded-lg" placeholder="Enter {{ $dimension }}">
                <select id="{{ $lower }}Unit" class="w-1/4 p-3 border-2 border-blue-200 rounded-lg">
                    <option value="mm">mm</option>
                    <option value="cm">cm</option>
                    <option value="m" selected>m</option>
                    <option value="km">km</option>
                    <option value="in">in</option>
                    <option value="ft">ft</option>
                    <option value="yd">yd</option>
                </select>
            </div>
        </div>
        @endforeach

        <div>
            <label class="block text-gray-700 font-semibold mb-1">Output Unit</label>
            <select id="outputUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                <option value="mm3">Cubic Millimeters (mm³)</option>
                <option value="cm3">Cubic Centimeters (cm³)</option>
                <option value="km3">Cubic Kilometers (km³)</option>
                <option value="m3" selected>Cubic Meters (m³)</option>
                <option value="ft3">Cubic Feet (ft³)</option>
                <option value="in3">Cubic Inches (in³)</option>
                <option value="yd3">Cubic Yards (yd³)</option>
                <option value="l">Liters (L)</option>
            </select>
        </div>
    </form>

    <div class="mt-8 text-center">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Calculated Volume</h2>
        <div id="output" class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold">--</div>
    </div>
</div>

<script>
    const unitToMeter = {
        mm: 0.001,
        cm: 0.01,
        m: 1,
        km: 1000,
        ft: 0.3048,
        in: 0.0254,
        yd: 0.9144
    };

    const m3ToOutput = {
        m3: 1,
        ft3: 35.3147,
        in3: 61023.7,
        yd3: 1.30795,
        l: 1000,
        mm3: 1e9,
        cm3: 1e6,
        km3: 1e-9
    };

    const inputs = {
        length: {
            el: document.getElementById('length'),
            unitEl: document.getElementById('lengthUnit'),
            originalValue: null,
            originalUnit: 'm'
        },
        width: {
            el: document.getElementById('width'),
            unitEl: document.getElementById('widthUnit'),
            originalValue: null,
            originalUnit: 'm'
        },
        height: {
            el: document.getElementById('height'),
            unitEl: document.getElementById('heightUnit'),
            originalValue: null,
            originalUnit: 'm'
        }
    };

    const outputUnit = document.getElementById('outputUnit');
    const output = document.getElementById('output');

    function convertUnit(value, from, to) {
        return (value * unitToMeter[from]) / unitToMeter[to];
    }

    function formatNumber(num) {
        // Show up to 3 decimals, but remove trailing zeros and dot if not needed
        let str = num.toFixed(3);
        str = str.replace(/\.?0+$/, '');
        return str;
    }

    function calculateVolume() {
        let valid = true;
        let volumeInM3 = 1;

        for (const key in inputs) {
            const input = inputs[key];
            const value = parseFloat(input.el.value);
            if (!isNaN(value)) {
                input.originalValue = value;
                input.originalUnit = input.unitEl.value;
                const valueInM = value * unitToMeter[input.unitEl.value];
                volumeInM3 *= valueInM;
            } else {
                valid = false;
            }
        }

        if (valid) {
            const result = volumeInM3 * m3ToOutput[outputUnit.value];
            output.textContent = formatNumber(result) + " " + outputUnit.value;
        } else {
            output.textContent = "--";
        }
    }

    function attachEvents() {
        for (const key in inputs) {
            const input = inputs[key];

            input.el.addEventListener('input', () => {
                const val = parseFloat(input.el.value);
                if (!isNaN(val)) {
                    input.originalValue = val;
                    input.originalUnit = input.unitEl.value;
                }
                calculateVolume();
            });

            input.unitEl.addEventListener('change', () => {
                if (input.originalValue !== null && input.originalUnit !== input.unitEl.value) {
                    const converted = convertUnit(input.originalValue, input.originalUnit, input.unitEl.value);
                    // Always format to 3 decimals, even for mm and cm
                    input.el.value = formatNumber(converted);
                    input.originalValue = parseFloat(input.el.value); // update to new value
                    input.originalUnit = input.unitEl.value;
                }
                calculateVolume();
            });
        }

        outputUnit.addEventListener('input', calculateVolume);
    }

    window.addEventListener('DOMContentLoaded', () => {
        attachEvents();
        calculateVolume();
    });
</script>

</body>
</html>
