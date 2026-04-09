<x-tool-page-layout
    title="Volume Converter - ConvertPro"
    description="Professional volume converter to convert between liters, gallons, cubic units, and other volume measurements. Fast and accurate conversions."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Volume & Capacity Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Input Value -->
                                                                            <div class="space-y-2">
                                                                                <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                                                                    Enter Volume Value
                                                                                </label>
                                                                                <input 
                                                                                    type="number" 
                                                                                    id="inputValue" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                    placeholder="Enter volume value"
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
                                                                                        <option value="ml">Milliliters (mL)</option>
                                                                                        <option value="l" selected>Liters (L)</option>
                                                                                        <option value="m3">Cubic Meters (m³)</option>
                                                                                        <option value="cm3">Cubic Centimeters (cm³)</option>
                                                                                        <option value="in3">Cubic Inches (in³)</option>
                                                                                        <option value="ft3">Cubic Feet (ft³)</option>
                                                                                        <option value="yd3">Cubic Yards (yd³)</option>
                                                                                        <option value="gal">Gallons (US)</option>
                                                                                        <option value="qt">Quarts (US)</option>
                                                                                        <option value="pt">Pints (US)</option>
                                                                                        <option value="oz">Fluid Ounces (US)</option>
                                                                                        <option value="cup">Cups (US)</option>
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
                                                                                        <option value="ml">Milliliters (mL)</option>
                                                                                        <option value="l">Liters (L)</option>
                                                                                        <option value="m3">Cubic Meters (m³)</option>
                                                                                        <option value="cm3">Cubic Centimeters (cm³)</option>
                                                                                        <option value="in3">Cubic Inches (in³)</option>
                                                                                        <option value="ft3">Cubic Feet (ft³)</option>
                                                                                        <option value="yd3">Cubic Yards (yd³)</option>
                                                                                        <option value="gal" selected>Gallons (US)</option>
                                                                                        <option value="qt">Quarts (US)</option>
                                                                                        <option value="pt">Pints (US)</option>
                                                                                        <option value="oz">Fluid Ounces (US)</option>
                                                                                        <option value="cup">Cups (US)</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Swap Button -->
                                                                            <div class="flex justify-center">
                                                                                <button 
                                                                                    type="button" 
                                                                                    id="swapButton"
                                                                                    class="inline-flex items-center px-4 py-2 bg-cyan-100 hover:bg-cyan-200 text-cyan-700 font-medium rounded-lg transition-colors duration-200"
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
                                                                        <div class="mt-8 p-6 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl border-l-4 border-cyan-500">
                                                                            <div class="flex items-center justify-between">
                                                                                <div>
                                                                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Volume</h3>
                                                                                    <p class="text-sm text-gray-600">Real-time conversion result</p>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <div class="text-2xl font-bold text-cyan-600 font-mono" id="output">--</div>
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
                                                        <div>• 1 L = 1000 mL</div>
                                                        <div>• 1 gal = 3.785 L</div>
                                                        <div>• 1 ft³ = 28.32 L</div>
                                                        <div>• 1 cup = 240 mL</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Volume Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Volume vs Capacity</h4>
                                    <p>Volume refers to the amount of space occupied by matter, while capacity refers to the amount a container can hold. Both use the same units for practical measurements.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                                    <p>Essential for cooking, chemistry, engineering, construction, and everyday tasks involving liquids, gases, or bulk materials.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-cyan-50 rounded-lg border border-cyan-200">
                                <p class="text-sm text-cyan-800">
                                    <strong>Cooking Tip:</strong> US cooking measurements differ from metric - 1 US cup = 240 mL, while 1 metric cup = 250 mL!
                                </p>
                            </div>
                        </div>

                        <!-- Common Volume Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Volume Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Teaspoon</div>
                                    <div class="text-cyan-600 cursor-pointer hover:text-cyan-800 transition-colors" data-volume="5" data-unit="ml">5 mL</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Water Bottle</div>
                                    <div class="text-cyan-600 cursor-pointer hover:text-cyan-800 transition-colors" data-volume="500" data-unit="ml">500 mL</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Milk Jug</div>
                                    <div class="text-cyan-600 cursor-pointer hover:text-cyan-800 transition-colors" data-volume="1" data-unit="gal">1 gallon</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Swimming Pool</div>
                                    <div class="text-cyan-600 cursor-pointer hover:text-cyan-800 transition-colors" data-volume="50" data-unit="m3">50 m³</div>
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

                        const toLiter = {
                            ml: { rate: 0.001, symbol: 'mL' },
                            l: { rate: 1, symbol: 'L' },
                            m3: { rate: 1000, symbol: 'm³' },
                            cm3: { rate: 0.001, symbol: 'cm³' },
                            in3: { rate: 0.0163871, symbol: 'in³' },
                            ft3: { rate: 28.3168, symbol: 'ft³' },
                            yd3: { rate: 764.555, symbol: 'yd³' },
                            gal: { rate: 3.78541, symbol: 'gal' },
                            qt: { rate: 0.946353, symbol: 'qt' },
                            pt: { rate: 0.473176, symbol: 'pt' },
                            oz: { rate: 0.0295735, symbol: 'fl oz' },
                            cup: { rate: 0.24, symbol: 'cups' }
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

                        function convert() {
                            const value = parseFloat(inputValue.value);
                            const from = fromUnit.value;
                            const to = toUnit.value;

                            if (!isNaN(value) && value >= 0) {
                                const inLiters = value * toLiter[from].rate;
                                const converted = inLiters / toLiter[to].rate;
                                
                                output.textContent = formatNumber(converted);
                                unitDisplay.textContent = toLiter[to].symbol;
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
                            
                            convert();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        fromUnit.addEventListener('change', convert);
                        toUnit.addEventListener('change', convert);
                        swapButton.addEventListener('click', swapUnits);

                        // Add clickable functionality to example volumes
                        const exampleVolumes = document.querySelectorAll('[data-volume]');
                        exampleVolumes.forEach(element => {
                            element.addEventListener('click', function() {
                                const volumeValue = this.getAttribute('data-volume');
                                const unitValue = this.getAttribute('data-unit');
                                
                                inputValue.value = volumeValue;
                                fromUnit.value = unitValue;
                                convert();
                                inputValue.focus();
                            });
                        });

                        // Initialize
                        inputValue.focus();
                        convert();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                inputValue.value = '';
                                convert();
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
