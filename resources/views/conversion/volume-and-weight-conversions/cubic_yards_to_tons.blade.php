<x-tool-page-layout
    title="Cubic Yards to Tons Converter - ConvertPro"
    description="Professional cubic yards to tons converter for construction materials. Convert volume to weight for concrete, soil, gravel, and other bulk materials."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Material Volume to Weight Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Material Type Selection -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Type of Material
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                            @foreach(['Food', 'Metals', 'Non-metals', 'Gases', 'Liquids'] as $type)
                                            <label class="flex items-center space-x-2 p-3 border-2 border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                                <input type="radio" name="type" value="{{ $type }}" class="text-purple-600 focus:ring-purple-500" {{ $type === 'Non-metals' ? 'checked' : '' }}>
                                                <span class="text-sm font-medium">{{ $type }}</span>
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Material Selection -->
                                    <div class="space-y-2">
                                        <label for="substance" class="block text-sm font-semibold text-gray-700">
                                            <span id="subLabel">Non-metals</span> Material
                                        </label>
                                        <select 
                                            id="substance" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="">Select material</option>
                                        </select>
                                    </div>

                                    <!-- Custom Density Input -->
                                    <div class="space-y-2" id="customDensityField" style="display: none;">
                                        <label for="customDensity" class="block text-sm font-semibold text-gray-700">
                                            Custom Density
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="customDensity" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter density"
                                                step="1"
                                                min="1"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">kg/m³</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Density Display -->
                                    <div class="space-y-2">
                                        <label for="density" class="block text-sm font-semibold text-gray-700">
                                            Material Density
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="density" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg bg-gray-50 text-lg font-medium" 
                                                placeholder="Select material first"
                                                readonly
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">kg/m³</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Volume Input -->
                                    <div class="space-y-2">
                                        <label for="volume" class="block text-sm font-semibold text-gray-700">
                                            Volume
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="volume" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter volume (e.g., 10)"
                                                step="0.01"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">yd³</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-purple-100 hover:bg-purple-200 text-purple-700 font-medium rounded-lg transition-colors duration-200"
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
                                    
                                    <!-- Primary Result - Metric Tons -->
                                    <div class="p-6 bg-gradient-to-r from-purple-50 to-violet-50 rounded-xl border-l-4 border-purple-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">Mass (Metric Tons)</h4>
                                                <p class="text-sm text-gray-600">Standard metric weight</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-purple-600 font-mono" id="mass">--</div>
                                                <div class="text-sm text-gray-500 font-medium">metric tons</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Kilograms</h4>
                                                <div class="text-xl font-bold text-blue-600 font-mono" id="kgOutput">--</div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">US Tons</h4>
                                                <div class="text-xl font-bold text-orange-600 font-mono" id="usTonsOutput">--</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Material Density Reference</h4>
                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• Concrete: 2400 kg/m³</div>
                                        <div>• Sand: 1602 kg/m³</div>
                                        <div>• Gravel: 1680 kg/m³</div>
                                        <div>• 1 yd³ = 0.765 m³</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Volume to Weight Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Construction Applications</h4>
                                    <p>Essential for ordering concrete, estimating soil needs, calculating aggregate requirements, and determining trucking loads for construction projects.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Material Planning</h4>
                                    <p>Critical for project budgeting, transportation planning, and ensuring adequate structural support for the weight of materials being used.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-purple-50 rounded-lg border border-purple-200">
                                <p class="text-sm text-purple-800">
                                    <strong>Construction Tip:</strong> Always verify material densities with your supplier as they can vary based on moisture content and composition!
                                </p>
                            </div>
                        </div>

                        <!-- Common Material Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Construction Materials</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Concrete</div>
                                    <div class="text-purple-600 cursor-pointer hover:text-purple-800 transition-colors" data-material="Concrete" data-volume="1">1 yd³</div>
                                    <div class="text-xs text-gray-500 mt-1">~1.8 tons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Topsoil</div>
                                    <div class="text-purple-600 cursor-pointer hover:text-purple-800 transition-colors" data-material="Sand" data-volume="1">1 yd³</div>
                                    <div class="text-xs text-gray-500 mt-1">~1.2 tons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Gravel</div>
                                    <div class="text-purple-600 cursor-pointer hover:text-purple-800 transition-colors" data-material="Asphalt" data-volume="1">1 yd³</div>
                                    <div class="text-xs text-gray-500 mt-1">~1.8 tons</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Clay</div>
                                    <div class="text-purple-600 cursor-pointer hover:text-purple-800 transition-colors" data-material="Clay" data-volume="1">1 yd³</div>
                                    <div class="text-xs text-gray-500 mt-1">~1.2 tons</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const typeRadios = document.getElementsByName('type');
                        const substanceSelect = document.getElementById('substance');
                        const subLabel = document.getElementById('subLabel');
                        const customDensityField = document.getElementById('customDensityField');
                        const customDensity = document.getElementById('customDensity');
                        const densityInput = document.getElementById('density');
                        const volumeInput = document.getElementById('volume');
                        const clearButton = document.getElementById('clearButton');
                        const massOutput = document.getElementById('mass');
                        const kgOutput = document.getElementById('kgOutput');
                        const usTonsOutput = document.getElementById('usTonsOutput');

                        const densities = {
                            "Food": {
                                "Rice": 850,
                                "Flour": 593,
                                "Sugar": 845,
                                "Salt": 1200,
                                "Honey": 1420,
                                "Jam": 1340,
                                "Nutella": 1270,
                                "Maple syrup": 1330,
                                "Oats": 380,
                                "Peanut butter": 1100,
                                "Butter": 911,
                                "Custom": null
                            },
                            "Metals": {
                                "Iron": 7870,
                                "Aluminum": 2700,
                                "Copper": 8960,
                                "Lead": 11340,
                                "Steel": 7850,
                                "Gold": 19300,
                                "Silver": 10490,
                                "Custom": null
                            },
                            "Non-metals": {
                                "Concrete": 2400,
                                "Cork": 240,
                                "Diamond": 3515,
                                "Ice": 917,
                                "Nylon": 1150,
                                "Oak": 700,
                                "Pine": 500,
                                "Plastic": 1050,
                                "Styrofoam": 75,
                                "Wood (typical)": 600,
                                "Clay": 1600,
                                "Sand": 1602,
                                "Asphalt": 2300,
                                "Custom": null
                            },
                            "Gases": {
                                "Air": 1.225,
                                "Carbon dioxide": 1.98,
                                "Hydrogen": 0.0899,
                                "Oxygen": 1.331,
                                "Nitrogen": 1.251,
                                "Custom": null
                            },
                            "Liquids": {
                                "Water": 1000,
                                "Milk": 1030,
                                "Oil": 920,
                                "Gasoline": 740,
                                "Mercury": 13546,
                                "Alcohol": 789,
                                "Honey": 1420,
                                "Custom": null
                            }
                        };

                        function populateSubstances(type) {
                            subLabel.textContent = type;
                            substanceSelect.innerHTML = '<option value="">Select material</option>';
                            Object.keys(densities[type]).forEach(item => {
                                substanceSelect.innerHTML += `<option value="${item}">${item}</option>`;
                            });
                        }

                        function formatNumber(num) {
                            return num.toFixed(3).replace(/\.?0+$/, '');
                        }

                        function convert() {
                            const vol = parseFloat(volumeInput.value);
                            const den = parseFloat(densityInput.value);
                            
                            if (!isNaN(vol) && !isNaN(den) && vol > 0 && den > 0) {
                                // Convert cubic yards to cubic meters
                                const m3 = vol * 0.764555;
                                // Calculate mass in kg
                                const kg = m3 * den;
                                // Convert to metric tons
                                const metricTons = kg / 1000;
                                // Convert to US tons
                                const usTons = metricTons * 1.10231;

                                massOutput.textContent = formatNumber(metricTons);
                                kgOutput.textContent = formatNumber(kg) + ' kg';
                                usTonsOutput.textContent = formatNumber(usTons) + ' tons';
                            } else {
                                massOutput.textContent = "--";
                                kgOutput.textContent = "--";
                                usTonsOutput.textContent = "--";
                            }
                        }

                        function clearAll() {
                            volumeInput.value = '';
                            densityInput.value = '';
                            customDensity.value = '';
                            substanceSelect.selectedIndex = 0;
                            convert();
                            volumeInput.focus();
                        }

                        // Event listeners
                        typeRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                populateSubstances(radio.value);
                                densityInput.value = "";
                                customDensityField.style.display = 'none';
                                convert();
                            });
                        });

                        substanceSelect.addEventListener('change', () => {
                            const type = [...typeRadios].find(r => r.checked).value;
                            const substance = substanceSelect.value;
                            const densityValue = densities[type][substance];
                            
                            if (substance === 'Custom') {
                                customDensityField.style.display = 'block';
                                densityInput.value = customDensity.value || '';
                            } else {
                                customDensityField.style.display = 'none';
                                densityInput.value = densityValue !== null ? densityValue : '';
                            }
                            convert();
                        });

                        customDensity.addEventListener('input', () => {
                            densityInput.value = customDensity.value;
                            convert();
                        });

                        volumeInput.addEventListener('input', convert);
                        clearButton.addEventListener('click', clearAll);

                        // Add clickable functionality to example materials
                        const exampleMaterials = document.querySelectorAll('[data-material]');
                        exampleMaterials.forEach(element => {
                            element.addEventListener('click', function() {
                                const material = this.getAttribute('data-material');
                                const volume = this.getAttribute('data-volume');
                                
                                // Find the material in the densities object
                                for (const [type, materials] of Object.entries(densities)) {
                                    if (materials[material]) {
                                        // Select the type
                                        document.querySelector(`input[value="${type}"]`).checked = true;
                                        populateSubstances(type);
                                        
                                        // Select the material
                                        substanceSelect.value = material;
                                        densityInput.value = materials[material];
                                        
                                        // Set volume
                                        volumeInput.value = volume;
                                        
                                        convert();
                                        break;
                                    }
                                }
                            });
                        });

                        // Initialize
                        populateSubstances("Non-metals");
                        volumeInput.focus();

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
