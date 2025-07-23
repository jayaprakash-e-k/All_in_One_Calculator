<x-app-layout 
    title="Temperature Conversion - ConvertPro"
    description="Professional temperature conversion calculator for Celsius, Fahrenheit, Kelvin, and Rankine. Convert temperatures with weather applications, cooking conversions, and scientific calculations."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Temperature Conversion']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-red-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Temperature Conversion</h1>
                    <p class="text-gray-600">Celsius, Fahrenheit, Kelvin conversions with weather applications</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Temperature Scale Conversion Calculator</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Temperature Input -->
                            <div class="space-y-2">
                                <label for="temperatureValue" class="block text-sm font-semibold text-gray-700">
                                    Temperature Value
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="temperatureValue" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter temperature (e.g., 25)"
                                        step="any"
                                    >
                                </div>
                                <p class="text-xs text-gray-500">Enter the temperature value to convert</p>
                            </div>

                            <!-- Input Scale -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Input Temperature Scale
                                </label>
                                <select 
                                    id="inputScale" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="celsius" selected>Celsius (°C)</option>
                                    <option value="fahrenheit">Fahrenheit (°F)</option>
                                    <option value="kelvin">Kelvin (K)</option>
                                    <option value="rankine">Rankine (°R)</option>
                                    <option value="delisle">Delisle (°De)</option>
                                    <option value="newton">Newton (°N)</option>
                                    <option value="reaumur">Réaumur (°Ré)</option>
                                    <option value="romer">Rømer (°Rø)</option>
                                </select>
                            </div>

                            <!-- Temperature Context -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Temperature Context
                                </label>
                                <select 
                                    id="temperatureContext" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="">General conversion</option>
                                    <option value="weather">Weather & Climate</option>
                                    <option value="cooking">Cooking & Baking</option>
                                    <option value="scientific">Scientific & Laboratory</option>
                                    <option value="industrial">Industrial Process</option>
                                    <option value="medical">Medical & Health</option>
                                    <option value="hvac">HVAC & Building</option>
                                </select>
                            </div>

                            <!-- Precision -->
                            <div class="space-y-2 hidden">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Decimal Precision
                                </label>
                                <select 
                                    id="precision" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="0">Whole numbers (0 decimal places)</option>
                                    <option value="1" selected>1 decimal place</option>
                                    <option value="2">2 decimal places</option>
                                    <option value="3">3 decimal places</option>
                                    <option value="4">4 decimal places (scientific)</option>
                                </select>
                            </div>

                            <!-- Quick Temperature Examples -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Quick Temperature Examples
                                </label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors" data-temp="0" data-scale="celsius">0°C (Freezing)</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors" data-temp="100" data-scale="celsius">100°C (Boiling)</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-colors" data-temp="98.6" data-scale="fahrenheit">98.6°F (Body)</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors" data-temp="273.15" data-scale="kelvin">273.15K (Freezing)</button>
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
                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Temperature Conversion Results</h3>
                            
                            <!-- Primary Result -->
                            <div class="p-6 bg-gradient-to-r from-red-50 to-orange-50 rounded-xl border-l-4 border-red-500">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Temperature Conversion</h4>
                                        <p class="text-sm text-gray-600" id="result-description">All temperature scales</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-red-600 font-mono" id="output">--</div>
                                        <button class="text-xs text-red-600 hover:text-red-800 mt-1" id="copyResult">Copy Result</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Temperature Scales Display -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Common Scales -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Common Scales</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Celsius</h5>
                                            <div class="text-lg font-bold text-blue-600 font-mono" id="celsiusDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">°C (Metric standard)</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Fahrenheit</h5>
                                            <div class="text-lg font-bold text-indigo-600 font-mono" id="fahrenheitDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">°F (US standard)</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Kelvin</h5>
                                            <div class="text-lg font-bold text-purple-600 font-mono" id="kelvinDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">K (Scientific absolute)</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-violet-50 to-pink-50 rounded-lg border-l-4 border-violet-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Rankine</h5>
                                            <div class="text-lg font-bold text-violet-600 font-mono" id="rankineDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">°R (Engineering absolute)</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Historical Scales -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Historical Scales</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Delisle</h5>
                                            <div class="text-lg font-bold text-green-600 font-mono" id="delisleDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">°De (Historical French)</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg border-l-4 border-emerald-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Newton</h5>
                                            <div class="text-lg font-bold text-emerald-600 font-mono" id="newtonDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">°N (Newton's scale)</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Réaumur</h5>
                                            <div class="text-lg font-bold text-teal-600 font-mono" id="reaumurDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">°Ré (Historical European)</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-cyan-50 to-sky-50 rounded-lg border-l-4 border-cyan-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Rømer</h5>
                                            <div class="text-lg font-bold text-cyan-600 font-mono" id="romerDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">°Rø (Danish scale)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- Reference Information -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Temperature Scale Reference</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                <div><strong>Absolute Zero:</strong> -273.15°C</div>
                                <div><strong>Water freezes:</strong> 0°C / 32°F</div>
                                <div><strong>Room temperature:</strong> 20-25°C / 68-77°F</div>
                                <div><strong>Body temperature:</strong> 37°C / 98.6°F</div>
                                <div><strong>Water boils:</strong> 100°C / 212°F</div>
                                <div><strong>Oven temperature:</strong> 180-220°C / 350-425°F</div>
                                <div><strong>Kelvin = Celsius + 273.15</strong></div>
                                <div><strong>Rankine = Fahrenheit + 459.67</strong></div>
                                <div><strong>Celsius invented:</strong> 1742</div>
                                <div><strong>Fahrenheit invented:</strong> 1724</div>
                                <div><strong>Kelvin invented:</strong> 1848</div>
                                <div><strong>SI base unit:</strong> Kelvin (K)</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Temperature Conversions</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Temperature Scales & Applications</h4>
                            <p>Temperature conversion is essential across many fields. Celsius is used globally for weather and daily life, Fahrenheit remains common in the US, Kelvin is the scientific standard for absolute measurements, and Rankine is used in engineering. Understanding these relationships helps in international communication, scientific work, and practical applications.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Practical Uses</h4>
                            <p>Temperature conversions are needed for weather forecasting, cooking recipes, scientific experiments, medical applications, HVAC systems, and international travel. Each scale has specific advantages: Celsius for intuitive water-based reference points, Fahrenheit for human comfort precision, and Kelvin for thermodynamic calculations.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-red-50 rounded-lg border border-red-200">
                        <p class="text-sm text-red-800">
                            <strong>Important Note:</strong> Kelvin and Rankine are absolute temperature scales starting from absolute zero, while Celsius and Fahrenheit are relative scales based on water's phase transitions.
                        </p>
                    </div>
                </div>

                <!-- Practical Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Temperature Applications</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Weather & Climate</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-red-600 cursor-pointer hover:text-red-800" data-temp="25" data-scale="celsius">Summer Day: 25°C</div>
                                <div class="text-xs text-gray-600 mt-1">Comfortable warm weather</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-red-600 cursor-pointer hover:text-red-800" data-temp="-10" data-scale="celsius">Winter Day: -10°C</div>
                                <div class="text-xs text-gray-600 mt-1">Cold winter temperature</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Cooking & Health</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-red-600 cursor-pointer hover:text-red-800" data-temp="350" data-scale="fahrenheit">Oven: 350°F</div>
                                <div class="text-xs text-gray-600 mt-1">Common baking temperature</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-red-600 cursor-pointer hover:text-red-800" data-temp="101" data-scale="fahrenheit">Fever: 101°F</div>
                                <div class="text-xs text-gray-600 mt-1">Low-grade fever temperature</div>
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
                const temperatureValue = document.getElementById('temperatureValue');
                const inputScale = document.getElementById('inputScale');
                const temperatureContext = document.getElementById('temperatureContext');
                const precision = document.getElementById('precision');
                const clearButton = document.getElementById('clearButton');
                
                // Output elements
                const output = document.getElementById('output');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const celsiusDisplay = document.getElementById('celsiusDisplay');
                const fahrenheitDisplay = document.getElementById('fahrenheitDisplay');
                const kelvinDisplay = document.getElementById('kelvinDisplay');
                const rankineDisplay = document.getElementById('rankineDisplay');
                const delisleDisplay = document.getElementById('delisleDisplay');
                const newtonDisplay = document.getElementById('newtonDisplay');
                const reaumurDisplay = document.getElementById('reaumurDisplay');
                const romerDisplay = document.getElementById('romerDisplay');
                const temperatureRangeDisplay = document.getElementById('temperatureRangeDisplay');
                const temperatureCategoryDisplay = document.getElementById('temperatureCategoryDisplay');
                const waterStateDisplay = document.getElementById('waterStateDisplay');
                const comfortLevelDisplay = document.getElementById('comfortLevelDisplay');
                const copyResult = document.getElementById('copyResult');

                function formatNumber(num, decimals = 1) {
                    return num.toLocaleString(undefined, { 
                        maximumFractionDigits: decimals, 
                        minimumFractionDigits: decimals 
                    });
                }

                function convertTemperature(value, fromScale, toScale) {
                    // First convert to Celsius as the base
                    let celsius;
                    
                    switch(fromScale) {
                        case 'celsius':
                            celsius = value;
                            break;
                        case 'fahrenheit':
                            celsius = (value - 32) * 5/9;
                            break;
                        case 'kelvin':
                            celsius = value - 273.15;
                            break;
                        case 'rankine':
                            celsius = (value - 491.67) * 5/9;
                            break;
                        case 'delisle':
                            celsius = 100 - value * 2/3;
                            break;
                        case 'newton':
                            celsius = value * 100/33;
                            break;
                        case 'reaumur':
                            celsius = value * 5/4;
                            break;
                        case 'romer':
                            celsius = (value - 7.5) * 40/21;
                            break;
                        default:
                            celsius = value;
                    }
                    
                    // Then convert from Celsius to target scale
                    switch(toScale) {
                        case 'celsius':
                            return celsius;
                        case 'fahrenheit':
                            return celsius * 9/5 + 32;
                        case 'kelvin':
                            return celsius + 273.15;
                        case 'rankine':
                            return (celsius + 273.15) * 9/5;
                        case 'delisle':
                            return (100 - celsius) * 3/2;
                        case 'newton':
                            return celsius * 33/100;
                        case 'reaumur':
                            return celsius * 4/5;
                        case 'romer':
                            return celsius * 21/40 + 7.5;
                        default:
                            return celsius;
                    }
                }

                function getTemperatureRange(celsius) {
                    if (celsius < -273) return 'Below absolute zero (impossible)';
                    if (celsius < -200) return 'Cryogenic';
                    if (celsius < -100) return 'Extremely cold';
                    if (celsius < -40) return 'Arctic';
                    if (celsius < 0) return 'Freezing';
                    if (celsius < 10) return 'Cold';
                    if (celsius < 20) return 'Cool';
                    if (celsius < 30) return 'Warm';
                    if (celsius < 40) return 'Hot';
                    if (celsius < 60) return 'Very hot';
                    if (celsius < 100) return 'Extremely hot';
                    if (celsius < 200) return 'Cooking temperature';
                    if (celsius < 500) return 'Industrial temperature';
                    if (celsius < 1000) return 'High temperature';
                    return 'Extreme high temperature';
                }

                function getTemperatureCategory(celsius) {
                    if (celsius < -40) return 'Extreme cold';
                    if (celsius < 0) return 'Below freezing';
                    if (celsius < 15) return 'Cold';
                    if (celsius < 25) return 'Comfortable';
                    if (celsius < 35) return 'Warm';
                    if (celsius < 45) return 'Hot';
                    return 'Extreme heat';
                }

                function getWaterState(celsius) {
                    if (celsius < 0) return 'Ice (solid)';
                    if (celsius < 100) return 'Liquid water';
                    return 'Steam (gas)';
                }

                function getComfortLevel(celsius) {
                    if (celsius < 10) return 'Too cold';
                    if (celsius < 18) return 'Cool';
                    if (celsius < 26) return 'Comfortable';
                    if (celsius < 30) return 'Warm';
                    if (celsius < 35) return 'Hot';
                    return 'Too hot';
                }

                function calculate() {
                    const value = parseFloat(temperatureValue.value);
                    const scale = inputScale.value;
                    const decimals = parseInt(precision.value);
                    
                    if (!isNaN(value)) {
                        // Convert to all scales
                        const celsius = convertTemperature(value, scale, 'celsius');
                        const fahrenheit = convertTemperature(value, scale, 'fahrenheit');
                        const kelvin = convertTemperature(value, scale, 'kelvin');
                        const rankine = convertTemperature(value, scale, 'rankine');
                        const delisle = convertTemperature(value, scale, 'delisle');
                        const newton = convertTemperature(value, scale, 'newton');
                        const reaumur = convertTemperature(value, scale, 'reaumur');
                        const romer = convertTemperature(value, scale, 'romer');
                        
                        // Update primary output (show all common scales)
                        output.textContent = `${formatNumber(celsius, decimals)}°C`;
                        resultTitle.textContent = 'All Temperature Scales';
                        resultDescription.textContent = `${value}° ${scale} converted to all scales`;

                        // Display all temperature scales
                        celsiusDisplay.textContent = formatNumber(celsius, decimals) + '°C';
                        fahrenheitDisplay.textContent = formatNumber(fahrenheit, decimals) + '°F';
                        kelvinDisplay.textContent = formatNumber(kelvin, decimals) + 'K';
                        rankineDisplay.textContent = formatNumber(rankine, decimals) + '°R';
                        delisleDisplay.textContent = formatNumber(delisle, decimals) + '°De';
                        newtonDisplay.textContent = formatNumber(newton, decimals) + '°N';
                        reaumurDisplay.textContent = formatNumber(reaumur, decimals) + '°Ré';
                        romerDisplay.textContent = formatNumber(romer, decimals) + '°Rø';

                        // Context information
                        temperatureRangeDisplay.textContent = getTemperatureRange(celsius);
                        temperatureCategoryDisplay.textContent = getTemperatureCategory(celsius);
                        waterStateDisplay.textContent = getWaterState(celsius);
                        comfortLevelDisplay.textContent = getComfortLevel(celsius);

                    } else {
                        clearOutputs();
                    }
                }

                function clearOutputs() {
                    output.textContent = '--';
                    resultTitle.textContent = 'Temperature Conversion';
                    resultDescription.textContent = 'All temperature scales';
                    celsiusDisplay.textContent = '--';
                    fahrenheitDisplay.textContent = '--';
                    kelvinDisplay.textContent = '--';
                    rankineDisplay.textContent = '--';
                    delisleDisplay.textContent = '--';
                    newtonDisplay.textContent = '--';
                    reaumurDisplay.textContent = '--';
                    romerDisplay.textContent = '--';
                    temperatureRangeDisplay.textContent = '--';
                    temperatureCategoryDisplay.textContent = '--';
                    waterStateDisplay.textContent = '--';
                    comfortLevelDisplay.textContent = '--';
                }

                function clearAll() {
                    temperatureValue.value = '';
                    inputScale.value = 'celsius';
                    temperatureContext.value = '';
                    precision.value = '1';
                    clearOutputs();
                    temperatureValue.focus();
                }

                // Event listeners
                temperatureValue.addEventListener('input', calculate);
                inputScale.addEventListener('change', calculate);
                temperatureContext.addEventListener('change', calculate);
                precision.addEventListener('change', calculate);
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
                        const temp = this.getAttribute('data-temp');
                        const scale = this.getAttribute('data-scale');
                        
                        temperatureValue.value = temp;
                        inputScale.value = scale;
                        calculate();
                        
                        // Update button styles
                        exampleBtns.forEach(btn => btn.classList.remove('bg-red-100', 'text-red-700'));
                        exampleBtns.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                        this.classList.remove('bg-gray-100', 'text-gray-700');
                        this.classList.add('bg-red-100', 'text-red-700');
                    });
                });

                // Clickable examples
                const examples = document.querySelectorAll('[data-temp][data-scale]');
                examples.forEach(element => {
                    element.addEventListener('click', function() {
                        const temp = this.getAttribute('data-temp');
                        const scale = this.getAttribute('data-scale');
                        
                        if (temp && scale) {
                            temperatureValue.value = temp;
                            inputScale.value = scale;
                            calculate();
                            temperatureValue.focus();
                        }
                    });
                });

                // Initialize
                temperatureValue.focus();

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