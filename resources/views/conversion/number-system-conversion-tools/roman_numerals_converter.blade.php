<x-tool-page-layout
    title="Roman Numerals Converter - ConvertPro"
    description="Professional Roman numerals converter for historical and educational purposes. Convert between Roman numerals and decimal numbers with detailed rules and explanations."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Roman Numerals Converter</h2>
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
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer bg-indigo-50 border-indigo-300">
                                                <input type="radio" name="mode" value="decimal-to-roman" class="text-indigo-600 focus:ring-indigo-500" checked>
                                                <span class="text-sm font-medium">Decimal → Roman</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="mode" value="roman-to-decimal" class="text-indigo-600 focus:ring-indigo-500">
                                                <span class="text-sm font-medium">Roman → Decimal</span>
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
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter number (e.g., 1994)"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">Decimal</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500" id="inputHelp">Enter a number between 1 and 3999</p>
                                    </div>

                                    <!-- Roman Style Options -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Roman Numeral Options
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="checkbox" name="showBreakdown" class="text-indigo-600 focus:ring-indigo-500" checked>
                                                <span class="text-sm font-medium">Show breakdown</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="checkbox" name="showRules" class="text-indigo-600 focus:ring-indigo-500" checked>
                                                <span class="text-sm font-medium">Show conversion rules</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Historical Context -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Historical Context
                                        </label>
                                        <div class="grid grid-cols-3 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="general" class="text-indigo-600 focus:ring-indigo-500" checked>
                                                <span class="text-sm font-medium">General</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="historical" class="text-indigo-600 focus:ring-indigo-500">
                                                <span class="text-sm font-medium">Historical</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="context" value="modern" class="text-indigo-600 focus:ring-indigo-500">
                                                <span class="text-sm font-medium">Modern Usage</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Quick Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="roman-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors font-mono" data-value="1994" data-context="MCMXCIV">1994</button>
                                            <button type="button" class="roman-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors font-mono" data-value="2024" data-context="MMXXIV">2024</button>
                                            <button type="button" class="roman-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors font-mono" data-value="444" data-context="CDXLIV">444</button>
                                            <button type="button" class="roman-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors font-mono" data-value="3999" data-context="MMMCMXCIX">3999</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <div class="p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border-l-4 border-indigo-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Roman Numeral</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-indigo-600 font-serif" id="output">--</div>
                                                <button class="text-xs text-indigo-600 hover:text-indigo-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Number System Comparison -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Decimal -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Decimal (Arabic)</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="decimalDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">Modern system</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Roman -->
                                        <div class="p-4 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Roman Numeral</h4>
                                                <div class="text-lg font-bold text-indigo-600 font-serif" id="romanDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">Ancient system</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Roman Numeral Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Roman Numeral Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div>I = 1</div>
                                        <div>V = 5</div>
                                        <div>X = 10</div>
                                        <div>L = 50</div>
                                        <div>C = 100</div>
                                        <div>D = 500</div>
                                        <div>M = 1000</div>
                                        <div>CM = 900</div>
                                        <div>CD = 400</div>
                                        <div>XC = 90</div>
                                        <div>XL = 40</div>
                                        <div>IX = 9</div>
                                        <div>IV = 4</div>
                                        <div>Valid: 1-3999</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Roman Numerals</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Historical Significance</h4>
                                    <p>Roman numerals were used throughout the Roman Empire and continued to be used in Europe well into the Late Middle Ages. They represent one of humanity's earliest systematic approaches to numerical notation and are still used today in various contexts.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Modern Applications</h4>
                                    <p>Today, Roman numerals are used in clock faces, book chapters, movie sequels, Super Bowl numbering, outline formatting, and formal documents. Understanding Roman numerals is essential for historical research and classical education.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                                <p class="text-sm text-indigo-800">
                                    <strong>Fun Fact:</strong> There's no Roman numeral for zero! The concept of zero as a number didn't exist in ancient Rome.
                                </p>
                            </div>
                        </div>

                        <!-- Usage Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Usage Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Historical Dates</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800 font-serif" data-example="1776">MDCCLXXVI</div>
                                        <div class="text-xs text-gray-600 mt-1">1776 - American Independence</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800 font-serif" data-example="1066">MLXVI</div>
                                        <div class="text-xs text-gray-600 mt-1">1066 - Battle of Hastings</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Modern Usage</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800 font-serif" data-example="12">XII</div>
                                        <div class="text-xs text-gray-600 mt-1">Clock hour (12 o'clock)</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800 font-serif" data-example="58">LVIII</div>
                                        <div class="text-xs text-gray-600 mt-1">Super Bowl LVIII (2024)</div>
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
                        const showBreakdown = document.getElementsByName('showBreakdown')[0];
                        const showRules = document.getElementsByName('showRules')[0];
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const decimalDisplay = document.getElementById('decimalDisplay');
                        const romanDisplay = document.getElementById('romanDisplay');
                        const breakdownDisplay = document.getElementById('breakdownDisplay');
                        const conversionSteps = document.getElementById('conversionSteps');
                        const rulesDisplay = document.getElementById('rulesDisplay');
                        const appliedRules = document.getElementById('appliedRules');
                        const symbolsUsed = document.getElementById('symbolsUsed');
                        const symbolLength = document.getElementById('symbolLength');
                        const historicalContext = document.getElementById('historicalContext');
                        const contextInfo = document.getElementById('contextInfo');
                        const clockFormat = document.getElementById('clockFormat');
                        const chapterFormat = document.getElementById('chapterFormat');
                        const yearFormat = document.getElementById('yearFormat');
                        const copyResult = document.getElementById('copyResult');

                        // Roman numeral conversion arrays
                        const romanNumerals = [
                            { value: 1000, symbol: 'M' },
                            { value: 900, symbol: 'CM' },
                            { value: 500, symbol: 'D' },
                            { value: 400, symbol: 'CD' },
                            { value: 100, symbol: 'C' },
                            { value: 90, symbol: 'XC' },
                            { value: 50, symbol: 'L' },
                            { value: 40, symbol: 'XL' },
                            { value: 10, symbol: 'X' },
                            { value: 9, symbol: 'IX' },
                            { value: 5, symbol: 'V' },
                            { value: 4, symbol: 'IV' },
                            { value: 1, symbol: 'I' }
                        ];

                        const romanValues = {
                            'I': 1, 'V': 5, 'X': 10, 'L': 50,
                            'C': 100, 'D': 500, 'M': 1000
                        };

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getContext() {
                            return document.querySelector('input[name="context"]:checked').value;
                        }

                        function isValidDecimal(str) {
                            const num = parseInt(str);
                            return /^\d+$/.test(str) && num >= 1 && num <= 3999;
                        }

                        function isValidRoman(str) {
                            return /^[IVXLCDM]+$/i.test(str.trim());
                        }

                        function decimalToRoman(decimal) {
                            let num = parseInt(decimal);
                            let result = '';
                            const steps = [];
                            
                            for (const numeral of romanNumerals) {
                                while (num >= numeral.value) {
                                    result += numeral.symbol;
                                    steps.push(`${num} - ${numeral.value} = ${num - numeral.value} (add ${numeral.symbol})`);
                                    num -= numeral.value;
                                }
                            }
                            
                            return { roman: result, steps: steps };
                        }

                        function romanToDecimal(roman) {
                            const upperRoman = roman.toUpperCase().trim();
                            let result = 0;
                            const steps = [];
                            
                            for (let i = 0; i < upperRoman.length; i++) {
                                const current = romanValues[upperRoman[i]];
                                const next = romanValues[upperRoman[i + 1]];
                                
                                if (next && current < next) {
                                    // Subtractive case (IV, IX, XL, XC, CD, CM)
                                    const value = next - current;
                                    steps.push(`${upperRoman[i]}${upperRoman[i + 1]} = ${next} - ${current} = ${value}`);
                                    result += value;
                                    i++; // Skip next character
                                } else {
                                    // Additive case
                                    steps.push(`${upperRoman[i]} = ${current}`);
                                    result += current;
                                }
                            }
                            
                            return { decimal: result, steps: steps };
                        }

                        function getConversionRules(roman, decimal) {
                            const rules = [];
                            const romanStr = typeof roman === 'string' ? roman : decimalToRoman(decimal).roman;
                            
                            // Check for subtractive notation
                            if (romanStr.includes('IV') || romanStr.includes('IX')) {
                                rules.push('Subtractive notation: I before V or X (4, 9)');
                            }
                            if (romanStr.includes('XL') || romanStr.includes('XC')) {
                                rules.push('Subtractive notation: X before L or C (40, 90)');
                            }
                            if (romanStr.includes('CD') || romanStr.includes('CM')) {
                                rules.push('Subtractive notation: C before D or M (400, 900)');
                            }
                            
                            // Check for repetition
                            if (/I{2,3}/.test(romanStr)) {
                                rules.push('Repetition rule: I can be repeated up to 3 times');
                            }
                            if (/X{2,3}/.test(romanStr)) {
                                rules.push('Repetition rule: X can be repeated up to 3 times');
                            }
                            if (/C{2,3}/.test(romanStr)) {
                                rules.push('Repetition rule: C can be repeated up to 3 times');
                            }
                            if (/M+/.test(romanStr)) {
                                rules.push('Repetition rule: M can be repeated for thousands');
                            }
                            
                            return rules.length > 0 ? rules : ['Standard additive notation applied'];
                        }

                        function getHistoricalContext(decimal, context) {
                            const num = parseInt(decimal);
                            
                            switch (context) {
                                case 'historical':
                                    if (num >= 1000) {
                                        return `Large numbers like ${num} were used in Roman architecture and engineering projects. The Romans used various methods to represent numbers beyond 3999.`;
                                    } else if (num >= 100) {
                                        return `Numbers in the hundreds were commonly used in Roman commerce, military organization, and administrative records.`;
                                    } else {
                                        return `Smaller numbers like ${num} were used in daily Roman life for counting, trade, and basic arithmetic.`;
                                    }
                                    
                                case 'modern':
                                    if (num >= 2000) {
                                        return `Modern year ${num} - commonly seen in copyright dates, movie credits, and formal documents.`;
                                    } else if (num >= 1900) {
                                        return `20th century year ${num} - often used in historical contexts and commemorative inscriptions.`;
                                    } else if (num <= 12) {
                                        return `Number ${num} - commonly seen on clock faces and in chapter numbering systems.`;
                                    } else {
                                        return `Number ${num} - used in modern contexts like page numbering, outlines, and formal documentation.`;
                                    }
                                    
                                default:
                                    return `Roman numeral representation of ${num} following traditional conversion rules and symbol combinations.`;
                            }
                        }

                        function getUniqueSymbols(roman) {
                            return [...new Set(roman.split(''))].sort((a, b) => {
                                const order = ['M', 'D', 'C', 'L', 'X', 'V', 'I'];
                                return order.indexOf(a) - order.indexOf(b);
                            }).join(' ');
                        }

                        function updateInterface() {
                            const mode = getMode();
                            
                            if (mode === 'decimal-to-roman') {
                                inputLabel.textContent = 'Enter Decimal Number';
                                inputUnit.textContent = 'Decimal';
                                inputHelp.textContent = 'Enter a number between 1 and 3999';
                                resultTitle.textContent = 'Roman Numeral';
                                resultDescription.textContent = 'Converted to Roman';
                                inputValue.placeholder = 'Enter number (e.g., 1994)';
                            } else {
                                inputLabel.textContent = 'Enter Roman Numeral';
                                inputUnit.textContent = 'Roman';
                                inputHelp.textContent = 'Enter Roman numerals (I, V, X, L, C, D, M)';
                                resultTitle.textContent = 'Decimal Number';
                                resultDescription.textContent = 'Converted to decimal';
                                inputValue.placeholder = 'Enter Roman (e.g., MCMXCIV)';
                            }
                        }

                        function convert() {
                            const inputVal = inputValue.value.trim();
                            const mode = getMode();
                            const context = getContext();

                            if (!inputVal) {
                                clearOutputs();
                                return;
                            }

                            let decimal = 0;
                            let roman = '';
                            let isValid = false;
                            let conversionResult = null;

                            if (mode === 'decimal-to-roman') {
                                if (isValidDecimal(inputVal)) {
                                    decimal = parseInt(inputVal);
                                    conversionResult = decimalToRoman(decimal);
                                    roman = conversionResult.roman;
                                    isValid = true;
                                }
                            } else {
                                if (isValidRoman(inputVal)) {
                                    try {
                                        conversionResult = romanToDecimal(inputVal);
                                        decimal = conversionResult.decimal;
                                        roman = inputVal.toUpperCase().trim();
                                        isValid = true;
                                    } catch (e) {
                                        isValid = false;
                                    }
                                }
                            }

                            if (isValid && decimal >= 1 && decimal <= 3999) {
                                // Primary output
                                output.textContent = mode === 'decimal-to-roman' ? roman : decimal.toString();

                                // Update displays
                                decimalDisplay.textContent = decimal.toString();
                                romanDisplay.textContent = roman;

                                // Conversion breakdown
                                if (showBreakdown.checked && conversionResult) {
                                    breakdownDisplay.style.display = 'block';
                                    conversionSteps.innerHTML = conversionResult.steps.join('<br>');
                                } else {
                                    breakdownDisplay.style.display = 'none';
                                }

                                // Rules display
                                if (showRules.checked) {
                                    rulesDisplay.style.display = 'block';
                                    const rules = getConversionRules(roman, decimal);
                                    appliedRules.innerHTML = '• ' + rules.join('<br>• ');
                                } else {
                                    rulesDisplay.style.display = 'none';
                                }

                                // Symbol analysis
                                symbolsUsed.textContent = getUniqueSymbols(roman);
                                symbolLength.textContent = roman.length + ' characters';

                                // Historical context
                                contextInfo.textContent = getHistoricalContext(decimal, context);

                                // Modern usage
                                clockFormat.textContent = decimal <= 12 ? roman : 'N/A';
                                chapterFormat.textContent = `Chapter ${roman}`;
                                yearFormat.textContent = decimal >= 1000 ? `Year ${roman}` : 'N/A';

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
                            romanDisplay.textContent = '--';
                            conversionSteps.textContent = '--';
                            appliedRules.textContent = '--';
                            symbolsUsed.textContent = '--';
                            symbolLength.textContent = '--';
                            contextInfo.textContent = '--';
                            clockFormat.textContent = '--';
                            chapterFormat.textContent = '--';
                            yearFormat.textContent = '--';
                            breakdownDisplay.style.display = 'block';
                            rulesDisplay.style.display = 'block';
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

                        showBreakdown.addEventListener('change', convert);
                        showRules.addEventListener('change', convert);

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
                        const romanExamples = document.querySelectorAll('.roman-example');
                        romanExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                
                                // Set to decimal-to-roman mode
                                document.querySelector('input[value="decimal-to-roman"]').checked = true;
                                updateInterface();
                                
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                romanExamples.forEach(btn => btn.classList.remove('bg-indigo-100', 'text-indigo-700'));
                                romanExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-indigo-100', 'text-indigo-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                
                                // Set to decimal-to-roman mode
                                document.querySelector('input[value="decimal-to-roman"]').checked = true;
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
                                const newMode = currentMode === 'decimal-to-roman' ? 'roman-to-decimal' : 'decimal-to-roman';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                clearAll();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
