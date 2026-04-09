<x-tool-page-layout
    title="Light Year Converter - ConvertPro"
    description="Professional light year converter to convert light years to kilometers, miles, astronomical units, and parsecs. Accurate space distance conversions for astronomy."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Interstellar Distance Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="value" class="block text-sm font-semibold text-gray-700">
                                            Distance in Light Years
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="value" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter light years (e.g., 4.37)"
                                                step="any"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">ly</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Nearest star is 4.37 light years away</p>
                                    </div>

                                    <!-- Convert To -->
                                    <div class="space-y-2">
                                        <label for="to" class="block text-sm font-semibold text-gray-700">
                                            Convert To
                                        </label>
                                        <select 
                                            id="to" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="km">Kilometers (km)</option>
                                            <option value="mi">Miles (mi)</option>
                                            <option value="au">Astronomical Units (AU)</option>
                                            <option value="pc">Parsecs (pc)</option>
                                            <option value="m">Meters (m)</option>
                                            <option value="ft">Feet (ft)</option>
                                        </select>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-medium rounded-lg transition-colors duration-200"
                                        >
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            Clear Value
                                        </button>
                                    </div>

                                </form>

                                <!-- Result Display -->
                                <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-indigo-50 rounded-xl border-l-4 border-indigo-500">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h3>
                                            <p class="text-sm text-gray-600">Real-time conversion result</p>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-2xl font-bold text-indigo-600 font-mono" id="output">--</div>
                                            <div class="text-sm text-gray-500 font-medium" id="unit-display">Select unit</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Quick Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 ly = 9.46 × 10¹² km</div>
                                        <div>• 1 ly = 5.88 × 10¹² miles</div>
                                        <div>• 1 ly = 63,241 AU</div>
                                        <div>• 1 ly = 0.307 parsecs</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Light Year Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">What is a Light Year?</h4>
                                    <p>A light year is the distance that light travels in one year in a vacuum, approximately 9.46 trillion kilometers. It's used to measure vast interstellar and intergalactic distances in astronomy.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Astronomical Applications</h4>
                                    <p>Light years help astronomers describe distances to nearby stars, stellar distances within galaxies, and are essential for understanding the scale of the universe and cosmic phenomena.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                                <p class="text-sm text-indigo-800">
                                    <strong>Cosmic Fact:</strong> The nearest star to Earth (Proxima Centauri) is 4.37 light years away - that's about 25 trillion miles!
                                </p>
                            </div>
                        </div>

                        <!-- Famous Distances Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Famous Cosmic Distances</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Proxima Centauri</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-distance="4.37">4.37 ly</div>
                                    <div class="text-xs text-gray-500 mt-1">Nearest Star</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Sirius</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-distance="8.6">8.6 ly</div>
                                    <div class="text-xs text-gray-500 mt-1">Brightest Star</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Vega</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-distance="25">25 ly</div>
                                    <div class="text-xs text-gray-500 mt-1">Northern Star</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Galactic Center</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-distance="26000">26,000 ly</div>
                                    <div class="text-xs text-gray-500 mt-1">Milky Way Center</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const valueInput = document.getElementById('value');
                        const toSelect = document.getElementById('to');
                        const clearButton = document.getElementById('clearButton');
                        const output = document.getElementById('output');
                        const unitDisplay = document.getElementById('unit-display');

                        const conversionRates = {
                            km: { rate: 9.461e+12, symbol: 'km', name: 'Kilometers' },
                            mi: { rate: 5.879e+12, symbol: 'mi', name: 'Miles' },
                            au: { rate: 63241.1, symbol: 'AU', name: 'Astronomical Units' },
                            pc: { rate: 0.306601, symbol: 'pc', name: 'Parsecs' },
                            m: { rate: 9.461e+15, symbol: 'm', name: 'Meters' },
                            ft: { rate: 3.104e+16, symbol: 'ft', name: 'Feet' }
                        };

                        function convert() {
                            const lightYears = parseFloat(valueInput.value);
                            const toUnit = toSelect.value;
                            const conversion = conversionRates[toUnit];

                            if (!isNaN(lightYears) && lightYears >= 0) {
                                const result = lightYears * conversion.rate;
                                
                                // Format the result appropriately
                                let formattedResult;
                                if (result >= 1e15) {
                                    formattedResult = result.toExponential(4);
                                } else if (result >= 1000000) {
                                    formattedResult = result.toExponential(4);
                                } else if (result >= 1000) {
                                    formattedResult = result.toLocaleString(undefined, { maximumFractionDigits: 2 });
                                } else if (result >= 1) {
                                    formattedResult = result.toLocaleString(undefined, { maximumFractionDigits: 4 });
                                } else {
                                    formattedResult = result.toLocaleString(undefined, { maximumFractionDigits: 6 });
                                }
                                
                                output.textContent = formattedResult;
                                unitDisplay.textContent = conversion.symbol;
                            } else {
                                output.textContent = "--";
                                unitDisplay.textContent = "Select unit";
                            }
                        }

                        function clearInput() {
                            valueInput.value = '';
                            convert();
                            valueInput.focus();
                        }

                        function updateUnitDisplay() {
                            const toUnit = toSelect.value;
                            const conversion = conversionRates[toUnit];
                            if (valueInput.value === '' || isNaN(parseFloat(valueInput.value))) {
                                unitDisplay.textContent = conversion.symbol;
                            }
                        }

                        // Event listeners
                        valueInput.addEventListener('input', convert);
                        toSelect.addEventListener('change', function() {
                            convert();
                            updateUnitDisplay();
                        });
                        clearButton.addEventListener('click', clearInput);

                        // Add clickable functionality to example distances
                        const exampleDistances = document.querySelectorAll('[data-distance]');
                        exampleDistances.forEach(element => {
                            element.addEventListener('click', function() {
                                const distanceValue = this.getAttribute('data-distance');
                                valueInput.value = distanceValue;
                                convert();
                                valueInput.focus();
                            });
                        });

                        // Initialize
                        updateUnitDisplay();
                        
                        // Focus on input when page loads
                        valueInput.focus();

                        // Add keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearInput();
                            }
                        });

                        // Initialize conversion
                        convert();
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
