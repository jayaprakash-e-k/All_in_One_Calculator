<x-app-layout 
    title="Cubic Feet Calculator - ConvertPro"
    description="Professional cubic feet calculator to calculate volume in ft³ from length, width, and height dimensions. Perfect for construction and storage calculations."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Cubic Feet Calculator']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-blue-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14-7H5m14 14H5"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Cubic Feet Calculator</h1>
                    <p class="text-gray-600">Calculate volume in cubic feet from dimensions</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Volume Calculation in Cubic Feet</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Dimension Inputs -->
                            @foreach(['Length', 'Width', 'Height'] as $dimension)
                            @php $lower = strtolower($dimension); @endphp
                            <div class="space-y-2">
                                <label for="{{ $lower }}" class="block text-sm font-semibold text-gray-700">
                                    {{ $dimension }}
                                </label>
                                <div class="flex gap-3">
                                    <input 
                                        type="number" 
                                        id="{{ $lower }}" 
                                        class="flex-1 px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter {{ strtolower($dimension) }}"
                                        step="any"
                                        min="0"
                                    >
                                    <select 
                                        id="{{ $lower }}Unit" 
                                        class="w-24 px-3 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                    >
                                        <option value="mm">mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                        <option value="in">in</option>
                                        <option value="ft" selected>ft</option>
                                        <option value="yd">yd</option>
                                    </select>
                                </div>
                            </div>
                            @endforeach

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
                                    Clear All
                                </button>
                            </div>

                        </form>

                        <!-- Results Display -->
                        <div class="mt-8 space-y-4">
                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Volume Results</h3>
                            
                            <!-- Primary Result - Cubic Feet -->
                            <div class="p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Volume in Cubic Feet</h4>
                                        <p class="text-sm text-gray-600">Imperial volume measurement</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-blue-600 font-mono" id="output">--</div>
                                        <div class="text-sm text-gray-500 font-medium">ft³</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Conversions -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Cubic Meters</h4>
                                        <div class="text-lg font-bold text-green-600 font-mono" id="cubicMetersOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Liters</h4>
                                        <div class="text-lg font-bold text-purple-600 font-mono" id="litersOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">US Gallons</h4>
                                        <div class="text-lg font-bold text-orange-600 font-mono" id="gallonsOutput">--</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Volume Conversion Reference</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• 1 ft³ = 0.0283 m³</div>
                                <div>• 1 ft³ = 28.32 L</div>
                                <div>• 1 ft³ = 7.48 gallons</div>
                                <div>• 1 ft³ = 1,728 in³</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Cubic Feet Calculation</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                            <p>Essential for shipping calculations, storage planning, concrete ordering, HVAC sizing, and any project requiring volume measurements in the imperial system.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Construction Uses</h4>
                            <p>Commonly used in construction for calculating concrete needs, lumber volume, room capacity, and material storage requirements.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-blue-50 rounded-lg border border-blue-200">
                        <p class="text-sm text-blue-800">
                            <strong>Construction Tip:</strong> Always add 10% extra when ordering materials to account for waste and measurement variations!
                        </p>
                    </div>
                </div>

                <!-- Common Dimension Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Volume Examples</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Small Room</div>
                            <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-dimensions="10,10,8">10×10×8 ft</div>
                            <div class="text-xs text-gray-500 mt-1">800 ft³</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Shipping Container</div>
                            <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-dimensions="20,8,8.5">20×8×8.5 ft</div>
                            <div class="text-xs text-gray-500 mt-1">1,360 ft³</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Concrete Pad</div>
                            <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-dimensions="20,20,0.5">20×20×0.5 ft</div>
                            <div class="text-xs text-gray-500 mt-1">200 ft³</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Storage Unit</div>
                            <div class="text-blue-600 cursor-pointer hover:text-blue-800 transition-colors" data-dimensions="5,10,8">5×10×8 ft</div>
                            <div class="text-xs text-gray-500 mt-1">400 ft³</div>
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
                const lengthInput = document.getElementById('length');
                const widthInput = document.getElementById('width');
                const heightInput = document.getElementById('height');
                const lengthUnit = document.getElementById('lengthUnit');
                const widthUnit = document.getElementById('widthUnit');
                const heightUnit = document.getElementById('heightUnit');
                const clearButton = document.getElementById('clearButton');
                const output = document.getElementById('output');
                const cubicMetersOutput = document.getElementById('cubicMetersOutput');
                const litersOutput = document.getElementById('litersOutput');
                const gallonsOutput = document.getElementById('gallonsOutput');

                const unitToMeter = {
                    mm: 0.001,
                    cm: 0.01,
                    m: 1,
                    km: 1000,
                    ft: 0.3048,
                    in: 0.0254,
                    yd: 0.9144
                };

                const inputs = {
                    length: {
                        el: lengthInput,
                        unitEl: lengthUnit,
                        originalValue: null,
                        originalUnit: 'ft'
                    },
                    width: {
                        el: widthInput,
                        unitEl: widthUnit,
                        originalValue: null,
                        originalUnit: 'ft'
                    },
                    height: {
                        el: heightInput,
                        unitEl: heightUnit,
                        originalValue: null,
                        originalUnit: 'ft'
                    }
                };

                const M3_TO_FT3 = 35.3147;
                const FT3_TO_LITERS = 28.3168;
                const FT3_TO_GALLONS = 7.48052;

                function convertUnit(value, from, to) {
                    return (value * unitToMeter[from]) / unitToMeter[to];
                }

                function formatNumber(num) {
                    if (num >= 1000000) {
                        return num.toExponential(4);
                    } else if (num >= 1000) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 2 });
                    } else if (num >= 1) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 3 });
                    } else {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 6 });
                    }
                }

                function calculateVolume() {
                    let valid = true;
                    let volumeInM3 = 1;

                    for (const key in inputs) {
                        const input = inputs[key];
                        const value = parseFloat(input.el.value);
                        if (!isNaN(value) && value > 0) {
                            input.originalValue = value;
                            input.originalUnit = input.unitEl.value;
                            const valueInM = value * unitToMeter[input.unitEl.value];
                            volumeInM3 *= valueInM;
                        } else {
                            valid = false;
                        }
                    }

                    if (valid) {
                        const volumeInFt3 = volumeInM3 * M3_TO_FT3;
                        const volumeInLiters = volumeInFt3 * FT3_TO_LITERS;
                        const volumeInGallons = volumeInFt3 * FT3_TO_GALLONS;

                        output.textContent = formatNumber(volumeInFt3);
                        cubicMetersOutput.textContent = formatNumber(volumeInM3) + " m³";
                        litersOutput.textContent = formatNumber(volumeInLiters) + " L";
                        gallonsOutput.textContent = formatNumber(volumeInGallons) + " gal";
                    } else {
                        output.textContent = "--";
                        cubicMetersOutput.textContent = "--";
                        litersOutput.textContent = "--";
                        gallonsOutput.textContent = "--";
                    }
                }

                function clearAll() {
                    lengthInput.value = '';
                    widthInput.value = '';
                    heightInput.value = '';
                    calculateVolume();
                    lengthInput.focus();
                }

                function attachEvents() {
                    for (const key in inputs) {
                        const input = inputs[key];

                        input.el.addEventListener('input', () => {
                            const val = parseFloat(input.el.value);
                            if (!isNaN(val)) {
                                input.originalValue = val;
                                input.originalUnit = input.unitEl.value;
                            }
                            calculateVolume();
                        });

                        input.unitEl.addEventListener('change', () => {
                            if (input.originalValue !== null && input.originalUnit !== input.unitEl.value) {
                                const converted = convertUnit(input.originalValue, input.originalUnit, input.unitEl.value);
                                input.el.value = formatNumber(converted);
                                input.originalValue = parseFloat(input.el.value);
                                input.originalUnit = input.unitEl.value;
                            }
                            calculateVolume();
                        });
                    }
                }

                // Event listeners
                clearButton.addEventListener('click', clearAll);

                // Add clickable functionality to example dimensions
                const exampleDimensions = document.querySelectorAll('[data-dimensions]');
                exampleDimensions.forEach(element => {
                    element.addEventListener('click', function() {
                        const dimensions = this.getAttribute('data-dimensions').split(',');
                        lengthInput.value = dimensions[0];
                        widthInput.value = dimensions[1];
                        heightInput.value = dimensions[2];
                        calculateVolume();
                        lengthInput.focus();
                    });
                });

                // Initialize
                attachEvents();
                calculateVolume();
                lengthInput.focus();

                // Keyboard shortcuts
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        clearAll();
                    }
                });
            });
        </script>
    </x-slot>
</x-app-layout>