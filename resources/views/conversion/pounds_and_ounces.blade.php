<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pounds and Ounces Converter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 flex items-center justify-center">
  <div class="w-full max-w-xl bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur">
    <h1 class="text-2xl font-extrabold text-center text-blue-700 mb-6">Pounds and Ounces Converter</h1>

    <div class="space-y-5">
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-gray-700 font-semibold mb-1">Pounds (lb)</label>
          <input type="number" id="pounds" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 10">
        </div>
        <div>
          <label class="block text-gray-700 font-semibold mb-1">Ounces (oz)</label>
          <input type="number" id="ounces" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 16">
        </div>
      </div>

      <div>
        <label class="block text-gray-700 font-semibold mb-1">Pounds and Ounces Combined</label>
        <input type="text" id="combinedOutput" readonly class="w-full p-3 bg-gray-100 rounded-lg text-blue-800 font-bold">
      </div>

      <div>
        <label class="block text-gray-700 font-semibold mb-1">Metric Equivalents</label>
        <div class="flex gap-2">
          <input type="text" id="metricOutput" readonly class="w-3/4 p-3 bg-gray-100 rounded-lg text-blue-800 font-bold">
          <select id="metricUnit" class="w-1/4 p-3 border-2 border-blue-200 rounded-lg">
            <option value="mcg">micrograms (µg)</option>
            <option value="mg">milligrams (mg)</option>
            <option value="g" selected>grams (g)</option>
            <option value="dag">decagrams (dag)</option>
            <option value="kg">kilograms (kg)</option>
            <option value="t">metric tons (t)</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <script>
    const poundsEl = document.getElementById('pounds');
    const ouncesEl = document.getElementById('ounces');
    const combinedOutput = document.getElementById('combinedOutput');
    const metricOutput = document.getElementById('metricOutput');
    const metricUnitEl = document.getElementById('metricUnit');

    const gramsPerUnit = {
      mcg: 1e6,
      mg: 1000,
      g: 1,
      dag: 0.1,
      kg: 0.001,
      t: 1e-6
    };

    function convert() {
      const pounds = parseFloat(poundsEl.value) || 0;
      const ounces = parseFloat(ouncesEl.value) || 0;

      const totalOunces = pounds * 16 + ounces;
      const totalGrams = totalOunces * 28.3495;
      const selectedUnit = metricUnitEl.value;
      const result = totalGrams * gramsPerUnit[selectedUnit];

      combinedOutput.value = `${pounds} lb ${ounces} oz`;
      metricOutput.value = Number(result).toFixed(3).replace(/\.?0+$/, '');
    }

    poundsEl.addEventListener('input', convert);
    ouncesEl.addEventListener('input', convert);
    metricUnitEl.addEventListener('change', convert);

    window.addEventListener('DOMContentLoaded', convert);
  </script>
</body>
</html>
