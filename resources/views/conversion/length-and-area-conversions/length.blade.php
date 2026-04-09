<x-tool-page-layout
    title="Length Calculator - ConvertPro"
    description="Professional length calculator to convert between meters, feet, inches, kilometers, and other length units. Fast and accurate conversions."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Length Unit Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="value" class="block text-sm font-semibold text-gray-700">
                                            Enter Length Value
                                        </label>
                                        <input 
                                            type="number" 
                                            id="value" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                            placeholder="Enter length value"
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
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="m">Meters (m)</option>
                                            <option value="ft">Feet (ft)</option>
                                            <option value="in">Inches (in)</option>
                                            <option value="cm">Centimeters (cm)</option>
                                            <option value="mm">Millimeters (mm)</option>
                                            <option value="km">Kilometers (km)</option>
                                            <option value="yd">Yards (yd)</option>
                                            <option value="mi">Miles (mi)</option>
                                            <option value="nm">Nanometers (nm)</option>
                                            <option value="um">Micrometers (μm)</option>
                                        </select>
                                    </div>

                                    <!-- To Unit -->
                                    <div class="space-y-2">
                                        <label for="to" class="block text-sm font-semibold text-gray-700">
                                            To Unit
                                        </label>
                                        <select 
                                            id="to" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="m">Meters (m)</option>
                                            <option value="ft">Feet (ft)</option>
                                            <option value="in">Inches (in)</option>
                                            <option value="cm">Centimeters (cm)</option>
                                            <option value="mm">Millimeters (mm)</option>
                                            <option value="km">Kilometers (km)</option>
                                            <option value="yd">Yards (yd)</option>
                                            <option value="mi">Miles (mi)</option>
                                            <option value="nm">Nanometers (nm)</option>
                                            <option value="um">Micrometers (μm)</option>
                                        </select>
                                    </div>

                                    <!-- Swap Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="swapButton"
                                            class="inline-flex items-center px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium rounded-lg transition-colors duration-200"
                                        >
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                            </svg>
                                            Swap Units
                                        </button>
                                    </div>

                                </form>

                                <!-- Result Display -->
                                <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h3>
                                            <p class="text-sm text-gray-600">Real-time conversion result</p>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-2xl font-bold text-blue-600 font-mono" id="output">--</div>
                                            <div class="text-sm text-gray-500 font-medium" id="unit-display">Select units</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Quick Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 m = 3.28084 ft</div>
                                        <div>• 1 ft = 12 in</div>
                                        <div>• 1 km = 1000 m</div>
                                        <div>• 1 mi = 5280 ft</div>
                                        <div>• 1 yd = 3 ft</div>
                                        <div>• 1 m = 100 cm</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Length Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                                    <p>Length calculations are essential for construction projects, engineering designs, scientific measurements, sports tracking, and everyday measurements in both professional and personal contexts.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Precision & Standards</h4>
                                    <p>Our calculator uses internationally recognized conversion factors based on the meter as the fundamental SI unit, ensuring accuracy across all measurement systems.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-blue-50 rounded-lg border border-blue-200">
                                <p class="text-sm text-blue-800">
                                    <strong>Did You Know?</strong> The meter was originally defined as one ten-millionth of the distance from the equator to the North Pole!
                                </p>
                            </div>
                        </div>

                        <!-- Common Length Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Length Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Credit Card</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-length="8.5" data-unit="cm">8.5 cm</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Average Person</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-length="5.7" data-unit="ft">5.7 ft</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Basketball Court</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-length="28" data-unit="m">28 m</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Marathon</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-length="26.2" data-unit="mi">26.2 mi</div>
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

                        // Conversion rates to meters
                        const conversionRates = {
                            m: { toMeters: 1, symbol: 'm', name: 'Meters' },
                            ft: { toMeters: 0.3048, symbol: 'ft', name: 'Feet' },
                            in: { toMeters: 0.0254, symbol: 'in', name: 'Inches' },
                            cm: { toMeters: 0.01, symbol: 'cm', name: 'Centimeters' },
                            mm: { toMeters: 0.001, symbol: 'mm', name: 'Millimeters' },
                            km: { toMeters: 1000, symbol: 'km', name: 'Kilometers' },
                            yd: { toMeters: 0.9144, symbol: 'yd', name: 'Yards' },
                            mi: { toMeters: 1609.34, symbol: 'mi', name: 'Miles' },
                            nm: { toMeters: 1e-9, symbol: 'nm', name: 'Nanometers' },
                            um: { toMeters: 1e-6, symbol: 'μm', name: 'Micrometers' }
                        };

                        function convert() {
                            const value = parseFloat(valueInput.value);
                            const fromUnit = fromSelect.value;
                            const toUnit = toSelect.value;

                            if (!isNaN(value) && value >= 0) {
                                // Convert to meters first, then to target unit
                                const inMeters = value * conversionRates[fromUnit].toMeters;
                                const result = inMeters / conversionRates[toUnit].toMeters;
                                
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

                        // Add clickable functionality to example lengths
                        const exampleLengths = document.querySelectorAll('[data-length]');
                        exampleLengths.forEach(element => {
                            element.addEventListener('click', function() {
                                const lengthValue = this.getAttribute('data-length');
                                const unitValue = this.getAttribute('data-unit');
                                
                                valueInput.value = lengthValue;
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
                        fromSelect.value = 'ft';
                        toSelect.value = 'm';

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
