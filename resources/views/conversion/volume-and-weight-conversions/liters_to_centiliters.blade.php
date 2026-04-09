<x-tool-page-layout
    title="Liters to Centiliters Converter - ConvertPro"
    description="Professional liters to centiliters converter for metric volume conversions. Convert liters (L) to centiliters (cL) with precision for laboratory and culinary use."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Metric Volume System Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                            Enter Volume in Liters
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter volume (e.g., 2.5)"
                                                step="any"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">L</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1" id="conversionHint">1 liter = 100 centiliters</p>
                                    </div>

                                    <!-- Conversion Direction -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Conversion Direction
                                        </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="direction" value="l-to-cl" class="text-indigo-600 focus:ring-indigo-500" checked>
                                                <span class="text-sm font-medium">Liters → Centiliters</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="direction" value="cl-to-l" class="text-indigo-600 focus:ring-indigo-500">
                                                <span class="text-sm font-medium">Centiliters → Liters</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Metric System Visual -->
                                    <div class="p-4 bg-indigo-50 rounded-lg border border-indigo-200">
                                        <h4 class="text-sm font-semibold text-indigo-800 mb-2">Metric Volume Hierarchy</h4>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-indigo-700">
                                            <div class="text-center p-2 bg-white rounded">
                                                <div class="font-semibold">kL</div>
                                                <div>Kiloliter</div>
                                                <div class="text-indigo-600">1000 L</div>
                                            </div>
                                            <div class="text-center p-2 bg-white rounded border-2 border-indigo-300">
                                                <div class="font-semibold">L</div>
                                                <div>Liter</div>
                                                <div class="text-indigo-600">Base unit</div>
                                            </div>
                                            <div class="text-center p-2 bg-white rounded border-2 border-indigo-300">
                                                <div class="font-semibold">cL</div>
                                                <div>Centiliter</div>
                                                <div class="text-indigo-600">0.01 L</div>
                                            </div>
                                            <div class="text-center p-2 bg-white rounded">
                                                <div class="font-semibold">mL</div>
                                                <div>Milliliter</div>
                                                <div class="text-indigo-600">0.001 L</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quick Volume Presets -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Volume Presets
                                        </label>
                                        <div class="grid grid-cols-4 gap-2">
                                            <button type="button" class="volume-preset px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="0.1" data-direction="l-to-cl">0.1 L</button>
                                            <button type="button" class="volume-preset px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="0.5" data-direction="l-to-cl">0.5 L</button>
                                            <button type="button" class="volume-preset px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="1" data-direction="l-to-cl">1 L</button>
                                            <button type="button" class="volume-preset px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="2" data-direction="l-to-cl">2 L</button>
                                        </div>
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

                                <!-- Results Display -->
                                <div class="mt-8 space-y-4">
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl border-l-4 border-indigo-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Volume in Centiliters</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Metric volume measurement</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-indigo-600 font-mono" id="output">--</div>
                                                <div class="text-sm text-gray-500 font-medium" id="unit-display">cL</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Complete Metric Volume Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Milliliters</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="mlOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Deciliters</h4>
                                                <div class="text-lg font-bold text-green-600 font-mono" id="dlOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Kiloliters</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="klOutput">--</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step-by-Step Conversion -->
                                    <div class="p-4 bg-gray-50 rounded-lg">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-2 text-center">Step-by-Step Conversion</h4>
                                        <div class="text-center text-sm text-gray-600" id="stepByStep">
                                            Enter a value to see the conversion steps
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Metric Volume Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 L = 100 cL</div>
                                        <div>• 1 L = 1000 mL</div>
                                        <div>• 1 cL = 10 mL</div>
                                        <div>• 1 kL = 1000 L</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Liters to Centiliters Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Metric System Advantages</h4>
                                    <p>The metric system uses base-10 conversions, making calculations simple and intuitive. Converting between liters and centiliters is straightforward: multiply by 100 to go from L to cL, divide by 100 to go from cL to L.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                                    <p>Centiliters are commonly used in cooking (especially in European recipes), beverage labeling, laboratory measurements, and pharmaceutical dosing where precision is important.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                                <p class="text-sm text-indigo-800">
                                    <strong>Metric Tip:</strong> The metric system's decimal nature makes mental conversions easy - just move the decimal point!
                                </p>
                            </div>
                        </div>

                        <!-- Common Volume Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Volume Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Small Bottle</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-volume="0.33">0.33 L</div>
                                    <div class="text-xs text-gray-500 mt-1">33 cL</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Wine Bottle</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-volume="0.75">0.75 L</div>
                                    <div class="text-xs text-gray-500 mt-1">75 cL</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Water Bottle</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-volume="1.5">1.5 L</div>
                                    <div class="text-xs text-gray-500 mt-1">150 cL</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Large Bottle</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-volume="2">2 L</div>
                                    <div class="text-xs text-gray-500 mt-1">200 cL</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputValue = document.getElementById('inputValue');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const conversionHint = document.getElementById('conversionHint');
                        const directionRadios = document.getElementsByName('direction');
                        const clearButton = document.getElementById('clearButton');
                        const output = document.getElementById('output');
                        const unitDisplay = document.getElementById('unit-display');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const mlOutput = document.getElementById('mlOutput');
                        const dlOutput = document.getElementById('dlOutput');
                        const klOutput = document.getElementById('klOutput');
                        const stepByStep = document.getElementById('stepByStep');

                        function formatNumber(num) {
                            if (num >= 1000000) {
                                return num.toExponential(4);
                            } else if (num >= 1000) {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 2 });
                            } else if (num >= 1) {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 4 });
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 6 });
                            }
                        }

                        function convert() {
                            const value = parseFloat(inputValue.value);
                            const direction = document.querySelector('input[name="direction"]:checked').value;

                            if (!isNaN(value) && value >= 0) {
                                let liters, centiliters;

                                if (direction === 'l-to-cl') {
                                    liters = value;
                                    centiliters = value * 100;
                                    
                                    resultTitle.textContent = 'Volume in Centiliters';
                                    resultDescription.textContent = 'Metric volume measurement';
                                    output.textContent = formatNumber(centiliters);
                                    unitDisplay.textContent = 'cL';
                                    
                                    stepByStep.innerHTML = `
                                        <div class="font-mono text-indigo-700">
                                            ${formatNumber(liters)} L × 100 = ${formatNumber(centiliters)} cL
                                        </div>
                                        <div class="text-xs mt-1">
                                            To convert liters to centiliters, multiply by 100
                                        </div>
                                    `;
                                } else {
                                    centiliters = value;
                                    liters = value / 100;
                                    
                                    resultTitle.textContent = 'Volume in Liters';
                                    resultDescription.textContent = 'Metric volume measurement';
                                    output.textContent = formatNumber(liters);
                                    unitDisplay.textContent = 'L';
                                    
                                    stepByStep.innerHTML = `
                                        <div class="font-mono text-indigo-700">
                                            ${formatNumber(centiliters)} cL ÷ 100 = ${formatNumber(liters)} L
                                        </div>
                                        <div class="text-xs mt-1">
                                            To convert centiliters to liters, divide by 100
                                        </div>
                                    `;
                                }

                                // Calculate all metric conversions based on liters
                                const milliliters = liters * 1000;
                                const deciliters = liters * 10;
                                const kiloliters = liters / 1000;

                                mlOutput.textContent = formatNumber(milliliters) + ' mL';
                                dlOutput.textContent = formatNumber(deciliters) + ' dL';
                                klOutput.textContent = formatNumber(kiloliters) + ' kL';
                            } else {
                                output.textContent = "--";
                                mlOutput.textContent = "--";
                                dlOutput.textContent = "--";
                                klOutput.textContent = "--";
                                stepByStep.textContent = "Enter a value to see the conversion steps";
                            }
                        }

                        function updateLabels() {
                            const direction = document.querySelector('input[name="direction"]:checked').value;

                            if (direction === 'l-to-cl') {
                                inputLabel.textContent = 'Enter Volume in Liters';
                                inputValue.placeholder = 'Enter volume (e.g., 2.5)';
                                inputUnit.textContent = 'L';
                                conversionHint.textContent = '1 liter = 100 centiliters';
                            } else {
                                inputLabel.textContent = 'Enter Volume in Centiliters';
                                inputValue.placeholder = 'Enter volume (e.g., 250)';
                                inputUnit.textContent = 'cL';
                                conversionHint.textContent = '100 centiliters = 1 liter';
                            }
                        }

                        function clearInput() {
                            inputValue.value = '';
                            convert();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        
                        directionRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateLabels();
                                convert();
                            });
                        });

                        clearButton.addEventListener('click', clearInput);

                        // Volume preset buttons
                        const volumePresets = document.querySelectorAll('.volume-preset');
                        volumePresets.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const direction = this.getAttribute('data-direction');
                                
                                // Set direction
                                document.querySelector(`input[value="${direction}"]`).checked = true;
                                updateLabels();
                                
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                volumePresets.forEach(btn => btn.classList.remove('bg-indigo-100', 'text-indigo-700'));
                                volumePresets.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-indigo-100', 'text-indigo-700');
                            });
                        });

                        // Add clickable functionality to example volumes
                        const exampleVolumes = document.querySelectorAll('[data-volume]');
                        exampleVolumes.forEach(element => {
                            element.addEventListener('click', function() {
                                const volumeValue = this.getAttribute('data-volume');
                                
                                // Set to l-to-cl mode
                                document.querySelector('input[value="l-to-cl"]').checked = true;
                                updateLabels();
                                
                                inputValue.value = volumeValue;
                                convert();
                                inputValue.focus();
                            });
                        });

                        // Initialize
                        inputValue.focus();
                        updateLabels();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearInput();
                            } else if (e.ctrlKey && e.key === 'd') {
                                e.preventDefault();
                                // Toggle direction
                                const currentDirection = document.querySelector('input[name="direction"]:checked').value;
                                const newDirection = currentDirection === 'l-to-cl' ? 'cl-to-l' : 'l-to-cl';
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
</x-tool-page-layout>
