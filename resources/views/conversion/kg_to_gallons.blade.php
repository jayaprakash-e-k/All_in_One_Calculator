<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kg to Gallons Converter (Advanced)</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 flex items-center justify-center">
  <div class="w-full max-w-xl p-8 bg-white rounded-2xl shadow-2xl">
    <h1 class="text-2xl font-extrabold text-center text-blue-700 mb-6">Kg to Gallons Converter (Advanced)</h1>

    <div class="space-y-6">
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Select Category</label>
        <select id="category" class="w-full p-3 border-2 border-blue-200 rounded-lg">
          <option selected disabled>Select category</option>
          <option>Liquids</option>
          <option>Dairy</option>
          <option>Oils</option>
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

      <div>
        <label class="block font-semibold text-gray-700 mb-1">Item</label>
        <select id="item" class="w-full p-3 border-2 border-blue-200 rounded-lg" disabled>
          <option>Select a category</option>
        </select>
      </div>

      <div>
        <label class="block font-semibold text-gray-700 mb-1">Weight (kg)</label>
        <input type="number" id="kg" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="100">
      </div>

      <div class="text-center mt-6">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Volume (US Gallons)</h2>
        <div id="output" class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl text-2xl font-mono font-semibold text-blue-800">--</div>
      </div>
    </div>
  </div>

  <script>
    const densities = {
      "Liquids": { "Water": 1.0, "Grape soda": 1.03, "Juice": 1.04 },
      "Dairy": { "Milk": 1.03, "Cream": 0.97, "Yogurt": 1.05 },
      "Oils": { "Olive oil": 0.91, "Vegetable oil": 0.92, "Coconut oil": 0.925 },
      "Fruits & vegetables": { "Tomato puree": 1.05, "Apple sauce": 1.1, "Pumpkin puree": 1.05 },
      "Flour": { "All-purpose flour": 0.55, "Whole-wheat flour": 0.59 },
      "Sweeteners": { "Honey": 1.42, "Maple syrup": 1.37, "Molasses": 1.45 },
      "Cereals": { "Rice": 0.85, "Oats": 0.39 },
      "Nuts": { "Peanut butter": 1.09, "Almond butter": 0.96 },
      "Sauces and condiments": { "Ketchup": 1.17, "Mayonnaise": 0.94, "Soy sauce": 1.24 },
      "Herbs and spices": { "Olive paste": 1.1, "Mustard": 1.02 },
      "Others": { "Sugar": 0.85, "Salt": 1.2 }
    };

    const catEl = document.getElementById('category'),
          itemEl = document.getElementById('item'),
          kgEl = document.getElementById('kg'),
          outEl = document.getElementById('output');

    function format(num) { return num.toFixed(3).replace(/\.?0+$/, ''); }

    function convert() {
      const cat = catEl.value, item = itemEl.value, kg = parseFloat(kgEl.value);
      if (densities[cat]?.[item] && !isNaN(kg)) {
        const L = kg / densities[cat][item];
        const gal = L * 0.264172;
        outEl.textContent = format(gal) + ' gal';
      } else outEl.textContent='--';
    }

    catEl.addEventListener('change', () => {
      const opts = densities[catEl.value];
      itemEl.innerHTML = '<option selected disabled>Select item</option>';
      Object.keys(opts).forEach(i => itemEl.insertAdjacentHTML('beforeend', `<option>${i}</option>`));
      itemEl.disabled = false;
      convert();
    });

    itemEl.addEventListener('change', convert);
    kgEl.addEventListener('input', convert);

    window.addEventListener('DOMContentLoaded', () => {
      convert();
    });
  </script>
</body>
</html>
