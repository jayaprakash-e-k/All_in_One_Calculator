<x-app-layout 
    title="Astronomical Unit Calculator - ConvertPro"
    description="Professional astronomical unit calculator to convert AU to kilometers, miles, light years, and parsecs. Accurate space distance conversions for astronomy and education."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Astronomical Unit Calculator']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-purple-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Astronomical Unit Calculator</h1>
                    <p class="text-gray-600">Convert astronomical units to various space distance measurements</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Space Distance Conversion</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Input Value -->
                            <div class="space-y-2">
                                <label for="value" class="block text-sm font-semibold text-gray-700">
                                    Distance in Astronomical Units
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="value" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter AU value (e.g., 1.5)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">AU</span>
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
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="km">Kilometers (km)</option>
                                    <option value="miles">Miles (mi)</option>
                                    <option value="lightyears">Light Years (ly)</option>
                                    <option value="parsecs">Parsecs (pc)</option>
                                    <option value="meters">Meters (m)</option>
                                    <option value="feet">Feet (ft)</option>
                                </select>
                            </div>

                        </form>

                        <!-- Result Display -->
                        <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl border-l-4 border-purple-500">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h3>
                                    <p class="text-sm text-gray-600">Real-time conversion result</p>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-purple-600 font-mono" id="output">--</div>
                                    <div class="text-sm text-gray-500 font-medium" id="unit-display">Select unit</div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Quick Reference</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• 1 AU = 149,597,871 km</div>
                                <div>• 1 AU = 92,955,807 miles</div>
                                <div>• 1 AU = 1.58 × 10⁻⁵ light years</div>
                                <div>• 1 AU = 4.85 × 10⁻⁶ parsecs</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Astronomical Unit Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">What is an AU?</h4>
                            <p>An Astronomical Unit (AU) is the average distance between Earth and the Sun, approximately 149.6 million kilometers or 93 million miles. It's the standard unit for measuring distances within our solar system.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Common Uses</h4>
                            <p>AU calculations are essential for astronomy, space mission planning, educational purposes, and understanding planetary distances and spacecraft trajectories.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-purple-50 rounded-lg border border-purple-200">
                        <p class="text-sm text-purple-800">
                            <strong>Fun Fact:</strong> Light from the Sun takes about 8 minutes and 20 seconds to travel 1 AU to reach Earth!
                        </p>
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

                <!-- Example Distances -->
                <div class="mt-6 bg-white/90 backdrop-blur-md rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Example Solar System Distances</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Mercury</div>
                            <div class="text-purple-600 cursor-pointer hover:text-purple-800 transition-colors">0.39 AU</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Mars</div>
                            <div class="text-purple-600 cursor-pointer hover:text-purple-800 transition-colors">1.52 AU</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Jupiter</div>
                            <div class="text-purple-600 cursor-pointer hover:text-purple-800 transition-colors">5.20 AU</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Neptune</div>
                            <div class="text-purple-600 cursor-pointer hover:text-purple-800 transition-colors">30.05 AU</div>
                        </div>
                    </div>
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
                    km: { rate: 149597870.7, symbol: 'km', name: 'Kilometers' },
                    miles: { rate: 92955807.3, symbol: 'mi', name: 'Miles' },
                    lightyears: { rate: 1.58125e-5, symbol: 'ly', name: 'Light Years' },
                    parsecs: { rate: 4.84814e-6, symbol: 'pc', name: 'Parsecs' },
                    meters: { rate: 149597870700, symbol: 'm', name: 'Meters' },
                    feet: { rate: 490806662402.374, symbol: 'ft', name: 'Feet' }
                };

                function convert() {
                    const au = parseFloat(valueInput.value);
                    const toUnit = toSelect.value;
                    const conversion = conversionRates[toUnit];

                    if (!isNaN(au) && au >= 0) {
                        const result = au * conversion.rate;
                        
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