<x-app-layout 
    title="Angle Conversion Calculator - ConvertPro"
    description="Professional angle conversion calculator for degrees, radians, gradians, and other angular measurements. Perfect for engineering, mathematics, and scientific calculations."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Angle Conversion Calculator']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-blue-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Angle Conversion Calculator</h1>
                    <p class="text-gray-600">Convert between degrees, radians, gradians, and other angular units</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Angular Unit Converter</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Input Value -->
                            <div class="space-y-2">
                                <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                    Enter Angle Value
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="inputValue" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter angle value (e.g., 90)"
                                        step="any"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">Value</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">Enter any positive or negative angle value</p>
                            </div>

                            <!-- From Unit -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    From Unit (Source)
                                </label>
                                <select 
                                    id="fromUnit" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="degrees" selected>Degrees (°)</option>
                                    <option value="radians">Radians (rad)</option>
                                    <option value="gradians">Gradians (grad)</option>
                                    <option value="turns">Turns (rev)</option>
                                    <option value="minutes">Arc Minutes (')</option>
                                    <option value="seconds">Arc Seconds (")</option>
                                    <option value="milliradians">Milliradians (mrad)</option>
                                    <option value="points">Points (compass)</option>
                                </select>
                            </div>

                            <!-- To Unit -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    To Unit (Target)
                                </label>
                                <select 
                                    id="toUnit" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="degrees">Degrees (°)</option>
                                    <option value="radians" selected>Radians (rad)</option>
                                    <option value="gradians">Gradians (grad)</option>
                                    <option value="turns">Turns (rev)</option>
                                    <option value="minutes">Arc Minutes (')</option>
                                    <option value="seconds">Arc Seconds (")</option>
                                    <option value="milliradians">Milliradians (mrad)</option>
                                    <option value="points">Points (compass)</option>
                                </select>
                            </div>

                            <!-- Precision Control -->
                            <div class="space-y-2 hidden">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Display Precision
                                </label>
                                <div class="flex items-center space-x-4">
                                    <input 
                                        type="range" 
                                        id="precision" 
                                        min="0" 
                                        max="12" 
                                        value="6" 
                                        class="flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                                    >
                                    <span class="text-sm font-mono text-gray-700 min-w-[3rem]" id="precisionValue">6 digits</span>
                                </div>
                                <p class="text-xs text-gray-500">Adjust decimal places for calculations</p>
                            </div>

                            <!-- Angle Context -->
                            <div class="space-y-2 hidden">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Angle Context
                                </label>
                                <select 
                                    id="angleContext" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="">General conversion</option>
                                    <option value="geometry">Geometric angles</option>
                                    <option value="navigation">Navigation/compass</option>
                                    <option value="trigonometry">Trigonometry</option>
                                    <option value="engineering">Engineering</option>
                                    <option value="astronomy">Astronomy</option>
                                </select>
                            </div>

                            <!-- Quick Angle Examples -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Quick Angle Examples
                                </label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <button type="button" class="angle-example px-3 py-2 text-sm bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 rounded-lg transition-colors" data-value="90" data-from="degrees" data-to="radians">90°</button>
                                    <button type="button" class="angle-example px-3 py-2 text-sm bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 rounded-lg transition-colors" data-value="180" data-from="degrees" data-to="radians">180°</button>
                                    <button type="button" class="angle-example px-3 py-2 text-sm bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 rounded-lg transition-colors" data-value="3.14159" data-from="radians" data-to="degrees">π rad</button>
                                    <button type="button" class="angle-example px-3 py-2 text-sm bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 rounded-lg transition-colors" data-value="360" data-from="degrees" data-to="radians">360°</button>
                                </div>
                            </div>

                            <!-- Clear Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="clearButton"
                                    class="inline-flex items-center px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium rounded-lg transition-colors duration-200"
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
                            <div class="p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Converted Angle</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-blue-600 font-mono" id="output">--</div>
                                        <button class="text-xs text-blue-600 hover:text-blue-800 mt-1" id="copyResult">Copy Result</button>
                                    </div>
                                </div>
                            </div>

                            <!-- All Angle Units Display -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Common Units -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Common Units</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Degrees</h5>
                                            <div class="text-lg font-bold text-red-600 font-mono" id="degreesDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">360° = full circle</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Radians</h5>
                                            <div class="text-lg font-bold text-orange-600 font-mono" id="radiansDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">2π rad = full circle</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border-l-4 border-yellow-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Gradians</h5>
                                            <div class="text-lg font-bold text-yellow-600 font-mono" id="gradiansDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">400 grad = full circle</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Turns</h5>
                                            <div class="text-lg font-bold text-green-600 font-mono" id="turnsDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">1 turn = full circle</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Precise Units -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Precise Units</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Arc Minutes</h5>
                                            <div class="text-lg font-bold text-blue-600 font-mono" id="minutesDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">60' = 1°</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Arc Seconds</h5>
                                            <div class="text-lg font-bold text-purple-600 font-mono" id="secondsDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">3600" = 1°</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Milliradians</h5>
                                            <div class="text-lg font-bold text-pink-600 font-mono" id="milliradiansDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">1000 mrad ≈ 57.3°</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border-l-4 border-cyan-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Compass Points</h5>
                                            <div class="text-lg font-bold text-cyan-600 font-mono" id="pointsDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">32 points = full circle</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- Angle Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Angle Unit Reference</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                <div><strong>1 degree</strong> = π/180 radians</div>
                                <div><strong>1 radian</strong> = 180/π degrees</div>
                                <div><strong>1 gradian</strong> = 0.9 degrees</div>
                                <div><strong>1 turn</strong> = 360 degrees</div>
                                <div><strong>1 arc minute</strong> = 1/60 degree</div>
                                <div><strong>1 arc second</strong> = 1/3600 degree</div>
                                <div><strong>1 milliradian</strong> = 0.0573 degrees</div>
                                <div><strong>1 compass point</strong> = 11.25 degrees</div>
                                <div><strong>Right angle</strong> = 90°, π/2 rad</div>
                                <div><strong>Straight angle</strong> = 180°, π rad</div>
                                <div><strong>Full circle</strong> = 360°, 2π rad</div>
                                <div><strong>π (pi)</strong> ≈ 3.14159265359</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Angle Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Angular Measurements</h4>
                            <p>Angular measurements are fundamental in mathematics, engineering, navigation, and astronomy. Different fields use different units: degrees for general use, radians for calculus and physics, gradians for surveying, and specialized units for precise measurements.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                            <p>Angle conversions are essential in trigonometry, mechanical engineering, computer graphics, navigation systems, astronomy, and surveying. Understanding these relationships helps in problem-solving across various technical disciplines.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-blue-50 rounded-lg border border-blue-200">
                        <p class="text-sm text-blue-800">
                            <strong>Math Tip:</strong> Radians are the natural unit for calculus and advanced mathematics because they make many formulas simpler and more elegant!
                        </p>
                    </div>
                </div>

                <!-- Common Angle Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Angle Examples</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Geometric Angles</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800" data-example="30" data-from="degrees" data-to="radians">30° Angle</div>
                                <div class="text-xs text-gray-600 mt-1">π/6 radians, common in triangles</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800" data-example="45" data-from="degrees" data-to="radians">45° Angle</div>
                                <div class="text-xs text-gray-600 mt-1">π/4 radians, isosceles right triangle</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800" data-example="60" data-from="degrees" data-to="radians">60° Angle</div>
                                <div class="text-xs text-gray-600 mt-1">π/3 radians, equilateral triangle</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Special Angles</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800" data-example="90" data-from="degrees" data-to="radians">90° Right Angle</div>
                                <div class="text-xs text-gray-600 mt-1">π/2 radians, perpendicular lines</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800" data-example="180" data-from="degrees" data-to="radians">180° Straight Angle</div>
                                <div class="text-xs text-gray-600 mt-1">π radians, straight line</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800" data-example="360" data-from="degrees" data-to="radians">360° Full Circle</div>
                                <div class="text-xs text-gray-600 mt-1">2π radians, complete rotation</div>
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
                const precision = document.getElementById('precision');
                const precisionValue = document.getElementById('precisionValue');
                const angleContext = document.getElementById('angleContext');
                const clearButton = document.getElementById('clearButton');
                
                // Output elements
                const output = document.getElementById('output');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const degreesDisplay = document.getElementById('degreesDisplay');
                const radiansDisplay = document.getElementById('radiansDisplay');
                const gradiansDisplay = document.getElementById('gradiansDisplay');
                const turnsDisplay = document.getElementById('turnsDisplay');
                const minutesDisplay = document.getElementById('minutesDisplay');
                const secondsDisplay = document.getElementById('secondsDisplay');
                const milliradiansDisplay = document.getElementById('milliradiansDisplay');
                const pointsDisplay = document.getElementById('pointsDisplay');
                const conversionFactor = document.getElementById('conversionFactor');
                const quadrant = document.getElementById('quadrant');
                const referenceAngle = document.getElementById('referenceAngle');
                const sinValue = document.getElementById('sinValue');
                const cosValue = document.getElementById('cosValue');
                const tanValue = document.getElementById('tanValue');
                const contextInfo = document.getElementById('contextInfo');
                const angleIndicator = document.getElementById('angleIndicator');
                const angleDescription = document.getElementById('angleDescription');
                const copyResult = document.getElementById('copyResult');

                // Conversion multipliers (to degrees)
                const angleMultipliers = {
                    degrees: 1,
                    radians: 180 / Math.PI,
                    gradians: 0.9,
                    turns: 360,
                    minutes: 1/60,
                    seconds: 1/3600,
                    milliradians: 180 / (Math.PI * 1000),
                    points: 11.25
                };

                const unitLabels = {
                    degrees: '°',
                    radians: 'rad',
                    gradians: 'grad',
                    turns: 'rev',
                    minutes: "'",
                    seconds: '"',
                    milliradians: 'mrad',
                    points: 'pts'
                };

                function getPrecision() {
                    return parseInt(precision.value);
                }

                function formatNumber(num, decimals = null) {
                    const precision = decimals !== null ? decimals : getPrecision();
                    if (Math.abs(num) >= 1e15 || (Math.abs(num) <= 1e-10 && num !== 0)) {
                        return num.toExponential(3);
                    } else {
                        return num.toLocaleString(undefined, { maximumFractionDigits: precision, minimumFractionDigits: Math.min(precision, 2) });
                    }
                }

                function getQuadrant(degrees) {
                    const normalizedDegrees = ((degrees % 360) + 360) % 360;
                    if (normalizedDegrees >= 0 && normalizedDegrees < 90) return 'I';
                    if (normalizedDegrees >= 90 && normalizedDegrees < 180) return 'II';
                    if (normalizedDegrees >= 180 && normalizedDegrees < 270) return 'III';
                    if (normalizedDegrees >= 270 && normalizedDegrees < 360) return 'IV';
                    return 'I';
                }

                function getReferenceAngle(degrees) {
                    const normalizedDegrees = ((degrees % 360) + 360) % 360;
                    if (normalizedDegrees >= 0 && normalizedDegrees <= 90) return normalizedDegrees;
                    if (normalizedDegrees > 90 && normalizedDegrees <= 180) return 180 - normalizedDegrees;
                    if (normalizedDegrees > 180 && normalizedDegrees <= 270) return normalizedDegrees - 180;
                    if (normalizedDegrees > 270 && normalizedDegrees < 360) return 360 - normalizedDegrees;
                    return 0;
                }

                function getContextInfo(degrees, context) {
                    const contexts = {
                        geometry: {
                            name: 'Geometric Angles',
                            getInfo: (deg) => {
                                if (Math.abs(deg % 360) < 0.001) return 'Complete rotation - full circle';
                                if (Math.abs(deg % 180) < 0.001) return 'Straight angle - forms a straight line';
                                if (Math.abs(deg % 90) < 0.001) return 'Right angle - perpendicular lines';
                                if (deg > 0 && deg < 90) return 'Acute angle - less than 90°';
                                if (deg > 90 && deg < 180) return 'Obtuse angle - greater than 90°';
                                if (deg > 180 && deg < 360) return 'Reflex angle - greater than 180°';
                                return 'Angle measurement in geometric context';
                            }
                        },
                        navigation: {
                            name: 'Navigation/Compass',
                            getInfo: (deg) => {
                                const bearing = ((deg % 360) + 360) % 360;
                                if (bearing >= 337.5 || bearing < 22.5) return 'North (N) - 0°/360°';
                                if (bearing >= 22.5 && bearing < 67.5) return 'Northeast (NE) - 45°';
                                if (bearing >= 67.5 && bearing < 112.5) return 'East (E) - 90°';
                                if (bearing >= 112.5 && bearing < 157.5) return 'Southeast (SE) - 135°';
                                if (bearing >= 157.5 && bearing < 202.5) return 'South (S) - 180°';
                                if (bearing >= 202.5 && bearing < 247.5) return 'Southwest (SW) - 225°';
                                if (bearing >= 247.5 && bearing < 292.5) return 'West (W) - 270°';
                                if (bearing >= 292.5 && bearing < 337.5) return 'Northwest (NW) - 315°';
                                return 'Compass bearing direction';
                            }
                        },
                        trigonometry: {
                            name: 'Trigonometry',
                            getInfo: (deg) => {
                                const rad = deg * Math.PI / 180;
                                const sin = Math.sin(rad);
                                const cos = Math.cos(rad);
                                if (Math.abs(sin) < 0.001) return 'Sine = 0 - angle on x-axis';
                                if (Math.abs(cos) < 0.001) return 'Cosine = 0 - angle on y-axis';
                                if (Math.abs(Math.tan(rad)) > 1000) return 'Tangent undefined - vertical asymptote';
                                return `Trigonometric angle: sin≈${sin.toFixed(3)}, cos≈${cos.toFixed(3)}`;
                            }
                        },
                        engineering: {
                            name: 'Engineering',
                            getInfo: (deg) => {
                                if (deg >= -5 && deg <= 5) return 'Near zero - minimal angular deviation';
                                if (Math.abs(deg % 90) < 1) return 'Orthogonal angle - perpendicular alignment';
                                if (Math.abs(deg % 45) < 1) return 'Diagonal angle - 45° reference';
                                if (deg > 360) return 'Multiple rotations - continuous motion';
                                return 'Engineering angular measurement for mechanical systems';
                            }
                        },
                        astronomy: {
                            name: 'Astronomy',
                            getInfo: (deg) => {
                                if (deg >= -90 && deg <= 90) return 'Elevation angle - altitude above horizon';
                                if (deg >= 0 && deg < 360) return 'Azimuth angle - compass direction';
                                if (Math.abs(deg) < 1) return 'Near celestial equator - minimal declination';
                                if (Math.abs(deg - 90) < 1) return 'Near celestial pole - high declination';
                                return 'Astronomical coordinate system measurement';
                            }
                        }
                    };

                    if (context && contexts[context]) {
                        const ctx = contexts[context];
                        return `${ctx.name}: ${ctx.getInfo(degrees)}`;
                    }
                    return 'Select an angle context for specific information';
                }

                function updateAngleVisualization(degrees) {
                    const normalizedDegrees = ((degrees % 360) + 360) % 360;
                    const rotation = normalizedDegrees - 90; // Adjust for 0° at top
                    angleIndicator.style.transform = `translateX(-50%) translateY(-100%) rotate(${rotation}deg)`;
                    
                    let description = '';
                    if (normalizedDegrees === 0) description = 'Pointing North (0°)';
                    else if (normalizedDegrees === 90) description = 'Pointing East (90°)';
                    else if (normalizedDegrees === 180) description = 'Pointing South (180°)';
                    else if (normalizedDegrees === 270) description = 'Pointing West (270°)';
                    else description = `Angle: ${formatNumber(normalizedDegrees, 1)}°`;
                    
                    angleDescription.textContent = description;
                }

                function convert() {
                    const inputVal = parseFloat(inputValue.value);
                    const from = fromUnit.value;
                    const to = toUnit.value;
                    const context = angleContext.value;

                    if (!isNaN(inputVal)) {
                        // Convert input to degrees first
                        const inputInDegrees = inputVal * angleMultipliers[from];
                        
                        // Convert degrees to target unit
                        const result = inputInDegrees / angleMultipliers[to];
                        
                        // Update primary output
                        output.textContent = formatNumber(result) + ' ' + unitLabels[to];
                        resultTitle.textContent = `${unitLabels[to]} (${to})`;
                        resultDescription.textContent = `${inputVal} ${unitLabels[from]} = ${formatNumber(result)} ${unitLabels[to]}`;

                        // Convert to all units and display
                        const degrees = inputInDegrees;
                        degreesDisplay.textContent = formatNumber(degrees / angleMultipliers.degrees);
                        radiansDisplay.textContent = formatNumber(degrees / angleMultipliers.radians);
                        gradiansDisplay.textContent = formatNumber(degrees / angleMultipliers.gradians);
                        turnsDisplay.textContent = formatNumber(degrees / angleMultipliers.turns);
                        minutesDisplay.textContent = formatNumber(degrees / angleMultipliers.minutes);
                        secondsDisplay.textContent = formatNumber(degrees / angleMultipliers.seconds);
                        milliradiansDisplay.textContent = formatNumber(degrees / angleMultipliers.milliradians);
                        pointsDisplay.textContent = formatNumber(degrees / angleMultipliers.points);

                        // Conversion analysis
                        const factor = angleMultipliers[from] / angleMultipliers[to];
                        conversionFactor.textContent = factor >= 1 ? `÷${formatNumber(factor, 6)}` : `×${formatNumber(1/factor, 6)}`;
                        quadrant.textContent = `Quadrant ${getQuadrant(degrees)}`;
                        referenceAngle.textContent = `${formatNumber(getReferenceAngle(degrees), 2)}°`;

                        // Trigonometric values
                        const radians = degrees * Math.PI / 180;
                        sinValue.textContent = formatNumber(Math.sin(radians), 6);
                        cosValue.textContent = formatNumber(Math.cos(radians), 6);
                        const tanVal = Math.tan(radians);
                        tanValue.textContent = Math.abs(tanVal) > 1000 ? '∞' : formatNumber(tanVal, 6);

                        // Context information
                        contextInfo.textContent = getContextInfo(degrees, context);

                        // Update visualization
                        updateAngleVisualization(degrees);

                    } else {
                        clearOutputs();
                    }
                }

                function clearOutputs() {
                    output.textContent = '--';
                    resultTitle.textContent = 'Converted Angle';
                    resultDescription.textContent = 'Converted result';
                    degreesDisplay.textContent = '--';
                    radiansDisplay.textContent = '--';
                    gradiansDisplay.textContent = '--';
                    turnsDisplay.textContent = '--';
                    minutesDisplay.textContent = '--';
                    secondsDisplay.textContent = '--';
                    milliradiansDisplay.textContent = '--';
                    pointsDisplay.textContent = '--';
                    conversionFactor.textContent = '--';
                    quadrant.textContent = '--';
                    referenceAngle.textContent = '--';
                    sinValue.textContent = '--';
                    cosValue.textContent = '--';
                    tanValue.textContent = '--';
                    contextInfo.textContent = 'Select an angle context for specific information';
                    angleIndicator.style.transform = 'translateX(-50%) translateY(-100%) rotate(-90deg)';
                    angleDescription.textContent = 'Enter an angle to see visualization';
                }

                function clearAll() {
                    inputValue.value = '';
                    fromUnit.value = 'degrees';
                    toUnit.value = 'radians';
                    angleContext.value = '';
                    precision.value = 6;
                    precisionValue.textContent = '6 digits';
                    clearOutputs();
                    inputValue.focus();
                }

                // Event listeners
                inputValue.addEventListener('input', convert);
                fromUnit.addEventListener('change', convert);
                toUnit.addEventListener('change', convert);
                angleContext.addEventListener('change', convert);

                precision.addEventListener('input', function() {
                    precisionValue.textContent = this.value + ' digits';
                    convert();
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
                const angleExamples = document.querySelectorAll('.angle-example');
                angleExamples.forEach(button => {
                    button.addEventListener('click', function() {
                        const value = this.getAttribute('data-value');
                        const from = this.getAttribute('data-from');
                        const to = this.getAttribute('data-to');
                        
                        inputValue.value = value;
                        fromUnit.value = from;
                        toUnit.value = to;
                        convert();
                        
                        // Update button styles
                        angleExamples.forEach(btn => btn.classList.remove('bg-blue-100', 'text-blue-700'));
                        angleExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                        this.classList.remove('bg-gray-100', 'text-gray-700');
                        this.classList.add('bg-blue-100', 'text-blue-700');
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
                precisionValue.textContent = precision.value + ' digits';
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