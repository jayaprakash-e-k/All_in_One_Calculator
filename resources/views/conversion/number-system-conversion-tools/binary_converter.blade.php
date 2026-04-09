<x-tool-page-layout
    title="Binary Converter - ConvertPro"
    description="Professional binary converter for computer science and programming. Convert binary numbers to decimal, hexadecimal, and octal with detailed bit analysis."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Binary Number System Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Conversion Mode -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Conversion Mode
                                                                                </label>
                                                                                <div class="grid grid-cols-2 gap-2">
                                                                                    <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors cursor-pointer bg-blue-50 border-blue-300">
                                                                                        <input type="radio" name="mode" value="binary-to-decimal" class="text-blue-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">Binary → Decimal</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="mode" value="decimal-to-binary" class="text-blue-600 focus:ring-slate-200">
                                                                                        <span class="text-sm font-medium">Decimal → Binary</span>
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
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-mono" 
                                                                                        placeholder="Enter binary (e.g., 1010)"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium" id="inputUnit">Binary</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500" id="inputHelp">Enter a binary number (only 0s and 1s)</p>
                                                                            </div>

                                                                            <!-- Binary Format Options -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Binary Format Options
                                                                                </label>
                                                                                <div class="grid grid-cols-2 gap-2">
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors cursor-pointer">
                                                                                        <input type="checkbox" name="addSpacing" class="text-blue-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">Add 4-bit spacing</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors cursor-pointer">
                                                                                        <input type="checkbox" name="showBitPosition" class="text-blue-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">Show bit positions</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Bit Width -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Bit Width
                                                                                </label>
                                                                                <div class="grid grid-cols-4 gap-2">
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="bitWidth" value="8" class="text-blue-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">8-bit</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="bitWidth" value="16" class="text-blue-600 focus:ring-slate-200">
                                                                                        <span class="text-sm font-medium">16-bit</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="bitWidth" value="32" class="text-blue-600 focus:ring-slate-200">
                                                                                        <span class="text-sm font-medium">32-bit</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="bitWidth" value="auto" class="text-blue-600 focus:ring-slate-200">
                                                                                        <span class="text-sm font-medium">Auto</span>
                                                                                    </label>
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
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Results Display -->
                                                                        <div class="mt-8 space-y-4">
                                                                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>

                                                                            <!-- Primary Result -->
                                                                            <div class="p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Decimal Value</h4>
                                                                                        <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-blue-600 font-mono" id="output">--</div>
                                                                                        <button class="text-xs text-blue-600 hover:text-blue-800 mt-1" id="copyResult">Copy Result</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- All Number Systems -->
                                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                                <!-- Binary -->
                                                                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Binary (Base 2)</h4>
                                                                                        <div class="text-lg font-bold text-green-600 font-mono" id="binaryDisplay">--</div>
                                                                                        <div class="text-xs text-gray-500 mt-1">0s and 1s</div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Decimal -->
                                                                                <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Decimal (Base 10)</h4>
                                                                                        <div class="text-lg font-bold text-blue-600 font-mono" id="decimalDisplay">--</div>
                                                                                        <div class="text-xs text-gray-500 mt-1">0-9</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Additional Number Systems -->
                                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                                <!-- Hexadecimal -->
                                                                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Hexadecimal (Base 16)</h4>
                                                                                        <div class="text-lg font-bold text-purple-600 font-mono" id="hexDisplay">--</div>
                                                                                        <div class="text-xs text-gray-500 mt-1">0-9, A-F</div>
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



                                                                    </div>
                                    </div>
                                </div>
                            </div>
    

        <div class="mt-6 space-y-4">
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <!-- Quick Binary Examples -->
                                                    <div class="space-y-2">
                                                        <label class="block text-sm font-semibold text-gray-700">
                                                            Quick Binary Examples
                                                        </label>
                                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                                            <button type="button" class="binary-example px-3 py-2 text-sm bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 rounded-lg transition-colors font-mono" data-value="1010" data-context="10 decimal">1010</button>
                                                            <button type="button" class="binary-example px-3 py-2 text-sm bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 rounded-lg transition-colors font-mono" data-value="11111111" data-context="255 decimal">11111111</button>
                                                            <button type="button" class="binary-example px-3 py-2 text-sm bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 rounded-lg transition-colors font-mono" data-value="10000000" data-context="128 decimal">10000000</button>
                                                            <button type="button" class="binary-example px-3 py-2 text-sm bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 rounded-lg transition-colors font-mono" data-value="1111" data-context="15 decimal">1111</button>
                                                        </div>
                                                    </div>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <!-- Binary Reference -->
                                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Binary System Reference</h4>
                                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs text-gray-600">
                                                        <div>• Binary uses only 0 and 1 (Base 2)</div>
                                                        <div>• Each position is a power of 2</div>
                                                        <div>• Rightmost bit = 2⁰ = 1</div>
                                                        <div>• Next bit = 2¹ = 2, then 2² = 4, etc.</div>
                                                        <div>• Used in all digital systems and computers</div>
                                                        <div>• Foundation of computer science and programming</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Binary Number System</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Computer Science Applications</h4>
                                    <p>Binary is fundamental in computer science, digital electronics, and programming. Every piece of data in computers is ultimately represented in binary - from simple numbers to complex multimedia files, everything is stored as sequences of 0s and 1s.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Uses</h4>
                                    <p>Essential for understanding computer memory, network protocols, digital circuits, and low-level programming. Binary conversion helps in debugging, optimization, and understanding how computers process information at the most basic level.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-blue-50 rounded-lg border border-blue-200">
                                <p class="text-sm text-blue-800">
                                    <strong>Learning Tip:</strong> Remember that each binary digit (bit) represents a power of 2. The rightmost bit is 2⁰=1, next is 2¹=2, then 2²=4, and so on!
                                </p>
                            </div>
                        </div>

                        <!-- Programming Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Programming & Computing Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Common Binary Values</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800 font-mono" data-example="11111111">11111111</div>
                                        <div class="text-xs text-gray-600 mt-1">255 decimal (max 8-bit value)</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800 font-mono" data-example="10000000">10000000</div>
                                        <div class="text-xs text-gray-600 mt-1">128 decimal (8th bit set)</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Programming Context</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800 font-mono" data-example="1010">1010</div>
                                        <div class="text-xs text-gray-600 mt-1">10 decimal (common in bit manipulation)</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-blue-600 cursor-pointer hover:text-blue-800 font-mono" data-example="1111">1111</div>
                                        <div class="text-xs text-gray-600 mt-1">15 decimal (4-bit mask)</div>
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
                        const bitWidthRadios = document.getElementsByName('bitWidth');
                        const addSpacing = document.getElementsByName('addSpacing')[0];
                        const showBitPosition = document.getElementsByName('showBitPosition')[0];
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const binaryDisplay = document.getElementById('binaryDisplay');
                        const decimalDisplay = document.getElementById('decimalDisplay');
                        const hexDisplay = document.getElementById('hexDisplay');
                        const octalDisplay = document.getElementById('octalDisplay');
                        const bitCount = document.getElementById('bitCount');
                        const bitWidthDisplay = document.getElementById('bitWidthDisplay');
                        const msbDisplay = document.getElementById('msbDisplay');
                        const bitPositionDisplay = document.getElementById('bitPositionDisplay');
                        const bitPositionText = document.getElementById('bitPositionText');
                        const powersOfTwo = document.getElementById('powersOfTwo');
                        const sumFormula = document.getElementById('sumFormula');
                        const spacedBinary = document.getElementById('spacedBinary');
                        const paddedBinary = document.getElementById('paddedBinary');
                        const copyResult = document.getElementById('copyResult');

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getBitWidth() {
                            return document.querySelector('input[name="bitWidth"]:checked').value;
                        }

                        function isValidBinary(str) {
                            return /^[01]+$/.test(str.replace(/\s/g, ''));
                        }

                        function isValidDecimal(str) {
                            return /^\d+$/.test(str) && parseInt(str) >= 0;
                        }

                        function padBinary(binary, width) {
                            if (width === 'auto') return binary;
                            const targetWidth = parseInt(width);
                            return binary.padStart(targetWidth, '0');
                        }

                        function addBinarySpacing(binary) {
                            return binary.replace(/(.{4})/g, '$1 ').trim();
                        }

                        function getBitPositionBreakdown(binary) {
                            const bits = binary.split('').reverse();
                            let breakdown = [];
                            let sum = 0;
                            
                            for (let i = 0; i < bits.length; i++) {
                                if (bits[i] === '1') {
                                    const value = Math.pow(2, i);
                                    breakdown.push(`2^${i} = ${value}`);
                                    sum += value;
                                }
                            }
                            
                            return {
                                breakdown: breakdown.reverse(),
                                sum: sum
                            };
                        }

                        function updateInterface() {
                            const mode = getMode();
                            
                            if (mode === 'binary-to-decimal') {
                                inputLabel.textContent = 'Enter Binary Number';
                                inputUnit.textContent = 'Binary';
                                inputHelp.textContent = 'Enter a binary number (only 0s and 1s)';
                                resultTitle.textContent = 'Decimal Value';
                                resultDescription.textContent = 'Converted to decimal';
                                inputValue.placeholder = 'Enter binary (e.g., 1010)';
                            } else {
                                inputLabel.textContent = 'Enter Decimal Number';
                                inputUnit.textContent = 'Decimal';
                                inputHelp.textContent = 'Enter a decimal number (0-9 digits)';
                                resultTitle.textContent = 'Binary Value';
                                resultDescription.textContent = 'Converted to binary';
                                inputValue.placeholder = 'Enter decimal (e.g., 10)';
                            }
                        }

                        function convert() {
                            const inputVal = inputValue.value.trim();
                            const mode = getMode();
                            const bitWidth = getBitWidth();

                            if (!inputVal) {
                                clearOutputs();
                                return;
                            }

                            let binary = '';
                            let decimal = 0;
                            let isValid = false;

                            if (mode === 'binary-to-decimal') {
                                if (isValidBinary(inputVal)) {
                                    binary = inputVal.replace(/\s/g, '');
                                    decimal = parseInt(binary, 2);
                                    isValid = true;
                                }
                            } else {
                                if (isValidDecimal(inputVal)) {
                                    decimal = parseInt(inputVal);
                                    binary = decimal.toString(2);
                                    isValid = true;
                                }
                            }

                            if (isValid) {
                                // Pad binary according to bit width
                                const paddedBin = padBinary(binary, bitWidth);
                                
                                // Update primary output
                                output.textContent = mode === 'binary-to-decimal' ? decimal.toString() : binary;

                                // Update all displays
                                binaryDisplay.textContent = binary;
                                decimalDisplay.textContent = decimal.toString();
                                hexDisplay.textContent = decimal.toString(16).toUpperCase();
                                octalDisplay.textContent = decimal.toString(8);

                                // Bit analysis
                                bitCount.textContent = binary.length;
                                bitWidthDisplay.textContent = bitWidth === 'auto' ? `${binary.length}-bit` : `${bitWidth}-bit`;
                                msbDisplay.textContent = binary[0] || '0';

                                // Bit position analysis
                                if (showBitPosition.checked) {
                                    const analysis = getBitPositionBreakdown(binary);
                                    bitPositionText.innerHTML = analysis.breakdown.join('<br>') + 
                                                              (analysis.breakdown.length > 0 ? '<br>Sum: ' + analysis.sum : '');
                                    bitPositionDisplay.style.display = 'block';
                                } else {
                                    bitPositionDisplay.style.display = 'none';
                                }

                                // Powers of two and sum formula
                                const powers = [];
                                for (let i = binary.length - 1; i >= 0; i--) {
                                    if (binary[binary.length - 1 - i] === '1') {
                                        powers.push(`2^${i}`);
                                    }
                                }
                                powersOfTwo.textContent = powers.join(' + ') || 'None';
                                sumFormula.textContent = powers.length > 0 ? `${powers.join(' + ')} = ${decimal}` : '0';

                                // Formatted displays
                                spacedBinary.textContent = addSpacing.checked ? addBinarySpacing(paddedBin) : paddedBin;
                                paddedBinary.textContent = paddedBin;

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
                            decimalDisplay.textContent = '--';
                            hexDisplay.textContent = '--';
                            octalDisplay.textContent = '--';
                            bitCount.textContent = '--';
                            bitWidthDisplay.textContent = '--';
                            msbDisplay.textContent = '--';
                            bitPositionText.textContent = '--';
                            powersOfTwo.textContent = '--';
                            sumFormula.textContent = '--';
                            spacedBinary.textContent = '--';
                            paddedBinary.textContent = '--';
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

                        bitWidthRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

                        addSpacing.addEventListener('change', convert);
                        showBitPosition.addEventListener('change', convert);

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

                        // Binary example buttons
                        const binaryExamples = document.querySelectorAll('.binary-example');
                        binaryExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                
                                // Set to binary mode if not already
                                document.querySelector('input[value="binary-to-decimal"]').checked = true;
                                updateInterface();
                                
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                binaryExamples.forEach(btn => btn.classList.remove('bg-blue-100', 'text-blue-700'));
                                binaryExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-blue-100', 'text-blue-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                
                                // Set to binary mode
                                document.querySelector('input[value="binary-to-decimal"]').checked = true;
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
                                const newMode = currentMode === 'binary-to-decimal' ? 'decimal-to-binary' : 'binary-to-decimal';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                clearAll();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
