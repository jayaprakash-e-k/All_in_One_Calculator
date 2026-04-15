<x-tool-page-layout
    title="Crore to Lakh Converter - ConvertPro"
    description="Professional crore to lakh converter for Indian numbering system. Convert between crores, lakhs, thousands and other Indian number denominations."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Indian Number System Converter</h2>
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
                                                                                    <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer bg-indigo-50 border-indigo-300">
                                                                                        <input type="radio" name="mode" value="crore-to-lakh" class="text-indigo-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">Crore → Lakh</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="mode" value="lakh-to-crore" class="text-indigo-600 focus:ring-slate-200">
                                                                                        <span class="text-sm font-medium">Lakh → Crore</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Input Value -->
                                                                            <div class="space-y-2">
                                                                                <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                                                                    Enter Crores
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="inputValue" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                        placeholder="Enter value"
                                                                                        step="any"
                                                                                        min="0"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium" id="inputUnit">Crore</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500" id="inputHelp">Enter the number of crores to convert</p>
                                                                            </div>

                                                                            <div class="hidden" aria-hidden="true">
                                                                                <input type="radio" name="format" value="indian" checked>
                                                                                <input type="radio" name="format" value="international">
                                                                            </div>

                                                                            <!-- Precision Level -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Precision Level
                                                                                </label>
                                                                                <div class="grid grid-cols-4 gap-2">
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="precision" value="0" class="text-indigo-600 focus:ring-slate-200">
                                                                                        <span class="text-xs font-medium">Whole</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="precision" value="2" class="text-indigo-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-xs font-medium">2 decimals</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="precision" value="4" class="text-indigo-600 focus:ring-slate-200">
                                                                                        <span class="text-xs font-medium">4 decimals</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="precision" value="auto" class="text-indigo-600 focus:ring-slate-200">
                                                                                        <span class="text-xs font-medium">Auto</span>
                                                                                    </label>
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
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Results Display -->
                                                                        <div class="mt-8 space-y-4">
                                                                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Converted Values</h3>

                                                                            <!-- Primary Result -->
                                                                            <div class="p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border-l-4 border-indigo-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Lakhs</h4>
                                                                                        <p class="text-sm text-gray-600" id="result-description">Converted value</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-indigo-600 font-mono" id="output">--</div>
                                                                                        <button class="text-xs text-indigo-600 hover:text-indigo-800 mt-1" id="copyResult">Copy Result</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Indian System Display -->
                                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                                <!-- Crores -->
                                                                                <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Crores</h4>
                                                                                        <div class="text-lg font-bold text-blue-600 font-mono" id="croreDisplay">--</div>
                                                                                        <div class="text-xs text-gray-500 mt-1">10,000,000</div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Lakhs -->
                                                                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Lakhs</h4>
                                                                                        <div class="text-lg font-bold text-green-600 font-mono" id="lakhDisplay">--</div>
                                                                                        <div class="text-xs text-gray-500 mt-1">100,000</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                    </div>
                                    </div>
                                </div>
                            </div>
    

        <div class="mt-6 space-y-4">
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Indian Number System</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Cultural Context</h4>
                                    <p>The Indian numbering system is widely used in India, Pakistan, Bangladesh, and other South Asian countries. It follows a unique pattern where numbers are grouped differently than the Western system, with specific terms like Lakh and Crore.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Business Applications</h4>
                                    <p>Essential for financial transactions, real estate, salary negotiations, and business dealings in South Asia. Understanding both Indian and Western number systems is crucial for international business and investment.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                                <p class="text-sm text-indigo-800">
                                    <strong>Cultural Tip:</strong> In India, salaries and property prices are commonly expressed in Lakhs and Crores. 1 Crore = 100 Lakhs = 10 Million!
                                </p>
                            </div>
                        </div>

                        <!-- Real-World Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Real-World Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Common Indian Amounts</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-value="1">1 Crore</div>
                                        <div class="text-xs text-gray-600 mt-1">Luxury apartment price</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-value="50">50 Crores</div>
                                        <div class="text-xs text-gray-600 mt-1">Small business valuation</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Conversion Examples</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600">1 Crore = 100 Lakhs</div>
                                        <div class="text-xs text-gray-600 mt-1">Basic conversion ratio</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600">1 Crore = 10 Million</div>
                                        <div class="text-xs text-gray-600 mt-1">International equivalent</div>
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
                        const formatRadios = document.getElementsByName('format');
                        const precisionRadios = document.getElementsByName('precision');
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const croreDisplay = document.getElementById('croreDisplay');
                        const lakhDisplay = document.getElementById('lakhDisplay');
                        const thousandDisplay = document.getElementById('thousandDisplay');
                        const millionDisplay = document.getElementById('millionDisplay');
                        const billionDisplay = document.getElementById('billionDisplay');
                        const numberFormat = document.getElementById('numberFormat');
                        const numberWords = document.getElementById('numberWords');
                        const digitCount = document.getElementById('digitCount');
                        const indianFormat = document.getElementById('indianFormat');
                        const internationalFormat = document.getElementById('internationalFormat');
                        const copyResult = document.getElementById('copyResult');

                        function getPrecision() {
                            const selected = document.querySelector('input[name="precision"]:checked').value;
                            return selected === 'auto' ? 'auto' : parseInt(selected);
                        }

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getFormat() {
                            return document.querySelector('input[name="format"]:checked').value;
                        }

                        function formatNumber(num, precision = 'auto') {
                            if (precision === 'auto') {
                                if (num >= 1e12) {
                                    return num.toExponential(3);
                                } else if (num >= 1000) {
                                    return num.toLocaleString(undefined, { maximumFractionDigits: 2 });
                                } else if (num >= 1) {
                                    return num.toLocaleString(undefined, { maximumFractionDigits: 4 });
                                } else {
                                    return num.toLocaleString(undefined, { maximumFractionDigits: 6 });
                                }
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: precision });
                            }
                        }

                        function formatIndianNumber(num) {
                            const numStr = Math.floor(num).toString();
                            if (numStr.length <= 3) return numStr;
                            
                            let result = numStr.slice(-3);
                            let remaining = numStr.slice(0, -3);
                            
                            while (remaining.length > 0) {
                                if (remaining.length <= 2) {
                                    result = remaining + ',' + result;
                                    break;
                                } else {
                                    result = remaining.slice(-2) + ',' + result;
                                    remaining = remaining.slice(0, -2);
                                }
                            }
                            
                            return result;
                        }

                        function numberToWords(num) {
                            if (num >= 1e7) return `${(num/1e7).toFixed(1)} Crore`;
                            if (num >= 1e5) return `${(num/1e5).toFixed(1)} Lakh`;
                            if (num >= 1e3) return `${(num/1e3).toFixed(1)} Thousand`;
                            return num.toString();
                        }

                        function updateInterface() {
                            const mode = getMode();
                            const format = getFormat();
                            
                            numberFormat.textContent = format === 'indian' ? 'Indian' : 'International';
                            
                            if (mode === 'crore-to-lakh') {
                                inputLabel.textContent = 'Enter Crores';
                                inputUnit.textContent = 'Crore';
                                inputHelp.textContent = 'Enter the number of crores to convert';
                                resultTitle.textContent = 'Lakhs';
                                resultDescription.textContent = 'Converted to lakhs';
                            } else {
                                inputLabel.textContent = 'Enter Lakhs';
                                inputUnit.textContent = 'Lakh';
                                inputHelp.textContent = 'Enter the number of lakhs to convert';
                                resultTitle.textContent = 'Crores';
                                resultDescription.textContent = 'Converted to crores';
                            }
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const mode = getMode();
                            const precision = getPrecision();

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                let crores, lakhs, thousands, millions, billions;

                                if (mode === 'crore-to-lakh') {
                                    crores = inputVal;
                                    lakhs = crores * 100;
                                    thousands = lakhs * 100;
                                    millions = crores * 10;
                                    billions = crores / 100;
                                    
                                    output.textContent = formatNumber(lakhs, precision);
                                } else {
                                    lakhs = inputVal;
                                    crores = lakhs / 100;
                                    thousands = lakhs * 100;
                                    millions = lakhs / 10;
                                    billions = lakhs / 1000;
                                    
                                    output.textContent = formatNumber(crores, precision);
                                }

                                // Update all displays
                                croreDisplay.textContent = formatNumber(crores, precision);
                                lakhDisplay.textContent = formatNumber(lakhs, precision);
                                thousandDisplay.textContent = formatNumber(thousands, precision);
                                millionDisplay.textContent = formatNumber(millions, precision);
                                billionDisplay.textContent = formatNumber(billions, precision);
                                
                                // Number information
                                const totalValue = crores * 1e7;
                                numberWords.textContent = numberToWords(totalValue);
                                digitCount.textContent = totalValue.toString().replace(/[^0-9]/g, '').length;
                                
                                // Formatted displays
                                indianFormat.textContent = formatIndianNumber(totalValue);
                                internationalFormat.textContent = totalValue.toLocaleString();

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            croreDisplay.textContent = '--';
                            lakhDisplay.textContent = '--';
                            thousandDisplay.textContent = '--';
                            millionDisplay.textContent = '--';
                            billionDisplay.textContent = '--';
                            numberWords.textContent = '--';
                            digitCount.textContent = '--';
                            indianFormat.textContent = '--';
                            internationalFormat.textContent = '--';
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
                                convert();
                            });
                        });

                        formatRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateInterface();
                                convert();
                            });
                        });

                        precisionRadios.forEach(radio => {
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

                        // Quick value buttons
                        const quickValues = document.querySelectorAll('.quick-value');
                        quickValues.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                quickValues.forEach(btn => btn.classList.remove('bg-indigo-100', 'text-indigo-700'));
                                quickValues.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-indigo-100', 'text-indigo-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-value]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                inputValue.value = value;
                                convert();
                                inputValue.focus();
                            });
                        });

                        // Initialize
                        updateInterface();
                        inputValue.focus();
                        convert();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearAll();
                            } else if (e.ctrlKey && (e.key || '').toLowerCase() === 'm') {
                                e.preventDefault();
                                const currentMode = getMode();
                                const newMode = currentMode === 'crore-to-lakh' ? 'lakh-to-crore' : 'crore-to-lakh';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                convert();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
