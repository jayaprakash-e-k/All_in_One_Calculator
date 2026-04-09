<x-tool-page-layout
    title="CCF to Gallons Converter - ConvertPro"
    description="Professional CCF to gallons converter for water utility billing. Convert hundred cubic feet to gallons with accurate water volume calculations."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Water Volume Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="ccf" class="block text-sm font-semibold text-gray-700">
                                            Enter CCF (Hundred Cubic Feet)
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="ccf" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter CCF (e.g., 5)"
                                                step="0.01"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">CCF</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">1 CCF = 100 cubic feet</p>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-orange-100 hover:bg-orange-200 text-orange-700 font-medium rounded-lg transition-colors duration-200"
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
                                    
                                    <!-- Primary Result - Gallons -->
                                    <div class="p-6 bg-gradient-to-r from-orange-50 to-red-50 rounded-xl border-l-4 border-orange-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">US Gallons</h4>
                                                <p class="text-sm text-gray-600">Standard water measurement</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-orange-600 font-mono" id="gallonsOutput">--</div>
                                                <div class="text-sm text-gray-500 font-medium">gallons</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Liters</h4>
                                                <div class="text-xl font-bold text-blue-600 font-mono" id="litersOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Cubic Meters</h4>
                                                <div class="text-xl font-bold text-green-600 font-mono" id="cubicMetersOutput">--</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">CCF Conversion Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 CCF = 748.052 gallons</div>
                                        <div>• 1 CCF = 2,831.685 liters</div>
                                        <div>• 1 CCF = 2.832 cubic meters</div>
                                        <div>• 1 CCF = 100 cubic feet</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About CCF to Gallons Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">What is CCF?</h4>
                                    <p>CCF stands for "Centum Cubic Feet" or "Hundred Cubic Feet" (100 ft³). It's a unit commonly used by water utilities for billing purposes, representing a significant volume of water usage.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Water Billing Applications</h4>
                                    <p>Essential for understanding water bills, calculating usage costs, monitoring consumption, and converting between utility measurements and everyday volume units.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-orange-50 rounded-lg border border-orange-200">
                                <p class="text-sm text-orange-800">
                                    <strong>Utility Tip:</strong> Average household uses 7-10 CCF per month, which equals about 5,200-7,500 gallons!
                                </p>
                            </div>
                        </div>

                        <!-- Common CCF Usage Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Water Usage in CCF</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">1 Person/Month</div>
                                    <div class="text-orange-600 cursor-pointer hover:text-orange-800 transition-colors" data-ccf="2">2 CCF</div>
                                    <div class="text-xs text-gray-500 mt-1">~1,500 gallons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Family/Month</div>
                                    <div class="text-orange-600 cursor-pointer hover:text-orange-800 transition-colors" data-ccf="8">8 CCF</div>
                                    <div class="text-xs text-gray-500 mt-1">~6,000 gallons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Swimming Pool</div>
                                    <div class="text-orange-600 cursor-pointer hover:text-orange-800 transition-colors" data-ccf="25">25 CCF</div>
                                    <div class="text-xs text-gray-500 mt-1">~18,700 gallons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Large Usage</div>
                                    <div class="text-orange-600 cursor-pointer hover:text-orange-800 transition-colors" data-ccf="50">50 CCF</div>
                                    <div class="text-xs text-gray-500 mt-1">~37,400 gallons</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const ccfInput = document.getElementById('ccf');
                        const clearButton = document.getElementById('clearButton');
                        const gallonsOutput = document.getElementById('gallonsOutput');
                        const litersOutput = document.getElementById('litersOutput');
                        const cubicMetersOutput = document.getElementById('cubicMetersOutput');

                        // Conversion constants
                        const CCF_TO_GALLONS = 748.051947;
                        const CCF_TO_LITERS = 2831.6846592;
                        const CCF_TO_CUBIC_METERS = 2.8316846592;

                        function formatNumber(num, decimals = 3) {
                            if (num >= 1000000) {
                                return num.toExponential(4);
                            } else if (num >= 1000) {
                                return num.toLocaleString(undefined, { maximumFractionDigits: decimals });
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: decimals });
                            }
                        }

                        function convert() {
                            const ccf = parseFloat(ccfInput.value);

                            if (!isNaN(ccf) && ccf >= 0) {
                                const gallons = ccf * CCF_TO_GALLONS;
                                const liters = ccf * CCF_TO_LITERS;
                                const cubicMeters = ccf * CCF_TO_CUBIC_METERS;

                                gallonsOutput.textContent = formatNumber(gallons, 2);
                                litersOutput.textContent = formatNumber(liters, 1) + ' L';
                                cubicMetersOutput.textContent = formatNumber(cubicMeters, 3) + ' m³';
                            } else {
                                gallonsOutput.textContent = "--";
                                litersOutput.textContent = "--";
                                cubicMetersOutput.textContent = "--";
                            }
                        }

                        function clearInput() {
                            ccfInput.value = '';
                            convert();
                            ccfInput.focus();
                        }

                        // Event listeners
                        ccfInput.addEventListener('input', convert);
                        clearButton.addEventListener('click', clearInput);

                        // Add clickable functionality to example CCF values
                        const exampleCCFs = document.querySelectorAll('[data-ccf]');
                        exampleCCFs.forEach(element => {
                            element.addEventListener('click', function() {
                                const ccfValue = this.getAttribute('data-ccf');
                                ccfInput.value = ccfValue;
                                convert();
                                ccfInput.focus();
                            });
                        });

                        // Initialize
                        ccfInput.focus();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearInput();
                            }
                        });

                        // Initialize conversion
                        convert();
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
