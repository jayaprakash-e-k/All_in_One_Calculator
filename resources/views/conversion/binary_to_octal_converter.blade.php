<x-app-layout 
    title="Binary to Octal Converter - ConvertPro"
    description="Professional binary to octal converter for computer science and digital systems. Convert binary numbers directly to octal format with detailed conversion steps."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Binary to Octal Converter']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-purple-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Binary to Octal Converter</h1>
                    <p class="text-gray-600">Convert binary numbers directly to octal format</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Binary to Octal Direct Converter</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Conversion Mode -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Conversion Mode
                                </label>
                                <div class="grid grid-cols-2 gap-2">
                                    <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer bg-purple-50 border-purple-300">
                                        <input type="radio" name="mode" value="binary-to-octal" class="text-purple-600 focus:ring-purple-500" checked>
                                        <span class="text-sm font-medium">Binary → Octal</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                        <input type="radio" name="mode" value="octal-to-binary" class="text-purple-600 focus:ring-purple-500">
                                        <span class="text-sm font-medium">Octal → Binary</span>
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
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter binary (e.g., 101110)"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium" id="inputUnit">Binary</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500" id="inputHelp">Enter a binary number (only 0s and 1s)</p>
                            </div>

                            <!-- Octal Format Options -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Octal Format Options
                                </label>
                                <div class="grid grid-cols-2 gap-2">
                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                        <input type="checkbox" name="showPrefix" class="text-purple-600 focus:ring-purple-500" checked>
                                        <span class="text-sm font-medium">Show 0o prefix</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                        <input type="checkbox" name="showProcess" class="text-purple-600 focus:ring-purple-500" checked>
                                        <span class="text-sm font-medium">Show conversion steps</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Binary Grouping -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Binary Grouping (for 3-bit conversion)
                                </label>
                                <div class="grid grid-cols-3 gap-2">
                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                        <input type="radio" name="grouping" value="3" class="text-purple-600 focus:ring-purple-500" checked>
                                        <span class="text-sm font-medium">3-bit groups</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                        <input type="radio" name="grouping" value="6" class="text-purple-600 focus:ring-purple-500">
                                        <span class="text-sm font-medium">6-bit groups</span>
                                    </label>
                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                        <input type="radio" name="grouping" value="none" class="text-purple-600 focus:ring-purple-500">
                                        <span class="text-sm font-medium">No grouping</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Quick Binary Examples -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Quick Binary Examples
                                </label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <button type="button" class="octal-example px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors font-mono" data-value="111" data-context="7 octal">111</button>
                                    <button type="button" class="octal-example px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors font-mono" data-value="101110" data-context="56 octal">101110</button>
                                    <button type="button" class="octal-example px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors font-mono" data-value="11111111" data-context="377 octal">11111111</button>
                                    <button type="button" class="octal-example px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors font-mono" data-value="1010101" data-context="125 octal">1010101</button>
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
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Octal Value</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-purple-600 font-mono" id="output">--</div>
                                        <button class="text-xs text-purple-600 hover:text-purple-800 mt-1" id="copyResult">Copy Result</button>
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
                                
                                <!-- Octal -->
                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Octal (Base 8)</h4>
                                        <div class="text-lg font-bold text-purple-600 font-mono" id="octalDisplay">--</div>
                                        <div class="text-xs text-gray-500 mt-1">0-7</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Number Systems -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Decimal -->
                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Decimal (Base 10)</h4>
                                        <div class="text-lg font-bold text-green-600 font-mono" id="decimalDisplay">--</div>
                                        <div class="text-xs text-gray-500 mt-1">0-9</div>
                                    </div>
                                </div>
                                
                                <!-- Hexadecimal -->
                                <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                    <div class="text-center">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Hexadecimal (Base 16)</h4>
                                        <div class="text-lg font-bold text-orange-600 font-mono" id="hexDisplay">--</div>
                                        <div class="text-xs text-gray-500 mt-1">0-9, A-F</div>
                                    </div>
                                </div>
                            </div>

                        <!-- Conversion Reference -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Binary to Octal Conversion Reference</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                <div>000 = 0</div>
                                <div>001 = 1</div>
                                <div>010 = 2</div>
                                <div>011 = 3</div>
                                <div>100 = 4</div>
                                <div>101 = 5</div>
                                <div>110 = 6</div>
                                <div>111 = 7</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Binary to Octal Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Digital Systems</h4>
                            <p>Binary to octal conversion is fundamental in digital electronics and computer systems. Octal provides a more compact representation than binary while maintaining the direct bit-group relationship, making it easier to read and work with binary data.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">System Programming</h4>
                            <p>Essential for Unix/Linux system programming, file permissions, and low-level programming. Octal is commonly used for file permissions (chmod), memory addresses, and assembly language programming where compact binary representation is needed.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-purple-50 rounded-lg border border-purple-200">
                        <p class="text-sm text-purple-800">
                            <strong>Conversion Tip:</strong> Group binary digits into sets of 3 from right to left. Each 3-bit group converts directly to one octal digit (0-7)!
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
                                <div class="font-medium text-purple-600 cursor-pointer hover:text-purple-800 font-mono" data-example="111110110">chmod 766</div>
                                <div class="text-xs text-gray-600 mt-1">Binary: 111 110 110 (rwx rw- rw-)</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-purple-600 cursor-pointer hover:text-purple-800 font-mono" data-example="111101101">chmod 755</div>
                                <div class="text-xs text-gray-600 mt-1">Binary: 111 101 101 (rwx r-x r-x)</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">System Values</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-purple-600 cursor-pointer hover:text-purple-800 font-mono" data-example="11111111">377₈</div>
                                <div class="text-xs text-gray-600 mt-1">Maximum 8-bit value (255 decimal)</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-purple-600 cursor-pointer hover:text-purple-800 font-mono" data-example="1000000">100₈</div>
                                <div class="text-xs text-gray-600 mt-1">64 decimal (common buffer size)</div>
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
                const modeRadios = document.getElementsByName('mode');
                const groupingRadios = document.getElementsByName('grouping');
                const showPrefix = document.getElementsByName('showPrefix')[0];
                const showProcess = document.getElementsByName('showProcess')[0];
                const clearButton = document.getElementById('clearButton');
                const inputLabel = document.getElementById('inputLabel');
                const inputUnit = document.getElementById('inputUnit');
                const inputHelp = document.getElementById('inputHelp');
                
                // Output elements
                const output = document.getElementById('output');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const binaryDisplay = document.getElementById('binaryDisplay');
                const octalDisplay = document.getElementById('octalDisplay');
                const decimalDisplay = document.getElementById('decimalDisplay');
                const hexDisplay = document.getElementById('hexDisplay');
                const conversionProcess = document.getElementById('conversionProcess');
                const groupBreakdown = document.getElementById('groupBreakdown');
                const binaryGroups = document.getElementById('binaryGroups');
                const octalDigits = document.getElementById('octalDigits');
                const standardOctal = document.getElementById('standardOctal');
                const prefixedOctal = document.getElementById('prefixedOctal');
                const unixOctal = document.getElementById('unixOctal');
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

                function isValidOctal(str) {
                    return /^[0-7]+$/.test(str.replace(/0o/i, '').replace(/\s/g, ''));
                }

                function padBinary(binary, multiple = 3) {
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

                function binaryToOctal(binary) {
                    const paddedBinary = padBinary(binary, 3);
                    let octal = '';
                    
                    for (let i = 0; i < paddedBinary.length; i += 3) {
                        const threeBits = paddedBinary.substr(i, 3);
                        const decimalValue = parseInt(threeBits, 2);
                        octal += decimalValue.toString();
                    }
                    
                    return octal;
                }

                function octalToBinary(octal) {
                    let binary = '';
                    for (let i = 0; i < octal.length; i++) {
                        const decimalValue = parseInt(octal[i], 10);
                        binary += decimalValue.toString(2).padStart(3, '0');
                    }
                    return binary;
                }

                function getConversionProcess(binary) {
                    const paddedBinary = padBinary(binary, 3);
                    const groups = [];
                    
                    for (let i = 0; i < paddedBinary.length; i += 3) {
                        const threeBits = paddedBinary.substr(i, 3);
                        const decimalValue = parseInt(threeBits, 2);
                        const octalDigit = decimalValue.toString();
                        groups.push(`${threeBits} = ${decimalValue} = ${octalDigit}`);
                    }
                    
                    return groups.join(' | ');
                }

                function get3BitBreakdown(binary) {
                    const paddedBinary = padBinary(binary, 3);
                    const breakdown = [];
                    
                    for (let i = 0; i < paddedBinary.length; i += 3) {
                        const threeBits = paddedBinary.substr(i, 3);
                        const decimalValue = parseInt(threeBits, 2);
                        const octalDigit = decimalValue.toString();
                        breakdown.push(`${threeBits} → ${octalDigit}`);
                    }
                    
                    return breakdown.join('<br>');
                }

                function formatOctal(octal, usePrefix) {
                    return usePrefix ? '0o' + octal : octal;
                }

                function updateInterface() {
                    const mode = getMode();
                    
                    if (mode === 'binary-to-octal') {
                        inputLabel.textContent = 'Enter Binary Number';
                        inputUnit.textContent = 'Binary';
                        inputHelp.textContent = 'Enter a binary number (only 0s and 1s)';
                        resultTitle.textContent = 'Octal Value';
                        resultDescription.textContent = 'Converted to octal';
                        inputValue.placeholder = 'Enter binary (e.g., 101110)';
                    } else {
                        inputLabel.textContent = 'Enter Octal Number';
                        inputUnit.textContent = 'Octal';
                        inputHelp.textContent = 'Enter an octal number (digits 0-7)';
                        resultTitle.textContent = 'Binary Value';
                        resultDescription.textContent = 'Converted to binary';
                        inputValue.placeholder = 'Enter octal (e.g., 56)';
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
                    let octal = '';
                    let decimal = 0;
                    let isValid = false;

                    if (mode === 'binary-to-octal') {
                        if (isValidBinary(inputVal)) {
                            binary = inputVal;
                            octal = binaryToOctal(binary);
                            decimal = parseInt(binary, 2);
                            isValid = true;
                        }
                    } else {
                        const cleanOctal = inputVal.replace(/0o/i, '');
                        if (isValidOctal(cleanOctal)) {
                            octal = cleanOctal;
                            binary = octalToBinary(octal);
                            decimal = parseInt(octal, 8);
                            isValid = true;
                        }
                    }

                    if (isValid) {
                        // Format octal based on options
                        const formattedOctal = formatOctal(octal, showPrefix.checked);
                        
                        // Update primary output
                        output.textContent = mode === 'binary-to-octal' ? formattedOctal : groupBinary(binary, grouping);

                        // Update all displays
                        binaryDisplay.textContent = groupBinary(binary, grouping);
                        octalDisplay.textContent = formattedOctal;
                        decimalDisplay.textContent = decimal.toString();
                        hexDisplay.textContent = decimal.toString(16).toUpperCase();

                        // Conversion process and breakdown
                        if (showProcess.checked) {
                            if (mode === 'binary-to-octal') {
                                conversionProcess.textContent = getConversionProcess(binary);
                                groupBreakdown.innerHTML = get3BitBreakdown(binary);
                                
                                // Group mapping
                                const paddedBinary = padBinary(binary, 3);
                                const groups = [];
                                const digits = [];
                                
                                for (let i = 0; i < paddedBinary.length; i += 3) {
                                    const threeBits = paddedBinary.substr(i, 3);
                                    const octalDigit = parseInt(threeBits, 2).toString();
                                    groups.push(threeBits);
                                    digits.push(octalDigit);
                                }
                                
                                binaryGroups.textContent = groups.join(' ');
                                octalDigits.textContent = digits.join(' ');
                            } else {
                                // Reverse process for octal to binary
                                const reverseProcess = [];
                                for (let i = 0; i < octal.length; i++) {
                                    const octalDigit = octal[i];
                                    const decVal = parseInt(octalDigit, 10);
                                    const binVal = decVal.toString(2).padStart(3, '0');
                                    reverseProcess.push(`${octalDigit} = ${decVal} = ${binVal}`);
                                }
                                conversionProcess.textContent = reverseProcess.join(' | ');
                                
                                const breakdown = [];
                                for (let i = 0; i < octal.length; i++) {
                                    const octalDigit = octal[i];
                                    const binVal = parseInt(octalDigit, 10).toString(2).padStart(3, '0');
                                    breakdown.push(`${octalDigit} → ${binVal}`);
                                }
                                groupBreakdown.innerHTML = breakdown.join('<br>');
                                
                                binaryGroups.textContent = octalToBinary(octal).replace(/(.{3})/g, '$1 ').trim();
                                octalDigits.textContent = octal.split('').join(' ');
                            }
                        } else {
                            conversionProcess.textContent = 'Process display disabled';
                            groupBreakdown.textContent = 'Process display disabled';
                            binaryGroups.textContent = '--';
                            octalDigits.textContent = '--';
                        }

                        // Format variations
                        standardOctal.textContent = octal;
                        prefixedOctal.textContent = '0o' + octal;
                        unixOctal.textContent = '0' + octal; // Traditional Unix octal prefix

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
                    octalDisplay.textContent = '--';
                    decimalDisplay.textContent = '--';
                    hexDisplay.textContent = '--';
                    conversionProcess.textContent = '--';
                    groupBreakdown.textContent = '--';
                    binaryGroups.textContent = '--';
                    octalDigits.textContent = '--';
                    standardOctal.textContent = '--';
                    prefixedOctal.textContent = '--';
                    unixOctal.textContent = '--';
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
                showProcess.addEventListener('change', convert);

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
                        
                        // Set to binary-to-octal mode
                        document.querySelector('input[value="binary-to-octal"]').checked = true;
                        updateInterface();
                        
                        inputValue.value = value;
                        convert();
                        
                        // Update button styles
                        octalExamples.forEach(btn => btn.classList.remove('bg-purple-100', 'text-purple-700'));
                        octalExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                        this.classList.remove('bg-gray-100', 'text-gray-700');
                        this.classList.add('bg-purple-100', 'text-purple-700');
                    });
                });

                // Clickable examples
                const examples = document.querySelectorAll('[data-example]');
                examples.forEach(element => {
                    element.addEventListener('click', function() {
                        const value = this.getAttribute('data-example');
                        
                        // Set to binary-to-octal mode
                        document.querySelector('input[value="binary-to-octal"]').checked = true;
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
                        const newMode = currentMode === 'binary-to-octal' ? 'octal-to-binary' : 'binary-to-octal';
                        document.querySelector(`input[value="${newMode}"]`).checked = true;
                        updateInterface();
                        clearAll();
                    }
                });
            });
        </script>
    </x-slot>
</x-app-layout>