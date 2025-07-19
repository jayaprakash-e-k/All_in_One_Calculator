<x-app-layout 
    title="Gallons to Pounds Converter - ConvertPro"
    description="Professional gallons to pounds converter for liquids. Convert gallon volume to weight in pounds based on substance density. Perfect for cooking and industry."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Gallons to Pounds Converter']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-amber-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-amber-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Gallons to Pounds Converter</h1>
                    <p class="text-gray-600">Convert liquid volume to weight based on substance</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-amber-500 to-amber-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Liquid Volume to Weight Conversion</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Substance Selection -->
                            <div class="space-y-2">
                                <label for="substance" class="block text-sm font-semibold text-gray-700">
                                    Select Substance
                                </label>
                                <select 
                                    id="substance" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="">Select substance</option>
                                    <option value="Water">Water</option>
                                    <option value="Milk">Milk</option>
                                    <option value="Cooking oil">Cooking oil</option>
                                    <option value="Diesel">Diesel fuel</option>
                                    <option value="Gasoline">Gasoline</option>
                                    <option value="Honey">Honey</option>
                                    <option value="Mercury">Mercury</option>
                                    <option value="Ethanol">Ethanol (Alcohol)</option>
                                    <option value="Propane">Propane (liquid)</option>
                                    <option value="Kerosene">Kerosene</option>
                                    <option value="Custom">Custom substance</option>
                                </select>
                            </div>

                            <!-- Custom Density Field -->
                            <div class="space-y-2" id="customDensityContainer" style="display: none;">
                                <label for="customDensity" class="block text-sm font-semibold text-gray-700">
                                    Custom Density
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="customDensity" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter density"
                                        step="0.01"
                                        min="0.1"
                                        max="20"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">lb/US gal</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Enter pounds per US gallon</p>
                            </div>

                            <!-- Density Display -->
                            <div class="space-y-2">
                                <label for="densityDisplay" class="block text-sm font-semibold text-gray-700">
                                    Substance Density
                                </label>
                                <div class="relative">
                                    <input 
                                        type="text" 
                                        id="densityDisplay" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg bg-gray-50 text-lg font-medium" 
                                        placeholder="Select substance first"
                                        readonly
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">lb/US gal</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Volume Input -->
                            <div class="space-y-2">
                                <label for="gallons" class="block text-sm font-semibold text-gray-700">
                                    Volume
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="gallons" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter volume (e.g., 10)"
                                        step="0.01"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">US gallons</span>
                                    </div>
                                </div>
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
                                    Clear Values
                                </button>
                            </div>

                        </form>

                        <!-- Results Display -->
                        <div class="mt-8 space-y-4">
                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Weight Results</h3>
                            
                            <!-- Primary Result - Pounds -->
                            <div class="p-6 bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl border-l-4 border-amber-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Weight in Pounds</h4>
                                        <p class="text-sm text-gray-600">Total weight of liquid</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-amber-600 font-mono" id="pounds">--</div>
                                        <div class="text-sm text-gray-500 font-medium">lb</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Weight Conversions -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Kilograms</h4>
                                        <div class="text-lg font-bold text-blue-600 font-mono" id="kgOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Ounces</h4>
                                        <div class="text-lg font-bold text-green-600 font-mono" id="ozOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Metric Tons</h4>
                                        <div class="text-lg font-bold text-purple-600 font-mono" id="tonnesOutput">--</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Common Liquid Densities</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• Water: 8.34 lb/gal</div>
                                <div>• Gasoline: 6.07 lb/gal</div>
                                <div>• Milk: 8.6 lb/gal</div>
                                <div>• Cooking oil: 7.68 lb/gal</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Gallon to Pound Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Density Matters</h4>
                            <p>The weight of a gallon depends entirely on the substance's density. Water weighs about 8.34 pounds per gallon, while gasoline weighs only about 6.07 pounds per gallon.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                            <p>Essential for fuel calculations, chemical mixing, shipping weights, cooking measurements, and any application where liquid volume needs to be converted to weight.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-amber-50 rounded-lg border border-amber-200">
                        <p class="text-sm text-amber-800">
                            <strong>Temperature Note:</strong> Liquid density can vary with temperature. These calculations assume standard room temperature conditions!
                        </p>
                    </div>
                </div>

                <!-- Common Volume Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Liquid Examples</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Water Gallon</div>
                            <div class="text-amber-600 cursor-pointer hover:text-amber-800 transition-colors" data-substance="Water" data-volume="1">1 gal</div>
                            <div class="text-xs text-gray-500 mt-1">~8.34 pounds</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Gas Tank</div>
                            <div class="text-amber-600 cursor-pointer hover:text-amber-800 transition-colors" data-substance="Gasoline" data-volume="15">15 gal</div>
                            <div class="text-xs text-gray-500 mt-1">~91 pounds</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Cooking Oil</div>
                            <div class="text-amber-600 cursor-pointer hover:text-amber-800 transition-colors" data-substance="Cooking oil" data-volume="0.5">0.5 gal</div>
                            <div class="text-xs text-gray-500 mt-1">~3.84 pounds</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Milk Jug</div>
                            <div class="text-amber-600 cursor-pointer hover:text-amber-800 transition-colors" data-substance="Milk" data-volume="1">1 gal</div>
                            <div class="text-xs text-gray-500 mt-1">~8.6 pounds</div>
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
                const substanceSelect = document.getElementById('substance');
                const customDensityContainer = document.getElementById('customDensityContainer');
                const customDensity = document.getElementById('customDensity');
                const densityDisplay = document.getElementById('densityDisplay');
                const gallonsInput = document.getElementById('gallons');
                const clearButton = document.getElementById('clearButton');
                const poundsOutput = document.getElementById('pounds');
                const kgOutput = document.getElementById('kgOutput');
                const ozOutput = document.getElementById('ozOutput');
                const tonnesOutput = document.getElementById('tonnesOutput');

                // Density in pounds per US gallon
                const densities = {
                    "Water": 8.34,
                    "Milk": 8.6,
                    "Cooking oil": 7.68,
                    "Diesel": 7.14,
                    "Gasoline": 6.07,
                    "Honey": 11.42,
                    "Mercury": 112.0,
                    "Ethanol": 6.58,
                    "Propane": 4.24,
                    "Kerosene": 6.8
                };

                function formatNumber(num) {
                    if (num >= 1000000) {
                        return num.toExponential(4);
                    } else if (num >= 1000) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 2 });
                    } else if (num >= 1) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 3 });
                    } else {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 4 });
                    }
                }

                function convert() {
                    const gal = parseFloat(gallonsInput.value);
                    let density;
                    
                    if (substanceSelect.value === 'Custom') {
                        density = parseFloat(customDensity.value);
                    } else {
                        density = densities[substanceSelect.value];
                    }

                    if (!isNaN(gal) && !isNaN(density) && gal >= 0 && density > 0) {
                        const pounds = gal * density;
                        const kg = pounds * 0.453592;
                        const oz = pounds * 16;
                        const tonnes = kg / 1000;

                        poundsOutput.textContent = formatNumber(pounds);
                        kgOutput.textContent = formatNumber(kg) + ' kg';
                        ozOutput.textContent = formatNumber(oz) + ' oz';
                        tonnesOutput.textContent = formatNumber(tonnes) + ' t';
                    } else {
                        poundsOutput.textContent = '--';
                        kgOutput.textContent = '--';
                        ozOutput.textContent = '--';
                        tonnesOutput.textContent = '--';
                    }
                }

                function updateDensityDisplay() {
                    const substance = substanceSelect.value;
                    
                    if (substance === 'Custom') {
                        customDensityContainer.style.display = 'block';
                        densityDisplay.value = customDensity.value || '';
                    } else if (substance && densities[substance]) {
                        customDensityContainer.style.display = 'none';
                        densityDisplay.value = densities[substance];
                        customDensity.value = '';
                    } else {
                        customDensityContainer.style.display = 'none';
                        densityDisplay.value = '';
                        customDensity.value = '';
                    }
                    convert();
                }

                function clearAll() {
                    gallonsInput.value = '';
                    customDensity.value = '';
                    substanceSelect.selectedIndex = 0;
                    updateDensityDisplay();
                    gallonsInput.focus();
                }

                // Event listeners
                substanceSelect.addEventListener('change', updateDensityDisplay);
                customDensity.addEventListener('input', () => {
                    densityDisplay.value = customDensity.value;
                    convert();
                });
                gallonsInput.addEventListener('input', convert);
                clearButton.addEventListener('click', clearAll);

                // Add clickable functionality to example liquids
                const exampleLiquids = document.querySelectorAll('[data-substance]');
                exampleLiquids.forEach(element => {
                    element.addEventListener('click', function() {
                        const substance = this.getAttribute('data-substance');
                        const volume = this.getAttribute('data-volume');
                        
                        substanceSelect.value = substance;
                        gallonsInput.value = volume;
                        updateDensityDisplay();
                        gallonsInput.focus();
                    });
                });

                // Initialize
                gallonsInput.focus();

                // Keyboard shortcuts
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        clearAll();
                    }
                });

                // Initialize conversion
                convert();
            });
        </script>
    </x-slot>
</x-app-layout>