<x-app-layout 
    title="Drops to mL Converter - ConvertPro"
    description="Professional drops to milliliters converter for medical dosages and small volume measurements. Convert drops to mL with precision."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Drops to mL Converter']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-teal-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-teal-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Drops to mL Converter</h1>
                    <p class="text-gray-600">Convert drops to milliliters for precise measurements</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-teal-500 to-teal-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Small Volume Measurements</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Input Value -->
                            <div class="space-y-2">
                                <label for="drops" class="block text-sm font-semibold text-gray-700">
                                    Enter Number of Drops
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="drops" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter drops (e.g., 20)"
                                        step="1"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">drops</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Standard: 1 drop ≈ 0.05 mL</p>
                            </div>

                            <!-- Drop Size Selection -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Drop Size Standard
                                </label>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <label class="flex items-center space-x-3 p-3 border-2 border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                        <input type="radio" name="dropSize" value="0.05" class="text-teal-600 focus:ring-teal-500" checked>
                                        <div>
                                            <span class="text-sm font-medium">Standard Medical</span>
                                            <div class="text-xs text-gray-500">0.05 mL per drop</div>
                                        </div>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border-2 border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                        <input type="radio" name="dropSize" value="0.067" class="text-teal-600 focus:ring-teal-500">
                                        <div>
                                            <span class="text-sm font-medium">Imperial Standard</span>
                                            <div class="text-xs text-gray-500">0.067 mL per drop</div>
                                        </div>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border-2 border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                        <input type="radio" name="dropSize" value="0.1" class="text-teal-600 focus:ring-teal-500">
                                        <div>
                                            <span class="text-sm font-medium">Large Drop</span>
                                            <div class="text-xs text-gray-500">0.1 mL per drop</div>
                                        </div>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border-2 border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                        <input type="radio" name="dropSize" value="custom" class="text-teal-600 focus:ring-teal-500">
                                        <div>
                                            <span class="text-sm font-medium">Custom Size</span>
                                            <div class="text-xs text-gray-500">Enter custom value</div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- Custom Drop Size -->
                            <div class="space-y-2" id="customDropSizeField" style="display: none;">
                                <label for="customDropSize" class="block text-sm font-semibold text-gray-700">
                                    Custom Drop Size
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="customDropSize" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter drop size"
                                        step="0.001"
                                        min="0.001"
                                        max="1"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">mL/drop</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Conversion Direction -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Conversion Direction
                                </label>
                                <div class="grid grid-cols-2 gap-3">
                                    <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                        <input type="radio" name="direction" value="drops-to-ml" class="text-teal-600 focus:ring-teal-500" checked>
                                        <span class="text-sm font-medium">Drops → mL</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                        <input type="radio" name="direction" value="ml-to-drops" class="text-teal-600 focus:ring-teal-500">
                                        <span class="text-sm font-medium">mL → Drops</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Clear Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="clearButton"
                                    class="inline-flex items-center px-4 py-2 bg-teal-100 hover:bg-teal-200 text-teal-700 font-medium rounded-lg transition-colors duration-200"
                                >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Clear Value
                                </button>
                            </div>

                        </form>

                        <!-- Results Display -->
                        <div class="mt-8 space-y-4">
                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                            
                            <!-- Primary Result -->
                            <div class="p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl border-l-4 border-teal-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Volume in Milliliters</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Precise volume measurement</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-teal-600 font-mono" id="output">--</div>
                                        <div class="text-sm text-gray-500 font-medium" id="unit-display">mL</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Conversions -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Liters</h4>
                                        <div class="text-lg font-bold text-blue-600 font-mono" id="litersOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Fluid Ounces</h4>
                                        <div class="text-lg font-bold text-green-600 font-mono" id="flOzOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Teaspoons</h4>
                                        <div class="text-lg font-bold text-purple-600 font-mono" id="tspOutput">--</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Drop Size Reference</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• Medical standard: 0.05 mL</div>
                                <div>• Imperial standard: 0.067 mL</div>
                                <div>• 20 drops ≈ 1 mL (medical)</div>
                                <div>• 15 drops ≈ 1 mL (imperial)</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Drops to mL Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Medical Applications</h4>
                            <p>Essential for precise medication dosing, eye drops, ear drops, and other medical treatments where small, accurate volumes are critical for patient safety and treatment effectiveness.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Variable Drop Sizes</h4>
                            <p>Drop size varies based on liquid properties (viscosity, surface tension), dropper design, and dispensing technique. Always verify with specific medical instructions.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-teal-50 rounded-lg border border-teal-200">
                        <p class="text-sm text-teal-800">
                            <strong>Medical Warning:</strong> Always follow your healthcare provider's specific instructions for medication dosing. This calculator is for reference only!
                        </p>
                    </div>
                </div>

                <!-- Common Drop Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Drop Measurements</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Eye Drops</div>
                            <div class="text-teal-600 cursor-pointer hover:text-teal-800 transition-colors" data-drops="1">1-2 drops</div>
                            <div class="text-xs text-gray-500 mt-1">~0.05-0.1 mL</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Small Dose</div>
                            <div class="text-teal-600 cursor-pointer hover:text-teal-800 transition-colors" data-drops="5">5 drops</div>
                            <div class="text-xs text-gray-500 mt-1">~0.25 mL</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Medium Dose</div>
                            <div class="text-teal-600 cursor-pointer hover:text-teal-800 transition-colors" data-drops="20">20 drops</div>
                            <div class="text-xs text-gray-500 mt-1">~1 mL</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Larger Dose</div>
                            <div class="text-teal-600 cursor-pointer hover:text-teal-800 transition-colors" data-drops="40">40 drops</div>
                            <div class="text-xs text-gray-500 mt-1">~2 mL</div>
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
                const dropsInput = document.getElementById('drops');
                const dropSizeRadios = document.getElementsByName('dropSize');
                const customDropSizeField = document.getElementById('customDropSizeField');
                const customDropSize = document.getElementById('customDropSize');
                const directionRadios = document.getElementsByName('direction');
                const clearButton = document.getElementById('clearButton');
                const output = document.getElementById('output');
                const unitDisplay = document.getElementById('unit-display');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const litersOutput = document.getElementById('litersOutput');
                const flOzOutput = document.getElementById('flOzOutput');
                const tspOutput = document.getElementById('tspOutput');

                function formatNumber(num) {
                    if (num >= 1000) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 2 });
                    } else if (num >= 1) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 3 });
                    } else {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 4 });
                    }
                }

                function getDropSize() {
                    const selectedSize = document.querySelector('input[name="dropSize"]:checked').value;
                    if (selectedSize === 'custom') {
                        return parseFloat(customDropSize.value) || 0.05;
                    }
                    return parseFloat(selectedSize);
                }

                function convert() {
                    const value = parseFloat(dropsInput.value);
                    const direction = document.querySelector('input[name="direction"]:checked').value;
                    const dropSizeValue = getDropSize();

                    if (!isNaN(value) && value >= 0) {
                        let ml, drops;

                        if (direction === 'drops-to-ml') {
                            drops = value;
                            ml = value * dropSizeValue;
                            resultTitle.textContent = 'Volume in Milliliters';
                            resultDescription.textContent = 'Drops to milliliters conversion';
                            output.textContent = formatNumber(ml);
                            unitDisplay.textContent = 'mL';
                        } else {
                            ml = value;
                            drops = value / dropSizeValue;
                            resultTitle.textContent = 'Number of Drops';
                            resultDescription.textContent = 'Milliliters to drops conversion';
                            output.textContent = formatNumber(drops);
                            unitDisplay.textContent = 'drops';
                        }

                        // Additional conversions (always from ml)
                        const liters = ml / 1000;
                        const flOz = ml * 0.033814;
                        const tsp = ml * 0.202884;

                        litersOutput.textContent = formatNumber(liters) + ' L';
                        flOzOutput.textContent = formatNumber(flOz) + ' fl oz';
                        tspOutput.textContent = formatNumber(tsp) + ' tsp';
                    } else {
                        output.textContent = "--";
                        litersOutput.textContent = "--";
                        flOzOutput.textContent = "--";
                        tspOutput.textContent = "--";
                    }
                }

                function updateLabels() {
                    const direction = document.querySelector('input[name="direction"]:checked').value;
                    const inputLabel = document.querySelector('label[for="drops"]');

                    if (direction === 'drops-to-ml') {
                        inputLabel.textContent = 'Enter Number of Drops';
                        dropsInput.placeholder = 'Enter drops (e.g., 20)';
                        document.querySelector('.absolute span').textContent = 'drops';
                    } else {
                        inputLabel.textContent = 'Enter Volume in mL';
                        dropsInput.placeholder = 'Enter mL (e.g., 1.0)';
                        document.querySelector('.absolute span').textContent = 'mL';
                    }
                }

                function toggleCustomField() {
                    const selectedSize = document.querySelector('input[name="dropSize"]:checked').value;
                    if (selectedSize === 'custom') {
                        customDropSizeField.style.display = 'block';
                    } else {
                        customDropSizeField.style.display = 'none';
                    }
                }

                function clearInput() {
                    dropsInput.value = '';
                    customDropSize.value = '';
                    convert();
                    dropsInput.focus();
                }

                // Event listeners
                dropsInput.addEventListener('input', convert);
                
                dropSizeRadios.forEach(radio => {
                    radio.addEventListener('change', () => {
                        toggleCustomField();
                        convert();
                    });
                });

                customDropSize.addEventListener('input', convert);

                directionRadios.forEach(radio => {
                    radio.addEventListener('change', () => {
                        updateLabels();
                        convert();
                    });
                });

                clearButton.addEventListener('click', clearInput);

                // Add clickable functionality to example drops
                const exampleDrops = document.querySelectorAll('[data-drops]');
                exampleDrops.forEach(element => {
                    element.addEventListener('click', function() {
                        const dropsValue = this.getAttribute('data-drops');
                        
                        // Set to drops-to-ml mode
                        document.querySelector('input[value="drops-to-ml"]').checked = true;
                        updateLabels();
                        
                        dropsInput.value = dropsValue;
                        convert();
                        dropsInput.focus();
                    });
                });

                // Initialize
                dropsInput.focus();
                updateLabels();
                toggleCustomField();

                // Keyboard shortcuts
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        clearInput();
                    } else if (e.ctrlKey && e.key === 'd') {
                        e.preventDefault();
                        // Toggle direction
                        const currentDirection = document.querySelector('input[name="direction"]:checked').value;
                        const newDirection = currentDirection === 'drops-to-ml' ? 'ml-to-drops' : 'drops-to-ml';
                        document.querySelector(`input[value="${newDirection}"]`).checked = true;
                        updateLabels();
                        convert();
                    }
                });

                // Initialize conversion
                convert();
            });
        </script>
    </x-slot>
</x-app-layout>