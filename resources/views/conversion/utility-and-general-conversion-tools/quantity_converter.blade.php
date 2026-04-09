<x-tool-page-layout
    title="Quantity Converter - ConvertPro"
    description="Professional quantity converter for count and bulk measurements. Convert between different quantity units including dozens, gross, reams, cases, and bulk packaging for business and inventory management."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Bulk Quantity Conversion Calculator</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Quantity Category -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quantity Category
                                        </label>
                                        <select 
                                            id="quantityCategory" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="general" selected>General Counting</option>
                                            <option value="packaging">Packaging & Cases</option>
                                            <option value="paper">Paper & Office Supplies</option>
                                            <option value="food">Food & Beverage</option>
                                            <option value="textiles">Textiles & Clothing</option>
                                            <option value="electronics">Electronics & Components</option>
                                            <option value="automotive">Automotive Parts</option>
                                            <option value="medical">Medical & Pharmaceutical</option>
                                        </select>
                                    </div>

                                    <!-- Input Quantity -->
                                    <div class="space-y-2">
                                        <label for="inputQuantity" class="block text-sm font-semibold text-gray-700">
                                            Quantity Value
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputQuantity" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter quantity (e.g., 144)"
                                                step="1"
                                                min="0"
                                            >
                                        </div>
                                        <p class="text-xs text-gray-500">Enter the quantity value to convert</p>
                                    </div>

                                    <!-- From Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            From Unit
                                        </label>
                                        <select 
                                            id="fromUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <!-- Options populated dynamically -->
                                        </select>
                                    </div>

                                    <!-- To Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            To Unit
                                        </label>
                                        <select 
                                            id="toUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <!-- Options populated dynamically -->
                                        </select>
                                    </div>

                                    <!-- Swap Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="swapButton"
                                            class="inline-flex items-center px-4 py-2 bg-yellow-100 hover:bg-yellow-200 text-yellow-700 font-medium rounded-lg transition-colors duration-200"
                                        >
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                            </svg>
                                            Swap Units
                                        </button>
                                    </div>

                                    <!-- Item Type (for cost calculation) -->
                                    <div class="space-y-2 hidden">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Item Type (Optional)
                                        </label>
                                        <select 
                                            id="itemType" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <option value="">Select item type for additional info</option>
                                            <option value="generic">Generic Items</option>
                                            <option value="office_supplies">Office Supplies</option>
                                            <option value="food_items">Food Items</option>
                                            <option value="electronics">Electronic Components</option>
                                            <option value="clothing">Clothing Items</option>
                                            <option value="hardware">Hardware/Tools</option>
                                        </select>
                                    </div>

                                    <!-- Unit Price (optional) -->
                                    <div class="space-y-2 hidden">
                                        <label for="unitPrice" class="block text-sm font-semibold text-gray-700">
                                            Unit Price (Optional)
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="unitPrice" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Price per unit (e.g., 0.50)"
                                                step="0.01"
                                                min="0"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">$ per unit</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500">Enter price per individual unit for cost calculation</p>
                                    </div>

                                    <!-- Quick Quantity Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Quantity Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-yellow-700 rounded-lg transition-colors" data-quantity="12" data-from="pieces" data-to="dozen">1 Dozen</button>
                                            <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-yellow-700 rounded-lg transition-colors" data-quantity="144" data-from="pieces" data-to="gross">1 Gross</button>
                                            <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-yellow-700 rounded-lg transition-colors" data-quantity="500" data-from="sheets" data-to="ream">1 Ream</button>
                                            <button type="button" class="example-btn px-3 py-2 text-sm bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-yellow-700 rounded-lg transition-colors" data-quantity="24" data-from="pieces" data-to="case">1 Case</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-yellow-100 hover:bg-yellow-200 text-yellow-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Quantity Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-xl border-l-4 border-yellow-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Converted Quantity</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Conversion result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-yellow-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-yellow-600 hover:text-yellow-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quantity Units Display -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <!-- Basic Units -->
                                        <div class="space-y-3">
                                            <h4 class="font-semibold text-gray-700 text-center">Basic Units</h4>
                                            
                                            <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Pieces</h5>
                                                    <div class="text-lg font-bold text-blue-600 font-mono" id="piecesDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Individual items</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Pairs</h5>
                                                    <div class="text-lg font-bold text-indigo-600 font-mono" id="pairsDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Sets of 2</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Sets</h5>
                                                    <div class="text-lg font-bold text-purple-600 font-mono" id="setsDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Variable groupings</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Commercial Units -->
                                        <div class="space-y-3">
                                            <h4 class="font-semibold text-gray-700 text-center">Commercial Units</h4>
                                            
                                            <div class="p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Dozen</h5>
                                                    <div class="text-lg font-bold text-green-600 font-mono" id="dozenDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">12 pieces</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg border-l-4 border-emerald-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Gross</h5>
                                                    <div class="text-lg font-bold text-emerald-600 font-mono" id="grossDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">144 pieces (12 dozen)</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Case</h5>
                                                    <div class="text-lg font-bold text-teal-600 font-mono" id="caseDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Variable case size</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Bulk & Packaging -->
                                        <div class="space-y-3">
                                            <h4 class="font-semibold text-gray-700 text-center">Bulk & Packaging</h4>
                                            
                                            <div class="p-3 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg border-l-4 border-orange-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Carton</h5>
                                                    <div class="text-lg font-bold text-orange-600 font-mono" id="cartonDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Large packaging unit</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Pallet</h5>
                                                    <div class="text-lg font-bold text-red-600 font-mono" id="palletDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Shipping unit</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Bulk</h5>
                                                    <div class="text-lg font-bold text-pink-600 font-mono" id="bulkDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Large quantities</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Reference Information -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Quantity Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div><strong>1 Dozen</strong> = 12 pieces</div>
                                        <div><strong>1 Gross</strong> = 144 pieces</div>
                                        <div><strong>1 Great Gross</strong> = 1,728 pieces</div>
                                        <div><strong>1 Pair</strong> = 2 pieces</div>
                                        <div><strong>1 Ream</strong> = 500 sheets (paper)</div>
                                        <div><strong>1 Quire</strong> = 25 sheets</div>
                                        <div><strong>1 Case</strong> = Variable (12-48 units)</div>
                                        <div><strong>1 Carton</strong> = Variable bulk unit</div>
                                        <div><strong>Baker's Dozen</strong> = 13 pieces</div>
                                        <div><strong>1 Score</strong> = 20 pieces</div>
                                        <div><strong>1 Century</strong> = 100 pieces</div>
                                        <div><strong>1 Millennium</strong> = 1,000 pieces</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Quantity Conversions</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Commercial Quantity Units</h4>
                                    <p>Quantity conversions are essential in commerce, manufacturing, and inventory management. Standard units like dozen, gross, and case simplify ordering and pricing. Understanding these relationships helps in bulk purchasing, cost analysis, and inventory planning across different industries.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Business Applications</h4>
                                    <p>Use quantity conversions for procurement planning, cost calculations, warehouse management, and order fulfillment. Different industries have specific standards - paper is sold in reams, electronics in lots, and food in cases. Accurate conversions prevent ordering errors and optimize inventory levels.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-yellow-50 rounded-lg border border-yellow-200">
                                <p class="text-sm text-yellow-800">
                                    <strong>Business Tip:</strong> Bulk purchasing often provides significant discounts. Calculate the unit cost across different quantity tiers to optimize your purchasing decisions.
                                </p>
                            </div>
                        </div>

                        <!-- Practical Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Quantity Applications</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Retail & Wholesale</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-yellow-600 cursor-pointer hover:text-yellow-800" data-quantity="144" data-from="pieces" data-to="gross">Wholesale: 144 items</div>
                                        <div class="text-xs text-gray-600 mt-1">1 gross for bulk pricing</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-yellow-600 cursor-pointer hover:text-yellow-800" data-quantity="1000" data-from="pieces" data-to="case">Inventory: 1000 units</div>
                                        <div class="text-xs text-gray-600 mt-1">Large inventory order</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Office & Manufacturing</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-yellow-600 cursor-pointer hover:text-yellow-800" data-quantity="2500" data-from="sheets" data-to="ream">Paper: 2500 sheets</div>
                                        <div class="text-xs text-gray-600 mt-1">5 reams of office paper</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-yellow-600 cursor-pointer hover:text-yellow-800" data-quantity="100" data-from="pieces" data-to="case">Components: 100 parts</div>
                                        <div class="text-xs text-gray-600 mt-1">Manufacturing components</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const quantityCategory = document.getElementById('quantityCategory');
                        const inputQuantity = document.getElementById('inputQuantity');
                        const fromUnit = document.getElementById('fromUnit');
                        const toUnit = document.getElementById('toUnit');
                        const swapButton = document.getElementById('swapButton');
                        const itemType = document.getElementById('itemType');
                        const unitPrice = document.getElementById('unitPrice');
                        const clearButton = document.getElementById('clearButton');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const piecesDisplay = document.getElementById('piecesDisplay');
                        const pairsDisplay = document.getElementById('pairsDisplay');
                        const setsDisplay = document.getElementById('setsDisplay');
                        const dozenDisplay = document.getElementById('dozenDisplay');
                        const grossDisplay = document.getElementById('grossDisplay');
                        const caseDisplay = document.getElementById('caseDisplay');
                        const cartonDisplay = document.getElementById('cartonDisplay');
                        const palletDisplay = document.getElementById('palletDisplay');
                        const bulkDisplay = document.getElementById('bulkDisplay');
                        const totalCostDisplay = document.getElementById('totalCostDisplay');
                        const costPerDozenDisplay = document.getElementById('costPerDozenDisplay');
                        const costPerGrossDisplay = document.getElementById('costPerGrossDisplay');
                        const bulkDiscountDisplay = document.getElementById('bulkDiscountDisplay');
                        const shippingBoxesDisplay = document.getElementById('shippingBoxesDisplay');
                        const estimatedWeightDisplay = document.getElementById('estimatedWeightDisplay');
                        const storageSpaceDisplay = document.getElementById('storageSpaceDisplay');
                        const minimumOrderDisplay = document.getElementById('minimumOrderDisplay');
                        const recommendedOrderDisplay = document.getElementById('recommendedOrderDisplay');
                        const leadTimeDisplay = document.getElementById('leadTimeDisplay');
                        const copyResult = document.getElementById('copyResult');

                        // Quantity conversion data
                        const quantityData = {
                            general: {
                                name: 'General Counting',
                                units: {
                                    pieces: { name: 'Pieces', factor: 1 },
                                    pair: { name: 'Pairs', factor: 2 },
                                    set: { name: 'Sets (variable)', factor: 1 },
                                    dozen: { name: 'Dozen', factor: 12 },
                                    bakers_dozen: { name: "Baker's Dozen", factor: 13 },
                                    score: { name: 'Score', factor: 20 },
                                    gross: { name: 'Gross', factor: 144 },
                                    great_gross: { name: 'Great Gross', factor: 1728 },
                                    hundred: { name: 'Hundred', factor: 100 },
                                    thousand: { name: 'Thousand', factor: 1000 }
                                }
                            },
                            packaging: {
                                name: 'Packaging & Cases',
                                units: {
                                    pieces: { name: 'Individual Pieces', factor: 1 },
                                    pack: { name: 'Pack (6)', factor: 6 },
                                    case_12: { name: 'Case (12)', factor: 12 },
                                    case_24: { name: 'Case (24)', factor: 24 },
                                    case_48: { name: 'Case (48)', factor: 48 },
                                    carton: { name: 'Carton (100)', factor: 100 },
                                    master_case: { name: 'Master Case (500)', factor: 500 },
                                    pallet: { name: 'Pallet (2400)', factor: 2400 },
                                    container: { name: 'Container (10000)', factor: 10000 }
                                }
                            },
                            paper: {
                                name: 'Paper & Office Supplies',
                                units: {
                                    sheets: { name: 'Sheets', factor: 1 },
                                    quire: { name: 'Quire', factor: 25 },
                                    ream: { name: 'Ream', factor: 500 },
                                    bundle: { name: 'Bundle (1000)', factor: 1000 },
                                    case: { name: 'Case (5 reams)', factor: 2500 },
                                    skid: { name: 'Skid (40 reams)', factor: 20000 },
                                    carload: { name: 'Carload (200 reams)', factor: 100000 }
                                }
                            },
                            food: {
                                name: 'Food & Beverage',
                                units: {
                                    pieces: { name: 'Individual Items', factor: 1 },
                                    six_pack: { name: '6-Pack', factor: 6 },
                                    dozen: { name: 'Dozen', factor: 12 },
                                    case_24: { name: 'Case (24)', factor: 24 },
                                    flat: { name: 'Flat (30)', factor: 30 },
                                    crate: { name: 'Crate (144)', factor: 144 },
                                    bulk_pack: { name: 'Bulk Pack (500)', factor: 500 },
                                    industrial: { name: 'Industrial (1000)', factor: 1000 }
                                }
                            },
                            textiles: {
                                name: 'Textiles & Clothing',
                                units: {
                                    pieces: { name: 'Individual Pieces', factor: 1 },
                                    pair: { name: 'Pairs', factor: 2 },
                                    set: { name: 'Sets (3-piece)', factor: 3 },
                                    pack: { name: 'Pack (6)', factor: 6 },
                                    dozen: { name: 'Dozen', factor: 12 },
                                    gross: { name: 'Gross', factor: 144 },
                                    bale: { name: 'Bale (500)', factor: 500 },
                                    lot: { name: 'Lot (1000)', factor: 1000 }
                                }
                            },
                            electronics: {
                                name: 'Electronics & Components',
                                units: {
                                    pieces: { name: 'Individual Components', factor: 1 },
                                    strip: { name: 'Strip (10)', factor: 10 },
                                    tube: { name: 'Tube (50)', factor: 50 },
                                    reel: { name: 'Reel (100)', factor: 100 },
                                    tray: { name: 'Tray (500)', factor: 500 },
                                    bag: { name: 'Bag (1000)', factor: 1000 },
                                    box: { name: 'Box (5000)', factor: 5000 },
                                    lot: { name: 'Lot (10000)', factor: 10000 }
                                }
                            },
                            automotive: {
                                name: 'Automotive Parts',
                                units: {
                                    pieces: { name: 'Individual Parts', factor: 1 },
                                    pair: { name: 'Pairs', factor: 2 },
                                    set: { name: 'Sets (4)', factor: 4 },
                                    kit: { name: 'Kit (8)', factor: 8 },
                                    case: { name: 'Case (12)', factor: 12 },
                                    box: { name: 'Box (50)', factor: 50 },
                                    carton: { name: 'Carton (100)', factor: 100 },
                                    pallet: { name: 'Pallet (500)', factor: 500 }
                                }
                            },
                            medical: {
                                name: 'Medical & Pharmaceutical',
                                units: {
                                    pieces: { name: 'Individual Units', factor: 1 },
                                    blister: { name: 'Blister Pack (10)', factor: 10 },
                                    vial: { name: 'Vial (20)', factor: 20 },
                                    bottle: { name: 'Bottle (100)', factor: 100 },
                                    box: { name: 'Box (500)', factor: 500 },
                                    case: { name: 'Case (1000)', factor: 1000 },
                                    carton: { name: 'Carton (5000)', factor: 5000 },
                                    bulk: { name: 'Bulk (10000)', factor: 10000 }
                                }
                            }
                        };

                        function formatNumber(num, decimals = 2) {
                            if (Math.abs(num) >= 1e6) {
                                return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 1 }) + 'M';
                            } else if (Math.abs(num) >= 1e3) {
                                return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 1 }) + 'k';
                            }
                            return num.toLocaleString(undefined, { 
                                maximumFractionDigits: decimals, 
                                minimumFractionDigits: 0 
                            });
                        }

                        function updateUnits() {
                            const category = quantityCategory.value;
                            const data = quantityData[category];
                            
                            // Clear existing options
                            fromUnit.innerHTML = '';
                            toUnit.innerHTML = '';
                            
                            // Populate unit options
                            Object.keys(data.units).forEach(unitKey => {
                                const unit = data.units[unitKey];
                                
                                const fromOption = document.createElement('option');
                                fromOption.value = unitKey;
                                fromOption.textContent = unit.name;
                                fromUnit.appendChild(fromOption);
                                
                                const toOption = document.createElement('option');
                                toOption.value = unitKey;
                                toOption.textContent = unit.name;
                                toUnit.appendChild(toOption);
                            });
                            
                            // Set default selections
                            const unitKeys = Object.keys(data.units);
                            if (unitKeys.length > 1) {
                                fromUnit.value = unitKeys[0];
                                toUnit.value = unitKeys[1];
                            }
                        }

                        function calculate() {
                            const category = quantityCategory.value;
                            const quantity = parseFloat(inputQuantity.value);
                            const from = fromUnit.value;
                            const to = toUnit.value;
                            const price = parseFloat(unitPrice.value) || 0;
                            
                            if (!isNaN(quantity) && quantity >= 0) {
                                const data = quantityData[category];
                                const fromFactor = data.units[from].factor;
                                const toFactor = data.units[to].factor;
                                
                                // Convert to pieces first, then to target unit
                                const pieces = quantity * fromFactor;
                                const result = pieces / toFactor;
                                
                                // Update primary output
                                const fromUnitName = data.units[from].name;
                                const toUnitName = data.units[to].name;
                                
                                output.textContent = formatNumber(result);
                                resultTitle.textContent = `${fromUnitName} to ${toUnitName}`;
                                resultDescription.textContent = `${quantity} ${fromUnitName} = ${formatNumber(result)} ${toUnitName}`;
                                
                                // Display all common units
                                piecesDisplay.textContent = formatNumber(pieces, 0);
                                pairsDisplay.textContent = formatNumber(pieces / 2, 1);
                                setsDisplay.textContent = formatNumber(pieces / 3, 1); // Assuming 3-piece sets
                                dozenDisplay.textContent = formatNumber(pieces / 12, 2);
                                grossDisplay.textContent = formatNumber(pieces / 144, 3);
                                caseDisplay.textContent = formatNumber(pieces / 24, 1); // Assuming 24-piece cases
                                cartonDisplay.textContent = formatNumber(pieces / 100, 2);
                                palletDisplay.textContent = formatNumber(pieces / 2400, 3);
                                bulkDisplay.textContent = formatNumber(pieces / 1000, 2);
                                
                                // Cost analysis
                                if (price > 0) {
                                    const totalCost = pieces * price;
                                    const costPerDozen = price * 12;
                                    const costPerGross = price * 144;
                                    
                                    totalCostDisplay.textContent = '$' + formatNumber(totalCost, 2);
                                    costPerDozenDisplay.textContent = '$' + formatNumber(costPerDozen, 2);
                                    costPerGrossDisplay.textContent = '$' + formatNumber(costPerGross, 2);
                                    
                                    // Bulk discount estimation
                                    let discount = 'None';
                                    if (pieces >= 1000) discount = '5-10%';
                                    else if (pieces >= 500) discount = '3-5%';
                                    else if (pieces >= 144) discount = '2-3%';
                                    bulkDiscountDisplay.textContent = discount;
                                } else {
                                    totalCostDisplay.textContent = 'Enter price';
                                    costPerDozenDisplay.textContent = 'Enter price';
                                    costPerGrossDisplay.textContent = 'Enter price';
                                    bulkDiscountDisplay.textContent = '--';
                                }
                                
                                // Packaging information
                                const shippingBoxes = Math.ceil(pieces / 50); // Assuming 50 items per box
                                const estimatedWeight = pieces * 0.1; // Assuming 100g per item
                                const storageSpace = pieces * 0.001; // Assuming 1 liter per item
                                
                                shippingBoxesDisplay.textContent = formatNumber(shippingBoxes, 0) + ' boxes';
                                estimatedWeightDisplay.textContent = formatNumber(estimatedWeight, 1) + ' kg';
                                storageSpaceDisplay.textContent = formatNumber(storageSpace, 1) + ' m³';
                                
                                // Order information
                                minimumOrderDisplay.textContent = formatNumber(Math.max(12, Math.ceil(pieces / 100) * 12), 0) + ' pieces';
                                recommendedOrderDisplay.textContent = formatNumber(Math.ceil(pieces / 144) * 144, 0) + ' pieces';
                                
                                let leadTime = '1-2 days';
                                if (pieces > 10000) leadTime = '2-3 weeks';
                                else if (pieces > 1000) leadTime = '1-2 weeks';
                                else if (pieces > 100) leadTime = '3-5 days';
                                leadTimeDisplay.textContent = leadTime;
                                
                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            resultTitle.textContent = 'Converted Quantity';
                            resultDescription.textContent = 'Conversion result';
                            piecesDisplay.textContent = '--';
                            pairsDisplay.textContent = '--';
                            setsDisplay.textContent = '--';
                            dozenDisplay.textContent = '--';
                            grossDisplay.textContent = '--';
                            caseDisplay.textContent = '--';
                            cartonDisplay.textContent = '--';
                            palletDisplay.textContent = '--';
                            bulkDisplay.textContent = '--';
                            totalCostDisplay.textContent = '--';
                            costPerDozenDisplay.textContent = '--';
                            costPerGrossDisplay.textContent = '--';
                            bulkDiscountDisplay.textContent = '--';
                            shippingBoxesDisplay.textContent = '--';
                            estimatedWeightDisplay.textContent = '--';
                            storageSpaceDisplay.textContent = '--';
                            minimumOrderDisplay.textContent = '--';
                            recommendedOrderDisplay.textContent = '--';
                            leadTimeDisplay.textContent = '--';
                        }

                        function clearAll() {
                            inputQuantity.value = '';
                            quantityCategory.value = 'general';
                            unitPrice.value = '';
                            itemType.value = '';
                            updateUnits();
                            clearOutputs();
                            inputQuantity.focus();
                        }

                        function swapUnits() {
                            const fromValue = fromUnit.value;
                            const toValue = toUnit.value;
                            
                            fromUnit.value = toValue;
                            toUnit.value = fromValue;
                            
                            calculate();
                        }

                        // Event listeners
                        quantityCategory.addEventListener('change', function() {
                            updateUnits();
                            calculate();
                        });
                        
                        inputQuantity.addEventListener('input', calculate);
                        fromUnit.addEventListener('change', calculate);
                        toUnit.addEventListener('change', calculate);
                        itemType.addEventListener('change', calculate);
                        unitPrice.addEventListener('input', calculate);
                        swapButton.addEventListener('click', swapUnits);
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
                                const quantity = this.getAttribute('data-quantity');
                                const from = this.getAttribute('data-from');
                                const to = this.getAttribute('data-to');
                                
                                inputQuantity.value = quantity;
                                
                                // Find appropriate category and set units
                                let foundCategory = 'general';
                                for (const [categoryKey, categoryData] of Object.entries(quantityData)) {
                                    if (categoryData.units[from] && categoryData.units[to]) {
                                        foundCategory = categoryKey;
                                        break;
                                    }
                                }
                                
                                quantityCategory.value = foundCategory;
                                updateUnits();
                                fromUnit.value = from;
                                toUnit.value = to;
                                calculate();
                                
                                // Update button styles
                                exampleBtns.forEach(btn => btn.classList.remove('bg-yellow-100', 'text-yellow-700'));
                                exampleBtns.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-yellow-100', 'text-yellow-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-quantity][data-from][data-to]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const quantity = this.getAttribute('data-quantity');
                                const from = this.getAttribute('data-from');
                                const to = this.getAttribute('data-to');
                                
                                if (quantity && from && to) {
                                    inputQuantity.value = quantity;
                                    
                                    // Find appropriate category
                                    let foundCategory = 'general';
                                    for (const [categoryKey, categoryData] of Object.entries(quantityData)) {
                                        if (categoryData.units[from] && categoryData.units[to]) {
                                            foundCategory = categoryKey;
                                            break;
                                        }
                                    }
                                    
                                    quantityCategory.value = foundCategory;
                                    updateUnits();
                                    fromUnit.value = from;
                                    toUnit.value = to;
                                    calculate();
                                    inputQuantity.focus();
                                }
                            });
                        });

                        // Initialize
                        updateUnits();
                        inputQuantity.focus();

                        // Keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearAll();
                            } else if (e.key === 'Tab' && e.ctrlKey) {
                                e.preventDefault();
                                swapUnits();
                            }
                        });
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
