<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cubic Feet Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">

<div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
    <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Cubic Feet Calculator</h1>

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
                    <option value="m">m</option>
                    <option value="km">km</option>
                    <option value="in">in</option>
                    <option value="ft" selected>ft</option>
                    <option value="yd">yd</option>
                </select>
            </div>
        </div>
        @endforeach
    </form>

    <div class="mt-8 text-center">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Volume in Cubic Feet</h2>
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

    const output = document.getElementById('output');
    const M3_TO_FT3 = 35.3147;

    function convertUnit(value, from, to) {
        return (value * unitToMeter[from]) / unitToMeter[to];
    }

    function formatNumber(num) {
        let str = num.toFixed(3);
        return str.replace(/\.?0+$/, '');
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
            const result = volumeInM3 * M3_TO_FT3;
            output.textContent = formatNumber(result) + " ft³";
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
                    input.el.value = formatNumber(converted);
                    input.originalValue = parseFloat(input.el.value);
                    input.originalUnit = input.unitEl.value;
                }
                calculateVolume();
            });
        }
    }

    window.addEventListener('DOMContentLoaded', () => {
        attachEvents();
        calculateVolume();
    });
</script>

</body>
</html>
