<x-tool-page-layout
    title="Feet &amp; Inches Calculator - ConvertPro"
    description="Professional feet and inches calculator to convert imperial measurements to metric units. Convert feet and inches to centimeters, meters, and total inches."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Imperial to Metric Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Feet and Inches Input -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Enter Feet and Inches
                                                                                </label>
                                                                                <div class="grid grid-cols-2 gap-4">
                                                                                    <div class="relative">
                                                                                        <input 
                                                                                            type="number" 
                                                                                            id="feet" 
                                                                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                            placeholder="0"
                                                                                            step="any"
                                                                                            min="0"
                                                                                        >
                                                                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                            <span class="text-gray-500 text-sm font-medium">ft</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="relative">
                                                                                        <input 
                                                                                            type="number" 
                                                                                            id="inches" 
                                                                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                            placeholder="0"
                                                                                            step="any"
                                                                                            min="0"
                                                                                            max="11.99"
                                                                                        >
                                                                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                            <span class="text-gray-500 text-sm font-medium">in</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500 mt-1">Enter feet and inches (e.g., 5 feet 9 inches)</p>
                                                                            </div>

                                                                            <!-- Clear Button -->
                                                                            <div class="flex justify-center">
                                                                                <button 
                                                                                    type="button" 
                                                                                    id="clearButton"
                                                                                    class="inline-flex items-center px-4 py-2 bg-violet-100 hover:bg-violet-200 text-violet-700 font-medium rounded-lg transition-colors duration-200"
                                                                                >
                                                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                    </svg>
                                                                                    Clear Values
                                                                                </button>
                                                                            </div>

                                                                        </form>
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Results Display -->
                                                                        <div class="mt-8 space-y-4">
                                                                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Converted Values</h3>

                                                                            <!-- Total Inches -->
                                                                            <div class="p-6 bg-gradient-to-r from-violet-50 to-purple-50 rounded-xl border-l-4 border-violet-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Total Inches</h4>
                                                                                        <p class="text-sm text-gray-600">Combined measurement</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-violet-600 font-mono" id="totalInches">--</div>
                                                                                        <div class="text-sm text-gray-500 font-medium">inches</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Centimeters -->
                                                                            <div class="p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Centimeters</h4>
                                                                                        <p class="text-sm text-gray-600">Metric equivalent</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-blue-600 font-mono" id="centimeters">--</div>
                                                                                        <div class="text-sm text-gray-500 font-medium">cm</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Meters -->
                                                                            <div class="p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Meters</h4>
                                                                                        <p class="text-sm text-gray-600">Base metric unit</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-green-600 font-mono" id="meters">--</div>
                                                                                        <div class="text-sm text-gray-500 font-medium">m</div>
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
                                                        <div>• 1 foot = 12 inches</div>
                                                        <div>• 1 inch = 2.54 cm</div>
                                                        <div>• 1 foot = 30.48 cm</div>
                                                        <div>• 1 meter = 3.28084 feet</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Feet & Inches Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Imperial System</h4>
                                    <p>The foot and inch are traditional units of length in the imperial system, commonly used in the United States, United Kingdom, and other countries for measuring height, construction, and everyday distances.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                                    <p>These conversions are essential for international trade, construction projects, height measurements, sports statistics, and converting between imperial and metric systems.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-violet-50 rounded-lg border border-violet-200">
                                <p class="text-sm text-violet-800">
                                    <strong>Fun Fact:</strong> The foot was originally based on the length of a human foot, and there are 12 inches in a foot!
                                </p>
                            </div>
                        </div>

                        <!-- Common Heights Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Height Examples</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Average Woman</div>
                                    <div class="text-violet-600 cursor-pointer hover:text-violet-800 transition-colors" data-feet="5" data-inches="4">5'4"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Average Man</div>
                                    <div class="text-violet-600 cursor-pointer hover:text-violet-800 transition-colors" data-feet="5" data-inches="9">5'9"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Door Height</div>
                                    <div class="text-violet-600 cursor-pointer hover:text-violet-800 transition-colors" data-feet="6" data-inches="8">6'8"</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Basketball Hoop</div>
                                    <div class="text-violet-600 cursor-pointer hover:text-violet-800 transition-colors" data-feet="10" data-inches="0">10'0"</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const feetInput = document.getElementById('feet');
                        const inchesInput = document.getElementById('inches');
                        const clearButton = document.getElementById('clearButton');
                        const totalInches = document.getElementById('totalInches');
                        const centimeters = document.getElementById('centimeters');
                        const meters = document.getElementById('meters');

                        function convert() {
                            const feet = parseFloat(feetInput.value) || 0;
                            const inches = parseFloat(inchesInput.value) || 0;

                            // Calculate conversions
                            const total = (feet * 12) + inches;
                            const cm = total * 2.54;
                            const m = cm / 100;

                            // Format and display results
                            if (feet === 0 && inches === 0) {
                                totalInches.textContent = "--";
                                centimeters.textContent = "--";
                                meters.textContent = "--";
                            } else {
                                totalInches.textContent = total.toLocaleString(undefined, { maximumFractionDigits: 2 });
                                centimeters.textContent = cm.toLocaleString(undefined, { maximumFractionDigits: 2 });
                                meters.textContent = m.toLocaleString(undefined, { maximumFractionDigits: 4 });
                            }
                        }

                        function clearInputs() {
                            feetInput.value = '';
                            inchesInput.value = '';
                            convert();
                            feetInput.focus();
                        }

                        // Event listeners
                        feetInput.addEventListener('input', convert);
                        inchesInput.addEventListener('input', convert);
                        clearButton.addEventListener('click', clearInputs);

                        // Add clickable functionality to example heights
                        const exampleHeights = document.querySelectorAll('[data-feet]');
                        exampleHeights.forEach(element => {
                            element.addEventListener('click', function() {
                                const feetValue = this.getAttribute('data-feet');
                                const inchesValue = this.getAttribute('data-inches');
                                
                                feetInput.value = feetValue;
                                inchesInput.value = inchesValue;
                                convert();
                                feetInput.focus();
                            });
                        });

                        // Initialize
                        feetInput.focus();

                        // Add keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearInputs();
                            } else if (e.key === 'Tab' && e.target === feetInput) {
                                // Allow natural tab navigation to inches input
                            }
                        });

                        // Auto-convert inches > 12 to feet + inches
                        inchesInput.addEventListener('blur', function() {
                            const inches = parseFloat(inchesInput.value) || 0;
                            if (inches >= 12) {
                                const extraFeet = Math.floor(inches / 12);
                                const remainingInches = inches % 12;
                                const currentFeet = parseFloat(feetInput.value) || 0;
                                
                                feetInput.value = currentFeet + extraFeet;
                                inchesInput.value = remainingInches.toFixed(2).replace('.00', '');
                                convert();
                            }
                        });

                        // Initialize conversion
                        convert();
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
