<x-tool-page-layout
    title="Area Calculator - ConvertPro"
    description="Professional area calculator to convert between square meters, square feet, acres, hectares, and other area units. Fast and accurate conversions."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Area Unit Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="value" class="block text-sm font-semibold text-gray-700">
                                            Enter Area Value
                                        </label>
                                        <input 
                                            type="number" 
                                            id="value" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                            placeholder="Enter area value"
                                            step="any"
                                            min="0"
                                        >
                                    </div>

                                    <!-- From Unit -->
                                    <div class="space-y-2">
                                        <label for="from" class="block text-sm font-semibold text-gray-700">
                                            From Unit
                                        </label>
                                        <select 
                                            id="from" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="sqm">Square Meters (m²)</option>
                                            <option value="sqft">Square Feet (ft²)</option>
                                            <option value="sqin">Square Inches (in²)</option>
                                            <option value="sqyd">Square Yards (yd²)</option>
                                            <option value="sqkm">Square Kilometers (km²)</option>
                                            <option value="sqmm">Square Millimeters (mm²)</option>
                                            <option value="sqcm">Square Centimeters (cm²)</option>
                                            <option value="hectare">Hectares (ha)</option>
                                            <option value="acre">Acres</option>
                                            <option value="ares">Ares (a)</option>
                                        </select>
                                    </div>

                                    <!-- To Unit -->
                                    <div class="space-y-2">
                                        <label for="to" class="block text-sm font-semibold text-gray-700">
                                            To Unit
                                        </label>
                                        <select 
                                            id="to" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="sqm">Square Meters (m²)</option>
                                            <option value="sqft">Square Feet (ft²)</option>
                                            <option value="sqin">Square Inches (in²)</option>
                                            <option value="sqyd">Square Yards (yd²)</option>
                                            <option value="sqkm">Square Kilometers (km²)</option>
                                            <option value="sqmm">Square Millimeters (mm²)</option>
                                            <option value="sqcm">Square Centimeters (cm²)</option>
                                            <option value="hectare">Hectares (ha)</option>
                                            <option value="acre">Acres</option>
                                            <option value="ares">Ares (a)</option>
                                        </select>
                                    </div>

                                    <!-- Swap Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="swapButton"
                                            class="inline-flex items-center px-4 py-2 bg-green-100 hover:bg-green-200 text-green-700 font-medium rounded-lg transition-colors duration-200"
                                        >
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                            </svg>
                                            Swap Units
                                        </button>
                                    </div>

                                </form>

                                <!-- Result Display -->
                                <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h3>
                                            <p class="text-sm text-gray-600">Real-time conversion result</p>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-2xl font-bold text-green-600 font-mono" id="output">--</div>
                                            <div class="text-sm text-gray-500 font-medium" id="unit-display">Select units</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Quick Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 m² = 10.764 ft²</div>
                                        <div>• 1 acre = 4,047 m²</div>
                                        <div>• 1 hectare = 10,000 m²</div>
                                        <div>• 1 ft² = 144 in²</div>
                                        <div>• 1 yd² = 9 ft²</div>
                                        <div>• 1 hectare = 100 ares</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Area Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                                    <p>Area calculations are essential for real estate transactions, construction planning, landscaping projects, agricultural planning, and scientific measurements across various fields.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Precision & Accuracy</h4>
                                    <p>Our calculator uses international standard conversion factors for maximum accuracy across all area units, ensuring reliable results for professional and personal use.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-green-50 rounded-lg border border-green-200">
                                <p class="text-sm text-green-800">
                                    <strong>Professional Tip:</strong> For large-scale measurements, consider using hectares or square kilometers for better readability!
                                </p>
                            </div>
                        </div>

                        <!-- Common Area Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Area Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Tennis Court</div>
                                    <div class="text-green-600 cursor-pointer hover:text-green-800 transition-colors" data-area="260" data-unit="sqm">260 m²</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Football Field</div>
                                    <div class="text-green-600 cursor-pointer hover:text-green-800 transition-colors" data-area="5400" data-unit="sqm">5,400 m²</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Small House</div>
                                    <div class="text-green-600 cursor-pointer hover:text-green-800 transition-colors" data-area="1500" data-unit="sqft">1,500 ft²</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">City Block</div>
                                    <div class="text-green-600 cursor-pointer hover:text-green-800 transition-colors" data-area="2" data-unit="hectare">2 hectares</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const valueInput = document.getElementById('value');
                        const fromSelect = document.getElementById('from');
                        const toSelect = document.getElementById('to');
                        const swapButton = document.getElementById('swapButton');
                        const output = document.getElementById('output');
                        const unitDisplay = document.getElementById('unit-display');

                        // Conversion rates to square meters
                        const conversionRates = {
                            sqm: { toSquareMeters: 1, symbol: 'm²', name: 'Square Meters' },
                            sqft: { toSquareMeters: 0.092903, symbol: 'ft²', name: 'Square Feet' },
                            sqin: { toSquareMeters: 0.00064516, symbol: 'in²', name: 'Square Inches' },
                            sqyd: { toSquareMeters: 0.836127, symbol: 'yd²', name: 'Square Yards' },
                            sqkm: { toSquareMeters: 1000000, symbol: 'km²', name: 'Square Kilometers' },
                            sqmm: { toSquareMeters: 0.000001, symbol: 'mm²', name: 'Square Millimeters' },
                            sqcm: { toSquareMeters: 0.0001, symbol: 'cm²', name: 'Square Centimeters' },
                            hectare: { toSquareMeters: 10000, symbol: 'ha', name: 'Hectares' },
                            acre: { toSquareMeters: 4046.86, symbol: 'acres', name: 'Acres' },
                            ares: { toSquareMeters: 100, symbol: 'a', name: 'Ares' }
                        };

                        function convert() {
                            const value = parseFloat(valueInput.value);
                            const fromUnit = fromSelect.value;
                            const toUnit = toSelect.value;

                            if (!isNaN(value) && value >= 0) {
                                // Convert to square meters first, then to target unit
                                const inSquareMeters = value * conversionRates[fromUnit].toSquareMeters;
                                const result = inSquareMeters / conversionRates[toUnit].toSquareMeters;
                                
                                // Format the result appropriately
                                let formattedResult;
                                if (result >= 1000000) {
                                    formattedResult = result.toExponential(4);
                                } else if (result >= 1000) {
                                    formattedResult = result.toLocaleString(undefined, { maximumFractionDigits: 2 });
                                } else if (result >= 1) {
                                    formattedResult = result.toLocaleString(undefined, { maximumFractionDigits: 4 });
                                } else {
                                    formattedResult = result.toLocaleString(undefined, { maximumFractionDigits: 6 });
                                }
                                
                                output.textContent = formattedResult;
                                unitDisplay.textContent = conversionRates[toUnit].symbol;
                            } else {
                                output.textContent = "--";
                                unitDisplay.textContent = "Select units";
                            }
                        }

                        function swapUnits() {
                            const fromValue = fromSelect.value;
                            const toValue = toSelect.value;
                            
                            fromSelect.value = toValue;
                            toSelect.value = fromValue;
                            
                            convert();
                        }

                        function updateUnitDisplay() {
                            const toUnit = toSelect.value;
                            if (valueInput.value === '' || isNaN(parseFloat(valueInput.value))) {
                                unitDisplay.textContent = conversionRates[toUnit].symbol;
                            }
                        }

                        // Event listeners
                        valueInput.addEventListener('input', convert);
                        fromSelect.addEventListener('change', function() {
                            convert();
                            updateUnitDisplay();
                        });
                        toSelect.addEventListener('change', function() {
                            convert();
                            updateUnitDisplay();
                        });
                        swapButton.addEventListener('click', swapUnits);

                        // Add clickable functionality to example areas
                        const exampleAreas = document.querySelectorAll('[data-area]');
                        exampleAreas.forEach(element => {
                            element.addEventListener('click', function() {
                                const areaValue = this.getAttribute('data-area');
                                const unitValue = this.getAttribute('data-unit');
                                
                                valueInput.value = areaValue;
                                fromSelect.value = unitValue;
                                convert();
                                valueInput.focus();
                            });
                        });

                        // Initialize
                        updateUnitDisplay();
                        
                        // Focus on input when page loads
                        valueInput.focus();
                        
                        // Set default values
                        fromSelect.value = 'sqft';
                        toSelect.value = 'sqm';

                        // Add keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                valueInput.value = '';
                                convert();
                                valueInput.focus();
                            } else if (e.ctrlKey && e.key === 's') {
                                e.preventDefault();
                                swapUnits();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
