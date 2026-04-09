<x-tool-page-layout
    title="Energy Conversion Calculator - ConvertPro"
    description="Professional energy unit converter between joules, calories, BTU, kWh, and other energy measurements. Convert thermal, electrical, and mechanical energy units with precision."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Universal Energy Unit Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                            Enter Energy Value
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter energy (e.g., 1000)"
                                                step="any"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">Energy</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500">Enter energy value for conversion</p>
                                    </div>

                                    <!-- From Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            From Unit (Source)
                                        </label>
                                        <select 
                                            id="fromUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <optgroup label="SI Energy Units">
                                                <option value="joule" selected>Joule (J) - SI energy unit</option>
                                                <option value="kilojoule">Kilojoule (kJ)</option>
                                                <option value="megajoule">Megajoule (MJ)</option>
                                                <option value="gigajoule">Gigajoule (GJ)</option>
                                            </optgroup>
                                            <optgroup label="Electrical Energy">
                                                <option value="kilowatt_hour">Kilowatt Hour (kWh)</option>
                                                <option value="watt_hour">Watt Hour (Wh)</option>
                                                <option value="megawatt_hour">Megawatt Hour (MWh)</option>
                                                <option value="electron_volt">Electron Volt (eV)</option>
                                            </optgroup>
                                            <optgroup label="Thermal Energy">
                                                <option value="calorie">Calorie (cal)</option>
                                                <option value="kilocalorie">Kilocalorie (kcal)</option>
                                                <option value="btu">British Thermal Unit (BTU)</option>
                                                <option value="therm">Therm</option>
                                            </optgroup>
                                            <optgroup label="Mechanical Energy">
                                                <option value="foot_pound">Foot-Pound (ft⋅lb)</option>
                                                <option value="newton_meter">Newton-Meter (N⋅m)</option>
                                                <option value="erg">Erg</option>
                                            </optgroup>
                                            <optgroup label="Alternative Units">
                                                <option value="tnt_equivalent">TNT Equivalent (kg)</option>
                                                <option value="gasoline_equivalent">Gasoline Equivalent (L)</option>
                                                <option value="food_calorie">Food Calorie (Cal)</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <!-- To Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            To Unit (Target)
                                        </label>
                                        <select 
                                            id="toUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <optgroup label="SI Energy Units">
                                                <option value="joule">Joule (J) - SI energy unit</option>
                                                <option value="kilojoule" selected>Kilojoule (kJ)</option>
                                                <option value="megajoule">Megajoule (MJ)</option>
                                                <option value="gigajoule">Gigajoule (GJ)</option>
                                            </optgroup>
                                            <optgroup label="Electrical Energy">
                                                <option value="kilowatt_hour">Kilowatt Hour (kWh)</option>
                                                <option value="watt_hour">Watt Hour (Wh)</option>
                                                <option value="megawatt_hour">Megawatt Hour (MWh)</option>
                                                <option value="electron_volt">Electron Volt (eV)</option>
                                            </optgroup>
                                            <optgroup label="Thermal Energy">
                                                <option value="calorie">Calorie (cal)</option>
                                                <option value="kilocalorie">Kilocalorie (kcal)</option>
                                                <option value="btu">British Thermal Unit (BTU)</option>
                                                <option value="therm">Therm</option>
                                            </optgroup>
                                            <optgroup label="Mechanical Energy">
                                                <option value="foot_pound">Foot-Pound (ft⋅lb)</option>
                                                <option value="newton_meter">Newton-Meter (N⋅m)</option>
                                                <option value="erg">Erg</option>
                                            </optgroup>
                                            <optgroup label="Alternative Units">
                                                <option value="tnt_equivalent">TNT Equivalent (kg)</option>
                                                <option value="gasoline_equivalent">Gasoline Equivalent (L)</option>
                                                <option value="food_calorie">Food Calorie (Cal)</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <!-- Energy Type -->
                                    <div class="space-y-2 hidden">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Energy Type
                                        </label>
                                        <select 
                                            id="energyType" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="">General energy</option>
                                            <option value="kinetic">Kinetic Energy</option>
                                            <option value="potential">Potential Energy</option>
                                            <option value="thermal">Thermal Energy</option>
                                            <option value="electrical">Electrical Energy</option>
                                            <option value="chemical">Chemical Energy</option>
                                            <option value="nuclear">Nuclear Energy</option>
                                        </select>
                                    </div>

                                    <!-- Quick Energy Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Energy Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="energy-example px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors" data-value="1000" data-from="joule" data-to="kilojoule">1000 J</button>
                                            <button type="button" class="energy-example px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors" data-value="1" data-from="kilowatt_hour" data-to="joule">1 kWh</button>
                                            <button type="button" class="energy-example px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors" data-value="1000" data-from="btu" data-to="joule">1000 BTU</button>
                                            <button type="button" class="energy-example px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors" data-value="100" data-from="calorie" data-to="joule">100 cal</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-red-100 hover:bg-red-200 text-red-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Energy Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-red-50 to-pink-50 rounded-xl border-l-4 border-red-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Converted Energy</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-red-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-red-600 hover:text-red-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Energy Units Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <!-- SI Units -->
                                        <div class="space-y-3">
                                            <h4 class="font-semibold text-gray-700 text-center">SI Units</h4>
                                            
                                            <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Joules</h5>
                                                    <div class="text-lg font-bold text-blue-600 font-mono" id="joulesDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">SI energy unit</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Kilojoules</h5>
                                                    <div class="text-lg font-bold text-indigo-600 font-mono" id="kilojoulesDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">1000 joules</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Megajoules</h5>
                                                    <div class="text-lg font-bold text-purple-600 font-mono" id="megajoulesDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Million joules</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Electrical Units -->
                                        <div class="space-y-3">
                                            <h4 class="font-semibold text-gray-700 text-center">Electrical Units</h4>
                                            
                                            <div class="p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">kWh</h5>
                                                    <div class="text-lg font-bold text-green-600 font-mono" id="kwhDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Kilowatt hours</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg border-l-4 border-emerald-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Wh</h5>
                                                    <div class="text-lg font-bold text-emerald-600 font-mono" id="whDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Watt hours</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">eV</h5>
                                                    <div class="text-lg font-bold text-teal-600 font-mono" id="evDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Electron volts</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Thermal Units -->
                                        <div class="space-y-3">
                                            <h4 class="font-semibold text-gray-700 text-center">Thermal Units</h4>
                                            
                                            <div class="p-3 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Calories</h5>
                                                    <div class="text-lg font-bold text-orange-600 font-mono" id="caloriesDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Thermal calories</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">BTU</h5>
                                                    <div class="text-lg font-bold text-red-600 font-mono" id="btuDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">British thermal units</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Food Cal</h5>
                                                    <div class="text-lg font-bold text-pink-600 font-mono" id="foodCalDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Dietary calories</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Energy Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Energy Conversion Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div><strong>1 J</strong> = 0.239 cal</div>
                                        <div><strong>1 cal</strong> = 4.184 J</div>
                                        <div><strong>1 kWh</strong> = 3.6 MJ</div>
                                        <div><strong>1 BTU</strong> = 1055 J</div>
                                        <div><strong>1 erg</strong> = 10⁻⁷ J</div>
                                        <div><strong>1 eV</strong> = 1.602×10⁻¹⁹ J</div>
                                        <div><strong>1 therm</strong> = 105.5 MJ</div>
                                        <div><strong>1 ft⋅lb</strong> = 1.356 J</div>
                                        <div><strong>Food cal</strong> = 1000 cal</div>
                                        <div><strong>TNT</strong> = 4.6 MJ/kg</div>
                                        <div><strong>Gasoline</strong> = 34.2 MJ/L</div>
                                        <div><strong>Coal</strong> = 24 MJ/kg</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Energy Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Understanding Energy Units</h4>
                                    <p>Energy can be expressed in many units depending on the context: joules for scientific work, calories for nutrition, kWh for electricity billing, and BTU for heating systems. Each unit serves specific industries and applications, making conversion essential for interdisciplinary work.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Energy Applications</h4>
                                    <p>Energy conversions are crucial in engineering, physics, nutrition science, and energy management. Understanding these relationships helps in power system design, dietary planning, fuel efficiency calculations, and comparing different energy sources.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-red-50 rounded-lg border border-red-200">
                                <p class="text-sm text-red-800">
                                    <strong>Energy Tip:</strong> Energy is conserved but can change forms - kinetic, potential, thermal, electrical, chemical, and nuclear energy are all interconvertible!
                                </p>
                            </div>
                        </div>

                        <!-- Energy Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Energy Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Everyday Energy</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-red-600 cursor-pointer hover:text-red-800" data-example="15" data-from="kilowatt_hour" data-to="joule">Household Daily: 15 kWh</div>
                                        <div class="text-xs text-gray-600 mt-1">Average home daily consumption</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-red-600 cursor-pointer hover:text-red-800" data-example="2000" data-from="food_calorie" data-to="joule">Daily Food: 2000 Cal</div>
                                        <div class="text-xs text-gray-600 mt-1">Adult daily caloric intake</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Industrial Energy</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-red-600 cursor-pointer hover:text-red-800" data-example="1000" data-from="therm" data-to="joule">Heating: 1000 therms</div>
                                        <div class="text-xs text-gray-600 mt-1">Annual home heating</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-red-600 cursor-pointer hover:text-red-800" data-example="1" data-from="tnt_equivalent" data-to="joule">Explosive: 1 kg TNT</div>
                                        <div class="text-xs text-gray-600 mt-1">Chemical explosive energy</div>
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
                        const energyType = document.getElementById('energyType');
                        const clearButton = document.getElementById('clearButton');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const joulesDisplay = document.getElementById('joulesDisplay');
                        const kilojoulesDisplay = document.getElementById('kilojoulesDisplay');
                        const megajoulesDisplay = document.getElementById('megajoulesDisplay');
                        const kwhDisplay = document.getElementById('kwhDisplay');
                        const whDisplay = document.getElementById('whDisplay');
                        const evDisplay = document.getElementById('evDisplay');
                        const caloriesDisplay = document.getElementById('caloriesDisplay');
                        const btuDisplay = document.getElementById('btuDisplay');
                        const foodCalDisplay = document.getElementById('foodCalDisplay');
                        const tntEquivalent = document.getElementById('tntEquivalent');
                        const gasolineEquivalent = document.getElementById('gasolineEquivalent');
                        const lightBulbTime = document.getElementById('lightBulbTime');
                        const phoneCharges = document.getElementById('phoneCharges');
                        const conversionFormula = document.getElementById('conversionFormula');
                        const copyResult = document.getElementById('copyResult');

                        // Energy conversion multipliers (to joules as base)
                        const energyMultipliers = {
                            joule: 1,
                            kilojoule: 1000,
                            megajoule: 1000000,
                            gigajoule: 1000000000,
                            kilowatt_hour: 3600000,
                            watt_hour: 3600,
                            megawatt_hour: 3600000000,
                            electron_volt: 1.602176634e-19,
                            calorie: 4.184,
                            kilocalorie: 4184,
                            btu: 1055.06,
                            therm: 105505600,
                            foot_pound: 1.355818,
                            newton_meter: 1,
                            erg: 1e-7,
                            tnt_equivalent: 4600000,
                            gasoline_equivalent: 34200000,
                            food_calorie: 4184
                        };

                        const unitLabels = {
                            joule: 'J',
                            kilojoule: 'kJ',
                            megajoule: 'MJ',
                            gigajoule: 'GJ',
                            kilowatt_hour: 'kWh',
                            watt_hour: 'Wh',
                            megawatt_hour: 'MWh',
                            electron_volt: 'eV',
                            calorie: 'cal',
                            kilocalorie: 'kcal',
                            btu: 'BTU',
                            therm: 'therm',
                            foot_pound: 'ft⋅lb',
                            newton_meter: 'N⋅m',
                            erg: 'erg',
                            tnt_equivalent: 'kg TNT',
                            gasoline_equivalent: 'L gas',
                            food_calorie: 'Cal'
                        };

                        function formatNumber(num, decimals = 3) {
                            if (Math.abs(num) >= 1e15 || (Math.abs(num) <= 1e-10 && num !== 0)) {
                                return num.toExponential(3);
                            } else if (Math.abs(num) >= 1e12) {
                                return (num / 1e12).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'T';
                            } else if (Math.abs(num) >= 1e9) {
                                return (num / 1e9).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'B';
                            } else if (Math.abs(num) >= 1e6) {
                                return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'M';
                            } else if (Math.abs(num) >= 1e3) {
                                return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'K';
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: decimals, minimumFractionDigits: 0 });
                            }
                        }

                        function getConversionFormula(from, to) {
                            const fromFactor = energyMultipliers[from];
                            const toFactor = energyMultipliers[to];
                            const conversionFactor = fromFactor / toFactor;
                            
                            if (from === 'joule' && to === 'calorie') {
                                return 'J ÷ 4.184 = cal';
                            } else if (from === 'calorie' && to === 'joule') {
                                return 'cal × 4.184 = J';
                            } else if (from === 'kilowatt_hour' && to === 'joule') {
                                return 'kWh × 3,600,000 = J';
                            } else if (from === 'joule' && to === 'kilowatt_hour') {
                                return 'J ÷ 3,600,000 = kWh';
                            } else if (Math.abs(conversionFactor - 1) < 0.0001) {
                                return `${unitLabels[from]} = ${unitLabels[to]}`;
                            } else if (conversionFactor > 1) {
                                return `${unitLabels[from]} × ${formatNumber(conversionFactor, 6)} = ${unitLabels[to]}`;
                            } else {
                                return `${unitLabels[from]} ÷ ${formatNumber(1/conversionFactor, 6)} = ${unitLabels[to]}`;
                            }
                        }

                        function calculateEquivalents(joules) {
                            return {
                                tnt: formatNumber(joules / energyMultipliers.tnt_equivalent, 6) + ' kg',
                                gasoline: formatNumber(joules / energyMultipliers.gasoline_equivalent, 3) + ' L',
                                lightBulb: formatNumber(joules / (60 * 3600), 1) + ' hours', // 60W bulb
                                phoneCharges: formatNumber(joules / (15 * 3600), 0) + ' charges' // 15Wh battery
                            };
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const from = fromUnit.value;
                            const to = toUnit.value;

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                // Convert input to joules first
                                const inputInJoules = inputVal * energyMultipliers[from];
                                
                                // Convert joules to target unit
                                const result = inputInJoules / energyMultipliers[to];
                                
                                // Update primary output
                                output.textContent = formatNumber(result) + ' ' + unitLabels[to];
                                resultTitle.textContent = `${unitLabels[to]}`;
                                resultDescription.textContent = `${inputVal} ${unitLabels[from]} = ${formatNumber(result)} ${unitLabels[to]}`;

                                // Convert to all common units and display
                                const joules = inputInJoules;
                                joulesDisplay.textContent = formatNumber(joules);
                                kilojoulesDisplay.textContent = formatNumber(joules / energyMultipliers.kilojoule);
                                megajoulesDisplay.textContent = formatNumber(joules / energyMultipliers.megajoule);
                                kwhDisplay.textContent = formatNumber(joules / energyMultipliers.kilowatt_hour);
                                whDisplay.textContent = formatNumber(joules / energyMultipliers.watt_hour);
                                evDisplay.textContent = formatNumber(joules / energyMultipliers.electron_volt);
                                caloriesDisplay.textContent = formatNumber(joules / energyMultipliers.calorie);
                                btuDisplay.textContent = formatNumber(joules / energyMultipliers.btu);
                                foodCalDisplay.textContent = formatNumber(joules / energyMultipliers.food_calorie);

                                // Energy equivalents
                                const equivalents = calculateEquivalents(joules);
                                tntEquivalent.textContent = equivalents.tnt;
                                gasolineEquivalent.textContent = equivalents.gasoline;
                                lightBulbTime.textContent = equivalents.lightBulb;
                                phoneCharges.textContent = equivalents.phoneCharges;

                                // Conversion formula
                                conversionFormula.textContent = getConversionFormula(from, to);

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            resultTitle.textContent = 'Converted Energy';
                            resultDescription.textContent = 'Converted result';
                            joulesDisplay.textContent = '--';
                            kilojoulesDisplay.textContent = '--';
                            megajoulesDisplay.textContent = '--';
                            kwhDisplay.textContent = '--';
                            whDisplay.textContent = '--';
                            evDisplay.textContent = '--';
                            caloriesDisplay.textContent = '--';
                            btuDisplay.textContent = '--';
                            foodCalDisplay.textContent = '--';
                            tntEquivalent.textContent = '--';
                            gasolineEquivalent.textContent = '--';
                            lightBulbTime.textContent = '--';
                            phoneCharges.textContent = '--';
                            conversionFormula.textContent = 'Select units to see formula';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            fromUnit.value = 'joule';
                            toUnit.value = 'kilojoule';
                            energyType.value = '';
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        fromUnit.addEventListener('change', convert);
                        toUnit.addEventListener('change', convert);
                        energyType.addEventListener('change', convert);

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
                        const energyExamples = document.querySelectorAll('.energy-example');
                        energyExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const from = this.getAttribute('data-from');
                                const to = this.getAttribute('data-to');
                                
                                inputValue.value = value;
                                fromUnit.value = from;
                                toUnit.value = to;
                                convert();
                                
                                // Update button styles
                                energyExamples.forEach(btn => btn.classList.remove('bg-red-100', 'text-red-700'));
                                energyExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-red-100', 'text-red-700');
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
