<x-tool-page-layout
    title="Mesh to Micron Converter - ConvertPro"
    description="Professional mesh to micron converter for particle size analysis. Convert US standard mesh sizes to microns for industrial screening and filtration applications."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Industrial Particle Size Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Input Value -->
                                                                            <div class="space-y-2">
                                                                                <label for="mesh" class="block text-sm font-semibold text-gray-700">
                                                                                    Enter US Standard Mesh Size
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="mesh" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                        placeholder="Enter mesh size (e.g., 20)"
                                                                                        step="1"
                                                                                        min="1"
                                                                                        max="500"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium">mesh</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500 mt-1">Common range: 3 to 400 mesh</p>
                                                                            </div>

                                                                            <!-- Conversion Mode -->
                                                                            <div class="space-y-2">
                                                                                <label for="mode" class="block text-sm font-semibold text-gray-700">
                                                                                    Conversion Mode
                                                                                </label>
                                                                                <select 
                                                                                    id="mode" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                >
                                                                                    <option value="standard">Standard Table (Accurate)</option>
                                                                                    <option value="formula">Formula Based (Approximate)</option>
                                                                                    <option value="both">Show Both</option>
                                                                                </select>
                                                                            </div>

                                                                            <!-- Clear Button -->
                                                                            <div class="flex justify-center">
                                                                                <button 
                                                                                    type="button" 
                                                                                    id="clearButton"
                                                                                    class="inline-flex items-center px-4 py-2 bg-sky-100 hover:bg-sky-200 text-sky-700 font-medium rounded-lg transition-colors duration-200"
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
                                        <!-- Result Display -->
                                                                        <div class="mt-8 p-6 bg-gradient-to-r from-sky-50 to-cyan-50 rounded-xl border-l-4 border-sky-500">
                                                                            <div class="flex items-center justify-between">
                                                                                <div>
                                                                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Micron Size</h3>
                                                                                    <p class="text-sm text-gray-600" id="result-description">Particle size conversion</p>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <div class="text-2xl font-bold text-sky-600 font-mono" id="output">--</div>
                                                                                    <div class="text-sm text-gray-500 font-medium">μm</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Secondary Result (when showing both) -->
                                                                        <div class="mt-4 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500" id="secondaryResult" style="display: none;">
                                                                            <div class="flex items-center justify-between">
                                                                                <div>
                                                                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Formula Result</h3>
                                                                                    <p class="text-sm text-gray-600">Approximate calculation</p>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <div class="text-2xl font-bold text-blue-600 font-mono" id="formulaOutput">--</div>
                                                                                    <div class="text-sm text-gray-500 font-medium">μm</div>
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
                                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Common Mesh Sizes</h4>
                                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                                        <div>• 20 mesh = 841 μm</div>
                                                        <div>• 50 mesh = 297 μm</div>
                                                        <div>• 100 mesh = 149 μm</div>
                                                        <div>• 200 mesh = 74 μm</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Mesh to Micron Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">What is Mesh Size?</h4>
                                    <p>Mesh size refers to the number of openings per linear inch in a sieve or screen. Higher mesh numbers indicate smaller openings and finer particle sizes. It's widely used in industrial applications for particle classification.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Industrial Applications</h4>
                                    <p>Essential for powder processing, pharmaceutical manufacturing, mining operations, food processing, paint production, and quality control in industries requiring precise particle size specifications.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-sky-50 rounded-lg border border-sky-200">
                                <p class="text-sm text-sky-800">
                                    <strong>Technical Note:</strong> US Standard mesh sizes follow ASTM E11 specifications for accurate particle size determination!
                                </p>
                            </div>
                        </div>

                        <!-- Standard Mesh Table -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Standard US Mesh Sizes</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Coarse</div>
                                    <div class="text-sky-600 cursor-pointer hover:text-sky-800 transition-colors" data-mesh="20">20 mesh</div>
                                    <div class="text-xs text-gray-500 mt-1">841 μm</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Medium</div>
                                    <div class="text-sky-600 cursor-pointer hover:text-sky-800 transition-colors" data-mesh="50">50 mesh</div>
                                    <div class="text-xs text-gray-500 mt-1">297 μm</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Fine</div>
                                    <div class="text-sky-600 cursor-pointer hover:text-sky-800 transition-colors" data-mesh="100">100 mesh</div>
                                    <div class="text-xs text-gray-500 mt-1">149 μm</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Very Fine</div>
                                    <div class="text-sky-600 cursor-pointer hover:text-sky-800 transition-colors" data-mesh="325">325 mesh</div>
                                    <div class="text-xs text-gray-500 mt-1">44 μm</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const meshInput = document.getElementById('mesh');
                        const modeSelect = document.getElementById('mode');
                        const clearButton = document.getElementById('clearButton');
                        const output = document.getElementById('output');
                        const formulaOutput = document.getElementById('formulaOutput');
                        const secondaryResult = document.getElementById('secondaryResult');
                        const resultDescription = document.getElementById('result-description');

                        // Standard mesh-to-micron lookup table (ASTM E11)
                        const meshToMicronTable = {
                            3: 6730, 4: 4760, 5: 4000, 6: 3360, 7: 2830, 8: 2380,
                            10: 2000, 12: 1680, 14: 1410, 16: 1190, 18: 1000, 20: 841,
                            25: 707, 30: 595, 35: 500, 40: 425, 45: 354, 50: 297,
                            60: 250, 70: 210, 80: 177, 100: 149, 120: 125, 140: 105,
                            170: 88, 200: 74, 230: 63, 270: 53, 325: 44, 400: 37
                        };

                        function convert() {
                            const mesh = parseInt(meshInput.value);
                            const mode = modeSelect.value;
                            
                            if (!isNaN(mesh) && mesh > 0) {
                                const standardValue = meshToMicronTable[mesh];
                                const formulaValue = (14900 / mesh).toFixed(1);
                                
                                if (mode === 'standard') {
                                    if (standardValue) {
                                        output.textContent = standardValue.toLocaleString();
                                        resultDescription.textContent = 'ASTM E11 standard value';
                                    } else {
                                        output.textContent = 'N/A';
                                        resultDescription.textContent = 'Not in standard table';
                                    }
                                    secondaryResult.style.display = 'none';
                                } else if (mode === 'formula') {
                                    output.textContent = parseFloat(formulaValue).toLocaleString(undefined, { maximumFractionDigits: 1 });
                                    resultDescription.textContent = 'Formula-based approximation';
                                    secondaryResult.style.display = 'none';
                                } else { // both
                                    if (standardValue) {
                                        output.textContent = standardValue.toLocaleString();
                                        resultDescription.textContent = 'ASTM E11 standard value';
                                    } else {
                                        output.textContent = 'N/A';
                                        resultDescription.textContent = 'Not in standard table';
                                    }
                                    formulaOutput.textContent = parseFloat(formulaValue).toLocaleString(undefined, { maximumFractionDigits: 1 });
                                    secondaryResult.style.display = 'block';
                                }
                            } else {
                                output.textContent = "--";
                                formulaOutput.textContent = "--";
                                resultDescription.textContent = 'Particle size conversion';
                                secondaryResult.style.display = 'none';
                            }
                        }

                        function clearInput() {
                            meshInput.value = '';
                            convert();
                            meshInput.focus();
                        }

                        // Event listeners
                        meshInput.addEventListener('input', convert);
                        modeSelect.addEventListener('change', convert);
                        clearButton.addEventListener('click', clearInput);

                        // Add clickable functionality to example mesh sizes
                        const exampleMeshes = document.querySelectorAll('[data-mesh]');
                        exampleMeshes.forEach(element => {
                            element.addEventListener('click', function() {
                                const meshValue = this.getAttribute('data-mesh');
                                meshInput.value = meshValue;
                                convert();
                                meshInput.focus();
                            });
                        });

                        // Initialize
                        meshInput.focus();

                        // Add keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearInput();
                            }
                        });

                        // Input validation
                        meshInput.addEventListener('input', function() {
                            const value = parseInt(this.value);
                            if (value > 500) {
                                this.value = 500;
                            } else if (value < 0) {
                                this.value = '';
                            }
                        });

                        // Initialize conversion
                        convert();
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
