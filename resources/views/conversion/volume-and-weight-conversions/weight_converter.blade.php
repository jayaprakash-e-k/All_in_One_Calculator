<x-tool-page-layout
    title="Weight Converter - ConvertPro"
    description="Professional weight converter to convert between grams, pounds, kilograms, ounces, and other weight units. Fast and accurate conversions."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Mass & Weight Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Input Value -->
                                                                            <div class="space-y-2">
                                                                                <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                                                                    Enter Weight Value
                                                                                </label>
                                                                                <input 
                                                                                    type="number" 
                                                                                    id="inputValue" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                    placeholder="Enter weight (e.g., 50)"
                                                                                    step="any"
                                                                                    min="0"
                                                                                >
                                                                            </div>

                                                                            <!-- From and To Units -->
                                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                                <div class="space-y-2">
                                                                                    <label for="fromUnit" class="block text-sm font-semibold text-gray-700">
                                                                                        From Unit
                                                                                    </label>
                                                                                    <select 
                                                                                        id="fromUnit" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                    >
                                                                                        <option value="mg">Milligram (mg)</option>
                                                                                        <option value="g" selected>Gram (g)</option>
                                                                                        <option value="kg">Kilogram (kg)</option>
                                                                                        <option value="oz">Ounce (oz)</option>
                                                                                        <option value="lb">Pound (lb)</option>
                                                                                        <option value="t">Tonne (t)</option>
                                                                                        <option value="st">Stone (st)</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="space-y-2">
                                                                                    <label for="toUnit" class="block text-sm font-semibold text-gray-700">
                                                                                        To Unit
                                                                                    </label>
                                                                                    <select 
                                                                                        id="toUnit" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                    >
                                                                                        <option value="mg">Milligram (mg)</option>
                                                                                        <option value="g">Gram (g)</option>
                                                                                        <option value="kg" selected>Kilogram (kg)</option>
                                                                                        <option value="oz">Ounce (oz)</option>
                                                                                        <option value="lb">Pound (lb)</option>
                                                                                        <option value="t">Tonne (t)</option>
                                                                                        <option value="st">Stone (st)</option>
                                                                                    </select>
                                                                                </div>
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
                                                                                    Swap Units
                                                                                </button>
                                                                            </div>

                                                                        </form>
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Result Display -->
                                                                        <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border-l-4 border-indigo-500">
                                                                            <div class="flex items-center justify-between">
                                                                                <div>
                                                                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Weight</h3>
                                                                                    <p class="text-sm text-gray-600">Real-time conversion result</p>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <div class="text-2xl font-bold text-indigo-600 font-mono" id="output">--</div>
                                                                                    <div class="text-sm text-gray-500 font-medium" id="unit-display">Select units</div>
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
                                                        <div>• 1 kg = 1000 g</div>
                                                        <div>• 1 lb = 16 oz</div>
                                                        <div>• 1 kg = 2.205 lb</div>
                                                        <div>• 1 oz = 28.35 g</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Weight Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Mass vs Weight</h4>
                                    <p>While technically different (mass is constant, weight varies with gravity), in everyday use these terms are often interchangeable for practical measurements and conversions.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                                    <p>Essential for cooking, shipping, scientific measurements, medical dosages, and international trade where different unit systems are used.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                                <p class="text-sm text-indigo-800">
                                    <strong>Pro Tip:</strong> For precise scientific work, always consider whether you need mass (kg) or weight (Newtons) measurements!
                                </p>
                            </div>
                        </div>

                        <!-- Common Weight Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Weight Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Paper Clip</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-weight="1" data-unit="g">1 g</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Apple</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-weight="200" data-unit="g">200 g</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Bag of Sugar</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-weight="1" data-unit="kg">1 kg</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Average Person</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-weight="70" data-unit="kg">70 kg</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputValue = document.getElementById('inputValue');
                        const fromUnit = document.getElementById('fromUnit');
                        const toUnit = document.getElementById('toUnit');
                        const swapButton = document.getElementById('swapButton');
                        const output = document.getElementById('output');
                        const unitDisplay = document.getElementById('unit-display');

                        const conversionRates = {
                            mg: { toGrams: 0.001, symbol: 'mg', name: 'Milligrams' },
                            g: { toGrams: 1, symbol: 'g', name: 'Grams' },
                            kg: { toGrams: 1000, symbol: 'kg', name: 'Kilograms' },
                            oz: { toGrams: 28.3495, symbol: 'oz', name: 'Ounces' },
                            lb: { toGrams: 453.592, symbol: 'lb', name: 'Pounds' },
                            t: { toGrams: 1000000, symbol: 't', name: 'Tonnes' },
                            st: { toGrams: 6350.29, symbol: 'st', name: 'Stone' }
                        };

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

                        function convertWeight() {
                            const value = parseFloat(inputValue.value);
                            const fromUnitValue = fromUnit.value;
                            const toUnitValue = toUnit.value;

                            if (!isNaN(value) && value >= 0) {
                                const grams = value * conversionRates[fromUnitValue].toGrams;
                                const result = grams / conversionRates[toUnitValue].toGrams;
                                
                                output.textContent = formatNumber(result);
                                unitDisplay.textContent = conversionRates[toUnitValue].symbol;
                            } else {
                                output.textContent = "--";
                                unitDisplay.textContent = "Select units";
                            }
                        }

                        function swapUnits() {
                            const fromValue = fromUnit.value;
                            const toValue = toUnit.value;
                            
                            fromUnit.value = toValue;
                            toUnit.value = fromValue;
                            
                            convertWeight();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convertWeight);
                        fromUnit.addEventListener('change', convertWeight);
                        toUnit.addEventListener('change', convertWeight);
                        swapButton.addEventListener('click', swapUnits);

                        // Add clickable functionality to example weights
                        const exampleWeights = document.querySelectorAll('[data-weight]');
                        exampleWeights.forEach(element => {
                            element.addEventListener('click', function() {
                                const weightValue = this.getAttribute('data-weight');
                                const unitValue = this.getAttribute('data-unit');
                                
                                inputValue.value = weightValue;
                                fromUnit.value = unitValue;
                                convertWeight();
                                inputValue.focus();
                            });
                        });

                        // Initialize
                        inputValue.focus();
                        convertWeight();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                inputValue.value = '';
                                convertWeight();
                                inputValue.focus();
                            } else if (e.ctrlKey && e.key === 's') {
                                e.preventDefault();
                                swapUnits();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
