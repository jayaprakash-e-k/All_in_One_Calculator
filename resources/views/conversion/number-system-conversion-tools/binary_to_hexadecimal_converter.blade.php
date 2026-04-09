<x-tool-page-layout
    title="Binary to Hexadecimal Converter - ConvertPro"
    description="Professional binary to hexadecimal converter for programming and web development. Convert binary numbers directly to hex format with detailed conversion steps."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Binary to Hex Direct Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Conversion Mode -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Conversion Mode
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-green-300 transition-colors cursor-pointer bg-green-50 border-green-300">
                                                <input type="radio" name="mode" value="binary-to-hex" class="text-green-600 focus:ring-green-500" checked>
                                                <span class="text-sm font-medium">Binary → Hexadecimal</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-green-300 transition-colors cursor-pointer">
                                                <input type="radio" name="mode" value="hex-to-binary" class="text-green-600 focus:ring-green-500">
                                                <span class="text-sm font-medium">Hexadecimal → Binary</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                            Enter Binary Number
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="text" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter binary (e.g., 11010110)"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">Binary</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500" id="inputHelp">Enter a binary number (only 0s and 1s)</p>
                                    </div>

                                    <!-- Hex Format Options -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Hexadecimal Format Options
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-green-300 transition-colors cursor-pointer">
                                                <input type="checkbox" name="showPrefix" class="text-green-600 focus:ring-green-500" checked>
                                                <span class="text-sm font-medium">Show 0x prefix</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-green-300 transition-colors cursor-pointer">
                                                <input type="checkbox" name="uppercase" class="text-green-600 focus:ring-green-500" checked>
                                                <span class="text-sm font-medium">Uppercase letters</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Grouping Options -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Binary Grouping
                                        </label>
                                        <div class="grid grid-cols-3 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-green-300 transition-colors cursor-pointer">
                                                <input type="radio" name="grouping" value="4" class="text-green-600 focus:ring-green-500" checked>
                                                <span class="text-sm font-medium">4-bit groups</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-green-300 transition-colors cursor-pointer">
                                                <input type="radio" name="grouping" value="8" class="text-green-600 focus:ring-green-500">
                                                <span class="text-sm font-medium">8-bit groups</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-green-300 transition-colors cursor-pointer">
                                                <input type="radio" name="grouping" value="none" class="text-green-600 focus:ring-green-500">
                                                <span class="text-sm font-medium">No grouping</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Quick Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Binary Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="hex-example px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors font-mono" data-value="1111" data-context="F hex">1111</button>
                                            <button type="button" class="hex-example px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors font-mono" data-value="11111111" data-context="FF hex">11111111</button>
                                            <button type="button" class="hex-example px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors font-mono" data-value="101010" data-context="2A hex">101010</button>
                                            <button type="button" class="hex-example px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors font-mono" data-value="11010110" data-context="D6 hex">11010110</button>
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Hexadecimal Value</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-green-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-green-600 hover:text-green-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Number System Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Binary -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Binary (Base 2)</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="binaryDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0s and 1s</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Hexadecimal -->
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Hexadecimal (Base 16)</h4>
                                                <div class="text-lg font-bold text-green-600 font-mono" id="hexDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0-9, A-F</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Number Systems -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Decimal -->
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Decimal (Base 10)</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="decimalDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0-9</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Octal -->
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Octal (Base 8)</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="octalDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0-7</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Conversion Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Binary to Hex Conversion Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div>0000 = 0</div>
                                        <div>0001 = 1</div>
                                        <div>0010 = 2</div>
                                        <div>0011 = 3</div>
                                        <div>0100 = 4</div>
                                        <div>0101 = 5</div>
                                        <div>0110 = 6</div>
                                        <div>0111 = 7</div>
                                        <div>1000 = 8</div>
                                        <div>1001 = 9</div>
                                        <div>1010 = A</div>
                                        <div>1011 = B</div>
                                        <div>1100 = C</div>
                                        <div>1101 = D</div>
                                        <div>1110 = E</div>
                                        <div>1111 = F</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Binary to Hexadecimal Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Programming Applications</h4>
                                    <p>Binary to hexadecimal conversion is essential in programming, especially for memory addresses, color codes, and low-level system programming. Hex provides a compact way to represent binary data, making it easier to read and debug.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Web Development</h4>
                                    <p>Critical for CSS color codes, character encoding, and JavaScript programming. Hex colors (#FF0000 for red) are direct hex representations of RGB binary values, making this conversion fundamental for web designers and developers.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-green-50 rounded-lg border border-green-200">
                                <p class="text-sm text-green-800">
                                    <strong>Conversion Tip:</strong> Group binary digits into sets of 4 from right to left. Each 4-bit group converts directly to one hex digit!
                                </p>
                            </div>
                        </div>

                        <!-- Programming Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Programming & Web Development Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Color Codes</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-green-600 cursor-pointer hover:text-green-800 font-mono" data-example="111111110000000000000000">RGB Red: FF0000</div>
                                        <div class="text-xs text-gray-600 mt-1">Binary: 11111111 00000000 00000000</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-green-600 cursor-pointer hover:text-green-800 font-mono" data-example="000000001111111100000000">RGB Green: 00FF00</div>
                                        <div class="text-xs text-gray-600 mt-1">Binary: 00000000 11111111 00000000</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">System Programming</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-green-600 cursor-pointer hover:text-green-800 font-mono" data-example="11111111">0xFF</div>
                                        <div class="text-xs text-gray-600 mt-1">Maximum 8-bit value (255)</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-green-600 cursor-pointer hover:text-green-800 font-mono" data-example="10101010">0xAA</div>
                                        <div class="text-xs text-gray-600 mt-1">Alternating bit pattern</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputValue = document.getElementById('inputValue');
                        const modeRadios = document.getElementsByName('mode');
                        const groupingRadios = document.getElementsByName('grouping');
                        const showPrefix = document.getElementsByName('showPrefix')[0];
                        const uppercase = document.getElementsByName('uppercase')[0];
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const binaryDisplay = document.getElementById('binaryDisplay');
                        const hexDisplay = document.getElementById('hexDisplay');
                        const decimalDisplay = document.getElementById('decimalDisplay');
                        const octalDisplay = document.getElementById('octalDisplay');
                        const conversionProcess = document.getElementById('conversionProcess');
                        const groupBreakdown = document.getElementById('groupBreakdown');
                        const binaryGroups = document.getElementById('binaryGroups');
                        const hexCharacters = document.getElementById('hexCharacters');
                        const standardHex = document.getElementById('standardHex');
                        const prefixedHex = document.getElementById('prefixedHex');
                        const htmlHex = document.getElementById('htmlHex');
                        const copyResult = document.getElementById('copyResult');

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getGrouping() {
                            return document.querySelector('input[name="grouping"]:checked').value;
                        }

                        function isValidBinary(str) {
                            return /^[01]+$/.test(str.replace(/\s/g, ''));
                        }

                        function isValidHex(str) {
                            return /^[0-9A-Fa-f]+$/.test(str.replace(/0x/i, '').replace(/\s/g, ''));
                        }

                        function padBinary(binary, multiple = 4) {
                            const remainder = binary.length % multiple;
                            if (remainder === 0) return binary;
                            return '0'.repeat(multiple - remainder) + binary;
                        }

                        function groupBinary(binary, groupSize) {
                            if (groupSize === 'none') return binary;
                            const size = parseInt(groupSize);
                            const paddedBinary = padBinary(binary, size);
                            return paddedBinary.replace(new RegExp(`(.{${size}})`, 'g'), '$1 ').trim();
                        }

                        function binaryToHex(binary) {
                            const paddedBinary = padBinary(binary, 4);
                            let hex = '';
                            
                            for (let i = 0; i < paddedBinary.length; i += 4) {
                                const fourBits = paddedBinary.substr(i, 4);
                                const decimalValue = parseInt(fourBits, 2);
                                hex += decimalValue.toString(16);
                            }
                            
                            return hex;
                        }

                        function hexToBinary(hex) {
                            let binary = '';
                            for (let i = 0; i < hex.length; i++) {
                                const decimalValue = parseInt(hex[i], 16);
                                binary += decimalValue.toString(2).padStart(4, '0');
                            }
                            return binary;
                        }

                        function getConversionProcess(binary) {
                            const paddedBinary = padBinary(binary, 4);
                            const groups = [];
                            
                            for (let i = 0; i < paddedBinary.length; i += 4) {
                                const fourBits = paddedBinary.substr(i, 4);
                                const decimalValue = parseInt(fourBits, 2);
                                const hexDigit = decimalValue.toString(16).toUpperCase();
                                groups.push(`${fourBits} = ${decimalValue} = ${hexDigit}`);
                            }
                            
                            return groups.join(' | ');
                        }

                        function get4BitBreakdown(binary) {
                            const paddedBinary = padBinary(binary, 4);
                            const breakdown = [];
                            
                            for (let i = 0; i < paddedBinary.length; i += 4) {
                                const fourBits = paddedBinary.substr(i, 4);
                                const decimalValue = parseInt(fourBits, 2);
                                const hexDigit = decimalValue.toString(16).toUpperCase();
                                breakdown.push(`${fourBits} → ${hexDigit}`);
                            }
                            
                            return breakdown.join('<br>');
                        }

                        function formatHex(hex, usePrefix, useUppercase) {
                            let formatted = useUppercase ? hex.toUpperCase() : hex.toLowerCase();
                            return usePrefix ? '0x' + formatted : formatted;
                        }

                        function updateInterface() {
                            const mode = getMode();
                            
                            if (mode === 'binary-to-hex') {
                                inputLabel.textContent = 'Enter Binary Number';
                                inputUnit.textContent = 'Binary';
                                inputHelp.textContent = 'Enter a binary number (only 0s and 1s)';
                                resultTitle.textContent = 'Hexadecimal Value';
                                resultDescription.textContent = 'Converted to hexadecimal';
                                inputValue.placeholder = 'Enter binary (e.g., 11010110)';
                            } else {
                                inputLabel.textContent = 'Enter Hexadecimal Number';
                                inputUnit.textContent = 'Hex';
                                inputHelp.textContent = 'Enter a hex number (0-9, A-F)';
                                resultTitle.textContent = 'Binary Value';
                                resultDescription.textContent = 'Converted to binary';
                                inputValue.placeholder = 'Enter hex (e.g., D6)';
                            }
                        }

                        function convert() {
                            const inputVal = inputValue.value.trim().replace(/\s/g, '');
                            const mode = getMode();
                            const grouping = getGrouping();

                            if (!inputVal) {
                                clearOutputs();
                                return;
                            }

                            let binary = '';
                            let hex = '';
                            let decimal = 0;
                            let isValid = false;

                            if (mode === 'binary-to-hex') {
                                if (isValidBinary(inputVal)) {
                                    binary = inputVal;
                                    hex = binaryToHex(binary);
                                    decimal = parseInt(binary, 2);
                                    isValid = true;
                                }
                            } else {
                                const cleanHex = inputVal.replace(/0x/i, '');
                                if (isValidHex(cleanHex)) {
                                    hex = cleanHex;
                                    binary = hexToBinary(hex);
                                    decimal = parseInt(hex, 16);
                                    isValid = true;
                                }
                            }

                            if (isValid) {
                                // Format hex based on options
                                const formattedHex = formatHex(hex, showPrefix.checked, uppercase.checked);
                                
                                // Update primary output
                                output.textContent = mode === 'binary-to-hex' ? formattedHex : groupBinary(binary, grouping);

                                // Update all displays
                                binaryDisplay.textContent = groupBinary(binary, grouping);
                                hexDisplay.textContent = formattedHex;
                                decimalDisplay.textContent = decimal.toString();
                                octalDisplay.textContent = decimal.toString(8);

                                // Conversion process and breakdown
                                if (mode === 'binary-to-hex') {
                                    conversionProcess.textContent = getConversionProcess(binary);
                                    groupBreakdown.innerHTML = get4BitBreakdown(binary);
                                    
                                    // Group mapping
                                    const paddedBinary = padBinary(binary, 4);
                                    const groups = [];
                                    const chars = [];
                                    
                                    for (let i = 0; i < paddedBinary.length; i += 4) {
                                        const fourBits = paddedBinary.substr(i, 4);
                                        const hexDigit = parseInt(fourBits, 2).toString(16).toUpperCase();
                                        groups.push(fourBits);
                                        chars.push(hexDigit);
                                    }
                                    
                                    binaryGroups.textContent = groups.join(' ');
                                    hexCharacters.textContent = chars.join(' ');
                                } else {
                                    // Reverse process for hex to binary
                                    const reverseProcess = [];
                                    for (let i = 0; i < hex.length; i++) {
                                        const hexDigit = hex[i];
                                        const decVal = parseInt(hexDigit, 16);
                                        const binVal = decVal.toString(2).padStart(4, '0');
                                        reverseProcess.push(`${hexDigit} = ${decVal} = ${binVal}`);
                                    }
                                    conversionProcess.textContent = reverseProcess.join(' | ');
                                    
                                    const breakdown = [];
                                    for (let i = 0; i < hex.length; i++) {
                                        const hexDigit = hex[i];
                                        const binVal = parseInt(hexDigit, 16).toString(2).padStart(4, '0');
                                        breakdown.push(`${hexDigit} → ${binVal}`);
                                    }
                                    groupBreakdown.innerHTML = breakdown.join('<br>');
                                    
                                    binaryGroups.textContent = hexToBinary(hex).replace(/(.{4})/g, '$1 ').trim();
                                    hexCharacters.textContent = hex.split('').join(' ');
                                }

                                // Format variations
                                standardHex.textContent = uppercase.checked ? hex.toUpperCase() : hex.toLowerCase();
                                prefixedHex.textContent = '0x' + (uppercase.checked ? hex.toUpperCase() : hex.toLowerCase());
                                htmlHex.textContent = '#' + (uppercase.checked ? hex.toUpperCase() : hex.toLowerCase()).padStart(6, '0');

                            } else {
                                clearOutputs();
                                
                                // Show error styling
                                inputValue.classList.add('border-red-500');
                                setTimeout(() => {
                                    inputValue.classList.remove('border-red-500');
                                }, 2000);
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            binaryDisplay.textContent = '--';
                            hexDisplay.textContent = '--';
                            decimalDisplay.textContent = '--';
                            octalDisplay.textContent = '--';
                            conversionProcess.textContent = '--';
                            groupBreakdown.textContent = '--';
                            binaryGroups.textContent = '--';
                            hexCharacters.textContent = '--';
                            standardHex.textContent = '--';
                            prefixedHex.textContent = '--';
                            htmlHex.textContent = '--';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        
                        modeRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateInterface();
                                clearAll();
                            });
                        });

                        groupingRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

                        showPrefix.addEventListener('change', convert);
                        uppercase.addEventListener('change', convert);

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
                        const hexExamples = document.querySelectorAll('.hex-example');
                        hexExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                
                                // Set to binary-to-hex mode
                                document.querySelector('input[value="binary-to-hex"]').checked = true;
                                updateInterface();
                                
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                hexExamples.forEach(btn => btn.classList.remove('bg-green-100', 'text-green-700'));
                                hexExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-green-100', 'text-green-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                
                                // Set to binary-to-hex mode
                                document.querySelector('input[value="binary-to-hex"]').checked = true;
                                updateInterface();
                                
                                inputValue.value = value;
                                convert();
                                inputValue.focus();
                            });
                        });

                        // Initialize
                        updateInterface();
                        inputValue.focus();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearAll();
                            } else if (e.ctrlKey && e.key === 'm') {
                                e.preventDefault();
                                const currentMode = getMode();
                                const newMode = currentMode === 'binary-to-hex' ? 'hex-to-binary' : 'binary-to-hex';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                clearAll();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
