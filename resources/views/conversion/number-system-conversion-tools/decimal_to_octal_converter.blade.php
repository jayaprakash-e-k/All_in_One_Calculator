<x-tool-page-layout
    title="Decimal to Octal Converter - ConvertPro"
    description="Professional decimal and octal converter for computer science and system calculations. Convert both ways with complete base outputs and readable step logic."
>
    <x-slot name="toolUi">
        <div class="space-y-2">
            <section class="rounded-lg bg-white p-2.5 shadow-sm">
                <h2 class="text-sm font-semibold text-slate-900">Decimal and Octal Converter</h2>
                <p class="mt-0.5 text-[11px] text-slate-600">Clean two-way decimal and octal conversion with improved readability and consistent constraints.</p>
            </section>

            <section class="rounded-lg bg-white p-3 shadow-sm">
                <div class="grid gap-3 lg:grid-cols-5">
                    <form id="calculatorForm" class="space-y-3 lg:col-span-3">
                        <div class="space-y-1">
                            <span class="block text-xs font-semibold text-slate-700">Conversion Mode</span>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                                    <input type="radio" name="mode" value="decimal-to-octal" class="text-indigo-600" checked>
                                    <span class="text-xs font-medium">Decimal to Octal</span>
                                </label>
                                <label class="flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                                    <input type="radio" name="mode" value="octal-to-decimal" class="text-indigo-600">
                                    <span class="text-xs font-medium">Octal to Decimal</span>
                                </label>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="inputValue" id="inputLabel" class="block text-xs font-semibold text-slate-700">Enter Decimal Number</label>
                            <input
                                type="text"
                                id="inputValue"
                                class="w-full rounded-md border border-slate-300 bg-white font-mono"
                                placeholder="e.g. 255"
                                autocomplete="off"
                            >
                            <p id="inputHelp" class="text-[11px] text-slate-500">Use whole numbers from 0 to 9007199254740991.</p>
                        </div>

                        <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5 text-[11px] text-slate-600">
                            Constraint: non-negative values only, max safe decimal value is 9007199254740991.
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
                                <p id="result-title" class="text-xs font-semibold text-slate-900">Octal Value</p>
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
                                <span class="text-xs font-medium text-slate-600">Octal</span>
                                <span id="octalDisplay" class="font-mono text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Binary</span>
                                <span id="binaryDisplay" class="font-mono text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Hexadecimal</span>
                                <span id="hexDisplay" class="font-mono text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Bit Length</span>
                                <span id="bitLengthDisplay" class="text-sm font-semibold text-slate-900">--</span>
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
                <h4 class="text-sm font-semibold text-slate-900">Octal Number Reference</h4>
                <div class="mt-2 grid grid-cols-2 gap-1.5 text-[11px] text-slate-700 sm:grid-cols-4">
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">8^0 = 1</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">8^1 = 8</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">8^2 = 64</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">8^3 = 512</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">10(8) = 8(10)</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">17(8) = 15(10)</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">377(8) = 255(10)</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">777(8) = 511(10)</div>
                </div>
            </section>

            <section class="rounded-xl border border-slate-200 bg-white p-3">
                <h3 class="text-sm font-semibold text-slate-900">Reading Guide</h3>
                <div class="mt-2 space-y-2 text-xs leading-5 text-slate-700">
                    <p><span class="font-semibold text-slate-900">Decimal to Octal:</span> divide repeatedly by 8 and read remainders bottom-up.</p>
                    <p><span class="font-semibold text-slate-900">Octal to Decimal:</span> apply powers of 8 to each digit position.</p>
                    <p><span class="font-semibold text-slate-900">All Bases:</span> decimal, octal, binary, and hexadecimal are shown together.</p>
                    <p><span class="font-semibold text-slate-900">Constraints:</span> only non-negative safe integers are supported.</p>
                </div>
            </section>

            <div class="rounded-md bg-indigo-50 p-3 text-xs text-indigo-800">
                Octal is common in Unix file permissions and low-level grouped bit operations.
            </div>
        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const MAX_SAFE = Number.MAX_SAFE_INTEGER;

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
                const binaryDisplay = document.getElementById('binaryDisplay');
                const decimalDisplay = document.getElementById('decimalDisplay');
                const hexDisplay = document.getElementById('hexDisplay');
                const octalDisplay = document.getElementById('octalDisplay');
                const bitLengthDisplay = document.getElementById('bitLengthDisplay');
                const breakdownDisplay = document.getElementById('breakdownDisplay');
                const conversionSteps = document.getElementById('conversionSteps');
                const rulesDisplay = document.getElementById('rulesDisplay');
                const appliedRules = document.getElementById('appliedRules');
                const historicalContext = document.getElementById('historicalContext');
                const contextInfo = document.getElementById('contextInfo');

                const strictDecimalPattern = /^\d+$/;
                const strictOctalPattern = /^[0-7]+$/;

                function sanitize(value) {
                    return value.trim().replace(/[\s_]+/g, '').toUpperCase();
                }

                function groupBinary(value) {
                    return value.replace(/(.{4})/g, '$1 ').trim();
                }

                function getMode() {
                    return document.querySelector('input[name="mode"]:checked')?.value || 'decimal-to-octal';
                }

                function parseDecimal(value) {
                    if (!strictDecimalPattern.test(value)) {
                        return null;
                    }

                    const parsed = Number(value);
                    if (!Number.isFinite(parsed) || !Number.isSafeInteger(parsed) || parsed < 0 || parsed > MAX_SAFE) {
                        return null;
                    }

                    return parsed;
                }

                function parseOctalToSafeInteger(value) {
                    const parsed = parseInt(value, 8);
                    if (!Number.isFinite(parsed) || !Number.isSafeInteger(parsed) || parsed < 0 || parsed > MAX_SAFE) {
                        return null;
                    }
                    return parsed;
                }

                function buildFromBaseSteps(value, base) {
                    const chars = value.split('');
                    const steps = [];
                    let total = 0;

                    chars.forEach((char, index) => {
                        const power = chars.length - index - 1;
                        const digit = parseInt(char, base);
                        const amount = digit * (base ** power);
                        total += amount;
                        steps.push(`${char} x ${base}^${power} = ${amount}`);
                    });

                    steps.push(`Total = ${total}`);
                    return steps;
                }

                function buildToBaseSteps(decimal, base) {
                    if (decimal === 0) {
                        return ['0 in any base remains 0.'];
                    }

                    const alphabet = '0123456789ABCDEF';
                    const steps = [];
                    let current = decimal;

                    while (current > 0) {
                        const quotient = Math.floor(current / base);
                        const remainder = current % base;
                        steps.push(`${current} / ${base} = ${quotient}, remainder ${alphabet[remainder]}`);
                        current = quotient;
                    }

                    steps.push('Read remainders from bottom to top for the final result.');
                    return steps;
                }

                function getRules(mode) {
                    if (mode === 'decimal-to-octal') {
                        return [
                            'Decimal to octal uses repeated division by 8.',
                            'Each remainder is one octal digit.',
                            'Read remainders from bottom to top.'
                        ];
                    }

                    return [
                        'Octal digits range from 0 to 7.',
                        'Each position is a power of 8.',
                        'Sum all place values to get decimal.'
                    ];
                }

                function getContextNote(decimal) {
                    if (decimal <= 511) {
                        return `${decimal} is often represented with up to three octal digits.`;
                    }

                    if (decimal <= 4095) {
                        return `${decimal} fits common octal groupings used in system-level work.`;
                    }

                    return `${decimal} uses ${decimal.toString(2).length} bits in binary representation.`;
                }

                function updateInterface() {
                    const mode = getMode();

                    if (mode === 'decimal-to-octal') {
                        inputLabel.textContent = 'Enter Decimal Number';
                        inputHelp.textContent = 'Use whole numbers from 0 to 9007199254740991.';
                        inputValue.placeholder = 'e.g. 255';
                        resultTitle.textContent = 'Octal Value';
                        resultDescription.textContent = 'Decimal converted to octal';
                        return;
                    }

                    inputLabel.textContent = 'Enter Octal Number';
                    inputHelp.textContent = 'Use digits 0 to 7.';
                    inputValue.placeholder = 'e.g. 377';
                    resultTitle.textContent = 'Decimal Value';
                    resultDescription.textContent = 'Octal converted to decimal';
                }

                function setSectionVisibility() {
                    breakdownDisplay.style.display = 'block';
                    rulesDisplay.style.display = 'block';
                    historicalContext.style.display = 'block';
                }

                function clearOutputs() {
                    output.textContent = '--';
                    binaryDisplay.textContent = '--';
                    decimalDisplay.textContent = '--';
                    hexDisplay.textContent = '--';
                    octalDisplay.textContent = '--';
                    bitLengthDisplay.textContent = '--';
                    conversionSteps.textContent = '--';
                    appliedRules.textContent = '--';
                    contextInfo.textContent = '--';
                }

                function renderInvalid() {
                    clearOutputs();
                    inputValue.classList.add('border-red-500');
                    setTimeout(() => inputValue.classList.remove('border-red-500'), 1200);
                }

                function convert() {
                    const input = sanitize(inputValue.value);
                    if (!input) {
                        clearOutputs();
                        setSectionVisibility();
                        return;
                    }

                    const mode = getMode();
                    let decimal;
                    let octal;
                    let steps;
                    let outputValue;

                    if (mode === 'decimal-to-octal') {
                        const parsed = parseDecimal(input);
                        if (parsed === null) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        decimal = parsed;
                        octal = decimal.toString(8);
                        steps = buildToBaseSteps(decimal, 8);
                        outputValue = octal;
                    } else {
                        if (!strictOctalPattern.test(input)) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        octal = input;
                        const parsed = parseOctalToSafeInteger(octal);
                        if (parsed === null) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        decimal = parsed;
                        steps = buildFromBaseSteps(octal, 8);
                        outputValue = String(decimal);
                    }

                    const binary = decimal.toString(2);
                    const hex = decimal.toString(16).toUpperCase();
                    octal = octal || decimal.toString(8);

                    output.textContent = outputValue;
                    binaryDisplay.textContent = groupBinary(binary);
                    decimalDisplay.textContent = String(decimal);
                    hexDisplay.textContent = hex;
                    octalDisplay.textContent = octal;
                    bitLengthDisplay.textContent = `${binary.length} bits`;
                    conversionSteps.innerHTML = steps.join('<br>');
                    appliedRules.innerHTML = '- ' + getRules(mode).join('<br>- ');
                    contextInfo.textContent = getContextNote(decimal);

                    setSectionVisibility();
                }

                function clearAll() {
                    inputValue.value = '';
                    clearOutputs();
                    setSectionVisibility();
                    inputValue.focus();
                }

                inputValue.addEventListener('input', convert);

                modeRadios.forEach((radio) => {
                    radio.addEventListener('change', () => {
                        updateInterface();
                        clearAll();
                    });
                });

                clearButton.addEventListener('click', clearAll);

                copyResult.addEventListener('click', function () {
                    const text = output.textContent;
                    if (!text || text === '--') {
                        return;
                    }

                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(text).then(() => {
                            copyResult.textContent = 'Copied';
                            setTimeout(() => {
                                copyResult.textContent = 'Copy';
                            }, 1200);
                        });
                    }
                });

                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape') {
                        clearAll();
                        return;
                    }

                    if (event.ctrlKey && event.key.toLowerCase() === 'm') {
                        event.preventDefault();
                        const nextMode = getMode() === 'decimal-to-octal' ? 'octal-to-decimal' : 'decimal-to-octal';
                        const nextInput = document.querySelector(`input[name="mode"][value="${nextMode}"]`);
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
