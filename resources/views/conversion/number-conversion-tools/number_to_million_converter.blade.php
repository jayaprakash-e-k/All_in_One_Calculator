<x-tool-page-layout
    title="Number to Million Converter - ConvertPro"
    description="Professional number to million converter for medium scale analysis. Convert any number to millions and understand its magnitude in business and everyday contexts."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-amber-500 to-amber-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Million-Scale Analysis Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Number -->
                                    <div class="space-y-2">
                                        <label for="inputNumber" class="block text-sm font-semibold text-gray-700">
                                            Enter Any Number
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputNumber" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium" 
                                                placeholder="Enter any number (e.g., 5000000)"
                                                step="any"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">Number</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500">Enter any positive or negative number</p>
                                    </div>

                                    <!-- Application Domain -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Application Domain
                                        </label>
                                        <select 
                                            id="domain" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="general">General Numbers</option>
                                            <option value="business">Business & Finance</option>
                                            <option value="real-estate">Real Estate</option>
                                            <option value="population">Population & Demographics</option>
                                            <option value="sales">Sales & Revenue</option>
                                            <option value="investment">Investment & Assets</option>
                                            <option value="technology">Technology & Data</option>
                                            <option value="manufacturing">Manufacturing & Production</option>
                                            <option value="healthcare">Healthcare & Medical</option>
                                            <option value="education">Education & Research</option>
                                        </select>
                                    </div>

                                    <!-- Comparison Baseline -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Comparison Baseline
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer bg-amber-50 border-amber-300">
                                                <input type="radio" name="baseline" value="relative" class="text-amber-600 focus:ring-amber-500" checked>
                                                <span class="text-sm font-medium">Relative Scale</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer">
                                                <input type="radio" name="baseline" value="absolute" class="text-amber-600 focus:ring-amber-500">
                                                <span class="text-sm font-medium">Absolute Scale</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Analysis Detail Level -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Analysis Detail Level
                                        </label>
                                        <div class="grid grid-cols-3 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer">
                                                <input type="radio" name="detailLevel" value="basic" class="text-amber-600 focus:ring-amber-500">
                                                <span class="text-sm font-medium">Basic</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer">
                                                <input type="radio" name="detailLevel" value="detailed" class="text-amber-600 focus:ring-amber-500" checked>
                                                <span class="text-sm font-medium">Detailed</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer">
                                                <input type="radio" name="detailLevel" value="comprehensive" class="text-amber-600 focus:ring-amber-500">
                                                <span class="text-sm font-medium">Comprehensive</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Precision Level -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Precision Level
                                        </label>
                                        <div class="grid grid-cols-4 gap-2">
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="1" class="text-amber-600 focus:ring-amber-500">
                                                <span class="text-xs font-medium">1 decimal</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="3" class="text-amber-600 focus:ring-amber-500" checked>
                                                <span class="text-xs font-medium">3 decimals</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="6" class="text-amber-600 focus:ring-amber-500">
                                                <span class="text-xs font-medium">6 decimals</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-amber-300 transition-colors cursor-pointer">
                                                <input type="radio" name="precision" value="auto" class="text-amber-600 focus:ring-amber-500">
                                                <span class="text-xs font-medium">Auto</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Domain-Specific Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Domain Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="domain-example px-3 py-2 text-sm bg-gray-100 hover:bg-amber-100 text-gray-700 hover:text-amber-700 rounded-lg transition-colors" data-value="1000000" data-context="1M units">1M</button>
                                            <button type="button" class="domain-example px-3 py-2 text-sm bg-gray-100 hover:bg-amber-100 text-gray-700 hover:text-amber-700 rounded-lg transition-colors" data-value="5000000" data-context="5M budget">5M</button>
                                            <button type="button" class="domain-example px-3 py-2 text-sm bg-gray-100 hover:bg-amber-100 text-gray-700 hover:text-amber-700 rounded-lg transition-colors" data-value="250000" data-context="Home price">250K</button>
                                            <button type="button" class="domain-example px-3 py-2 text-sm bg-gray-100 hover:bg-amber-100 text-gray-700 hover:text-amber-700 rounded-lg transition-colors" data-value="75000" data-context="Annual salary">75K</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-amber-100 hover:bg-amber-200 text-amber-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Million-Scale Analysis Results</h3>
                                    
                                    <!-- Primary Result - Millions -->
                                    <div class="p-6 bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl border-l-4 border-amber-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1">In Millions</h4>
                                                <p class="text-sm text-gray-600">Primary conversion result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-amber-600 font-mono" id="millionOutput">--</div>
                                                <button class="text-xs text-amber-600 hover:text-amber-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Scale Hierarchy Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <!-- Thousands -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Thousands</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="thousandDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10³</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Millions -->
                                        <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Millions</h4>
                                                <div class="text-lg font-bold text-green-600 font-mono" id="millionDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁶</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Billions -->
                                        <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Billions</h4>
                                                <div class="text-lg font-bold text-purple-600 font-mono" id="billionDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁹</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Smaller Scale Breakdown -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <!-- Hundreds -->
                                        <div class="p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Hundreds</h4>
                                                <div class="text-lg font-bold text-orange-600 font-mono" id="hundredDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10²</div>
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
                                        
                                        <!-- Scientific -->
                                        <div class="p-4 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border-l-4 border-yellow-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Scientific</h4>
                                                <div class="text-lg font-bold text-yellow-600 font-mono" id="scientificDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">Exponential</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Cross-Cultural Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Indian System -->
                                        <div class="p-4 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Lakhs (Indian)</h4>
                                                <div class="text-lg font-bold text-pink-600 font-mono" id="lakhDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁵</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Crores -->
                                        <div class="p-4 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Crores (Indian)</h4>
                                                <div class="text-lg font-bold text-teal-600 font-mono" id="croreDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁷</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Million Scale Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Million Scale Reference</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs text-gray-600">
                                        <div>• 1 Million = 1,000 Thousand = 10⁶</div>
                                        <div>• 1 Million = 1,000,000 units</div>
                                        <div>• 1 Million = 10 Lakh (Indian)</div>
                                        <div>• 1 Million = 0.1 Crore (Indian)</div>
                                        <div>• To convert to millions: divide by 1,000,000</div>
                                        <div>• Million scale: Business, real estate, salaries</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Million-Scale Analysis</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Business Applications</h4>
                                    <p>Million-scale analysis is crucial for business planning, budgeting, sales targets, and financial projections. It helps in understanding medium-scale business operations, real estate values, and investment amounts in relatable terms.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Everyday Context</h4>
                                    <p>Converting numbers to millions makes large figures more comprehensible in everyday contexts like house prices, salaries, population of cities, and business revenues. It bridges the gap between abstract numbers and practical understanding.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-amber-50 rounded-lg border border-amber-200">
                                <p class="text-sm text-amber-800">
                                    <strong>Context Tip:</strong> Million-scale numbers are most relatable in business and real estate contexts. Use domain-specific comparisons to make the scale more meaningful!
                                </p>
                            </div>
                        </div>

                        <!-- Domain-Specific Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Million-Scale Examples by Domain</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Business & Finance</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-amber-600 cursor-pointer hover:text-amber-800" data-example="5000000">$5 Million Revenue</div>
                                        <div class="text-xs text-gray-600 mt-1">Mid-size company annual revenue</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-amber-600 cursor-pointer hover:text-amber-800" data-example="1000000">$1 Million Investment</div>
                                        <div class="text-xs text-gray-600 mt-1">Seed funding round</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Real Estate & Assets</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-amber-600 cursor-pointer hover:text-amber-800" data-example="750000">$750K Home</div>
                                        <div class="text-xs text-gray-600 mt-1">Luxury residential property</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-amber-600 cursor-pointer hover:text-amber-800" data-example="2500000">$2.5M Portfolio</div>
                                        <div class="text-xs text-gray-600 mt-1">Investment portfolio value</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputNumber = document.getElementById('inputNumber');
                        const domain = document.getElementById('domain');
                        const baselineRadios = document.getElementsByName('baseline');
                        const detailLevelRadios = document.getElementsByName('detailLevel');
                        const precisionRadios = document.getElementsByName('precision');
                        const clearButton = document.getElementById('clearButton');
                        
                        // Output elements
                        const millionOutput = document.getElementById('millionOutput');
                        const thousandDisplay = document.getElementById('thousandDisplay');
                        const millionDisplay = document.getElementById('millionDisplay');
                        const billionDisplay = document.getElementById('billionDisplay');
                        const hundredDisplay = document.getElementById('hundredDisplay');
                        const unitDisplay = document.getElementById('unitDisplay');
                        const scientificDisplay = document.getElementById('scientificDisplay');
                        const lakhDisplay = document.getElementById('lakhDisplay');
                        const croreDisplay = document.getElementById('croreDisplay');
                        const domainDisplay = document.getElementById('domainDisplay');
                        const magnitudeLevel = document.getElementById('magnitudeLevel');
                        const categoryLevel = document.getElementById('categoryLevel');
                        const interpretationText = document.getElementById('interpretationText');
                        const businessContext = document.getElementById('businessContext');
                        const everydayContext = document.getElementById('everydayContext');
                        const sizeIndicator = document.getElementById('sizeIndicator');
                        const reachIndicator = document.getElementById('reachIndicator');
                        const impactIndicator = document.getElementById('impactIndicator');
                        const complexityIndicator = document.getElementById('complexityIndicator');
                        const digitCount = document.getElementById('digitCount');
                        const orderMagnitude = document.getElementById('orderMagnitude');
                        const numberType = document.getElementById('numberType');
                        const numberFormat = document.getElementById('numberFormat');
                        const copyResult = document.getElementById('copyResult');

                        // Domain descriptions
                        const domainDescriptions = {
                            'general': 'General Numbers',
                            'business': 'Business & Finance',
                            'real-estate': 'Real Estate',
                            'population': 'Population & Demographics',
                            'sales': 'Sales & Revenue',
                            'investment': 'Investment & Assets',
                            'technology': 'Technology & Data',
                            'manufacturing': 'Manufacturing & Production',
                            'healthcare': 'Healthcare & Medical',
                            'education': 'Education & Research'
                        };

                        function getPrecision() {
                            const selected = document.querySelector('input[name="precision"]:checked').value;
                            return selected === 'auto' ? 'auto' : parseInt(selected);
                        }

                        function getBaseline() {
                            return document.querySelector('input[name="baseline"]:checked').value;
                        }

                        function getDetailLevel() {
                            return document.querySelector('input[name="detailLevel"]:checked').value;
                        }

                        function formatNumber(num, precision = 'auto') {
                            if (precision === 'auto') {
                                if (Math.abs(num) >= 1e12) {
                                    return num.toExponential(3);
                                } else if (Math.abs(num) >= 1000) {
                                    return num.toLocaleString(undefined, { maximumFractionDigits: 2 });
                                } else if (Math.abs(num) >= 1) {
                                    return num.toLocaleString(undefined, { maximumFractionDigits: 6 });
                                } else {
                                    return num.toLocaleString(undefined, { maximumFractionDigits: 8 });
                                }
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: precision });
                            }
                        }

                        function getMagnitudeLevel(num) {
                            const absNum = Math.abs(num);
                            if (absNum >= 1e9) return 'Billion Scale';
                            if (absNum >= 1e6) return 'Million Scale';
                            if (absNum >= 1e3) return 'Thousand Scale';
                            if (absNum >= 100) return 'Hundred Scale';
                            if (absNum >= 10) return 'Ten Scale';
                            return 'Unit Scale';
                        }

                        function getCategoryLevel(num, selectedDomain) {
                            const millions = num / 1e6;
                            
                            switch(selectedDomain) {
                                case 'business':
                                    if (millions >= 100) return 'Large Enterprise';
                                    if (millions >= 10) return 'Mid-size Company';
                                    if (millions >= 1) return 'Small Business';
                                    return 'Startup Scale';
                                    
                                case 'real-estate':
                                    if (millions >= 5) return 'Luxury Property';
                                    if (millions >= 1) return 'Premium Property';
                                    if (millions >= 0.5) return 'High-end Property';
                                    return 'Standard Property';
                                    
                                case 'investment':
                                    if (millions >= 50) return 'Major Investment';
                                    if (millions >= 10) return 'Significant Investment';
                                    if (millions >= 1) return 'Standard Investment';
                                    return 'Small Investment';
                                    
                                default:
                                    if (millions >= 100) return 'Very Large Scale';
                                    if (millions >= 10) return 'Large Scale';
                                    if (millions >= 1) return 'Medium Scale';
                                    return 'Small Scale';
                            }
                        }

                        function getInterpretation(num, selectedDomain) {
                            const millions = num / 1e6;
                            
                            switch(selectedDomain) {
                                case 'business':
                                    return `This represents ${formatNumber(millions, 1)} million in business terms - ${getCategoryLevel(num, selectedDomain).toLowerCase()} range`;
                                    
                                case 'real-estate':
                                    return `In real estate terms, this is ${formatNumber(millions, 1)} million - ${getCategoryLevel(num, selectedDomain).toLowerCase()} range`;
                                    
                                case 'population':
                                    return `This population size of ${formatNumber(num, 0)} represents ${formatNumber(millions, 2)} million people`;
                                    
                                case 'technology':
                                    return `In technology metrics, this represents ${formatNumber(millions, 1)} million data points or transactions`;
                                    
                                default:
                                    return `This number converts to ${formatNumber(millions, 2)} million units in standard measurement`;
                            }
                        }

                        function getBusinessContext(num, selectedDomain) {
                            const millions = num / 1e6;
                            
                            switch(selectedDomain) {
                                case 'business':
                                    return `Annual revenue of ${formatNumber(millions, 1)}M suggests ${getCategoryLevel(num, selectedDomain).toLowerCase()} operations`;
                                case 'investment':
                                    return `Investment amount of ${formatNumber(millions, 1)}M indicates ${getCategoryLevel(num, selectedDomain).toLowerCase()} funding round`;
                                case 'sales':
                                    return `Sales figure of ${formatNumber(millions, 1)}M represents ${getCategoryLevel(num, selectedDomain).toLowerCase()} performance`;
                                default:
                                    return `Business equivalent of ${formatNumber(millions, 1)}M in operational terms`;
                            }
                        }

                        function getEverydayContext(num, selectedDomain) {
                            const millions = num / 1e6;
                            
                            if (millions >= 10) {
                                return `Equivalent to buying ${Math.floor(millions/2)} luxury homes or ${Math.floor(millions/0.05)} annual salaries`;
                            } else if (millions >= 1) {
                                return `Similar to a luxury home purchase or ${Math.floor(millions/0.05)} years of average salary`;
                            } else {
                                return `Comparable to ${Math.floor(num/50000)} annual salaries or a luxury car purchase`;
                            }
                        }

                        function getScaleIndicators(num) {
                            const millions = num / 1e6;
                            
                            return {
                                size: millions >= 100 ? 'Massive' : millions >= 10 ? 'Large' : millions >= 1 ? 'Medium' : 'Small',
                                reach: millions >= 50 ? 'Global' : millions >= 10 ? 'National' : millions >= 1 ? 'Regional' : 'Local',
                                impact: millions >= 100 ? 'High' : millions >= 10 ? 'Significant' : millions >= 1 ? 'Moderate' : 'Limited',
                                complexity: millions >= 50 ? 'Complex' : millions >= 10 ? 'Involved' : millions >= 1 ? 'Moderate' : 'Simple'
                            };
                        }

                        function convert() {
                            const inputVal = parseFloat(inputNumber.value);
                            const precision = getPrecision();
                            const selectedDomain = domain.value;
                            const detailLevel = getDetailLevel();

                            if (!isNaN(inputVal)) {
                                // Basic conversions
                                const millions = inputVal / 1e6;
                                const thousands = inputVal / 1e3;
                                const billions = inputVal / 1e9;
                                const hundreds = inputVal / 100;
                                const lakhs = inputVal / 1e5;
                                const crores = inputVal / 1e7;

                                // Update primary display
                                millionOutput.textContent = formatNumber(millions, precision);

                                // Update all scale displays
                                thousandDisplay.textContent = formatNumber(thousands, precision);
                                millionDisplay.textContent = formatNumber(millions, precision);
                                billionDisplay.textContent = formatNumber(billions, precision);
                                hundredDisplay.textContent = formatNumber(hundreds, precision);
                                unitDisplay.textContent = formatNumber(inputVal, precision);
                                scientificDisplay.textContent = inputVal.toExponential(3);
                                lakhDisplay.textContent = formatNumber(lakhs, precision);
                                croreDisplay.textContent = formatNumber(crores, precision);

                                // Domain analysis
                                domainDisplay.textContent = domainDescriptions[selectedDomain];
                                magnitudeLevel.textContent = getMagnitudeLevel(inputVal);
                                categoryLevel.textContent = getCategoryLevel(inputVal, selectedDomain);

                                // Contextual analysis
                                interpretationText.textContent = getInterpretation(inputVal, selectedDomain);
                                businessContext.textContent = getBusinessContext(inputVal, selectedDomain);
                                everydayContext.textContent = getEverydayContext(inputVal, selectedDomain);

                                // Scale indicators
                                const indicators = getScaleIndicators(inputVal);
                                sizeIndicator.textContent = indicators.size;
                                reachIndicator.textContent = indicators.reach;
                                impactIndicator.textContent = indicators.impact;
                                complexityIndicator.textContent = indicators.complexity;

                                // Number properties
                                digitCount.textContent = Math.abs(inputVal).toString().replace(/[^0-9]/g, '').length;
                                orderMagnitude.textContent = Math.floor(Math.log10(Math.abs(inputVal) || 1));
                                numberType.textContent = Number.isInteger(inputVal) ? 'Integer' : 'Decimal';
                                numberFormat.textContent = inputVal.toLocaleString();

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            millionOutput.textContent = '--';
                            thousandDisplay.textContent = '--';
                            millionDisplay.textContent = '--';
                            billionDisplay.textContent = '--';
                            hundredDisplay.textContent = '--';
                            unitDisplay.textContent = '--';
                            scientificDisplay.textContent = '--';
                            lakhDisplay.textContent = '--';
                            croreDisplay.textContent = '--';
                            magnitudeLevel.textContent = '--';
                            categoryLevel.textContent = '--';
                            interpretationText.textContent = '--';
                            businessContext.textContent = '--';
                            everydayContext.textContent = '--';
                            sizeIndicator.textContent = '--';
                            reachIndicator.textContent = '--';
                            impactIndicator.textContent = '--';
                            complexityIndicator.textContent = '--';
                            digitCount.textContent = '--';
                            orderMagnitude.textContent = '--';
                            numberType.textContent = '--';
                            numberFormat.textContent = '--';
                        }

                        function clearAll() {
                            inputNumber.value = '';
                            domain.value = 'general';
                            clearOutputs();
                            inputNumber.focus();
                        }

                        // Event listeners
                        inputNumber.addEventListener('input', convert);
                        domain.addEventListener('change', convert);
                        
                        baselineRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

                        detailLevelRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

                        precisionRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

                        clearButton.addEventListener('click', clearAll);

                        // Copy functionality
                        copyResult.addEventListener('click', function() {
                            const text = millionOutput.textContent;
                            if (text !== '--') {
                                navigator.clipboard.writeText(text).then(() => {
                                    this.textContent = 'Copied!';
                                    setTimeout(() => {
                                        this.textContent = 'Copy Result';
                                    }, 2000);
                                });
                            }
                        });

                        // Domain example buttons
                        const domainExamples = document.querySelectorAll('.domain-example');
                        domainExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const context = this.getAttribute('data-context');
                                
                                inputNumber.value = value;
                                convert();
                                
                                // Update button styles
                                domainExamples.forEach(btn => btn.classList.remove('bg-amber-100', 'text-amber-700'));
                                domainExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-amber-100', 'text-amber-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                inputNumber.value = value;
                                convert();
                                inputNumber.focus();
                            });
                        });

                        // Initialize
                        inputNumber.focus();
                        convert();

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
