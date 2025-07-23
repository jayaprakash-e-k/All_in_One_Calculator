<x-app-layout 
    title="Nm to Joules Calculator - ConvertPro"
    description="Professional newton-meter to joules calculator for torque to energy conversion. Calculate rotational energy from torque and angular displacement for mechanical engineering."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Nm to Joules Calculator']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-green-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357 2m15.357-2H15"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Nm to Joules Calculator</h1>
                    <p class="text-gray-600">Convert torque to energy conversion with rotational mechanics</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Torque to Rotational Energy Converter</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Torque Input -->
                            <div class="space-y-2">
                                <label for="torqueValue" class="block text-sm font-semibold text-gray-700">
                                    Torque Value
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="torqueValue" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter torque (e.g., 100)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">Torque</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">Enter torque value for energy calculation</p>
                            </div>

                            <!-- Torque Unit -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Torque Unit
                                </label>
                                <select 
                                    id="torqueUnit" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="newton_meter" selected>Newton-meter (N⋅m)</option>
                                    <option value="kilonewton_meter">Kilonewton-meter (kN⋅m)</option>
                                    <option value="foot_pound">Foot-pound (ft⋅lb)</option>
                                    <option value="inch_pound">Inch-pound (in⋅lb)</option>
                                    <option value="dyne_centimeter">Dyne-centimeter (dyn⋅cm)</option>
                                    <option value="kilogram_meter">Kilogram-force meter (kgf⋅m)</option>
                                    <option value="pound_inch">Pound-inch (lb⋅in)</option>
                                    <option value="ounce_inch">Ounce-inch (oz⋅in)</option>
                                </select>
                            </div>

                            <!-- Angular Displacement Input -->
                            <div class="space-y-2">
                                <label for="angleValue" class="block text-sm font-semibold text-gray-700">
                                    Angular Displacement
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="angleValue" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter angle (e.g., 1)"
                                        step="any"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">Angle</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">Enter angular displacement (required for energy calculation)</p>
                            </div>

                            <!-- Angle Unit -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Angle Unit
                                </label>
                                <select 
                                    id="angleUnit" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="radian" selected>Radian (rad)</option>
                                    <option value="degree">Degree (°)</option>
                                    <option value="revolution">Revolution (rev)</option>
                                    <option value="gradian">Gradian (gon)</option>
                                    <option value="milliradian">Milliradian (mrad)</option>
                                </select>
                            </div>

                            <!-- Application Type -->
                            <div class="space-y-2 hidden">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Application Type
                                </label>
                                <select 
                                    id="applicationType" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="">General calculation</option>
                                    <option value="motor">Electric Motor</option>
                                    <option value="engine">Internal Combustion Engine</option>
                                    <option value="wrench">Wrench/Fastener</option>
                                    <option value="turbine">Turbine/Generator</option>
                                    <option value="gearbox">Gearbox/Transmission</option>
                                    <option value="robotics">Robotics/Automation</option>
                                </select>
                            </div>

                            <!-- Quick Examples -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Quick Examples
                                </label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors" data-torque="100" data-torque-unit="newton_meter" data-angle="1" data-angle-unit="radian">100 N⋅m, 1 rad</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors" data-torque="50" data-torque-unit="foot_pound" data-angle="90" data-angle-unit="degree">50 ft⋅lb, 90°</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors" data-torque="200" data-torque-unit="newton_meter" data-angle="1" data-angle-unit="revolution">200 N⋅m, 1 rev</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors" data-torque="25" data-torque-unit="kilogram_meter" data-angle="180" data-angle-unit="degree">25 kgf⋅m, 180°</button>
                                </div>
                            </div>

                            <!-- Clear Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="clearButton"
                                    class="inline-flex items-center px-4 py-2 bg-green-100 hover:bg-green-200 text-green-700 font-medium rounded-lg transition-colors duration-200"
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
                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Rotational Energy Calculation Results</h3>
                            
                            <!-- Primary Result -->
                            <div class="p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Calculated Energy</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Energy result</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-green-600 font-mono" id="output">--</div>
                                        <button class="text-xs text-green-600 hover:text-green-800 mt-1" id="copyResult">Copy Result</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Energy Units Display -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Energy Units -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Energy Units</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Joules</h5>
                                            <div class="text-lg font-bold text-blue-600 font-mono" id="joulesDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">SI energy unit</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Watt-hours</h5>
                                            <div class="text-lg font-bold text-indigo-600 font-mono" id="wattHoursDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Electrical energy</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Calories</h5>
                                            <div class="text-lg font-bold text-purple-600 font-mono" id="caloriesDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Thermal energy</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mechanical Parameters -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Mechanical Parameters</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Torque</h5>
                                            <div class="text-lg font-bold text-orange-600 font-mono" id="torqueNmDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Newton-meters</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Angle</h5>
                                            <div class="text-lg font-bold text-red-600 font-mono" id="angleRadDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Radians</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Work Done</h5>
                                            <div class="text-lg font-bold text-teal-600 font-mono" id="workDoneDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Rotational work</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Applications -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Applications</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border-l-4 border-yellow-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Motor Power</h5>
                                            <div class="text-lg font-bold text-yellow-600 font-mono" id="motorPowerDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Equivalent power</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Fastener Type</h5>
                                            <div class="text-lg font-bold text-pink-600 font-mono" id="fastenerTypeDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Bolt/nut category</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border-l-4 border-cyan-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Energy Class</h5>
                                            <div class="text-lg font-bold text-cyan-600 font-mono" id="energyClassDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Energy magnitude</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- Reference Information -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Torque & Energy Reference</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                <div><strong>1 N⋅m</strong> = 1 J/rad</div>
                                <div><strong>1 ft⋅lb</strong> = 1.356 N⋅m</div>
                                <div><strong>1 revolution</strong> = 2π radians</div>
                                <div><strong>1 degree</strong> = π/180 radians</div>
                                <div><strong>Car lug nuts</strong> ≈ 100 N⋅m</div>
                                <div><strong>Bike pedal</strong> ≈ 40 N⋅m</div>
                                <div><strong>Electric drill</strong> ≈ 50 N⋅m</div>
                                <div><strong>Engine torque</strong> ≈ 300 N⋅m</div>
                                <div><strong>Small motor</strong> ≈ 1-10 N⋅m</div>
                                <div><strong>Hand wrench</strong> ≈ 20 N⋅m</div>
                                <div><strong>Impact wrench</strong> ≈ 500 N⋅m</div>
                                <div><strong>Industrial motor</strong> > 1000 N⋅m</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Torque to Energy Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Rotational Work</h4>
                            <p>When torque causes angular displacement, rotational work is done: W = τ × θ. This work converts to rotational kinetic energy. The relationship is fundamental in mechanical engineering for motors, engines, gearboxes, and any rotating machinery where torque and angular motion are involved.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Engineering Applications</h4>
                            <p>This conversion is essential in automotive engineering, robotics, power transmission, and manufacturing. Understanding torque-energy relationships helps in motor sizing, fastener tightening specifications, energy efficiency calculations, and mechanical system design.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-green-50 rounded-lg border border-green-200">
                        <p class="text-sm text-green-800">
                            <strong>Note:</strong> This calculator assumes constant torque over the angular displacement. For variable torque, integration over the rotation angle is required.
                        </p>
                    </div>
                </div>

                <!-- Practical Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Practical Torque Examples</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Automotive Applications</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-green-600 cursor-pointer hover:text-green-800" data-torque="100" data-torque-unit="newton_meter" data-angle="90" data-angle-unit="degree">Lug Nuts: 100 N⋅m, 90°</div>
                                <div class="text-xs text-gray-600 mt-1">Wheel bolt tightening</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-green-600 cursor-pointer hover:text-green-800" data-torque="300" data-torque-unit="newton_meter" data-angle="1" data-angle-unit="revolution">Engine: 300 N⋅m, 1 rev</div>
                                <div class="text-xs text-gray-600 mt-1">Engine crankshaft rotation</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Industrial Applications</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-green-600 cursor-pointer hover:text-green-800" data-torque="500" data-torque-unit="foot_pound" data-angle="180" data-angle-unit="degree">Heavy Machinery: 500 ft⋅lb, 180°</div>
                                <div class="text-xs text-gray-600 mt-1">Industrial fastener</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-green-600 cursor-pointer hover:text-green-800" data-torque="1000" data-torque-unit="newton_meter" data-angle="10" data-angle-unit="revolution">Motor: 1000 N⋅m, 10 rev</div>
                                <div class="text-xs text-gray-600 mt-1">Industrial motor operation</div>
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
                const torqueValue = document.getElementById('torqueValue');
                const torqueUnit = document.getElementById('torqueUnit');
                const angleValue = document.getElementById('angleValue');
                const angleUnit = document.getElementById('angleUnit');
                const applicationType = document.getElementById('applicationType');
                const clearButton = document.getElementById('clearButton');
                
                // Output elements
                const output = document.getElementById('output');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const joulesDisplay = document.getElementById('joulesDisplay');
                const wattHoursDisplay = document.getElementById('wattHoursDisplay');
                const caloriesDisplay = document.getElementById('caloriesDisplay');
                const torqueNmDisplay = document.getElementById('torqueNmDisplay');
                const angleRadDisplay = document.getElementById('angleRadDisplay');
                const workDoneDisplay = document.getElementById('workDoneDisplay');
                const motorPowerDisplay = document.getElementById('motorPowerDisplay');
                const fastenerTypeDisplay = document.getElementById('fastenerTypeDisplay');
                const energyClassDisplay = document.getElementById('energyClassDisplay');
                const momentInertiaDisplay = document.getElementById('momentInertiaDisplay');
                const angularVelocityDisplay = document.getElementById('angularVelocityDisplay');
                const frequencyDisplay = document.getElementById('frequencyDisplay');
                const periodDisplay = document.getElementById('periodDisplay');
                const copyResult = document.getElementById('copyResult');

                // Conversion factors to base units
                const torqueToNm = {
                    newton_meter: 1,
                    kilonewton_meter: 1000,
                    foot_pound: 1.355818,
                    inch_pound: 0.112985,
                    dyne_centimeter: 1e-7,
                    kilogram_meter: 9.80665,
                    pound_inch: 0.112985,
                    ounce_inch: 0.007062
                };

                const angleToRadians = {
                    radian: 1,
                    degree: Math.PI / 180,
                    revolution: 2 * Math.PI,
                    gradian: Math.PI / 200,
                    milliradian: 0.001
                };

                function formatNumber(num, decimals = 3) {
                    if (Math.abs(num) >= 1e15 || (Math.abs(num) <= 1e-15 && num !== 0)) {
                        return num.toExponential(3);
                    } else if (Math.abs(num) >= 1e12) {
                        return (num / 1e12).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'T';
                    } else if (Math.abs(num) >= 1e9) {
                        return (num / 1e9).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'G';
                    } else if (Math.abs(num) >= 1e6) {
                        return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'M';
                    } else if (Math.abs(num) >= 1e3) {
                        return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'k';
                    } else {
                        return num.toLocaleString(undefined, { maximumFractionDigits: decimals, minimumFractionDigits: 0 });
                    }
                }

                function getFastenerType(torqueNm) {
                    if (torqueNm < 5) return 'Small screws';
                    if (torqueNm < 20) return 'Machine screws';
                    if (torqueNm < 50) return 'Standard bolts';
                    if (torqueNm < 100) return 'Automotive bolts';
                    if (torqueNm < 300) return 'Heavy-duty bolts';
                    if (torqueNm < 1000) return 'Industrial fasteners';
                    return 'Massive fasteners';
                }

                function getEnergyClass(joules) {
                    if (joules < 0.001) return 'Micro-energy';
                    if (joules < 1) return 'Low energy';
                    if (joules < 100) return 'Moderate energy';
                    if (joules < 10000) return 'High energy';
                    if (joules < 1000000) return 'Very high energy';
                    return 'Extreme energy';
                }

                function getMotorPower(joules, angleRad) {
                    // Assume 1 second for power calculation (P = E/t)
                    if (angleRad === 0) return 'N/A';
                    const power = joules; // For 1 second duration
                    if (power < 1) return formatNumber(power * 1000) + ' mW';
                    if (power < 1000) return formatNumber(power) + ' W';
                    return formatNumber(power / 1000) + ' kW';
                }

                function calculate() {
                    const torque = parseFloat(torqueValue.value);
                    const angle = parseFloat(angleValue.value);
                    const tUnit = torqueUnit.value;
                    const aUnit = angleUnit.value;

                    if (!isNaN(torque) && !isNaN(angle) && torque >= 0 && angle >= 0) {
                        // Convert to base units
                        const torqueNm = torque * torqueToNm[tUnit];
                        const angleRad = angle * angleToRadians[aUnit];
                        
                        // Calculate energy: E = τ × θ
                        const energy = torqueNm * angleRad;
                        
                        // Update primary output
                        output.textContent = formatNumber(energy) + ' J';
                        resultTitle.textContent = 'Calculated Energy';
                        resultDescription.textContent = `${torque} ${tUnit} × ${angle} ${aUnit} = ${formatNumber(energy)} J`;

                        // Display in different energy units
                        joulesDisplay.textContent = formatNumber(energy) + ' J';
                        wattHoursDisplay.textContent = formatNumber(energy / 3600) + ' Wh';
                        caloriesDisplay.textContent = formatNumber(energy / 4.184) + ' cal';

                        // Display mechanical parameters
                        torqueNmDisplay.textContent = formatNumber(torqueNm) + ' N⋅m';
                        angleRadDisplay.textContent = formatNumber(angleRad) + ' rad';
                        workDoneDisplay.textContent = formatNumber(energy) + ' J';

                        // Applications
                        motorPowerDisplay.textContent = getMotorPower(energy, angleRad);
                        fastenerTypeDisplay.textContent = getFastenerType(torqueNm);
                        energyClassDisplay.textContent = getEnergyClass(energy);

                        // Rotational mechanics (assuming some typical values)
                        momentInertiaDisplay.textContent = 'Depends on object';
                        angularVelocityDisplay.textContent = angleRad > 0 ? formatNumber(angleRad) + ' rad/s' : '--';
                        frequencyDisplay.textContent = angleRad > 0 ? formatNumber(angleRad / (2 * Math.PI)) + ' Hz' : '--';
                        periodDisplay.textContent = angleRad > 0 ? formatNumber(2 * Math.PI / angleRad) + ' s' : '--';

                    } else {
                        clearOutputs();
                    }
                }

                function clearOutputs() {
                    output.textContent = '--';
                    resultTitle.textContent = 'Calculated Energy';
                    resultDescription.textContent = 'Energy result';
                    joulesDisplay.textContent = '--';
                    wattHoursDisplay.textContent = '--';
                    caloriesDisplay.textContent = '--';
                    torqueNmDisplay.textContent = '--';
                    angleRadDisplay.textContent = '--';
                    workDoneDisplay.textContent = '--';
                    motorPowerDisplay.textContent = '--';
                    fastenerTypeDisplay.textContent = '--';
                    energyClassDisplay.textContent = '--';
                    momentInertiaDisplay.textContent = '--';
                    angularVelocityDisplay.textContent = '--';
                    frequencyDisplay.textContent = '--';
                    periodDisplay.textContent = '--';
                }

                function clearAll() {
                    torqueValue.value = '';
                    torqueUnit.value = 'newton_meter';
                    angleValue.value = '';
                    angleUnit.value = 'radian';
                    applicationType.value = '';
                    clearOutputs();
                    torqueValue.focus();
                }

                // Event listeners
                torqueValue.addEventListener('input', calculate);
                torqueUnit.addEventListener('change', calculate);
                angleValue.addEventListener('input', calculate);
                angleUnit.addEventListener('change', calculate);
                applicationType.addEventListener('change', calculate);

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
                        const torque = this.getAttribute('data-torque');
                        const tUnit = this.getAttribute('data-torque-unit');
                        const angle = this.getAttribute('data-angle');
                        const aUnit = this.getAttribute('data-angle-unit');
                        
                        torqueValue.value = torque;
                        torqueUnit.value = tUnit;
                        angleValue.value = angle;
                        angleUnit.value = aUnit;
                        calculate();
                        
                        // Update button styles
                        exampleBtns.forEach(btn => btn.classList.remove('bg-green-100', 'text-green-700'));
                        exampleBtns.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                        this.classList.remove('bg-gray-100', 'text-gray-700');
                        this.classList.add('bg-green-100', 'text-green-700');
                    });
                });

                // Clickable examples
                const examples = document.querySelectorAll('[data-torque]');
                examples.forEach(element => {
                    element.addEventListener('click', function() {
                        const torque = this.getAttribute('data-torque');
                        const tUnit = this.getAttribute('data-torque-unit');
                        const angle = this.getAttribute('data-angle');
                        const aUnit = this.getAttribute('data-angle-unit');
                        
                        if (torque && angle) {
                            torqueValue.value = torque;
                            torqueUnit.value = tUnit;
                            angleValue.value = angle;
                            angleUnit.value = aUnit;
                            calculate();
                            torqueValue.focus();
                        }
                    });
                });

                // Initialize
                torqueValue.focus();

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