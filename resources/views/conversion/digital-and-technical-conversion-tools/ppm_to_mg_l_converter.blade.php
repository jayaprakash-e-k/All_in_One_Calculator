<x-tool-page-layout
    title="PPM to mg/L Converter - ConvertPro"
    description="Professional PPM to mg/L converter for water quality concentration units. Convert parts per million to milligrams per liter for accurate water analysis and testing."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Water Quality Concentration Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Conversion Direction -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Conversion Direction
                                                                                </label>
                                                                                <select 
                                                                                    id="conversionDirection" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                >
                                                                                    <option value="ppm_to_mgl" selected>PPM to mg/L</option>
                                                                                    <option value="mgl_to_ppm">mg/L to PPM</option>
                                                                                    <option value="both">Show Both Directions</option>
                                                                                </select>
                                                                            </div>

                                                                            <!-- Input Value -->
                                                                            <div class="space-y-2">
                                                                                <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                                                                    PPM Value
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="inputValue" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-mono" 
                                                                                        placeholder="Enter concentration (e.g., 100)"
                                                                                        step="any"
                                                                                        min="0"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium" id="inputUnit">PPM</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500" id="inputHint">Enter concentration value for conversion</p>
                                                                            </div>

                                                                            <!-- Solution Properties -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Solution Type
                                                                                </label>
                                                                                <select 
                                                                                    id="solutionType" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                >
                                                                                    <option value="water" selected>Pure Water (density ≈ 1.000 g/mL)</option>
                                                                                    <option value="drinking_water">Drinking Water (density ≈ 1.001 g/mL)</option>
                                                                                    <option value="seawater">Seawater (density ≈ 1.025 g/mL)</option>
                                                                                    <option value="wastewater">Wastewater (density ≈ 1.005 g/mL)</option>
                                                                                    <option value="saline">Saline Solution (density ≈ 1.020 g/mL)</option>
                                                                                    <option value="custom">Custom Density</option>
                                                                                </select>
                                                                            </div>

                                                                            <!-- Custom Density -->
                                                                            <div class="space-y-2" id="customDensityContainer" style="display: none;">
                                                                                <label for="customDensity" class="block text-sm font-semibold text-gray-700">
                                                                                    Solution Density
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="customDensity" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-mono" 
                                                                                        placeholder="Enter density (e.g., 1.000)"
                                                                                        step="0.001"
                                                                                        min="0.1"
                                                                                        max="5.0"
                                                                                        value="1.000"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium">g/mL</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500">Solution density at measurement temperature</p>
                                                                            </div>

                                                                            <!-- Temperature -->
                                                                            <div class="space-y-2">
                                                                                <label for="temperature" class="block text-sm font-semibold text-gray-700">
                                                                                    Temperature (°C)
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="temperature" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-mono" 
                                                                                        placeholder="Temperature"
                                                                                        step="0.1"
                                                                                        value="20"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium">°C</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500">Temperature affects water density (standard: 20°C)</p>
                                                                            </div>

                                                                            <!-- Application Context -->
                                                                            <div class="space-y-2 hidden">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Application Context
                                                                                </label>
                                                                                <select 
                                                                                    id="applicationContext" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                >
                                                                                    <option value="">General water analysis</option>
                                                                                    <option value="drinking_water">Drinking Water Quality</option>
                                                                                    <option value="environmental">Environmental Monitoring</option>
                                                                                    <option value="wastewater">Wastewater Treatment</option>
                                                                                    <option value="aquaculture">Aquaculture/Fish Farming</option>
                                                                                    <option value="pool">Swimming Pool Chemistry</option>
                                                                                    <option value="laboratory">Laboratory Analysis</option>
                                                                                </select>
                                                                            </div>



                                                                            <!-- Clear Button -->
                                                                            <div class="flex justify-center">
                                                                                <button 
                                                                                    type="button" 
                                                                                    id="clearButton"
                                                                                    class="inline-flex items-center px-4 py-2 bg-cyan-100 hover:bg-cyan-200 text-cyan-700 font-medium rounded-lg transition-colors duration-200"
                                                                                >
                                                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                    </svg>
                                                                                    Clear
                                                                                </button>
                                                                            </div>

                                                                        </form>
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Results Display -->
                                                                        <div class="mt-8 space-y-4">
                                                                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Concentration Conversion Results</h3>

                                                                            <!-- Primary Result -->
                                                                            <div class="p-6 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl border-l-4 border-cyan-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Converted Value</h4>
                                                                                        <p class="text-sm text-gray-600" id="result-description">Conversion result</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-cyan-600 font-mono" id="output">--</div>
                                                                                        <button class="text-xs text-cyan-600 hover:text-cyan-800 mt-1" id="copyResult">Copy Result</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Concentration Units Display -->
                                                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                                                                <!-- Primary Units -->
                                                                                <div class="space-y-3">
                                                                                    <h4 class="font-semibold text-gray-700 text-center">Primary Units</h4>

                                                                                    <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">PPM</h5>
                                                                                            <div class="text-lg font-bold text-blue-600 font-mono" id="ppmDisplay">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Parts per million</div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="p-3 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">mg/L</h5>
                                                                                            <div class="text-lg font-bold text-indigo-600 font-mono" id="mgLDisplay">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Milligrams per liter</div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">μg/mL</h5>
                                                                                            <div class="text-lg font-bold text-purple-600 font-mono" id="ugMlDisplay">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Micrograms per milliliter</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Related Units -->
                                                                                <div class="space-y-3">
                                                                                    <h4 class="font-semibold text-gray-700 text-center">Related Units</h4>

                                                                                    <div class="p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">PPB</h5>
                                                                                            <div class="text-lg font-bold text-green-600 font-mono" id="ppbDisplay">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Parts per billion</div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="p-3 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg border-l-4 border-emerald-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">μg/L</h5>
                                                                                            <div class="text-lg font-bold text-emerald-600 font-mono" id="ugLDisplay">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Micrograms per liter</div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">g/m³</h5>
                                                                                            <div class="text-lg font-bold text-teal-600 font-mono" id="gM3Display">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Grams per cubic meter</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Percentage & Fraction -->
                                                                                <div class="space-y-3">
                                                                                    <h4 class="font-semibold text-gray-700 text-center">Percentage & Mass</h4>

                                                                                    <div class="p-3 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Percentage</h5>
                                                                                            <div class="text-lg font-bold text-orange-600 font-mono" id="percentageDisplay">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Weight percentage</div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="p-3 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Mass Fraction</h5>
                                                                                            <div class="text-lg font-bold text-red-600 font-mono" id="massFractionDisplay">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Dimensionless ratio</div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="p-3 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                                                                        <div class="text-center">
                                                                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Mass per Volume</h5>
                                                                                            <div class="text-lg font-bold text-pink-600 font-mono" id="massVolumeDisplay">--</div>
                                                                                            <div class="text-xs text-gray-500 mt-1">Actual density contribution</div>
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
                <!-- Quick Water Quality Examples -->
                                                    <div class="space-y-2">
                                                        <label class="block text-sm font-semibold text-gray-700">
                                                            Quick Water Quality Examples
                                                        </label>
                                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                                            <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-cyan-100 text-gray-700 hover:text-cyan-700 rounded-lg transition-colors" data-value="1" data-direction="ppm_to_mgl">1 PPM</button>
                                                            <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-cyan-100 text-gray-700 hover:text-cyan-700 rounded-lg transition-colors" data-value="50" data-direction="ppm_to_mgl">50 PPM</button>
                                                            <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-cyan-100 text-gray-700 hover:text-cyan-700 rounded-lg transition-colors" data-value="500" data-direction="ppm_to_mgl">500 PPM</button>
                                                            <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-cyan-100 text-gray-700 hover:text-cyan-700 rounded-lg transition-colors" data-value="100" data-direction="mgl_to_ppm">100 mg/L</button>
                                                        </div>
                                                    </div>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <!-- Reference Information -->
                                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">PPM ↔ mg/L Reference</h4>
                                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                                        <div><strong>Pure water:</strong> 1 PPM = 1 mg/L</div>
                                                        <div><strong>Seawater:</strong> 1 PPM ≈ 1.025 mg/L</div>
                                                        <div><strong>Temperature:</strong> Affects density</div>
                                                        <div><strong>Salinity:</strong> Increases density</div>
                                                        <div><strong>Standard conditions:</strong> 20°C, 1 atm</div>
                                                        <div><strong>Lab accuracy:</strong> ±0.1% typical</div>
                                                        <div><strong>Field testing:</strong> ±1-5% typical</div>
                                                        <div><strong>Calibration:</strong> Critical for accuracy</div>
                                                        <div><strong>1 mg/L</strong> = 1000 μg/L</div>
                                                        <div><strong>1 PPM</strong> = 1000 PPB</div>
                                                        <div><strong>Mass basis:</strong> More accurate</div>
                                                        <div><strong>Volume basis:</strong> Temperature dependent</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About PPM to mg/L Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Understanding the Relationship</h4>
                                    <p>For aqueous solutions, PPM and mg/L are often considered equivalent because water has a density close to 1 g/mL. However, this relationship changes with temperature, salinity, and dissolved substances. Accurate conversions require considering solution density and measurement conditions.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                                    <p>This conversion is essential in water quality testing, environmental monitoring, chemical dosing, and regulatory compliance. Understanding the relationship helps ensure accurate measurements in drinking water analysis, wastewater treatment, and environmental assessments.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-cyan-50 rounded-lg border border-cyan-200">
                                <p class="text-sm text-cyan-800">
                                    <strong>Technical Note:</strong> PPM is dimensionless (mass/mass), while mg/L has dimensions (mass/volume). The conversion depends on solution density, making temperature and composition important factors.
                                </p>
                            </div>
                        </div>

                        <!-- Practical Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Water Quality Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Drinking Water Standards</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-cyan-600 cursor-pointer hover:text-cyan-800" data-value="500" data-direction="ppm_to_mgl">TDS Limit: 500 PPM</div>
                                        <div class="text-xs text-gray-600 mt-1">WHO total dissolved solids limit</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-cyan-600 cursor-pointer hover:text-cyan-800" data-value="0.01" data-direction="ppm_to_mgl">Arsenic: 0.01 PPM</div>
                                        <div class="text-xs text-gray-600 mt-1">WHO maximum allowable limit</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Environmental Monitoring</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-cyan-600 cursor-pointer hover:text-cyan-800" data-value="8" data-direction="mgl_to_ppm">Dissolved O₂: 8 mg/L</div>
                                        <div class="text-xs text-gray-600 mt-1">Healthy aquatic ecosystem level</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-cyan-600 cursor-pointer hover:text-cyan-800" data-value="0.1" data-direction="mgl_to_ppm">Phosphorus: 0.1 mg/L</div>
                                        <div class="text-xs text-gray-600 mt-1">Eutrophication threshold</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const conversionDirection = document.getElementById('conversionDirection');
                        const inputValue = document.getElementById('inputValue');
                        const solutionType = document.getElementById('solutionType');
                        const customDensity = document.getElementById('customDensity');
                        const temperature = document.getElementById('temperature');
                        const applicationContext = document.getElementById('applicationContext');
                        const clearButton = document.getElementById('clearButton');
                        
                        // Container elements
                        const customDensityContainer = document.getElementById('customDensityContainer');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHint = document.getElementById('inputHint');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const ppmDisplay = document.getElementById('ppmDisplay');
                        const mgLDisplay = document.getElementById('mgLDisplay');
                        const ugMlDisplay = document.getElementById('ugMlDisplay');
                        const ppbDisplay = document.getElementById('ppbDisplay');
                        const ugLDisplay = document.getElementById('ugLDisplay');
                        const gM3Display = document.getElementById('gM3Display');
                        const percentageDisplay = document.getElementById('percentageDisplay');
                        const massFractionDisplay = document.getElementById('massFractionDisplay');
                        const massVolumeDisplay = document.getElementById('massVolumeDisplay');
                        const densityDisplay = document.getElementById('densityDisplay');
                        const tempDisplay = document.getElementById('tempDisplay');
                        const conversionFactorDisplay = document.getElementById('conversionFactorDisplay');
                        const accuracyDisplay = document.getElementById('accuracyDisplay');
                        const copyResult = document.getElementById('copyResult');

                        // Solution densities at 20°C (g/mL)
                        const solutionDensities = {
                            water: 0.998,
                            drinking_water: 1.001,
                            seawater: 1.025,
                            wastewater: 1.005,
                            saline: 1.020,
                            custom: 1.000
                        };

                        function formatNumber(num, decimals = 4) {
                            if (Math.abs(num) >= 1e6 || (Math.abs(num) <= 1e-6 && num !== 0)) {
                                return num.toExponential(3);
                            }
                            return num.toLocaleString(undefined, { 
                                maximumFractionDigits: decimals, 
                                minimumFractionDigits: 0 
                            });
                        }

                        function updateInputLabels() {
                            const direction = conversionDirection.value;
                            
                            switch(direction) {
                                case 'ppm_to_mgl':
                                    inputLabel.textContent = 'PPM Value';
                                    inputUnit.textContent = 'PPM';
                                    inputHint.textContent = 'Enter parts per million value';
                                    break;
                                case 'mgl_to_ppm':
                                    inputLabel.textContent = 'mg/L Value';
                                    inputUnit.textContent = 'mg/L';
                                    inputHint.textContent = 'Enter milligrams per liter value';
                                    break;
                                case 'both':
                                    inputLabel.textContent = 'Concentration Value';
                                    inputUnit.textContent = 'PPM';
                                    inputHint.textContent = 'Enter concentration (will show both conversions)';
                                    break;
                            }
                        }

                        function updateCustomDensityVisibility() {
                            const type = solutionType.value;
                            customDensityContainer.style.display = type === 'custom' ? 'block' : 'none';
                        }

                        function getDensity() {
                            const type = solutionType.value;
                            const temp = parseFloat(temperature.value) || 20;
                            
                            let baseDensity;
                            if (type === 'custom') {
                                baseDensity = parseFloat(customDensity.value) || 1.000;
                            } else {
                                baseDensity = solutionDensities[type] || 1.000;
                            }
                            
                            // Temperature correction for water-based solutions
                            if (type === 'water' || type === 'drinking_water') {
                                // Water density correction: roughly -0.0002 g/mL per °C above 20°C
                                const tempCorrection = 1 - (temp - 20) * 0.0002;
                                baseDensity *= tempCorrection;
                            }
                            
                            return Math.max(0.1, Math.min(5.0, baseDensity));
                        }

                        function calculate() {
                            const direction = conversionDirection.value;
                            const value = parseFloat(inputValue.value);
                            const density = getDensity();
                            const temp = parseFloat(temperature.value) || 20;
                            
                            if (!isNaN(value) && value >= 0) {
                                let ppm, mgL;
                                
                                // Core conversion logic
                                if (direction === 'ppm_to_mgl' || direction === 'both') {
                                    ppm = value;
                                    mgL = ppm * density; // PPM to mg/L conversion
                                } else if (direction === 'mgl_to_ppm') {
                                    mgL = value;
                                    ppm = mgL / density; // mg/L to PPM conversion
                                }
                                
                                // Update primary output
                                if (direction === 'ppm_to_mgl') {
                                    output.textContent = formatNumber(mgL, 3) + ' mg/L';
                                    resultTitle.textContent = 'Converted to mg/L';
                                    resultDescription.textContent = `${value} PPM = ${formatNumber(mgL, 3)} mg/L`;
                                } else if (direction === 'mgl_to_ppm') {
                                    output.textContent = formatNumber(ppm, 3) + ' PPM';
                                    resultTitle.textContent = 'Converted to PPM';
                                    resultDescription.textContent = `${value} mg/L = ${formatNumber(ppm, 3)} PPM`;
                                } else {
                                    output.textContent = formatNumber(mgL, 3) + ' mg/L';
                                    resultTitle.textContent = 'Both Conversions';
                                    resultDescription.textContent = `${value} PPM ⇔ ${formatNumber(mgL, 3)} mg/L`;
                                }

                                // Display all units
                                ppmDisplay.textContent = formatNumber(ppm, 3) + ' PPM';
                                mgLDisplay.textContent = formatNumber(mgL, 3) + ' mg/L';
                                ugMlDisplay.textContent = formatNumber(mgL, 3) + ' μg/mL';
                                
                                // Related units
                                ppbDisplay.textContent = formatNumber(ppm * 1000, 1) + ' PPB';
                                ugLDisplay.textContent = formatNumber(mgL * 1000, 1) + ' μg/L';
                                gM3Display.textContent = formatNumber(mgL, 3) + ' g/m³';
                                
                                // Percentage and mass fraction
                                percentageDisplay.textContent = formatNumber(ppm / 10000, 6) + '%';
                                massFractionDisplay.textContent = formatNumber(ppm / 1000000, 8);
                                massVolumeDisplay.textContent = formatNumber(mgL / 1000, 6) + ' kg/m³';

                                // Conversion information
                                densityDisplay.textContent = formatNumber(density, 4) + ' g/mL';
                                tempDisplay.textContent = temp + '°C';
                                conversionFactorDisplay.textContent = formatNumber(density, 4);
                                
                                // Accuracy estimation
                                let accuracy = 'High';
                                if (Math.abs(density - 1.000) > 0.05) accuracy = 'Medium';
                                if (Math.abs(temp - 20) > 10) accuracy = 'Medium';
                                if (solutionType.value === 'custom') accuracy = 'User-dependent';
                                accuracyDisplay.textContent = accuracy;

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            resultTitle.textContent = 'Converted Value';
                            resultDescription.textContent = 'Conversion result';
                            ppmDisplay.textContent = '--';
                            mgLDisplay.textContent = '--';
                            ugMlDisplay.textContent = '--';
                            ppbDisplay.textContent = '--';
                            ugLDisplay.textContent = '--';
                            gM3Display.textContent = '--';
                            percentageDisplay.textContent = '--';
                            massFractionDisplay.textContent = '--';
                            massVolumeDisplay.textContent = '--';
                            densityDisplay.textContent = '--';
                            tempDisplay.textContent = '--';
                            conversionFactorDisplay.textContent = '--';
                            accuracyDisplay.textContent = '--';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            conversionDirection.value = 'ppm_to_mgl';
                            solutionType.value = 'water';
                            customDensity.value = '1.000';
                            temperature.value = '20';
                            applicationContext.value = '';
                            updateInputLabels();
                            updateCustomDensityVisibility();
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        conversionDirection.addEventListener('change', function() {
                            updateInputLabels();
                            calculate();
                        });
                        
                        inputValue.addEventListener('input', calculate);
                        solutionType.addEventListener('change', function() {
                            updateCustomDensityVisibility();
                            calculate();
                        });
                        customDensity.addEventListener('input', calculate);
                        temperature.addEventListener('input', calculate);
                        applicationContext.addEventListener('change', calculate);

                        clearButton.addEventListener('click', clearAll);

                        // Copy functionality
                        copyResult.addEventListener('click', function() {
                            const text = output.textContent;
                            if (text !== '--') {
                                navigator.clipboard.writeText(text).then(() => {
                                    this.textContent = 'Copied!';
                                    setTimeout(() => {
                                        this.textContent = 'Copy Result';
                                    }, 2000);
                                });
                            }
                        });

                        // Example buttons
                        const exampleBtns = document.querySelectorAll('.example-btn');
                        exampleBtns.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const direction = this.getAttribute('data-direction');
                                
                                inputValue.value = value;
                                conversionDirection.value = direction;
                                updateInputLabels();
                                calculate();
                                
                                // Update button styles
                                exampleBtns.forEach(btn => btn.classList.remove('bg-cyan-100', 'text-cyan-700'));
                                exampleBtns.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-cyan-100', 'text-cyan-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-value][data-direction]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const direction = this.getAttribute('data-direction');
                                
                                if (value && direction) {
                                    inputValue.value = value;
                                    conversionDirection.value = direction;
                                    updateInputLabels();
                                    calculate();
                                    inputValue.focus();
                                }
                            });
                        });

                        // Initialize
                        updateInputLabels();
                        updateCustomDensityVisibility();
                        inputValue.focus();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearAll();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
