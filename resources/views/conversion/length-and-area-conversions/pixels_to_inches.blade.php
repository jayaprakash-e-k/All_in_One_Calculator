<x-tool-page-layout
    title="Pixels to Inches Converter - ConvertPro"
    description="Professional pixels to inches converter for digital design and printing. Convert pixels to inches using DPI/PPI settings for accurate print sizing."
>
    <x-slot name="toolUi">
        <!-- Calculator Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-visible">
                            
                            <!-- Calculator Header -->
                            <div class="border-b border-slate-200 bg-slate-900 px-5 py-3">
                                <h2 class="text-lg font-semibold text-white">Digital to Print Conversion</h2>
                            </div>

                            <!-- Calculator Body -->
                            <div class="p-5 sm:p-6">
                                
                                <div class="grid gap-6 lg:grid-cols-12">
                                    <div class="lg:col-span-5">
                                        <form class="space-y-5 rounded-xl border border-slate-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-slate-200 lg:sticky lg:top-24 lg:z-20 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto" id="calculatorForm">

                                                                            <!-- Pixels Input -->
                                                                            <div class="space-y-2">
                                                                                <label for="pixels" class="block text-sm font-semibold text-gray-700">
                                                                                    Pixels
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="pixels" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                        placeholder="Enter pixels (e.g., 1920)"
                                                                                        step="1"
                                                                                        min="1"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium">px</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- DPI Input -->
                                                                            <div class="space-y-2">
                                                                                <label for="dpi" class="block text-sm font-semibold text-gray-700">
                                                                                    DPI (Dots Per Inch)
                                                                                </label>
                                                                                <div class="relative">
                                                                                    <input 
                                                                                        type="number" 
                                                                                        id="dpi" 
                                                                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-slate-400 focus:ring-2 focus:ring-slate-200 transition-all duration-200 text-lg font-medium" 
                                                                                        placeholder="Enter DPI (e.g., 300)"
                                                                                        step="1"
                                                                                        min="1"
                                                                                        value="300"
                                                                                    >
                                                                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                                                        <span class="text-gray-500 text-sm font-medium">dpi</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-xs text-gray-500 mt-1">Common: 72 (web), 150 (draft), 300 (print)</p>
                                                                            </div>

                                                                            <!-- DPI Presets -->
                                                                            

                                                                            <!-- Clear Button -->
                                                                            <div class="flex justify-center">
                                                                                <button 
                                                                                    type="button" 
                                                                                    id="clearButton"
                                                                                    class="inline-flex items-center px-4 py-2 bg-rose-100 hover:bg-rose-200 text-rose-700 font-medium rounded-lg transition-colors duration-200"
                                                                                >
                                                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                    </svg>
                                                                                    Clear Values
                                                                                </button>
                                                                            </div>

                                                                        </form>
                                    </div>
                                    <div class="space-y-4 lg:col-span-7">
                                        <!-- Results Display -->
                                                                        <div class="mt-8 space-y-4">
                                                                            <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Conversion Results</h3>

                                                                            <!-- Primary Result -->
                                                                            <div class="p-6 bg-gradient-to-r from-rose-50 to-blue-50 rounded-xl border-l-4 border-rose-500">
                                                                                <div class="flex items-center justify-between">
                                                                                    <div>
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Physical Size</h4>
                                                                                        <p class="text-sm text-gray-600">Print dimensions</p>
                                                                                    </div>
                                                                                    <div class="text-right">
                                                                                        <div class="text-2xl font-bold text-rose-600 font-mono" id="output">--</div>
                                                                                        <div class="text-sm text-gray-500 font-medium">inches</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Additional Conversions -->
                                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                                <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Centimeters</h4>
                                                                                        <div class="text-xl font-bold text-green-600 font-mono" id="cmOutput">--</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-500">
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-sm font-semibold text-gray-700 mb-1">Millimeters</h4>
                                                                                        <div class="text-xl font-bold text-purple-600 font-mono" id="mmOutput">--</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    

        <div class="mt-6 space-y-4">
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <div class="space-y-2">
                                                                                                <label class="block text-sm font-semibold text-gray-700">
                                                                                                    Common DPI Presets
                                                                                                </label>
                                                                                                <div class="grid grid-cols-4 gap-2">
                                                                                                    <button type="button" class="dpi-preset px-3 py-2 text-sm bg-gray-100 hover:bg-rose-100 text-gray-700 hover:text-rose-700 rounded-lg transition-colors" data-dpi="72">72 DPI</button>
                                                                                                    <button type="button" class="dpi-preset px-3 py-2 text-sm bg-gray-100 hover:bg-rose-100 text-gray-700 hover:text-rose-700 rounded-lg transition-colors" data-dpi="150">150 DPI</button>
                                                                                                    <button type="button" class="dpi-preset px-3 py-2 text-sm bg-gray-100 hover:bg-rose-100 text-gray-700 hover:text-rose-700 rounded-lg transition-colors" data-dpi="300">300 DPI</button>
                                                                                                    <button type="button" class="dpi-preset px-3 py-2 text-sm bg-gray-100 hover:bg-rose-100 text-gray-700 hover:text-rose-700 rounded-lg transition-colors" data-dpi="600">600 DPI</button>
                                                                                                </div>
                                                                                            </div>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <!-- Quick Reference -->
                                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">DPI Reference Guide</h4>
                                                    <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                                        <div>• 72 DPI: Web/Screen display</div>
                                                        <div>• 150 DPI: Draft printing</div>
                                                        <div>• 300 DPI: High-quality printing</div>
                                                        <div>• 600 DPI: Professional printing</div>
                                                    </div>
                                                </div>
            </div>
        </div>
