<x-app-layout 
    title="Cents to Dollars Calculator - ConvertPro"
    description="Professional cents to dollars calculator for currency conversion. Convert cent amounts to dollars with precise decimal calculations for financial applications."
>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
        ['label' => 'Cents to Dollars Calculator']
    ]" />

    <!-- Main Calculator Section -->
    <section class="py-16 bg-gradient-to-br from-green-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Cents to Dollars Calculator</h1>
                    <p class="text-gray-600">Convert cents to dollar amounts for currency calculations</p>
                </div>

                <!-- Calculator Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    
                    <!-- Calculator Header -->
                    <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white">Currency Conversion Calculator</h2>
                    </div>

                    <!-- Calculator Body -->
                    <div class="p-8">
                        <form class="space-y-6" id="calculatorForm">
                            
                            <!-- Cents Input -->
                            <div class="space-y-2">
                                <label for="centsValue" class="block text-sm font-semibold text-gray-700">
                                    Number of Cents
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="centsValue" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                        placeholder="Enter number of cents (e.g., 150)"
                                        step="1"
                                        min="0"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 text-sm font-medium">¢</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">Enter the total number of cents to convert</p>
                            </div>

                            <!-- Currency Type -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Currency Type
                                </label>
                                <select 
                                    id="currencyType" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="usd" selected>US Dollar (USD)</option>
                                    <option value="cad">Canadian Dollar (CAD)</option>
                                    <option value="aud">Australian Dollar (AUD)</option>
                                    <option value="nzd">New Zealand Dollar (NZD)</option>
                                    <option value="eur">Euro (EUR) - Cent equivalent</option>
                                    <option value="gbp">British Pound (GBP) - Pence</option>
                                </select>
                            </div>

                            <!-- Display Format -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Display Format
                                </label>
                                <select 
                                    id="displayFormat" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                >
                                    <option value="decimal" selected>Decimal Format ($1.50)</option>
                                    <option value="mixed">Mixed Format ($1 and 50¢)</option>
                                    <option value="fraction">Fraction Format (1 50/100 dollars)</option>
                                    <option value="words">Written Format (One dollar and fifty cents)</option>
                                </select>
                            </div>

                            <!-- Quick Examples -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    Quick Examples
                                </label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors" data-cents="25">25 cents</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors" data-cents="100">100 cents</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors" data-cents="250">250 cents</button>
                                    <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-green-100 text-gray-700 hover:text-green-700 rounded-lg transition-colors" data-cents="1000">1000 cents</button>
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
                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Dollar Amount</h4>
                                        <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-green-600 font-mono" id="output">--</div>
                                        <button class="text-xs text-green-600 hover:text-green-800 mt-1" id="copyResult">Copy Result</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Multiple Format Display -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Format Variations -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Format Variations</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Decimal</h5>
                                            <div class="text-lg font-bold text-blue-600 font-mono" id="decimalDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Standard format</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Mixed</h5>
                                            <div class="text-lg font-bold text-purple-600 font-mono" id="mixedDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Dollars and cents</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Fraction</h5>
                                            <div class="text-lg font-bold text-orange-600 font-mono" id="fractionDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Fractional form</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Breakdown & Analysis -->
                                <div class="space-y-3">
                                    <h4 class="font-semibold text-gray-700 text-center">Breakdown</h4>
                                    
                                    <div class="p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Total Cents</h5>
                                            <div class="text-lg font-bold text-green-600 font-mono" id="totalCentsDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Input amount</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Dollar Bills</h5>
                                            <div class="text-lg font-bold text-teal-600 font-mono" id="dollarBillsDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Whole dollars</div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border-l-4 border-yellow-500">
                                        <div class="text-center">
                                            <h5 class="text-sm font-semibold text-gray-700 mb-1">Remaining Cents</h5>
                                            <div class="text-lg font-bold text-yellow-600 font-mono" id="remainingCentsDisplay">--</div>
                                            <div class="text-xs text-gray-500 mt-1">Change portion</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- Reference Information -->
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Currency Reference</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                <div><strong>1 Dollar</strong> = 100 cents</div>
                                <div><strong>1 Quarter</strong> = 25 cents</div>
                                <div><strong>1 Dime</strong> = 10 cents</div>
                                <div><strong>1 Nickel</strong> = 5 cents</div>
                                <div><strong>1 Penny</strong> = 1 cent</div>
                                <div><strong>Half Dollar</strong> = 50 cents</div>
                                <div><strong>Silver Dollar</strong> = 100 cents</div>
                                <div><strong>Euro Cent</strong> = 1/100 Euro</div>
                                <div><strong>UK Penny</strong> = 1/100 Pound</div>
                                <div><strong>Canadian Cent</strong> = 1/100 CAD</div>
                                <div><strong>Rounding</strong> = Nearest cent</div>
                                <div><strong>Format</strong> = $X.XX standard</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">About Cents to Dollars Conversion</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Currency Mathematics</h4>
                            <p>Converting cents to dollars involves simple division by 100, as there are 100 cents in every dollar. This fundamental relationship forms the basis of decimal currency systems used worldwide, making financial calculations precise and standardized.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                            <p>This conversion is essential for retail transactions, accounting, budgeting, and financial record-keeping. Understanding cent-to-dollar relationships helps in pricing strategies, tax calculations, and everyday money management.</p>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-green-50 rounded-lg border border-green-200">
                        <p class="text-sm text-green-800">
                            <strong>Money Tip:</strong> Always round monetary calculations to the nearest cent (2 decimal places) for accuracy in financial transactions.
                        </p>
                    </div>
                </div>

                <!-- Practical Examples -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Cent Amounts</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Common Purchases</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-green-600 cursor-pointer hover:text-green-800" data-cents="199">Candy Bar: 199¢</div>
                                <div class="text-xs text-gray-600 mt-1">$1.99 in decimal format</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-green-600 cursor-pointer hover:text-green-800" data-cents="299">Coffee: 299¢</div>
                                <div class="text-xs text-gray-600 mt-1">$2.99 small coffee</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-700">Round Numbers</h4>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-green-600 cursor-pointer hover:text-green-800" data-cents="500">Half Dollar: 500¢</div>
                                <div class="text-xs text-gray-600 mt-1">$5.00 even amount</div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <div class="font-medium text-green-600 cursor-pointer hover:text-green-800" data-cents="2000">Twenty Dollars: 2000¢</div>
                                <div class="text-xs text-gray-600 mt-1">$20.00 bill amount</div>
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
                const centsValue = document.getElementById('centsValue');
                const currencyType = document.getElementById('currencyType');
                const displayFormat = document.getElementById('displayFormat');
                const clearButton = document.getElementById('clearButton');
                
                // Output elements
                const output = document.getElementById('output');
                const resultTitle = document.getElementById('result-title');
                const resultDescription = document.getElementById('result-description');
                const decimalDisplay = document.getElementById('decimalDisplay');
                const mixedDisplay = document.getElementById('mixedDisplay');
                const fractionDisplay = document.getElementById('fractionDisplay');
                const totalCentsDisplay = document.getElementById('totalCentsDisplay');
                const dollarBillsDisplay = document.getElementById('dollarBillsDisplay');
                const remainingCentsDisplay = document.getElementById('remainingCentsDisplay');
                const writtenDisplay = document.getElementById('writtenDisplay');
                const quartersDisplay = document.getElementById('quartersDisplay');
                const dimesDisplay = document.getElementById('dimesDisplay');
                const nickelsDisplay = document.getElementById('nickelsDisplay');
                const penniesDisplay = document.getElementById('penniesDisplay');
                const copyResult = document.getElementById('copyResult');

                // Currency symbols
                const currencySymbols = {
                    usd: '$',
                    cad: 'C$',
                    aud: 'A$',
                    nzd: 'NZ$',
                    eur: '€',
                    gbp: '£'
                };

                function formatNumber(num, decimals = 2) {
                    return num.toLocaleString(undefined, { 
                        maximumFractionDigits: decimals, 
                        minimumFractionDigits: decimals 
                    });
                }

                function numberToWords(num) {
                    const ones = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
                    const tens = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
                    
                    if (num === 0) return 'zero';
                    if (num < 20) return ones[num];
                    if (num < 100) return tens[Math.floor(num / 10)] + (num % 10 !== 0 ? '-' + ones[num % 10] : '');
                    if (num < 1000) return ones[Math.floor(num / 100)] + ' hundred' + (num % 100 !== 0 ? ' ' + numberToWords(num % 100) : '');
                    
                    return num.toString(); // For larger numbers, just return as string
                }

                function generateWrittenFormat(dollars, cents) {
                    let result = '';
                    
                    if (dollars === 0 && cents === 0) {
                        return 'Zero dollars and zero cents';
                    }
                    
                    if (dollars > 0) {
                        const dollarWords = numberToWords(dollars);
                        result += dollarWords.charAt(0).toUpperCase() + dollarWords.slice(1);
                        result += dollars === 1 ? ' dollar' : ' dollars';
                    }
                    
                    if (dollars > 0 && cents > 0) {
                        result += ' and ';
                    }
                    
                    if (cents > 0 || dollars === 0) {
                        if (dollars === 0) {
                            const centWords = numberToWords(cents);
                            result += centWords.charAt(0).toUpperCase() + centWords.slice(1);
                        } else {
                            result += numberToWords(cents);
                        }
                        result += cents === 1 ? ' cent' : ' cents';
                    }
                    
                    return result;
                }

                function calculateCoinBreakdown(totalCents) {
                    let remaining = totalCents;
                    const quarters = Math.floor(remaining / 25);
                    remaining %= 25;
                    const dimes = Math.floor(remaining / 10);
                    remaining %= 10;
                    const nickels = Math.floor(remaining / 5);
                    const pennies = remaining % 5;
                    
                    return { quarters, dimes, nickels, pennies };
                }

                function calculate() {
                    const cents = parseInt(centsValue.value) || 0;
                    const currency = currencyType.value;
                    const format = displayFormat.value;
                    const symbol = currencySymbols[currency];

                    if (cents >= 0) {
                        const dollars = Math.floor(cents / 100);
                        const remainingCents = cents % 100;
                        const decimalAmount = cents / 100;

                        // Update primary output based on selected format
                        let primaryOutput = '';
                        switch(format) {
                            case 'decimal':
                                primaryOutput = symbol + formatNumber(decimalAmount);
                                break;
                            case 'mixed':
                                if (dollars > 0 && remainingCents > 0) {
                                    primaryOutput = symbol + dollars + ' and ' + remainingCents + '¢';
                                } else if (dollars > 0) {
                                    primaryOutput = symbol + dollars;
                                } else {
                                    primaryOutput = remainingCents + '¢';
                                }
                                break;
                            case 'fraction':
                                if (remainingCents > 0) {
                                    primaryOutput = dollars + ' ' + remainingCents + '/100 dollars';
                                } else {
                                    primaryOutput = dollars + ' dollars';
                                }
                                break;
                            case 'words':
                                primaryOutput = generateWrittenFormat(dollars, remainingCents);
                                break;
                        }

                        output.textContent = primaryOutput;
                        resultTitle.textContent = 'Converted Amount';
                        resultDescription.textContent = `${cents} cents = ${symbol}${formatNumber(decimalAmount)}`;

                        // Display all formats
                        decimalDisplay.textContent = symbol + formatNumber(decimalAmount);
                        
                        if (dollars > 0 && remainingCents > 0) {
                            mixedDisplay.textContent = symbol + dollars + ' and ' + remainingCents + '¢';
                        } else if (dollars > 0) {
                            mixedDisplay.textContent = symbol + dollars;
                        } else {
                            mixedDisplay.textContent = remainingCents + '¢';
                        }

                        if (remainingCents > 0) {
                            fractionDisplay.textContent = dollars + ' ' + remainingCents + '/100 dollars';
                        } else {
                            fractionDisplay.textContent = dollars + ' dollars';
                        }

                        // Breakdown
                        totalCentsDisplay.textContent = cents + '¢';
                        dollarBillsDisplay.textContent = dollars;
                        remainingCentsDisplay.textContent = remainingCents + '¢';

                        // Written format
                        writtenDisplay.textContent = generateWrittenFormat(dollars, remainingCents);

                        // Coin breakdown
                        const coinBreakdown = calculateCoinBreakdown(cents);
                        quartersDisplay.textContent = coinBreakdown.quarters;
                        dimesDisplay.textContent = coinBreakdown.dimes;
                        nickelsDisplay.textContent = coinBreakdown.nickels;
                        penniesDisplay.textContent = coinBreakdown.pennies;

                    } else {
                        clearOutputs();
                    }
                }

                function clearOutputs() {
                    output.textContent = '--';
                    resultTitle.textContent = 'Dollar Amount';
                    resultDescription.textContent = 'Converted result';
                    decimalDisplay.textContent = '--';
                    mixedDisplay.textContent = '--';
                    fractionDisplay.textContent = '--';
                    totalCentsDisplay.textContent = '--';
                    dollarBillsDisplay.textContent = '--';
                    remainingCentsDisplay.textContent = '--';
                    writtenDisplay.textContent = 'Enter cents to see written format';
                    quartersDisplay.textContent = '--';
                    dimesDisplay.textContent = '--';
                    nickelsDisplay.textContent = '--';
                    penniesDisplay.textContent = '--';
                }

                function clearAll() {
                    centsValue.value = '';
                    currencyType.value = 'usd';
                    displayFormat.value = 'decimal';
                    clearOutputs();
                    centsValue.focus();
                }

                // Event listeners
                centsValue.addEventListener('input', calculate);
                currencyType.addEventListener('change', calculate);
                displayFormat.addEventListener('change', calculate);

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
                const exampleBtns = document.querySelectorAll('.example-btn');
                exampleBtns.forEach(button => {
                    button.addEventListener('click', function() {
                        const cents = this.getAttribute('data-cents');
                        
                        centsValue.value = cents;
                        calculate();
                        
                        // Update button styles
                        exampleBtns.forEach(btn => btn.classList.remove('bg-green-100', 'text-green-700'));
                        exampleBtns.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                        this.classList.remove('bg-gray-100', 'text-gray-700');
                        this.classList.add('bg-green-100', 'text-green-700');
                    });
                });

                // Clickable examples
                const examples = document.querySelectorAll('[data-cents]');
                examples.forEach(element => {
                    element.addEventListener('click', function() {
                        const cents = this.getAttribute('data-cents');
                        
                        if (cents) {
                            centsValue.value = cents;
                            calculate();
                            centsValue.focus();
                        }
                    });
                });

                // Initialize
                centsValue.focus();

                // Keyboard shortcuts
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        clearAll();
                    }
                });
            });
        </script>
    </x-slot>
</x-app-layout>