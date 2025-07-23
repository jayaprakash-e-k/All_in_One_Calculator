<x-app-layout 
    title="PPM Calculator - ConvertPro"
    description="Professional PPM calculator for parts per million calculations. Convert concentrations, analyze solutions, and calculate dilutions for chemistry and water quality testing."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'PPM Calculator']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-teal-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-teal-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">PPM Calculator</h1>
                    <p class="text-gray-600">Parts per million calculations for concentration analysis</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-teal-500 to-teal-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Concentration Analysis Calculator</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Calculation Method -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Calculation Method
                                </label>
                                <select 
                                    id="calculationMethod" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="mass_volume" selected>Mass/Volume (mg/L to PPM)</option>
                                    <option value="mass_mass">Mass/Mass (mg/kg to PPM)</option>
                                    <option value="volume_volume">Volume/Volume (mL/L to PPM)</option>
                                    <option value="percentage">Percentage to PPM</option>
                                    <option value="molarity">Molarity to PPM</option>
                                    <option value="dilution">Dilution Calculator</option>
                                </select>
                            </div>

                            <!-- Solute Amount -->
                            <div class="space-y-2" id="soluteContainer">
                                <label for="soluteAmount" class="block text-sm font-semibold text-gray-700" id="soluteLabel">
                                    Solute Mass
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="soluteAmount" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter solute amount (e.g., 10)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium" id="soluteUnit">mg</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500" id="soluteHint">Enter the amount of solute</p>
                            </div>

                            <!-- Solution Amount -->
                            <div class="space-y-2" id="solutionContainer">
                                <label for="solutionAmount" class="block text-sm font-semibold text-gray-700" id="solutionLabel">
                                    Solution Volume
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="solutionAmount" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter solution amount (e.g., 1)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium" id="solutionUnit">L</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500" id="solutionHint">Enter the total solution amount</p>
                            </div>

                            <!-- Molecular Weight (for molarity) -->
                            <div class="space-y-2" id="molecularWeightContainer" style="display: none;">
                                <label for="molecularWeight" class="block text-sm font-semibold text-gray-700">
                                    Molecular Weight
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="molecularWeight" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter molecular weight (e.g., 58.44)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">g/mol</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">Molecular weight of the compound</p>
                            </div>

                            <!-- Solution Type -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Solution Type
                                </label>
                                <select 
                                    id="solutionType" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="water" selected>Aqueous (Water-based)</option>
                                    <option value="air">Gas/Air mixture</option>
                                    <option value="soil">Soil/Solid matrix</option>
                                    <option value="oil">Oil-based solution</option>
                                    <option value="alcohol">Alcohol-based solution</option>
                                    <option value="other">Other solution</option>
                                </select>
                            </div>

                            <!-- Temperature (affects density) -->
                            <div class="space-y-2">
                                <label for="temperature" class="block text-sm font-semibold text-gray-700">
                                    Temperature (°C)
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="temperature" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Temperature"
                                        step="any"
                                        value="20"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">°C</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">Temperature affects solution density</p>
                            </div>

                            <!-- Quick PPM Examples -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Quick PPM Examples
                                </label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-solute="10" data-solution="1" data-method="mass_volume">10 mg/L</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-solute="100" data-solution="1" data-method="mass_volume">100 mg/L</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-solute="1" data-solution="100" data-method="percentage">1%</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-solute="0.1" data-solution="1" data-method="molarity">0.1 M</button>
                                </div>
                            </div>

                            <!-- Clear Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="clearButton"
                                    class="inline-flex items-center px-4 py-2 bg-teal-100 hover:bg-teal-200 text-teal-700 font-medium rounded-lg transition-colors duration-200"
                                >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Clear
                                </button>
                            </div>

                        </form>

                        <!-- Results Display -->
                        <div class="mt-8 space-y-4">
                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">PPM Calculation Results</h3>
                            
                            <!-- Primary Result -->
                            <div class="p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl border-l-4 border-teal-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Concentration (PPM)</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Calculated concentration result</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-teal-600 font-mono" id="output">--</div>
                                        <button class="text-xs text-teal-600 hover:text-teal-800 mt-1" id="copyResult">Copy Result</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Concentration Units Display -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- PPM Variants -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">PPM Variants</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">PPM (w/v)</h5>
                                            <div class="text-lg font-bold text-blue-600 font-mono" id="ppmWvDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Weight/Volume</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">PPM (w/w)</h5>
                                            <div class="text-lg font-bold text-indigo-600 font-mono" id="ppmWwDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Weight/Weight</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">PPM (v/v)</h5>
                                            <div class="text-lg font-bold text-purple-600 font-mono" id="ppmVvDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Volume/Volume</div>
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
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">mg/L</h5>
                                            <div class="text-lg font-bold text-emerald-600 font-mono" id="mgLDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Milligrams per liter</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Percentage</h5>
                                            <div class="text-lg font-bold text-teal-600 font-mono" id="percentageDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Percent concentration</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Molarity & Normality -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Molar Units</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Molarity</h5>
                                            <div class="text-lg font-bold text-orange-600 font-mono" id="molarityDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Moles per liter</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Molality</h5>
                                            <div class="text-lg font-bold text-red-600 font-mono" id="molalityDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Moles per kg solvent</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Normality</h5>
                                            <div class="text-lg font-bold text-pink-600 font-mono" id="normalityDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Equivalents per liter</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden">
                                <!-- Solution Properties -->
                                <div class="p-4 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border border-cyan-200">
                                    <h4 class="text-sm font-semibold text-cyan-800 mb-2 text-center">Solution Properties</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                        <div class="text-center">
                                            <span class="text-gray-600 block">Density:</span>
                                            <span class="font-mono text-cyan-700" id="densityDisplay">--</span>
                                        </div>
                                        <div class="text-center">
                                            <span class="text-gray-600 block">Total Mass:</span>
                                            <span class="font-mono text-cyan-700" id="totalMassDisplay">--</span>
                                        </div>
                                        <div class="text-center">
                                            <span class="text-gray-600 block">Solvent Mass:</span>
                                            <span class="font-mono text-cyan-700" id="solventMassDisplay">--</span>
                                        </div>
                                        <div class="text-center">
                                            <span class="text-gray-600 block">Dilution Factor:</span>
                                            <span class="font-mono text-cyan-700" id="dilutionFactorDisplay">--</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Formula Display -->
                                <div class="p-4 bg-gradient-to-r from-amber-50 to-yellow-50 rounded-lg border border-amber-200">
                                    <h4 class="text-sm font-semibold text-amber-800 mb-2 text-center">Calculation Formula</h4>
                                    <div class="text-sm text-amber-700 text-center">
                                        <div class="font-mono bg-white px-3 py-2 rounded border inline-block" id="formulaDisplay">
                                            Select method to see formula
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reference Information -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">PPM Reference</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                <div><strong>1 PPM</strong> = 1 mg/L (water)</div>
                                <div><strong>1 PPM</strong> = 1 mg/kg (solids)</div>
                                <div><strong>1%</strong> = 10,000 PPM</div>
                                <div><strong>1 PPB</strong> = 0.001 PPM</div>
                                <div><strong>Drinking water</strong> < 500 PPM TDS</div>
                                <div><strong>Seawater</strong> ≈ 35,000 PPM salt</div>
                                <div><strong>Pool chlorine</strong> = 1-3 PPM</div>
                                <div><strong>Air CO₂</strong> ≈ 400 PPM</div>
                                <div><strong>WHO arsenic limit</strong> = 0.01 PPM</div>
                                <div><strong>EPA lead limit</strong> = 0.015 PPM</div>
                                <div><strong>Soil fertility</strong> = 20-200 PPM N</div>
                                <div><strong>Industrial waste</strong> varies greatly</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About PPM Calculations</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Understanding PPM</h4>
                            <p>Parts per million (PPM) is a unit of concentration expressing the ratio of one part solute to one million parts solution. It's widely used in chemistry, environmental science, and water quality testing because it provides an intuitive way to express very small concentrations.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Applications</h4>
                            <p>PPM calculations are essential in water treatment, environmental monitoring, food safety, pharmaceutical manufacturing, and agricultural soil testing. Understanding PPM helps in quality control, regulatory compliance, and safety assessments.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-teal-50 rounded-lg border border-teal-200">
                        <p class="text-sm text-teal-800">
                            <strong>Important Note:</strong> For aqueous solutions, 1 PPM ≈ 1 mg/L due to water's density of ~1 g/mL. This approximation may not hold for other solvents.
                        </p>
                    </div>
                </div>

                <!-- Practical Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common PPM Applications</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Water Quality</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-solute="1" data-solution="1" data-method="mass_volume">Chlorine: 1-3 PPM</div>
                                <div class="text-xs text-gray-600 mt-1">Swimming pool disinfection</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-solute="500" data-solution="1" data-method="mass_volume">TDS: 500 PPM</div>
                                <div class="text-xs text-gray-600 mt-1">Total dissolved solids limit</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Environmental</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-solute="400" data-solution="1000000" data-method="volume_volume">CO₂: 400 PPM</div>
                                <div class="text-xs text-gray-600 mt-1">Atmospheric carbon dioxide</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-solute="0.01" data-solution="1" data-method="mass_volume">Arsenic: 0.01 PPM</div>
                                <div class="text-xs text-gray-600 mt-1">WHO drinking water limit</div>
                            </div>
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
                const calculationMethod = document.getElementById('calculationMethod');
                const soluteAmount = document.getElementById('soluteAmount');
                const solutionAmount = document.getElementById('solutionAmount');
                const molecularWeight = document.getElementById('molecularWeight');
                const solutionType = document.getElementById('solutionType');
                const temperature = document.getElementById('temperature');
                const clearButton = document.getElementById('clearButton');
                
                // Container elements
                const molecularWeightContainer = document.getElementById('molecularWeightContainer');
                const soluteLabel = document.getElementById('soluteLabel');
                const solutionLabel = document.getElementById('solutionLabel');
                const soluteUnit = document.getElementById('soluteUnit');
                const solutionUnit = document.getElementById('solutionUnit');
                const soluteHint = document.getElementById('soluteHint');
                const solutionHint = document.getElementById('solutionHint');
                
                // Output elements
                const output = document.getElementById('output');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const ppmWvDisplay = document.getElementById('ppmWvDisplay');
                const ppmWwDisplay = document.getElementById('ppmWwDisplay');
                const ppmVvDisplay = document.getElementById('ppmVvDisplay');
                const ppbDisplay = document.getElementById('ppbDisplay');
                const mgLDisplay = document.getElementById('mgLDisplay');
                const percentageDisplay = document.getElementById('percentageDisplay');
                const molarityDisplay = document.getElementById('molarityDisplay');
                const molalityDisplay = document.getElementById('molalityDisplay');
                const normalityDisplay = document.getElementById('normalityDisplay');
                const densityDisplay = document.getElementById('densityDisplay');
                const totalMassDisplay = document.getElementById('totalMassDisplay');
                const solventMassDisplay = document.getElementById('solventMassDisplay');
                const dilutionFactorDisplay = document.getElementById('dilutionFactorDisplay');
                const formulaDisplay = document.getElementById('formulaDisplay');
                const copyResult = document.getElementById('copyResult');

                // Solution densities (g/mL at 20°C)
                const solutionDensities = {
                    water: 0.998,
                    air: 0.001225,
                    soil: 1.5,
                    oil: 0.85,
                    alcohol: 0.789,
                    other: 1.0
                };

                function formatNumber(num, decimals = 3) {
                    if (Math.abs(num) >= 1e6 || (Math.abs(num) <= 1e-6 && num !== 0)) {
                        return num.toExponential(3);
                    }
                    return num.toLocaleString(undefined, { 
                        maximumFractionDigits: decimals, 
                        minimumFractionDigits: 0 
                    });
                }

                function updateInputLabels() {
                    const method = calculationMethod.value;
                    
                    switch(method) {
                        case 'mass_volume':
                            soluteLabel.textContent = 'Solute Mass';
                            solutionLabel.textContent = 'Solution Volume';
                            soluteUnit.textContent = 'mg';
                            solutionUnit.textContent = 'L';
                            soluteHint.textContent = 'Enter mass of solute in milligrams';
                            solutionHint.textContent = 'Enter volume of solution in liters';
                            molecularWeightContainer.style.display = 'none';
                            formulaDisplay.textContent = 'PPM = (solute mass in mg) / (solution volume in L)';
                            break;
                        case 'mass_mass':
                            soluteLabel.textContent = 'Solute Mass';
                            solutionLabel.textContent = 'Total Mass';
                            soluteUnit.textContent = 'mg';
                            solutionUnit.textContent = 'kg';
                            soluteHint.textContent = 'Enter mass of solute in milligrams';
                            solutionHint.textContent = 'Enter total mass in kilograms';
                            molecularWeightContainer.style.display = 'none';
                            formulaDisplay.textContent = 'PPM = (solute mass in mg) / (total mass in kg)';
                            break;
                        case 'volume_volume':
                            soluteLabel.textContent = 'Solute Volume';
                            solutionLabel.textContent = 'Total Volume';
                            soluteUnit.textContent = 'mL';
                            solutionUnit.textContent = 'L';
                            soluteHint.textContent = 'Enter volume of solute in milliliters';
                            solutionHint.textContent = 'Enter total volume in liters';
                            molecularWeightContainer.style.display = 'none';
                            formulaDisplay.textContent = 'PPM = (solute volume in mL) / (total volume in L)';
                            break;
                        case 'percentage':
                            soluteLabel.textContent = 'Percentage';
                            solutionLabel.textContent = 'Not Used';
                            soluteUnit.textContent = '%';
                            solutionUnit.textContent = '';
                            soluteHint.textContent = 'Enter percentage concentration';
                            solutionHint.textContent = 'Not required for percentage conversion';
                            molecularWeightContainer.style.display = 'none';
                            formulaDisplay.textContent = 'PPM = Percentage × 10,000';
                            break;
                        case 'molarity':
                            soluteLabel.textContent = 'Molarity';
                            solutionLabel.textContent = 'Not Used';
                            soluteUnit.textContent = 'M';
                            solutionUnit.textContent = '';
                            soluteHint.textContent = 'Enter molarity (moles per liter)';
                            solutionHint.textContent = 'Not required for molarity conversion';
                            molecularWeightContainer.style.display = 'block';
                            formulaDisplay.textContent = 'PPM = Molarity × Molecular Weight × 1000';
                            break;
                        case 'dilution':
                            soluteLabel.textContent = 'Initial Concentration';
                            solutionLabel.textContent = 'Dilution Ratio';
                            soluteUnit.textContent = 'PPM';
                            solutionUnit.textContent = ':1';
                            soluteHint.textContent = 'Enter initial concentration in PPM';
                            solutionHint.textContent = 'Enter dilution ratio (e.g., 10 for 10:1)';
                            molecularWeightContainer.style.display = 'none';
                            formulaDisplay.textContent = 'Final PPM = Initial PPM / Dilution Ratio';
                            break;
                    }
                }

                function getDensity(type, temp) {
                    const baseDensity = solutionDensities[type] || 1.0;
                    // Simple temperature correction for water
                    if (type === 'water') {
                        const tempCorrection = 1 - (temp - 20) * 0.0002; // Rough approximation
                        return baseDensity * tempCorrection;
                    }
                    return baseDensity;
                }

                function calculate() {
                    const method = calculationMethod.value;
                    const solute = parseFloat(soluteAmount.value);
                    const solution = parseFloat(solutionAmount.value);
                    const molWeight = parseFloat(molecularWeight.value) || 0;
                    const solType = solutionType.value;
                    const temp = parseFloat(temperature.value) || 20;
                    
                    if (!isNaN(solute) && solute >= 0) {
                        let ppm = 0;
                        let density = getDensity(solType, temp);
                        
                        switch(method) {
                            case 'mass_volume':
                                if (!isNaN(solution) && solution > 0) {
                                    ppm = solute / solution; // mg/L = PPM for water
                                }
                                break;
                            case 'mass_mass':
                                if (!isNaN(solution) && solution > 0) {
                                    ppm = solute / solution; // mg/kg = PPM
                                }
                                break;
                            case 'volume_volume':
                                if (!isNaN(solution) && solution > 0) {
                                    ppm = (solute / 1000) / solution * 1000000; // mL/L to PPM
                                }
                                break;
                            case 'percentage':
                                ppm = solute * 10000; // % to PPM
                                break;
                            case 'molarity':
                                if (molWeight > 0) {
                                    ppm = solute * molWeight * 1000; // M to mg/L
                                }
                                break;
                            case 'dilution':
                                if (!isNaN(solution) && solution > 0) {
                                    ppm = solute / solution; // Dilution calculation
                                }
                                break;
                        }
                        
                        if (ppm > 0) {
                            // Update primary output
                            output.textContent = formatNumber(ppm) + ' PPM';
                            resultTitle.textContent = 'Concentration (PPM)';
                            resultDescription.textContent = `Calculated concentration: ${formatNumber(ppm)} PPM`;

                            // Display all PPM variants
                            ppmWvDisplay.textContent = formatNumber(ppm) + ' PPM';
                            ppmWwDisplay.textContent = formatNumber(ppm * density) + ' PPM';
                            ppmVvDisplay.textContent = formatNumber(ppm / density) + ' PPM';

                            // Display related units
                            ppbDisplay.textContent = formatNumber(ppm * 1000) + ' PPB';
                            mgLDisplay.textContent = formatNumber(ppm) + ' mg/L';
                            percentageDisplay.textContent = formatNumber(ppm / 10000, 6) + '%';

                            // Molar calculations (approximate)
                            if (molWeight > 0) {
                                const molarity = ppm / (molWeight * 1000);
                                molarityDisplay.textContent = formatNumber(molarity, 6) + ' M';
                                molalityDisplay.textContent = formatNumber(molarity / density, 6) + ' m';
                                normalityDisplay.textContent = formatNumber(molarity, 6) + ' N';
                            } else {
                                molarityDisplay.textContent = 'Need MW';
                                molalityDisplay.textContent = 'Need MW';
                                normalityDisplay.textContent = 'Need MW';
                            }

                            // Solution properties
                            densityDisplay.textContent = formatNumber(density, 4) + ' g/mL';
                            
                            if (method === 'mass_volume' && !isNaN(solution)) {
                                const totalMass = solution * density * 1000; // kg
                                const solventMass = totalMass - (solute / 1000); // kg
                                totalMassDisplay.textContent = formatNumber(totalMass, 2) + ' g';
                                solventMassDisplay.textContent = formatNumber(solventMass, 2) + ' g';
                            } else {
                                totalMassDisplay.textContent = '--';
                                solventMassDisplay.textContent = '--';
                            }
                            
                            if (method === 'dilution' && !isNaN(solution)) {
                                dilutionFactorDisplay.textContent = formatNumber(solution) + ':1';
                            } else {
                                dilutionFactorDisplay.textContent = '--';
                            }

                        } else {
                            clearOutputs();
                        }
                    } else {
                        clearOutputs();
                    }
                }

                function clearOutputs() {
                    output.textContent = '--';
                    resultTitle.textContent = 'Concentration (PPM)';
                    resultDescription.textContent = 'Calculated concentration result';
                    ppmWvDisplay.textContent = '--';
                    ppmWwDisplay.textContent = '--';
                    ppmVvDisplay.textContent = '--';
                    ppbDisplay.textContent = '--';
                    mgLDisplay.textContent = '--';
                    percentageDisplay.textContent = '--';
                    molarityDisplay.textContent = '--';
                    molalityDisplay.textContent = '--';
                    normalityDisplay.textContent = '--';
                    densityDisplay.textContent = '--';
                    totalMassDisplay.textContent = '--';
                    solventMassDisplay.textContent = '--';
                    dilutionFactorDisplay.textContent = '--';
                }

                function clearAll() {
                    soluteAmount.value = '';
                    solutionAmount.value = '';
                    molecularWeight.value = '';
                    calculationMethod.value = 'mass_volume';
                    solutionType.value = 'water';
                    temperature.value = '20';
                    updateInputLabels();
                    clearOutputs();
                    soluteAmount.focus();
                }

                // Event listeners
                calculationMethod.addEventListener('change', function() {
                    updateInputLabels();
                    calculate();
                });
                
                soluteAmount.addEventListener('input', calculate);
                solutionAmount.addEventListener('input', calculate);
                molecularWeight.addEventListener('input', calculate);
                solutionType.addEventListener('change', calculate);
                temperature.addEventListener('input', calculate);

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
                        const solute = this.getAttribute('data-solute');
                        const solution = this.getAttribute('data-solution');
                        const method = this.getAttribute('data-method');
                        
                        calculationMethod.value = method;
                        soluteAmount.value = solute;
                        solutionAmount.value = solution;
                        updateInputLabels();
                        calculate();
                        
                        // Update button styles
                        exampleBtns.forEach(btn => btn.classList.remove('bg-teal-100', 'text-teal-700'));
                        exampleBtns.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                        this.classList.remove('bg-gray-100', 'text-gray-700');
                        this.classList.add('bg-teal-100', 'text-teal-700');
                    });
                });

                // Clickable examples
                const examples = document.querySelectorAll('[data-solute][data-solution][data-method]');
                examples.forEach(element => {
                    element.addEventListener('click', function() {
                        const solute = this.getAttribute('data-solute');
                        const solution = this.getAttribute('data-solution');
                        const method = this.getAttribute('data-method');
                        
                        if (solute && solution && method) {
                            calculationMethod.value = method;
                            soluteAmount.value = solute;
                            solutionAmount.value = solution;
                            updateInputLabels();
                            calculate();
                            soluteAmount.focus();
                        }
                    });
                });

                // Initialize
                updateInputLabels();
                soluteAmount.focus();

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