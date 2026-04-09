<x-tool-page-layout
    title="Binary Converter - ConvertPro"
    description="Professional binary converter for computer science and programming. Convert between binary and decimal with complete base outputs and clear conversion steps."
>
    <x-slot name="toolUi">
        <div class="space-y-2">
            <section class="rounded-lg bg-white p-2.5 shadow-sm">
                <h2 class="text-sm font-semibold text-slate-900">Binary Converter</h2>
                <p class="mt-0.5 text-[11px] text-slate-600">Compact binary and decimal conversion with readable output and strict input constraints.</p>
            </section>

            <section class="rounded-lg bg-white p-3 shadow-sm">
                <div class="grid gap-3 lg:grid-cols-5">
                    <form id="calculatorForm" class="space-y-3 lg:col-span-3">
                        <div class="space-y-1">
                            <span class="block text-xs font-semibold text-slate-700">Conversion Mode</span>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                                    <input type="radio" name="mode" value="binary-to-decimal" class="text-indigo-600" checked>
                                    <span class="text-xs font-medium">Binary to Decimal</span>
                                </label>
                                <label class="flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                                    <input type="radio" name="mode" value="decimal-to-binary" class="text-indigo-600">
                                    <span class="text-xs font-medium">Decimal to Binary</span>
                                </label>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="inputValue" id="inputLabel" class="block text-xs font-semibold text-slate-700">Enter Binary Number</label>
                            <input
                                type="text"
                                id="inputValue"
                                class="w-full rounded-md border border-slate-300 bg-white font-mono"
                                placeholder="e.g. 101011"
                                autocomplete="off"
                            >
                            <p id="inputHelp" class="text-[11px] text-slate-500">Use only 0 and 1.</p>
                        </div>

                        <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5 text-[11px] text-slate-600">
                            Constraint: non-negative integers only, max safe value is 9007199254740991.
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
                                <p id="result-title" class="text-xs font-semibold text-slate-900">Decimal Value</p>
                                <p id="result-description" class="text-[11px] text-slate-500">Converted output</p>
                            </div>
                            <div class="text-right">
                                <div id="output" class="font-serif text-3xl font-bold leading-none text-indigo-700">--</div>
                                <button type="button" id="copyResult" class="mt-1 text-xs font-medium text-indigo-600">Copy</button>
                            </div>
                        </div>

                        <div class="space-y-1.5 rounded-md border border-slate-200 bg-white p-2 text-sm text-slate-700">
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Binary</span>
                                <span id="binaryDisplay" class="font-mono text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Decimal</span>
                                <span id="decimalDisplay" class="text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Hexadecimal</span>
                                <span id="hexDisplay" class="font-mono text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Octal</span>
                                <span id="octalDisplay" class="font-mono text-sm font-semibold text-slate-900">--</span>
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
                <h4 class="text-sm font-semibold text-slate-900">Binary System Reference</h4>
                <div class="mt-2 grid grid-cols-2 gap-1.5 text-[11px] text-slate-700 sm:grid-cols-3">
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">2^0 = 1</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">2^1 = 2</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">2^2 = 4</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">2^3 = 8</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">2^4 = 16</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">2^8 = 256</div>
                </div>
            </section>

            <section class="rounded-xl border border-slate-200 bg-white p-3">
                <h3 class="text-sm font-semibold text-slate-900">Reading Guide</h3>
                <div class="mt-2 space-y-2 text-xs leading-5 text-slate-700">
                    <p><span class="font-semibold text-slate-900">Primary Result:</span> Shows the value in the currently selected target mode.</p>
                    <p><span class="font-semibold text-slate-900">All Bases:</span> Binary, decimal, hexadecimal, and octal stay synchronized.</p>
                    <p><span class="font-semibold text-slate-900">Breakdown:</span> Displays positional expansion or repeated division steps.</p>
                    <p><span class="font-semibold text-slate-900">Constraints:</span> Supports only non-negative safe integers for accurate JavaScript math.</p>
                </div>
            </section>

            <div class="rounded-md bg-indigo-50 p-3 text-xs text-indigo-800">
                Binary digits are called bits, and every 4 bits map to one hexadecimal digit.
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

                const strictBinaryPattern = /^[01]+$/;
                const strictDecimalPattern = /^\d+$/;

                function sanitize(value) {
                    return value.trim().replace(/[\s_]+/g, '').toUpperCase();
                }

                function groupBinary(value) {
                    return value.replace(/(.{4})/g, '$1 ').trim();
                }

                function getMode() {
                    return document.querySelector('input[name="mode"]:checked')?.value || 'binary-to-decimal';
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

                function parseBaseToSafeInteger(value, base) {
                    const parsed = parseInt(value, base);
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
                    if (mode === 'binary-to-decimal') {
                        return [
                            'Binary digits can only be 0 or 1.',
                            'Each position contributes a power of 2.',
                            'Add all positional contributions to get decimal.'
                        ];
                    }

                    return [
                        'Decimal to binary uses repeated division by 2.',
                        'Each remainder becomes one binary digit.',
                        'Remainders are read from bottom to top.'
                    ];
                }

                function getContextNote(decimal) {
                    if (decimal <= 255) {
                        return `${decimal} fits in one unsigned byte (8 bits).`;
                    }

                    if (decimal <= 65535) {
                        return `${decimal} fits in 16-bit unsigned integer range.`;
                    }

                    return `${decimal} is represented across ${decimal.toString(2).length} bits in binary.`;
                }

                function updateInterface() {
                    const mode = getMode();

                    if (mode === 'binary-to-decimal') {
                        inputLabel.textContent = 'Enter Binary Number';
                        inputHelp.textContent = 'Use only 0 and 1.';
                        inputValue.placeholder = 'e.g. 101011';
                        resultTitle.textContent = 'Decimal Value';
                        resultDescription.textContent = 'Binary converted to decimal';
                        return;
                    }

                    inputLabel.textContent = 'Enter Decimal Number';
                    inputHelp.textContent = 'Use whole numbers from 0 to 9007199254740991.';
                    inputValue.placeholder = 'e.g. 43';
                    resultTitle.textContent = 'Binary Value';
                    resultDescription.textContent = 'Decimal converted to binary';
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
                    let binary;
                    let steps;
                    let outputValue;

                    if (mode === 'binary-to-decimal') {
                        if (!strictBinaryPattern.test(input)) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        binary = input.replace(/^0+(?=\d)/, '');
                        const parsed = parseBaseToSafeInteger(binary, 2);
                        if (parsed === null) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        decimal = parsed;
                        steps = buildFromBaseSteps(binary, 2);
                        outputValue = String(decimal);
                    } else {
                        const parsed = parseDecimal(input);
                        if (parsed === null) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        decimal = parsed;
                        binary = decimal.toString(2);
                        steps = buildToBaseSteps(decimal, 2);
                        outputValue = groupBinary(binary);
                    }

                    const hex = decimal.toString(16).toUpperCase();
                    const octal = decimal.toString(8);

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
                        const nextMode = getMode() === 'binary-to-decimal' ? 'decimal-to-binary' : 'binary-to-decimal';
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
