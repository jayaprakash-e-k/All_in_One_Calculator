<x-tool-page-layout
    title="Roman Numerals Converter - ConvertPro"
    description="Professional Roman numerals converter for historical and educational purposes. Convert between Roman numerals and decimal numbers with detailed rules and explanations."
>
    <x-slot name="toolUi">
        <div class="space-y-2">
            <section class="rounded-lg bg-white p-2.5 shadow-sm">
                <h2 class="text-sm font-semibold text-slate-900">Roman Numerals Converter</h2>
                <p class="mt-0.5 text-[11px] text-slate-600">All controls and results are optimized to fit in the desktop viewport.</p>
            </section>

            <section class="rounded-lg bg-white p-3 shadow-sm">
                <div class="grid gap-3 lg:grid-cols-5">
                    <form id="calculatorForm" class="space-y-3 lg:col-span-3">
                        <div class="space-y-1">
                            <span class="block text-xs font-semibold text-slate-700">Conversion Mode</span>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                                    <input type="radio" name="mode" value="decimal-to-roman" class="text-indigo-600" checked>
                                    <span class="text-xs font-medium">Decimal to Roman</span>
                                </label>
                                <label class="flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                                    <input type="radio" name="mode" value="roman-to-decimal" class="text-indigo-600">
                                    <span class="text-xs font-medium">Roman to Decimal</span>
                                </label>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="inputValue" id="inputLabel" class="block text-xs font-semibold text-slate-700">Enter Decimal Number</label>
                            <input
                                type="text"
                                id="inputValue"
                                class="w-full rounded-md border border-slate-300 bg-white font-mono"
                                placeholder="e.g. 1994"
                                autocomplete="off"
                            >
                            <p id="inputHelp" class="text-[11px] text-slate-500">Use numbers between 1 and 3999.</p>
                        </div>

                        <div class="flex items-center justify-between gap-3 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                            <p class="text-[11px] text-slate-500">Shortcut: Ctrl + M to switch mode</p>
                            <button
                                type="button"
                                id="clearButton"
                                class="rounded-md bg-indigo-100 px-3 py-1 text-xs font-semibold text-indigo-700"
                            >
                                Clear
                            </button>
                        </div>
                    </form>

                    <section class="space-y-2 rounded-md border border-slate-200 bg-slate-50 p-2.5 lg:col-span-2">
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <p id="result-title" class="text-xs font-semibold text-slate-900">Roman Numeral</p>
                                <p id="result-description" class="text-[11px] text-slate-500">Converted output</p>
                            </div>
                            <div class="text-right">
                                <div id="output" class="font-serif text-3xl font-bold leading-none text-indigo-700">--</div>
                                <button type="button" id="copyResult" class="mt-1 text-xs font-medium text-indigo-600">Copy</button>
                            </div>
                        </div>

                        <div class="space-y-1.5 rounded-md border border-slate-200 bg-white p-2 text-sm text-slate-700">
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Decimal</span>
                                <span id="decimalDisplay" class="text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Roman</span>
                                <span id="romanDisplay" class="font-serif text-sm font-semibold text-indigo-700">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Symbols</span>
                                <span id="symbolsUsed" class="text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Length</span>
                                <span id="symbolLength" class="text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Clock</span>
                                <span id="clockFormat" class="text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Chapter</span>
                                <span id="chapterFormat" class="text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Year</span>
                                <span id="yearFormat" class="text-sm font-semibold text-slate-900">--</span>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <div class="space-y-3 text-sm text-slate-600">
            <section class="rounded-xl border border-slate-200 bg-slate-50 p-3">
                <div class="flex items-center justify-between gap-2">
                    <h3 class="text-sm font-semibold text-slate-900">Live Conversion Insights</h3>
                    <span class="rounded-full bg-emerald-100 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">Auto update</span>
                </div>

                <div id="breakdownDisplay" class="mt-2 rounded-md border border-slate-200 bg-white p-2">
                    <p class="text-[11px] font-semibold text-slate-700">Breakdown</p>
                    <p id="conversionSteps" class="mt-1 text-[11px] leading-5 text-slate-600">--</p>
                </div>

                <div id="rulesDisplay" class="mt-2 rounded-md border border-slate-200 bg-white p-2">
                    <p class="text-[11px] font-semibold text-slate-700">Rules Applied</p>
                    <p id="appliedRules" class="mt-1 text-[11px] leading-5 text-slate-600">--</p>
                </div>

                <div id="historicalContext" class="mt-2 rounded-md border border-slate-200 bg-white p-2">
                    <p class="text-[11px] font-semibold text-slate-700">Context Note</p>
                    <p id="contextInfo" class="mt-1 text-[11px] leading-5 text-slate-600">--</p>
                </div>
            </section>

            <section class="rounded-xl border border-slate-200 bg-white p-3">
                <h4 class="text-sm font-semibold text-slate-900">Roman Numeral Reference</h4>
                <div class="mt-2 grid grid-cols-3 gap-1.5 text-[11px] text-slate-700 sm:grid-cols-4">
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">I = 1</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">V = 5</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">X = 10</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">L = 50</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">C = 100</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">D = 500</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">M = 1000</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">IV = 4</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">IX = 9</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">XL = 40</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">XC = 90</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">CM = 900</div>
                </div>
            </section>

            <section class="rounded-xl border border-slate-200 bg-white p-3">
                <h3 class="text-sm font-semibold text-slate-900">Reading Guide</h3>
                <div class="mt-2 space-y-2 text-xs leading-5 text-slate-700">
                    <p><span class="font-semibold text-slate-900">Decimal and Roman:</span> These show the exact pair converted from your input.</p>
                    <p><span class="font-semibold text-slate-900">Breakdown:</span> Displays each calculation step so you can verify the conversion process.</p>
                    <p><span class="font-semibold text-slate-900">Rules Applied:</span> Highlights whether additive or subtractive Roman rules were used.</p>
                    <p><span class="font-semibold text-slate-900">Context Note:</span> Provides a short usage hint for clocks, chapters, years, or historical labels.</p>
                </div>
            </section>

            <div class="rounded-md bg-indigo-50 p-3 text-xs text-indigo-800">
                Classical Roman numerals do not include a symbol for zero.
            </div>
        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const inputValue = document.getElementById('inputValue');
                const modeRadios = document.getElementsByName('mode');
                const clearButton = document.getElementById('clearButton');
                const copyResult = document.getElementById('copyResult');

                if (!inputValue || !modeRadios.length || !clearButton || !copyResult) {
                    return;
                }

                const inputLabel = document.getElementById('inputLabel');
                const inputHelp = document.getElementById('inputHelp');
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
                    I: 1,
                    V: 5,
                    X: 10,
                    L: 50,
                    C: 100,
                    D: 500,
                    M: 1000,
                };

                const strictRomanPattern = /^(M{0,3})(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/i;

                function getMode() {
                    return document.querySelector('input[name="mode"]:checked')?.value || 'decimal-to-roman';
                }

                function isValidDecimal(value) {
                    return /^\d+$/.test(value) && Number(value) >= 1 && Number(value) <= 3999;
                }

                function isValidRoman(value) {
                    const sanitized = value.trim().toUpperCase();
                    return sanitized !== '' && strictRomanPattern.test(sanitized);
                }

                function decimalToRoman(decimal) {
                    let num = Number(decimal);
                    let result = '';
                    const steps = [];

                    romanNumerals.forEach((entry) => {
                        while (num >= entry.value) {
                            result += entry.symbol;
                            steps.push(`${num} - ${entry.value} = ${num - entry.value} (add ${entry.symbol})`);
                            num -= entry.value;
                        }
                    });

                    return { roman: result, steps };
                }

                function romanToDecimal(roman) {
                    const value = roman.trim().toUpperCase();
                    let total = 0;
                    const steps = [];

                    for (let i = 0; i < value.length; i += 1) {
                        const current = romanValues[value[i]];
                        const next = romanValues[value[i + 1]];

                        if (next && current < next) {
                            const partial = next - current;
                            steps.push(`${value[i]}${value[i + 1]} = ${partial}`);
                            total += partial;
                            i += 1;
                        } else {
                            steps.push(`${value[i]} = ${current}`);
                            total += current;
                        }
                    }

                    return { decimal: total, steps };
                }

                function getUniqueSymbols(roman) {
                    const order = ['M', 'D', 'C', 'L', 'X', 'V', 'I'];
                    return [...new Set(roman.split(''))]
                        .sort((a, b) => order.indexOf(a) - order.indexOf(b))
                        .join(' ');
                }

                function getConversionRules(roman) {
                    const rules = [];

                    if (roman.includes('IV') || roman.includes('IX')) {
                        rules.push('I can appear before V or X for subtraction.');
                    }
                    if (roman.includes('XL') || roman.includes('XC')) {
                        rules.push('X can appear before L or C for subtraction.');
                    }
                    if (roman.includes('CD') || roman.includes('CM')) {
                        rules.push('C can appear before D or M for subtraction.');
                    }
                    if (/I{2,3}|X{2,3}|C{2,3}/.test(roman)) {
                        rules.push('I, X, and C can repeat up to three times.');
                    }
                    if (/M+/.test(roman)) {
                        rules.push('M repeats for thousands.');
                    }

                    return rules.length ? rules : ['Standard additive notation.'];
                }

                function getContextNote(decimal) {
                    if (decimal <= 12) {
                        return `${decimal} is commonly represented in Roman format on classic clock faces.`;
                    }

                    if (decimal >= 1000) {
                        return `Large values like ${decimal} are commonly used for years, monuments, and formal inscriptions.`;
                    }

                    return `Roman notation for ${decimal} follows classical additive and subtractive rules.`;
                }

                function updateInterface() {
                    if (getMode() === 'decimal-to-roman') {
                        inputLabel.textContent = 'Enter Decimal Number';
                        inputHelp.textContent = 'Use numbers between 1 and 3999.';
                        inputValue.placeholder = 'e.g. 1994';
                        resultTitle.textContent = 'Roman Numeral';
                        resultDescription.textContent = 'Converted output';
                    } else {
                        inputLabel.textContent = 'Enter Roman Numeral';
                        inputHelp.textContent = 'Use I, V, X, L, C, D, M.';
                        inputValue.placeholder = 'e.g. MCMXCIV';
                        resultTitle.textContent = 'Decimal Number';
                        resultDescription.textContent = 'Converted output';
                    }
                }

                function setSectionVisibility() {
                    breakdownDisplay.style.display = 'block';
                    rulesDisplay.style.display = 'block';
                    historicalContext.style.display = 'block';
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
                }

                function renderInvalid() {
                    clearOutputs();
                    inputValue.classList.add('border-red-500');
                    setTimeout(() => inputValue.classList.remove('border-red-500'), 1200);
                }

                function convert() {
                    const input = inputValue.value.trim();

                    if (!input) {
                        clearOutputs();
                        setSectionVisibility();
                        return;
                    }

                    const mode = getMode();
                    let decimal;
                    let roman;
                    let steps;

                    if (mode === 'decimal-to-roman') {
                        if (!isValidDecimal(input)) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        const converted = decimalToRoman(input);
                        decimal = Number(input);
                        roman = converted.roman;
                        steps = converted.steps;
                        output.textContent = roman;
                    } else {
                        if (!isValidRoman(input)) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        const converted = romanToDecimal(input);
                        decimal = converted.decimal;
                        roman = input.toUpperCase();
                        steps = converted.steps;
                        output.textContent = String(decimal);
                    }

                    decimalDisplay.textContent = String(decimal);
                    romanDisplay.textContent = roman;
                    conversionSteps.innerHTML = steps.join('<br>');
                    appliedRules.innerHTML = '• ' + getConversionRules(roman).join('<br>• ');
                    symbolsUsed.textContent = getUniqueSymbols(roman);
                    symbolLength.textContent = `${roman.length} chars`;
                    contextInfo.textContent = getContextNote(decimal);
                    clockFormat.textContent = decimal <= 12 ? roman : 'N/A';
                    chapterFormat.textContent = `Chapter ${roman}`;
                    yearFormat.textContent = decimal >= 1000 ? `Year ${roman}` : 'N/A';

                    setSectionVisibility();
                }

                function clearAll() {
                    inputValue.value = '';
                    clearOutputs();
                    setSectionVisibility();
                    inputValue.focus();
                }

                inputValue.addEventListener('input', convert);
                modeRadios.forEach((radio) => radio.addEventListener('change', () => {
                    updateInterface();
                    clearAll();
                }));

                clearButton.addEventListener('click', clearAll);

                copyResult.addEventListener('click', function () {
                    const text = output.textContent;
                    if (!text || text === '--') {
                        return;
                    }
                    navigator.clipboard.writeText(text).then(() => {
                        copyResult.textContent = 'Copied';
                        setTimeout(() => {
                            copyResult.textContent = 'Copy';
                        }, 1200);
                    });
                });

                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape') {
                        clearAll();
                        return;
                    }

                    if (event.ctrlKey && event.key.toLowerCase() === 'm') {
                        event.preventDefault();
                        const current = getMode();
                        const next = current === 'decimal-to-roman' ? 'roman-to-decimal' : 'decimal-to-roman';
                        const nextInput = document.querySelector(`input[name="mode"][value="${next}"]`);
                        if (nextInput) {
                            nextInput.checked = true;
                            updateInterface();
                            clearAll();
                        }
                    }
                });

                updateInterface();
                clearOutputs();
                setSectionVisibility();
            });
        </script>
    </x-slot>
</x-tool-page-layout>
