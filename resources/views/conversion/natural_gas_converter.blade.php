<x-app-layout 
    title="Natural Gas Converter - ConvertPro"
    description="Professional natural gas converter for volume and energy units. Convert between cubic feet, therms, BTU, cubic meters, and other gas measurement units for energy calculations."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Natural Gas Converter']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-indigo-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Natural Gas Converter</h1>
                    <p class="text-gray-600">Convert between different natural gas volume and energy units</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Gas Volume & Energy Converter</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Input Value -->
                            <div class="space-y-2">
                                <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                    Enter Gas Value
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="inputValue" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter gas value (e.g., 1000)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">Value</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">Enter natural gas measurement value</p>
                            </div>

                            <!-- From Unit -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    From Unit (Source)
                                </label>
                                <select 
                                    id="fromUnit" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <optgroup label="Volume Units (Imperial)">
                                        <option value="cubic_feet" selected>Cubic Feet (ft³)</option>
                                        <option value="ccf">CCF (Hundred Cubic Feet)</option>
                                        <option value="mcf">MCF (Thousand Cubic Feet)</option>
                                        <option value="mmcf">MMCF (Million Cubic Feet)</option>
                                        <option value="bcf">BCF (Billion Cubic Feet)</option>
                                        <option value="tcf">TCF (Trillion Cubic Feet)</option>
                                    </optgroup>
                                    <optgroup label="Volume Units (Metric)">
                                        <option value="cubic_meters">Cubic Meters (m³)</option>
                                        <option value="liters">Liters (L)</option>
                                        <option value="cubic_centimeters">Cubic Centimeters (cm³)</option>
                                        <option value="normal_cubic_meters">Normal Cubic Meters (Nm³)</option>
                                    </optgroup>
                                    <optgroup label="Energy Units">
                                        <option value="therms">Therms</option>
                                        <option value="dekatherms">Dekatherms (Dth)</option>
                                        <option value="btu">BTU (British Thermal Units)</option>
                                        <option value="mmbtu">MMBTU (Million BTU)</option>
                                        <option value="joules">Joules (J)</option>
                                        <option value="kwh">Kilowatt Hours (kWh)</option>
                                        <option value="mwh">Megawatt Hours (MWh)</option>
                                        <option value="calories">Calories (cal)</option>
                                    </optgroup>
                                    <optgroup label="Mass Units">
                                        <option value="pounds">Pounds (lb)</option>
                                        <option value="kilograms">Kilograms (kg)</option>
                                        <option value="tonnes">Tonnes (t)</option>
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
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <optgroup label="Volume Units (Imperial)">
                                        <option value="cubic_feet">Cubic Feet (ft³)</option>
                                        <option value="ccf" selected>CCF (Hundred Cubic Feet)</option>
                                        <option value="mcf">MCF (Thousand Cubic Feet)</option>
                                        <option value="mmcf">MMCF (Million Cubic Feet)</option>
                                        <option value="bcf">BCF (Billion Cubic Feet)</option>
                                        <option value="tcf">TCF (Trillion Cubic Feet)</option>
                                    </optgroup>
                                    <optgroup label="Volume Units (Metric)">
                                        <option value="cubic_meters">Cubic Meters (m³)</option>
                                        <option value="liters">Liters (L)</option>
                                        <option value="cubic_centimeters">Cubic Centimeters (cm³)</option>
                                        <option value="normal_cubic_meters">Normal Cubic Meters (Nm³)</option>
                                    </optgroup>
                                    <optgroup label="Energy Units">
                                        <option value="therms">Therms</option>
                                        <option value="dekatherms">Dekatherms (Dth)</option>
                                        <option value="btu">BTU (British Thermal Units)</option>
                                        <option value="mmbtu">MMBTU (Million BTU)</option>
                                        <option value="joules">Joules (J)</option>
                                        <option value="kwh">Kilowatt Hours (kWh)</option>
                                        <option value="mwh">Megawatt Hours (MWh)</option>
                                        <option value="calories">Calories (cal)</option>
                                    </optgroup>
                                    <optgroup label="Mass Units">
                                        <option value="pounds">Pounds (lb)</option>
                                        <option value="kilograms">Kilograms (kg)</option>
                                        <option value="tonnes">Tonnes (t)</option>
                                    </optgroup>
                                </select>
                            </div>

                            <!-- Gas Properties -->
                            <div class="space-y-2 hidden">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Gas Properties
                                </label>
                                <select 
                                    id="gasProperties" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="">Standard conditions</option>
                                    <option value="high_heating">High heating value gas</option>
                                    <option value="low_heating">Low heating value gas</option>
                                    <option value="pipeline">Pipeline quality gas</option>
                                    <option value="wellhead">Wellhead gas</option>
                                    <option value="lng">Liquefied Natural Gas (LNG)</option>
                                    <option value="compressed">Compressed Natural Gas (CNG)</option>
                                </select>
                            </div>

                            <!-- Quick Gas Examples -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Quick Gas Examples
                                </label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <button type="button" class="gas-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="1000" data-from="cubic_feet" data-to="therms">1000 ft³</button>
                                    <button type="button" class="gas-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="1" data-from="ccf" data-to="therms">1 CCF</button>
                                    <button type="button" class="gas-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="1" data-from="therms" data-to="btu">1 Therm</button>
                                    <button type="button" class="gas-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="1" data-from="cubic_meters" data-to="cubic_feet">1 m³</button>
                                </div>
                            </div>

                            <!-- Clear Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="clearButton"
                                    class="inline-flex items-center px-4 py-2 bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-medium rounded-lg transition-colors duration-200"
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
                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Gas Conversion Results</h3>
                            
                            <!-- Primary Result -->
                            <div class="p-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl border-l-4 border-indigo-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Converted Gas Value</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-indigo-600 font-mono" id="output">--</div>
                                        <button class="text-xs text-indigo-600 hover:text-indigo-800 mt-1" id="copyResult">Copy Result</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Gas Units Display -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Volume Units -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Volume Units</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Cubic Feet</h5>
                                            <div class="text-lg font-bold text-blue-600 font-mono" id="cubicFeetDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Standard volume unit</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border-l-4 border-cyan-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">CCF</h5>
                                            <div class="text-lg font-bold text-cyan-600 font-mono" id="ccfDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Hundred cubic feet</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Cubic Meters</h5>
                                            <div class="text-lg font-bold text-teal-600 font-mono" id="cubicMetersDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Metric volume unit</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">MCF</h5>
                                            <div class="text-lg font-bold text-green-600 font-mono" id="mcfDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Thousand cubic feet</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Energy Units -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Energy Units</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Therms</h5>
                                            <div class="text-lg font-bold text-red-600 font-mono" id="thermsDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Common energy unit</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">BTU</h5>
                                            <div class="text-lg font-bold text-orange-600 font-mono" id="btuDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">British thermal units</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border-l-4 border-yellow-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">kWh</h5>
                                            <div class="text-lg font-bold text-yellow-600 font-mono" id="kwhDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Kilowatt hours</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">MMBTU</h5>
                                            <div class="text-lg font-bold text-purple-600 font-mono" id="mmbtuDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Million BTU</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- Gas Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Natural Gas Unit Reference</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                <div><strong>1 CCF</strong> = 100 ft³</div>
                                <div><strong>1 MCF</strong> = 1,000 ft³</div>
                                <div><strong>1 Therm</strong> = 100,000 BTU</div>
                                <div><strong>1 Dth</strong> = 10 Therms</div>
                                <div><strong>1 ft³</strong> ≈ 1,030 BTU</div>
                                <div><strong>1 m³</strong> = 35.314 ft³</div>
                                <div><strong>1 MMBTU</strong> = 1,000,000 BTU</div>
                                <div><strong>1 kWh</strong> = 3,412 BTU</div>
                                <div><strong>Standard temp:</strong> 60°F (15.6°C)</div>
                                <div><strong>Standard pressure:</strong> 14.7 psia</div>
                                <div><strong>Specific gravity:</strong> 0.55-0.65</div>
                                <div><strong>Heating value:</strong> 950-1,150 BTU/ft³</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Natural Gas Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Gas Measurement</h4>
                            <p>Natural gas is measured by volume (cubic feet, cubic meters) or energy content (BTU, therms). Volume measurements depend on temperature and pressure conditions, while energy measurements reflect the actual heating value and are more consistent for pricing and usage calculations.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Industry Applications</h4>
                            <p>Gas conversions are essential for utility billing, energy trading, pipeline operations, and industrial processes. Different regions and industries use various units, making accurate conversion critical for contracts, regulations, and efficiency calculations.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                        <p class="text-sm text-indigo-800">
                            <strong>Gas Tip:</strong> Heating values can vary by gas composition and source - pipeline gas typically has higher BTU content than wellhead gas!
                        </p>
                    </div>
                </div>

                <!-- Usage Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Gas Usage Examples</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Residential Usage</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-example="100" data-from="ccf" data-to="therms">Monthly Bill: 100 CCF</div>
                                <div class="text-xs text-gray-600 mt-1">Average household monthly usage</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-example="40000" data-from="btu" data-to="cubic_feet">Water Heater: 40,000 BTU</div>
                                <div class="text-xs text-gray-600 mt-1">Typical water heater input</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Commercial/Industrial</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-example="10" data-from="mmbtu" data-to="mcf">Industrial Boiler: 10 MMBTU</div>
                                <div class="text-xs text-gray-600 mt-1">Large commercial boiler capacity</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-example="1" data-from="bcf" data-to="therms">Power Plant: 1 BCF</div>
                                <div class="text-xs text-gray-600 mt-1">Natural gas power plant fuel</div>
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
                const inputValue = document.getElementById('inputValue');
                const fromUnit = document.getElementById('fromUnit');
                const toUnit = document.getElementById('toUnit');
                const gasProperties = document.getElementById('gasProperties');
                const clearButton = document.getElementById('clearButton');
                
                // Output elements
                const output = document.getElementById('output');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const cubicFeetDisplay = document.getElementById('cubicFeetDisplay');
                const ccfDisplay = document.getElementById('ccfDisplay');
                const cubicMetersDisplay = document.getElementById('cubicMetersDisplay');
                const mcfDisplay = document.getElementById('mcfDisplay');
                const thermsDisplay = document.getElementById('thermsDisplay');
                const btuDisplay = document.getElementById('btuDisplay');
                const kwhDisplay = document.getElementById('kwhDisplay');
                const mmbtuDisplay = document.getElementById('mmbtuDisplay');
                const heatingValue = document.getElementById('heatingValue');
                const specificGravity = document.getElementById('specificGravity');
                const energyDensity = document.getElementById('energyDensity');
                const residentialCost = document.getElementById('residentialCost');
                const commercialCost = document.getElementById('commercialCost');
                const industrialCost = document.getElementById('industrialCost');
                const co2Emissions = document.getElementById('co2Emissions');
                const carbonFootprint = document.getElementById('carbonFootprint');
                const copyResult = document.getElementById('copyResult');

                // Gas conversion multipliers (to cubic feet as base)
                const gasMultipliers = {
                    // Volume units
                    cubic_feet: 1,
                    ccf: 100,
                    mcf: 1000,
                    mmcf: 1000000,
                    bcf: 1000000000,
                    tcf: 1000000000000,
                    cubic_meters: 35.314667,
                    liters: 0.035314667,
                    cubic_centimeters: 0.000035314667,
                    normal_cubic_meters: 35.314667,
                    
                    // Energy units (assuming 1030 BTU/ft³)
                    therms: 97.087, // 100,000 BTU / 1030 BTU/ft³
                    dekatherms: 970.87,
                    btu: 0.000970874, // 1 BTU / 1030 BTU/ft³
                    mmbtu: 970.874,
                    joules: 0.000000926, // 1 J ≈ 0.000948 BTU
                    kwh: 3.312, // 3412 BTU / 1030 BTU/ft³
                    mwh: 3312,
                    calories: 0.000003968,
                    
                    // Mass units (assuming 0.6 specific gravity)
                    pounds: 0.0752, // Approx for natural gas
                    kilograms: 0.0341,
                    tonnes: 34.1
                };

                const unitLabels = {
                    cubic_feet: 'ft³',
                    ccf: 'CCF',
                    mcf: 'MCF',
                    mmcf: 'MMCF',
                    bcf: 'BCF',
                    tcf: 'TCF',
                    cubic_meters: 'm³',
                    liters: 'L',
                    cubic_centimeters: 'cm³',
                    normal_cubic_meters: 'Nm³',
                    therms: 'therms',
                    dekatherms: 'Dth',
                    btu: 'BTU',
                    mmbtu: 'MMBTU',
                    joules: 'J',
                    kwh: 'kWh',
                    mwh: 'MWh',
                    calories: 'cal',
                    pounds: 'lb',
                    kilograms: 'kg',
                    tonnes: 't'
                };

                function formatNumber(num, decimals = 3) {
                    if (Math.abs(num) >= 1e15) {
                        return num.toExponential(2);
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

                function getGasProperties(properties) {
                    const defaults = {
                        heatingValue: 1030, // BTU/ft³
                        specificGravity: 0.60,
                        co2Factor: 117 // lbs CO2/MMBTU
                    };

                    switch(properties) {
                        case 'high_heating':
                            return { heatingValue: 1100, specificGravity: 0.65, co2Factor: 117 };
                        case 'low_heating':
                            return { heatingValue: 950, specificGravity: 0.55, co2Factor: 117 };
                        case 'pipeline':
                            return { heatingValue: 1030, specificGravity: 0.60, co2Factor: 117 };
                        case 'wellhead':
                            return { heatingValue: 1000, specificGravity: 0.58, co2Factor: 117 };
                        case 'lng':
                            return { heatingValue: 1030, specificGravity: 0.42, co2Factor: 117 };
                        case 'compressed':
                            return { heatingValue: 1030, specificGravity: 0.60, co2Factor: 117 };
                        default:
                            return defaults;
                    }
                }

                function calculateCosts(cubicFeet) {
                    // Average US rates per therm (approximate)
                    const residentialRate = 1.20; // $/therm
                    const commercialRate = 0.95;  // $/therm
                    const industrialRate = 0.65;  // $/therm
                    
                    const therms = cubicFeet / 97.087; // Convert ft³ to therms
                    
                    return {
                        residential: therms * residentialRate,
                        commercial: therms * commercialRate,
                        industrial: therms * industrialRate
                    };
                }

                function calculateEmissions(cubicFeet, gasProps) {
                    const btu = cubicFeet * gasProps.heatingValue;
                    const mmbtu = btu / 1000000;
                    const co2Pounds = mmbtu * gasProps.co2Factor;
                    const co2Kg = co2Pounds * 0.453592;
                    
                    return {
                        co2Pounds: co2Pounds,
                        co2Kg: co2Kg
                    };
                }

                function convert() {
                    const inputVal = parseFloat(inputValue.value);
                    const from = fromUnit.value;
                    const to = toUnit.value;
                    const properties = gasProperties.value;

                    if (!isNaN(inputVal) && inputVal >= 0) {
                        const gasProps = getGasProperties(properties);
                        
                        // Convert input to cubic feet first
                        const inputInCubicFeet = inputVal * gasMultipliers[from];
                        
                        // Convert cubic feet to target unit
                        const result = inputInCubicFeet / gasMultipliers[to];
                        
                        // Update primary output
                        output.textContent = formatNumber(result) + ' ' + unitLabels[to];
                        resultTitle.textContent = `${unitLabels[to]}`;
                        resultDescription.textContent = `${inputVal} ${unitLabels[from]} = ${formatNumber(result)} ${unitLabels[to]}`;

                        // Convert to all common units and display
                        const cubicFeet = inputInCubicFeet;
                        cubicFeetDisplay.textContent = formatNumber(cubicFeet);
                        ccfDisplay.textContent = formatNumber(cubicFeet / gasMultipliers.ccf);
                        cubicMetersDisplay.textContent = formatNumber(cubicFeet / gasMultipliers.cubic_meters);
                        mcfDisplay.textContent = formatNumber(cubicFeet / gasMultipliers.mcf);
                        thermsDisplay.textContent = formatNumber(cubicFeet / gasMultipliers.therms);
                        btuDisplay.textContent = formatNumber(cubicFeet * gasProps.heatingValue);
                        kwhDisplay.textContent = formatNumber(cubicFeet / gasMultipliers.kwh);
                        mmbtuDisplay.textContent = formatNumber((cubicFeet * gasProps.heatingValue) / 1000000);

                        // Gas properties
                        heatingValue.textContent = gasProps.heatingValue + ' BTU/ft³';
                        specificGravity.textContent = gasProps.specificGravity.toFixed(2);
                        energyDensity.textContent = formatNumber(gasProps.heatingValue * gasProps.specificGravity) + ' BTU/ft³';

                        // Cost estimation
                        const costs = calculateCosts(cubicFeet);
                        residentialCost.textContent = '$' + costs.residential.toFixed(2);
                        commercialCost.textContent = '$' + costs.commercial.toFixed(2);
                        industrialCost.textContent = '$' + costs.industrial.toFixed(2);

                        // Environmental impact
                        const emissions = calculateEmissions(cubicFeet, gasProps);
                        co2Emissions.textContent = formatNumber(emissions.co2Pounds, 1) + ' lbs';
                        carbonFootprint.textContent = formatNumber(emissions.co2Kg, 1) + ' kg CO₂';

                    } else {
                        clearOutputs();
                    }
                }

                function clearOutputs() {
                    output.textContent = '--';
                    resultTitle.textContent = 'Converted Gas Value';
                    resultDescription.textContent = 'Converted result';
                    cubicFeetDisplay.textContent = '--';
                    ccfDisplay.textContent = '--';
                    cubicMetersDisplay.textContent = '--';
                    mcfDisplay.textContent = '--';
                    thermsDisplay.textContent = '--';
                    btuDisplay.textContent = '--';
                    kwhDisplay.textContent = '--';
                    mmbtuDisplay.textContent = '--';
                    heatingValue.textContent = '1030 BTU/ft³';
                    specificGravity.textContent = '0.60';
                    energyDensity.textContent = '--';
                    residentialCost.textContent = '--';
                    commercialCost.textContent = '--';
                    industrialCost.textContent = '--';
                    co2Emissions.textContent = '--';
                    carbonFootprint.textContent = '--';
                }

                function clearAll() {
                    inputValue.value = '';
                    fromUnit.value = 'cubic_feet';
                    toUnit.value = 'ccf';
                    gasProperties.value = '';
                    clearOutputs();
                    inputValue.focus();
                }

                // Event listeners
                inputValue.addEventListener('input', convert);
                fromUnit.addEventListener('change', convert);
                toUnit.addEventListener('change', convert);
                gasProperties.addEventListener('change', convert);

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
                const gasExamples = document.querySelectorAll('.gas-example');
                gasExamples.forEach(button => {
                    button.addEventListener('click', function() {
                        const value = this.getAttribute('data-value');
                        const from = this.getAttribute('data-from');
                        const to = this.getAttribute('data-to');
                        
                        inputValue.value = value;
                        fromUnit.value = from;
                        toUnit.value = to;
                        convert();
                        
                        // Update button styles
                        gasExamples.forEach(btn => btn.classList.remove('bg-indigo-100', 'text-indigo-700'));
                        gasExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                        this.classList.remove('bg-gray-100', 'text-gray-700');
                        this.classList.add('bg-indigo-100', 'text-indigo-700');
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
</x-app-layout>