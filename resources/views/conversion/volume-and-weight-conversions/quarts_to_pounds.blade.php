<x-tool-page-layout
    title="Quarts to Pounds Converter - ConvertPro"
    description="Professional quarts to pounds converter for cooking and baking. Convert volume to weight using ingredient density for accurate recipe measurements."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-fuchsia-500 to-fuchsia-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Ingredient-Based Volume to Weight Conversion</h2>
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
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-fuchsia-300 transition-colors cursor-pointer">
                                                <input type="radio" name="direction" value="quarts-to-pounds" class="text-fuchsia-600 focus:ring-fuchsia-500" checked>
                                                <span class="text-sm font-medium">Quarts → Pounds</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-fuchsia-300 transition-colors cursor-pointer">
                                                <input type="radio" name="direction" value="pounds-to-quarts" class="text-fuchsia-600 focus:ring-fuchsia-500">
                                                <span class="text-sm font-medium">Pounds → Quarts</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Ingredient Selection -->
                                    <div class="space-y-2">
                                        <label for="ingredient" class="block text-sm font-semibold text-gray-700">
                                            Select Ingredient
                                        </label>
                                        <select 
                                            id="ingredient" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-fuchsia-500 focus:ring-2 focus:ring-fuchsia-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="">Select ingredient</option>
                                            <optgroup label="Liquids">
                                                <option value="Water">Water</option>
                                                <option value="Milk">Milk</option>
                                                <option value="Cream 30% fat">Heavy Cream (30% fat)</option>
                                                <option value="Cream 13% fat">Light Cream (13% fat)</option>
                                            </optgroup>
                                            <optgroup label="Sweeteners">
                                                <option value="Sugar">Sugar</option>
                                                <option value="Honey">Honey</option>
                                                <option value="Maple syrup">Maple Syrup</option>
                                                <option value="Jam">Jam</option>
                                            </optgroup>
                                            <optgroup label="Baking Ingredients">
                                                <option value="Flour">All-Purpose Flour</option>
                                                <option value="Salt">Salt</option>
                                                <option value="Butter">Butter</option>
                                                <option value="Oil">Cooking Oil</option>
                                                <option value="Cacao">Cocoa Powder</option>
                                            </optgroup>
                                            <optgroup label="Grains & Nuts">
                                                <option value="Rice (raw)">Rice (raw)</option>
                                                <option value="Oats">Oats</option>
                                                <option value="Nuts and seeds">Nuts and Seeds</option>
                                            </optgroup>
                                            <optgroup label="Specialty">
                                                <option value="Nutella">Nutella</option>
                                                <option value="Custom">Custom Ingredient</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <!-- Custom Density Field -->
                                    <div id="customDensityContainer" class="space-y-2 hidden">
                                        <label for="customDensity" class="block text-sm font-semibold text-gray-700">
                                            Custom Density
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="customDensity" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-fuchsia-500 focus:ring-2 focus:ring-fuchsia-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter density (e.g., 1.15)"
                                                step="0.001"
                                                min="0.001"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">g/mL</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Current Density Display -->
                                    <div class="p-3 bg-fuchsia-50 rounded-lg border border-fuchsia-200">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-semibold text-fuchsia-800">Current Ingredient Density:</span>
                                            <span class="text-lg font-bold text-fuchsia-700" id="densityDisplay">-- g/mL</span>
                                        </div>
                                    </div>

                                    <!-- Input Values -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="space-y-2">
                                            <label for="quartsInput" class="block text-sm font-semibold text-gray-700" id="volumeLabel">
                                                Volume (Quarts)
                                            </label>
                                            <div class="relative">
                                                <input 
                                                    type="number" 
                                                    id="quartsInput" 
                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-fuchsia-500 focus:ring-2 focus:ring-fuchsia-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                    placeholder="Enter volume (e.g., 2)"
                                                    step="any"
                                                    min="0"
                                                >
                                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                    <span class="text-gray-500 text-sm font-medium" id="volumeUnit">qt</span>
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
                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-fuchsia-500 focus:ring-2 focus:ring-fuchsia-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                    placeholder="Enter weight (e.g., 2.08)"
                                                    step="any"
                                                    min="0"
                                                >
                                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                    <span class="text-gray-500 text-sm font-medium" id="weightUnit">lbs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Recipe Scaling Helper -->
                                    <div class="p-4 bg-blue-50 rounded-lg border border-blue-200">
                                        <h4 class="text-sm font-semibold text-blue-800 mb-2">Recipe Scaling Helper</h4>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div>
                                                <label for="originalServings" class="block text-xs font-medium text-blue-700 mb-1">Original Servings</label>
                                                <input type="number" id="originalServings" class="w-full px-2 py-1 text-sm border border-blue-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500" placeholder="e.g., 4" min="1">
                                            </div>
                                            <div>
                                                <label for="desiredServings" class="block text-xs font-medium text-blue-700 mb-1">Desired Servings</label>
                                                <input type="number" id="desiredServings" class="w-full px-2 py-1 text-sm border border-blue-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500" placeholder="e.g., 6" min="1">
                                            </div>
                                        </div>
                                        <div class="mt-2 text-xs text-blue-700">
                                            Scale Factor: <span id="scaleFactor" class="font-semibold">--</span>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-fuchsia-100 hover:bg-fuchsia-200 text-fuchsia-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <div class="p-6 bg-gradient-to-r from-fuchsia-50 to-yellow-50 rounded-xl border-l-4 border-fuchsia-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Weight in Pounds</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Imperial weight measurement</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-fuchsia-600 font-mono" id="output">--</div>
                                                <div class="text-sm text-gray-500 font-medium" id="unit-display">lbs</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Volume/Weight Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Ounces</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="ouncesOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
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
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Pints</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="pintsOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border-l-4 border-cyan-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Liters</h4>
                                                <div class="text-lg font-bold text-cyan-600 font-mono" id="litersOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-yellow-50 to-fuchsia-50 rounded-lg border-l-4 border-yellow-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Cups</h4>
                                                <div class="text-lg font-bold text-yellow-600 font-mono" id="cupsOutput">--</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Scaled Result (if scaling is active) -->
                                    <div class="p-4 bg-green-50 rounded-lg border border-green-200" id="scaledResult" style="display: none;">
                                        <h4 class="text-sm font-semibold text-green-800 mb-2">Scaled Recipe Amount</h4>
                                        <div class="text-lg font-bold text-green-700" id="scaledOutput">--</div>
                                    </div>

                                    <!-- Calculation Steps -->
                                    <div class="p-4 bg-gray-50 rounded-lg">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-2 text-center">Calculation Steps</h4>
                                        <div class="text-center text-sm text-gray-600 font-mono" id="calculationSteps">
                                            Select ingredient and enter values to see calculation steps
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Cooking Conversion Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 quart = 946.353 mL</div>
                                        <div>• 1 quart = 2 pints</div>
                                        <div>• 1 quart = 4 cups</div>
                                        <div>• 1 pound = 453.592 grams</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Quarts to Pounds Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Ingredient-Based Conversion</h4>
                                    <p>Converting quarts (volume) to pounds (weight) requires knowing the ingredient's density. Different ingredients have different densities, so the same volume can have very different weights depending on the ingredient.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Cooking Applications</h4>
                                    <p>Perfect for large batch cooking, commercial kitchens, recipe scaling, and converting between volume-based and weight-based recipes. Essential for professional baking where precision matters.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-fuchsia-50 rounded-lg border border-fuchsia-200">
                                <p class="text-sm text-fuchsia-800">
                                    <strong>Cooking Tip:</strong> Ingredient densities can vary based on factors like temperature, moisture content, and how tightly packed the ingredient is!
                                </p>
                            </div>
                        </div>

                        <!-- Common Cooking Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Cooking Conversions</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Water/Broth</div>
                                    <div class="text-fuchsia-600 cursor-pointer hover:text-fuchsia-800 transition-colors" data-ingredient="Water" data-quarts="1">1 quart</div>
                                    <div class="text-xs text-gray-500 mt-1">≈ 2.08 lbs</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Milk</div>
                                    <div class="text-fuchsia-600 cursor-pointer hover:text-fuchsia-800 transition-colors" data-ingredient="Milk" data-quarts="1">1 quart</div>
                                    <div class="text-xs text-gray-500 mt-1">≈ 2.14 lbs</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Flour</div>
                                    <div class="text-fuchsia-600 cursor-pointer hover:text-fuchsia-800 transition-colors" data-ingredient="Flour" data-quarts="1">1 quart</div>
                                    <div class="text-xs text-gray-500 mt-1">≈ 1.23 lbs</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Sugar</div>
                                    <div class="text-fuchsia-600 cursor-pointer hover:text-fuchsia-800 transition-colors" data-ingredient="Sugar" data-quarts="1">1 quart</div>
                                    <div class="text-xs text-gray-500 mt-1">≈ 1.76 lbs</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const ingredientSelect = document.getElementById('ingredient');
                        const customDensityInput = document.getElementById('customDensity');
                        const customDensityContainer = document.getElementById('customDensityContainer');
                        const directionRadios = document.getElementsByName('direction');
                        const quartsInput = document.getElementById('quartsInput');
                        const poundsInput = document.getElementById('poundsInput');
                        const volumeLabel = document.getElementById('volumeLabel');
                        const weightLabel = document.getElementById('weightLabel');
                        const volumeUnit = document.getElementById('volumeUnit');
                        const weightUnit = document.getElementById('weightUnit');
                        const densityDisplay = document.getElementById('densityDisplay');
                        const originalServings = document.getElementById('originalServings');
                        const desiredServings = document.getElementById('desiredServings');
                        const scaleFactor = document.getElementById('scaleFactor');
                        const clearButton = document.getElementById('clearButton');
                        const output = document.getElementById('output');
                        const unitDisplay = document.getElementById('unit-display');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const ouncesOutput = document.getElementById('ouncesOutput');
                        const kgOutput = document.getElementById('kgOutput');
                        const gramsOutput = document.getElementById('gramsOutput');
                        const pintsOutput = document.getElementById('pintsOutput');
                        const litersOutput = document.getElementById('litersOutput');
                        const cupsOutput = document.getElementById('cupsOutput');
                        const scaledResult = document.getElementById('scaledResult');
                        const scaledOutput = document.getElementById('scaledOutput');
                        const calculationSteps = document.getElementById('calculationSteps');

                        // Ingredient densities (g/mL)
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

                        function updateDensity() {
                            const ingredient = ingredientSelect.value;

                            if (ingredient === "Custom") {
                                customDensityContainer.classList.remove('hidden');
                                currentDensity = parseFloat(customDensityInput.value) || 1;
                            } else {
                                customDensityContainer.classList.add('hidden');
                                currentDensity = densities[ingredient] || 1;
                            }

                            densityDisplay.textContent = formatNumber(currentDensity) + ' g/mL';
                        }

                        function updateLabels() {
                            const direction = document.querySelector('input[name="direction"]:checked').value;

                            if (direction === 'quarts-to-pounds') {
                                volumeLabel.textContent = 'Volume (Quarts)';
                                weightLabel.textContent = 'Weight (Pounds)';
                                quartsInput.placeholder = 'Enter volume (e.g., 2)';
                                poundsInput.placeholder = 'Weight will be calculated';
                                poundsInput.readOnly = true;
                                quartsInput.readOnly = false;
                                poundsInput.classList.add('bg-gray-100');
                                quartsInput.classList.remove('bg-gray-100');
                            } else {
                                volumeLabel.textContent = 'Volume (Quarts)';
                                weightLabel.textContent = 'Weight (Pounds)';
                                quartsInput.placeholder = 'Volume will be calculated';
                                poundsInput.placeholder = 'Enter weight (e.g., 2.08)';
                                quartsInput.readOnly = true;
                                poundsInput.readOnly = false;
                                quartsInput.classList.add('bg-gray-100');
                                poundsInput.classList.remove('bg-gray-100');
                            }
                        }

                        function updateScaleFactor() {
                            const orig = parseFloat(originalServings.value);
                            const desired = parseFloat(desiredServings.value);
                            
                            if (!isNaN(orig) && !isNaN(desired) && orig > 0) {
                                const factor = desired / orig;
                                scaleFactor.textContent = factor.toFixed(2) + 'x';
                                return factor;
                            } else {
                                scaleFactor.textContent = '--';
                                return null;
                            }
                        }

                        function convertQuartsToPounds() {
                            const quarts = parseFloat(quartsInput.value);
                            if (!isNaN(quarts) && currentDensity > 0) {
                                const ml = quarts * 946.353;
                                const grams = ml * currentDensity;
                                const pounds = grams / 453.592;
                                
                                poundsInput.value = formatNumber(pounds);
                                updateOutputs(quarts, pounds);
                                updateCalculationSteps(quarts, pounds, 'quarts-to-pounds');
                            } else {
                                clearOutputs();
                            }
                        }

                        function convertPoundsToQuarts() {
                            const pounds = parseFloat(poundsInput.value);
                            if (!isNaN(pounds) && currentDensity > 0) {
                                const grams = pounds * 453.592;
                                const ml = grams / currentDensity;
                                const quarts = ml / 946.353;
                                
                                quartsInput.value = formatNumber(quarts);
                                updateOutputs(quarts, pounds);
                                updateCalculationSteps(quarts, pounds, 'pounds-to-quarts');
                            } else {
                                clearOutputs();
                            }
                        }

                        function updateOutputs(quarts, pounds) {
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            
                            if (direction === 'quarts-to-pounds') {
                                output.textContent = formatNumber(pounds);
                                unitDisplay.textContent = 'lbs';
                                resultTitle.textContent = 'Weight in Pounds';
                                resultDescription.textContent = 'Imperial weight measurement';
                            } else {
                                output.textContent = formatNumber(quarts);
                                unitDisplay.textContent = 'qt';
                                resultTitle.textContent = 'Volume in Quarts';
                                resultDescription.textContent = 'Imperial volume measurement';
                            }

                            // Additional conversions
                            const ounces = pounds * 16;
                            const kg = pounds * 0.453592;
                            const grams = pounds * 453.592;
                            const pints = quarts * 2;
                            const liters = quarts * 0.946353;
                            const cups = quarts * 4;

                            ouncesOutput.textContent = formatNumber(ounces) + ' oz';
                            kgOutput.textContent = formatNumber(kg) + ' kg';
                            gramsOutput.textContent = formatNumber(grams) + ' g';
                            pintsOutput.textContent = formatNumber(pints) + ' pt';
                            litersOutput.textContent = formatNumber(liters) + ' L';
                            cupsOutput.textContent = formatNumber(cups) + ' cups';

                            // Calculate scaled result if scaling is active
                            const factor = updateScaleFactor();
                            if (factor !== null) {
                                const scaledValue = direction === 'quarts-to-pounds' ? quarts * factor : pounds * factor;
                                const scaledUnit = direction === 'quarts-to-pounds' ? 'quarts' : 'pounds';
                                scaledOutput.textContent = formatNumber(scaledValue) + ' ' + scaledUnit;
                                scaledResult.style.display = 'block';
                            } else {
                                scaledResult.style.display = 'none';
                            }
                        }

                        function updateCalculationSteps(quarts, pounds, direction) {
                            if (direction === 'quarts-to-pounds') {
                                calculationSteps.textContent = `${formatNumber(quarts)} qt × 946.353 mL/qt × ${formatNumber(currentDensity)} g/mL ÷ 453.592 g/lb = ${formatNumber(pounds)} lbs`;
                            } else {
                                calculationSteps.textContent = `${formatNumber(pounds)} lbs × 453.592 g/lb ÷ (946.353 mL/qt × ${formatNumber(currentDensity)} g/mL) = ${formatNumber(quarts)} qt`;
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            ouncesOutput.textContent = '--';
                            kgOutput.textContent = '--';
                            gramsOutput.textContent = '--';
                            pintsOutput.textContent = '--';
                            litersOutput.textContent = '--';
                            cupsOutput.textContent = '--';
                            scaledResult.style.display = 'none';
                            calculationSteps.textContent = 'Select ingredient and enter values to see calculation steps';
                        }

                        function clearAll() {
                            quartsInput.value = '';
                            poundsInput.value = '';
                            ingredientSelect.selectedIndex = 0;
                            customDensityInput.value = '';
                            originalServings.value = '';
                            desiredServings.value = '';
                            customDensityContainer.classList.add('hidden');
                            currentDensity = 1;
                            densityDisplay.textContent = '-- g/mL';
                            clearOutputs();
                            quartsInput.focus();
                        }

                        // Event listeners
                        ingredientSelect.addEventListener('change', () => {
                            updateDensity();
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            if (direction === 'quarts-to-pounds') {
                                convertQuartsToPounds();
                            } else {
                                convertPoundsToQuarts();
                            }
                        });

                        customDensityInput.addEventListener('input', () => {
                            updateDensity();
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            if (direction === 'quarts-to-pounds') {
                                convertQuartsToPounds();
                            } else {
                                convertPoundsToQuarts();
                            }
                        });

                        directionRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateLabels();
                                clearOutputs();
                                quartsInput.value = '';
                                poundsInput.value = '';
                            });
                        });

                        quartsInput.addEventListener('input', convertQuartsToPounds);
                        poundsInput.addEventListener('input', convertPoundsToQuarts);
                        originalServings.addEventListener('input', () => {
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            if (direction === 'quarts-to-pounds') {
                                convertQuartsToPounds();
                            } else {
                                convertPoundsToQuarts();
                            }
                        });
                        desiredServings.addEventListener('input', () => {
                            const direction = document.querySelector('input[name="direction"]:checked').value;
                            if (direction === 'quarts-to-pounds') {
                                convertQuartsToPounds();
                            } else {
                                convertPoundsToQuarts();
                            }
                        });
                        clearButton.addEventListener('click', clearAll);

                        // Add clickable functionality to examples
                        const examples = document.querySelectorAll('[data-ingredient]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const ingredient = this.getAttribute('data-ingredient');
                                const quarts = this.getAttribute('data-quarts');
                                
                                ingredientSelect.value = ingredient;
                                updateDensity();
                                
                                document.querySelector('input[value="quarts-to-pounds"]').checked = true;
                                updateLabels();
                                
                                quartsInput.value = quarts;
                                convertQuartsToPounds();
                                quartsInput.focus();
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
                                const newDirection = currentDirection === 'quarts-to-pounds' ? 'pounds-to-quarts' : 'quarts-to-pounds';
                                document.querySelector(`input[value="${newDirection}"]`).checked = true;
                                updateLabels();
                                clearOutputs();
                                quartsInput.value = '';
                                poundsInput.value = '';
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
