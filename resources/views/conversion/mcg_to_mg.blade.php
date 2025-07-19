<x-app-layout 
    title="Micrograms to Milligrams Converter - ConvertPro"
    description="Professional micrograms to milligrams converter for precise weight conversions. Convert mcg to mg with high precision for various applications."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Micrograms to Milligrams Converter']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-pink-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-pink-100 rounded-full mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Micrograms to Milligrams Converter</h1>
                    <p class="text-gray-600">Convert between small weight measurements</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-pink-500 to-pink-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Precision Weight Conversion</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Input Value -->
                            <div class="space-y-2">
                                <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                    Enter Weight in Micrograms
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="inputValue" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter weight (e.g., 5000)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium" id="inputUnit">mcg</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1" id="conversionHint">1 milligram = 1000 micrograms</p>
                            </div>

                            <!-- Conversion Direction -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Conversion Direction
                                </label>
                                <div class="grid grid-cols-2 gap-3">
                                    <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-pink-300 transition-colors cursor-pointer">
                                        <input type="radio" name="direction" value="mcg-to-mg" class="text-pink-600 focus:ring-pink-500" checked>
                                        <span class="text-sm font-medium">mcg → mg</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-pink-300 transition-colors cursor-pointer">
                                        <input type="radio" name="direction" value="mg-to-mcg" class="text-pink-600 focus:ring-pink-500">
                                        <span class="text-sm font-medium">mg → mcg</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Precision Level -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Precision Level
                                </label>
                                <div class="grid grid-cols-3 gap-3">
                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-pink-300 transition-colors cursor-pointer">
                                        <input type="radio" name="precision" value="3" class="text-pink-600 focus:ring-pink-500" checked>
                                        <span class="text-xs font-medium">3 decimals</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-pink-300 transition-colors cursor-pointer">
                                        <input type="radio" name="precision" value="6" class="text-pink-600 focus:ring-pink-500">
                                        <span class="text-xs font-medium">6 decimals</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-pink-300 transition-colors cursor-pointer">
                                        <input type="radio" name="precision" value="9" class="text-pink-600 focus:ring-pink-500">
                                        <span class="text-xs font-medium">9 decimals</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Common Weight Presets -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Common Weight Values
                                </label>
                                <div class="grid grid-cols-4 gap-2">
                                    <button type="button" class="weight-preset px-3 py-2 text-sm bg-gray-100 hover:bg-pink-100 text-gray-700 hover:text-pink-700 rounded-lg transition-colors" data-value="100" data-direction="mcg-to-mg">100 mcg</button>
                                    <button type="button" class="weight-preset px-3 py-2 text-sm bg-gray-100 hover:bg-pink-100 text-gray-700 hover:text-pink-700 rounded-lg transition-colors" data-value="500" data-direction="mcg-to-mg">500 mcg</button>
                                    <button type="button" class="weight-preset px-3 py-2 text-sm bg-gray-100 hover:bg-pink-100 text-gray-700 hover:text-pink-700 rounded-lg transition-colors" data-value="1000" data-direction="mcg-to-mg">1000 mcg</button>
                                    <button type="button" class="weight-preset px-3 py-2 text-sm bg-gray-100 hover:bg-pink-100 text-gray-700 hover:text-pink-700 rounded-lg transition-colors" data-value="5000" data-direction="mcg-to-mg">5000 mcg</button>
                                </div>
                            </div>

                            <!-- Clear Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="clearButton"
                                    class="inline-flex items-center px-4 py-2 bg-pink-100 hover:bg-pink-200 text-pink-700 font-medium rounded-lg transition-colors duration-200"
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
                            <div class="p-6 bg-gradient-to-r from-pink-50 to-emerald-50 rounded-xl border-l-4 border-pink-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Weight in Milligrams</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Metric weight measurement</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-pink-600 font-mono" id="output">--</div>
                                        <div class="text-sm text-gray-500 font-medium" id="unit-display">mg</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Weight Conversions -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Grams</h4>
                                        <div class="text-lg font-bold text-blue-600 font-mono" id="gramsOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Nanograms</h4>
                                        <div class="text-lg font-bold text-purple-600 font-mono" id="nanogramsOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Kilograms</h4>
                                        <div class="text-lg font-bold text-orange-600 font-mono" id="kilogramsOutput">--</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step-by-Step Calculation -->
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="text-sm font-semibold text-gray-700 mb-2 text-center">Step-by-Step Calculation</h4>
                                <div class="text-center text-sm text-gray-600 font-mono" id="stepByStep">
                                    Enter a value to see the calculation steps
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Weight Conversion Reference</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• 1 mg = 1000 mcg</div>
                                <div>• 1 g = 1,000,000 mcg</div>
                                <div>• 1 mcg = 1000 ng</div>
                                <div>• 1 kg = 1,000,000,000 mcg</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Micrograms to Milligrams Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Precision Matters</h4>
                            <p>Converting between micrograms and milligrams requires precision as these are very small units. This converter offers multiple decimal precision levels to meet various accuracy requirements.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                            <p>Used in laboratories, manufacturing, quality control, research, and any application requiring precise measurement of very small quantities where accuracy is essential.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-pink-50 rounded-lg border border-pink-200">
                        <p class="text-sm text-pink-800">
                            <strong>Precision Note:</strong> Choose the appropriate decimal precision based on your accuracy requirements!
                        </p>
                    </div>
                </div>

                <!-- Common Weight Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Small Weight Examples</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Dust Particle</div>
                            <div class="text-pink-600 cursor-pointer hover:text-pink-800 transition-colors" data-weight="50">50 mcg</div>
                            <div class="text-xs text-gray-500 mt-1">0.05 mg</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Small Seed</div>
                            <div class="text-pink-600 cursor-pointer hover:text-pink-800 transition-colors" data-weight="200">200 mcg</div>
                            <div class="text-xs text-gray-500 mt-1">0.2 mg</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Tiny Crystal</div>
                            <div class="text-pink-600 cursor-pointer hover:text-pink-800 transition-colors" data-weight="750">750 mcg</div>
                            <div class="text-xs text-gray-500 mt-1">0.75 mg</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Fine Powder</div>
                            <div class="text-pink-600 cursor-pointer hover:text-pink-800 transition-colors" data-weight="2000">2000 mcg</div>
                            <div class="text-xs text-gray-500 mt-1">2 mg</div>
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
                const inputValue = document.getElementById('inputValue');
                const inputLabel = document.getElementById('inputLabel');
                const inputUnit = document.getElementById('inputUnit');
                const conversionHint = document.getElementById('conversionHint');
                const directionRadios = document.getElementsByName('direction');
                const precisionRadios = document.getElementsByName('precision');
                const clearButton = document.getElementById('clearButton');
                const output = document.getElementById('output');
                const unitDisplay = document.getElementById('unit-display');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const gramsOutput = document.getElementById('gramsOutput');
                const nanogramsOutput = document.getElementById('nanogramsOutput');
                const kilogramsOutput = document.getElementById('kilogramsOutput');
                const stepByStep = document.getElementById('stepByStep');

                function getPrecision() {
                    return parseInt(document.querySelector('input[name="precision"]:checked').value);
                }

                function formatNumber(num, precision = null) {
                    const decimals = precision || getPrecision();
                    if (num >= 1000000) {
                        return num.toExponential(decimals);
                    }
                    return parseFloat(num.toFixed(decimals));
                }

                function convert() {
                    const value = parseFloat(inputValue.value);
                    const direction = document.querySelector('input[name="direction"]:checked').value;

                    if (!isNaN(value) && value >= 0) {
                        let mcg, mg;

                        if (direction === 'mcg-to-mg') {
                            mcg = value;
                            mg = value / 1000;
                            
                            resultTitle.textContent = 'Weight in Milligrams';
                            resultDescription.textContent = 'Metric weight measurement';
                            output.textContent = formatNumber(mg);
                            unitDisplay.textContent = 'mg';
                            
                            stepByStep.textContent = `${formatNumber(mcg)} mcg ÷ 1000 = ${formatNumber(mg)} mg`;
                        } else {
                            mg = value;
                            mcg = value * 1000;
                            
                            resultTitle.textContent = 'Weight in Micrograms';
                            resultDescription.textContent = 'Metric weight measurement';
                            output.textContent = formatNumber(mcg);
                            unitDisplay.textContent = 'mcg';
                            
                            stepByStep.textContent = `${formatNumber(mg)} mg × 1000 = ${formatNumber(mcg)} mcg`;
                        }

                        // Additional conversions (always based on mcg)
                        const grams = mcg / 1000000;
                        const nanograms = mcg * 1000;
                        const kilograms = mcg / 1000000000;

                        gramsOutput.textContent = formatNumber(grams) + ' g';
                        nanogramsOutput.textContent = formatNumber(nanograms) + ' ng';
                        kilogramsOutput.textContent = formatNumber(kilograms, 9) + ' kg';
                    } else {
                        output.textContent = "--";
                        gramsOutput.textContent = "--";
                        nanogramsOutput.textContent = "--";
                        kilogramsOutput.textContent = "--";
                        stepByStep.textContent = "Enter a value to see the calculation steps";
                    }
                }

                function updateLabels() {
                    const direction = document.querySelector('input[name="direction"]:checked').value;

                    if (direction === 'mcg-to-mg') {
                        inputLabel.textContent = 'Enter Weight in Micrograms';
                        inputValue.placeholder = 'Enter weight (e.g., 5000)';
                        inputUnit.textContent = 'mcg';
                        conversionHint.textContent = '1 milligram = 1000 micrograms';
                    } else {
                        inputLabel.textContent = 'Enter Weight in Milligrams';
                        inputValue.placeholder = 'Enter weight (e.g., 5)';
                        inputUnit.textContent = 'mg';
                        conversionHint.textContent = '1 milligram = 1000 micrograms';
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

                precisionRadios.forEach(radio => {
                    radio.addEventListener('change', convert);
                });

                clearButton.addEventListener('click', clearInput);

                // Weight preset buttons
                const weightPresets = document.querySelectorAll('.weight-preset');
                weightPresets.forEach(button => {
                    button.addEventListener('click', function() {
                        const value = this.getAttribute('data-value');
                        const direction = this.getAttribute('data-direction');
                        
                        // Set direction
                        document.querySelector(`input[value="${direction}"]`).checked = true;
                        updateLabels();
                        
                        inputValue.value = value;
                        convert();
                        
                        // Update button styles
                        weightPresets.forEach(btn => btn.classList.remove('bg-pink-100', 'text-pink-700'));
                        weightPresets.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                        this.classList.remove('bg-gray-100', 'text-gray-700');
                        this.classList.add('bg-pink-100', 'text-pink-700');
                    });
                });

                // Add clickable functionality to example weights
                const exampleWeights = document.querySelectorAll('[data-weight]');
                exampleWeights.forEach(element => {
                    element.addEventListener('click', function() {
                        const weightValue = this.getAttribute('data-weight');
                        
                        // Set to mcg-to-mg mode
                        document.querySelector('input[value="mcg-to-mg"]').checked = true;
                        updateLabels();
                        
                        inputValue.value = weightValue;
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
                        const newDirection = currentDirection === 'mcg-to-mg' ? 'mg-to-mcg' : 'mcg-to-mg';
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