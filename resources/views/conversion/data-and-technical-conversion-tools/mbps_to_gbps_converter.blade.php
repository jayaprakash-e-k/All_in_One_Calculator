<x-tool-page-layout
    title="Mbps to Gbps Converter - ConvertPro"
    description="Professional Mbps to Gbps converter for network speeds. Convert between megabits and gigabits per second with detailed analysis and network performance insights."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Network Speed Unit Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Conversion Direction -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Conversion Direction
                                                                                </label>
                                                                                <div class="grid grid-cols-2 gap-2">
                                                                                    <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer bg-purple-50 border-purple-300">
                                                                                        <input type="radio" name="mode" value="mbps-to-gbps" class="text-purple-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">Mbps → Gbps</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-3 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                                                                        <input type="radio" name="mode" value="gbps-to-mbps" class="text-purple-600 focus:ring-slate-200">
                                                                                        <span class="text-sm font-medium">Gbps → Mbps</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Input Value -->
                                                                            <div class="space-y-2">
                                                                                <label for="inputValue" class="block text-sm font-semibold text-gray-700" id="inputLabel">
                                                                                    Enter Speed in Mbps
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="inputValue" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-mono" 
                                                                                        placeholder="Enter speed (e.g., 1000)"
                                                                                        step="any"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium" id="inputUnit">Mbps</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500" id="inputHelp">Enter network speed value</p>
                                                                            </div>

                                                                            <!-- Network Technology Context -->
                                                                            <div class="space-y-2">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Network Technology Context
                                                                                </label>
                                                                                <select 
                                                                                    id="networkType" 
                                                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium bg-white"
                                                                                >
                                                                                    <option value="">General conversion</option>
                                                                                    <option value="ethernet">Ethernet Standards</option>
                                                                                    <option value="fiber">Fiber Optic</option>
                                                                                    <option value="wireless">Wireless (Wi-Fi)</option>
                                                                                    <option value="cellular">Cellular (4G/5G)</option>
                                                                                    <option value="wan">WAN/Internet</option>
                                                                                    <option value="datacenter">Data Center</option>
                                                                                </select>
                                                                            </div>

                                                                            <!-- Speed Categories -->
                                                                            <div class="space-y-2 hidden">
                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                    Speed Category Analysis
                                                                                </label>
                                                                                <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                                                                        <input type="checkbox" name="showCategory" class="text-purple-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">Show category</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                                                                        <input type="checkbox" name="showComparison" class="text-purple-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">Show comparison</span>
                                                                                    </label>
                                                                                    <label class="flex items-center space-x-2 p-2 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors cursor-pointer">
                                                                                        <input type="checkbox" name="showUsage" class="text-purple-600 focus:ring-slate-200" checked>
                                                                                        <span class="text-sm font-medium">Show usage</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>



                                                                            <!-- Clear Button -->
                                                                            <div class="flex justify-center">
                                                                                <button 
                                                                                    type="button" 
                                                                                    id="clearButton"
                                                                                    class="inline-flex items-center px-4 py-2 bg-purple-100 hover:bg-purple-200 text-purple-700 font-medium rounded-lg transition-colors duration-200"
                                                                                >
                                                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                    </svg>
                                                                                    Clear
                                                                                </button>
                                                                            </div>

                                                                        </form>
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Results Display -->
                                                                        <div class="mt-8 space-y-4">
                                                                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>

                                                                            <!-- Primary Result -->
                                                                            <div class="p-6 bg-gradient-to-r from-purple-50 to-violet-50 rounded-xl border-l-4 border-purple-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Gigabits per Second</h4>
                                                                                        <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-purple-600 font-mono" id="output">--</div>
                                                                                        <button class="text-xs text-purple-600 hover:text-purple-800 mt-1" id="copyResult">Copy Result</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Speed Comparison -->
                                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                                <!-- Mbps -->
                                                                                <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Megabits per Second</h4>
                                                                                        <div class="text-lg font-bold text-blue-600 font-mono" id="mbpsDisplay">--</div>
                                                                                        <div class="text-xs text-gray-500 mt-1">10⁶ bits/second</div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Gbps -->
                                                                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Gigabits per Second</h4>
                                                                                        <div class="text-lg font-bold text-purple-600 font-mono" id="gbpsDisplay">--</div>
                                                                                        <div class="text-xs text-gray-500 mt-1">10⁹ bits/second</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                    </div>
                                    </div>
                                </div>
                            </div>
    

        <div class="mt-6 space-y-4">
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <!-- Quick Speed Examples -->
                                                    <div class="space-y-2">
                                                        <label class="block text-sm font-semibold text-gray-700">
                                                            Quick Speed Examples
                                                        </label>
                                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                                            <button type="button" class="speed-example px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors" data-value="1000" data-mode="mbps-to-gbps">1000 Mbps</button>
                                                            <button type="button" class="speed-example px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors" data-value="10000" data-mode="mbps-to-gbps">10 Gbps</button>
                                                            <button type="button" class="speed-example px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors" data-value="2.5" data-mode="gbps-to-mbps">2.5 Gbps</button>
                                                            <button type="button" class="speed-example px-3 py-2 text-sm bg-gray-100 hover:bg-purple-100 text-gray-700 hover:text-purple-700 rounded-lg transition-colors" data-value="100" data-mode="gbps-to-mbps">100 Gbps</button>
                                                        </div>
                                                    </div>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <!-- Speed Reference -->
                                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Network Speed Reference</h4>
                                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs text-gray-600">
                                                        <div><strong>1 Gbps</strong> = 1,000 Mbps</div>
                                                        <div><strong>10 Gbps</strong> = 10,000 Mbps</div>
                                                        <div><strong>100 Gbps</strong> = 100,000 Mbps</div>
                                                        <div><strong>1 Tbps</strong> = 1,000,000 Mbps</div>
                                                        <div>Fast Ethernet: 100 Mbps</div>
                                                        <div>Gigabit Ethernet: 1 Gbps</div>
                                                        <div>10-Gigabit Ethernet: 10 Gbps</div>
                                                        <div>100-Gigabit Ethernet: 100 Gbps</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Mbps to Gbps Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Network Speed Units</h4>
                                    <p>Mbps (Megabits per second) and Gbps (Gigabits per second) are standard units for measuring network bandwidth and data transfer rates. 1 Gbps equals exactly 1,000 Mbps in networking contexts, following decimal (not binary) conversion standards.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Practical Applications</h4>
                                    <p>Understanding these conversions is crucial for network planning, choosing internet service plans, evaluating network equipment specifications, and determining bandwidth requirements for applications and services.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-purple-50 rounded-lg border border-purple-200">
                                <p class="text-sm text-purple-800">
                                    <strong>Industry Note:</strong> Network speeds use decimal conversion (1000), unlike storage which often uses binary (1024). This is standardized across the networking industry!
                                </p>
                            </div>
                        </div>

                        <!-- Network Technology Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Network Technology Examples</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Consumer Internet</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-purple-600 cursor-pointer hover:text-purple-800" data-example="1000" data-mode="mbps-to-gbps">Gigabit Fiber: 1000 Mbps</div>
                                        <div class="text-xs text-gray-600 mt-1">1 Gbps residential fiber</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-purple-600 cursor-pointer hover:text-purple-800" data-example="2000" data-mode="mbps-to-gbps">Multi-Gig: 2000 Mbps</div>
                                        <div class="text-xs text-gray-600 mt-1">2 Gbps premium residential</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Enterprise Networks</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-purple-600 cursor-pointer hover:text-purple-800" data-example="10" data-mode="gbps-to-mbps">10 Gbps Ethernet</div>
                                        <div class="text-xs text-gray-600 mt-1">Standard enterprise backbone</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-purple-600 cursor-pointer hover:text-purple-800" data-example="100" data-mode="gbps-to-mbps">100 Gbps Core</div>
                                        <div class="text-xs text-gray-600 mt-1">Data center interconnect</div>
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
                        const networkType = document.getElementById('networkType');
                        const showCategory = document.getElementsByName('showCategory')[0];
                        const showComparison = document.getElementsByName('showComparison')[0];
                        const showUsage = document.getElementsByName('showUsage')[0];
                        const clearButton = document.getElementById('clearButton');
                        const inputLabel = document.getElementById('inputLabel');
                        const inputUnit = document.getElementById('inputUnit');
                        const inputHelp = document.getElementById('inputHelp');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const mbpsDisplay = document.getElementById('mbpsDisplay');
                        const gbpsDisplay = document.getElementById('gbpsDisplay');
                        const categoryInfo = document.getElementById('categoryInfo');
                        const currentSpeed = document.getElementById('currentSpeed');
                        const closestStandard = document.getElementById('closestStandard');
                        const nextLevel = document.getElementById('nextLevel');
                        const mbpsRate = document.getElementById('mbpsRate');
                        const gbpsRate = document.getElementById('gbpsRate');
                        const gbHour = document.getElementById('gbHour');
                        const tbDay = document.getElementById('tbDay');
                        const usageInfo = document.getElementById('usageInfo');
                        const techInfo = document.getElementById('techInfo');
                        const speedIndicator = document.getElementById('speedIndicator');
                        const speedPosition = document.getElementById('speedPosition');
                        const copyResult = document.getElementById('copyResult');

                        // Network standards (in Mbps)
                        const networkStandards = [
                            { name: 'Dial-up', speed: 0.056 },
                            { name: 'DSL Basic', speed: 1 },
                            { name: 'Cable Basic', speed: 25 },
                            { name: 'Broadband', speed: 100 },
                            { name: 'Fast Ethernet', speed: 100 },
                            { name: 'Cable Premium', speed: 500 },
                            { name: 'Gigabit Internet', speed: 1000 },
                            { name: 'Gigabit Ethernet', speed: 1000 },
                            { name: 'Multi-Gig', speed: 2500 },
                            { name: '5 Gbps Ethernet', speed: 5000 },
                            { name: '10 Gigabit Ethernet', speed: 10000 },
                            { name: '25 Gigabit Ethernet', speed: 25000 },
                            { name: '40 Gigabit Ethernet', speed: 40000 },
                            { name: '100 Gigabit Ethernet', speed: 100000 },
                            { name: '200 Gigabit Ethernet', speed: 200000 },
                            { name: '400 Gigabit Ethernet', speed: 400000 }
                        ];

                        function getMode() {
                            return document.querySelector('input[name="mode"]:checked').value;
                        }

                        function formatNumber(num, decimals = 3) {
                            if (num >= 1000000) {
                                return (num / 1000000).toFixed(decimals) + 'M';
                            } else if (num >= 1000) {
                                return (num / 1000).toFixed(decimals) + 'K';
                            } else if (num >= 1) {
                                return num.toFixed(decimals);
                            } else {
                                return num.toFixed(6);
                            }
                        }

                        function getSpeedCategory(mbps) {
                            if (mbps >= 100000) {
                                return {
                                    category: 'Ultra High-Speed Enterprise',
                                    description: 'Data center backbone, carrier-grade infrastructure',
                                    color: 'text-red-700'
                                };
                            } else if (mbps >= 10000) {
                                return {
                                    category: 'High-Speed Enterprise',
                                    description: 'Enterprise backbone, server farm connections',
                                    color: 'text-orange-700'
                                };
                            } else if (mbps >= 1000) {
                                return {
                                    category: 'Gigabit Class',
                                    description: 'High-end consumer, small business, enterprise edge',
                                    color: 'text-yellow-700'
                                };
                            } else if (mbps >= 100) {
                                return {
                                    category: 'High-Speed Broadband',
                                    description: 'Standard broadband, suitable for 4K streaming, gaming',
                                    color: 'text-green-700'
                                };
                            } else if (mbps >= 25) {
                                return {
                                    category: 'Standard Broadband',
                                    description: 'Basic broadband, suitable for HD streaming',
                                    color: 'text-blue-700'
                                };
                            } else if (mbps >= 1) {
                                return {
                                    category: 'Basic Internet',
                                    description: 'Basic connectivity, limited streaming capability',
                                    color: 'text-purple-700'
                                };
                            } else {
                                return {
                                    category: 'Legacy Connection',
                                    description: 'Dial-up or very limited connectivity',
                                    color: 'text-gray-700'
                                };
                            }
                        }

                        function getClosestStandards(speedMbps) {
                            let closest = networkStandards[0];
                            let nextLevel = null;
                            
                            for (let i = 0; i < networkStandards.length; i++) {
                                const standard = networkStandards[i];
                                if (Math.abs(standard.speed - speedMbps) < Math.abs(closest.speed - speedMbps)) {
                                    closest = standard;
                                }
                                if (standard.speed > speedMbps && !nextLevel) {
                                    nextLevel = standard;
                                }
                            }
                            
                            return { closest, nextLevel };
                        }

                        function getUsageScenarios(mbps) {
                            if (mbps >= 100000) {
                                return 'Massive data center operations, cloud provider infrastructure, research networks, inter-continental data transfers';
                            } else if (mbps >= 10000) {
                                return 'Enterprise data centers, high-frequency trading, scientific computing, large-scale video production';
                            } else if (mbps >= 1000) {
                                return 'Multi-user offices, content creation, server hosting, advanced gaming, 8K streaming';
                            } else if (mbps >= 100) {
                                return 'Family homes, small offices, 4K streaming, online gaming, video conferencing';
                            } else if (mbps >= 25) {
                                return 'HD streaming, video calls, general web browsing, smart home devices';
                            } else if (mbps >= 5) {
                                return 'Basic streaming, web browsing, email, light video calls';
                            } else {
                                return 'Basic web browsing, email, limited streaming capability';
                            }
                        }

                        function getTechnologyContext(mbps, techType) {
                            const contexts = {
                                ethernet: {
                                    name: 'Ethernet Standards',
                                    getInfo: (speed) => {
                                        if (speed >= 400000) return '400 Gigabit Ethernet - Next-gen data center standard';
                                        if (speed >= 200000) return '200 Gigabit Ethernet - High-end data center';
                                        if (speed >= 100000) return '100 Gigabit Ethernet - Modern data center backbone';
                                        if (speed >= 40000) return '40 Gigabit Ethernet - Server connections';
                                        if (speed >= 25000) return '25 Gigabit Ethernet - High-performance servers';
                                        if (speed >= 10000) return '10 Gigabit Ethernet - Enterprise standard';
                                        if (speed >= 5000) return '5 Gigabit Ethernet - Multi-gig standard';
                                        if (speed >= 2500) return '2.5 Gigabit Ethernet - Enhanced gigabit';
                                        if (speed >= 1000) return 'Gigabit Ethernet - Standard enterprise/home';
                                        if (speed >= 100) return 'Fast Ethernet - Legacy standard';
                                        return 'Below Ethernet standards';
                                    }
                                },
                                fiber: {
                                    name: 'Fiber Optic',
                                    getInfo: (speed) => {
                                        if (speed >= 100000) return 'Ultra-high capacity fiber - Carrier backbone';
                                        if (speed >= 10000) return 'High-capacity fiber - Metro networks';
                                        if (speed >= 1000) return 'Enterprise fiber - Business grade';
                                        if (speed >= 100) return 'Consumer fiber - Residential FTTH';
                                        return 'Basic fiber connection';
                                    }
                                },
                                wireless: {
                                    name: 'Wireless (Wi-Fi)',
                                    getInfo: (speed) => {
                                        if (speed >= 10000) return 'Wi-Fi 7 (802.11be) - Next generation';
                                        if (speed >= 5000) return 'Wi-Fi 6E/7 - Latest standards';
                                        if (speed >= 1000) return 'Wi-Fi 6 (802.11ax) - Current high-end';
                                        if (speed >= 500) return 'Wi-Fi 5 (802.11ac) - Mainstream';
                                        if (speed >= 100) return 'Wi-Fi 4 (802.11n) - Older standard';
                                        return 'Legacy Wi-Fi standards';
                                    }
                                },
                                cellular: {
                                    name: 'Cellular Networks',
                                    getInfo: (speed) => {
                                        if (speed >= 10000) return '5G mmWave - Ultra-high speed';
                                        if (speed >= 1000) return '5G Mid-Band - High-speed 5G';
                                        if (speed >= 100) return '5G Low-Band/4G+ - Standard 5G';
                                        if (speed >= 20) return '4G LTE - Standard mobile';
                                        if (speed >= 5) return '3G/4G - Basic mobile data';
                                        return 'Legacy mobile networks';
                                    }
                                },
                                wan: {
                                    name: 'WAN/Internet',
                                    getInfo: (speed) => {
                                        if (speed >= 10000) return 'Carrier-grade WAN - ISP backbone';
                                        if (speed >= 1000) return 'Enterprise WAN - Large business';
                                        if (speed >= 100) return 'Business Internet - SMB grade';
                                        if (speed >= 25) return 'Broadband Internet - Consumer';
                                        return 'Basic Internet connection';
                                    }
                                },
                                datacenter: {
                                    name: 'Data Center',
                                    getInfo: (speed) => {
                                        if (speed >= 400000) return 'Spine-leaf backbone - Hyperscale DC';
                                        if (speed >= 100000) return 'Core switching - Large data centers';
                                        if (speed >= 25000) return 'Server connections - Modern DC';
                                        if (speed >= 10000) return 'Aggregation layer - Standard DC';
                                        if (speed >= 1000) return 'Server access - Basic DC';
                                        return 'Legacy data center speeds';
                                    }
                                }
                            };

                            if (techType && contexts[techType]) {
                                const context = contexts[techType];
                                return `${context.name}: ${context.getInfo(mbps)}`;
                            }
                            return 'Select a network type for specific context information';
                        }

                        function getSpeedLadderPosition(mbps) {
                            // Scale: 0-25 Mbps = 0-20%, 25-1000 = 20-50%, 1000-10000 = 50-80%, 10000+ = 80-100%
                            let percentage = 0;
                            let position = '';

                            if (mbps <= 25) {
                                percentage = (mbps / 25) * 20;
                                position = 'Basic Internet';
                            } else if (mbps <= 1000) {
                                percentage = 20 + ((mbps - 25) / 975) * 30;
                                position = 'Consumer Broadband';
                            } else if (mbps <= 10000) {
                                percentage = 50 + ((mbps - 1000) / 9000) * 30;
                                position = 'Gigabit Class';
                            } else {
                                percentage = 80 + Math.min(((mbps - 10000) / 90000) * 20, 20);
                                position = 'Enterprise/Data Center';
                            }

                            return { percentage: Math.min(percentage, 100), position };
                        }

                        function updateInterface() {
                            const mode = getMode();
                            
                            if (mode === 'mbps-to-gbps') {
                                inputLabel.textContent = 'Enter Speed in Mbps';
                                inputUnit.textContent = 'Mbps';
                                inputHelp.textContent = 'Enter megabits per second';
                                resultTitle.textContent = 'Gigabits per Second';
                                resultDescription.textContent = 'Converted to Gbps';
                                inputValue.placeholder = 'Enter Mbps (e.g., 1000)';
                            } else {
                                inputLabel.textContent = 'Enter Speed in Gbps';
                                inputUnit.textContent = 'Gbps';
                                inputHelp.textContent = 'Enter gigabits per second';
                                resultTitle.textContent = 'Megabits per Second';
                                resultDescription.textContent = 'Converted to Mbps';
                                inputValue.placeholder = 'Enter Gbps (e.g., 1)';
                            }
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const mode = getMode();
                            const techType = networkType.value;

                            if (!isNaN(inputVal) && inputVal >= 0) {
                                let mbps, gbps;

                                if (mode === 'mbps-to-gbps') {
                                    mbps = inputVal;
                                    gbps = mbps / 1000;
                                } else {
                                    gbps = inputVal;
                                    mbps = gbps * 1000;
                                }

                                // Update primary output
                                output.textContent = formatNumber(mode === 'mbps-to-gbps' ? gbps : mbps);
                                resultDescription.textContent = mode === 'mbps-to-gbps' ? 
                                    `${inputVal} Mbps = ${formatNumber(gbps)} Gbps` : 
                                    `${inputVal} Gbps = ${formatNumber(mbps)} Mbps`;

                                // Update displays
                                mbpsDisplay.textContent = formatNumber(mbps);
                                gbpsDisplay.textContent = formatNumber(gbps);

                                // Speed category
                                if (showCategory.checked) {
                                    const category = getSpeedCategory(mbps);
                                    categoryInfo.innerHTML = `<span class="${category.color} font-semibold">${category.category}</span><br>${category.description}`;
                                } else {
                                    categoryInfo.textContent = 'Category analysis disabled';
                                }

                                // Network standards comparison
                                if (showComparison.checked) {
                                    const standards = getClosestStandards(mbps);
                                    currentSpeed.textContent = formatNumber(mbps) + ' Mbps';
                                    closestStandard.textContent = standards.closest.name + ` (${formatNumber(standards.closest.speed)} Mbps)`;
                                    nextLevel.textContent = standards.nextLevel ? 
                                        standards.nextLevel.name + ` (${formatNumber(standards.nextLevel.speed)} Mbps)` : 
                                        'Maximum standard';
                                } else {
                                    currentSpeed.textContent = '--';
                                    closestStandard.textContent = '--';
                                    nextLevel.textContent = '--';
                                }

                                // Data transfer rates
                                const mbpsRateValue = mbps / 8; // Convert bits to bytes
                                const gbpsRateValue = gbps / 8;
                                const gbHourValue = (mbpsRateValue * 3600) / 1000;
                                const tbDayValue = (mbpsRateValue * 86400) / 1000000;

                                mbpsRate.textContent = formatNumber(mbpsRateValue);
                                gbpsRate.textContent = formatNumber(gbpsRateValue);
                                gbHour.textContent = formatNumber(gbHourValue);
                                tbDay.textContent = formatNumber(tbDayValue);

                                // Usage scenarios
                                if (showUsage.checked) {
                                    usageInfo.textContent = getUsageScenarios(mbps);
                                } else {
                                    usageInfo.textContent = 'Usage analysis disabled';
                                }

                                // Technology context
                                techInfo.textContent = getTechnologyContext(mbps, techType);

                                // Speed ladder
                                const ladderInfo = getSpeedLadderPosition(mbps);
                                speedIndicator.style.width = ladderInfo.percentage + '%';
                                speedPosition.textContent = ladderInfo.position;

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            resultDescription.textContent = 'Converted result';
                            mbpsDisplay.textContent = '--';
                            gbpsDisplay.textContent = '--';
                            categoryInfo.textContent = 'Enter a speed to see category analysis';
                            currentSpeed.textContent = '--';
                            closestStandard.textContent = '--';
                            nextLevel.textContent = '--';
                            mbpsRate.textContent = '--';
                            gbpsRate.textContent = '--';
                            gbHour.textContent = '--';
                            tbDay.textContent = '--';
                            usageInfo.textContent = 'Speed analysis will appear here';
                            techInfo.textContent = 'Select a network type for specific context';
                            speedIndicator.style.width = '0%';
                            speedPosition.textContent = '--';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            document.querySelector('input[value="mbps-to-gbps"]').checked = true;
                            networkType.value = '';
                            showCategory.checked = true;
                            showComparison.checked = true;
                            showUsage.checked = true;
                            updateInterface();
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        networkType.addEventListener('change', convert);
                        
                        modeRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                updateInterface();
                                convert();
                            });
                        });

                        [showCategory, showComparison, showUsage].forEach(checkbox => {
                            checkbox.addEventListener('change', convert);
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
                        const speedExamples = document.querySelectorAll('.speed-example');
                        speedExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const mode = this.getAttribute('data-mode');
                                
                                inputValue.value = value;
                                document.querySelector(`input[value="${mode}"]`).checked = true;
                                updateInterface();
                                convert();
                                
                                // Update button styles
                                speedExamples.forEach(btn => btn.classList.remove('bg-purple-100', 'text-purple-700'));
                                speedExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-purple-100', 'text-purple-700');
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
                                const newMode = currentMode === 'mbps-to-gbps' ? 'gbps-to-mbps' : 'mbps-to-gbps';
                                document.querySelector(`input[value="${newMode}"]`).checked = true;
                                updateInterface();
                                convert();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
