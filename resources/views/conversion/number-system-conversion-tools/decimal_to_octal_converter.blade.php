<x-tool-page-layout
    title="Decimal to Octal Converter - ConvertPro"
    description="Professional decimal to octal converter for system programming and digital electronics. Convert decimal numbers to octal format with detailed conversion steps."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Decimal to Octal Converter</h2>
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
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-orange-300 transition-colors cursor-pointer bg-orange-50 border-orange-300">
                                                <input type="radio" name="mode" value="decimal-to-octal" class="text-orange-600 focus:ring-orange-500" checked>
                                                <span class="text-sm font-medium">Decimal → Octal</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-orange-300 transition-colors cursor-pointer">
                                                <input type="radio" name="mode" value="octal-to-decimal" class="text-orange-600 focus:ring-orange-500">
                                                <span class="text-sm font-medium">Octal → Decimal</span>
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
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter decimal (e.g., 64)"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">Decimal</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500" id="inputHelp">Enter a decimal number (0-9 digits)</p>
                                    </div>

                                    <!-- Octal Format Options -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Octal Format Options
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-orange-300 transition-colors cursor-pointer">
                                                <input type="checkbox" name="showPrefix" class="text-orange-600 focus:ring-orange-500" checked>
                                                <span class="text-sm font-medium">Show 0o prefix</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-orange-300 transition-colors cursor-pointer">
                                                <input type="checkbox" name="showSteps" class="text-orange-600 focus:ring-orange-500" checked>
                                                <span class="text-sm font-medium">Show conversion steps</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- System Context -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            System Context
                                        </label>
                                        <div class="grid grid-cols-3 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-orange-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="general" class="text-orange-600 focus:ring-orange-500" checked>
                                                <span class="text-sm font-medium">General</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-orange-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="unix" class="text-orange-600 focus:ring-orange-500">
                                                <span class="text-sm font-medium">Unix/Linux</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-orange-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="digital" class="text-orange-600 focus:ring-orange-500">
                                                <span class="text-sm font-medium">Digital Systems</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Quick Decimal Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Decimal Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="octal-example px-3 py-2 text-sm bg-gray-100 hover:bg-orange-100 text-gray-700 hover:text-orange-700 rounded-lg transition-colors font-mono" data-value="8" data-context="10 octal">8</button>
                                            <button type="button" class="octal-example px-3 py-2 text-sm bg-gray-100 hover:bg-orange-100 text-gray-700 hover:text-orange-700 rounded-lg transition-colors font-mono" data-value="64" data-context="100 octal">64</button>
                                            <button type="button" class="octal-example px-3 py-2 text-sm bg-gray-100 hover:bg-orange-100 text-gray-700 hover:text-orange-700 rounded-lg transition-colors font-mono" data-value="255" data-context="377 octal">255</button>
                                            <button type="button" class="octal-example px-3 py-2 text-sm bg-gray-100 hover:bg-orange-100 text-gray-700 hover:text-orange-700 rounded-lg transition-colors font-mono" data-value="512" data-context="1000 octal">512</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-orange-100 hover:bg-orange-200 text-orange-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <div class="p-6 bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl border-l-4 border-orange-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Octal Value</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-orange-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-orange-600 hover:text-orange-800 mt-1" id="copyResult">Copy Result</button>
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
                                        
                                        <!-- Octal -->
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-amber-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Octal (Base 8)</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="octalDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0-7</div>
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
                                        
                                        <!-- Hexadecimal -->
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Hexadecimal (Base 16)</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="hexDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">0-9, A-F</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Conversion Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Decimal to Octal Conversion Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div>8 = 10₈</div>
                                        <div>16 = 20₈</div>
                                        <div>64 = 100₈</div>
                                        <div>128 = 200₈</div>
                                        <div>255 = 377₈</div>
                                        <div>256 = 400₈</div>
                                        <div>512 = 1000₈</div>
                                        <div>1024 = 2000₈</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Decimal to Octal Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">System Programming</h4>
                                    <p>Decimal to octal conversion is essential in Unix/Linux system programming for file permissions, memory addressing, and assembly language. Octal provides a compact representation that directly maps to 3-bit binary groups.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Digital Electronics</h4>
                                    <p>Critical for digital system design, embedded programming, and hardware interfaces. Octal simplifies binary representation while maintaining the direct bit-group relationship, making it easier to work with digital circuits.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-orange-50 rounded-lg border border-orange-200">
                                <p class="text-sm text-orange-800">
                                    <strong>Conversion Tip:</strong> Use the division method: repeatedly divide by 8 and collect remainders. Read remainders from bottom to top!
                                </p>
                            </div>
                        </div>

                        <!-- Programming Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">System Programming & Unix Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">File Permissions</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-orange-600 cursor-pointer hover:text-orange-800 font-mono" data-example="493">chmod 755</div>
                                        <div class="text-xs text-gray-600 mt-1">493 decimal = 755 octal (rwxr-xr-x)</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-orange-600 cursor-pointer hover:text-orange-800 font-mono" data-example="502">chmod 766</div>
                                        <div class="text-xs text-gray-600 mt-1">502 decimal = 766 octal (rwxrw-rw-)</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">System Values</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-orange-600 cursor-pointer hover:text-orange-800 font-mono" data-example="255">Max 8-bit: 255</div>
                                        <div class="text-xs text-gray-600 mt-1">255 decimal = 377 octal</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-orange-600 cursor-pointer hover:text-orange-800 font-mono" data-example="1024">1KB: 1024</div>
                                        <div class="text-xs text-gray-600 mt-1">1024 decimal = 2000 octal</div>
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
                        const contextRadios = document.getElementsByName('context');
                        const showPrefix = document.getElementsByName('showPrefix')[0];
                        const showSteps = document.getElementsByName('showSteps')[0];
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const decimalDisplay = document.getElementById('decimalDisplay');
                        const octalDisplay = document.getElementById('octalDisplay');
                        const binaryDisplay = document.getElementById('binaryDisplay');
                        const hexDisplay = document.getElementById('hexDisplay');
                        const divisionProcess = document.getElementById('divisionProcess');
                        const positionValues = document.getElementById('positionValues');
                        const digitContributions = document.getElementById('digitContributions');
                        const unixContext = document.getElementById('unixContext');
                        const permissionString = document.getElementById('permissionString');
                        const chmodCommand = document.getElementById('chmodCommand');
                        const standardOctal = document.getElementById('standardOctal');
                        const prefixedOctal = document.getElementById('prefixedOctal');
                        const unixOctal = document.getElementById('unixOctal');
                        const assemblyOctal = document.getElementById('assemblyOctal');
                        const copyResult = document.getElementById('copyResult');

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getContext() {
                            return document.querySelector('input[name="context"]:checked').value;
                        }

                        function isValidDecimal(str) {
                            return /^\d+$/.test(str) && parseInt(str) >= 0;
                        }

                        function isValidOctal(str) {
                            return /^[0-7]+$/.test(str.replace(/0o/i, '').replace(/\s/g, ''));
                        }

                        function getDivisionProcess(decimal) {
                            let num = parseInt(decimal);
                            const steps = [];
                            const remainders = [];
                            
                            if (num === 0) {
                                return "0 ÷ 8 = 0 remainder 0\nResult: 0";
                            }
                            
                            while (num > 0) {
                                const quotient = Math.floor(num / 8);
                                const remainder = num % 8;
                                
                                steps.push(`${num} ÷ 8 = ${quotient} remainder ${remainder}`);
                                remainders.unshift(remainder.toString());
                                num = quotient;
                            }
                            
                            return steps.join('\n') + '\n\nRead remainders upward: ' + remainders.join('');
                        }

                        function getPowersBreakdown(decimal) {
                            const octal = parseInt(decimal).toString(8);
                            const positions = [];
                            const contributions = [];
                            
                            for (let i = 0; i < octal.length; i++) {
                                const digit = parseInt(octal[i]);
                                const position = octal.length - 1 - i;
                                const powerValue = Math.pow(8, position);
                                const contribution = digit * powerValue;
                                
                                positions.push(`8^${position} = ${powerValue}`);
                                contributions.push(`${digit} × ${powerValue} = ${contribution}`);
                            }
                            
                            return {
                                positions: positions.join(', '),
                                contributions: contributions.join(' + ')
                            };
                        }

                        function getUnixPermissions(decimal) {
                            const num = parseInt(decimal);
                            if (num < 0 || num > 777) return null;
                            
                            const octal = num.toString(8).padStart(3, '0');
                            const permissions = [];
                            
                            for (let i = 0; i < 3; i++) {
                                const digit = parseInt(octal[i]);
                                let perm = '';
                                perm += (digit & 4) ? 'r' : '-';
                                perm += (digit & 2) ? 'w' : '-';
                                perm += (digit & 1) ? 'x' : '-';
                                permissions.push(perm);
                            }
                            
                            return {
                                string: permissions.join(''),
                                chmod: `chmod ${octal}`
                            };
                        }

                        function formatOctal(octal, usePrefix) {
                            return usePrefix ? '0o' + octal : octal;
                        }

                        function updateInterface() {
                            const mode = getMode();
                            
                            if (mode === 'decimal-to-octal') {
                                inputLabel.textContent = 'Enter Decimal Number';
                                inputUnit.textContent = 'Decimal';
                                inputHelp.textContent = 'Enter a decimal number (0-9 digits)';
                                resultTitle.textContent = 'Octal Value';
                                resultDescription.textContent = 'Converted to octal';
                                inputValue.placeholder = 'Enter decimal (e.g., 64)';
                            } else {
                                inputLabel.textContent = 'Enter Octal Number';
                                inputUnit.textContent = 'Octal';
                                inputHelp.textContent = 'Enter an octal number (digits 0-7)';
                                resultTitle.textContent = 'Decimal Value';
                                resultDescription.textContent = 'Converted to decimal';
                                inputValue.placeholder = 'Enter octal (e.g., 100)';
                            }
                        }

                        function convert() {
                            const inputVal = inputValue.value.trim().replace(/\s/g, '');
                            const mode = getMode();
                            const context = getContext();

                            if (!inputVal) {
                                clearOutputs();
                                return;
                            }

                            let decimal = 0;
                            let octal = '';
                            let isValid = false;

                            if (mode === 'decimal-to-octal') {
                                if (isValidDecimal(inputVal)) {
                                    decimal = parseInt(inputVal);
                                    octal = decimal.toString(8);
                                    isValid = true;
                                }
                            } else {
                                const cleanOctal = inputVal.replace(/0o/i, '');
                                if (isValidOctal(cleanOctal)) {
                                    octal = cleanOctal;
                                    decimal = parseInt(octal, 8);
                                    isValid = true;
                                }
                            }

                            if (isValid) {
                                // Format octal based on options
                                const formattedOctal = formatOctal(octal, showPrefix.checked);
                                
                                // Update primary output
                                output.textContent = mode === 'decimal-to-octal' ? formattedOctal : decimal.toString();

                                // Update all displays
                                decimalDisplay.textContent = decimal.toString();
                                octalDisplay.textContent = formattedOctal;
                                binaryDisplay.textContent = decimal.toString(2);
                                hexDisplay.textContent = decimal.toString(16).toUpperCase();

                                // Division process and breakdown (only for decimal to octal)
                                if (showSteps.checked && mode === 'decimal-to-octal') {
                                    divisionProcess.textContent = getDivisionProcess(decimal);
                                    
                                    // Powers breakdown
                                    const breakdown = getPowersBreakdown(decimal);
                                    positionValues.textContent = breakdown.positions;
                                    digitContributions.textContent = breakdown.contributions;
                                } else {
                                    divisionProcess.textContent = showSteps.checked ? 
                                        'Process shown for decimal → octal conversion' : 
                                        'Process display disabled';
                                    positionValues.textContent = '--';
                                    digitContributions.textContent = '--';
                                }

                                // Unix context
                                if (context === 'unix') {
                                    const permissions = getUnixPermissions(decimal);
                                    if (permissions) {
                                        unixContext.style.display = 'block';
                                        permissionString.textContent = permissions.string;
                                        chmodCommand.textContent = permissions.chmod;
                                    } else {
                                        unixContext.style.display = 'none';
                                    }
                                } else {
                                    unixContext.style.display = 'none';
                                }

                                // Format variations
                                standardOctal.textContent = octal;
                                prefixedOctal.textContent = '0o' + octal;
                                unixOctal.textContent = '0' + octal; // Traditional Unix prefix
                                assemblyOctal.textContent = octal + 'o'; // Assembly style

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
                            octalDisplay.textContent = '--';
                            binaryDisplay.textContent = '--';
                            hexDisplay.textContent = '--';
                            divisionProcess.textContent = '--';
                            positionValues.textContent = '--';
                            digitContributions.textContent = '--';
                            unixContext.style.display = 'none';
                            standardOctal.textContent = '--';
                            prefixedOctal.textContent = '--';
                            unixOctal.textContent = '--';
                            assemblyOctal.textContent = '--';
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

                        contextRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

                        showPrefix.addEventListener('change', convert);
                        showSteps.addEventListener('change', convert);

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
                        const octalExamples = document.querySelectorAll('.octal-example');
                        octalExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                
                                // Set to decimal-to-octal mode
                                document.querySelector('input[value="decimal-to-octal"]').checked = true;
                                updateInterface();
                                
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                octalExamples.forEach(btn => btn.classList.remove('bg-orange-100', 'text-orange-700'));
                                octalExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-orange-100', 'text-orange-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                
                                // Set to decimal-to-octal mode
                                document.querySelector('input[value="decimal-to-octal"]').checked = true;
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
                                const newMode = currentMode === 'decimal-to-octal' ? 'octal-to-decimal' : 'decimal-to-octal';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                clearAll();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
