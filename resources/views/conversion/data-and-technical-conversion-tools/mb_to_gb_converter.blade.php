<x-tool-page-layout
    title="MB to GB Converter - ConvertPro"
    description="Professional megabyte to gigabyte converter for digital storage calculations. Convert between MB and GB with binary and decimal standards, storage context, and detailed explanations."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Megabyte to Gigabyte Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Conversion Direction -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Conversion Direction
                                        </label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer bg-indigo-50 border-indigo-300">
                                                <input type="radio" name="mode" value="mb-to-gb" class="text-indigo-600 focus:ring-indigo-500" checked>
                                                <span class="text-sm font-medium">MB → GB</span>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="mode" value="gb-to-mb" class="text-indigo-600 focus:ring-indigo-500">
                                                <span class="text-sm font-medium">GB → MB</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                            Enter Megabytes (MB)
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter value (e.g., 1024)"
                                                step="any"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium" id="inputUnit">MB</span>
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
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer bg-indigo-50 border-indigo-300">
                                                <input type="radio" name="standard" value="binary" class="text-indigo-600 focus:ring-indigo-500" checked>
                                                <div class="text-left">
                                                    <div class="text-sm font-medium">Binary (1024)</div>
                                                    <div class="text-xs text-gray-500">Operating systems</div>
                                                </div>
                                            </label>
                                            <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                                                <input type="radio" name="standard" value="decimal" class="text-indigo-600 focus:ring-indigo-500">
                                                <div class="text-left">
                                                    <div class="text-sm font-medium">Decimal (1000)</div>
                                                    <div class="text-xs text-gray-500">Manufacturers</div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Storage Device Context -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Storage Device Context (Optional)
                                        </label>
                                        <select 
                                            id="deviceType" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="">General conversion</option>
                                            <option value="hdd">Hard Disk Drive (HDD)</option>
                                            <option value="ssd">Solid State Drive (SSD)</option>
                                            <option value="usb">USB Flash Drive</option>
                                            <option value="sdcard">SD/MicroSD Card</option>
                                            <option value="ram">System Memory (RAM)</option>
                                            <option value="cloud">Cloud Storage</option>
                                            <option value="optical">Optical Media (CD/DVD/Blu-ray)</option>
                                        </select>
                                    </div>

                                    <!-- Precision Level -->
                                    <div class="space-y-2 hidden">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Display Precision
                                        </label>
                                        <div class="flex items-center space-x-4">
                                            <input 
                                                type="range" 
                                                id="precision" 
                                                min="2" 
                                                max="10" 
                                                value="6" 
                                                class="flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                                            >
                                            <span class="text-sm font-mono text-gray-700 min-w-[3rem]" id="precisionValue">6 digits</span>
                                        </div>
                                        <p class="text-xs text-gray-500">Adjust decimal places for display precision</p>
                                    </div>

                                    <!-- Quick Storage Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Storage Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="storage-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="1024" data-mode="mb-to-gb">1024 MB</button>
                                            <button type="button" class="storage-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="2048" data-mode="mb-to-gb">2048 MB</button>
                                            <button type="button" class="storage-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="500" data-mode="gb-to-mb">500 GB</button>
                                            <button type="button" class="storage-example px-3 py-2 text-sm bg-gray-100 hover:bg-indigo-100 text-gray-700 hover:text-indigo-700 rounded-lg transition-colors" data-value="1000" data-mode="gb-to-mb">1000 GB</button>
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

                                <!-- Results Display -->
                                <div class="mt-8 space-y-4">
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border-l-4 border-indigo-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Gigabytes (GB)</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-indigo-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-indigo-600 hover:text-indigo-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Both Units Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Megabytes -->
                                        <div class="p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg border-l-4 border-blue-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Megabytes (MB)</h4>
                                                <div class="text-lg font-bold text-blue-600 font-mono" id="mbDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁶ bytes</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Gigabytes -->
                                        <div class="p-4 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                            <div class="text-center">
                                                <h4 class="text-sm font-semibold text-gray-700 mb-1">Gigabytes (GB)</h4>
                                                <div class="text-lg font-bold text-indigo-600 font-mono" id="gbDisplay">--</div>
                                                <div class="text-xs text-gray-500 mt-1">10⁹ bytes</div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Storage Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Storage Unit Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div><strong>Binary:</strong> 1024 MB = 1 GB</div>
                                        <div><strong>Decimal:</strong> 1000 MB = 1 GB</div>
                                        <div>1 GB = 1,024 MB (Binary)</div>
                                        <div>1 GB = 1,000 MB (Decimal)</div>
                                        <div>1 MB = 1,048,576 bytes</div>
                                        <div>1 GB = 1,073,741,824 bytes</div>
                                        <div>Difference: ~7.4% larger in binary</div>
                                        <div>500 GB drive ≈ 465 GB (OS view)</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About MB to GB Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Storage Standards</h4>
                                    <p>The difference between binary (1024) and decimal (1000) standards is significant in storage. Operating systems use binary calculations, while manufacturers use decimal. This explains why a 500 GB drive shows as ~465 GB in your system.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Impact</h4>
                                    <p>Understanding this conversion is crucial for storage planning, comparing drive specifications, estimating backup requirements, and managing storage capacity across different devices and platforms.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                                <p class="text-sm text-indigo-800">
                                    <strong>Storage Tip:</strong> Always account for the ~7% difference between manufacturer specs (decimal) and system display (binary) when planning storage needs!
                                </p>
                            </div>
                        </div>

                        <!-- Storage Device Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Storage Device Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Consumer Storage</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-example="4700" data-mode="mb-to-gb">DVD Movie: ~4.7 GB</div>
                                        <div class="text-xs text-gray-600 mt-1">Standard single-layer DVD capacity</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-example="32" data-mode="gb-to-mb">USB Drive: 32 GB</div>
                                        <div class="text-xs text-gray-600 mt-1">Common USB flash drive size</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Professional Storage</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-example="1000" data-mode="gb-to-mb">External HDD: 1 TB</div>
                                        <div class="text-xs text-gray-600 mt-1">1000 GB external hard drive</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-indigo-600 cursor-pointer hover:text-indigo-800" data-example="512" data-mode="gb-to-mb">SSD: 512 GB</div>
                                        <div class="text-xs text-gray-600 mt-1">Modern laptop SSD capacity</div>
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
                        const deviceType = document.getElementById('deviceType');
                        const precision = document.getElementById('precision');
                        const precisionValue = document.getElementById('precisionValue');
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const mbDisplay = document.getElementById('mbDisplay');
                        const gbDisplay = document.getElementById('gbDisplay');
                        const binaryResult = document.getElementById('binaryResult');
                        const decimalResult = document.getElementById('decimalResult');
                        const standardUsed = document.getElementById('standardUsed');
                        const conversionFactor = document.getElementById('conversionFactor');
                        const precisionDisplay = document.getElementById('precisionDisplay');
                        const contextInfo = document.getElementById('contextInfo');
                        const kbDisplay = document.getElementById('kbDisplay');
                        const tbDisplay = document.getElementById('tbDisplay');
                        const bytesDisplay = document.getElementById('bytesDisplay');
                        const bitsDisplay = document.getElementById('bitsDisplay');
                        const compatibilityInfo = document.getElementById('compatibilityInfo');
                        const photoCount = document.getElementById('photoCount');
                        const songCount = document.getElementById('songCount');
                        const movieCount = document.getElementById('movieCount');
                        const docCount = document.getElementById('docCount');
                        const copyResult = document.getElementById('copyResult');

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function getStandard() {
                            return document.querySelector('input[name="standard"]:checked').value;
                        }

                        function getPrecision() {
                            return parseInt(precision.value);
                        }

                        function formatNumber(num, decimals = null) {
                            const precision = decimals || getPrecision();
                            if (num >= 1e12) {
                                return num.toExponential(3);
                            } else if (num >= 1e9) {
                                return (num / 1e9).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'B';
                            } else if (num >= 1e6) {
                                return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'M';
                            } else if (num >= 1e3) {
                                return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'K';
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: precision });
                            }
                        }

                        function getStorageContext(sizeInGB, deviceTypeValue) {
                            const contexts = {
                                hdd: {
                                    name: 'Hard Disk Drive (HDD)',
                                    getInfo: (gb) => {
                                        if (gb >= 8000) return 'Enterprise/NAS drives - massive storage capacity';
                                        if (gb >= 2000) return 'High-capacity desktop drives - bulk storage';
                                        if (gb >= 500) return 'Standard desktop drives - general purpose';
                                        if (gb >= 100) return 'Laptop drives or older desktop drives';
                                        return 'Legacy or specialized small-capacity drives';
                                    }
                                },
                                ssd: {
                                    name: 'Solid State Drive (SSD)',
                                    getInfo: (gb) => {
                                        if (gb >= 4000) return 'High-end enterprise SSDs - data center storage';
                                        if (gb >= 1000) return 'Professional/gaming SSDs - high performance';
                                        if (gb >= 500) return 'Standard laptop/desktop SSDs - mainstream';
                                        if (gb >= 128) return 'Entry-level SSDs - basic upgrade';
                                        return 'Small cache drives or embedded storage';
                                    }
                                },
                                usb: {
                                    name: 'USB Flash Drive',
                                    getInfo: (gb) => {
                                        if (gb >= 512) return 'High-capacity USB drives - large file transfers';
                                        if (gb >= 128) return 'Professional USB drives - regular backups';
                                        if (gb >= 32) return 'Standard USB drives - document storage';
                                        if (gb >= 8) return 'Basic USB drives - small file transfers';
                                        return 'Legacy or promotional USB drives';
                                    }
                                },
                                sdcard: {
                                    name: 'SD/MicroSD Card',
                                    getInfo: (gb) => {
                                        if (gb >= 512) return 'Professional cards - 4K video, high-res photography';
                                        if (gb >= 128) return 'High-capacity cards - extensive media storage';
                                        if (gb >= 32) return 'Standard cards - camera, phone, tablet storage';
                                        if (gb >= 8) return 'Basic cards - simple device storage';
                                        return 'Legacy cards or specialized applications';
                                    }
                                },
                                ram: {
                                    name: 'System Memory (RAM)',
                                    getInfo: (gb) => {
                                        if (gb >= 128) return 'Server/workstation RAM - intensive computing';
                                        if (gb >= 32) return 'High-end gaming/professional RAM';
                                        if (gb >= 16) return 'Standard gaming/productivity RAM';
                                        if (gb >= 8) return 'Basic modern system RAM';
                                        return 'Legacy system RAM or embedded devices';
                                    }
                                },
                                cloud: {
                                    name: 'Cloud Storage',
                                    getInfo: (gb) => {
                                        if (gb >= 1000) return 'Business cloud storage - team collaboration';
                                        if (gb >= 100) return 'Personal premium storage - extensive backup';
                                        if (gb >= 50) return 'Standard personal storage - photos, documents';
                                        if (gb >= 15) return 'Free tier storage - basic backup';
                                        return 'Minimal cloud storage - trial accounts';
                                    }
                                },
                                optical: {
                                    name: 'Optical Media',
                                    getInfo: (gb) => {
                                        if (gb >= 100) return 'Blu-ray discs - HD movies, large archives';
                                        if (gb >= 25) return 'Single-layer Blu-ray - HD content';
                                        if (gb >= 8.5) return 'Dual-layer DVD - extended content';
                                        if (gb >= 4.7) return 'Standard DVD - movies, software';
                                        return 'CD or mini-disc format';
                                    }
                                }
                            };

                            if (deviceTypeValue && contexts[deviceTypeValue]) {
                                const context = contexts[deviceTypeValue];
                                return `${context.name}: ${context.getInfo(sizeInGB)}`;
                            } else {
                                if (sizeInGB >= 1000) {
                                    return 'Large storage capacity - suitable for extensive media libraries, backups, or enterprise use';
                                } else if (sizeInGB >= 100) {
                                    return 'Medium-high storage capacity - ideal for personal computers, gaming, and multimedia';
                                } else if (sizeInGB >= 10) {
                                    return 'Medium storage capacity - suitable for documents, photos, and basic applications';
                                } else if (sizeInGB >= 1) {
                                    return 'Small storage capacity - basic file storage and simple applications';
                                } else {
                                    return 'Very small storage capacity - limited to small files and basic data';
                                }
                            }
                        }

                        function getDeviceCompatibility(sizeInGB, deviceTypeValue) {
                            if (!deviceTypeValue) {
                                return 'Select a device type for specific compatibility information';
                            }

                            const compatibility = {
                                hdd: `Modern systems support drives up to 18TB+. ${sizeInGB >= 2000 ? 'May require GPT partitioning.' : 'Compatible with MBR/GPT.'}`,
                                ssd: `SATA SSDs up to 8TB, NVMe up to 15TB+. ${sizeInGB >= 1000 ? 'Check motherboard M.2 support.' : 'Standard compatibility.'}`,
                                usb: `USB 3.0+ recommended for large capacities. ${sizeInGB >= 32 ? 'May need exFAT formatting.' : 'FAT32 compatible.'}`,
                                sdcard: `Check device maximum capacity support. ${sizeInGB >= 64 ? 'SDXC format required.' : 'SDHC compatible.'}`,
                                ram: `Check motherboard/CPU maximum support. ${sizeInGB >= 32 ? 'May require specific slots/configuration.' : 'Standard configuration.'}`,
                                cloud: `Internet bandwidth affects sync speed. ${sizeInGB >= 100 ? 'Consider unlimited plans.' : 'Basic plans sufficient.'}`,
                                optical: sizeInGB >= 25 ? 'Requires Blu-ray compatible drive' : sizeInGB >= 4.7 ? 'DVD drive required' : 'CD drive sufficient'
                            };

                            return compatibility[deviceTypeValue] || 'Compatibility information not available';
                        }

                        function calculateStorageExamples(totalMB) {
                            // Average file sizes in MB
                            const fileSizes = {
                                photo: 3,      // High-quality JPEG
                                song: 4,       // MP3 at good quality
                                movie: 1400,   // Standard definition movie
                                document: 0.1  // Text document
                            };

                            return {
                                photos: Math.floor(totalMB / fileSizes.photo),
                                songs: Math.floor(totalMB / fileSizes.song),
                                movies: Math.floor(totalMB / fileSizes.movie),
                                documents: Math.floor(totalMB / fileSizes.document)
                            };
                        }

                        function updateInterface() {
                            const mode = getMode();
                            
                            if (mode === 'mb-to-gb') {
                                inputLabel.textContent = 'Enter Megabytes (MB)';
                                inputUnit.textContent = 'MB';
                                inputHelp.textContent = 'Enter megabytes to convert to gigabytes';
                                resultTitle.textContent = 'Gigabytes (GB)';
                                resultDescription.textContent = 'Converted to gigabytes';
                                inputValue.placeholder = 'Enter MB (e.g., 1024)';
                            } else {
                                inputLabel.textContent = 'Enter Gigabytes (GB)';
                                inputUnit.textContent = 'GB';
                                inputHelp.textContent = 'Enter gigabytes to convert to megabytes';
                                resultTitle.textContent = 'Megabytes (MB)';
                                resultDescription.textContent = 'Converted to megabytes';
                                inputValue.placeholder = 'Enter GB (e.g., 5)';
                            }
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const mode = getMode();
                            const standard = getStandard();
                            const deviceTypeValue = deviceType.value;

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                let mb, gb;
                                const divisor = standard === 'binary' ? 1024 : 1000;

                                if (mode === 'mb-to-gb') {
                                    mb = inputVal;
                                    gb = mb / divisor;
                                } else {
                                    gb = inputVal;
                                    mb = gb * divisor;
                                }

                                // Update primary output
                                output.textContent = formatNumber(mode === 'mb-to-gb' ? gb : mb);
                                resultDescription.textContent = mode === 'mb-to-gb' ? 
                                    `${inputVal} MB = ${formatNumber(gb)} GB` : 
                                    `${inputVal} GB = ${formatNumber(mb)} MB`;

                                // Update displays
                                mbDisplay.textContent = formatNumber(mb);
                                gbDisplay.textContent = formatNumber(gb);

                                // Binary vs Decimal comparison
                                const binaryGB = mb / 1024;
                                const decimalGB = mb / 1000;
                                binaryResult.textContent = mode === 'mb-to-gb' ? 
                                    `${formatNumber(binaryGB)} GB` : `${formatNumber(mb)} MB`;
                                decimalResult.textContent = mode === 'mb-to-gb' ? 
                                    `${formatNumber(decimalGB)} GB` : `${formatNumber(gb * 1000)} MB`;

                                // Calculation details
                                standardUsed.textContent = standard === 'binary' ? 'Binary (1024)' : 'Decimal (1000)';
                                if (mode === 'mb-to-gb') {
                                    conversionFactor.textContent = `÷ ${divisor}`;
                                } else {
                                    conversionFactor.textContent = `× ${divisor}`;
                                }
                                precisionDisplay.textContent = `${getPrecision()} digits`;

                                // Storage context
                                contextInfo.textContent = getStorageContext(gb, deviceTypeValue);

                                // Additional conversions
                                const kb = mb * (standard === 'binary' ? 1024 : 1000);
                                const tb = gb / (standard === 'binary' ? 1024 : 1000);
                                const bytes = mb * (standard === 'binary' ? 1048576 : 1000000);
                                const bits = bytes * 8;
                                
                                kbDisplay.textContent = formatNumber(kb);
                                tbDisplay.textContent = formatNumber(tb);
                                bytesDisplay.textContent = formatNumber(bytes);
                                bitsDisplay.textContent = formatNumber(bits);

                                // Device compatibility
                                compatibilityInfo.textContent = getDeviceCompatibility(gb, deviceTypeValue);

                                // Storage examples
                                const examples = calculateStorageExamples(mb);
                                photoCount.textContent = formatNumber(examples.photos, 0);
                                songCount.textContent = formatNumber(examples.songs, 0);
                                movieCount.textContent = formatNumber(examples.movies, 0);
                                docCount.textContent = formatNumber(examples.documents, 0);

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            resultDescription.textContent = 'Converted result';
                            mbDisplay.textContent = '--';
                            gbDisplay.textContent = '--';
                            binaryResult.textContent = '--';
                            decimalResult.textContent = '--';
                            standardUsed.textContent = 'Binary (1024)';
                            conversionFactor.textContent = '÷ 1024';
                            precisionDisplay.textContent = '6 digits';
                            contextInfo.textContent = 'Enter a value to see storage context';
                            kbDisplay.textContent = '--';
                            tbDisplay.textContent = '--';
                            bytesDisplay.textContent = '--';
                            bitsDisplay.textContent = '--';
                            compatibilityInfo.textContent = 'Select a device type for compatibility information';
                            photoCount.textContent = '--';
                            songCount.textContent = '--';
                            movieCount.textContent = '--';
                            docCount.textContent = '--';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            document.querySelector('input[value="mb-to-gb"]').checked = true;
                            document.querySelector('input[value="binary"]').checked = true;
                            deviceType.value = '';
                            precision.value = 6;
                            precisionValue.textContent = '6 digits';
                            updateInterface();
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        deviceType.addEventListener('change', convert);
                        
                        modeRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateInterface();
                                convert();
                            });
                        });

                        standardRadios.forEach(radio => {
                            radio.addEventListener('change', convert);
                        });

                        precision.addEventListener('input', function() {
                            precisionValue.textContent = this.value + ' digits';
                            convert();
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
                        const storageExamples = document.querySelectorAll('.storage-example');
                        storageExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const mode = this.getAttribute('data-mode');
                                
                                inputValue.value = value;
                                document.querySelector(`input[value="${mode}"]`).checked = true;
                                updateInterface();
                                convert();
                                
                                // Update button styles
                                storageExamples.forEach(btn => btn.classList.remove('bg-indigo-100', 'text-indigo-700'));
                                storageExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-indigo-100', 'text-indigo-700');
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
                        precisionValue.textContent = precision.value + ' digits';
                        inputValue.focus();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearAll();
                            } else if (e.ctrlKey && e.key === 'm') {
                                e.preventDefault();
                                const currentMode = getMode();
                                const newMode = currentMode === 'mb-to-gb' ? 'gb-to-mb' : 'mb-to-gb';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                convert();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
