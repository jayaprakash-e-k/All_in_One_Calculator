<x-tool-page-layout
    title="kB to MB Converter - ConvertPro"
    description="Professional kilobyte to megabyte converter for digital storage calculations. Convert between KB and MB with binary and decimal standards, file size context, and detailed explanations."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-cyan-500 to-cyan-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Kilobyte to Megabyte Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Conversion Mode -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Conversion Direction
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-cyan-300 transition-colors cursor-pointer bg-cyan-50 border-cyan-300">
                                                <input type="radio" name="mode" value="kb-to-mb" class="text-cyan-600 focus:ring-cyan-500" checked>
                                                <span class="text-sm font-medium">kB → MB</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-cyan-300 transition-colors cursor-pointer">
                                                <input type="radio" name="mode" value="mb-to-kb" class="text-cyan-600 focus:ring-cyan-500">
                                                <span class="text-sm font-medium">MB → kB</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                            Enter Kilobytes (kB)
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter value (e.g., 1024)"
                                                step="any"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">kB</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500" id="inputHelp">Enter any positive number</p>
                                    </div>

                                    <!-- Calculation Standard -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Calculation Standard
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-cyan-300 transition-colors cursor-pointer bg-cyan-50 border-cyan-300">
                                                <input type="radio" name="standard" value="binary" class="text-cyan-600 focus:ring-cyan-500" checked>
                                                <div class="text-left">
                                                    <div class="text-sm font-medium">Binary (1024)</div>
                                                    <div class="text-xs text-gray-500">Computer/OS standard</div>
                                                </div>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-cyan-300 transition-colors cursor-pointer">
                                                <input type="radio" name="standard" value="decimal" class="text-cyan-600 focus:ring-cyan-500">
                                                <div class="text-left">
                                                    <div class="text-sm font-medium">Decimal (1000)</div>
                                                    <div class="text-xs text-gray-500">Storage manufacturer</div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- File Type Context -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            File Type Context (Optional)
                                        </label>
                                        <select 
                                            id="fileType" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="">General conversion</option>
                                            <option value="text">Text files (.txt, .doc)</option>
                                            <option value="image">Images (.jpg, .png, .gif)</option>
                                            <option value="audio">Audio files (.mp3, .wav)</option>
                                            <option value="video">Video files (.mp4, .avi)</option>
                                            <option value="document">Documents (.pdf, .docx)</option>
                                            <option value="archive">Archives (.zip, .rar)</option>
                                            <option value="executable">Programs (.exe, .app)</option>
                                        </select>
                                    </div>

                                    <!-- Quick Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="kb-example px-3 py-2 text-sm bg-gray-100 hover:bg-cyan-100 text-gray-700 hover:text-cyan-700 rounded-lg transition-colors" data-value="1024" data-mode="kb-to-mb">1024 kB</button>
                                            <button type="button" class="kb-example px-3 py-2 text-sm bg-gray-100 hover:bg-cyan-100 text-gray-700 hover:text-cyan-700 rounded-lg transition-colors" data-value="2048" data-mode="kb-to-mb">2048 kB</button>
                                            <button type="button" class="kb-example px-3 py-2 text-sm bg-gray-100 hover:bg-cyan-100 text-gray-700 hover:text-cyan-700 rounded-lg transition-colors" data-value="5" data-mode="mb-to-kb">5 MB</button>
                                            <button type="button" class="kb-example px-3 py-2 text-sm bg-gray-100 hover:bg-cyan-100 text-gray-700 hover:text-cyan-700 rounded-lg transition-colors" data-value="10" data-mode="mb-to-kb">10 MB</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-cyan-100 hover:bg-cyan-200 text-cyan-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <div class="p-6 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl border-l-4 border-cyan-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Megabytes (MB)</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-cyan-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-cyan-600 hover:text-cyan-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Both Units Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Kilobytes -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Kilobytes (kB)</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="kbDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">1024 bytes</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Megabytes -->
                                        <div class="p-4 bg-gradient-to-r from-cyan-50 to-teal-50 rounded-lg border-l-4 border-cyan-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Megabytes (MB)</h4>
                                                <div class="text-lg font-bold text-cyan-600 font-mono" id="mbDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">1024 kB (binary)</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Conversion Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">kB to MB Conversion Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div><strong>Binary:</strong> 1024 kB = 1 MB</div>
                                        <div><strong>Decimal:</strong> 1000 kB = 1 MB</div>
                                        <div>1 MB = 1,024 kB (Binary)</div>
                                        <div>1 MB = 1,000 kB (Decimal)</div>
                                        <div>1 kB = 1,024 bytes</div>
                                        <div>1 MB = 1,048,576 bytes</div>
                                        <div>1 kB = 8,192 bits</div>
                                        <div>1 MB = 8,388,608 bits</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About kB to MB Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Binary vs Decimal Standards</h4>
                                    <p>The binary standard (1024 kB = 1 MB) is used by operating systems and software, while the decimal standard (1000 kB = 1 MB) is often used by storage device manufacturers. This difference explains discrepancies in displayed file sizes.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                                    <p>Understanding kB to MB conversion is essential for file management, storage planning, bandwidth calculations, and comparing storage devices. It helps in determining how many files can fit on storage media and estimating download times.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-cyan-50 rounded-lg border border-cyan-200">
                                <p class="text-sm text-cyan-800">
                                    <strong>Quick Tip:</strong> Use binary (1024) for system files and software, decimal (1000) when matching storage device specifications!
                                </p>
                            </div>
                        </div>

                        <!-- File Size Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common File Size Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Small Files (kB)</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-cyan-600 cursor-pointer hover:text-cyan-800" data-example="50" data-mode="kb-to-mb">Text Document: ~50 kB</div>
                                        <div class="text-xs text-gray-600 mt-1">Typical Word document</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-cyan-600 cursor-pointer hover:text-cyan-800" data-example="500" data-mode="kb-to-mb">Web Page: ~500 kB</div>
                                        <div class="text-xs text-gray-600 mt-1">Average website with images</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Medium Files (MB)</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-cyan-600 cursor-pointer hover:text-cyan-800" data-example="3" data-mode="mb-to-kb">Digital Photo: ~3 MB</div>
                                        <div class="text-xs text-gray-600 mt-1">High-resolution JPEG image</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-cyan-600 cursor-pointer hover:text-cyan-800" data-example="5" data-mode="mb-to-kb">MP3 Song: ~5 MB</div>
                                        <div class="text-xs text-gray-600 mt-1">4-minute music track</div>
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
                        const standardRadios = document.getElementsByName('standard');
                        const fileType = document.getElementById('fileType');
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const kbDisplay = document.getElementById('kbDisplay');
                        const mbDisplay = document.getElementById('mbDisplay');
                        const binaryResult = document.getElementById('binaryResult');
                        const decimalResult = document.getElementById('decimalResult');
                        const standardUsed = document.getElementById('standardUsed');
                        const conversionFactor = document.getElementById('conversionFactor');
                        const conversionFormula = document.getElementById('conversionFormula');
                        const contextInfo = document.getElementById('contextInfo');
                        const bytesDisplay = document.getElementById('bytesDisplay');
                        const gbDisplay = document.getElementById('gbDisplay');
                        const bitsDisplay = document.getElementById('bitsDisplay');
                        const modem56k = document.getElementById('modem56k');
                        const dsl1mbps = document.getElementById('dsl1mbps');
                        const cable10mbps = document.getElementById('cable10mbps');
                        const fiber100mbps = document.getElementById('fiber100mbps');
                        const copyResult = document.getElementById('copyResult');

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getStandard() {
                            return document.querySelector('input[name="standard"]:checked').value;
                        }

                        function formatNumber(num) {
                            if (num >= 1e12) {
                                return num.toExponential(3);
                            } else if (num >= 1e9) {
                                return (num / 1e9).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'B';
                            } else if (num >= 1e6) {
                                return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'M';
                            } else if (num >= 1e3) {
                                return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'K';
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: 6 });
                            }
                        }

                        function formatTime(seconds) {
                            if (seconds < 60) {
                                return `${seconds.toFixed(1)}s`;
                            } else if (seconds < 3600) {
                                return `${(seconds / 60).toFixed(1)}m`;
                            } else if (seconds < 86400) {
                                return `${(seconds / 3600).toFixed(1)}h`;
                            } else {
                                return `${(seconds / 86400).toFixed(1)}d`;
                            }
                        }

                        function getFileContext(sizeInMB, fileTypeValue) {
                            const contexts = {
                                text: {
                                    name: 'Text Files',
                                    examples: sizeInMB < 0.1 ? 'Small documents, code files' : 
                                             sizeInMB < 1 ? 'Large documents, ebooks' : 'Very large text databases'
                                },
                                image: {
                                    name: 'Image Files',
                                    examples: sizeInMB < 0.5 ? 'Small JPEG images, thumbnails' :
                                             sizeInMB < 5 ? 'High-quality photos, screenshots' :
                                             sizeInMB < 20 ? 'RAW camera files, large images' : 'Professional photography files'
                                },
                                audio: {
                                    name: 'Audio Files',
                                    examples: sizeInMB < 1 ? 'Short audio clips, ringtones' :
                                             sizeInMB < 10 ? 'MP3 songs, podcasts' :
                                             sizeInMB < 50 ? 'High-quality audio, albums' : 'Uncompressed audio files'
                                },
                                video: {
                                    name: 'Video Files',
                                    examples: sizeInMB < 10 ? 'Short video clips, GIFs' :
                                             sizeInMB < 100 ? 'Short videos, mobile recordings' :
                                             sizeInMB < 1000 ? 'Full-length movies (compressed)' : 'High-definition movies, 4K content'
                                },
                                document: {
                                    name: 'Document Files',
                                    examples: sizeInMB < 1 ? 'Simple PDFs, presentations' :
                                             sizeInMB < 10 ? 'Complex documents with images' :
                                             sizeInMB < 50 ? 'Large presentations, technical manuals' : 'Comprehensive document collections'
                                },
                                archive: {
                                    name: 'Archive Files',
                                    examples: sizeInMB < 10 ? 'Small compressed files' :
                                             sizeInMB < 100 ? 'Software packages, document archives' :
                                             sizeInMB < 1000 ? 'Large software distributions' : 'Complete system backups'
                                },
                                executable: {
                                    name: 'Executable Files',
                                    examples: sizeInMB < 1 ? 'Simple utilities, scripts' :
                                             sizeInMB < 50 ? 'Small applications, tools' :
                                             sizeInMB < 500 ? 'Standard software applications' : 'Large software suites, games'
                                }
                            };

                            if (fileTypeValue && contexts[fileTypeValue]) {
                                const context = contexts[fileTypeValue];
                                return `${context.name}: ${context.examples}`;
                            } else {
                                if (sizeInMB < 0.01) {
                                    return 'Very small files - text snippets, small icons, configuration files';
                                } else if (sizeInMB < 0.1) {
                                    return 'Small files - documents, small images, code files';
                                } else if (sizeInMB < 1) {
                                    return 'Medium files - web pages, small photos, short audio clips';
                                } else if (sizeInMB < 10) {
                                    return 'Large files - high-quality photos, music tracks, short videos';
                                } else if (sizeInMB < 100) {
                                    return 'Very large files - video clips, software applications, large documents';
                                } else {
                                    return 'Extremely large files - movies, software suites, data backups';
                                }
                            }
                        }

                        function calculateTransferTimes(sizeInMB) {
                            const sizeInBits = sizeInMB * 8 * 1024 * 1024; // Convert MB to bits
                            
                            return {
                                modem56k: formatTime(sizeInBits / (56 * 1000)),
                                dsl1mbps: formatTime(sizeInBits / (1 * 1000 * 1000)),
                                cable10mbps: formatTime(sizeInBits / (10 * 1000 * 1000)),
                                fiber100mbps: formatTime(sizeInBits / (100 * 1000 * 1000))
                            };
                        }

                        function updateInterface() {
                            const mode = getMode();
                            
                            if (mode === 'kb-to-mb') {
                                inputLabel.textContent = 'Enter Kilobytes (kB)';
                                inputUnit.textContent = 'kB';
                                inputHelp.textContent = 'Enter kilobytes to convert to megabytes';
                                resultTitle.textContent = 'Megabytes (MB)';
                                resultDescription.textContent = 'Converted to megabytes';
                                inputValue.placeholder = 'Enter kB (e.g., 1024)';
                            } else {
                                inputLabel.textContent = 'Enter Megabytes (MB)';
                                inputUnit.textContent = 'MB';
                                inputHelp.textContent = 'Enter megabytes to convert to kilobytes';
                                resultTitle.textContent = 'Kilobytes (kB)';
                                resultDescription.textContent = 'Converted to kilobytes';
                                inputValue.placeholder = 'Enter MB (e.g., 5)';
                            }
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const mode = getMode();
                            const standard = getStandard();
                            const fileTypeValue = fileType.value;

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                let kb, mb;
                                const divisor = standard === 'binary' ? 1024 : 1000;

                                if (mode === 'kb-to-mb') {
                                    kb = inputVal;
                                    mb = kb / divisor;
                                } else {
                                    mb = inputVal;
                                    kb = mb * divisor;
                                }

                                // Update primary output
                                output.textContent = formatNumber(mode === 'kb-to-mb' ? mb : kb);
                                resultDescription.textContent = mode === 'kb-to-mb' ? 
                                    `${inputVal} kB = ${formatNumber(mb)} MB` : 
                                    `${inputVal} MB = ${formatNumber(kb)} kB`;

                                // Update displays
                                kbDisplay.textContent = formatNumber(kb);
                                mbDisplay.textContent = formatNumber(mb);

                                // Binary vs Decimal comparison
                                const binaryMB = kb / 1024;
                                const decimalMB = kb / 1000;
                                binaryResult.textContent = mode === 'kb-to-mb' ? 
                                    `${formatNumber(binaryMB)} MB` : `${formatNumber(kb)} kB`;
                                decimalResult.textContent = mode === 'kb-to-mb' ? 
                                    `${formatNumber(decimalMB)} MB` : `${formatNumber(mb * 1000)} kB`;

                                // Calculation details
                                standardUsed.textContent = standard === 'binary' ? 'Binary (1024)' : 'Decimal (1000)';
                                if (mode === 'kb-to-mb') {
                                    conversionFactor.textContent = `÷ ${divisor}`;
                                    conversionFormula.textContent = `kB ÷ ${divisor}`;
                                } else {
                                    conversionFactor.textContent = `× ${divisor}`;
                                    conversionFormula.textContent = `MB × ${divisor}`;
                                }

                                // File size context
                                contextInfo.textContent = getFileContext(mb, fileTypeValue);

                                // Additional conversions
                                const bytes = kb * 1024;
                                const gb = mb / (standard === 'binary' ? 1024 : 1000);
                                const bits = bytes * 8;
                                
                                bytesDisplay.textContent = formatNumber(bytes);
                                gbDisplay.textContent = formatNumber(gb);
                                bitsDisplay.textContent = formatNumber(bits);

                                // Transfer time estimates
                                const transferTimes = calculateTransferTimes(mb);
                                modem56k.textContent = transferTimes.modem56k;
                                dsl1mbps.textContent = transferTimes.dsl1mbps;
                                cable10mbps.textContent = transferTimes.cable10mbps;
                                fiber100mbps.textContent = transferTimes.fiber100mbps;

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            resultDescription.textContent = 'Converted result';
                            kbDisplay.textContent = '--';
                            mbDisplay.textContent = '--';
                            binaryResult.textContent = '--';
                            decimalResult.textContent = '--';
                            standardUsed.textContent = 'Binary (1024)';
                            conversionFactor.textContent = '÷ 1024';
                            conversionFormula.textContent = 'kB ÷ 1024';
                            contextInfo.textContent = 'Enter a value to see file size context';
                            bytesDisplay.textContent = '--';
                            gbDisplay.textContent = '--';
                            bitsDisplay.textContent = '--';
                            modem56k.textContent = '--';
                            dsl1mbps.textContent = '--';
                            cable10mbps.textContent = '--';
                            fiber100mbps.textContent = '--';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            document.querySelector('input[value="kb-to-mb"]').checked = true;
                            document.querySelector('input[value="binary"]').checked = true;
                            fileType.value = '';
                            updateInterface();
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        fileType.addEventListener('change', convert);
                        
                        modeRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateInterface();
                                convert();
                            });
                        });

                        standardRadios.forEach(radio => {
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

                        // Example buttons
                        const kbExamples = document.querySelectorAll('.kb-example');
                        kbExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const mode = this.getAttribute('data-mode');
                                
                                inputValue.value = value;
                                document.querySelector(`input[value="${mode}"]`).checked = true;
                                updateInterface();
                                convert();
                                
                                // Update button styles
                                kbExamples.forEach(btn => btn.classList.remove('bg-cyan-100', 'text-cyan-700'));
                                kbExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-cyan-100', 'text-cyan-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                const mode = this.getAttribute('data-mode');
                                
                                inputValue.value = value;
                                if (mode) {
                                    document.querySelector(`input[value="${mode}"]`).checked = true;
                                    updateInterface();
                                }
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
                                const newMode = currentMode === 'kb-to-mb' ? 'mb-to-kb' : 'kb-to-mb';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                convert();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
