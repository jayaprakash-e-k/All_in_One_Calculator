<x-tool-page-layout
    title="Kg to Gallons Converter (Advanced) - ConvertPro"
    description="Advanced kg to gallons converter for various substances. Convert weight to volume based on density for liquids, dairy, oils, and cooking ingredients."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Advanced Weight to Volume Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Category Selection -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Select Category
                                        </label>
                                        <select 
                                            id="category" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
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

                                    <!-- Item Selection -->
                                    <div class="space-y-2" id="itemField" style="display: none;">
                                        <label for="item" class="block text-sm font-semibold text-gray-700">
                                            Select Item
                                        </label>
                                        <select 
                                            id="item" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                            disabled
                                        >
                                            <option>Select a category first</option>
                                        </select>
                                    </div>

                                    <!-- Density Display -->
                                    <div class="space-y-2" id="densityField" style="display: none;">
                                        <label for="densityDisplay" class="block text-sm font-semibold text-gray-700">
                                            Item Density
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="text" 
                                                id="densityDisplay" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg bg-gray-50 text-lg font-medium" 
                                                placeholder="Select item first"
                                                readonly
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">g/cm³</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Weight Input -->
                                    <div class="space-y-2">
                                        <label for="kg" class="block text-sm font-semibold text-gray-700">
                                            Weight
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="kg" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter weight (e.g., 100)"
                                                step="0.1"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">kg</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium rounded-lg transition-colors duration-200"
                                        >
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            Clear Values
                                        </button>
                                    </div>

                                </form>

                                <!-- Results Display -->
                                <div class="mt-8 space-y-4">
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Volume Results</h3>
                                    
                                    <!-- Primary Result - US Gallons -->
                                    <div class="p-6 bg-gradient-to-r from-blue-50 to-teal-50 rounded-xl border-l-4 border-blue-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">Volume (US Gallons)</h4>
                                                <p class="text-sm text-gray-600">Calculated volume</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-blue-600 font-mono" id="output">--</div>
                                                <div class="text-sm text-gray-500 font-medium">gal</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Volume Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Liters</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="litersOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Quarts</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="quartsOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Pints</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="pintsOutput">--</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Density Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• Water: 1.0 g/cm³</div>
                                        <div>• Milk: 1.03 g/cm³</div>
                                        <div>• Oil: 0.92 g/cm³</div>
                                        <div>• Honey: 1.42 g/cm³</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Weight to Volume Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Density-Based Conversion</h4>
                                    <p>Converting weight to volume requires knowing the substance's density. Different materials have different densities, so the same weight can occupy very different volumes.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Cooking Applications</h4>
                                    <p>Essential for recipe conversions, ingredient substitutions, and scaling recipes up or down when measurements are given in different units.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-blue-50 rounded-lg border border-blue-200">
                                <p class="text-sm text-blue-800">
                                    <strong>Cooking Tip:</strong> Densities can vary with temperature and composition. For best results, use ingredients at room temperature!
                                </p>
                            </div>
                        </div>

                        <!-- Common Ingredient Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Cooking Conversions</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Water</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-category="Liquids" data-item="Water" data-weight="1">1 kg</div>
                                    <div class="text-xs text-gray-500 mt-1">~0.26 gallons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Milk</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-category="Dairy" data-item="Milk" data-weight="2">2 kg</div>
                                    <div class="text-xs text-gray-500 mt-1">~0.51 gallons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Honey</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-category="Sweeteners" data-item="Honey" data-weight="1">1 kg</div>
                                    <div class="text-xs text-gray-500 mt-1">~0.19 gallons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Olive Oil</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-category="Oils" data-item="Olive oil" data-weight="0.5">0.5 kg</div>
                                    <div class="text-xs text-gray-500 mt-1">~0.14 gallons</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const categorySelect = document.getElementById('category');
                        const itemSelect = document.getElementById('item');
                        const itemField = document.getElementById('itemField');
                        const densityField = document.getElementById('densityField');
                        const densityDisplay = document.getElementById('densityDisplay');
                        const kgInput = document.getElementById('kg');
                        const clearButton = document.getElementById('clearButton');
                        const output = document.getElementById('output');
                        const litersOutput = document.getElementById('litersOutput');
                        const quartsOutput = document.getElementById('quartsOutput');
                        const pintsOutput = document.getElementById('pintsOutput');

                        // Densities in g/cm³ (which equals kg/L)
                        const densities = {
                            "Liquids": { 
                                "Water": 1.0, 
                                "Grape soda": 1.03, 
                                "Juice": 1.04,
                                "Coffee": 1.0,
                                "Tea": 1.0 
                            },
                            "Dairy": { 
                                "Milk": 1.03, 
                                "Cream": 0.97, 
                                "Yogurt": 1.05,
                                "Buttermilk": 1.03,
                                "Heavy cream": 0.99 
                            },
                            "Oils": { 
                                "Olive oil": 0.91, 
                                "Vegetable oil": 0.92, 
                                "Coconut oil": 0.925,
                                "Canola oil": 0.915,
                                "Sunflower oil": 0.920 
                            },
                            "Fruits & vegetables": { 
                                "Tomato puree": 1.05, 
                                "Apple sauce": 1.1, 
                                "Pumpkin puree": 1.05,
                                "Orange juice": 1.04,
                                "Lemon juice": 1.03 
                            },
                            "Flour": { 
                                "All-purpose flour": 0.55, 
                                "Whole-wheat flour": 0.59,
                                "Bread flour": 0.56,
                                "Cake flour": 0.53,
                                "Self-rising flour": 0.55 
                            },
                            "Sweeteners": { 
                                "Honey": 1.42, 
                                "Maple syrup": 1.37, 
                                "Molasses": 1.45,
                                "Corn syrup": 1.36,
                                "Agave nectar": 1.35 
                            },
                            "Cereals": { 
                                "Rice": 0.85, 
                                "Oats": 0.39,
                                "Quinoa": 0.84,
                                "Barley": 0.78,
                                "Wheat": 0.82 
                            },
                            "Nuts": { 
                                "Peanut butter": 1.09, 
                                "Almond butter": 0.96,
                                "Tahini": 1.0,
                                "Cashew butter": 0.98,
                                "Sunflower seed butter": 1.02 
                            },
                            "Sauces and condiments": { 
                                "Ketchup": 1.17, 
                                "Mayonnaise": 0.94, 
                                "Soy sauce": 1.24,
                                "Vinegar": 1.01,
                                "Hot sauce": 1.05 
                            },
                            "Herbs and spices": { 
                                "Olive paste": 1.1, 
                                "Mustard": 1.02,
                                "Garlic paste": 1.08,
                                "Ginger paste": 1.05,
                                "Vanilla extract": 0.94 
                            },
                            "Others": { 
                                "Sugar": 0.85, 
                                "Salt": 1.2,
                                "Baking powder": 0.9,
                                "Cocoa powder": 0.48,
                                "Powdered sugar": 0.56 
                            }
                        };

                        function formatNumber(num) {
                            if (num >= 1000) {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 2 });
                            } else if (num >= 1) {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 3 });
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 4 });
                            }
                        }

                        function convert() {
                            const category = categorySelect.value;
                            const item = itemSelect.value;
                            const kg = parseFloat(kgInput.value);
                            
                            if (densities[category] && densities[category][item] && !isNaN(kg) && kg > 0) {
                                // Get density in kg/L
                                const density = densities[category][item];
                                
                                // Calculate volume in liters
                                const liters = kg / density;
                                
                                // Convert to US gallons
                                const gallons = liters * 0.264172;
                                
                                // Additional conversions
                                const quarts = gallons * 4;
                                const pints = gallons * 8;

                                output.textContent = formatNumber(gallons);
                                litersOutput.textContent = formatNumber(liters) + ' L';
                                quartsOutput.textContent = formatNumber(quarts) + ' qt';
                                pintsOutput.textContent = formatNumber(pints) + ' pt';
                            } else {
                                output.textContent = '--';
                                litersOutput.textContent = '--';
                                quartsOutput.textContent = '--';
                                pintsOutput.textContent = '--';
                            }
                        }

                        function populateItems(category) {
                            const items = densities[category];
                            itemSelect.innerHTML = '<option disabled selected>Select item</option>';
                            
                            if (items) {
                                Object.keys(items).forEach(item => {
                                    itemSelect.innerHTML += `<option value="${item}">${item}</option>`;
                                });
                                itemSelect.disabled = false;
                                itemField.style.display = 'block';
                            } else {
                                itemSelect.disabled = true;
                                itemField.style.display = 'none';
                            }
                            
                            densityField.style.display = 'none';
                            densityDisplay.value = '';
                            convert();
                        }

                        function updateDensity() {
                            const category = categorySelect.value;
                            const item = itemSelect.value;
                            
                            if (densities[category] && densities[category][item]) {
                                densityDisplay.value = densities[category][item];
                                densityField.style.display = 'block';
                            } else {
                                densityDisplay.value = '';
                                densityField.style.display = 'none';
                            }
                            convert();
                        }

                        function clearAll() {
                            kgInput.value = '';
                            categorySelect.selectedIndex = 0;
                            itemSelect.innerHTML = '<option>Select a category first</option>';
                            itemSelect.disabled = true;
                            itemField.style.display = 'none';
                            densityField.style.display = 'none';
                            densityDisplay.value = '';
                            convert();
                            kgInput.focus();
                        }

                        // Event listeners
                        categorySelect.addEventListener('change', () => {
                            populateItems(categorySelect.value);
                        });

                        itemSelect.addEventListener('change', updateDensity);
                        kgInput.addEventListener('input', convert);
                        clearButton.addEventListener('click', clearAll);

                        // Add clickable functionality to example ingredients
                        const exampleIngredients = document.querySelectorAll('[data-category]');
                        exampleIngredients.forEach(element => {
                            element.addEventListener('click', function() {
                                const category = this.getAttribute('data-category');
                                const item = this.getAttribute('data-item');
                                const weight = this.getAttribute('data-weight');
                                
                                categorySelect.value = category;
                                populateItems(category);
                                
                                // Small delay to ensure options are populated
                                setTimeout(() => {
                                    itemSelect.value = item;
                                    updateDensity();
                                    kgInput.value = weight;
                                    convert();
                                }, 50);
                                
                                kgInput.focus();
                            });
                        });

                        // Initialize
                        kgInput.focus();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearAll();
                            }
                        });

                        // Initialize conversion
                        convert();
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
