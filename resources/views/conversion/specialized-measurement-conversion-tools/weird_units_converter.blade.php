<x-tool-page-layout
    title="Weird Units Converter - ConvertPro"
    description="Fun weird units converter for unusual and unconventional measurements. Convert between Smoots, Beard-seconds, Bananas, Libraries of Congress, and other quirky measurement units."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-4">
                                <h2 class="text-lg font-semibold text-white">Quirky & Unconventional Unit Converter</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-8">
                                <form class="space-y-6 focus-within:ring-2 focus-within:ring-blue-100 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:rounded-xl lg:border lg:border-blue-100 lg:bg-white/95 lg:p-4 lg:pr-1 lg:shadow-sm" id="calculatorForm">
                                    
                                    <!-- Input Value -->
                                    <div class="space-y-2">
                                        <label for="inputValue" class="block text-sm font-semibold text-gray-700">
                                            Enter Value
                                        </label>
                                        <div class="relative">
                                            <input 
                                                type="number" 
                                                id="inputValue" 
                                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-mono" 
                                                placeholder="Enter value (e.g., 42)"
                                                step="any"
                                            >
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 text-sm font-medium">Value</span>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500">Enter numerical value for weird unit conversion</p>
                                    </div>

                                    <!-- From Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            From Unit (Source)
                                        </label>
                                        <select 
                                            id="fromUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <optgroup label="Unusual Length Units">
                                                <option value="smoot" selected>Smoot - MIT Bridge measurement</option>
                                                <option value="beard_second">Beard-second - Facial hair growth</option>
                                                <option value="sheppey">Sheppey - Sheep recognition distance</option>
                                                <option value="mickey">Mickey - Mouse movement unit</option>
                                                <option value="potrzebie">Potrzebie - MAD Magazine unit</option>
                                                <option value="altuve">Altuve - Baseball player height</option>
                                                <option value="banana">Banana - Fruit measurement</option>
                                                <option value="football_field">Football Field - American field</option>
                                            </optgroup>
                                            <optgroup label="Unusual Time Units">
                                                <option value="microcentury">Microcentury - Small time period</option>
                                                <option value="nanocentury">Nanocentury - Tiny time period</option>
                                                <option value="shake">Shake - Nuclear physics time</option>
                                                <option value="jiffy">Jiffy - Computing time unit</option>
                                                <option value="moment">Moment - Medieval time unit</option>
                                                <option value="dog_year">Dog Year - Canine aging</option>
                                                <option value="friedman">Friedman - Academic time unit</option>
                                            </optgroup>
                                            <optgroup label="Data & Information">
                                                <option value="library_of_congress">Library of Congress - Data storage</option>
                                                <option value="floppy_disk">Floppy Disk - Retro storage</option>
                                                <option value="cd">CD - Optical disc storage</option>
                                                <option value="dvd">DVD - Digital video disc</option>
                                                <option value="wikipedia">Wikipedia - Encyclopedia size</option>
                                                <option value="human_genome">Human Genome - Genetic data</option>
                                            </optgroup>
                                            <optgroup label="Weight & Mass">
                                                <option value="elephant">Elephant - Large animal weight</option>
                                                <option value="blue_whale">Blue Whale - Largest animal</option>
                                                <option value="rhino">Rhinoceros - Heavy animal</option>
                                                <option value="car">Car - Vehicle weight</option>
                                                <option value="penny">Penny - Coin weight</option>
                                                <option value="paperclip">Paperclip - Office supply</option>
                                            </optgroup>
                                            <optgroup label="Energy & Power">
                                                <option value="tnt">TNT Equivalent - Explosive energy</option>
                                                <option value="hiroshima">Hiroshima Bomb - Nuclear energy</option>
                                                <option value="bolt_of_lightning">Lightning Bolt - Electric energy</option>
                                                <option value="cheeseburger">Cheeseburger - Food energy</option>
                                                <option value="cup_of_coffee">Cup of Coffee - Caffeine energy</option>
                                            </optgroup>
                                            <optgroup label="Standard Units">
                                                <option value="meter">Meter (m)</option>
                                                <option value="second">Second (s)</option>
                                                <option value="kilogram">Kilogram (kg)</option>
                                                <option value="joule">Joule (J)</option>
                                                <option value="byte">Byte (B)</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <!-- To Unit -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            To Unit (Target)
                                        </label>
                                        <select 
                                            id="toUnit" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:ring-opacity-50 transition-all duration-200 text-lg font-medium bg-white"
                                        >
                                            <optgroup label="Unusual Length Units">
                                                <option value="smoot">Smoot - MIT Bridge measurement</option>
                                                <option value="beard_second" selected>Beard-second - Facial hair growth</option>
                                                <option value="sheppey">Sheppey - Sheep recognition distance</option>
                                                <option value="mickey">Mickey - Mouse movement unit</option>
                                                <option value="potrzebie">Potrzebie - MAD Magazine unit</option>
                                                <option value="altuve">Altuve - Baseball player height</option>
                                                <option value="banana">Banana - Fruit measurement</option>
                                                <option value="football_field">Football Field - American field</option>
                                            </optgroup>
                                            <optgroup label="Unusual Time Units">
                                                <option value="microcentury">Microcentury - Small time period</option>
                                                <option value="nanocentury">Nanocentury - Tiny time period</option>
                                                <option value="shake">Shake - Nuclear physics time</option>
                                                <option value="jiffy">Jiffy - Computing time unit</option>
                                                <option value="moment">Moment - Medieval time unit</option>
                                                <option value="dog_year">Dog Year - Canine aging</option>
                                                <option value="friedman">Friedman - Academic time unit</option>
                                            </optgroup>
                                            <optgroup label="Data & Information">
                                                <option value="library_of_congress">Library of Congress - Data storage</option>
                                                <option value="floppy_disk">Floppy Disk - Retro storage</option>
                                                <option value="cd">CD - Optical disc storage</option>
                                                <option value="dvd">DVD - Digital video disc</option>
                                                <option value="wikipedia">Wikipedia - Encyclopedia size</option>
                                                <option value="human_genome">Human Genome - Genetic data</option>
                                            </optgroup>
                                            <optgroup label="Weight & Mass">
                                                <option value="elephant">Elephant - Large animal weight</option>
                                                <option value="blue_whale">Blue Whale - Largest animal</option>
                                                <option value="rhino">Rhinoceros - Heavy animal</option>
                                                <option value="car">Car - Vehicle weight</option>
                                                <option value="penny">Penny - Coin weight</option>
                                                <option value="paperclip">Paperclip - Office supply</option>
                                            </optgroup>
                                            <optgroup label="Energy & Power">
                                                <option value="tnt">TNT Equivalent - Explosive energy</option>
                                                <option value="hiroshima">Hiroshima Bomb - Nuclear energy</option>
                                                <option value="bolt_of_lightning">Lightning Bolt - Electric energy</option>
                                                <option value="cheeseburger">Cheeseburger - Food energy</option>
                                                <option value="cup_of_coffee">Cup of Coffee - Caffeine energy</option>
                                            </optgroup>
                                            <optgroup label="Standard Units">
                                                <option value="meter">Meter (m)</option>
                                                <option value="second">Second (s)</option>
                                                <option value="kilogram">Kilogram (kg)</option>
                                                <option value="joule">Joule (J)</option>
                                                <option value="byte">Byte (B)</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <!-- Weirdness Level -->
                                    <div class="space-y-2 hidden">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Weirdness Level
                                        </label>
                                        <div class="flex items-center space-x-4">
                                            <input 
                                                type="range" 
                                                id="weirdnessLevel" 
                                                min="1" 
                                                max="10" 
                                                value="5" 
                                                class="flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                                            >
                                            <span class="text-sm font-mono text-gray-700 min-w-[4rem]" id="weirdnessValue">5 - Normal</span>
                                        </div>
                                        <p class="text-xs text-gray-500">Adjust the level of weirdness in explanations</p>
                                    </div>

                                    <!-- Quick Weird Examples -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Quick Weird Examples
                                        </label>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                            <button type="button" class="weird-example px-3 py-2 text-sm bg-gray-100 hover:bg-orange-100 text-gray-700 hover:text-orange-700 rounded-lg transition-colors" data-value="1" data-from="smoot" data-to="meter">1 Smoot</button>
                                            <button type="button" class="weird-example px-3 py-2 text-sm bg-gray-100 hover:bg-orange-100 text-gray-700 hover:text-orange-700 rounded-lg transition-colors" data-value="1" data-from="library_of_congress" data-to="byte">1 LoC</button>
                                            <button type="button" class="weird-example px-3 py-2 text-sm bg-gray-100 hover:bg-orange-100 text-gray-700 hover:text-orange-700 rounded-lg transition-colors" data-value="1" data-from="elephant" data-to="kilogram">1 Elephant</button>
                                            <button type="button" class="weird-example px-3 py-2 text-sm bg-gray-100 hover:bg-orange-100 text-gray-700 hover:text-orange-700 rounded-lg transition-colors" data-value="1" data-from="microcentury" data-to="second">1 μCentury</button>
                                        </div>
                                    </div>

                                    <!-- Clear Button -->
                                    <div class="flex justify-center">
                                        <button 
                                            type="button" 
                                            id="clearButton"
                                            class="inline-flex items-center px-4 py-2 bg-orange-100 hover:bg-orange-200 text-orange-700 font-medium rounded-lg transition-colors duration-200"
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
                                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Weird Conversion Results</h3>
                                    
                                    <!-- Primary Result -->
                                    <div class="p-6 bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl border-l-4 border-orange-500">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-lg font-semibold text-gray-800 mb-1" id="result-title">Converted Weird Unit</h4>
                                                <p class="text-sm text-gray-600" id="result-description">Converted result</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-orange-600 font-mono" id="output">--</div>
                                                <button class="text-xs text-orange-600 hover:text-orange-800 mt-1" id="copyResult">Copy Result</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Weird Unit Categories -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Fun Length Units -->
                                        <div class="space-y-3">
                                            <h4 class="font-semibold text-gray-700 text-center">Fun Length Units</h4>
                                            
                                            <div class="p-3 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Smoots</h5>
                                                    <div class="text-lg font-bold text-red-600 font-mono" id="smootDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">MIT Bridge units</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg border-l-4 border-yellow-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Bananas</h5>
                                                    <div class="text-lg font-bold text-yellow-600 font-mono" id="bananaDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Fruit measurement</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Football Fields</h5>
                                                    <div class="text-lg font-bold text-green-600 font-mono" id="footballFieldDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">American football</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Beard-seconds</h5>
                                                    <div class="text-lg font-bold text-blue-600 font-mono" id="beardSecondDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Facial hair growth</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Fun Data & Time Units -->
                                        <div class="space-y-3">
                                            <h4 class="font-semibold text-gray-700 text-center">Fun Data & Time</h4>
                                            
                                            <div class="p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Libraries of Congress</h5>
                                                    <div class="text-lg font-bold text-purple-600 font-mono" id="locDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Data storage unit</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border-l-4 border-indigo-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Microcenturies</h5>
                                                    <div class="text-lg font-bold text-indigo-600 font-mono" id="microcenturyDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Academic time unit</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg border-l-4 border-pink-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Dog Years</h5>
                                                    <div class="text-lg font-bold text-pink-600 font-mono" id="dogYearDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Canine aging scale</div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-3 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg border-l-4 border-cyan-500">
                                                <div class="text-center">
                                                    <h5 class="text-sm font-semibold text-gray-700 mb-1">Floppy Disks</h5>
                                                    <div class="text-lg font-bold text-cyan-600 font-mono" id="floppyDiskDisplay">--</div>
                                                    <div class="text-xs text-gray-500 mt-1">Retro storage unit</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Weird Units Reference -->
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Weird Units Reference</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-xs text-gray-600">
                                        <div><strong>1 Smoot</strong> = 5'7" (1.70m)</div>
                                        <div><strong>1 Beard-second</strong> = 5 nanometers</div>
                                        <div><strong>1 Library of Congress</strong> = 15 TB</div>
                                        <div><strong>1 Microcentury</strong> = 52.6 minutes</div>
                                        <div><strong>1 Sheppey</strong> = 7/8 mile</div>
                                        <div><strong>1 Mickey</strong> = 1/200 inch</div>
                                        <div><strong>1 Shake</strong> = 10 nanoseconds</div>
                                        <div><strong>1 Jiffy</strong> = 1/60 second</div>
                                        <div><strong>1 Elephant</strong> ≈ 6 tons</div>
                                        <div><strong>1 Banana</strong> ≈ 7 inches</div>
                                        <div><strong>1 Cheeseburger</strong> ≈ 540 calories</div>
                                        <div><strong>1 Lightning Bolt</strong> ≈ 5 billion joules</div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Weird Units</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Origins of Weird Units</h4>
                                    <p>Many unusual units originated from practical jokes, student pranks, or attempts to make measurements more relatable. The Smoot, for example, was created by MIT students measuring a bridge using their classmate as a ruler. These units often become cultural phenomena and teaching tools.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Educational Value</h4>
                                    <p>Weird units help make abstract measurements more understandable by relating them to familiar objects or concepts. They're excellent for science communication, making complex quantities accessible to general audiences, and adding humor to otherwise dry technical content.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-orange-50 rounded-lg border border-orange-200">
                                <p class="text-sm text-orange-800">
                                    <strong>Fun Fact:</strong> The Google search engine uses many weird units in its built-in calculator - you can search "convert 5 smoots to meters" and get real results!
                                </p>
                            </div>
                        </div>

                        <!-- Famous Weird Units -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Famous Weird Units</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">MIT & Academic Units</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-orange-600 cursor-pointer hover:text-orange-800" data-example="364.4" data-from="smoot" data-to="meter">Harvard Bridge: 364.4 Smoots</div>
                                        <div class="text-xs text-gray-600 mt-1">Actual measurement painted on bridge</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-orange-600 cursor-pointer hover:text-orange-800" data-example="1" data-from="microcentury" data-to="second">Lecture Length: 1 Microcentury</div>
                                        <div class="text-xs text-gray-600 mt-1">Perfect university class duration</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-700">Pop Culture Units</h4>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-orange-600 cursor-pointer hover:text-orange-800" data-example="1" data-from="sheppey" data-to="meter">Douglas Adams: 1 Sheppey</div>
                                        <div class="text-xs text-gray-600 mt-1">Closest approach to sheep before recognition</div>
                                    </div>
                                    <div class="p-3 bg-gray-50 rounded-lg">
                                        <div class="font-medium text-orange-600 cursor-pointer hover:text-orange-800" data-example="1440" data-from="library_of_congress" data-to="byte">Internet Archive: 1440 LoCs</div>
                                        <div class="text-xs text-gray-600 mt-1">Wayback Machine data size</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const inputValue = document.getElementById('inputValue');
                        const fromUnit = document.getElementById('fromUnit');
                        const toUnit = document.getElementById('toUnit');
                        const weirdnessLevel = document.getElementById('weirdnessLevel');
                        const weirdnessValue = document.getElementById('weirdnessValue');
                        const clearButton = document.getElementById('clearButton');
                        
                        // Output elements
                        const output = document.getElementById('output');
                        const resultTitle = document.getElementById('result-title');
                        const resultDescription = document.getElementById('result-description');
                        const smootDisplay = document.getElementById('smootDisplay');
                        const bananaDisplay = document.getElementById('bananaDisplay');
                        const footballFieldDisplay = document.getElementById('footballFieldDisplay');
                        const beardSecondDisplay = document.getElementById('beardSecondDisplay');
                        const locDisplay = document.getElementById('locDisplay');
                        const microcenturyDisplay = document.getElementById('microcenturyDisplay');
                        const dogYearDisplay = document.getElementById('dogYearDisplay');
                        const floppyDiskDisplay = document.getElementById('floppyDiskDisplay');
                        const unitStory = document.getElementById('unitStory');
                        const weirdnessScore = document.getElementById('weirdnessScore');
                        const funFactor = document.getElementById('funFactor');
                        const usability = document.getElementById('usability');
                        const everydayComparison = document.getElementById('everydayComparison');
                        const copyResult = document.getElementById('copyResult');

                        // Weird unit database (values in standard SI units)
                        const weirdUnits = {
                            // Length units (meters)
                            smoot: { value: 1.7018, type: 'length', name: 'Smoot', weirdness: 8, story: 'Named after Oliver Smoot, MIT student used to measure Harvard Bridge in 1958. Still marked on the bridge today!' },
                            beard_second: { value: 5e-9, type: 'length', name: 'Beard-second', weirdness: 9, story: 'The length a beard grows in one second, proposed as a unit by Google as an April Fools joke.' },
                            sheppey: { value: 1408, type: 'length', name: 'Sheppey', weirdness: 7, story: 'Distance at which sheep remain unrecognizable as sheep, from Douglas Adams and John Lloyd.' },
                            mickey: { value: 0.000127, type: 'length', name: 'Mickey', weirdness: 6, story: 'Smallest detectable mouse movement, 1/200 of an inch in computer graphics.' },
                            potrzebie: { value: 2.263348517438173e-3, type: 'length', name: 'Potrzebie', weirdness: 8, story: 'MAD Magazine unit system based on the thickness of MAD issue #26.' },
                            altuve: { value: 1.651, type: 'length', name: 'Altuve', weirdness: 5, story: 'Height of baseball player José Altuve, used humorously to measure things.' },
                            banana: { value: 0.1778, type: 'length', name: 'Banana', weirdness: 4, story: 'Average banana length, popular on Reddit for scale references.' },
                            football_field: { value: 91.44, type: 'length', name: 'Football Field', weirdness: 3, story: 'American football field length, commonly used for large distance comparisons.' },
                            
                            // Time units (seconds)
                            microcentury: { value: 3155.76, type: 'time', name: 'Microcentury', weirdness: 7, story: 'Approximately 52.6 minutes, perfect length for a university lecture according to academics.' },
                            nanocentury: { value: 3.15576, type: 'time', name: 'Nanocentury', weirdness: 8, story: 'About 3.16 seconds, an even smaller academic time unit.' },
                            shake: { value: 1e-8, type: 'time', name: 'Shake', weirdness: 6, story: 'Nuclear physics unit - 10 nanoseconds, time for light to travel 3 meters.' },
                            jiffy: { value: 1/60, type: 'time', name: 'Jiffy', weirdness: 5, story: 'Computer graphics term, 1/60 second or one frame at 60 FPS.' },
                            moment: { value: 90, type: 'time', name: 'Moment', weirdness: 4, story: 'Medieval time unit, 1/40 of an hour or 90 seconds.' },
                            dog_year: { value: 31557600/7, type: 'time', name: 'Dog Year', weirdness: 3, story: 'Human year divided by 7, based on the myth of dog aging.' },
                            friedman: { value: 31557600, type: 'time', name: 'Friedman', weirdness: 6, story: 'Academic unit: time for tenure review, about 6 months.' },
                            
                            // Data units (bytes)
                            library_of_congress: { value: 15e12, type: 'data', name: 'Library of Congress', weirdness: 5, story: 'Estimated 15 TB of text data in Library of Congress, used by tech companies.' },
                            floppy_disk: { value: 1474560, type: 'data', name: 'Floppy Disk', weirdness: 4, story: '3.5-inch floppy disk capacity, 1.44 MB of nostalgic storage.' },
                            cd: { value: 737280000, type: 'data', name: 'CD', weirdness: 3, story: 'Compact Disc capacity, about 700 MB of data or 80 minutes of music.' },
                            dvd: { value: 4700000000, type: 'data', name: 'DVD', weirdness: 3, story: 'Digital Versatile Disc, 4.7 GB single-layer capacity.' },
                            wikipedia: { value: 58e9, type: 'data', name: 'Wikipedia', weirdness: 6, story: 'Compressed size of English Wikipedia text, about 58 GB.' },
                            human_genome: { value: 3.2e9, type: 'data', name: 'Human Genome', weirdness: 7, story: 'Complete human genetic code, about 3.2 billion base pairs.' },
                            
                            // Mass units (kg)
                            elephant: { value: 6000, type: 'mass', name: 'Elephant', weirdness: 3, story: 'Average African elephant weight, popular for heavy object comparisons.' },
                            blue_whale: { value: 150000, type: 'mass', name: 'Blue Whale', weirdness: 4, story: 'Largest animal ever known, weighing up to 150 tonnes.' },
                            rhino: { value: 2300, type: 'mass', name: 'Rhinoceros', weirdness: 4, story: 'White rhinoceros weight, the second-largest land mammal.' },
                            car: { value: 1400, type: 'mass', name: 'Car', weirdness: 2, story: 'Average passenger car weight, commonly used comparison.' },
                            penny: { value: 0.00231, type: 'mass', name: 'Penny', weirdness: 3, story: 'US penny weighs 2.31 grams, used for light object comparisons.' },
                            paperclip: { value: 0.0009, type: 'mass', name: 'Paperclip', weirdness: 4, story: 'Standard paperclip weight, about 0.9 grams.' },
                            
                            // Energy units (joules)
                            tnt: { value: 4184000, type: 'energy', name: 'TNT Equivalent', weirdness: 5, story: 'Energy released by 1 kg of TNT, used for explosive comparisons.' },
                            hiroshima: { value: 6.3e13, type: 'energy', name: 'Hiroshima Bomb', weirdness: 8, story: 'Energy of the atomic bomb, about 15 kilotons of TNT equivalent.' },
                            bolt_of_lightning: { value: 5e9, type: 'energy', name: 'Lightning Bolt', weirdness: 6, story: 'Energy in a typical lightning strike, about 5 billion joules.' },
                            cheeseburger: { value: 2259840, type: 'energy', name: 'Cheeseburger', weirdness: 5, story: 'Food energy in a typical cheeseburger, about 540 calories.' },
                            cup_of_coffee: { value: 37656, type: 'energy', name: 'Cup of Coffee', weirdness: 4, story: 'Caffeine energy boost equivalent, about 9 calories worth.' },
                            
                            // Standard units for reference
                            meter: { value: 1, type: 'length', name: 'Meter', weirdness: 1, story: 'SI base unit of length, defined by the speed of light.' },
                            second: { value: 1, type: 'time', name: 'Second', weirdness: 1, story: 'SI base unit of time, defined by atomic transitions.' },
                            kilogram: { value: 1, type: 'mass', name: 'Kilogram', weirdness: 1, story: 'SI base unit of mass, defined by Planck constant.' },
                            joule: { value: 1, type: 'energy', name: 'Joule', weirdness: 1, story: 'SI derived unit of energy, named after James Prescott Joule.' },
                            byte: { value: 1, type: 'data', name: 'Byte', weirdness: 1, story: 'Basic unit of computer data, typically 8 bits.' }
                        };

                        const unitLabels = {
                            smoot: 'Smoots', beard_second: 'beard-seconds', sheppey: 'sheppeys', mickey: 'mickeys',
                            potrzebie: 'potrzebies', altuve: 'altuves', banana: 'bananas', football_field: 'football fields',
                            microcentury: 'microcenturies', nanocentury: 'nanocenturies', shake: 'shakes', jiffy: 'jiffies',
                            moment: 'moments', dog_year: 'dog years', friedman: 'friedmans',
                            library_of_congress: 'Libraries of Congress', floppy_disk: 'floppy disks', cd: 'CDs', dvd: 'DVDs',
                            wikipedia: 'Wikipedias', human_genome: 'human genomes',
                            elephant: 'elephants', blue_whale: 'blue whales', rhino: 'rhinos', car: 'cars',
                            penny: 'pennies', paperclip: 'paperclips',
                            tnt: 'kg TNT equiv.', hiroshima: 'Hiroshima bombs', bolt_of_lightning: 'lightning bolts',
                            cheeseburger: 'cheeseburgers', cup_of_coffee: 'cups of coffee',
                            meter: 'm', second: 's', kilogram: 'kg', joule: 'J', byte: 'bytes'
                        };

                        function formatNumber(num, decimals = 4) {
                            if (Math.abs(num) >= 1e15) {
                                return num.toExponential(2);
                            } else if (Math.abs(num) >= 1e12) {
                                return (num / 1e12).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'T';
                            } else if (Math.abs(num) >= 1e9) {
                                return (num / 1e9).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'B';
                            } else if (Math.abs(num) >= 1e6) {
                                return (num / 1e6).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'M';
                            } else if (Math.abs(num) >= 1e3) {
                                return (num / 1e3).toLocaleString(undefined, { maximumFractionDigits: 2 }) + 'K';
                            } else {
                                return num.toLocaleString(undefined, { maximumFractionDigits: decimals, minimumFractionDigits: 0 });
                            }
                        }

                        function canConvert(fromUnit, toUnit) {
                            const fromInfo = weirdUnits[fromUnit];
                            const toInfo = weirdUnits[toUnit];
                            return fromInfo && toInfo && fromInfo.type === toInfo.type;
                        }

                        function getWeirdnessLevel(level) {
                            const levels = {
                                1: 'Boring', 2: 'Mild', 3: 'Normal', 4: 'Fun', 5: 'Weird',
                                6: 'Strange', 7: 'Bizarre', 8: 'Absurd', 9: 'Bonkers', 10: 'Insane'
                            };
                            return levels[level] || 'Normal';
                        }

                        function getEverydayComparison(value, unit, weirdnessLevel) {
                            const unitInfo = weirdUnits[unit];
                            const realValue = value * unitInfo.value;
                            
                            if (unitInfo.type === 'length') {
                                if (realValue < 0.001) return `Smaller than a grain of sand!`;
                                if (realValue < 0.1) return `About the size of your fingernail`;
                                if (realValue < 2) return `Roughly human height`;
                                if (realValue < 100) return `Like a large building`;
                                return `Longer than several city blocks!`;
                            } else if (unitInfo.type === 'time') {
                                if (realValue < 60) return `Shorter than a minute`;
                                if (realValue < 3600) return `Like watching a TV show`;
                                if (realValue < 86400) return `Part of your day`;
                                return `Multiple days of your life!`;
                            } else if (unitInfo.type === 'mass') {
                                if (realValue < 0.1) return `Lighter than a paperclip`;
                                if (realValue < 100) return `About human weight`;
                                if (realValue < 10000) return `Like a large vehicle`;
                                return `Heavier than multiple trucks!`;
                            }
                            
                            return `That's a lot of ${unitLabels[unit]}!`;
                        }

                        function convert() {
                            const inputVal = parseFloat(inputValue.value);
                            const from = fromUnit.value;
                            const to = toUnit.value;
                            const weirdLevel = parseInt(weirdnessLevel.value);

                            if (!isNaN(inputVal)) {
                                if (!canConvert(from, to)) {
                                    output.textContent = 'Cannot convert!';
                                    resultDescription.textContent = 'These units measure different things';
                                    return;
                                }

                                const fromInfo = weirdUnits[from];
                                const toInfo = weirdUnits[to];
                                
                                // Convert via standard units
                                const standardValue = inputVal * fromInfo.value;
                                const result = standardValue / toInfo.value;
                                
                                // Update primary output
                                output.textContent = formatNumber(result) + ' ' + unitLabels[to];
                                resultTitle.textContent = `${toInfo.name}`;
                                resultDescription.textContent = `${inputVal} ${fromInfo.name} = ${formatNumber(result)} ${toInfo.name}`;

                                // Update weird unit displays (convert input to each type)
                                if (fromInfo.type === 'length') {
                                    smootDisplay.textContent = formatNumber(standardValue / weirdUnits.smoot.value);
                                    bananaDisplay.textContent = formatNumber(standardValue / weirdUnits.banana.value);
                                    footballFieldDisplay.textContent = formatNumber(standardValue / weirdUnits.football_field.value);
                                    beardSecondDisplay.textContent = formatNumber(standardValue / weirdUnits.beard_second.value);
                                } else {
                                    smootDisplay.textContent = 'N/A';
                                    bananaDisplay.textContent = 'N/A';
                                    footballFieldDisplay.textContent = 'N/A';
                                    beardSecondDisplay.textContent = 'N/A';
                                }

                                if (fromInfo.type === 'data' || fromInfo.type === 'time') {
                                    if (fromInfo.type === 'data') {
                                        locDisplay.textContent = formatNumber(standardValue / weirdUnits.library_of_congress.value);
                                        floppyDiskDisplay.textContent = formatNumber(standardValue / weirdUnits.floppy_disk.value);
                                        microcenturyDisplay.textContent = 'N/A';
                                        dogYearDisplay.textContent = 'N/A';
                                    } else {
                                        locDisplay.textContent = 'N/A';
                                        floppyDiskDisplay.textContent = 'N/A';
                                        microcenturyDisplay.textContent = formatNumber(standardValue / weirdUnits.microcentury.value);
                                        dogYearDisplay.textContent = formatNumber(standardValue / weirdUnits.dog_year.value);
                                    }
                                } else {
                                    locDisplay.textContent = 'N/A';
                                    floppyDiskDisplay.textContent = 'N/A';
                                    microcenturyDisplay.textContent = 'N/A';
                                    dogYearDisplay.textContent = 'N/A';
                                }

                                // Unit stories
                                unitStory.textContent = `${fromInfo.name}: ${fromInfo.story}`;

                                // Weirdness analysis
                                const avgWeirdness = (fromInfo.weirdness + toInfo.weirdness) / 2;
                                weirdnessScore.textContent = `${avgWeirdness.toFixed(1)}/10`;
                                funFactor.textContent = avgWeirdness > 7 ? 'Hilarious' : avgWeirdness > 5 ? 'Amusing' : avgWeirdness > 3 ? 'Interesting' : 'Serious';
                                usability.textContent = avgWeirdness > 7 ? 'Joke only' : avgWeirdness > 5 ? 'Educational' : avgWeirdness > 3 ? 'Practical' : 'Standard';

                                // Everyday comparison
                                everydayComparison.textContent = getEverydayComparison(inputVal, from, weirdLevel);

                            } else {
                                clearOutputs();
                            }
                        }

                        function clearOutputs() {
                            output.textContent = '--';
                            resultTitle.textContent = 'Converted Weird Unit';
                            resultDescription.textContent = 'Converted result';
                            smootDisplay.textContent = '--';
                            bananaDisplay.textContent = '--';
                            footballFieldDisplay.textContent = '--';
                            beardSecondDisplay.textContent = '--';
                            locDisplay.textContent = '--';
                            microcenturyDisplay.textContent = '--';
                            dogYearDisplay.textContent = '--';
                            floppyDiskDisplay.textContent = '--';
                            unitStory.textContent = 'Select units for their fascinating origin stories!';
                            weirdnessScore.textContent = '--';
                            funFactor.textContent = '--';
                            usability.textContent = '--';
                            everydayComparison.textContent = 'Compare your converted value to familiar objects';
                        }

                        function clearAll() {
                            inputValue.value = '';
                            fromUnit.value = 'smoot';
                            toUnit.value = 'beard_second';
                            weirdnessLevel.value = 5;
                            weirdnessValue.textContent = '5 - Normal';
                            clearOutputs();
                            inputValue.focus();
                        }

                        // Event listeners
                        inputValue.addEventListener('input', convert);
                        fromUnit.addEventListener('change', convert);
                        toUnit.addEventListener('change', convert);

                        weirdnessLevel.addEventListener('input', function() {
                            weirdnessValue.textContent = this.value + ' - ' + getWeirdnessLevel(parseInt(this.value));
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
                        const weirdExamples = document.querySelectorAll('.weird-example');
                        weirdExamples.forEach(button => {
                            button.addEventListener('click', function() {
                                const value = this.getAttribute('data-value');
                                const from = this.getAttribute('data-from');
                                const to = this.getAttribute('data-to');
                                
                                inputValue.value = value;
                                fromUnit.value = from;
                                toUnit.value = to;
                                convert();
                                
                                // Update button styles
                                weirdExamples.forEach(btn => btn.classList.remove('bg-orange-100', 'text-orange-700'));
                                weirdExamples.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-orange-100', 'text-orange-700');
                            });
                        });

                        // Clickable examples
                        const examples = document.querySelectorAll('[data-example]');
                        examples.forEach(element => {
                            element.addEventListener('click', function() {
                                const value = this.getAttribute('data-example');
                                const from = this.getAttribute('data-from');
                                const to = this.getAttribute('data-to');
                                
                                inputValue.value = value;
                                if (from) fromUnit.value = from;
                                if (to) toUnit.value = to;
                                convert();
                                inputValue.focus();
                            });
                        });

                        // Initialize
                        weirdnessValue.textContent = weirdnessLevel.value + ' - ' + getWeirdnessLevel(parseInt(weirdnessLevel.value));
                        inputValue.focus();

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
