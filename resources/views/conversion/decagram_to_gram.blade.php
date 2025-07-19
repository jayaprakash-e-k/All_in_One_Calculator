<x-app-layout 
    title="Decagram to Gram Converter - ConvertPro"
    description="Professional decagram to gram converter for metric weight conversions. Convert decagrams (dag) to grams (g) with precise calculations."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Decagram to Gram Converter']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-yellow-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Decagram to Gram Converter</h1>
                    <p class="text-gray-600">Convert decagrams to grams in the metric system</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Metric Weight Conversion</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Input Value -->
                            <div class="space-y-2">
                                <label for="decagram" class="block text-sm font-semibold text-gray-700">
                                    Enter Value in Decagrams
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="decagram" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter decagrams (e.g., 2.5)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">dag</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">1 decagram = 10 grams</p>
                            </div>

                            <!-- Conversion Direction -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Conversion Direction
                                </label>
                                <div class="grid grid-cols-2 gap-3">
                                    <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-yellow-300 transition-colors cursor-pointer">
                                        <input type="radio" name="direction" value="dag-to-g" class="text-yellow-600 focus:ring-yellow-500" checked>
                                        <span class="text-sm font-medium">Decagrams → Grams</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-yellow-300 transition-colors cursor-pointer">
                                        <input type="radio" name="direction" value="g-to-dag" class="text-yellow-600 focus:ring-yellow-500">
                                        <span class="text-sm font-medium">Grams → Decagrams</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Clear Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="clearButton"
                                    class="inline-flex items-center px-4 py-2 bg-yellow-100 hover:bg-yellow-200 text-yellow-700 font-medium rounded-lg transition-colors duration-200"
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
                            <div class="p-6 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl border-l-4 border-yellow-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Equivalent in Grams</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Metric weight conversion</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-yellow-600 font-mono" id="output">--</div>
                                        <div class="text-sm text-gray-500 font-medium" id="unit-display">g</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Metric Conversions -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Milligrams</h4>
                                        <div class="text-lg font-bold text-green-600 font-mono" id="mgOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Kilograms</h4>
                                        <div class="text-lg font-bold text-blue-600 font-mono" id="kgOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Ounces</h4>
                                        <div class="text-lg font-bold text-purple-600 font-mono" id="ozOutput">--</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Metric Weight System</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• 1 dag = 10 g</div>
                                <div>• 1 g = 1000 mg</div>
                                <div>• 1 kg = 100 dag</div>
                                <div>• 1 dag = 0.35 oz</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Decagram Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">What is a Decagram?</h4>
                            <p>A decagram (dag) is a metric unit of mass equal to 10 grams. It's part of the International System of Units (SI) and is commonly used in some European countries for food packaging and measurements.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                            <p>Used in cooking, nutrition labeling, laboratory measurements, and commercial food packaging where intermediate weight units between grams and kilograms are needed.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-yellow-50 rounded-lg border border-yellow-200">
                        <p class="text-sm text-yellow-800">
                            <strong>Metric Tip:</strong> Decagrams are particularly useful for portion control and recipe scaling in professional kitchens!
                        </p>
                    </div>
                </div>

                <!-- Common Weight Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Weight Examples</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Small Cookie</div>
                            <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-weight="1">1 dag</div>
                            <div class="text-xs text-gray-500 mt-1">10 grams</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Slice of Bread</div>
                            <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-weight="2.5">2.5 dag</div>
                            <div class="text-xs text-gray-500 mt-1">25 grams</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Chocolate Bar</div>
                            <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-weight="5">5 dag</div>
                            <div class="text-xs text-gray-500 mt-1">50 grams</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Small Apple</div>
                            <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-weight="15">15 dag</div>
                            <div class="text-xs text-gray-500 mt-1">150 grams</div>
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
                const decagramInput = document.getElementById('decagram');
                const directionRadios = document.getElementsByName('direction');
                const clearButton = document.getElementById('clearButton');
                const output = document.getElementById('output');
                const unitDisplay = document.getElementById('unit-display');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const mgOutput = document.getElementById('mgOutput');
                const kgOutput = document.getElementById('kgOutput');
                const ozOutput = document.getElementById('ozOutput');

                function formatNumber(num) {
                    if (num >= 1000000) {
                        return num.toExponential(4);
                    } else if (num >= 1000) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 2 });
                    } else {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 4 });
                    }
                }

                function convert() {
                    const value = parseFloat(decagramInput.value);
                    const direction = document.querySelector('input[name="direction"]:checked').value;

                    if (!isNaN(value) && value >= 0) {
                        let grams, decagrams;

                        if (direction === 'dag-to-g') {
                            decagrams = value;
                            grams = value * 10;
                            resultTitle.textContent = 'Equivalent in Grams';
                            resultDescription.textContent = 'Decagrams to grams conversion';
                            output.textContent = formatNumber(grams);
                            unitDisplay.textContent = 'g';
                        } else {
                            grams = value;
                            decagrams = value / 10;
                            resultTitle.textContent = 'Equivalent in Decagrams';
                            resultDescription.textContent = 'Grams to decagrams conversion';
                            output.textContent = formatNumber(decagrams);
                            unitDisplay.textContent = 'dag';
                        }

                        // Additional conversions (always from grams)
                        const milligrams = grams * 1000;
                        const kilograms = grams / 1000;
                        const ounces = grams * 0.035274;

                        mgOutput.textContent = formatNumber(milligrams) + ' mg';
                        kgOutput.textContent = formatNumber(kilograms) + ' kg';
                        ozOutput.textContent = formatNumber(ounces) + ' oz';
                    } else {
                        output.textContent = "--";
                        mgOutput.textContent = "--";
                        kgOutput.textContent = "--";
                        ozOutput.textContent = "--";
                    }
                }

                function updateLabels() {
                    const direction = document.querySelector('input[name="direction"]:checked').value;
                    const inputLabel = document.querySelector('label[for="decagram"]');
                    const placeholder = decagramInput.getAttribute('placeholder');

                    if (direction === 'dag-to-g') {
                        inputLabel.textContent = 'Enter Value in Decagrams';
                        decagramInput.placeholder = 'Enter decagrams (e.g., 2.5)';
                        document.querySelector('.absolute span').textContent = 'dag';
                    } else {
                        inputLabel.textContent = 'Enter Value in Grams';
                        decagramInput.placeholder = 'Enter grams (e.g., 25)';
                        document.querySelector('.absolute span').textContent = 'g';
                    }
                }

                function clearInput() {
                    decagramInput.value = '';
                    convert();
                    decagramInput.focus();
                }

                // Event listeners
                decagramInput.addEventListener('input', convert);
                directionRadios.forEach(radio => {
                    radio.addEventListener('change', () => {
                        updateLabels();
                        convert();
                    });
                });
                clearButton.addEventListener('click', clearInput);

                // Add clickable functionality to example weights
                const exampleWeights = document.querySelectorAll('[data-weight]');
                exampleWeights.forEach(element => {
                    element.addEventListener('click', function() {
                        const weightValue = this.getAttribute('data-weight');
                        
                        // Set to dag-to-g mode
                        document.querySelector('input[value="dag-to-g"]').checked = true;
                        updateLabels();
                        
                        decagramInput.value = weightValue;
                        convert();
                        decagramInput.focus();
                    });
                });

                // Initialize
                decagramInput.focus();
                updateLabels();

                // Keyboard shortcuts
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        clearInput();
                    } else if (e.ctrlKey && e.key === 'd') {
                        e.preventDefault();
                        // Toggle direction
                        const currentDirection = document.querySelector('input[name="direction"]:checked').value;
                        const newDirection = currentDirection === 'dag-to-g' ? 'g-to-dag' : 'dag-to-g';
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