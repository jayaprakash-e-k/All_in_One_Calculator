<x-app-layout 
    title="Acreage Calculator - ConvertPro"
    description="Professional acreage calculator to convert acres to square meters, hectares, square feet, and square yards. Accurate and fast conversions for land measurement."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Acreage Calculator']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-yellow-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Acreage Calculator</h1>
                    <p class="text-gray-600">Convert acres to various area units with precision</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Land Area Conversion</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Input Value -->
                            <div class="space-y-2">
                                <label for="value" class="block text-sm font-semibold text-gray-700">
                                    Area in Acres
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="value" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter acres (e.g., 5.5)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">acres</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Convert To -->
                            <div class="space-y-2">
                                <label for="to" class="block text-sm font-semibold text-gray-700">
                                    Convert To
                                </label>
                                <select 
                                    id="to" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="sqm">Square Meters (m²)</option>
                                    <option value="hectare">Hectares (ha)</option>
                                    <option value="sqft">Square Feet (ft²)</option>
                                    <option value="sqyd">Square Yards (yd²)</option>
                                    <option value="sqkm">Square Kilometers (km²)</option>
                                    <option value="sqin">Square Inches (in²)</option>
                                    <option value="ares">Ares (a)</option>
                                </select>
                            </div>

                        </form>

                        <!-- Result Display -->
                        <div class="mt-8 p-6 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl border-l-4 border-yellow-500">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h3>
                                    <p class="text-sm text-gray-600">Real-time conversion result</p>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-yellow-600 font-mono" id="output">--</div>
                                    <div class="text-sm text-gray-500 font-medium" id="unit-display">Select unit</div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Quick Reference</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• 1 acre = 4,047 m²</div>
                                <div>• 1 acre = 0.405 hectares</div>
                                <div>• 1 acre = 43,560 ft²</div>
                                <div>• 1 acre = 4,840 yd²</div>
                                <div>• 1 acre = 40.47 ares</div>
                                <div>• 1 acre = 0.004047 km²</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Acreage Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">What is an Acre?</h4>
                            <p>An acre is a unit of area measurement equal to 43,560 square feet or 4,047 square meters. It's commonly used in the United States and United Kingdom for measuring land parcels and agricultural areas.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Common Uses</h4>
                            <p>Acreage calculations are essential for real estate transactions, farming operations, land development projects, property assessment, and agricultural planning and zoning.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-yellow-50 rounded-lg border border-yellow-200">
                        <p class="text-sm text-yellow-800">
                            <strong>Historical Fact:</strong> An acre was originally defined as the amount of land that could be plowed by one ox in one day!
                        </p>
                    </div>
                </div>

                <!-- Common Land Sizes -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Land Size Examples</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Small Lot</div>
                            <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-acres="0.25">0.25 acres</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Typical Home</div>
                            <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-acres="0.5">0.5 acres</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Large Lot</div>
                            <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-acres="2">2 acres</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Small Farm</div>
                            <div class="text-yellow-600 cursor-pointer hover:text-yellow-800 transition-colors" data-acres="10">10 acres</div>
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
                const toSelect = document.getElementById('to');
                const output = document.getElementById('output');
                const unitDisplay = document.getElementById('unit-display');

                const conversionRates = {
                    sqm: { rate: 4046.86, symbol: 'm²', name: 'Square Meters' },
                    hectare: { rate: 0.404686, symbol: 'ha', name: 'Hectares' },
                    sqft: { rate: 43560, symbol: 'ft²', name: 'Square Feet' },
                    sqyd: { rate: 4840, symbol: 'yd²', name: 'Square Yards' },
                    sqkm: { rate: 0.00404686, symbol: 'km²', name: 'Square Kilometers' },
                    sqin: { rate: 6272640, symbol: 'in²', name: 'Square Inches' },
                    ares: { rate: 40.4686, symbol: 'a', name: 'Ares' }
                };

                function convert() {
                    const acres = parseFloat(valueInput.value);
                    const toUnit = toSelect.value;
                    const conversion = conversionRates[toUnit];

                    if (!isNaN(acres) && acres >= 0) {
                        const result = acres * conversion.rate;
                        
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
                        unitDisplay.textContent = conversion.symbol;
                    } else {
                        output.textContent = "--";
                        unitDisplay.textContent = "Select unit";
                    }
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

                // Add clickable functionality to example land sizes
                const exampleAcres = document.querySelectorAll('[data-acres]');
                exampleAcres.forEach(element => {
                    element.addEventListener('click', function() {
                        const acreValue = this.getAttribute('data-acres');
                        valueInput.value = acreValue;
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
                        valueInput.value = '';
                        convert();
                        valueInput.focus();
                    }
                });
            });
        </script>
    </x-slot>
</x-app-layout>