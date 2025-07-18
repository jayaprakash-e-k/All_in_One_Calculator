<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quarts to Pounds Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-xl bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur space-y-6">
        <h1 class="text-2xl font-extrabold text-blue-700 text-center">Quarts to Pounds Converter</h1>

        <div>
            <label class="block font-semibold mb-1 text-gray-700">Ingredient</label>
            <select id="ingredient" class="w-full p-3 border-2 border-blue-200 rounded-lg">
                <option value="">Select</option>
                <option value="Water">Water</option>
                <option value="Milk">Milk</option>
                <option value="Flour">Flour</option>
                <option value="Sugar">Sugar</option>
                <option value="Salt">Salt</option>
                <option value="Honey">Honey</option>
                <option value="Butter">Butter</option>
                <option value="Oil">Oil</option>
                <option value="Nuts and seeds">Nuts and seeds</option>
                <option value="Cacao">Cacao</option>
                <option value="Rice (raw)">Rice (raw)</option>
                <option value="Oats">Oats</option>
                <option value="Jam">Jam</option>
                <option value="Nutella">Nutella</option>
                <option value="Maple syrup">Maple syrup</option>
                <option value="Cream 30% fat">Cream 30% fat</option>
                <option value="Cream 13% fat">Cream 13% fat</option>
                <option value="Custom">Custom ingredient</option>
            </select>
        </div>

        <div id="customDensityContainer" class="hidden">
            <label class="block font-semibold mb-1 text-gray-700">Density (g/mL)</label>
            <input type="number" id="customDensity" step="0.001" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 1.15">
        </div>

        <div>
            <label class="block font-semibold mb-1 text-gray-700">Quarts</label>
            <input type="number" id="quarts" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 2">
        </div>

        <div>
            <label class="block font-semibold mb-1 text-gray-700">Pounds</label>
            <input type="text" id="pounds" readonly class="w-full p-3 bg-gray-100 rounded-lg text-blue-800 font-semibold">
        </div>
    </div>

    <script>
        const ingredientSelect = document.getElementById('ingredient');
        const customDensityInput = document.getElementById('customDensity');
        const customDensityContainer = document.getElementById('customDensityContainer');
        const quartsInput = document.getElementById('quarts');
        const poundsOutput = document.getElementById('pounds');

        const densities = {
            "Water": 1.00,
            "Milk": 1.03,
            "Flour": 0.593,
            "Sugar": 0.845,
            "Salt": 1.20,
            "Honey": 1.42,
            "Butter": 0.911,
            "Oil": 0.92,
            "Nuts and seeds": 0.60,
            "Cacao": 0.55,
            "Rice (raw)": 0.85,
            "Oats": 0.38,
            "Jam": 1.34,
            "Nutella": 1.27,
            "Maple syrup": 1.33,
            "Cream 30% fat": 0.994,
            "Cream 13% fat": 1.012
        };

        function convert() {
            const quarts = parseFloat(quartsInput.value);
            const ingredient = ingredientSelect.value;
            let density = densities[ingredient];

            if (ingredient === "Custom") {
                density = parseFloat(customDensityInput.value);
            }

            if (!isNaN(quarts) && !isNaN(density)) {
                const ml = quarts * 946.353;
                const grams = ml * density;
                const pounds = grams / 453.592;
                poundsOutput.value = Number(pounds).toFixed(3).replace(/\.?0+$/, '');
            } else {
                poundsOutput.value = "--";
            }
        }

        ingredientSelect.addEventListener('change', () => {
            if (ingredientSelect.value === "Custom") {
                customDensityContainer.classList.remove('hidden');
            } else {
                customDensityContainer.classList.add('hidden');
            }
            convert();
        });

        customDensityInput.addEventListener('input', convert);
        quartsInput.addEventListener('input', convert);
        window.addEventListener('DOMContentLoaded', convert);
    </script>
</body>
</html>
