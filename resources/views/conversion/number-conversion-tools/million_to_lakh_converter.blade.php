<x-tool-page-layout
    title="Million to Lakh Converter - ConvertPro"
    description="Professional million to lakh converter for cross-cultural business. Convert between Western millions and Indian lakhs with precision."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-rose-500 to-rose-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Cross-Cultural Number System Converter</h2>
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
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer bg-rose-50 border-rose-300">
                                                <input type="radio" name="mode" value="million-to-lakh" class="text-rose-600 focus:ring-rose-500" checked>
                                                <span class="text-sm font-medium">Million → Lakh</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="mode" value="lakh-to-million" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-sm font-medium">Lakh → Million</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                            Enter Millions
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:ring-2 focus:ring-rose-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter value"
                                                step="any"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">Million</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500" id="inputHelp">Enter the number of millions to convert to lakhs</p>
                                    </div>

                                    <!-- Regional Context -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Regional Business Context
                                        </label>
                                        <select 
                                            id="region" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:ring-2 focus:ring-rose-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="global">Global Business</option>
                                            <option value="usa-india">USA-India Trade</option>
                                            <option value="uk-india">UK-India Trade</option>
                                            <option value="singapore-india">Singapore-India</option>
                                            <option value="uae-india">UAE-India</option>
                                            <option value="australia-india">Australia-India</option>
                                            <option value="canada-india">Canada-India</option>
                                        </select>
                                    </div>

                                    <!-- Business Application -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Business Application
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="application" value="investment" class="text-rose-600 focus:ring-rose-500" checked>
                                                <span class="text-sm font-medium">Investment</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="application" value="revenue" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-sm font-medium">Revenue</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="application" value="valuation" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-sm font-medium">Valuation</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="application" value="salary" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-sm font-medium">Salary/HR</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Currency Display -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Currency Display
                                        </label>
                                        <div class="grid grid-cols-3 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="currency" value="none" class="text-rose-600 focus:ring-rose-500" checked>
                                                <span class="text-xs font-medium">No Currency</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="currency" value="USD-INR" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-xs font-medium">USD-INR</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="currency" value="GBP-INR" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-xs font-medium">GBP-INR</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Precision Level -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Precision Level
                                        </label>
                                        <div class="grid grid-cols-4 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="1" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-xs font-medium">1 decimal</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="2" class="text-rose-600 focus:ring-rose-500" checked>
                                                <span class="text-xs font-medium">2 decimals</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="3" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-xs font-medium">3 decimals</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-rose-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="auto" class="text-rose-600 focus:ring-rose-500">
                                                <span class="text-xs font-medium">Auto</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Cross-Cultural Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Cross-Cultural Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="cultural-example px-3 py-2 text-sm bg-gray-100 hover:bg-rose-100 text-gray-700 hover:text-rose-700 rounded-lg transition-colors" data-value="1" data-context="Startup fund">$1M</button>
                                            <button type="button" class="cultural-example px-3 py-2 text-sm bg-gray-100 hover:bg-rose-100 text-gray-700 hover:text-rose-700 rounded-lg transition-colors" data-value="5" data-context="Series A">$5M</button>
                                            <button type="button" class="cultural-example px-3 py-2 text-sm bg-gray-100 hover:bg-rose-100 text-gray-700 hover:text-rose-700 rounded-lg transition-colors" data-value="10" data-context="Series B">$10M</button>
                                            <button type="button" class="cultural-example px-3 py-2 text-sm bg-gray-100 hover:bg-rose-100 text-gray-700 hover:text-rose-700 rounded-lg transition-colors" data-value="50" data-context="Growth fund">$50M</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-rose-100 hover:bg-rose-200 text-rose-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Cross-System Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-rose-50 to-pink-50 rounded-xl border-l-4 border-rose-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Lakhs</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted value</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-rose-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-rose-600 hover:text-rose-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- System Comparison -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Western System -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-2">Western System</h4>
                                                <div class="space-y-1">
                                                    <div class="text-lg font-bold text-blue-600 font-mono" id="millionDisplay">--</div>
                                                    <div class="text-xs text-gray-500">Millions</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Indian System -->
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-2">Indian System</h4>
                                                <div class="space-y-1">
                                                    <div class="text-lg font-bold text-green-600 font-mono" id="lakhDisplay">--</div>
                                                    <div class="text-xs text-gray-500">Lakhs</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Extended Denominations -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <!-- Thousands -->
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Thousands</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="thousandDisplay">--</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Crores -->
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Crores</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="croreDisplay">--</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Billions -->
                                        <div class="p-4 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border-l-4 border-cyan-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Billions</h4>
                                                <div class="text-lg font-bold text-cyan-600 font-mono" id="billionDisplay">--</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Currency Conversion Display -->
                                    <div class="p-4 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border border-yellow-200" id="currencyDisplay" style="display: none;">
                                        <h4 class="text-sm font-semibold text-yellow-800 mb-2 text-center">Currency Context</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                            <div class="text-center">
                                                <span class="text-gray-600 block">Western Format:</span>
                                                <span class="font-mono text-yellow-700 text-lg" id="westernCurrency">--</span>
                                            </div>
                                            <div class="text-center">
                                                <span class="text-gray-600 block">Indian Format:</span>
                                                <span class="font-mono text-yellow-700 text-lg" id="indianCurrency">--</span>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Conversion Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Cross-Cultural Number Reference</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 Million = 10 Lakh</div>
                                        <div>• 1 Lakh = 0.1 Million = 100,000</div>
                                        <div>• 1 Million = 1,000,000 (Western)</div>
                                        <div>• 1 Lakh = 1,00,000 (Indian)</div>
                                        <div>• 10 Lakh = 1 Million = 0.1 Crore</div>
                                        <div>• Cross-cultural business communication essential</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Cross-Cultural Number Systems</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">International Business</h4>
                                    <p>Critical for cross-border business communications, international investments, and multicultural team collaborations. Understanding both systems prevents miscommunication and builds trust with stakeholders from different regions.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Cultural Sensitivity</h4>
                                    <p>Using the appropriate number system shows cultural awareness and professionalism. Indian stakeholders prefer Lakh/Crore terminology, while Western partners expect Million/Billion format for clarity.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-rose-50 rounded-lg border border-rose-200">
                                <p class="text-sm text-rose-800">
                                    <strong>Communication Tip:</strong> In presentations, show both formats: "₹50 Lakhs (USD $600K)" to ensure all stakeholders understand the scale clearly!
                                </p>
                            </div>
                        </div>

                        <!-- Regional Business Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Regional Business Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Indian Market Context</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-rose-600 cursor-pointer hover:text-rose-800" data-example="1">₹10 Lakhs</div>
                                        <div class="text-xs text-gray-600 mt-1">= $1M startup funding round</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-rose-600 cursor-pointer hover:text-rose-800" data-example="5">₹50 Lakhs</div>
                                        <div class="text-xs text-gray-600 mt-1">= $5M Series A funding</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Western Market Context</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-rose-600 cursor-pointer hover:text-rose-800" data-example="10">$10 Million</div>
                                        <div class="text-xs text-gray-600 mt-1">= ₹100 Lakhs Series B</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-rose-600 cursor-pointer hover:text-rose-800" data-example="50">$50 Million</div>
                                        <div class="text-xs text-gray-600 mt-1">= ₹500 Lakhs growth fund</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputValue = document.getElementById('inputValue');
                        const region = document.getElementById('region');
                        const modeRadios = document.getElementsByName('mode');
                        const applicationRadios = document.getElementsByName('application');
                        const currencyRadios = document.getElementsByName('currency');
                        const precisionRadios = document.getElementsByName('precision');
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const millionDisplay = document.getElementById('millionDisplay');
                        const lakhDisplay = document.getElementById('lakhDisplay');
                        const thousandDisplay = document.getElementById('thousandDisplay');
                        const croreDisplay = document.getElementById('croreDisplay');
                        const billionDisplay = document.getElementById('billionDisplay');
                        const currencyDisplay = document.getElementById('currencyDisplay');
                        const westernCurrency = document.getElementById('westernCurrency');
                        const indianCurrency = document.getElementById('indianCurrency');
                        const regionDisplay = document.getElementById('regionDisplay');
                        const applicationDisplay = document.getElementById('applicationDisplay');
                        const conversionRatio = document.getElementById('conversionRatio');
                        const westernTip = document.getElementById('westernTip');
                        const indianTip = document.getElementById('indianTip');
                        const internationalFormat = document.getElementById('internationalFormat');
                        const indianFormat = document.getElementById('indianFormat');
                        const copyResult = document.getElementById('copyResult');

                        // Currency symbols
                        const currencySymbols = {
                            'none': { western: '', indian: '' },
                            'USD-INR': { western: '$', indian: '₹' },
                            'GBP-INR': { western: '£', indian: '₹' }
                        };

                        // Regional contexts
                        const regionalContexts = {
                            'global': 'Global Business',
                            'usa-india': 'USA-India Trade',
                            'uk-india': 'UK-India Trade',
                            'singapore-india': 'Singapore-India',
                            'uae-india': 'UAE-India',
                            'australia-india': 'Australia-India',
                            'canada-india': 'Canada-India'
                        };

                        function getPrecision() {
                            const selected = document.querySelector('input[name="precision"]:checked').value;
                            return selected === 'auto' ? 'auto' : parseInt(selected);
                        }

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getApplication() {
                            return document.querySelector('input[name="application"]:checked').value;
                        }

                        function getCurrency() {
                            return document.querySelector('input[name="currency"]:checked').value;
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

                        function updateCommunicationTips(application, millions) {
                            const lakhs = millions * 10;
                            
                            switch(application) {
                                case 'investment':
                                    westernTip.textContent = `Present as "$${millions}M Series A funding"`;
                                    indianTip.textContent = `Present as "₹${lakhs} Lakh investment round"`;
                                    break;
                                case 'revenue':
                                    westernTip.textContent = `Report as "$${millions}M annual revenue"`;
                                    indianTip.textContent = `Report as "₹${lakhs} Lakh yearly turnover"`;
                                    break;
                                case 'valuation':
                                    westernTip.textContent = `Value at "$${millions}M company worth"`;
                                    indianTip.textContent = `Value at "₹${lakhs} Lakh company valuation"`;
                                    break;
                                case 'salary':
                                    westernTip.textContent = `Package of "$${millions}M total compensation"`;
                                    indianTip.textContent = `Package of "₹${lakhs} Lakh CTC per annum"`;
                                    break;
                                default:
                                    westernTip.textContent = 'Use Million format for clarity';
                                    indianTip.textContent = 'Use Lakh/Crore format for familiarity';
                            }
                        }

                        function updateInterface() {
                            const mode = getMode();
                            const selectedRegion = region.value;
                            const selectedApplication = getApplication();
                            const selectedCurrency = getCurrency();
                            
                            // Update displays
                            regionDisplay.textContent = regionalContexts[selectedRegion] || 'Global';
                            applicationDisplay.textContent = selectedApplication.charAt(0).toUpperCase() + selectedApplication.slice(1);
                            
                            // Show/hide currency display
                            currencyDisplay.style.display = selectedCurrency !== 'none' ? 'block' : 'none';
                            
                            if (mode === 'million-to-lakh') {
                                inputLabel.textContent = 'Enter Millions';
                                inputUnit.textContent = 'Million';
                                inputHelp.textContent = 'Enter the number of millions to convert to lakhs';
                                resultTitle.textContent = 'Lakhs';
                                resultDescription.textContent = 'Converted to lakhs';
                                conversionRatio.textContent = '1M = 10L';
                            } else {
                                inputLabel.textContent = 'Enter Lakhs';
                                inputUnit.textContent = 'Lakh';
                                inputHelp.textContent = 'Enter the number of lakhs to convert to millions';
                                resultTitle.textContent = 'Millions';
                                resultDescription.textContent = 'Converted to millions';
                                conversionRatio.textContent = '10L = 1M';
                            }
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const mode = getMode();
                            const precision = getPrecision();
                            const selectedCurrency = getCurrency();
                            const selectedApplication = getApplication();

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                let millions, lakhs, thousands, crores, billions;

                                if (mode === 'million-to-lakh') {
                                    millions = inputVal;
                                    lakhs = millions * 10;
                                    thousands = millions * 1000;
                                    crores = millions / 10;
                                    billions = millions / 1000;
                                    
                                    output.textContent = formatNumber(lakhs, precision);
                                } else {
                                    lakhs = inputVal;
                                    millions = lakhs / 10;
                                    thousands = lakhs * 100;
                                    crores = lakhs / 100;
                                    billions = millions / 1000;
                                    
                                    output.textContent = formatNumber(millions, precision);
                                }

                                // Update all displays
                                millionDisplay.textContent = formatNumber(millions, precision);
                                lakhDisplay.textContent = formatNumber(lakhs, precision);
                                thousandDisplay.textContent = formatNumber(thousands, precision);
                                croreDisplay.textContent = formatNumber(crores, precision);
                                billionDisplay.textContent = formatNumber(billions, precision);
                                
                                // Currency displays
                                if (selectedCurrency !== 'none') {
                                    const symbols = currencySymbols[selectedCurrency];
                                    westernCurrency.textContent = `${symbols.western}${formatNumber(millions, precision)} M`;
                                    indianCurrency.textContent = `${symbols.indian}${formatNumber(lakhs, precision)} L`;
                                }
                                
                                // Formatted displays
                                const totalValue = millions * 1e6;
                                internationalFormat.textContent = totalValue.toLocaleString();
                                indianFormat.textContent = formatIndianNumber(totalValue);
                                
                                // Update communication tips
                                updateCommunicationTips(selectedApplication, millions);

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            millionDisplay.textContent = '--';
                            lakhDisplay.textContent = '--';
                            thousandDisplay.textContent = '--';
                            croreDisplay.textContent = '--';
                            billionDisplay.textContent = '--';
                            westernCurrency.textContent = '--';
                            indianCurrency.textContent = '--';
                            internationalFormat.textContent = '--';
                            indianFormat.textContent = '--';
                            westernTip.textContent = 'Use Million format for clarity';
                            indianTip.textContent = 'Use Lakh/Crore format for familiarity';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            region.value = 'global';
                            document.querySelector('input[name="currency"][value="none"]').checked = true;
                            clearOutputs();
                            updateInterface();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        region.addEventListener('change', () => {
                            updateInterface();
                            convert();
                        });
                        
                        modeRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateInterface();
                                convert();
                            });
                        });

                        applicationRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateInterface();
                                convert();
                            });
                        });

                        currencyRadios.forEach(radio => {
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

                        // Cultural example buttons
                        const culturalExamples = document.querySelectorAll('.cultural-example');
                        culturalExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const context = this.getAttribute('data-context');
                                
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                culturalExamples.forEach(btn => btn.classList.remove('bg-rose-100', 'text-rose-700'));
                                culturalExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-rose-100', 'text-rose-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
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
                            } else if (e.ctrlKey && e.key === 'm') {
                                e.preventDefault();
                                const currentMode = getMode();
                                const newMode = currentMode === 'million-to-lakh' ? 'lakh-to-million' : 'million-to-lakh';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                convert();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
