<x-tool-page-layout
    title="Conversion Calculator - ConvertPro"
    description="Professional general purpose conversion calculator. Convert between multiple unit categories including length, weight, volume, temperature, and more with comprehensive unit support."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Universal Unit Conversion Calculator</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Category Selection -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Conversion Category
                                        </label>
                                        <select 
                                            id="conversionCategory" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="length" selected>Length & Distance</option>
                                            <option value="weight">Weight & Mass</option>
                                            <option value="volume">Volume & Capacity</option>
                                            <option value="temperature">Temperature</option>
                                            <option value="area">Area</option>
                                            <option value="speed">Speed & Velocity</option>
                                            <option value="energy">Energy & Power</option>
                                            <option value="pressure">Pressure</option>
                                            <option value="time">Time</option>
                                            <option value="data">Data Storage</option>
                                        </select>
                                    </div>

                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                            Value to Convert
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter value (e.g., 100)"
                                                step="any"
                                            >
                                        </div>
                                        <p class="text-xs text-gray-500">Enter the value you want to convert</p>
                                    </div>

                                    <!-- From Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            From Unit
                                        </label>
                                        <select 
                                            id="fromUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <!-- Options populated dynamically -->
                                        </select>
                                    </div>

                                    <!-- To Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            To Unit
                                        </label>
                                        <select 
                                            id="toUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <!-- Options populated dynamically -->
                                        </select>
                                    </div>

                                    <!-- Swap Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="swapButton"
                                            class="inline-flex items-center px-4 py-2 bg-purple-100 hover:bg-purple-200 text-purple-700 font-medium rounded-lg transition-colors duration-200"
                                        >
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                            </svg>
                                            Swap Units
                                        </button>
                                    </div>

                                    <!-- Quick Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2" id="quickExamples">
                                            <!-- Examples populated dynamically based on category -->
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
                                            Clear
                                        </button>
                                    </div>

                                </form>

                                <!-- Results Display -->
                                <div class="mt-8 space-y-4">
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-purple-50 to-violet-50 rounded-xl border-l-4 border-purple-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Converted Value</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Conversion result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-purple-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-purple-600 hover:text-purple-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Conversion Formula -->
                                    <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border border-blue-200">
                                        <h4 class="text-sm font-semibold text-blue-800 mb-2 text-center">Conversion Formula</h4>
                                        <div class="text-sm text-blue-700 text-center">
                                            <div class="font-mono bg-white px-3 py-2 rounded border inline-block" id="formulaDisplay">
                                                Enter values to see conversion formula
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Multiple Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="multipleConversions">
                                        <!-- Populated dynamically -->
                                    </div>
                                </div>

                                <!-- Reference Information -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Unit Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600" id="unitReference">
                                        <!-- Reference info populated dynamically -->
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Unit Conversions</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Universal Conversion Tool</h4>
                                    <p>This general-purpose converter handles multiple unit categories with precise calculations. It supports common conversions for length, weight, volume, temperature, and more. The tool maintains accuracy across different measurement systems including metric, imperial, and specialized units.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                                    <p>Use this converter for cooking measurements, construction projects, scientific calculations, international commerce, and everyday unit conversions. The tool remembers recent conversions and provides formulas to help understand the mathematical relationships between units.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-purple-50 rounded-lg border border-purple-200">
                                <p class="text-sm text-purple-800">
                                    <strong>Accuracy Note:</strong> All conversions use internationally accepted conversion factors and maintain precision appropriate for practical applications.
                                </p>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const conversionCategory = document.getElementById('conversionCategory');
                        const inputValue = document.getElementById('inputValue');
                        const fromUnit = document.getElementById('fromUnit');
                        const toUnit = document.getElementById('toUnit');
                        const swapButton = document.getElementById('swapButton');
                        const clearButton = document.getElementById('clearButton');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const formulaDisplay = document.getElementById('formulaDisplay');
                        const multipleConversions = document.getElementById('multipleConversions');
                        const conversionHistory = document.getElementById('conversionHistory');
                        const unitReference = document.getElementById('unitReference');
                        const quickExamples = document.getElementById('quickExamples');
                        const copyResult = document.getElementById('copyResult');

                        // Conversion data
                        const conversionData = {
                            length: {
                                name: 'Length & Distance',
                                units: {
                                    'mm': { name: 'Millimeters', factor: 0.001 },
                                    'cm': { name: 'Centimeters', factor: 0.01 },
                                    'm': { name: 'Meters', factor: 1 },
                                    'km': { name: 'Kilometers', factor: 1000 },
                                    'in': { name: 'Inches', factor: 0.0254 },
                                    'ft': { name: 'Feet', factor: 0.3048 },
                                    'yd': { name: 'Yards', factor: 0.9144 },
                                    'mi': { name: 'Miles', factor: 1609.344 },
                                    'nmi': { name: 'Nautical Miles', factor: 1852 }
                                },
                                examples: [
                                    { value: 100, from: 'cm', to: 'm', label: '100 cm' },
                                    { value: 1, from: 'mi', to: 'km', label: '1 mile' },
                                    { value: 12, from: 'in', to: 'ft', label: '12 inches' },
                                    { value: 1000, from: 'm', to: 'km', label: '1000 m' }
                                ]
                            },
                            weight: {
                                name: 'Weight & Mass',
                                units: {
                                    'mg': { name: 'Milligrams', factor: 0.000001 },
                                    'g': { name: 'Grams', factor: 0.001 },
                                    'kg': { name: 'Kilograms', factor: 1 },
                                    't': { name: 'Metric Tons', factor: 1000 },
                                    'oz': { name: 'Ounces', factor: 0.0283495 },
                                    'lb': { name: 'Pounds', factor: 0.453592 },
                                    'stone': { name: 'Stone', factor: 6.35029 },
                                    'ton': { name: 'Imperial Tons', factor: 1016.05 }
                                },
                                examples: [
                                    { value: 1000, from: 'g', to: 'kg', label: '1000 g' },
                                    { value: 1, from: 'lb', to: 'kg', label: '1 pound' },
                                    { value: 16, from: 'oz', to: 'lb', label: '16 oz' },
                                    { value: 2000, from: 'lb', to: 'ton', label: '2000 lb' }
                                ]
                            },
                            volume: {
                                name: 'Volume & Capacity',
                                units: {
                                    'ml': { name: 'Milliliters', factor: 0.001 },
                                    'l': { name: 'Liters', factor: 1 },
                                    'm3': { name: 'Cubic Meters', factor: 1000 },
                                    'tsp': { name: 'Teaspoons', factor: 0.00492892 },
                                    'tbsp': { name: 'Tablespoons', factor: 0.0147868 },
                                    'fl_oz': { name: 'Fluid Ounces', factor: 0.0295735 },
                                    'cup': { name: 'Cups', factor: 0.236588 },
                                    'pt': { name: 'Pints', factor: 0.473176 },
                                    'qt': { name: 'Quarts', factor: 0.946353 },
                                    'gal': { name: 'Gallons', factor: 3.78541 }
                                },
                                examples: [
                                    { value: 1000, from: 'ml', to: 'l', label: '1000 ml' },
                                    { value: 1, from: 'gal', to: 'l', label: '1 gallon' },
                                    { value: 16, from: 'fl_oz', to: 'pt', label: '16 fl oz' },
                                    { value: 4, from: 'cup', to: 'qt', label: '4 cups' }
                                ]
                            },
                            temperature: {
                                name: 'Temperature',
                                units: {
                                    'c': { name: 'Celsius' },
                                    'f': { name: 'Fahrenheit' },
                                    'k': { name: 'Kelvin' },
                                    'r': { name: 'Rankine' }
                                },
                                examples: [
                                    { value: 0, from: 'c', to: 'f', label: '0°C' },
                                    { value: 100, from: 'c', to: 'f', label: '100°C' },
                                    { value: 32, from: 'f', to: 'c', label: '32°F' },
                                    { value: 273.15, from: 'k', to: 'c', label: '273.15 K' }
                                ]
                            },
                            area: {
                                name: 'Area',
                                units: {
                                    'mm2': { name: 'Square Millimeters', factor: 0.000001 },
                                    'cm2': { name: 'Square Centimeters', factor: 0.0001 },
                                    'm2': { name: 'Square Meters', factor: 1 },
                                    'km2': { name: 'Square Kilometers', factor: 1000000 },
                                    'in2': { name: 'Square Inches', factor: 0.00064516 },
                                    'ft2': { name: 'Square Feet', factor: 0.092903 },
                                    'yd2': { name: 'Square Yards', factor: 0.836127 },
                                    'acre': { name: 'Acres', factor: 4046.86 },
                                    'hectare': { name: 'Hectares', factor: 10000 }
                                },
                                examples: [
                                    { value: 10000, from: 'cm2', to: 'm2', label: '10000 cm²' },
                                    { value: 1, from: 'acre', to: 'm2', label: '1 acre' },
                                    { value: 144, from: 'in2', to: 'ft2', label: '144 in²' },
                                    { value: 1, from: 'hectare', to: 'acre', label: '1 hectare' }
                                ]
                            },
                            speed: {
                                name: 'Speed & Velocity',
                                units: {
                                    'mps': { name: 'Meters per Second', factor: 1 },
                                    'kph': { name: 'Kilometers per Hour', factor: 0.277778 },
                                    'mph': { name: 'Miles per Hour', factor: 0.44704 },
                                    'fps': { name: 'Feet per Second', factor: 0.3048 },
                                    'knot': { name: 'Knots', factor: 0.514444 },
                                    'mach': { name: 'Mach', factor: 343 }
                                },
                                examples: [
                                    { value: 60, from: 'mph', to: 'kph', label: '60 mph' },
                                    { value: 100, from: 'kph', to: 'mph', label: '100 km/h' },
                                    { value: 10, from: 'mps', to: 'kph', label: '10 m/s' },
                                    { value: 500, from: 'knot', to: 'mph', label: '500 knots' }
                                ]
                            },
                            energy: {
                                name: 'Energy & Power',
                                units: {
                                    'j': { name: 'Joules', factor: 1 },
                                    'kj': { name: 'Kilojoules', factor: 1000 },
                                    'cal': { name: 'Calories', factor: 4.184 },
                                    'kcal': { name: 'Kilocalories', factor: 4184 },
                                    'btu': { name: 'BTU', factor: 1055.06 },
                                    'kwh': { name: 'Kilowatt Hours', factor: 3600000 },
                                    'w': { name: 'Watts', factor: 1 },
                                    'kw': { name: 'Kilowatts', factor: 1000 },
                                    'hp': { name: 'Horsepower', factor: 745.7 }
                                },
                                examples: [
                                    { value: 1000, from: 'j', to: 'kj', label: '1000 J' },
                                    { value: 1, from: 'kwh', to: 'j', label: '1 kWh' },
                                    { value: 1000, from: 'cal', to: 'kcal', label: '1000 cal' },
                                    { value: 1, from: 'hp', to: 'kw', label: '1 HP' }
                                ]
                            },
                            pressure: {
                                name: 'Pressure',
                                units: {
                                    'pa': { name: 'Pascals', factor: 1 },
                                    'kpa': { name: 'Kilopascals', factor: 1000 },
                                    'bar': { name: 'Bar', factor: 100000 },
                                    'atm': { name: 'Atmospheres', factor: 101325 },
                                    'psi': { name: 'PSI', factor: 6894.76 },
                                    'mmhg': { name: 'mmHg', factor: 133.322 },
                                    'inhg': { name: 'inHg', factor: 3386.39 }
                                },
                                examples: [
                                    { value: 1, from: 'atm', to: 'psi', label: '1 atm' },
                                    { value: 1, from: 'bar', to: 'psi', label: '1 bar' },
                                    { value: 760, from: 'mmhg', to: 'atm', label: '760 mmHg' },
                                    { value: 100, from: 'kpa', to: 'psi', label: '100 kPa' }
                                ]
                            },
                            time: {
                                name: 'Time',
                                units: {
                                    'ms': { name: 'Milliseconds', factor: 0.001 },
                                    's': { name: 'Seconds', factor: 1 },
                                    'min': { name: 'Minutes', factor: 60 },
                                    'hr': { name: 'Hours', factor: 3600 },
                                    'day': { name: 'Days', factor: 86400 },
                                    'week': { name: 'Weeks', factor: 604800 },
                                    'month': { name: 'Months', factor: 2629746 },
                                    'year': { name: 'Years', factor: 31556952 }
                                },
                                examples: [
                                    { value: 60, from: 's', to: 'min', label: '60 seconds' },
                                    { value: 24, from: 'hr', to: 'day', label: '24 hours' },
                                    { value: 7, from: 'day', to: 'week', label: '7 days' },
                                    { value: 1000, from: 'ms', to: 's', label: '1000 ms' }
                                ]
                            },
                            data: {
                                name: 'Data Storage',
                                units: {
                                    'bit': { name: 'Bits', factor: 1 },
                                    'byte': { name: 'Bytes', factor: 8 },
                                    'kb': { name: 'Kilobytes', factor: 8192 },
                                    'mb': { name: 'Megabytes', factor: 8388608 },
                                    'gb': { name: 'Gigabytes', factor: 8589934592 },
                                    'tb': { name: 'Terabytes', factor: 8796093022208 },
                                    'pb': { name: 'Petabytes', factor: 9007199254740992 }
                                },
                                examples: [
                                    { value: 8, from: 'bit', to: 'byte', label: '8 bits' },
                                    { value: 1024, from: 'kb', to: 'mb', label: '1024 KB' },
                                    { value: 1000, from: 'mb', to: 'gb', label: '1000 MB' },
                                    { value: 1, from: 'tb', to: 'gb', label: '1 TB' }
                                ]
                            }
                        };

                        let conversionHistoryData = [];

                        function formatNumber(num, decimals = 6) {
                            if (Math.abs(num) >= 1e12) {
                                return num.toExponential(3);
                            } else if (Math.abs(num) >= 1e9) {
                                return (num / 1e9).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'B';
                            } else if (Math.abs(num) >= 1e6) {
                                return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'M';
                            } else if (Math.abs(num) >= 1e3) {
                                return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'k';
                            } else if (Math.abs(num) < 0.000001 && num !== 0) {
                                return num.toExponential(3);
                            }
                            return num.toLocaleString(undefined, { 
                                maximumFractionDigits: decimals, 
                                minimumFractionDigits: 0 
                            });
                        }

                        function updateUnits() {
                            const category = conversionCategory.value;
                            const data = conversionData[category];
                            
                            // Clear existing options
                            fromUnit.innerHTML = '';
                            toUnit.innerHTML = '';
                            
                            // Populate unit options
                            Object.keys(data.units).forEach(unitKey => {
                                const unit = data.units[unitKey];
                                
                                const fromOption = document.createElement('option');
                                fromOption.value = unitKey;
                                fromOption.textContent = unit.name;
                                fromUnit.appendChild(fromOption);
                                
                                const toOption = document.createElement('option');
                                toOption.value = unitKey;
                                toOption.textContent = unit.name;
                                toUnit.appendChild(toOption);
                            });
                            
                            // Set default selections
                            const unitKeys = Object.keys(data.units);
                            if (unitKeys.length > 1) {
                                fromUnit.value = unitKeys[0];
                                toUnit.value = unitKeys[1];
                            }
                            
                            updateQuickExamples();
                            updateUnitReference();
                        }

                        function updateQuickExamples() {
                            const category = conversionCategory.value;
                            const data = conversionData[category];
                            
                            quickExamples.innerHTML = '';
                            
                            data.examples.forEach(example => {
                                const button = document.createElement('button');
                                button.type = 'button';
                                button.className = 'example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors';
                                button.textContent = example.label;
                                button.setAttribute('data-value', example.value);
                                button.setAttribute('data-from', example.from);
                                button.setAttribute('data-to', example.to);
                                
                                button.addEventListener('click', function() {
                                    inputValue.value = example.value;
                                    fromUnit.value = example.from;
                                    toUnit.value = example.to;
                                    calculate();
                                    
                                    // Update button styles
                                    document.querySelectorAll('.example-btn').forEach(btn => {
                                        btn.classList.remove('bg-purple-100', 'text-purple-700');
                                        btn.classList.add('bg-gray-100', 'text-gray-700');
                                    });
                                    button.classList.remove('bg-gray-100', 'text-gray-700');
                                    button.classList.add('bg-purple-100', 'text-purple-700');
                                });
                                
                                quickExamples.appendChild(button);
                            });
                        }

                        function updateUnitReference() {
                            const category = conversionCategory.value;
                            const data = conversionData[category];
                            
                            unitReference.innerHTML = '';
                            
                            Object.keys(data.units).slice(0, 8).forEach(unitKey => {
                                const unit = data.units[unitKey];
                                const div = document.createElement('div');
                                
                                if (category === 'temperature') {
                                    div.innerHTML = `<strong>${unit.name}</strong>`;
                                } else if (unit.factor) {
                                    div.innerHTML = `<strong>1 ${unit.name}</strong> = ${formatNumber(unit.factor, 6)} base units`;
                                } else {
                                    div.innerHTML = `<strong>${unit.name}</strong>`;
                                }
                                
                                unitReference.appendChild(div);
                            });
                        }

                        function convertTemperature(value, from, to) {
                            let celsius;
                            
                            // Convert to Celsius first
                            switch(from) {
                                case 'c': celsius = value; break;
                                case 'f': celsius = (value - 32) * 5/9; break;
                                case 'k': celsius = value - 273.15; break;
                                case 'r': celsius = (value - 491.67) * 5/9; break;
                            }
                            
                            // Convert from Celsius to target
                            switch(to) {
                                case 'c': return celsius;
                                case 'f': return celsius * 9/5 + 32;
                                case 'k': return celsius + 273.15;
                                case 'r': return celsius * 9/5 + 491.67;
                            }
                        }

                        function getConversionFormula(category, from, to, value) {
                            if (category === 'temperature') {
                                const formulas = {
                                    'c_f': `${value}°C × 9/5 + 32 = ${formatNumber(convertTemperature(value, 'c', 'f'), 2)}°F`,
                                    'f_c': `(${value}°F - 32) × 5/9 = ${formatNumber(convertTemperature(value, 'f', 'c'), 2)}°C`,
                                    'c_k': `${value}°C + 273.15 = ${formatNumber(convertTemperature(value, 'c', 'k'), 2)}K`,
                                    'k_c': `${value}K - 273.15 = ${formatNumber(convertTemperature(value, 'k', 'c'), 2)}°C`
                                };
                                return formulas[`${from}_${to}`] || `${value} ${from.toUpperCase()} = ${formatNumber(convertTemperature(value, from, to), 2)} ${to.toUpperCase()}`;
                            } else {
                                const data = conversionData[category];
                                const fromFactor = data.units[from].factor;
                                const toFactor = data.units[to].factor;
                                const result = value * fromFactor / toFactor;
                                return `${value} × ${formatNumber(fromFactor / toFactor, 6)} = ${formatNumber(result, 6)}`;
                            }
                        }

                        function calculate() {
                            const category = conversionCategory.value;
                            const value = parseFloat(inputValue.value);
                            const from = fromUnit.value;
                            const to = toUnit.value;
                            
                            if (!isNaN(value)) {
                                let result;
                                
                                if (category === 'temperature') {
                                    result = convertTemperature(value, from, to);
                                } else {
                                    const data = conversionData[category];
                                    const fromFactor = data.units[from].factor;
                                    const toFactor = data.units[to].factor;
                                    result = value * fromFactor / toFactor;
                                }
                                
                                // Update primary output
                                const fromUnitName = conversionData[category].units[from].name;
                                const toUnitName = conversionData[category].units[to].name;
                                
                                output.textContent = formatNumber(result);
                                resultTitle.textContent = `${fromUnitName} to ${toUnitName}`;
                                resultDescription.textContent = `${value} ${fromUnitName} = ${formatNumber(result)} ${toUnitName}`;
                                
                                // Update formula
                                formulaDisplay.textContent = getConversionFormula(category, from, to, value);
                                
                                // Update multiple conversions
                                updateMultipleConversions(category, value, from);
                                
                                // Add to history
                                addToHistory(value, fromUnitName, result, toUnitName);
                                
                            } else {
                                clearOutputs();
                            }
                        }

                        function updateMultipleConversions(category, value, from) {
                            const data = conversionData[category];
                            multipleConversions.innerHTML = '';
                            
                            let count = 0;
                            Object.keys(data.units).forEach(unitKey => {
                                if (unitKey !== from && count < 6) {
                                    let result;
                                    
                                    if (category === 'temperature') {
                                        result = convertTemperature(value, from, unitKey);
                                    } else {
                                        const fromFactor = data.units[from].factor;
                                        const toFactor = data.units[unitKey].factor;
                                        result = value * fromFactor / toFactor;
                                    }
                                    
                                    const div = document.createElement('div');
                                    div.className = 'p-3 bg-gradient-to-r from-gray-50 to-slate-50 rounded-lg border-l-4 border-gray-400';
                                    div.innerHTML = `
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">${data.units[unitKey].name}</h5>
                                            <div class="text-lg font-bold text-gray-600 font-mono">${formatNumber(result)}</div>
                                        </div>
                                    `;
                                    
                                    multipleConversions.appendChild(div);
                                    count++;
                                }
                            });
                        }

                        function addToHistory(fromValue, fromUnit, toValue, toUnit) {
                            const conversion = `${fromValue} ${fromUnit} = ${formatNumber(toValue)} ${toUnit}`;
                            conversionHistoryData.unshift(conversion);
                            
                            if (conversionHistoryData.length > 5) {
                                conversionHistoryData = conversionHistoryData.slice(0, 5);
                            }
                            
                            updateHistoryDisplay();
                        }

                        function updateHistoryDisplay() {
                            conversionHistory.innerHTML = '';
                            
                            if (conversionHistoryData.length === 0) {
                                conversionHistory.innerHTML = '<div class="text-sm text-green-700 text-center">No conversions yet</div>';
                            } else {
                                conversionHistoryData.forEach(conversion => {
                                    const div = document.createElement('div');
                                    div.className = 'text-sm text-green-700 text-center font-mono';
                                    div.textContent = conversion;
                                    conversionHistory.appendChild(div);
                                });
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            resultTitle.textContent = 'Converted Value';
                            resultDescription.textContent = 'Conversion result';
                            formulaDisplay.textContent = 'Enter values to see conversion formula';
                            multipleConversions.innerHTML = '';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            conversionCategory.value = 'length';
                            updateUnits();
                            clearOutputs();
                            inputValue.focus();
                        }

                        function swapUnits() {
                            const fromValue = fromUnit.value;
                            const toValue = toUnit.value;
                            
                            fromUnit.value = toValue;
                            toUnit.value = fromValue;
                            
                            calculate();
                        }

                        // Event listeners
                        conversionCategory.addEventListener('change', function() {
                            updateUnits();
                            calculate();
                        });
                        
                        inputValue.addEventListener('input', calculate);
                        fromUnit.addEventListener('change', calculate);
                        toUnit.addEventListener('change', calculate);
                        swapButton.addEventListener('click', swapUnits);
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

                        // Initialize
                        updateUnits();
                        inputValue.focus();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearAll();
                            } else if (e.key === 'Tab' && e.ctrlKey) {
                                e.preventDefault();
                                swapUnits();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
