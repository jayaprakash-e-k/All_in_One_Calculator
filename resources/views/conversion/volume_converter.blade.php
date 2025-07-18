<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Volume Converter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">

<div class="w-full max-w-lg mx-auto bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur-md">
  <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-6 tracking-tight drop-shadow">Volume Converter</h1>

  <form class="space-y-6">
    <div>
      <label class="block text-gray-700 font-semibold mb-1">Enter Volume</label>
      <input type="number" id="inputValue" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="Enter value">
    </div>

    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block text-gray-700 font-semibold mb-1">From Unit</label>
        <select id="fromUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
          <option value="ml">Milliliters</option>
          <option value="l">Liters</option>
          <option value="m3">Cubic Meters</option>
          <option value="cm3">Cubic Centimeters</option>
          <option value="in3">Cubic Inches</option>
          <option value="ft3">Cubic Feet</option>
          <option value="yd3">Cubic Yards</option>
          <option value="gal">Gallons (US)</option>
          <option value="qt">Quarts (US)</option>
          <option value="pt">Pints (US)</option>
          <option value="oz">Fluid Ounces (US)</option>
        </select>
      </div>
      <div>
        <label class="block text-gray-700 font-semibold mb-1">To Unit</label>
        <select id="toUnit" class="w-full p-3 border-2 border-blue-200 rounded-lg">
          <option value="ml">Milliliters</option>
          <option value="l">Liters</option>
          <option value="m3">Cubic Meters</option>
          <option value="cm3">Cubic Centimeters</option>
          <option value="in3">Cubic Inches</option>
          <option value="ft3">Cubic Feet</option>
          <option value="yd3">Cubic Yards</option>
          <option value="gal">Gallons (US)</option>
          <option value="qt">Quarts (US)</option>
          <option value="pt">Pints (US)</option>
          <option value="oz">Fluid Ounces (US)</option>
        </select>
      </div>
    </div>
  </form>

  <div class="mt-8 text-center">
    <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Volume</h2>
    <div id="output" class="inline-block bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 px-6 py-3 rounded-xl shadow font-mono text-2xl text-blue-800 font-semibold">--</div>
  </div>
</div>

<script>
  const inputValue = document.getElementById('inputValue');
  const fromUnit = document.getElementById('fromUnit');
  const toUnit = document.getElementById('toUnit');
  const output = document.getElementById('output');

  const toLiter = {
    ml: 0.001,
    l: 1,
    m3: 1000,
    cm3: 0.001,
    in3: 0.0163871,
    ft3: 28.3168,
    yd3: 764.555,
    gal: 3.78541,
    qt: 0.946353,
    pt: 0.473176,
    oz: 0.0295735
  };

  function formatNumber(num) {
    return num.toFixed(3).replace(/\.?0+$/, '');
  }

  function convert() {
    const value = parseFloat(inputValue.value);
    const from = fromUnit.value;
    const to = toUnit.value;

    if (!isNaN(value)) {
      const inLiters = value * toLiter[from];
      const converted = inLiters / toLiter[to];
      output.textContent = formatNumber(converted) + ' ' + to;
    } else {
      output.textContent = '--';
    }
  }

  inputValue.addEventListener('input', convert);
  fromUnit.addEventListener('change', convert);
  toUnit.addEventListener('change', convert);
  window.addEventListener('DOMContentLoaded', convert);
</script>

</body>
</html>
