<x-tool-page-layout
    title="Pints to Pounds Converter - ConvertPro"
    description="Professional pints to pounds converter using substance density. Convert volume to weight for various materials and substances."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Density-Based Volume to Weight Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Conversion Direction -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Conversion Direction
                                        </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-yellow-300 transition-colors cursor-pointer">
                                                <input type="radio" name="direction" value="pints-to-pounds" class="text-yellow-600 focus:ring-yellow-500" checked>
                                                <span class="text-sm font-medium">Pints → Pounds</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-yellow-300 transition-colors cursor-pointer">
                                                <input type="radio" name="direction" value="pounds-to-pints" class="text-yellow-600 focus:ring-yellow-500">
                                                <span class="text-sm font-medium">Pounds → Pints</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Category Selection -->
                                    <div class="space-y-2">
                                        <label for="category" class="block text-sm font-semibold text-gray-700">
                                            Substance Category
                                        </label>
                                        <select 
                                            id="category" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option selected disabled>Select substance category</option>
                                            <option value="liquids">Liquids</option>
                                            <option value="dairy">Dairy Products</option>
                                            <option value="oils">Oils and Fats</option>
                                            <option value="fruits">Fruits & Vegetables</option>
                                            <option value="flour">Flour & Grains</option>
                                            <option value="sweeteners">Sweeteners</option>
                                            <option value="cereals">Cereals</option>
                                            <option value="nuts">Nuts & Seeds</option>
                                            <option value="sauces">Sauces & Condiments</option>
                                            <option value="spices">Herbs & Spices</option>
                                            <option value="custom">Custom Density</option>
                                        </select>
                                    </div>

                                    <!-- Item Selection -->
                                    <div id="itemField" class="space-y-2 hidden">
                                        <label for="item" class="block text-sm font-semibold text-gray-700">
                                            Select Specific Item
                                        </label>
                                        <select 
                                            id="item" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option selected disabled>Select an item</option>
                                        </select>
                                    </div>

                                    <!-- Custom Density Field -->
                                    <div id="densityField" class="space-y-2 hidden">
                                        <label for="manualDensity" class="block text-sm font-semibold text-gray-700">
                                            Custom Density
                                        </label>
                                        <div class="grid grid-cols-3 gap-2">
                                            <input 
                                                type="number" 
                                                id="manualDensity" 
                                                class="col-span-2 px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter density"
                                                step="any"
                                                min="0.001"
                                            >
                                            <select 
                                                id="densityUnit" 
                                                class="px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                            >
                                                <option value="g_cm3">g/cm³</option>
                                                <option value="g_ml">g/mL</option>
                                                <option value="kg_m3">kg/m³</option>
                                                <option value="kg_l">kg/L</option>
                                                <option value="oz_in3">oz/in³</option>
                                                <option value="lb_ft3">lb/ft³</option>
                                                <option value="lb_gal">lb/gal</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Current Density Display -->
                                    <div class="p-3 bg-yellow-50 rounded-lg border border-yellow-200">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-semibold text-yellow-800">Current Density:</span>
                                            <span class="text-lg font-bold text-yellow-700" id="densityDisplay">-- g/mL</span>
                                        </div>
                                    </div>

                                    <!-- Input Values -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="space-y-2">
                                            <label for="pintsInput" class="block text-sm font-semibold text-gray-700" id="volumeLabel">
                                                Volume (Pints)
                                            </label>
                                            <div class="relative">
                                                <input 
                                                    type="number" 
                                                    id="pintsInput" 
                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                    placeholder="Enter volume (e.g., 1)"
                                                    step="any"
                                                    min="0"
                                                >
                                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                    <span class="text-gray-500 text-sm font-medium" id="volumeUnit">pt</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <label for="poundsInput" class="block text-sm font-semibold text-gray-700" id="weightLabel">
                                                Weight (Pounds)
                                            </label>
                                            <div class="relative">
                                                <input 
                                                    type="number" 
                                                    id="poundsInput" 
                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                    placeholder="Enter weight (e.g., 1.04)"
                                                    step="any"
                                                    min="0"
                                                >
                                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                    <span class="text-gray-500 text-sm font-medium" id="weightUnit">lbs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-yellow-100 hover:bg-yellow-200 text-yellow-700 font-medium rounded-lg transition-colors duration-200"
                                        >
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            Clear All
                                        </button>
                                    </div>

                                </form>

                                <!-- Results Display -->
                                <div class="mt-8 space-y-4">
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-yellow-50 to-green-50 rounded-xl border-l-4 border-yellow-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Weight in Pounds</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Imperial weight measurement</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-yellow-600 font-mono" id="output">--</div>
                                                <div class="text-sm text-gray-500 font-medium" id="unit-display">lbs</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Weight/Volume Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Ounces</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="ouncesOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-yellow-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Kilograms</h4>
                                                <div class="text-lg font-bold text-green-600 font-mono" id="kgOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Grams</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="gramsOutput">--</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Volume Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Cups</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="cupsOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border-l-4 border-cyan-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Liters</h4>
                                                <div class="text-lg font-bold text-cyan-600 font-mono" id="litersOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border-l-4 border-yellow-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Milliliters</h4>
                                                <div class="text-lg font-bold text-yellow-600 font-mono" id="mlOutput">--</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Calculation Steps -->
                                    <div class="p-4 bg-gray-50 rounded-lg">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-2 text-center">Calculation Steps</h4>
                                        <div class="text-center text-sm text-gray-600 font-mono" id="calculationSteps">
                                            Select substance and enter values to see calculation steps
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Volume & Weight Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 pint = 473.176 mL</div>
                                        <div>• 1 pound = 453.592 grams</div>
                                        <div>• Water density = 1.0 g/mL</div>
                                        <div>• 1 pint water ≈ 1.04 pounds</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Pints to Pounds Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Density-Based Conversion</h4>
                                    <p>Converting pints (volume) to pounds (weight) requires knowing the substance's density. Different materials have different densities, so the same volume can have very different weights.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                                    <p>Essential for cooking, baking, brewing, chemistry, manufacturing, shipping calculations, and any application where you need to convert between volume and weight measurements.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-yellow-50 rounded-lg border border-yellow-200">
                                <p class="text-sm text-yellow-800">
                                    <strong>Density Note:</strong> Density values can vary with temperature and composition. Use appropriate values for your specific application!
                                </p>
                            </div>
                        </div>

                        <!-- Common Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Conversion Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Water</div>
                                    <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-category="liquids" data-item="1" data-pints="1">1 pint</div>
                                    <div class="text-xs text-gray-500 mt-1">≈ 1.04 lbs</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Milk</div>
                                    <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-category="dairy" data-item="1.03" data-pints="1">1 pint</div>
                                    <div class="text-xs text-gray-500 mt-1">≈ 1.07 lbs</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Honey</div>
                                    <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-category="sweeteners" data-item="1.42" data-pints="1">1 pint</div>
                                    <div class="text-xs text-gray-500 mt-1">≈ 1.48 lbs</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Olive Oil</div>
                                    <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-category="oils" data-item="0.91" data-pints="1">1 pint</div>
                                    <div class="text-xs text-gray-500 mt-1">≈ 0.95 lbs</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const categoryEl = document.getElementById('category');
                        const itemEl = document.getElementById('item');
                        const itemField = document.getElementById('itemField');
                        const densityField = document.getElementById('densityField');
                        const manualDensityEl = document.getElementById('manualDensity');
                        const densityUnitEl = document.getElementById('densityUnit');
                        const directionRadios = document.getElementsByName('direction');
                        const pintsInput = document.getElementById('pintsInput');
                        const poundsInput = document.getElementById('poundsInput');
                        const volumeLabel = document.getElementById('volumeLabel');
                        const weightLabel = document.getElementById('weightLabel');
                        const volumeUnit = document.getElementById('volumeUnit');
                        const weightUnit = document.getElementById('weightUnit');
                        const densityDisplay = document.getElementById('densityDisplay');
                        const clearButton = document.getElementById('clearButton');
                        const output = document.getElementById('output');
                        const unitDisplay = document.getElementById('unit-display');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const ouncesOutput = document.getElementById('ouncesOutput');
                        const kgOutput = document.getElementById('kgOutput');
                        const gramsOutput = document.getElementById('gramsOutput');
                        const cupsOutput = document.getElementById('cupsOutput');
                        const litersOutput = document.getElementById('litersOutput');
                        const mlOutput = document.getElementById('mlOutput');
                        const calculationSteps = document.getElementById('calculationSteps');

                        // Density conversion factors to g/mL
                        const densityUnitsToGPerMl = {
                            'g_cm3': 1,
                            'g_ml': 1,
                            'kg_m3': 0.001,
                            'kg_l': 1,
                            'oz_in3': 1.80469,
                            'lb_ft3': 0.0160185,
                            'lb_gal': 0.119826
                        };

                        // Substance densities (g/mL)
                        const densities = {
                            "liquids": {
                                "Water": 1,
                                "Grape soda": 1.03,
                                "Lemonade": 1.05,
                                "Beer": 1.01,
                                "Wine": 0.99
                            },
                            "dairy": {
                                "Whole milk": 1.03,
                                "Heavy cream": 1.01,
                                "Yogurt": 1.04,
                                "Buttermilk": 1.03,
                                "Ice cream": 0.56
                            },
                            "oils": {
                                "Olive oil": 0.91,
                                "Vegetable oil": 0.92,
                                "Coconut oil": 0.92,
                                "Butter (melted)": 0.87,
                                "Lard": 0.92
                            },
                            "fruits": {
                                "Apple puree": 1.05,
                                "Carrot juice": 1.03,
                                "Orange juice": 1.05,
                                "Tomato juice": 1.04
                            },
                            "flour": {
                                "All-purpose flour": 0.53,
                                "Whole wheat flour": 0.55,
                                "Bread flour": 0.54,
                                "Cake flour": 0.52
                            },
                            "sweeteners": {
                                "Honey": 1.42,
                                "Corn syrup": 1.36,
                                "Maple syrup": 1.37,
                                "Molasses": 1.4
                            },
                            "cereals": {
                                "Oats": 0.38,
                                "Rice": 0.75,
                                "Quinoa": 0.85,
                                "Barley": 0.68
                            },
                            "nuts": {
                                "Peanut butter": 1.1,
                                "Almond butter": 1.05,
                                "Tahini": 0.95
                            },
                            "sauces": {
                                "Ketchup": 1.25,
                                "Mayonnaise": 0.94,
                                "Soy sauce": 1.15,
                                "Hot sauce": 1.02
                            },
                            "spices": {
                                "Ground cinnamon": 0.56,
                                "Ground pepper": 0.35,
                                "Paprika": 0.45,
                                "Salt": 2.16
                            }
                        };

                        let currentDensity = 1;

                        function formatNumber(num) {
                            if (num >= 1000) {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 3 });
                            } else if (num >= 1) {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 4 });
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 6 });
                            }
                        }

                        function populateItems(category) {
                            itemEl.innerHTML = `<option disabled selected>Select an item</option>`;
                            const items = densities[category];
                            if (items) {
                                for (const [name, density] of Object.entries(items)) {
                                    itemEl.innerHTML += `<option value="${density}">${name}</option>`;
                                }
                            }
                        }

                        function updateDensity() {
                            const category = categoryEl.value;

                            // Hide all conditional fields
                            itemField.classList.add('hidden');
                            densityField.classList.add('hidden');

                            if (category === 'custom') {
                                densityField.classList.remove('hidden');
                                const unit = densityUnitEl.value;
                                const rawDensity = parseFloat(manualDensityEl.value);
                                if (!isNaN(rawDensity)) {
                                    currentDensity = rawDensity * (densityUnitsToGPerMl[unit] || 1);
                                }
                            } else if (category && category !== 'Select substance category') {
                                populateItems(category);
                                itemField.classList.remove('hidden');
                                const selectedDensity = parseFloat(itemEl.value);
                                if (!isNaN(selectedDensity)) {
                                    currentDensity = selectedDensity;
                                }
                            }

                            densityDisplay.textContent = formatNumber(currentDensity) + ' g/mL';
                        }

                        function updateLabels() {
                            const direction = document.querySelector('input[name="direction"]:checked').value;

                            if (direction === 'pints-to-pounds') {
                                volumeLabel.textContent = 'Volume (Pints)';
                                weightLabel.textContent = 'Weight (Pounds)';
                                pintsInput.placeholder = 'Enter volume (e.g., 1)';
                                poundsInput.placeholder = 'Weight will be calculated';
                                poundsInput.readOnly = true;
                                pintsInput.readOnly = false;
                                poundsInput.classList.add('bg-gray-100');
                                pintsInput.classList.remove('bg-gray-100');
                            } else {
                                volumeLabel.textContent = 'Volume (Pints)';
                                weightLabel.textContent = 'Weight (Pounds)';
                                pintsInput.placeholder = 'Volume will be calculated';
                                poundsInput.placeholder = 'Enter weight (e.g., 1.04)';
                                pintsInput.readOnly = true;
                                poundsInput.readOnly = false;
                                pintsInput.classList.add('bg-gray-100');
                                poundsInput.classList.remove('bg-gray-100');
                            }
                        }

                        function convertPintsToPounds() {
                            const pints = parseFloat(pintsInput.value);
                            if (!isNaN(pints) && currentDensity > 0) {
                                const pintToMl = 473.176;
                                const grams = pints * pintToMl * currentDensity;
                                const pounds = grams / 453.592;
                                
                                poundsInput.value = formatNumber(pounds);
                                updateOutputs(pints, pounds);
                                updateCalculationSteps(pints, pounds, 'pints-to-pounds');
                            } else {
                                clearOutputs();
                            }
                        }

                        function convertPoundsToPints() {
                            const pounds = parseFloat(poundsInput.value);
                            if (!isNaN(pounds) && currentDensity > 0) {
                                const grams = pounds * 453.592;
                                const pintToMl = 473.176;
                                const pints = grams / (pintToMl * currentDensity);
                                
                                pintsInput.value = formatNumber(pints);
                                updateOutputs(pints, pounds);
                                updateCalculationSteps(pints, pounds, 'pounds-to-pints');
                            } else {
                                clearOutputs();
                            }
                        }

                        function updateOutputs(pints, pounds) {
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            
                            if (direction === 'pints-to-pounds') {
                                output.textContent = formatNumber(pounds);
                                unitDisplay.textContent = 'lbs';
                                resultTitle.textContent = 'Weight in Pounds';
                                resultDescription.textContent = 'Imperial weight measurement';
                            } else {
                                output.textContent = formatNumber(pints);
                                unitDisplay.textContent = 'pt';
                                resultTitle.textContent = 'Volume in Pints';
                                resultDescription.textContent = 'Imperial volume measurement';
                            }

                            // Additional conversions
                            const ounces = pounds * 16;
                            const kg = pounds * 0.453592;
                            const grams = pounds * 453.592;
                            const cups = pints * 2;
                            const liters = pints * 0.473176;
                            const ml = pints * 473.176;

                            ouncesOutput.textContent = formatNumber(ounces) + ' oz';
                            kgOutput.textContent = formatNumber(kg) + ' kg';
                            gramsOutput.textContent = formatNumber(grams) + ' g';
                            cupsOutput.textContent = formatNumber(cups) + ' cups';
                            litersOutput.textContent = formatNumber(liters) + ' L';
                            mlOutput.textContent = formatNumber(ml) + ' mL';
                        }

                        function updateCalculationSteps(pints, pounds, direction) {
                            if (direction === 'pints-to-pounds') {
                                calculationSteps.textContent = `${formatNumber(pints)} pt × 473.176 mL/pt × ${formatNumber(currentDensity)} g/mL ÷ 453.592 g/lb = ${formatNumber(pounds)} lbs`;
                            } else {
                                calculationSteps.textContent = `${formatNumber(pounds)} lbs × 453.592 g/lb ÷ (473.176 mL/pt × ${formatNumber(currentDensity)} g/mL) = ${formatNumber(pints)} pt`;
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            ouncesOutput.textContent = '--';
                            kgOutput.textContent = '--';
                            gramsOutput.textContent = '--';
                            cupsOutput.textContent = '--';
                            litersOutput.textContent = '--';
                            mlOutput.textContent = '--';
                            calculationSteps.textContent = 'Select substance and enter values to see calculation steps';
                        }

                        function clearAll() {
                            pintsInput.value = '';
                            poundsInput.value = '';
                            categoryEl.selectedIndex = 0;
                            itemEl.selectedIndex = 0;
                            manualDensityEl.value = '';
                            itemField.classList.add('hidden');
                            densityField.classList.add('hidden');
                            currentDensity = 1;
                            densityDisplay.textContent = '-- g/mL';
                            clearOutputs();
                            pintsInput.focus();
                        }

                        // Event listeners
                        categoryEl.addEventListener('change', () => {
                            updateDensity();
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            if (direction === 'pints-to-pounds') {
                                convertPintsToPounds();
                            } else {
                                convertPoundsToPints();
                            }
                        });

                        itemEl.addEventListener('change', () => {
                            updateDensity();
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            if (direction === 'pints-to-pounds') {
                                convertPintsToPounds();
                            } else {
                                convertPoundsToPints();
                            }
                        });

                        manualDensityEl.addEventListener('input', () => {
                            updateDensity();
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            if (direction === 'pints-to-pounds') {
                                convertPintsToPounds();
                            } else {
                                convertPoundsToPints();
                            }
                        });

                        densityUnitEl.addEventListener('change', () => {
                            updateDensity();
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            if (direction === 'pints-to-pounds') {
                                convertPintsToPounds();
                            } else {
                                convertPoundsToPints();
                            }
                        });

                        directionRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateLabels();
                                clearOutputs();
                                pintsInput.value = '';
                                poundsInput.value = '';
                            });
                        });

                        pintsInput.addEventListener('input', convertPintsToPounds);
                        poundsInput.addEventListener('input', convertPoundsToPints);
                        clearButton.addEventListener('click', clearAll);

                        // Add clickable functionality to examples
                        const examples = document.querySelectorAll('[data-category]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const category = this.getAttribute('data-category');
                                const itemDensity = this.getAttribute('data-item');
                                const pints = this.getAttribute('data-pints');
                                
                                categoryEl.value = category;
                                updateDensity();
                                
                                if (itemDensity) {
                                    itemEl.value = itemDensity;
                                    updateDensity();
                                }
                                
                                document.querySelector('input[value="pints-to-pounds"]').checked = true;
                                updateLabels();
                                
                                pintsInput.value = pints;
                                convertPintsToPounds();
                                pintsInput.focus();
                            });
                        });

                        // Initialize
                        updateLabels();
                        clearOutputs();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearAll();
                            } else if (e.ctrlKey && e.key === 'd') {
                                e.preventDefault();
                                // Toggle direction
                                const currentDirection = document.querySelector('input[name="direction"]:checked').value;
                                const newDirection = currentDirection === 'pints-to-pounds' ? 'pounds-to-pints' : 'pints-to-pounds';
                                document.querySelector(`input[value="${newDirection}"]`).checked = true;
                                updateLabels();
                                clearOutputs();
                                pintsInput.value = '';
                                poundsInput.value = '';
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
