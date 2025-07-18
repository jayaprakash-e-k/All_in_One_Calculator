<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Medication Dosage Converter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 flex items-center justify-center">
  <div class="max-w-xl w-full bg-white p-8 rounded-2xl shadow-2xl">
    <h1 class="text-2xl font-extrabold text-blue-700 text-center mb-6">mg ↔ mL Dosage Converter</h1>

    <div class="space-y-5">
      <div>
        <label class="block font-semibold mb-1 text-gray-700">Conversion for</label>
        <select id="type" class="w-full p-3 border-2 border-blue-200 rounded-lg">
          <option selected disabled>Select</option>
          <option>Water</option>
          <option>Milk</option>
          <option>Cooking oil</option>
          <option>Medications</option>
          <option>Other</option>
        </select>
      </div>

      <div id="medicationField" class="hidden">
        <label class="block font-semibold mb-1 text-gray-700">Medications available</label>
        <select id="medication" class="w-full p-3 border-2 border-blue-200 rounded-lg">
          <option selected disabled>Select</option>
          <option value="10">Acetaminophen (Tylenol) 10 mg/mL</option>
          <option value="80">Amoxicillin suspension 400 mg/5 mL</option>
          <option value="4">Benadryl (Oral, 12.5 mg/5 mL)</option>
          <option value="50">Benadryl (Injection, 50 mg/mL)</option>
          <option value="1">Cetirizine HCL 1 mg/mL</option>
          <option value="20">Ibuprofen (Oral liquid, 100 mg/5 mL)</option>
          <option value="5">Ibuprofen (Injection, 10 mg/2 mL)</option>
          <option value="100">Morphine sulfate 100 mg/mL</option>
          <option value="200">Testosterone 200 mg/mL</option>
          <option value="custom">Custom</option>
        </select>
      </div>

      <div id="customField" class="hidden">
        <label class="block font-semibold mb-1 text-gray-700">Custom concentration (mg/mL)</label>
        <input type="number" id="customConc" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 75">
      </div>

      <div id="otherField" class="hidden">
        <label class="block font-semibold mb-1 text-gray-700">Enter Density (mg/mL)</label>
        <input type="number" id="otherConc" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 1.2">
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block font-semibold mb-1 text-gray-700">Medication dosage</label>
          <div class="flex gap-2">
            <input type="number" id="mg" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 100">
            <span class="p-3">mg</span>
          </div>
        </div>
        <div>
          <label class="block font-semibold mb-1 text-gray-700">Liquid dosage</label>
          <div class="flex gap-2">
            <input type="number" id="ml" class="w-full p-3 border-2 border-blue-200 rounded-lg" placeholder="e.g. 5">
            <span class="p-3">mL</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const typeEl = document.getElementById('type');
    const medEl = document.getElementById('medication');
    const medField = document.getElementById('medicationField');
    const customField = document.getElementById('customField');
    const otherField = document.getElementById('otherField');
    const customConc = document.getElementById('customConc');
    const otherConc = document.getElementById('otherConc');
    const mgInput = document.getElementById('mg');
    const mlInput = document.getElementById('ml');

    let concentration = 1;

    function updateConcentration() {
      const type = typeEl.value;

      medField.classList.add('hidden');
      customField.classList.add('hidden');
      otherField.classList.add('hidden');

      if (type === 'Medications') {
        medField.classList.remove('hidden');
        const medVal = medEl.value;
        if (medVal === 'custom') {
          customField.classList.remove('hidden');
          concentration = parseFloat(customConc.value) || 1;
        } else {
          concentration = parseFloat(medVal) || 1;
        }
      } else if (type === 'Other') {
        otherField.classList.remove('hidden');
        concentration = parseFloat(otherConc.value) || 1;
      } else {
        const defaultConc = {
          'Water': 1.0,
          'Milk': 1.03,
          'Cooking oil': 0.92
        };
        concentration = defaultConc[type] || 1;
      }
    }

    typeEl.addEventListener('change', () => {
      updateConcentration();
      convertFromMG();
    });

    medEl.addEventListener('change', () => {
      updateConcentration();
      convertFromMG();
    });

    customConc.addEventListener('input', () => {
      updateConcentration();
      convertFromMG();
    });

    otherConc.addEventListener('input', () => {
      updateConcentration();
      convertFromMG();
    });

    function convertFromMG() {
      const mg = parseFloat(mgInput.value);
      if (!isNaN(mg)) {
        mlInput.value = (mg / concentration).toFixed(3).replace(/\.?0+$/, '');
      }
    }

    function convertFromML() {
      const ml = parseFloat(mlInput.value);
      if (!isNaN(ml)) {
        mgInput.value = (ml * concentration).toFixed(3).replace(/\.?0+$/, '');
      }
    }

    mgInput.addEventListener('input', convertFromMG);
    mlInput.addEventListener('input', convertFromML);

    window.addEventListener('DOMContentLoaded', () => {
      updateConcentration();
      convertFromMG();
    });
  </script>
</body>
</html>
