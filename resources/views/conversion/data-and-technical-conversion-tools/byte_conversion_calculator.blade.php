<x-tool-page-layout
    title="Byte Conversion Calculator - ConvertPro"
    description="Professional byte conversion calculator for digital storage units. Convert between bytes, kilobytes, megabytes, gigabytes, terabytes, and more with detailed calculations."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-teal-500 to-teal-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Digital Storage Unit Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                            Enter Storage Size
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter size (e.g., 1024)"
                                                step="any"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">Size</span>
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
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="byte">Byte (B)</option>
                                            <option value="kilobyte" selected>Kilobyte (KB)</option>
                                            <option value="megabyte">Megabyte (MB)</option>
                                            <option value="gigabyte">Gigabyte (GB)</option>
                                            <option value="terabyte">Terabyte (TB)</option>
                                            <option value="petabyte">Petabyte (PB)</option>
                                            <option value="exabyte">Exabyte (EB)</option>
                                            <option value="zettabyte">Zettabyte (ZB)</option>
                                            <option value="yottabyte">Yottabyte (YB)</option>
                                        </select>
                                    </div>

                                    <!-- To Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            To Unit (Target)
                                        </label>
                                        <select 
                                            id="toUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="byte">Byte (B)</option>
                                            <option value="kilobyte">Kilobyte (KB)</option>
                                            <option value="megabyte" selected>Megabyte (MB)</option>
                                            <option value="gigabyte">Gigabyte (GB)</option>
                                            <option value="terabyte">Terabyte (TB)</option>
                                            <option value="petabyte">Petabyte (PB)</option>
                                            <option value="exabyte">Exabyte (EB)</option>
                                            <option value="zettabyte">Zettabyte (ZB)</option>
                                            <option value="yottabyte">Yottabyte (YB)</option>
                                        </select>
                                    </div>

                                    <!-- Binary vs Decimal -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Calculation Standard
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer bg-teal-50 border-teal-300">
                                                <input type="radio" name="standard" value="binary" class="text-teal-600 focus:ring-teal-500" checked>
                                                <span class="text-sm font-medium">Binary (1024)</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                                <input type="radio" name="standard" value="decimal" class="text-teal-600 focus:ring-teal-500">
                                                <span class="text-sm font-medium">Decimal (1000)</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Quick Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="byte-example px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-value="1024" data-from="kilobyte" data-to="megabyte">1024 KB</button>
                                            <button type="button" class="byte-example px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-value="2048" data-from="megabyte" data-to="gigabyte">2048 MB</button>
                                            <button type="button" class="byte-example px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-value="500" data-from="gigabyte" data-to="megabyte">500 GB</button>
                                            <button type="button" class="byte-example px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-value="1" data-from="terabyte" data-to="gigabyte">1 TB</button>
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl border-l-4 border-teal-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">Converted Value</h4>
                                                <p class="text-sm text-gray-600" id="conversionDescription">Primary conversion result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-teal-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-teal-600 hover:text-teal-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- All Unit Conversions -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Bytes -->
                                        <div class="p-4 bg-gradient-to-r from-gray-50 to-slate-50 rounded-lg border-l-4 border-gray-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Bytes (B)</h4>
                                                <div class="text-lg font-bold text-gray-600 font-mono" id="bytesDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">Base unit</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Kilobytes -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Kilobytes (KB)</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="kilobytesDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">1024 B</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Medium Units -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Megabytes -->
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Megabytes (MB)</h4>
                                                <div class="text-lg font-bold text-green-600 font-mono" id="megabytesDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">1024 KB</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Gigabytes -->
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Gigabytes (GB)</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="gigabytesDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">1024 MB</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Large Units -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Terabytes -->
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Terabytes (TB)</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="terabytesDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">1024 GB</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Petabytes -->
                                        <div class="p-4 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Petabytes (PB)</h4>
                                                <div class="text-lg font-bold text-pink-600 font-mono" id="petabytesDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">1024 TB</div>
                                            </div>
                                        </div>
                                    </div>



                                <!-- Storage Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Storage Unit Reference</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div><strong>Binary:</strong> 1 KB = 1,024 B</div>
                                        <div><strong>Decimal:</strong> 1 KB = 1,000 B</div>
                                        <div>1 MB = 1,024 KB (Binary)</div>
                                        <div>1 MB = 1,000 KB (Decimal)</div>
                                        <div>1 GB = 1,024 MB (Binary)</div>
                                        <div>1 GB = 1,000 MB (Decimal)</div>
                                        <div>1 TB = 1,024 GB (Binary)</div>
                                        <div>1 TB = 1,000 GB (Decimal)</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Byte Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Binary vs Decimal Standards</h4>
                                    <p>Binary (1024-based) is used by operating systems and computer memory, while decimal (1000-based) is often used by storage manufacturers. This difference explains why a "1TB" drive shows as ~931GB in your system.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Real-World Applications</h4>
                                    <p>Understanding byte conversions is essential for managing storage space, calculating bandwidth requirements, sizing databases, and comparing storage devices across different systems and manufacturers.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-teal-50 rounded-lg border border-teal-200">
                                <p class="text-sm text-teal-800">
                                    <strong>Pro Tip:</strong> Use binary (1024) for system-level calculations and decimal (1000) when matching manufacturer specifications!
                                </p>
                            </div>
                        </div>

                        <!-- Storage Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Storage Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">File Sizes</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-example="5" data-from="megabyte" data-to="kilobyte">MP3 Song: ~5 MB</div>
                                        <div class="text-xs text-gray-600 mt-1">Typical music file size</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-example="700" data-from="megabyte" data-to="gigabyte">CD Image: ~700 MB</div>
                                        <div class="text-xs text-gray-600 mt-1">Standard CD capacity</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Storage Devices</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-example="16" data-from="gigabyte" data-to="megabyte">USB Flash: 16 GB</div>
                                        <div class="text-xs text-gray-600 mt-1">Common USB drive size</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-example="2" data-from="terabyte" data-to="gigabyte">External HDD: 2 TB</div>
                                        <div class="text-xs text-gray-600 mt-1">Popular external drive size</div>
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
                        const standardRadios = document.getElementsByName('standard');
                        const clearButton = document.getElementById('clearButton');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const conversionDescription = document.getElementById('conversionDescription');
                        const bytesDisplay = document.getElementById('bytesDisplay');
                        const kilobytesDisplay = document.getElementById('kilobytesDisplay');
                        const megabytesDisplay = document.getElementById('megabytesDisplay');
                        const gigabytesDisplay = document.getElementById('gigabytesDisplay');
                        const terabytesDisplay = document.getElementById('terabytesDisplay');
                        const petabytesDisplay = document.getElementById('petabytesDisplay');
                        const standardUsed = document.getElementById('standardUsed');
                        const conversionFactor = document.getElementById('conversionFactor');
                        const conversionFormula = document.getElementById('conversionFormula');
                        const sizeContext = document.getElementById('sizeContext');
                        const binaryResult = document.getElementById('binaryResult');
                        const decimalResult = document.getElementById('decimalResult');
                        const copyResult = document.getElementById('copyResult');

                        // Unit multipliers (in bytes)
                        const unitMultipliers = {
                            binary: {
                                byte: 1,
                                kilobyte: 1024,
                                megabyte: 1024 * 1024,
                                gigabyte: 1024 * 1024 * 1024,
                                terabyte: 1024 * 1024 * 1024 * 1024,
                                petabyte: 1024 * 1024 * 1024 * 1024 * 1024,
                                exabyte: 1024 * 1024 * 1024 * 1024 * 1024 * 1024,
                                zettabyte: 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024,
                                yottabyte: 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024
                            },
                            decimal: {
                                byte: 1,
                                kilobyte: 1000,
                                megabyte: 1000 * 1000,
                                gigabyte: 1000 * 1000 * 1000,
                                terabyte: 1000 * 1000 * 1000 * 1000,
                                petabyte: 1000 * 1000 * 1000 * 1000 * 1000,
                                exabyte: 1000 * 1000 * 1000 * 1000 * 1000 * 1000,
                                zettabyte: 1000 * 1000 * 1000 * 1000 * 1000 * 1000 * 1000,
                                yottabyte: 1000 * 1000 * 1000 * 1000 * 1000 * 1000 * 1000 * 1000
                            }
                        };

                        const unitLabels = {
                            byte: 'B',
                            kilobyte: 'KB',
                            megabyte: 'MB',
                            gigabyte: 'GB',
                            terabyte: 'TB',
                            petabyte: 'PB',
                            exabyte: 'EB',
                            zettabyte: 'ZB',
                            yottabyte: 'YB'
                        };

                        function getStandard() {
                            return document.querySelector('input[name="standard"]:checked').value;
                        }

                        function formatNumber(num) {
                            if (num >= 1e12) {
                                return num.toExponential(3);
                            } else if (num >= 1e9) {
                                return (num / 1e9).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'B';
                            } else if (num >= 1e6) {
                                return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'M';
                            } else if (num >= 1e3) {
                                return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'K';
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 6 });
                            }
                        }

                        function getSizeContext(bytes) {
                            if (bytes >= 1e15) {
                                return 'Enterprise data center scale - massive cloud storage';
                            } else if (bytes >= 1e12) {
                                return 'Large enterprise database or data warehouse scale';
                            } else if (bytes >= 1e9) {
                                return 'High-definition movie or large application size';
                            } else if (bytes >= 1e6) {
                                return 'Digital photo or small application size';
                            } else if (bytes >= 1e3) {
                                return 'Document or small image file size';
                            } else {
                                return 'Small text file or configuration data size';
                            }
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const from = fromUnit.value;
                            const to = toUnit.value;
                            const standard = getStandard();

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                // Convert input to bytes first
                                const inputInBytes = inputVal * unitMultipliers[standard][from];
                                
                                // Convert bytes to target unit
                                const result = inputInBytes / unitMultipliers[standard][to];
                                
                                // Update primary output
                                output.textContent = formatNumber(result);
                                conversionDescription.textContent = `${inputVal} ${unitLabels[from]} = ${formatNumber(result)} ${unitLabels[to]})`;

                                // Convert to all units and display
                                const bytes = inputInBytes;
                                bytesDisplay.textContent = formatNumber(bytes);
                                kilobytesDisplay.textContent = formatNumber(bytes / unitMultipliers[standard].kilobyte);
                                megabytesDisplay.textContent = formatNumber(bytes / unitMultipliers[standard].megabyte);
                                gigabytesDisplay.textContent = formatNumber(bytes / unitMultipliers[standard].gigabyte);
                                terabytesDisplay.textContent = formatNumber(bytes / unitMultipliers[standard].terabyte);
                                petabytesDisplay.textContent = formatNumber(bytes / unitMultipliers[standard].petabyte);

                                // Calculation details
                                standardUsed.textContent = standard === 'binary' ? 'Binary (1024)' : 'Decimal (1000)';
                                const factor = unitMultipliers[standard][to] / unitMultipliers[standard][from];
                                conversionFactor.textContent = factor >= 1 ? `×${formatNumber(factor)}` : `÷${formatNumber(1/factor)}`;
                                conversionFormula.textContent = factor >= 1 ? `×${factor}` : `÷${1/factor}`;

                                // Size context
                                sizeContext.textContent = getSizeContext(bytes);

                                // Binary vs Decimal comparison
                                const binaryBytes = inputVal * unitMultipliers.binary[from];
                                const decimalBytes = inputVal * unitMultipliers.decimal[from];
                                binaryResult.textContent = `${formatNumber(binaryBytes / unitMultipliers.binary[to])} ${unitLabels[to]}`;
                                decimalResult.textContent = `${formatNumber(decimalBytes / unitMultipliers.decimal[to])} ${unitLabels[to]}`;

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            conversionDescription.textContent = 'Primary conversion result';
                            bytesDisplay.textContent = '--';
                            kilobytesDisplay.textContent = '--';
                            megabytesDisplay.textContent = '--';
                            gigabytesDisplay.textContent = '--';
                            terabytesDisplay.textContent = '--';
                            petabytesDisplay.textContent = '--';
                            standardUsed.textContent = 'Binary (1024)';
                            conversionFactor.textContent = '--';
                            conversionFormula.textContent = '--';
                            sizeContext.textContent = '--';
                            binaryResult.textContent = '--';
                            decimalResult.textContent = '--';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            fromUnit.value = 'kilobyte';
                            toUnit.value = 'megabyte';
                            document.querySelector('input[value="binary"]').checked = true;
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        fromUnit.addEventListener('change', convert);
                        toUnit.addEventListener('change', convert);
                        
                        standardRadios.forEach(radio => {
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
                        const byteExamples = document.querySelectorAll('.byte-example');
                        byteExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const from = this.getAttribute('data-from');
                                const to = this.getAttribute('data-to');
                                
                                inputValue.value = value;
                                fromUnit.value = from;
                                toUnit.value = to;
                                convert();
                                
                                // Update button styles
                                byteExamples.forEach(btn => btn.classList.remove('bg-teal-100', 'text-teal-700'));
                                byteExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-teal-100', 'text-teal-700');
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
