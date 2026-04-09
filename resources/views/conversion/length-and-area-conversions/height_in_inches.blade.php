<x-tool-page-layout
    title="Height in Inches Calculator - ConvertPro"
    description="Professional height calculator to convert inches to feet and inches, centimeters, and meters. Perfect for height conversions and human measurements."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Human Height Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inches" class="block text-sm font-semibold text-gray-700">
                                            Enter Height in Inches
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inches" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter height (e.g., 65)"
                                                step="0.1"
                                                min="0"
                                                max="120"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">inches</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Typical human height range: 48-84 inches</p>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Converted Heights</h3>
                                    
                                    <!-- Feet & Inches -->
                                    <div class="p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">Feet & Inches</h4>
                                                <p class="text-sm text-gray-600">Imperial format</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-blue-600 font-mono" id="feetInches">--</div>
                                                <div class="text-sm text-gray-500 font-medium">ft & in</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Centimeters -->
                                    <div class="p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">Centimeters</h4>
                                                <p class="text-sm text-gray-600">Metric measurement</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-green-600 font-mono" id="centimeters">--</div>
                                                <div class="text-sm text-gray-500 font-medium">cm</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Meters -->
                                    <div class="p-6 bg-gradient-to-r from-purple-50 to-violet-50 rounded-xl border-l-4 border-purple-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">Meters</h4>
                                                <p class="text-sm text-gray-600">Base metric unit</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-purple-600 font-mono" id="meters">--</div>
                                                <div class="text-sm text-gray-500 font-medium">m</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Quick Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 inch = 2.54 cm</div>
                                        <div>• 1 foot = 12 inches</div>
                                        <div>• 5 feet = 60 inches</div>
                                        <div>• 6 feet = 72 inches</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Height Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Height Measurements</h4>
                                    <p>Height is commonly measured in inches in the United States, while most other countries use centimeters. This calculator helps convert between both systems for medical records, sports, and international applications.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Common Uses</h4>
                                    <p>Essential for medical charts, sports statistics, clothing sizes, ergonomic design, and converting between imperial and metric measurement systems in various professional contexts.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-blue-50 rounded-lg border border-blue-200">
                                <p class="text-sm text-blue-800">
                                    <strong>Medical Note:</strong> Height measurements are crucial for calculating BMI, medication dosages, and growth tracking!
                                </p>
                            </div>
                        </div>

                        <!-- Common Height Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Height Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Short Adult</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-height="60">60 inches</div>
                                    <div class="text-xs text-gray-500 mt-1">5'0"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Average Woman</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-height="64">64 inches</div>
                                    <div class="text-xs text-gray-500 mt-1">5'4"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Average Man</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-height="69">69 inches</div>
                                    <div class="text-xs text-gray-500 mt-1">5'9"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Tall Adult</div>
                                    <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-height="76">76 inches</div>
                                    <div class="text-xs text-gray-500 mt-1">6'4"</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inchesInput = document.getElementById('inches');
                        const clearButton = document.getElementById('clearButton');
                        const feetInches = document.getElementById('feetInches');
                        const centimeters = document.getElementById('centimeters');
                        const meters = document.getElementById('meters');

                        function convert() {
                            const inches = parseFloat(inchesInput.value);
                            
                            if (!isNaN(inches) && inches > 0) {
                                // Calculate conversions
                                const feet = Math.floor(inches / 12);
                                const remainingInches = inches % 12;
                                const cm = inches * 2.54;
                                const m = cm / 100;

                                // Format feet and inches
                                let feetInchesText;
                                if (feet > 0 && remainingInches > 0) {
                                    feetInchesText = `${feet}' ${remainingInches.toFixed(1)}"`;
                                } else if (feet > 0) {
                                    feetInchesText = `${feet}' 0"`;
                                } else {
                                    feetInchesText = `0' ${remainingInches.toFixed(1)}"`;
                                }

                                // Display results
                                feetInches.textContent = feetInchesText;
                                centimeters.textContent = cm.toLocaleString(undefined, { maximumFractionDigits: 1 });
                                meters.textContent = m.toLocaleString(undefined, { maximumFractionDigits: 3 });
                            } else {
                                // Clear results
                                feetInches.textContent = "--";
                                centimeters.textContent = "--";
                                meters.textContent = "--";
                            }
                        }

                        function clearInput() {
                            inchesInput.value = '';
                            convert();
                            inchesInput.focus();
                        }

                        // Event listeners
                        inchesInput.addEventListener('input', convert);
                        clearButton.addEventListener('click', clearInput);

                        // Add clickable functionality to example heights
                        const exampleHeights = document.querySelectorAll('[data-height]');
                        exampleHeights.forEach(element => {
                            element.addEventListener('click', function() {
                                const heightValue = this.getAttribute('data-height');
                                inchesInput.value = heightValue;
                                convert();
                                inchesInput.focus();
                            });
                        });

                        // Initialize
                        inchesInput.focus();

                        // Add keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearInput();
                            }
                        });

                        // Input validation
                        inchesInput.addEventListener('input', function() {
                            const value = parseFloat(this.value);
                            if (value > 120) {
                                this.value = 120;
                            } else if (value < 0) {
                                this.value = 0;
                            }
                        });

                        // Initialize conversion
                        convert();
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
