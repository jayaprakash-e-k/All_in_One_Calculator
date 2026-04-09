<x-tool-page-layout
    title="Gallon Calculator - ConvertPro"
    description="Professional gallon calculator to convert liters, quarts, pints, and fluid ounces to gallons. Comprehensive gallon conversions for all your needs."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Comprehensive Gallon Conversions</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                            Enter Volume Value
                                        </label>
                                        <input 
                                            type="number" 
                                            id="inputValue" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                            placeholder="Enter volume (e.g., 10)"
                                            step="any"
                                            min="0"
                                        >
                                    </div>

                                    <!-- Unit Selection -->
                                    <div class="space-y-2">
                                        <label for="unit" class="block text-sm font-semibold text-gray-700">
                                            From Unit
                                        </label>
                                        <select 
                                            id="unit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="liter">Liters (L)</option>
                                            <option value="quart">Quarts (qt)</option>
                                            <option value="pint">Pints (pt)</option>
                                            <option value="oz">Fluid Ounces (fl oz)</option>
                                            <option value="cup">Cups</option>
                                            <option value="ml">Milliliters (mL)</option>
                                            <option value="m3">Cubic Meters (m³)</option>
                                            <option value="ft3">Cubic Feet (ft³)</option>
                                            <option value="in3">Cubic Inches (in³)</option>
                                        </select>
                                    </div>

                                    <!-- Gallon Type Selection -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Gallon Standard
                                        </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="gallonType" value="us" class="text-indigo-600 focus:ring-indigo-500" checked>
                                                <div>
                                                    <span class="text-sm font-medium">US Gallon</span>
                                                    <div class="text-xs text-gray-500">3.785 L</div>
                                                </div>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="gallonType" value="imperial" class="text-indigo-600 focus:ring-indigo-500">
                                                <div>
                                                    <span class="text-sm font-medium">Imperial Gallon</span>
                                                    <div class="text-xs text-gray-500">4.546 L</div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Quick Volume Presets -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Volume Presets
                                        </label>
                                        <div class="grid grid-cols-4 gap-2">
                                            <button type="button" class="volume-preset px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="1" data-unit="liter">1 L</button>
                                            <button type="button" class="volume-preset px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="4" data-unit="quart">4 qt</button>
                                            <button type="button" class="volume-preset px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="8" data-unit="pint">8 pt</button>
                                            <button type="button" class="volume-preset px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="128" data-unit="oz">128 oz</button>
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Gallon Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border-l-4 border-indigo-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Result in US Gallons</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Volume conversion to gallons</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-indigo-600 font-mono" id="output">--</div>
                                                <div class="text-sm text-gray-500 font-medium" id="unit-display">gal</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Liters</h4>
                                                <div class="text-xl font-bold text-blue-600 font-mono" id="litersOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Quarts</h4>
                                                <div class="text-xl font-bold text-green-600 font-mono" id="quartsOutput">--</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Breakdown Display -->
                                    <div class="p-4 bg-gray-50 rounded-lg">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-2 text-center">Volume Breakdown</h4>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-xs text-gray-600">
                                            <div class="text-center">
                                                <div class="font-medium" id="gallonBreakdown">-- gal</div>
                                                <div>Gallons</div>
                                            </div>
                                            <div class="text-center">
                                                <div class="font-medium" id="quartBreakdown">-- qt</div>
                                                <div>Quarts</div>
                                            </div>
                                            <div class="text-center">
                                                <div class="font-medium" id="pintBreakdown">-- pt</div>
                                                <div>Pints</div>
                                            </div>
                                            <div class="text-center">
                                                <div class="font-medium" id="ozBreakdown">-- fl oz</div>
                                                <div>Fl Ounces</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Gallon Conversion Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 US gal = 3.785 L</div>
                                        <div>• 1 Imperial gal = 4.546 L</div>
                                        <div>• 1 gal = 4 quarts</div>
                                        <div>• 1 gal = 128 fl oz</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Gallon Conversions</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">US vs Imperial Gallons</h4>
                                    <p>The US gallon (3.785 L) is smaller than the Imperial gallon (4.546 L) used in the UK and Canada. This difference is important for accurate fuel efficiency calculations and international trade.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                                    <p>Essential for fuel calculations, beverage production, chemical mixing, swimming pool maintenance, and any application requiring large volume measurements.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                                <p class="text-sm text-indigo-800">
                                    <strong>Fuel Tip:</strong> When comparing fuel efficiency internationally, remember that US MPG uses smaller gallons than Imperial MPG!
                                </p>
                            </div>
                        </div>

                        <!-- Common Volume Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Volume Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Milk Jug</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-volume="3.785" data-unit="liter">3.785 L</div>
                                    <div class="text-xs text-gray-500 mt-1">1 US gallon</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Large Soda</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-volume="2" data-unit="liter">2 L</div>
                                    <div class="text-xs text-gray-500 mt-1">~0.53 gallons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Car Gas Tank</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-volume="60" data-unit="liter">60 L</div>
                                    <div class="text-xs text-gray-500 mt-1">~15.9 gallons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Hot Tub</div>
                                    <div class="text-indigo-600 cursor-pointer hover:text-indigo-800 transition-colors" data-volume="1500" data-unit="liter">1500 L</div>
                                    <div class="text-xs text-gray-500 mt-1">~396 gallons</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputValue = document.getElementById('inputValue');
                        const unit = document.getElementById('unit');
                        const gallonTypeRadios = document.getElementsByName('gallonType');
                        const clearButton = document.getElementById('clearButton');
                        const output = document.getElementById('output');
                        const unitDisplay = document.getElementById('unit-display');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const litersOutput = document.getElementById('litersOutput');
                        const quartsOutput = document.getElementById('quartsOutput');
                        const gallonBreakdown = document.getElementById('gallonBreakdown');
                        const quartBreakdown = document.getElementById('quartBreakdown');
                        const pintBreakdown = document.getElementById('pintBreakdown');
                        const ozBreakdown = document.getElementById('ozBreakdown');

                        // Conversion rates to US gallons
                        const toGallon = {
                            liter: 1 / 3.78541,
                            quart: 1 / 4,
                            pint: 1 / 8,
                            oz: 1 / 128,
                            cup: 1 / 16,
                            ml: 1 / 3785.41,
                            m3: 264.172,
                            ft3: 7.48052,
                            in3: 1 / 231
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

                        function getGallonType() {
                            return document.querySelector('input[name="gallonType"]:checked').value;
                        }

                        function convert() {
                            const val = parseFloat(inputValue.value);
                            const selectedUnit = unit.value;
                            const gallonType = getGallonType();

                            if (!isNaN(val) && val >= 0) {
                                // Convert to US gallons first
                                let usGallons = val * toGallon[selectedUnit];
                                
                                // Convert to selected gallon type if needed
                                let result = usGallons;
                                if (gallonType === 'imperial') {
                                    result = usGallons * (3.78541 / 4.54609); // Convert US to Imperial
                                    resultTitle.textContent = 'Result in Imperial Gallons';
                                    unitDisplay.textContent = 'imp gal';
                                } else {
                                    resultTitle.textContent = 'Result in US Gallons';
                                    unitDisplay.textContent = 'US gal';
                                }

                                output.textContent = formatNumber(result);

                                // Additional conversions (always in liters and US quarts for consistency)
                                const liters = usGallons * 3.78541;
                                const quarts = usGallons * 4;

                                litersOutput.textContent = formatNumber(liters) + ' L';
                                quartsOutput.textContent = formatNumber(quarts) + ' qt';

                                // Volume breakdown (based on US gallon)
                                const totalOz = usGallons * 128;
                                const wholeGallons = Math.floor(usGallons);
                                const remainingOz = totalOz - (wholeGallons * 128);
                                const wholeQuarts = Math.floor(remainingOz / 32);
                                const remainingOz2 = remainingOz - (wholeQuarts * 32);
                                const wholePints = Math.floor(remainingOz2 / 16);
                                const finalOz = remainingOz2 - (wholePints * 16);

                                gallonBreakdown.textContent = wholeGallons + ' gal';
                                quartBreakdown.textContent = wholeQuarts + ' qt';
                                pintBreakdown.textContent = wholePints + ' pt';
                                ozBreakdown.textContent = Math.round(finalOz) + ' fl oz';

                            } else {
                                output.textContent = "--";
                                litersOutput.textContent = "--";
                                quartsOutput.textContent = "--";
                                gallonBreakdown.textContent = "-- gal";
                                quartBreakdown.textContent = "-- qt";
                                pintBreakdown.textContent = "-- pt";
                                ozBreakdown.textContent = "-- fl oz";
                            }
                        }

                        function clearInput() {
                            inputValue.value = '';
                            convert();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        unit.addEventListener('change', convert);
                        
                        gallonTypeRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

                        clearButton.addEventListener('click', clearInput);

                        // Volume preset buttons
                        const volumePresets = document.querySelectorAll('.volume-preset');
                        volumePresets.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const unitValue = this.getAttribute('data-unit');
                                
                                inputValue.value = value;
                                unit.value = unitValue;
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
                                const unitValue = this.getAttribute('data-unit');
                                
                                inputValue.value = volumeValue;
                                unit.value = unitValue;
                                convert();
                                inputValue.focus();
                            });
                        });

                        // Initialize
                        inputValue.focus();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearInput();
                            } else if (e.ctrlKey && e.key === 'g') {
                                e.preventDefault();
                                // Toggle gallon type
                                const currentType = getGallonType();
                                const newType = currentType === 'us' ? 'imperial' : 'us';
                                document.querySelector(`input[value="${newType}"]`).checked = true;
                                convert();
                            }
                        });

                        // Initialize conversion
                        convert();
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
