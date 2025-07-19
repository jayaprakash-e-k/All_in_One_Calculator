<x-app-layout 
    title="Decimeter to Meter Converter - ConvertPro"
    description="Professional decimeter to meter converter for simple metric conversions. Fast and accurate bidirectional conversion between decimeters and meters."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Decimeter to Meter Converter']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-rose-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-rose-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Decimeter to Meter Converter</h1>
                    <p class="text-gray-600">Bidirectional conversion between decimeters and meters</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-rose-500 to-rose-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Simple Metric Conversion</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Input Value -->
                            <div class="space-y-2">
                                <label for="value" class="block text-sm font-semibold text-gray-700">
                                    Enter Value
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="value" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:ring-2 focus:ring-rose-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter measurement value"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium" id="input-unit">dm</span>
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
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:ring-2 focus:ring-rose-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="dmToM">Decimeters → Meters</option>
                                    <option value="mToDm">Meters → Decimeters</option>
                                </select>
                            </div>

                            <!-- Swap Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="swapButton"
                                    class="inline-flex items-center px-4 py-2 bg-rose-100 hover:bg-rose-200 text-rose-700 font-medium rounded-lg transition-colors duration-200"
                                >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                    </svg>
                                    Swap Direction
                                </button>
                            </div>

                        </form>

                        <!-- Result Display -->
                        <div class="mt-8 p-6 bg-gradient-to-r from-rose-50 to-pink-50 rounded-xl border-l-4 border-rose-500">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h3>
                                    <p class="text-sm text-gray-600">Real-time conversion result</p>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-rose-600 font-mono" id="output">--</div>
                                    <div class="text-sm text-gray-500 font-medium" id="unit-display">Select direction</div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Quick Reference</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• 1 meter = 10 decimeters</div>
                                <div>• 1 decimeter = 0.1 meters</div>
                                <div>• 1 decimeter = 10 centimeters</div>
                                <div>• 1 decimeter = 100 millimeters</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Decimeter to Meter Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">What is a Decimeter?</h4>
                            <p>A decimeter (dm) is a metric unit of length equal to one-tenth of a meter or 10 centimeters. It's commonly used in Europe for measuring smaller objects and distances.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                            <p>Decimeter conversions are useful in education, construction measurements, fabric sizing, and scientific calculations where intermediate metric units are needed.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-rose-50 rounded-lg border border-rose-200">
                        <p class="text-sm text-rose-800">
                            <strong>Memory Tip:</strong> Think "deci" = one-tenth, so 1 decimeter = 0.1 meters!
                        </p>
                    </div>
                </div>

                <!-- Common Measurements -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Decimeter Examples</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Smartphone</div>
                            <div class="text-rose-600 cursor-pointer hover:text-rose-800 transition-colors" data-value="1.5" data-from="dm">1.5 dm</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Book</div>
                            <div class="text-rose-600 cursor-pointer hover:text-rose-800 transition-colors" data-value="2.4" data-from="dm">2.4 dm</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Laptop</div>
                            <div class="text-rose-600 cursor-pointer hover:text-rose-800 transition-colors" data-value="3.5" data-from="dm">3.5 dm</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">School Ruler</div>
                            <div class="text-rose-600 cursor-pointer hover:text-rose-800 transition-colors" data-value="3" data-from="dm">3 dm</div>
                        </div>
                    </div>
                </div>

                <!-- Back to Tools -->
                <div class="mt-8 text-center">
                    <a href="{{ route('conversion.index') }}" 
                       class="inline-flex items-center px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back to Conversion Tools
                    </a>
                </div>

            </div>
        </div>
    </section>

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
                    dmToM: { rate: 0.1, fromUnit: 'dm', toUnit: 'm', formula: 'Meters = Decimeters × 0.1' },
                    mToDm: { rate: 10, fromUnit: 'm', toUnit: 'dm', formula: 'Decimeters = Meters × 10' }
                };

                function updateLabels() {
                    const direction = directionSelect.value;
                    const conversion = conversionRates[direction];
                    
                    inputUnit.textContent = conversion.fromUnit;
                    unitDisplay.textContent = conversion.toUnit;
                    valueInput.placeholder = `Enter ${conversion.fromUnit === 'dm' ? 'decimeters' : 'meters'}`;
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
                    if (currentDirection === 'dmToM') {
                        directionSelect.value = 'mToDm';
                    } else {
                        directionSelect.value = 'dmToM';
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

                // Add clickable functionality to example measurements
                const exampleMeasurements = document.querySelectorAll('[data-value]');
                exampleMeasurements.forEach(element => {
                    element.addEventListener('click', function() {
                        const measurementValue = this.getAttribute('data-value');
                        const fromUnit = this.getAttribute('data-from');
                        
                        valueInput.value = measurementValue;
                        if (fromUnit === 'dm') {
                            directionSelect.value = 'dmToM';
                        } else {
                            directionSelect.value = 'mToDm';
                        }
                        updateLabels();
                        convert();
                        valueInput.focus();
                    });
                });

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
</x-app-layout>