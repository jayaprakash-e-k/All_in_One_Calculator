<x-tool-page-layout
    title="Decimal to Hexadecimal Converter - ConvertPro"
    description="Professional decimal and hexadecimal converter for programming and digital systems. Convert in both directions with complete base outputs and readable steps."
>
    <x-slot name="toolUi">
        <div class="space-y-2">
            <section class="rounded-lg bg-white p-2.5 shadow-sm">
                <h2 class="text-sm font-semibold text-slate-900">Decimal and Hexadecimal Converter</h2>
                <p class="mt-0.5 text-[11px] text-slate-600">Readable decimal and hex conversion with consistent structure, visibility, and constraints.</p>
            </section>

            <section class="rounded-lg bg-white p-3 shadow-sm">
                <div class="grid gap-3 lg:grid-cols-5">
                    <form id="calculatorForm" class="space-y-3 lg:col-span-3">
                        <div class="space-y-1">
                            <span class="block text-xs font-semibold text-slate-700">Conversion Mode</span>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                                    <input type="radio" name="mode" value="decimal-to-hex" class="text-indigo-600" checked>
                                    <span class="text-xs font-medium">Decimal to Hex</span>
                                </label>
                                <label class="flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-2 py-1.5">
                                    <input type="radio" name="mode" value="hex-to-decimal" class="text-indigo-600">
                                    <span class="text-xs font-medium">Hex to Decimal</span>
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
                                <p id="result-title" class="text-xs font-semibold text-slate-900">Hexadecimal Value</p>
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
                                <span class="text-xs font-medium text-slate-600">Hexadecimal</span>
                                <span id="hexDisplay" class="font-mono text-sm font-semibold text-slate-900">--</span>
                            </div>
                            <div class="flex items-center justify-between rounded-md bg-slate-50 px-2 py-1.5">
                                <span class="text-xs font-medium text-slate-600">Binary</span>
                                <span id="binaryDisplay" class="font-mono text-sm font-semibold text-slate-900">--</span>
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
                <h4 class="text-sm font-semibold text-slate-900">Hexadecimal Digit Reference</h4>
                <div class="mt-2 grid grid-cols-2 gap-1.5 text-[11px] text-slate-700 sm:grid-cols-4">
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">A = 10</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">B = 11</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">C = 12</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">D = 13</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">E = 14</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">F = 15</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">FF = 255</div>
                    <div class="rounded-md border border-slate-200 bg-slate-50 px-2 py-1">7FFF = 32767</div>
                </div>
            </section>

            <section class="rounded-xl border border-slate-200 bg-white p-3">
                <h3 class="text-sm font-semibold text-slate-900">Reading Guide</h3>
                <div class="mt-2 space-y-2 text-xs leading-5 text-slate-700">
                    <p><span class="font-semibold text-slate-900">Decimal to Hex:</span> uses repeated division by 16 and remainder mapping.</p>
                    <p><span class="font-semibold text-slate-900">Hex to Decimal:</span> applies place-value powers of 16.</p>
                    <p><span class="font-semibold text-slate-900">All Bases:</span> decimal, hex, binary, and octal update together.</p>
                    <p><span class="font-semibold text-slate-900">Constraints:</span> values stay in safe integer range for precision.</p>
                </div>
            </section>

            <div class="rounded-md bg-indigo-50 p-3 text-xs text-indigo-800">
                Hexadecimal is standard for memory values, machine instructions, and color notation.
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
                const strictHexPattern = /^[0-9A-F]+$/i;

                function sanitize(value) {
                    return value.trim().replace(/[\s_]+/g, '').toUpperCase();
                }

                function groupBinary(value) {
                    return value.replace(/(.{4})/g, '$1 ').trim();
                }

                function getMode() {
                    return document.querySelector('input[name="mode"]:checked')?.value || 'decimal-to-hex';
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

                function parseHexToSafeInteger(value) {
                    const parsed = parseInt(value, 16);
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
                    if (mode === 'decimal-to-hex') {
                        return [
                            'Decimal to hexadecimal uses repeated division by 16.',
                            'Remainders 10-15 map to A-F.',
                            'Read remainders from bottom to top.'
                        ];
                    }

                    return [
                        'Hex digits range from 0-9 and A-F.',
                        'Each position represents a power of 16.',
                        'Sum all positional values to get decimal.'
                    ];
                }

                function getContextNote(decimal) {
                    if (decimal <= 255) {
                        return `${decimal} is often represented as a one-byte hex value.`;
                    }

                    if (decimal <= 65535) {
                        return `${decimal} fits in four hex digits and 16 bits.`;
                    }

                    return `${decimal} uses ${decimal.toString(2).length} bits in binary representation.`;
                }

                function updateInterface() {
                    const mode = getMode();

                    if (mode === 'decimal-to-hex') {
                        inputLabel.textContent = 'Enter Decimal Number';
                        inputHelp.textContent = 'Use whole numbers from 0 to 9007199254740991.';
                        inputValue.placeholder = 'e.g. 255';
                        resultTitle.textContent = 'Hexadecimal Value';
                        resultDescription.textContent = 'Decimal converted to hexadecimal';
                        return;
                    }

                    inputLabel.textContent = 'Enter Hexadecimal Number';
                    inputHelp.textContent = 'Use 0-9 and A-F.';
                    inputValue.placeholder = 'e.g. FF';
                    resultTitle.textContent = 'Decimal Value';
                    resultDescription.textContent = 'Hexadecimal converted to decimal';
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
                    let hex;
                    let steps;
                    let outputValue;

                    if (mode === 'decimal-to-hex') {
                        const parsed = parseDecimal(input);
                        if (parsed === null) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        decimal = parsed;
                        hex = decimal.toString(16).toUpperCase();
                        steps = buildToBaseSteps(decimal, 16);
                        outputValue = hex;
                    } else {
                        if (!strictHexPattern.test(input)) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        hex = input;
                        const parsed = parseHexToSafeInteger(hex);
                        if (parsed === null) {
                            renderInvalid();
                            setSectionVisibility();
                            return;
                        }

                        decimal = parsed;
                        steps = buildFromBaseSteps(hex, 16);
                        outputValue = String(decimal);
                    }

                    const binary = decimal.toString(2);
                    const octal = decimal.toString(8);
                    hex = hex || decimal.toString(16).toUpperCase();

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
                        const nextMode = getMode() === 'decimal-to-hex' ? 'hex-to-decimal' : 'decimal-to-hex';
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
