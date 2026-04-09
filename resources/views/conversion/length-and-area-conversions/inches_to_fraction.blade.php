<x-tool-page-layout
    title="Inches to Fraction Calculator - ConvertPro"
    description="Professional inches to fraction calculator to convert decimal inches to fractions, millimeters, and centimeters. Perfect for woodworking and construction measurements."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Decimal to Fraction Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Input Value -->
                                                                            <div class="space-y-2">
                                                                                <label for="decimal" class="block text-sm font-semibold text-gray-700">
                                                                                    Enter Decimal Inches
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="decimal" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                        placeholder="Enter decimal (e.g., 2.75)"
                                                                                        step="0.001"
                                                                                        min="0"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium">inches</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500 mt-1">Common range: 0.001 to 100 inches</p>
                                                                            </div>

                                                                            <!-- Precision Selector -->
                                                                            <div class="space-y-2">
                                                                                <label for="precision" class="block text-sm font-semibold text-gray-700">
                                                                                    Fraction Precision
                                                                                </label>
                                                                                <select 
                                                                                    id="precision" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                >
                                                                                    <option value="64">64ths (1/64)</option>
                                                                                    <option value="32">32nds (1/32)</option>
                                                                                    <option value="16" selected>16ths (1/16)</option>
                                                                                    <option value="8">8ths (1/8)</option>
                                                                                    <option value="4">4ths (1/4)</option>
                                                                                    <option value="2">Halves (1/2)</option>
                                                                                </select>
                                                                            </div>

                                                                            <!-- Clear Button -->
                                                                            <div class="flex justify-center">
                                                                                <button 
                                                                                    type="button" 
                                                                                    id="clearButton"
                                                                                    class="inline-flex items-center px-4 py-2 bg-amber-100 hover:bg-amber-200 text-amber-700 font-medium rounded-lg transition-colors duration-200"
                                                                                >
                                                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                    </svg>
                                                                                    Clear Value
                                                                                </button>
                                                                            </div>

                                                                        </form>
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Results Display -->
                                                                        <div class="mt-8 space-y-4">
                                                                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Converted Values</h3>

                                                                            <!-- Fraction -->
                                                                            <div class="p-6 bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl border-l-4 border-amber-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Fraction</h4>
                                                                                        <p class="text-sm text-gray-600">Imperial fraction format</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-amber-600 font-mono" id="fraction">--</div>
                                                                                        <div class="text-sm text-gray-500 font-medium">inches</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Millimeters -->
                                                                            <div class="p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Millimeters</h4>
                                                                                        <p class="text-sm text-gray-600">Precise metric measurement</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-blue-600 font-mono" id="millimeters">--</div>
                                                                                        <div class="text-sm text-gray-500 font-medium">mm</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Centimeters -->
                                                                            <div class="p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Centimeters</h4>
                                                                                        <p class="text-sm text-gray-600">Common metric unit</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-green-600 font-mono" id="centimeters">--</div>
                                                                                        <div class="text-sm text-gray-500 font-medium">cm</div>
                                                                                    </div>
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
                                                        <div>• 1/4" = 0.25"</div>
                                                        <div>• 1/2" = 0.5"</div>
                                                        <div>• 3/4" = 0.75"</div>
                                                        <div>• 1" = 25.4 mm</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Inches to Fraction Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                                    <p>Essential for woodworking, construction, machining, and crafting where precise fractional measurements are needed. Converts digital caliper readings to traditional ruler markings.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Precision Levels</h4>
                                    <p>Different trades use different precision levels - carpenters often use 16ths, machinists use 64ths, and general construction uses 8ths or 4ths for most applications.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-amber-50 rounded-lg border border-amber-200">
                                <p class="text-sm text-amber-800">
                                    <strong>Pro Tip:</strong> For woodworking, 16ths are usually precise enough, while machining often requires 32nds or 64ths!
                                </p>
                            </div>
                        </div>

                        <!-- Common Measurements Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Decimal to Fraction Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Quarter Inch</div>
                                    <div class="text-amber-600 cursor-pointer hover:text-amber-800 transition-colors" data-decimal="0.25">0.25"</div>
                                    <div class="text-xs text-gray-500 mt-1">1/4"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Three Eighths</div>
                                    <div class="text-amber-600 cursor-pointer hover:text-amber-800 transition-colors" data-decimal="0.375">0.375"</div>
                                    <div class="text-xs text-gray-500 mt-1">3/8"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Five Eighths</div>
                                    <div class="text-amber-600 cursor-pointer hover:text-amber-800 transition-colors" data-decimal="0.625">0.625"</div>
                                    <div class="text-xs text-gray-500 mt-1">5/8"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Three Quarters</div>
                                    <div class="text-amber-600 cursor-pointer hover:text-amber-800 transition-colors" data-decimal="0.75">0.75"</div>
                                    <div class="text-xs text-gray-500 mt-1">3/4"</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const decimalInput = document.getElementById('decimal');
                        const precisionSelect = document.getElementById('precision');
                        const clearButton = document.getElementById('clearButton');
                        const fractionOutput = document.getElementById('fraction');
                        const millimetersOutput = document.getElementById('millimeters');
                        const centimetersOutput = document.getElementById('centimeters');

                        function gcd(a, b) {
                            return b ? gcd(b, a % b) : a;
                        }

                        function nearestFraction(decimal, maxDenominator = 16) {
                            const whole = Math.floor(decimal);
                            const frac = decimal - whole;

                            if (frac === 0) {
                                return whole === 0 ? '0"' : `${whole}"`;
                            }

                            let bestNumerator = 1;
                            let bestDenominator = maxDenominator;
                            let minError = Math.abs(frac - bestNumerator / bestDenominator);

                            for (let denominator = 2; denominator <= maxDenominator; denominator++) {
                                const numerator = Math.round(frac * denominator);
                                const error = Math.abs(frac - numerator / denominator);
                                
                                if (error < minError) {
                                    minError = error;
                                    bestNumerator = numerator;
                                    bestDenominator = denominator;
                                }
                            }

                            // Simplify the fraction
                            const common = gcd(bestNumerator, bestDenominator);
                            const simplifiedNum = bestNumerator / common;
                            const simplifiedDen = bestDenominator / common;

                            // Handle edge cases
                            if (simplifiedNum === 0) {
                                return whole === 0 ? '0"' : `${whole}"`;
                            }
                            if (simplifiedNum === simplifiedDen) {
                                return `${whole + 1}"`;
                            }

                            // Format output
                            if (whole === 0) {
                                return `${simplifiedNum}/${simplifiedDen}"`;
                            } else {
                                return `${whole} ${simplifiedNum}/${simplifiedDen}"`;
                            }
                        }

                        function convert() {
                            const inches = parseFloat(decimalInput.value);
                            const precision = parseInt(precisionSelect.value);
                            
                            if (!isNaN(inches) && inches >= 0) {
                                // Calculate conversions
                                const mm = inches * 25.4;
                                const cm = mm / 10;

                                // Display results
                                fractionOutput.textContent = nearestFraction(inches, precision);
                                millimetersOutput.textContent = mm.toLocaleString(undefined, { maximumFractionDigits: 2 });
                                centimetersOutput.textContent = cm.toLocaleString(undefined, { maximumFractionDigits: 3 });
                            } else {
                                // Clear results
                                fractionOutput.textContent = "--";
                                millimetersOutput.textContent = "--";
                                centimetersOutput.textContent = "--";
                            }
                        }

                        function clearInput() {
                            decimalInput.value = '';
                            convert();
                            decimalInput.focus();
                        }

                        // Event listeners
                        decimalInput.addEventListener('input', convert);
                        precisionSelect.addEventListener('change', convert);
                        clearButton.addEventListener('click', clearInput);

                        // Add clickable functionality to example measurements
                        const exampleMeasurements = document.querySelectorAll('[data-decimal]');
                        exampleMeasurements.forEach(element => {
                            element.addEventListener('click', function() {
                                const decimalValue = this.getAttribute('data-decimal');
                                decimalInput.value = decimalValue;
                                convert();
                                decimalInput.focus();
                            });
                        });

                        // Initialize
                        decimalInput.focus();

                        // Add keyboard shortcuts
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
