<x-tool-page-layout
    title="Million to Thousand Converter - ConvertPro"
    description="Professional million to thousand converter for financial calculations. Convert between millions, thousands and smaller number denominations with precision."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-teal-500 to-teal-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Scale-Down Number Converter</h2>
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
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer bg-teal-50 border-teal-300">
                                                <input type="radio" name="mode" value="million-to-thousand" class="text-teal-600 focus:ring-teal-500" checked>
                                                <span class="text-sm font-medium">Million → Thousand</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                                <input type="radio" name="mode" value="thousand-to-million" class="text-teal-600 focus:ring-teal-500">
                                                <span class="text-sm font-medium">Thousand → Million</span>
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
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter value"
                                                step="any"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">Million</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500" id="inputHelp">Enter the number of millions to convert</p>
                                    </div>

                                    <!-- Financial Category -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Financial Category
                                        </label>
                                        <select 
                                            id="category" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-500 focus:ring-2 focus:ring-teal-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="general">General Numbers</option>
                                            <option value="budget">Budget Planning</option>
                                            <option value="salary">Salary & Compensation</option>
                                            <option value="investment">Investment Amount</option>
                                            <option value="revenue">Revenue & Sales</option>
                                            <option value="cost">Cost Analysis</option>
                                            <option value="loan">Loan & Financing</option>
                                            <option value="insurance">Insurance Coverage</option>
                                        </select>
                                    </div>

                                    <!-- Output Format -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Output Format
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                                <input type="radio" name="format" value="detailed" class="text-teal-600 focus:ring-teal-500" checked>
                                                <span class="text-sm font-medium">Detailed Breakdown</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                                <input type="radio" name="format" value="simple" class="text-teal-600 focus:ring-teal-500">
                                                <span class="text-sm font-medium">Simple Display</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Precision Level -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Precision Level
                                        </label>
                                        <div class="grid grid-cols-4 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="0" class="text-teal-600 focus:ring-teal-500">
                                                <span class="text-xs font-medium">Whole</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="2" class="text-teal-600 focus:ring-teal-500" checked>
                                                <span class="text-xs font-medium">2 decimals</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="3" class="text-teal-600 focus:ring-teal-500">
                                                <span class="text-xs font-medium">3 decimals</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-teal-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="auto" class="text-teal-600 focus:ring-teal-500">
                                                <span class="text-xs font-medium">Auto</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Financial Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Common Financial Values
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="financial-value px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-value="1" data-context="Small business">1M</button>
                                            <button type="button" class="financial-value px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-value="2.5" data-context="Home mortgage">2.5M</button>
                                            <button type="button" class="financial-value px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-value="5" data-context="Investment fund">5M</button>
                                            <button type="button" class="financial-value px-3 py-2 text-sm bg-gray-100 hover:bg-teal-100 text-gray-700 hover:text-teal-700 rounded-lg transition-colors" data-value="10" data-context="Corporate budget">10M</button>
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Scale Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl border-l-4 border-teal-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Thousands</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted value</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-teal-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-teal-600 hover:text-teal-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Scale Hierarchy Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Millions -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Millions</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="millionDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁶</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Thousands -->
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Thousands</h4>
                                                <div class="text-lg font-bold text-green-600 font-mono" id="thousandDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10³</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Complete Scale Breakdown -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <!-- Hundreds -->
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Hundreds</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="hundredDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10²</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Tens -->
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Tens</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="tenDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10¹</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Units -->
                                        <div class="p-4 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border-l-4 border-cyan-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Units</h4>
                                                <div class="text-lg font-bold text-cyan-600 font-mono" id="unitDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁰</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Higher Scale Context -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Billions -->
                                        <div class="p-4 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border-l-4 border-yellow-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Billions</h4>
                                                <div class="text-lg font-bold text-yellow-600 font-mono" id="billionDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁹</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Scientific Notation -->
                                        <div class="p-4 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Scientific</h4>
                                                <div class="text-lg font-bold text-pink-600 font-mono" id="scientificDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">Exponential</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Conversion Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Scale Conversion Reference</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 Million = 1,000 Thousand</div>
                                        <div>• 1 Thousand = 0.001 Million</div>
                                        <div>• 1 Million = 1,000,000 Units</div>
                                        <div>• 1 Thousand = 1,000 Units</div>
                                        <div>• Scale down: Divide by 1,000</div>
                                        <div>• Scale up: Multiply by 1,000</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Million to Thousand Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Financial Planning</h4>
                                    <p>Essential for budget breakdowns, expense planning, and financial analysis. Converting millions to thousands helps in detailed planning, departmental budgets, and making large numbers more comprehensible for operational teams.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Business Applications</h4>
                                    <p>Critical for project management, resource allocation, and financial reporting. Understanding different scales helps in effective communication with various stakeholders and precise financial planning.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-teal-50 rounded-lg border border-teal-200">
                                <p class="text-sm text-teal-800">
                                    <strong>Planning Tip:</strong> When budgeting, break down millions into thousands for departmental allocation. $1M = 1,000 units of $1K each for easier management!
                                </p>
                            </div>
                        </div>

                        <!-- Financial Context Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Financial Context Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Business Operations</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-example="5">$5 Million Budget</div>
                                        <div class="text-xs text-gray-600 mt-1">= 5,000 thousand-dollar units</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-example="10">$10 Million Project</div>
                                        <div class="text-xs text-gray-600 mt-1">= 10,000 thousand-dollar allocations</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Investment Planning</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-example="2.5">$2.5 Million Fund</div>
                                        <div class="text-xs text-gray-600 mt-1">= 2,500 thousand-dollar investments</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-teal-600 cursor-pointer hover:text-teal-800" data-example="1">$1 Million Portfolio</div>
                                        <div class="text-xs text-gray-600 mt-1">= 1,000 thousand-dollar positions</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputValue = document.getElementById('inputValue');
                        const category = document.getElementById('category');
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
                        const millionDisplay = document.getElementById('millionDisplay');
                        const thousandDisplay = document.getElementById('thousandDisplay');
                        const hundredDisplay = document.getElementById('hundredDisplay');
                        const tenDisplay = document.getElementById('tenDisplay');
                        const unitDisplay = document.getElementById('unitDisplay');
                        const billionDisplay = document.getElementById('billionDisplay');
                        const scientificDisplay = document.getElementById('scientificDisplay');
                        const categoryDisplay = document.getElementById('categoryDisplay');
                        const scaleFactor = document.getElementById('scaleFactor');
                        const magnitude = document.getElementById('magnitude');
                        const budgetingTip = document.getElementById('budgetingTip');
                        const communicationTip = document.getElementById('communicationTip');
                        const standardFormat = document.getElementById('standardFormat');
                        const commaFormat = document.getElementById('commaFormat');
                        const copyResult = document.getElementById('copyResult');

                        // Category descriptions
                        const categoryDescriptions = {
                            'general': 'General Numbers',
                            'budget': 'Budget Planning',
                            'salary': 'Salary & Compensation',
                            'investment': 'Investment Amount',
                            'revenue': 'Revenue & Sales',
                            'cost': 'Cost Analysis',
                            'loan': 'Loan & Financing',
                            'insurance': 'Insurance Coverage'
                        };

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
                                if (num >= 1e15) {
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

                        function getMagnitude(num) {
                            if (num >= 1e9) return 'Billion Scale';
                            if (num >= 1e6) return 'Million Scale';
                            if (num >= 1e3) return 'Thousand Scale';
                            if (num >= 1e2) return 'Hundred Scale';
                            if (num >= 10) return 'Ten Scale';
                            return 'Unit Scale';
                        }

                        function updateApplicationTips(selectedCategory, millions) {
                            const thousands = millions * 1000;
                            
                            switch(selectedCategory) {
                                case 'budget':
                                    budgetingTip.textContent = `Allocate ${thousands}K across departments and projects`;
                                    communicationTip.textContent = `Present as "${thousands} thousand-dollar budget items"`;
                                    break;
                                case 'salary':
                                    budgetingTip.textContent = `Plan for ${thousands} positions at $1K average cost`;
                                    communicationTip.textContent = `Discuss as "salary budget of ${thousands}K total"`;
                                    break;
                                case 'investment':
                                    budgetingTip.textContent = `Divide ${millions}M into ${thousands} investment units`;
                                    communicationTip.textContent = `Structure as "${thousands} thousand-dollar investments"`;
                                    break;
                                case 'revenue':
                                    budgetingTip.textContent = `Target ${thousands}K in thousand-dollar revenue chunks`;
                                    communicationTip.textContent = `Report as "${thousands} thousand-dollar sales"`;
                                    break;
                                default:
                                    budgetingTip.textContent = 'Break down large amounts into manageable units';
                                    communicationTip.textContent = 'Use appropriate scale for audience understanding';
                            }
                        }

                        function updateInterface() {
                            const mode = getMode();
                            const selectedCategory = category.value;
                            
                            categoryDisplay.textContent = categoryDescriptions[selectedCategory] || 'General';
                            
                            if (mode === 'million-to-thousand') {
                                inputLabel.textContent = 'Enter Millions';
                                inputUnit.textContent = 'Million';
                                inputHelp.textContent = 'Enter the number of millions to convert';
                                resultTitle.textContent = 'Thousands';
                                resultDescription.textContent = 'Converted to thousands';
                                scaleFactor.textContent = '1:1000';
                            } else {
                                inputLabel.textContent = 'Enter Thousands';
                                inputUnit.textContent = 'Thousand';
                                inputHelp.textContent = 'Enter the number of thousands to convert';
                                resultTitle.textContent = 'Millions';
                                resultDescription.textContent = 'Converted to millions';
                                scaleFactor.textContent = '1000:1';
                            }
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const mode = getMode();
                            const precision = getPrecision();
                            const selectedCategory = category.value;

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                let millions, thousands, hundreds, tens, units, billions;

                                if (mode === 'million-to-thousand') {
                                    millions = inputVal;
                                    thousands = millions * 1000;
                                    hundreds = thousands * 10;
                                    tens = hundreds * 10;
                                    units = tens * 10;
                                    billions = millions / 1000;
                                    
                                    output.textContent = formatNumber(thousands, precision);
                                } else {
                                    thousands = inputVal;
                                    millions = thousands / 1000;
                                    hundreds = thousands * 10;
                                    tens = hundreds * 10;
                                    units = tens * 10;
                                    billions = millions / 1000;
                                    
                                    output.textContent = formatNumber(millions, precision);
                                }

                                // Update all displays
                                millionDisplay.textContent = formatNumber(millions, precision);
                                thousandDisplay.textContent = formatNumber(thousands, precision);
                                hundredDisplay.textContent = formatNumber(hundreds, precision);
                                tenDisplay.textContent = formatNumber(tens, precision);
                                unitDisplay.textContent = formatNumber(units, precision);
                                billionDisplay.textContent = formatNumber(billions, precision);
                                
                                // Scientific notation
                                const baseValue = millions * 1e6;
                                scientificDisplay.textContent = baseValue.toExponential(3);
                                
                                // Analysis
                                magnitude.textContent = getMagnitude(baseValue);
                                
                                // Formatting
                                standardFormat.textContent = baseValue.toString();
                                commaFormat.textContent = baseValue.toLocaleString();
                                
                                // Update application tips
                                updateApplicationTips(selectedCategory, millions);

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            millionDisplay.textContent = '--';
                            thousandDisplay.textContent = '--';
                            hundredDisplay.textContent = '--';
                            tenDisplay.textContent = '--';
                            unitDisplay.textContent = '--';
                            billionDisplay.textContent = '--';
                            scientificDisplay.textContent = '--';
                            magnitude.textContent = '--';
                            standardFormat.textContent = '--';
                            commaFormat.textContent = '--';
                            budgetingTip.textContent = 'Break down large amounts into manageable units';
                            communicationTip.textContent = 'Use appropriate scale for audience understanding';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            category.value = 'general';
                            clearOutputs();
                            updateInterface();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        category.addEventListener('change', () => {
                            updateInterface();
                            convert();
                        });
                        
                        modeRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateInterface();
                                convert();
                            });
                        });

                        formatRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
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

                        // Financial value buttons
                        const financialValues = document.querySelectorAll('.financial-value');
                        financialValues.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const context = this.getAttribute('data-context');
                                
                                inputValue.value = value;
                                convert();
                                
                                // Update button styles
                                financialValues.forEach(btn => btn.classList.remove('bg-teal-100', 'text-teal-700'));
                                financialValues.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-teal-100', 'text-teal-700');
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
                                const newMode = currentMode === 'million-to-thousand' ? 'thousand-to-million' : 'million-to-thousand';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                convert();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
