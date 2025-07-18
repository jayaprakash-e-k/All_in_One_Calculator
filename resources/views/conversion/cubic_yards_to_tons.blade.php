<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cubic Yards to Tons Converter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-2xl bg-white/90 p-8 rounded-2xl shadow-2xl backdrop-blur">
    <h1 class="text-2xl font-extrabold text-center text-blue-700 mb-6">Cubic Yards to Tons Converter</h1>

    <div class="space-y-6">
      <div>
        <label class="block font-semibold mb-1 text-gray-700">Type of substance</label>
        <div class="flex flex-wrap gap-4">
          @foreach(['Food', 'Metals', 'Non-metals', 'Gases', 'Liquids'] as $type)
          <label class="flex items-center space-x-2">
            <input type="radio" name="type" value="{{ $type }}" class="form-radio" {{ $type === 'Non-metals' ? 'checked' : '' }}>
            <span>{{ $type }}</span>
          </label>
          @endforeach
        </div>
      </div>

      <div>
        <label class="block font-semibold mb-1 text-gray-700"><span id="subLabel">Non‑metals</span> substance</label>
        <select id="substance" class="w-full p-3 border-2 border-blue-200 rounded-lg">
          <option value="">Select</option>
        </select>
      </div>

      <div>
        <label class="block font-semibold mb-1 text-gray-700">Density (kg/m³)</label>
        <input type="number" id="density" step="1" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="kg/m³">
      </div>

      <div>
        <label class="block font-semibold mb-1 text-gray-700">Volume (cubic yards)</label>
        <input type="number" id="volume" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 10">
      </div>

      <div>
        <label class="block font-semibold mb-1 text-gray-700">Mass (metric tons)</label>
        <input type="text" id="mass" readonly class="w-full p-3 bg-gray-100 rounded-lg text-blue-800 font-semibold">
      </div>
    </div>
  </div>

  <script>
    const densities = {
      "Food": {
        "Rice": 850,
        "Flour": 593,
        "Sugar": 845,
        "Salt": 1200,
        "Honey": 1420,
        "Jam": 1340,
        "Nutella": 1270,
        "Maple syrup": 1330,
        "Oats": 380,
        "Peanut butter": 1100,
        "Butter": 911,
        "Custom": null
      },
      "Metals": {
        "Iron": 7870,
        "Aluminum": 2700,
        "Copper": 8960,
        "Lead": 11340,
        "Steel": 7850,
        "Gold": 19300,
        "Silver": 10490,
        "Custom": null
      },
      "Non-metals": {
        "Concrete": 2400,
        "Cork": 240,
        "Diamond": 3515,
        "Ice": 917,
        "Nylon": 1150,
        "Oak": 700,
        "Pine": 500,
        "Plastic": 1050,
        "Styrofoam": 75,
        "Wood (typical)": 600,
        "Clay": 1600,
        "Sand": 1602,
        "Asphalt": 2300,
        "Custom": null
      },
      "Gases": {
        "Air": 1.225,
        "Carbon dioxide": 1.98,
        "Hydrogen": 0.0899,
        "Oxygen": 1.331,
        "Nitrogen": 1.251,
        "Custom": null
      },
      "Liquids": {
        "Water": 1000,
        "Milk": 1030,
        "Oil": 920,
        "Gasoline": 740,
        "Mercury": 13546,
        "Alcohol": 789,
        "Honey": 1420,
        "Custom": null
      }
    };

    const typeRadios = document.getElementsByName('type');
    const substanceSelect = document.getElementById('substance');
    const subLabel = document.getElementById('subLabel');
    const densityInput = document.getElementById('density');
    const volumeInput = document.getElementById('volume');
    const massOutput = document.getElementById('mass');

    function populateSubstances(type) {
      subLabel.textContent = `${type}`;
      substanceSelect.innerHTML = '<option value="">Select</option>';
      Object.keys(densities[type]).forEach(item => {
        substanceSelect.innerHTML += `<option value="${item}">${item}</option>`;
      });
    }

    function convert() {
      const vol = parseFloat(volumeInput.value);
      const den = parseFloat(densityInput.value);
      if (!isNaN(vol) && !isNaN(den)) {
        const m3 = vol * 0.764555;
        const kg = m3 * den;
        const t = kg / 1000;
        massOutput.value = t.toFixed(3).replace(/\.?0+$/, '');
      } else {
        massOutput.value = "--";
      }
    }

    typeRadios.forEach(radio => {
      radio.addEventListener('change', () => {
        populateSubstances(radio.value);
        densityInput.value = "";
        massOutput.value = "";
      });
    });

    substanceSelect.addEventListener('change', () => {
      const type = [...typeRadios].find(r => r.checked).value;
      const sub = substanceSelect.value;
      const val = densities[type][sub];
      densityInput.value = val !== null ? val : "";
      convert();
    });

    densityInput.addEventListener('input', convert);
    volumeInput.addEventListener('input', convert);

    window.addEventListener('DOMContentLoaded', () => {
      populateSubstances("Non-metals");
    });
  </script>
</body>
</html>
