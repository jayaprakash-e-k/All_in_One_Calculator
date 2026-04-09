<x-tool-page-layout
    title="Decimal to Hexadecimal Converter - ConvertPro"
    description="Professional decimal to hexadecimal converter for programming and web development. Convert decimal numbers to hex format with detailed conversion steps."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Decimal to Hex Converter</h2>
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
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-red-300 transition-colors cursor-pointer bg-red-50 border-red-300">
                                                <input type="radio" name="mode" value="decimal-to-hex" class="text-red-600 focus:ring-red-500" checked>
                                                <span class="text-sm font-medium">Decimal → Hexadecimal</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-red-300 transition-colors cursor-pointer">
                                                <input type="radio" name="mode" value="hex-to-decimal" class="text-red-600 focus:ring-red-500">
                                                <span class="text-sm font-medium">Hexadecimal → Decimal</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                            Enter Decimal Number
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="text" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter decimal (e.g., 255)"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">Decimal</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500" id="inputHelp">Enter a decimal number (0-9 digits)</p>
                                    </div>

                                    <!-- Hex Format Options -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Hexadecimal Format Options
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-red-300 transition-colors cursor-pointer">
                                                <input type="checkbox" name="showPrefix" class="text-red-600 focus:ring-red-500" checked>
                                                <span class="text-sm font-medium">Show 0x prefix</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-red-300 transition-colors cursor-pointer">
                                                <input type="checkbox" name="uppercase" class="text-red-600 focus:ring-red-500" checked>
                                                <span class="text-sm font-medium">Uppercase letters</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Number Range -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Number Range Context
                                        </label>
                                        <div class="grid grid-cols-3 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-red-300 transition-colors cursor-pointer">
                                                <input type="radio" name="range" value="8bit" class="text-red-600 focus:ring-red-500">
                                                <span class="text-sm font-medium">8-bit (0-255)</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-red-300 transition-colors cursor-pointer">
                                                <input type="radio" name="range" value="16bit" class="text-red-600 focus:ring-red-500">
                                                <span class="text-sm font-medium">16-bit (0-65535)</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-red-300 transition-colors cursor-pointer">
                                                <input type="radio" name="range" value="unlimited" class="text-red-600 focus:ring-red-500" checked>
                                                <span class="text-sm font-medium">Unlimited</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Quick Decimal Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Decimal Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="decimal-example px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors font-mono" data-value="255" data-context="FF hex">255</button>
                                            <button type="button" class="decimal-example px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors font-mono" data-value="16" data-context="10 hex">16</button>
                                            <button type="button" class="decimal-example px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors font-mono" data-value="256" data-context="100 hex">256</button>
                                            <button type="button" class="decimal-example px-3 py-2 text-sm bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-lg transition-colors font-mono" data-value="1024" data-context="400 hex">1024</button>
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-red-50 to-rose-50 rounded-xl border-l-4 border-red-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Hexadecimal Value</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-red-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-red-600 hover:text-red-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Number System Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Decimal -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Decimal (Base 10)</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="decimalDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0-9</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Hexadecimal -->
                                        <div class="p-4 bg-gradient-to-r from-red-50 to-rose-50 rounded-lg border-l-4 border-red-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Hexadecimal (Base 16)</h4>
                                                <div class="text-lg font-bold text-red-600 font-mono" id="hexDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0-9, A-F</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Number Systems -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Binary -->
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Binary (Base 2)</h4>
                                                <div class="text-lg font-bold text-green-600 font-mono" id="binaryDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0s and 1s</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Octal -->
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Octal (Base 8)</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="octalDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0-7</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Conversion Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Decimal to Hex Conversion Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div>10 = A</div>
                                        <div>11 = B</div>
                                        <div>12 = C</div>
                                        <div>13 = D</div>
                                        <div>14 = E</div>
                                        <div>15 = F</div>
                                        <div>16 = 10</div>
                                        <div>255 = FF</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Decimal to Hexadecimal Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Programming Applications</h4>
                                    <p>Decimal to hexadecimal conversion is essential in programming for memory addresses, color codes, and bitwise operations. Hex provides a compact way to represent large decimal numbers, making code more readable and debugging easier.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Web Development</h4>
                                    <p>Critical for CSS color codes, Unicode characters, and JavaScript programming. Understanding how decimal RGB values (0-255) convert to hex is fundamental for web design and front-end development.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-red-50 rounded-lg border border-red-200">
                                <p class="text-sm text-red-800">
                                    <strong>Conversion Tip:</strong> Use the division method: repeatedly divide by 16 and collect remainders. Convert remainders 10-15 to A-F!
                                </p>
                            </div>
                        </div>

                        <!-- Programming Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Programming & Web Development Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Color Values</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-red-600 cursor-pointer hover:text-red-800 font-mono" data-example="255">RGB Red: 255</div>
                                        <div class="text-xs text-gray-600 mt-1">Converts to FF hex</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-red-600 cursor-pointer hover:text-red-800 font-mono" data-example="128">RGB Mid-tone: 128</div>
                                        <div class="text-xs text-gray-600 mt-1">Converts to 80 hex</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">System Values</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-red-600 cursor-pointer hover:text-red-800 font-mono" data-example="256">Power of 2: 256</div>
                                        <div class="text-xs text-gray-600 mt-1">Converts to 100 hex</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-red-600 cursor-pointer hover:text-red-800 font-mono" data-example="65535">16-bit max: 65535</div>
                                        <div class="text-xs text-gray-600 mt-1">Converts to FFFF hex</div>
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
                        const rangeRadios = document.getElementsByName('range');
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
                        const decimalDisplay = document.getElementById('decimalDisplay');
                        const hexDisplay = document.getElementById('hexDisplay');
                        const binaryDisplay = document.getElementById('binaryDisplay');
                        const octalDisplay = document.getElementById('octalDisplay');
                        const divisionProcess = document.getElementById('divisionProcess');
                        const decimalParts = document.getElementById('decimalParts');
                        const hexDigits = document.getElementById('hexDigits');
                        const colorPreview = document.getElementById('colorPreview');
                        const colorSwatch = document.getElementById('colorSwatch');
                        const colorCode = document.getElementById('colorCode');
                        const standardHex = document.getElementById('standardHex');
                        const prefixedHex = document.getElementById('prefixedHex');
                        const htmlHex = document.getElementById('htmlHex');
                        const assemblyHex = document.getElementById('assemblyHex');
                        const copyResult = document.getElementById('copyResult');

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getRange() {
                            return document.querySelector('input[name="range"]:checked').value;
                        }

                        function isValidDecimal(str) {
                            return /^\d+$/.test(str) && parseInt(str) >= 0;
                        }

                        function isValidHex(str) {
                            return /^[0-9A-Fa-f]+$/.test(str.replace(/0x/i, '').replace(/\s/g, ''));
                        }

                        function getDivisionProcess(decimal) {
                            let num = parseInt(decimal);
                            const steps = [];
                            const remainders = [];
                            
                            if (num === 0) {
                                return "0 ÷ 16 = 0 remainder 0\nResult: 0";
                            }
                            
                            while (num > 0) {
                                const quotient = Math.floor(num / 16);
                                const remainder = num % 16;
                                const hexRemainder = remainder < 10 ? remainder.toString() : String.fromCharCode(65 + remainder - 10);
                                
                                steps.push(`${num} ÷ 16 = ${quotient} remainder ${remainder} (${hexRemainder})`);
                                remainders.unshift(hexRemainder);
                                num = quotient;
                            }
                            
                            return steps.join('\n') + '\n\nRead remainders upward: ' + remainders.join('');
                        }

                        function getHexDigitBreakdown(decimal) {
                            const hex = parseInt(decimal).toString(16).toUpperCase();
                            const parts = [];
                            const digits = [];
                            
                            for (let i = 0; i < hex.length; i++) {
                                const digit = hex[i];
                                const value = parseInt(digit, 16);
                                const position = hex.length - 1 - i;
                                const placeValue = Math.pow(16, position);
                                
                                parts.push(`${value} × 16^${position}`);
                                digits.push(`${digit} = ${value}`);
                            }
                            
                            return {
                                parts: parts.join(' + '),
                                digits: digits.join(', ')
                            };
                        }

                        function formatHex(hex, usePrefix, useUppercase) {
                            let formatted = useUppercase ? hex.toUpperCase() : hex.toLowerCase();
                            return usePrefix ? '0x' + formatted : formatted;
                        }

                        function isColorValue(decimal) {
                            const num = parseInt(decimal);
                            return num >= 0 && num <= 255;
                        }

                        function updateInterface() {
                            const mode = getMode();
                            
                            if (mode === 'decimal-to-hex') {
                                inputLabel.textContent = 'Enter Decimal Number';
                                inputUnit.textContent = 'Decimal';
                                inputHelp.textContent = 'Enter a decimal number (0-9 digits)';
                                resultTitle.textContent = 'Hexadecimal Value';
                                resultDescription.textContent = 'Converted to hexadecimal';
                                inputValue.placeholder = 'Enter decimal (e.g., 255)';
                            } else {
                                inputLabel.textContent = 'Enter Hexadecimal Number';
                                inputUnit.textContent = 'Hex';
                                inputHelp.textContent = 'Enter a hex number (0-9, A-F)';
                                resultTitle.textContent = 'Decimal Value';
                                resultDescription.textContent = 'Converted to decimal';
                                inputValue.placeholder = 'Enter hex (e.g., FF)';
                            }
                        }

                        function convert() {
                            const inputVal = inputValue.value.trim().replace(/\s/g, '');
                            const mode = getMode();
                            const range = getRange();

                            if (!inputVal) {
                                clearOutputs();
                                return;
                            }

                            let decimal = 0;
                            let hex = '';
                            let isValid = false;

                            if (mode === 'decimal-to-hex') {
                                if (isValidDecimal(inputVal)) {
                                    decimal = parseInt(inputVal);
                                    
                                    // Check range limits
                                    let withinRange = true;
                                    if (range === '8bit' && decimal > 255) withinRange = false;
                                    if (range === '16bit' && decimal > 65535) withinRange = false;
                                    
                                    if (withinRange) {
                                        hex = decimal.toString(16);
                                        isValid = true;
                                    }
                                }
                            } else {
                                const cleanHex = inputVal.replace(/0x/i, '');
                                if (isValidHex(cleanHex)) {
                                    hex = cleanHex;
                                    decimal = parseInt(hex, 16);
                                    isValid = true;
                                }
                            }

                            if (isValid) {
                                // Format hex based on options
                                const formattedHex = formatHex(hex, showPrefix.checked, uppercase.checked);
                                
                                // Update primary output
                                output.textContent = mode === 'decimal-to-hex' ? formattedHex : decimal.toString();

                                // Update all displays
                                decimalDisplay.textContent = decimal.toString();
                                hexDisplay.textContent = formattedHex;
                                binaryDisplay.textContent = decimal.toString(2);
                                octalDisplay.textContent = decimal.toString(8);

                                // Division process (only for decimal to hex)
                                if (mode === 'decimal-to-hex') {
                                    divisionProcess.textContent = getDivisionProcess(decimal);
                                    
                                    // Hex digit breakdown
                                    const breakdown = getHexDigitBreakdown(decimal);
                                    decimalParts.textContent = breakdown.parts;
                                    hexDigits.textContent = breakdown.digits;
                                } else {
                                    divisionProcess.textContent = 'Process shown for decimal → hex conversion';
                                    decimalParts.textContent = '--';
                                    hexDigits.textContent = '--';
                                }

                                // Color preview for RGB values (0-255)
                                if (isColorValue(decimal)) {
                                    colorPreview.style.display = 'block';
                                    const colorHex = decimal.toString(16).padStart(2, '0').toUpperCase();
                                    colorSwatch.style.backgroundColor = `#${colorHex}${colorHex}${colorHex}`;
                                    colorCode.textContent = `#${colorHex}${colorHex}${colorHex} (Grayscale)`;
                                } else {
                                    colorPreview.style.display = 'none';
                                }

                                // Format variations
                                const hexUpper = hex.toUpperCase();
                                const hexLower = hex.toLowerCase();
                                standardHex.textContent = uppercase.checked ? hexUpper : hexLower;
                                prefixedHex.textContent = '0x' + (uppercase.checked ? hexUpper : hexLower);
                                htmlHex.textContent = '#' + (uppercase.checked ? hexUpper : hexLower);
                                assemblyHex.textContent = (uppercase.checked ? hexUpper : hexLower) + 'h';

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
                            decimalDisplay.textContent = '--';
                            hexDisplay.textContent = '--';
                            binaryDisplay.textContent = '--';
                            octalDisplay.textContent = '--';
                            divisionProcess.textContent = '--';
                            decimalParts.textContent = '--';
                            hexDigits.textContent = '--';
                            colorPreview.style.display = 'none';
                            standardHex.textContent = '--';
                            prefixedHex.textContent = '--';
                            htmlHex.textContent = '--';
                            assemblyHex.textContent = '--';
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

                        rangeRadios.forEach(radio => {
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
                        const decimalExamples = document.querySelectorAll('.decimal-example');
                        decimalExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                
                                // Set to decimal-to-hex mode
                                document.querySelector('input[value="decimal-to-hex"]').checked = true;
                                updateInterface();
                                
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                decimalExamples.forEach(btn => btn.classList.remove('bg-red-100', 'text-red-700'));
                                decimalExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-red-100', 'text-red-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                
                                // Set to decimal-to-hex mode
                                document.querySelector('input[value="decimal-to-hex"]').checked = true;
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
                                const newMode = currentMode === 'decimal-to-hex' ? 'hex-to-decimal' : 'decimal-to-hex';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                clearAll();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
