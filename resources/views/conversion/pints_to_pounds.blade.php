<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pint to Pound Converter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 flex items-center justify-center">
  <div class="w-full max-w-xl bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur">
    <h1 class="text-2xl font-extrabold text-center text-blue-700 mb-6">Pints to Pounds Converter</h1>

    <div class="space-y-6">
      <!-- Category -->
      <div>
        <label class="block font-semibold text-gray-700 mb-1">What do you want to convert?</label>
        <select id="category" class="w-full p-3 border-2 border-blue-200 rounded-lg">
          <option selected disabled>Select</option>
          <option>Liquids</option>
          <option>Dairy</option>
          <option>Oils and spreads</option>
          <option>Fruits & vegetables</option>
          <option>Flour</option>
          <option>Sweeteners</option>
          <option>Cereals</option>
          <option>Nuts</option>
          <option>Sauces and condiments</option>
          <option>Herbs and spices</option>
          <option>Others</option>
        </select>
      </div>

      <!-- Item -->
      <div id="itemField" class="hidden">
        <label class="block font-semibold text-gray-700 mb-1">Select Item</label>
        <select id="item" class="w-full p-3 border-2 border-blue-200 rounded-lg">
          <option selected disabled>Select an item</option>
        </select>
      </div>

      <!-- Manual Density -->
      <div id="densityField" class="hidden">
        <label class="block font-semibold text-gray-700 mb-1">Enter Density</label>
        <div class="flex gap-2">
          <input type="number" id="manualDensity" class="w-3/4 p-3 border-2 border-blue-200 rounded-lg" placeholder="Density">
          <select id="densityUnit" class="w-1/4 p-3 border-2 border-blue-200 rounded-lg">
            <option value="g_cm3">g/cm³</option>
            <option value="g_ml">g/mL</option>
            <option value="kg_m3">kg/m³</option>
            <option value="kg_l">kg/L</option>
            <option value="oz_in3">oz/cu in</option>
            <option value="lb_ft3">lb/cu ft</option>
            <option value="lb_gal">lb/US gal</option>
          </select>
        </div>
      </div>

      <!-- Inputs -->
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block font-semibold text-gray-700 mb-1">Pints</label>
          <input type="number" id="pintInput" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 1">
        </div>
        <div>
          <label class="block font-semibold text-gray-700 mb-1">Pounds</label>
          <input type="text" id="poundOutput" readonly class="w-full p-3 border-2 bg-gray-100 rounded-lg text-blue-800 font-bold">
        </div>
      </div>
    </div>
  </div>

  <script>
    const categoryEl = document.getElementById('category');
    const itemEl = document.getElementById('item');
    const itemField = document.getElementById('itemField');
    const densityField = document.getElementById('densityField');
    const manualDensityEl = document.getElementById('manualDensity');
    const densityUnitEl = document.getElementById('densityUnit');
    const pintInput = document.getElementById('pintInput');
    const poundOutput = document.getElementById('poundOutput');

    const densityUnitsToGPerMl = {
      'g_cm3': 1,
      'g_ml': 1,
      'kg_m3': 0.001,
      'kg_l': 1,
      'oz_in3': 1.80469,
      'lb_ft3': 0.0160185,
      'lb_gal': 0.119826
    };

    const densities = {
      "Liquids": {
        "Water": 1,
        "Grape soda": 1.03,
        "Lemonade": 1.05
      },
      "Dairy": {
        "Whole milk": 1.03,
        "Heavy cream": 1.01,
        "Yogurt": 1.04
      },
      "Oils and spreads": {
        "Olive oil": 0.91,
        "Butter (melted)": 0.87,
        "Coconut oil": 0.92
      },
      "Fruits & vegetables": {
        "Apple puree": 1.05,
        "Carrot juice": 1.03
      },
      "Flour": {
        "All-purpose flour": 0.53
      },
      "Sweeteners": {
        "Honey": 1.42,
        "Corn syrup": 1.36
      },
      "Cereals": {
        "Oats": 0.38
      },
      "Nuts": {
        "Peanut butter": 1.1
      },
      "Sauces and condiments": {
        "Ketchup": 1.25,
        "Mayonnaise": 0.94
      },
      "Herbs and spices": {
        "Ground cinnamon": 0.56
      }
    };

    function populateItems(category) {
      itemEl.innerHTML = `<option disabled selected>Select an item</option>`;
      const items = densities[category];
      if (items) {
        for (const key in items) {
          itemEl.innerHTML += `<option value="${items[key]}">${key}</option>`;
        }
      }
    }

    function convert() {
      let density = 1;
      const pints = parseFloat(pintInput.value);
      if (isNaN(pints)) {
        poundOutput.value = "";
        return;
      }

      const category = categoryEl.value;

      if (category === 'Others') {
        const unit = densityUnitEl.value;
        const rawDensity = parseFloat(manualDensityEl.value);
        if (isNaN(rawDensity)) return;
        density = rawDensity * (densityUnitsToGPerMl[unit] || 1);
      } else {
        const selectedDensity = parseFloat(itemEl.value);
        if (!isNaN(selectedDensity)) {
          density = selectedDensity;
        }
      }

      const pintToMl = 473.176;
      const grams = pints * pintToMl * density;
      const pounds = grams / 453.592;
      poundOutput.value = pounds.toFixed(3).replace(/\.?0+$/, '');
    }

    categoryEl.addEventListener('change', () => {
      const selected = categoryEl.value;
      itemField.classList.add('hidden');
      densityField.classList.add('hidden');

      if (selected === 'Others') {
        densityField.classList.remove('hidden');
      } else {
        populateItems(selected);
        itemField.classList.remove('hidden');
      }
      convert();
    });

    itemEl.addEventListener('change', convert);
    pintInput.addEventListener('input', convert);
    manualDensityEl.addEventListener('input', convert);
    densityUnitEl.addEventListener('change', convert);
  </script>
</body>
</html>
