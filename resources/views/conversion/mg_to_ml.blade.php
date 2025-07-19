<x-app-layout 
    title="mg to mL Converter - ConvertPro"
    description="Professional mg to mL converter for concentration-based calculations. Convert between weight and volume using substance concentration values."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'mg to mL Converter']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-pink-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-pink-100 rounded-full mb-4">
                      <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                      </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">mg ↔ mL Converter</h1>
                    <p class="text-gray-600">Convert between weight and volume using concentration</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-pink-500 to-pink-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Concentration-Based Conversion</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Substance Type Selection -->
                            <div class="space-y-2">
                                <label for="substanceType" class="block text-sm font-semibold text-gray-700">
                                    Substance Type
                                </label>
                                <select 
                                    id="substanceType" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option selected disabled>Select substance type</option>
                                    <option value="common-liquids">Common Liquids</option>
                                    <option value="solutions">Laboratory Solutions</option>
                                    <option value="custom">Custom Concentration</option>
                                </select>
                            </div>

                            <!-- Common Liquids Field -->
                            <div id="commonLiquidsField" class="space-y-2 hidden">
                                <label for="commonLiquid" class="block text-sm font-semibold text-gray-700">
                                    Select Liquid
                                </label>
                                <select 
                                    id="commonLiquid" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option selected disabled>Select liquid</option>
                                    <option value="1000">Water (1000 mg/mL)</option>
                                    <option value="1030">Milk (1030 mg/mL)</option>
                                    <option value="920">Cooking oil (920 mg/mL)</option>
                                    <option value="1420">Honey (1420 mg/mL)</option>
                                    <option value="1370">Maple syrup (1370 mg/mL)</option>
                                    <option value="790">Ethanol (790 mg/mL)</option>
                                </select>
                            </div>

                            <!-- Laboratory Solutions Field -->
                            <div id="solutionsField" class="space-y-2 hidden">
                                <label for="solution" class="block text-sm font-semibold text-gray-700">
                                    Select Solution
                                </label>
                                <select 
                                    id="solution" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option selected disabled>Select solution</option>
                                    <option value="10">10% Solution (100 mg/mL)</option>
                                    <option value="25">25% Solution (250 mg/mL)</option>
                                    <option value="50">50% Solution (500 mg/mL)</option>
                                    <option value="75">75% Solution (750 mg/mL)</option>
                                    <option value="100">Pure substance (1000 mg/mL)</option>
                                    <option value="custom-solution">Custom solution</option>
                                </select>
                            </div>

                            <!-- Custom Concentration Field -->
                            <div id="customField" class="space-y-2 hidden">
                                <label for="customConcentration" class="block text-sm font-semibold text-gray-700">
                                    Custom Concentration
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="customConcentration" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                        placeholder="Enter concentration (e.g., 75)"
                                        step="any"
                                        min="0.001"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">mg/mL</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Current Concentration Display -->
                            <div class="p-3 bg-pink-50 rounded-lg border border-pink-200">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-semibold text-pink-800">Current Concentration:</span>
                                    <span class="text-lg font-bold text-pink-700" id="concentrationDisplay">-- mg/mL</span>
                                </div>
                            </div>

                            <!-- Input Values -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="mgInput" class="block text-sm font-semibold text-gray-700">
                                        Weight
                                    </label>
                                    <div class="relative">
                                        <input 
                                            type="number" 
                                            id="mgInput" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                            placeholder="Enter weight (e.g., 100)"
                                            step="any"
                                            min="0"
                                        >
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 text-sm font-medium">mg</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label for="mlInput" class="block text-sm font-semibold text-gray-700">
                                        Volume
                                    </label>
                                    <div class="relative">
                                        <input 
                                            type="number" 
                                            id="mlInput" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                            placeholder="Enter volume (e.g., 5)"
                                            step="any"
                                            min="0"
                                        >
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 text-sm font-medium">mL</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Calculation Formula Display -->
                            <div class="p-3 bg-gray-50 rounded-lg border border-gray-200">
                                <h4 class="text-sm font-semibold text-gray-700 mb-2">Conversion Formula</h4>
                                <div class="text-sm text-gray-600 font-mono" id="formulaDisplay">
                                    Volume (mL) = Weight (mg) ÷ Concentration (mg/mL)
                                </div>
                            </div>

                            <!-- Clear Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="clearButton"
                                    class="inline-flex items-center px-4 py-2 bg-pink-100 hover:bg-pink-200 text-pink-700 font-medium rounded-lg transition-colors duration-200"
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
                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                            
                            <!-- Bidirectional Results -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="p-6 bg-gradient-to-r from-pink-50 to-cyan-50 rounded-xl border-l-4 border-pink-500">
                                    <div class="text-center">
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Weight</h4>
                                        <div class="text-2xl font-bold text-pink-600 font-mono" id="mgOutput">--</div>
                                        <div class="text-sm text-gray-500 font-medium">mg</div>
                                    </div>
                                </div>
                                <div class="p-6 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl border-l-4 border-cyan-500">
                                    <div class="text-center">
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Volume</h4>
                                        <div class="text-2xl font-bold text-cyan-600 font-mono" id="mlOutput">--</div>
                                        <div class="text-sm text-gray-500 font-medium">mL</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Volume Conversions -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Liters</h4>
                                        <div class="text-lg font-bold text-green-600 font-mono" id="litersOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Fluid Ounces</h4>
                                        <div class="text-lg font-bold text-purple-600 font-mono" id="flOzOutput">--</div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Teaspoons</h4>
                                        <div class="text-lg font-bold text-orange-600 font-mono" id="tspOutput">--</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step-by-Step Calculation -->
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="text-sm font-semibold text-gray-700 mb-2 text-center">Calculation Steps</h4>
                                <div class="text-center text-sm text-gray-600 font-mono" id="calculationSteps">
                                    Enter values to see calculation steps
                                </div>
                            </div>
                        </div>

                        <!-- Quick Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Concentration Reference</h4>
                            <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                <div>• Water: 1000 mg/mL</div>
                                <div>• 10% solution: 100 mg/mL</div>
                                <div>• 50% solution: 500 mg/mL</div>
                                <div>• Pure substance: 1000 mg/mL</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About mg to mL Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Concentration-Based Conversion</h4>
                            <p>Converting between milligrams (weight) and milliliters (volume) requires knowing the substance's concentration or density. Different substances have different concentrations, so the same weight can occupy different volumes.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                            <p>Essential for laboratory work, solution preparation, quality control, manufacturing processes, and any application where precise weight-to-volume conversions are needed based on substance concentration.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-pink-50 rounded-lg border border-pink-200">
                        <p class="text-sm text-pink-800">
                            <strong>Important Note:</strong> Concentration values may vary with temperature and purity. Use appropriate values for your specific application!
                        </p>
                    </div>
                </div>

                <!-- Common Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Conversion Examples</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Water Sample</div>
                            <div class="text-pink-600 cursor-pointer hover:text-pink-800 transition-colors" data-substance="common-liquids" data-liquid="1000" data-mg="100">100 mg</div>
                            <div class="text-xs text-gray-500 mt-1">0.1 mL</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">50% Solution</div>
                            <div class="text-pink-600 cursor-pointer hover:text-pink-800 transition-colors" data-substance="solutions" data-solution="50" data-mg="250">250 mg</div>
                            <div class="text-xs text-gray-500 mt-1">0.5 mL</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Honey Sample</div>
                            <div class="text-pink-600 cursor-pointer hover:text-pink-800 transition-colors" data-substance="common-liquids" data-liquid="1420" data-mg="710">710 mg</div>
                            <div class="text-xs text-gray-500 mt-1">0.5 mL</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="font-semibold text-gray-700">Oil Sample</div>
                            <div class="text-pink-600 cursor-pointer hover:text-pink-800 transition-colors" data-substance="common-liquids" data-liquid="920" data-mg="460">460 mg</div>
                            <div class="text-xs text-gray-500 mt-1">0.5 mL</div>
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
                const substanceType = document.getElementById('substanceType');
                const commonLiquidsField = document.getElementById('commonLiquidsField');
                const solutionsField = document.getElementById('solutionsField');
                const customField = document.getElementById('customField');
                const commonLiquid = document.getElementById('commonLiquid');
                const solution = document.getElementById('solution');
                const customConcentration = document.getElementById('customConcentration');
                const concentrationDisplay = document.getElementById('concentrationDisplay');
                const mgInput = document.getElementById('mgInput');
                const mlInput = document.getElementById('mlInput');
                const clearButton = document.getElementById('clearButton');
                const mgOutput = document.getElementById('mgOutput');
                const mlOutput = document.getElementById('mlOutput');
                const litersOutput = document.getElementById('litersOutput');
                const flOzOutput = document.getElementById('flOzOutput');
                const tspOutput = document.getElementById('tspOutput');
                const calculationSteps = document.getElementById('calculationSteps');

                let currentConcentration = 1;

                function formatNumber(num) {
                    if (num >= 1000) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 3 });
                    } else if (num >= 1) {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 4 });
                    } else {
                        return num.toLocaleString(undefined, { maximumFractionDigits: 6 });
                    }
                }

                function updateConcentration() {
                    const type = substanceType.value;

                    // Hide all fields
                    commonLiquidsField.classList.add('hidden');
                    solutionsField.classList.add('hidden');
                    customField.classList.add('hidden');

                    if (type === 'common-liquids') {
                        commonLiquidsField.classList.remove('hidden');
                        const liquidValue = commonLiquid.value;
                        if (liquidValue && liquidValue !== 'Select liquid') {
                            currentConcentration = parseFloat(liquidValue);
                        }
                    } else if (type === 'solutions') {
                        solutionsField.classList.remove('hidden');
                        const solutionValue = solution.value;
                        if (solutionValue === 'custom-solution') {
                            customField.classList.remove('hidden');
                            currentConcentration = parseFloat(customConcentration.value) || 1;
                        } else if (solutionValue && solutionValue !== 'Select solution') {
                            // Convert percentage to mg/mL (assuming water base)
                            currentConcentration = parseFloat(solutionValue) * 10;
                        }
                    } else if (type === 'custom') {
                        customField.classList.remove('hidden');
                        currentConcentration = parseFloat(customConcentration.value) || 1;
                    }

                    concentrationDisplay.textContent = formatNumber(currentConcentration) + ' mg/mL';
                }

                function convertFromMg() {
                    const mg = parseFloat(mgInput.value);
                    if (!isNaN(mg) && currentConcentration > 0) {
                        const ml = mg / currentConcentration;
                        mlInput.value = formatNumber(ml);
                        updateOutputs(mg, ml);
                        updateCalculationSteps(mg, ml, 'mg-to-ml');
                    } else {
                        clearOutputs();
                    }
                }

                function convertFromMl() {
                    const ml = parseFloat(mlInput.value);
                    if (!isNaN(ml) && currentConcentration > 0) {
                        const mg = ml * currentConcentration;
                        mgInput.value = formatNumber(mg);
                        updateOutputs(mg, ml);
                        updateCalculationSteps(mg, ml, 'ml-to-mg');
                    } else {
                        clearOutputs();
                    }
                }

                function updateOutputs(mg, ml) {
                    mgOutput.textContent = formatNumber(mg);
                    mlOutput.textContent = formatNumber(ml);
                    
                    // Additional conversions
                    const liters = ml / 1000;
                    const flOz = ml * 0.033814;
                    const tsp = ml * 0.202884;

                    litersOutput.textContent = formatNumber(liters) + ' L';
                    flOzOutput.textContent = formatNumber(flOz) + ' fl oz';
                    tspOutput.textContent = formatNumber(tsp) + ' tsp';
                }

                function updateCalculationSteps(mg, ml, direction) {
                    if (direction === 'mg-to-ml') {
                        calculationSteps.textContent = `${formatNumber(mg)} mg ÷ ${formatNumber(currentConcentration)} mg/mL = ${formatNumber(ml)} mL`;
                    } else {
                        calculationSteps.textContent = `${formatNumber(ml)} mL × ${formatNumber(currentConcentration)} mg/mL = ${formatNumber(mg)} mg`;
                    }
                }

                function clearOutputs() {
                    mgOutput.textContent = '--';
                    mlOutput.textContent = '--';
                    litersOutput.textContent = '--';
                    flOzOutput.textContent = '--';
                    tspOutput.textContent = '--';
                    calculationSteps.textContent = 'Enter values to see calculation steps';
                }

                function clearAll() {
                    mgInput.value = '';
                    mlInput.value = '';
                    substanceType.selectedIndex = 0;
                    commonLiquid.selectedIndex = 0;
                    solution.selectedIndex = 0;
                    customConcentration.value = '';
                    commonLiquidsField.classList.add('hidden');
                    solutionsField.classList.add('hidden');
                    customField.classList.add('hidden');
                    currentConcentration = 1;
                    concentrationDisplay.textContent = '-- mg/mL';
                    clearOutputs();
                    mgInput.focus();
                }

                // Event listeners
                substanceType.addEventListener('change', () => {
                    updateConcentration();
                    convertFromMg();
                });

                commonLiquid.addEventListener('change', () => {
                    updateConcentration();
                    convertFromMg();
                });

                solution.addEventListener('change', () => {
                    updateConcentration();
                    convertFromMg();
                });

                customConcentration.addEventListener('input', () => {
                    updateConcentration();
                    convertFromMg();
                });

                mgInput.addEventListener('input', convertFromMg);
                mlInput.addEventListener('input', convertFromMl);
                clearButton.addEventListener('click', clearAll);

                // Add clickable functionality to examples
                const examples = document.querySelectorAll('[data-substance]');
                examples.forEach(element => {
                    element.addEventListener('click', function() {
                        const substance = this.getAttribute('data-substance');
                        const liquid = this.getAttribute('data-liquid');
                        const solutionVal = this.getAttribute('data-solution');
                        const mg = this.getAttribute('data-mg');
                        
                        substanceType.value = substance;
                        updateConcentration();
                        
                        if (substance === 'common-liquids' && liquid) {
                            commonLiquid.value = liquid;
                        } else if (substance === 'solutions' && solutionVal) {
                            solution.value = solutionVal;
                        }
                        
                        updateConcentration();
                        mgInput.value = mg;
                        convertFromMg();
                        mgInput.focus();
                    });
                });

                // Initialize
                mgInput.focus();

                // Keyboard shortcuts
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        clearAll();
                    }
                });

                // Initialize outputs
                clearOutputs();
            });
        </script>
    </x-slot>
</x-app-layout>