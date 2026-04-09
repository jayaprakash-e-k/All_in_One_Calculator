<x-tool-page-layout
    title="Ares to Hectares Converter - ConvertPro"
    description="Professional converter for ares and hectares land area measurements. Fast and accurate bidirectional conversion for agricultural and real estate calculations."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Metric Land Area Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Input Value -->
                                                                            <div class="space-y-2">
                                                                                <label for="value" class="block text-sm font-semibold text-gray-700">
                                                                                    Enter Value
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="value" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                        placeholder="Enter area value"
                                                                                        step="any"
                                                                                        min="0"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium" id="input-unit">ares</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Conversion Direction -->
                                                                            <div class="space-y-2">
                                                                                <label for="direction" class="block text-sm font-semibold text-gray-700">
                                                                                    Conversion Direction
                                                                                </label>
                                                                                <select 
                                                                                    id="direction" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                >
                                                                                    <option value="aresToHectares">Ares → Hectares</option>
                                                                                    <option value="hectaresToAres">Hectares → Ares</option>
                                                                                </select>
                                                                            </div>

                                                                            <!-- Swap Button -->
                                                                            <div class="flex justify-center">
                                                                                <button 
                                                                                    type="button" 
                                                                                    id="swapButton"
                                                                                    class="inline-flex items-center px-4 py-2 bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-medium rounded-lg transition-colors duration-200"
                                                                                >
                                                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                                                                    </svg>
                                                                                    Swap Direction
                                                                                </button>
                                                                            </div>

                                                                        </form>
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Result Display -->
                                                                        <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl border-l-4 border-indigo-500">
                                                                            <div class="flex items-center justify-between">
                                                                                <div>
                                                                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h3>
                                                                                    <p class="text-sm text-gray-600">Real-time conversion result</p>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <div class="text-2xl font-bold text-indigo-600 font-mono" id="output">--</div>
                                                                                    <div class="text-sm text-gray-500 font-medium" id="unit-display">Select direction</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    

        <div class="mt-6 space-y-4">
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <!-- Quick Reference -->
                                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Quick Reference</h4>
                                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                                        <div>• 1 hectare = 100 ares</div>
                                                        <div>• 1 are = 0.01 hectares</div>
                                                        <div>• 1 are = 100 square meters</div>
                                                        <div>• 1 hectare = 10,000 square meters</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Ares to Hectares Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">What is an Are?</h4>
                                    <p>An are is a metric unit of area equal to 100 square meters. It's commonly used in agriculture and land measurement, particularly in Europe for smaller land parcels.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">What is a Hectare?</h4>
                                    <p>A hectare equals 10,000 square meters or 100 ares. It's the standard unit for measuring large agricultural areas, forests, and land plots in metric system countries.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                                <p class="text-sm text-indigo-800">
                                    <strong>Fun Fact:</strong> The hectare is accepted for use with the International System of Units (SI) and is widely used in land registry and agricultural planning!
                                </p>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const valueInput = document.getElementById('value');
                        const directionSelect = document.getElementById('direction');
                        const swapButton = document.getElementById('swapButton');
                        const output = document.getElementById('output');
                        const unitDisplay = document.getElementById('unit-display');
                        const inputUnit = document.getElementById('input-unit');

                        const conversionRates = {
                            aresToHectares: { rate: 0.01, fromUnit: 'ares', toUnit: 'hectares', formula: 'Hectares = Ares × 0.01' },
                            hectaresToAres: { rate: 100, fromUnit: 'hectares', toUnit: 'ares', formula: 'Ares = Hectares × 100' }
                        };

                        function updateLabels() {
                            const direction = directionSelect.value;
                            const conversion = conversionRates[direction];
                            
                            inputUnit.textContent = conversion.fromUnit;
                            unitDisplay.textContent = conversion.toUnit;
                            valueInput.placeholder = `Enter ${conversion.fromUnit}`;
                        }

                        function convert() {
                            const value = parseFloat(valueInput.value);
                            const direction = directionSelect.value;
                            const conversion = conversionRates[direction];

                            if (!isNaN(value) && value >= 0) {
                                const result = value * conversion.rate;
                                
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
                                unitDisplay.textContent = conversion.toUnit;
                            } else {
                                output.textContent = "--";
                                unitDisplay.textContent = "Select direction";
                            }
                        }

                        function swapDirection() {
                            const currentDirection = directionSelect.value;
                            const currentValue = valueInput.value;
                            
                            // Swap the direction
                            if (currentDirection === 'aresToHectares') {
                                directionSelect.value = 'hectaresToAres';
                            } else {
                                directionSelect.value = 'aresToHectares';
                            }
                            
                            // If there's a value, use the current result as the new input
                            if (currentValue && !isNaN(parseFloat(currentValue))) {
                                const currentResult = output.textContent;
                                if (currentResult !== '--') {
                                    // Parse the current result and set it as the new input
                                    const numericResult = parseFloat(currentResult.replace(/,/g, ''));
                                    if (!isNaN(numericResult)) {
                                        valueInput.value = numericResult;
                                    }
                                }
                            }
                            
                            updateLabels();
                            convert();
                        }

                        function updateUnitDisplay() {
                            const direction = directionSelect.value;
                            const conversion = conversionRates[direction];
                            if (valueInput.value === '' || isNaN(parseFloat(valueInput.value))) {
                                unitDisplay.textContent = conversion.toUnit;
                            }
                        }

                        // Event listeners
                        valueInput.addEventListener('input', convert);
                        directionSelect.addEventListener('change', function() {
                            updateLabels();
                            convert();
                            updateUnitDisplay();
                        });
                        swapButton.addEventListener('click', swapDirection);

                        // Initialize
                        updateLabels();
                        updateUnitDisplay();
                        
                        // Focus on input when page loads
                        valueInput.focus();

                        // Add keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                valueInput.value = '';
                                convert();
                                valueInput.focus();
                            } else if (e.ctrlKey && e.key === 's') {
                                e.preventDefault();
                                swapDirection();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
