<x-tool-page-layout
    title="Capacitance Converter - ConvertPro"
    description="Professional capacitance converter for electrical engineering and electronics. Convert between farads, millifarads, microfarads, nanofarads, and picofarads with detailed calculations."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Electrical Capacitance Unit Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                            Enter Capacitance Value
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter value (e.g., 100)"
                                                step="any"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">Capacitance</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500">Enter any positive number</p>
                                    </div>

                                    <!-- From Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            From Unit (Source)
                                        </label>
                                        <select 
                                            id="fromUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="farad">Farad (F)</option>
                                            <option value="millifarad">Millifarad (mF)</option>
                                            <option value="microfarad" selected>Microfarad (μF)</option>
                                            <option value="nanofarad">Nanofarad (nF)</option>
                                            <option value="picofarad">Picofarad (pF)</option>
                                            <option value="femtofarad">Femtofarad (fF)</option>
                                            <option value="attofarad">Attofarad (aF)</option>
                                        </select>
                                    </div>

                                    <!-- To Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            To Unit (Target)
                                        </label>
                                        <select 
                                            id="toUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="farad">Farad (F)</option>
                                            <option value="millifarad">Millifarad (mF)</option>
                                            <option value="microfarad">Microfarad (μF)</option>
                                            <option value="nanofarad" selected>Nanofarad (nF)</option>
                                            <option value="picofarad">Picofarad (pF)</option>
                                            <option value="femtofarad">Femtofarad (fF)</option>
                                            <option value="attofarad">Attofarad (aF)</option>
                                        </select>
                                    </div>

                                    <!-- Application Context -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Application Context
                                        </label>
                                        <div class="grid grid-cols-3 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-yellow-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="general" class="text-yellow-600 focus:ring-yellow-500" checked>
                                                <span class="text-sm font-medium">General</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-yellow-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="electronics" class="text-yellow-600 focus:ring-yellow-500">
                                                <span class="text-sm font-medium">Electronics</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-yellow-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="power" class="text-yellow-600 focus:ring-yellow-500">
                                                <span class="text-sm font-medium">Power Systems</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Quick Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="cap-example px-3 py-2 text-sm bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-yellow-700 rounded-lg transition-colors" data-value="100" data-from="microfarad" data-to="nanofarad">100 μF</button>
                                            <button type="button" class="cap-example px-3 py-2 text-sm bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-yellow-700 rounded-lg transition-colors" data-value="470" data-from="nanofarad" data-to="picofarad">470 nF</button>
                                            <button type="button" class="cap-example px-3 py-2 text-sm bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-yellow-700 rounded-lg transition-colors" data-value="22" data-from="picofarad" data-to="femtofarad">22 pF</button>
                                            <button type="button" class="cap-example px-3 py-2 text-sm bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-yellow-700 rounded-lg transition-colors" data-value="1000" data-from="millifarad" data-to="farad">1000 mF</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-yellow-100 hover:bg-yellow-200 text-yellow-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-xl border-l-4 border-yellow-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h4>
                                                <p class="text-sm text-gray-600" id="conversionDescription">Primary conversion result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-yellow-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-yellow-600 hover:text-yellow-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- All Unit Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Farad -->
                                        <div class="p-4 bg-gradient-to-r from-red-50 to-rose-50 rounded-lg border-l-4 border-red-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Farad (F)</h4>
                                                <div class="text-lg font-bold text-red-600 font-mono" id="faradDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">Base unit</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Millifarad -->
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-amber-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Millifarad (mF)</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="millifaradDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁻³ F</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Common Units -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Microfarad -->
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Microfarad (μF)</h4>
                                                <div class="text-lg font-bold text-green-600 font-mono" id="microfaradDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁻⁶ F</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Nanofarad -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Nanofarad (nF)</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="nanofaradDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁻⁹ F</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Small Units -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Picofarad -->
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Picofarad (pF)</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="picofaradDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁻¹² F</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Femtofarad -->
                                        <div class="p-4 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Femtofarad (fF)</h4>
                                                <div class="text-lg font-bold text-pink-600 font-mono" id="femtofaradDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁻¹⁵ F</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Capacitance Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Capacitance Unit Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 text-xs text-gray-600">
                                        <div>1 F = 1,000 mF</div>
                                        <div>1 mF = 1,000 μF</div>
                                        <div>1 μF = 1,000 nF</div>
                                        <div>1 nF = 1,000 pF</div>
                                        <div>1 pF = 1,000 fF</div>
                                        <div>1 fF = 1,000 aF</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Capacitance</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Electrical Property</h4>
                                    <p>Capacitance is the ability of a component to store electrical charge. It's measured in farads (F), named after Michael Faraday. The farad is a very large unit, so most practical capacitors are measured in microfarads (μF), nanofarads (nF), or picofarads (pF).</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Engineering Applications</h4>
                                    <p>Capacitors are essential in electronics for energy storage, filtering, timing circuits, and power factor correction. Understanding capacitance units is crucial for circuit design, component selection, and electrical system analysis.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-yellow-50 rounded-lg border border-yellow-200">
                                <p class="text-sm text-yellow-800">
                                    <strong>Engineering Tip:</strong> Remember that 1 farad is extremely large - a 1F capacitor at 1V stores the same energy as lifting 1kg by 1 meter!
                                </p>
                            </div>
                        </div>

                        <!-- Electronics Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Electronics Applications</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Power Supply Filtering</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-yellow-600 cursor-pointer hover:text-yellow-800" data-example="470" data-from="microfarad" data-to="nanofarad">470 μF</div>
                                        <div class="text-xs text-gray-600 mt-1">Electrolytic capacitor for power filtering</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-yellow-600 cursor-pointer hover:text-yellow-800" data-example="100" data-from="nanofarad" data-to="picofarad">100 nF</div>
                                        <div class="text-xs text-gray-600 mt-1">Ceramic capacitor for decoupling</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">RF & Timing Circuits</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-yellow-600 cursor-pointer hover:text-yellow-800" data-example="22" data-from="picofarad" data-to="femtofarad">22 pF</div>
                                        <div class="text-xs text-gray-600 mt-1">NPO capacitor for oscillator circuits</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-yellow-600 cursor-pointer hover:text-yellow-800" data-example="1" data-from="nanofarad" data-to="picofarad">1 nF</div>
                                        <div class="text-xs text-gray-600 mt-1">Film capacitor for audio coupling</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputValue = document.getElementById('inputValue');
                        const fromUnit = document.getElementById('fromUnit');
                        const toUnit = document.getElementById('toUnit');
                        const contextRadios = document.getElementsByName('context');
                        const clearButton = document.getElementById('clearButton');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const conversionDescription = document.getElementById('conversionDescription');
                        const faradDisplay = document.getElementById('faradDisplay');
                        const millifaradDisplay = document.getElementById('millifaradDisplay');
                        const microfaradDisplay = document.getElementById('microfaradDisplay');
                        const nanofaradDisplay = document.getElementById('nanofaradDisplay');
                        const picofaradDisplay = document.getElementById('picofaradDisplay');
                        const femtofaradDisplay = document.getElementById('femtofaradDisplay');
                        const scientificInput = document.getElementById('scientificInput');
                        const scientificOutput = document.getElementById('scientificOutput');
                        const conversionFormula = document.getElementById('conversionFormula');
                        const contextInfo = document.getElementById('contextInfo');
                        const capacitorTypes = document.getElementById('capacitorTypes');
                        const copyResult = document.getElementById('copyResult');

                        // Unit multipliers (in farads)
                        const unitMultipliers = {
                            farad: 1,
                            millifarad: 1e-3,
                            microfarad: 1e-6,
                            nanofarad: 1e-9,
                            picofarad: 1e-12,
                            femtofarad: 1e-15,
                            attofarad: 1e-18
                        };

                        const unitLabels = {
                            farad: 'F',
                            millifarad: 'mF',
                            microfarad: 'μF',
                            nanofarad: 'nF',
                            picofarad: 'pF',
                            femtofarad: 'fF',
                            attofarad: 'aF'
                        };

                        const unitExponents = {
                            farad: '10⁰',
                            millifarad: '10⁻³',
                            microfarad: '10⁻⁶',
                            nanofarad: '10⁻⁹',
                            picofarad: '10⁻¹²',
                            femtofarad: '10⁻¹⁵',
                            attofarad: '10⁻¹⁸'
                        };

                        function getContext() {
                            return document.querySelector('input[name="context"]:checked').value;
                        }

                        function formatNumber(num) {
                            if (Math.abs(num) >= 1e15 || Math.abs(num) <= 1e-15) {
                                return num.toExponential(3);
                            } else if (Math.abs(num) >= 1e12) {
                                return (num / 1e12).toLocaleString(undefined, { maximumFractionDigits: 3 }) + 'T';
                            } else if (Math.abs(num) >= 1e9) {
                                return (num / 1e9).toLocaleString(undefined, { maximumFractionDigits: 3 }) + 'G';
                            } else if (Math.abs(num) >= 1e6) {
                                return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 3 }) + 'M';
                            } else if (Math.abs(num) >= 1e3) {
                                return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 3 }) + 'K';
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 9 });
                            }
                        }

                        function formatScientific(num) {
                            return num.toExponential(3);
                        }

                        function getApplicationContext(value, unit, context) {
                            const valueInFarads = value * unitMultipliers[unit];
                            
                            switch (context) {
                                case 'electronics':
                                    if (valueInFarads >= 1e-3) {
                                        return 'Large electrolytic capacitors for power supply filtering and energy storage applications.';
                                    } else if (valueInFarads >= 1e-6) {
                                        return 'Common electrolytic and tantalum capacitors for power decoupling and filtering circuits.';
                                    } else if (valueInFarads >= 1e-9) {
                                        return 'Ceramic and film capacitors for decoupling, timing circuits, and signal processing.';
                                    } else if (valueInFarads >= 1e-12) {
                                        return 'Small ceramic capacitors for high-frequency circuits, oscillators, and RF applications.';
                                    } else {
                                        return 'Parasitic capacitances in ICs, PCB traces, and ultra-high frequency circuits.';
                                    }
                                    
                                case 'power':
                                    if (valueInFarads >= 1e-3) {
                                        return 'Power factor correction capacitors and motor start/run capacitors in AC systems.';
                                    } else if (valueInFarads >= 1e-6) {
                                        return 'Switching power supply output filtering and DC link capacitors.';
                                    } else {
                                        return 'EMI/RFI suppression capacitors and high-frequency noise filtering.';
                                    }
                                    
                                default:
                                    if (valueInFarads >= 1e-3) {
                                        return 'Very large capacitance - typically used in power applications and energy storage.';
                                    } else if (valueInFarads >= 1e-6) {
                                        return 'Medium capacitance - common in electronic circuits for filtering and coupling.';
                                    } else if (valueInFarads >= 1e-9) {
                                        return 'Small capacitance - used in timing circuits and signal processing.';
                                    } else if (valueInFarads >= 1e-12) {
                                        return 'Very small capacitance - found in high-frequency and RF circuits.';
                                    } else {
                                        return 'Extremely small capacitance - typically parasitic or specialized applications.';
                                    }
                            }
                        }

                        function getCapacitorTypes(value, unit) {
                            const valueInFarads = value * unitMultipliers[unit];
                            
                            if (valueInFarads >= 1e-3) {
                                return 'Electrolytic, supercapacitors, or large film capacitors';
                            } else if (valueInFarads >= 1e-6) {
                                return 'Electrolytic, tantalum, or large ceramic capacitors';
                            } else if (valueInFarads >= 1e-9) {
                                return 'Ceramic (X7R, Y5V), film (polyester, polypropylene), or tantalum capacitors';
                            } else if (valueInFarads >= 1e-12) {
                                return 'Ceramic (NPO/C0G), mica, or small film capacitors';
                            } else {
                                return 'Variable capacitors, trimmer capacitors, or parasitic capacitances';
                            }
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const from = fromUnit.value;
                            const to = toUnit.value;
                            const context = getContext();

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                // Convert input to farads first
                                const inputInFarads = inputVal * unitMultipliers[from];
                                
                                // Convert farads to target unit
                                const result = inputInFarads / unitMultipliers[to];
                                
                                // Update primary output
                                output.textContent = formatNumber(result);
                                conversionDescription.textContent = `${inputVal} ${unitLabels[from]} = ${formatNumber(result)} ${unitLabels[to]}`;

                                // Convert to all units and display
                                const farads = inputInFarads;
                                faradDisplay.textContent = formatNumber(farads);
                                millifaradDisplay.textContent = formatNumber(farads / unitMultipliers.millifarad);
                                microfaradDisplay.textContent = formatNumber(farads / unitMultipliers.microfarad);
                                nanofaradDisplay.textContent = formatNumber(farads / unitMultipliers.nanofarad);
                                picofaradDisplay.textContent = formatNumber(farads / unitMultipliers.picofarad);
                                femtofaradDisplay.textContent = formatNumber(farads / unitMultipliers.femtofarad);

                                // Scientific notation
                                scientificInput.textContent = `${formatScientific(inputVal)} ${unitLabels[from]}`;
                                scientificOutput.textContent = `${formatScientific(result)} ${unitLabels[to]}`;

                                // Conversion formula
                                const factor = unitMultipliers[to] / unitMultipliers[from];
                                if (factor > 1) {
                                    conversionFormula.textContent = `Multiply by ${formatScientific(factor)} (${unitExponents[from]} → ${unitExponents[to]})`;
                                } else {
                                    conversionFormula.textContent = `Divide by ${formatScientific(1/factor)} (${unitExponents[from]} → ${unitExponents[to]})`;
                                }

                                // Context information
                                contextInfo.textContent = getApplicationContext(inputVal, from, context);
                                capacitorTypes.textContent = getCapacitorTypes(inputVal, from);

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            conversionDescription.textContent = 'Primary conversion result';
                            faradDisplay.textContent = '--';
                            millifaradDisplay.textContent = '--';
                            microfaradDisplay.textContent = '--';
                            nanofaradDisplay.textContent = '--';
                            picofaradDisplay.textContent = '--';
                            femtofaradDisplay.textContent = '--';
                            scientificInput.textContent = '--';
                            scientificOutput.textContent = '--';
                            conversionFormula.textContent = '--';
                            contextInfo.textContent = '--';
                            capacitorTypes.textContent = '--';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            fromUnit.value = 'microfarad';
                            toUnit.value = 'nanofarad';
                            document.querySelector('input[value="general"]').checked = true;
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        fromUnit.addEventListener('change', convert);
                        toUnit.addEventListener('change', convert);
                        
                        contextRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

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
                        const capExamples = document.querySelectorAll('.cap-example');
                        capExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const from = this.getAttribute('data-from');
                                const to = this.getAttribute('data-to');
                                
                                inputValue.value = value;
                                fromUnit.value = from;
                                toUnit.value = to;
                                convert();
                                
                                // Update button styles
                                capExamples.forEach(btn => btn.classList.remove('bg-yellow-100', 'text-yellow-700'));
                                capExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-yellow-100', 'text-yellow-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                const from = this.getAttribute('data-from');
                                const to = this.getAttribute('data-to');
                                
                                inputValue.value = value;
                                if (from) fromUnit.value = from;
                                if (to) toUnit.value = to;
                                convert();
                                inputValue.focus();
                            });
                        });

                        // Initialize
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
