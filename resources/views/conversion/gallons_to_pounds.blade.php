<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallons to Pounds Converter (Full)</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 flex items-center justify-center">
  <div class="w-full max-w-lg bg-white/90 p-8 rounded-2xl shadow-2xl space-y-6">
    <h1 class="text-2xl font-extrabold text-center text-blue-700">Gallons to Pounds Converter</h1>

    <div>
      <label class="block text-gray-700 font-semibold mb-1">Substance</label>
      <select id="substance" class="w-full p-3 border-2 rounded-lg border-blue-200">
        <option value="">Select</option>
        <option value="Water">Water</option>
        <option value="Milk">Milk</option>
        <option value="Cooking oil">Cooking oil</option>
        <option value="Diesel">Diesel</option>
        <option value="Gasoline">Gasoline</option>
        <option value="Honey">Honey</option>
        <option value="Mercury">Mercury</option>
        <option value="Custom">Custom</option>
      </select>
    </div>

    <div id="customDensityField" class="hidden">
      <label class="block text-gray-700 font-semibold mb-1">Custom Density (lb/US gal)</label>
      <input type="number" step="0.01" id="customDensity" class="w-full p-3 border-2 rounded-lg border-blue-200" placeholder="e.g. 8.5">
    </div>

    <div>
      <label class="block text-gray-700 font-semibold mb-1">Volume (US gallons)</label>
      <input type="number" step="0.01" id="gallons" class="w-full p-3 border-2 rounded-lg border-blue-200" placeholder="e.g. 10">
    </div>

    <div>
      <label class="block text-gray-700 font-semibold mb-1">Result (lb)</label>
      <input type="text" id="pounds" readonly class="w-full p-3 bg-gray-100 rounded-lg text-blue-800 font-semibold">
    </div>
  </div>

  <script>
    const densities = {
      "Water": 8.34,
      "Milk": 8.6,
      "Cooking oil": 7.68,
      "Diesel": 7.14,
      "Gasoline": 6.07,
      "Honey": 11.42,
      "Mercury": 112.0
    };

    const substanceEl = document.getElementById('substance');
    const customDensityField = document.getElementById('customDensityField');
    const customDensityEl = document.getElementById('customDensity');
    const gallonsEl = document.getElementById('gallons');
    const poundsEl = document.getElementById('pounds');

    function convert() {
      const gal = parseFloat(gallonsEl.value);
      let density = densities[substanceEl.value] || parseFloat(customDensityEl.value);
      if (isNaN(gal) || isNaN(density)) {
        poundsEl.value = '--';
      } else {
        poundsEl.value = (gal * density).toFixed(3).replace(/\.?0+$/, '') + ' lb';
      }
    }

    substanceEl.addEventListener('change', () => {
      if (substanceEl.value === 'Custom') {
        customDensityField.classList.remove('hidden');
      } else {
        customDensityField.classList.add('hidden');
        customDensityEl.value = '';
      }
      convert();
    });

    [customDensityEl, gallonsEl].forEach(el =>
      el.addEventListener('input', convert)
    );

    window.addEventListener('DOMContentLoaded', () => {
      convert();
    });
  </script>
</body>
</html>