</x-slot>

    <x-slot name="aboutContent">
        <!-- Additional Information -->
                        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">About Pixels to Inches Conversion</h3>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Digital vs Print Design</h4>
                                    <p>Converting pixels to inches is essential when preparing digital designs for print. The DPI (dots per inch) setting determines how many pixels fit into one physical inch, affecting the final print size and quality.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-2">Common Applications</h4>
                                    <p>Used in graphic design, web-to-print workflows, photography, publishing, and any situation where digital content needs to be printed at specific physical dimensions.</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-rose-50 rounded-lg border border-rose-200">
                                <p class="text-sm text-rose-800">
                                    <strong>Designer Tip:</strong> Higher DPI means smaller print size but better quality. 300 DPI is the standard for professional printing!
                                </p>
                            </div>
                        </div>

                        <!-- Common Screen Sizes Examples -->
                        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Common Screen Resolutions</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">HD Width</div>
                                    <div class="text-rose-600 cursor-pointer hover:text-rose-800 transition-colors" data-pixels="1920">1920 px</div>
                                    <div class="text-xs text-gray-500 mt-1">Full HD</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">4K Width</div>
                                    <div class="text-rose-600 cursor-pointer hover:text-rose-800 transition-colors" data-pixels="3840">3840 px</div>
                                    <div class="text-xs text-gray-500 mt-1">Ultra HD</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">A4 Width</div>
                                    <div class="text-rose-600 cursor-pointer hover:text-rose-800 transition-colors" data-pixels="2480">2480 px</div>
                                    <div class="text-xs text-gray-500 mt-1">@ 300 DPI</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="font-semibold text-gray-700">Letter Width</div>
                                    <div class="text-rose-600 cursor-pointer hover:text-rose-800 transition-colors" data-pixels="2550">2550 px</div>
                                    <div class="text-xs text-gray-500 mt-1">@ 300 DPI</div>
                                </div>
                            </div>
                        </div>
    </x-slot>

    <x-slot name="scripts">
        <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const pixelsInput = document.getElementById('pixels');
                        const dpiInput = document.getElementById('dpi');
                        const clearButton = document.getElementById('clearButton');
                        const output = document.getElementById('output');
                        const cmOutput = document.getElementById('cmOutput');
                        const mmOutput = document.getElementById('mmOutput');

                        function convert() {
                            const pixels = parseFloat(pixelsInput.value);
                            const dpi = parseFloat(dpiInput.value);

                            if (!isNaN(pixels) && !isNaN(dpi) && pixels > 0 && dpi > 0) {
                                const inches = pixels / dpi;
                                const cm = inches * 2.54;
                                const mm = cm * 10;

                                output.textContent = inches.toLocaleString(undefined, { maximumFractionDigits: 4 });
                                cmOutput.textContent = cm.toLocaleString(undefined, { maximumFractionDigits: 2 }) + ' cm';
                                mmOutput.textContent = mm.toLocaleString(undefined, { maximumFractionDigits: 1 }) + ' mm';
                            } else {
                                output.textContent = "--";
                                cmOutput.textContent = "--";
                                mmOutput.textContent = "--";
                            }
                        }

                        function clearInputs() {
                            pixelsInput.value = '';
                            dpiInput.value = '300';
                            convert();
                            pixelsInput.focus();
                        }

                        // Event listeners
                        pixelsInput.addEventListener('input', convert);
                        dpiInput.addEventListener('input', convert);
                        clearButton.addEventListener('click', clearInputs);

                        // DPI preset buttons
                        const dpiPresets = document.querySelectorAll('.dpi-preset');
                        dpiPresets.forEach(button => {
                            button.addEventListener('click', function() {
                                const dpiValue = this.getAttribute('data-dpi');
                                dpiInput.value = dpiValue;
                                convert();
                                
                                // Update button styles
                                dpiPresets.forEach(btn => btn.classList.remove('bg-rose-100', 'text-rose-700'));
                                dpiPresets.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
                                this.classList.remove('bg-gray-100', 'text-gray-700');
                                this.classList.add('bg-rose-100', 'text-rose-700');
                            });
                        });

                        // Add clickable functionality to example pixels
                        const examplePixels = document.querySelectorAll('[data-pixels]');
                        examplePixels.forEach(element => {
                            element.addEventListener('click', function() {
                                const pixelValue = this.getAttribute('data-pixels');
                                pixelsInput.value = pixelValue;
                                convert();
                                pixelsInput.focus();
                            });
                        });

                        // Initialize
                        pixelsInput.focus();

                        // Add keyboard shortcuts
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                clearInputs();
                            }
                        });

                        // Input validation
                        pixelsInput.addEventListener('input', function() {
                            if (this.value < 0) this.value = '';
                        });
                        
                        dpiInput.addEventListener('input', function() {
                            if (this.value < 0) this.value = '';
                        });

                        // Initialize conversion
                        convert();
                    });
                </script>
    </x-slot>
</x-tool-page-layout>
