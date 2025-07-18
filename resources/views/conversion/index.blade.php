<x-app-layout 
    title="ConvertPro - Professional Conversion Tools"
    description="Professional-grade calculators for accurate unit conversions across length, weight, pressure, torque, and more.">

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-primary-50 to-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Precision Conversion Tools
            </h2>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Professional-grade calculators for accurate unit conversions across length, weight, pressure, torque, and more.
            </p>
            <div class="flex justify-center">
                <div class="bg-white rounded-lg shadow-sm p-6 max-w-md w-full">
                    <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Accurate
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Fast
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            Professional
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conversion Categories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Length & Area Conversions -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Length & Area Conversions</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Precise conversions for length, area, and spatial measurements</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.length') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21l3-3 3 3M7 3l3 3 3-3M4 12h16"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">BASIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Length Converter</h4>
                        <p class="text-sm text-gray-600">Meters, feet, inches, kilometers</p>
                    </a>

                    <a href="{{ route('conversion.area') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">BASIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Area Converter</h4>
                        <p class="text-sm text-gray-600">Square units, acres, hectares</p>
                    </a>

                    <a href="{{ route('conversion.acreage') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">LAND</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Acreage Calculator</h4>
                        <p class="text-sm text-gray-600">Acres to various area units</p>
                    </a>

                    <a href="{{ route('conversion.aresToHectares') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">METRIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Ares to Hectares</h4>
                        <p class="text-sm text-gray-600">Metric area unit conversions</p>
                    </a>

                    <a href="{{ route('conversion.astronomicalUnit') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">SPACE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Astronomical Units</h4>
                        <p class="text-sm text-gray-600">AU, light-years, parsecs</p>
                    </a>

                    <a href="{{ route('conversion.decimeterToMeter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors">
                                <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full">METRIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Decimeter to Meter</h4>
                        <p class="text-sm text-gray-600">Simple metric conversions</p>
                    </a>

                    <a href="{{ route('conversion.feetInches') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-violet-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-violet-50 rounded-lg group-hover:bg-violet-100 transition-colors">
                                <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l5-5 5 5"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-violet-500 px-2 py-1 rounded-full">IMPERIAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Feet & Inches</h4>
                        <p class="text-sm text-gray-600">Imperial to metric conversions</p>
                    </a>

                    <a href="{{ route('conversion.heightInInches') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">HEIGHT</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Height in Inches</h4>
                        <p class="text-sm text-gray-600">Human height conversions</p>
                    </a>

                    <a href="{{ route('conversion.inchesToFraction') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full">FRACTION</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Inches to Fraction</h4>
                        <p class="text-sm text-gray-600">Decimal to fraction conversion</p>
                    </a>

                    <a href="{{ route('conversion.lightYear') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">COSMIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Light Year Converter</h4>
                        <p class="text-sm text-gray-600">Astronomical distance units</p>
                    </a>

                    <a href="{{ route('conversion.meshToMicron') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-sky-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-sky-50 rounded-lg group-hover:bg-sky-100 transition-colors">
                                <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14-7H5m14 14H5"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-sky-500 px-2 py-1 rounded-full">MESH</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Mesh to Micron</h4>
                        <p class="text-sm text-gray-600">Screen mesh conversions</p>
                    </a>

                    <a href="{{ route('conversion.pixelsToInches') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors">
                                <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full">DIGITAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Pixels to Inches</h4>
                        <p class="text-sm text-gray-600">Digital to physical units</p>
                    </a>
                </div>
            </div>

            <!-- Volume & Weight Conversions -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Volume & Weight Conversions</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive tools for mass, weight, and volume calculations</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.weightConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">BASIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Weight Converter</h4>
                        <p class="text-sm text-gray-600">Grams, pounds, kilograms, ounces</p>
                    </a>

                    <a href="{{ route('conversion.volume') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors">
                                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full">BASIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Volume Converter</h4>
                        <p class="text-sm text-gray-600">Liters, gallons, cubic units</p>
                    </a>

                    <a href="{{ route('conversion.ccfToGallons') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full">VOLUME</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">CCF to Gallons</h4>
                        <p class="text-sm text-gray-600">Hundred cubic feet conversions</p>
                    </a>

                    <a href="{{ route('conversion.cubicFeet') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14-7H5m14 14H5"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">CUBIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Cubic Feet Calculator</h4>
                        <p class="text-sm text-gray-600">Volume calculations in ft³</p>
                    </a>

                    <a href="{{ route('conversion.cubicMeter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14-7H5m14 14H5"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">METRIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Cubic Meter Calculator</h4>
                        <p class="text-sm text-gray-600">Volume calculations in m³</p>
                    </a>

                    <a href="{{ route('conversion.cubicYardsToTons') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">MATERIAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Cubic Yards to Tons</h4>
                        <p class="text-sm text-gray-600">Volume to weight for materials</p>
                    </a>

                    <a href="{{ route('conversion.decagramToGram') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">WEIGHT</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Decagram to Gram</h4>
                        <p class="text-sm text-gray-600">Metric weight conversions</p>
                    </a>

                    <a href="{{ route('conversion.dropsToMl') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full">DROPS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Drops to mL</h4>
                        <p class="text-sm text-gray-600">Small volume measurements</p>
                    </a>

                    <a href="{{ route('conversion.gallonCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">FLUID</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Gallon Calculator</h4>
                        <p class="text-sm text-gray-600">Comprehensive gallon conversions</p>
                    </a>

                    <a href="{{ route('conversion.gallonsToPounds') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full">LIQUID</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Gallons to Pounds</h4>
                        <p class="text-sm text-gray-600">Liquid volume to weight</p>
                    </a>

                    <a href="{{ route('conversion.gramsToOunces') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors">
                                <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full">WEIGHT</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Grams to Ounces</h4>
                        <p class="text-sm text-gray-600">Metric to imperial weight</p>
                    </a>

                    <a href="{{ route('conversion.kgToGallons') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">WATER</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Kg to Gallons</h4>
                        <p class="text-sm text-gray-600">Weight to volume for water</p>
                    </a>

                    <a href="{{ route('conversion.litersToCentiliters') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">METRIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Liters to Centiliters</h4>
                        <p class="text-sm text-gray-600">Metric volume conversions</p>
                    </a>

                    <a href="{{ route('conversion.mcgToMg') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-pink-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-pink-50 rounded-lg group-hover:bg-pink-100 transition-colors">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-pink-500 px-2 py-1 rounded-full">MICRO</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">mcg to mg</h4>
                        <p class="text-sm text-gray-600">Microgram to milligram</p>
                    </a>

                    <a href="{{ route('conversion.mgToMl') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-pink-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-pink-50 rounded-lg group-hover:bg-pink-100 transition-colors">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-pink-500 px-2 py-1 rounded-full">MEDICAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">mg to mL</h4>
                        <p class="text-sm text-gray-600">Medical dosage conversions</p>
                    </a>

                    <a href="{{ route('conversion.mlToCups') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">COOKING</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">mL to Cups</h4>
                        <p class="text-sm text-gray-600">Cooking measurement conversion</p>
                    </a>

                    <a href="{{ route('conversion.ozToCups') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors">
                                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full">COOKING</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Oz to Cups</h4>
                        <p class="text-sm text-gray-600">Fluid ounce conversions</p>
                    </a>

                    <a href="{{ route('conversion.pintsToPounds') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">LIQUID</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Pints to Pounds</h4>
                        <p class="text-sm text-gray-600">Volume to weight conversion</p>
                    </a>

                    <a href="{{ route('conversion.poundsAndOunces') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full">MIXED</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Pounds & Ounces</h4>
                        <p class="text-sm text-gray-600">Mixed unit conversions</p>
                    </a>

                    <a href="{{ route('conversion.quartsToPounds') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-fuchsia-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-fuchsia-50 rounded-lg group-hover:bg-fuchsia-100 transition-colors">
                                <svg class="w-6 h-6 text-fuchsia-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-fuchsia-500 px-2 py-1 rounded-full">LIQUID</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Quarts to Pounds</h4>
                        <p class="text-sm text-gray-600">Volume to weight conversion</p>
                    </a>
                </div>
            </div>

            <!-- Engineering & Technical Conversions -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Engineering & Technical Conversions</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for force, pressure, torque, and power calculations</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.pressureConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full">PRO</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Pressure Converter</h4>
                        <p class="text-sm text-gray-600">PSI, bar, pascal, atmosphere</p>
                    </a>

                    <a href="{{ route('conversion.torqueToHp') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full">PRO</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Torque to HP</h4>
                        <p class="text-sm text-gray-600">Power calculations from torque</p>
                    </a>

                    <a href="{{ route('conversion.nmToInchLbs') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">PRO</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Nm to in-lbs</h4>
                        <p class="text-sm text-gray-600">Torque unit conversions</p>
                    </a>

                    <a href="{{ route('conversion.psiToGpm') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full">FLOW</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">PSI to GPM</h4>
                        <p class="text-sm text-gray-600">Flow rate calculations</p>
                    </a>

                    <a href="{{ route('conversion.torrToAtm') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-gray-400 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-gray-50 rounded-lg group-hover:bg-gray-100 transition-colors">
                                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-gray-500 px-2 py-1 rounded-full">VACUUM</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Torr to atm</h4>
                        <p class="text-sm text-gray-600">Vacuum pressure units</p>
                    </a>

                    <a href="{{ route('conversion.forceConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">FORCE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Force Converter</h4>
                        <p class="text-sm text-gray-600">Newtons, pounds-force, kgf</p>
                    </a>

                    <a href="{{ route('conversion.inchLbsToNm') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">TORQUE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">in-lbs ↔ Nm</h4>
                        <p class="text-sm text-gray-600">Torque unit conversion</p>
                    </a>

                    <a href="{{ route('conversion.inchLbsToFtLbs') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full">TORQUE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">in-lbs ↔ ft-lbs</h4>
                        <p class="text-sm text-gray-600">Torque converter</p>
                    </a>

                    <a href="{{ route('conversion.lbsToNewtons') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-pink-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-pink-50 rounded-lg group-hover:bg-pink-100 transition-colors">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-pink-500 px-2 py-1 rounded-full">FORCE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Lbs ↔ Newtons</h4>
                        <p class="text-sm text-gray-600">Force converter</p>
                    </a>

                    <a href="{{ route('conversion.newtonMeterCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">CALC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Torque (Nm)</h4>
                        <p class="text-sm text-gray-600">Newton Meter Calculator</p>
                    </a>

                    <a href="{{ route('conversion.nmToFtlbsConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">TORQUE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Torque (ft-lbs)</h4>
                        <p class="text-sm text-gray-600">Nm to ft-lbs Converter</p>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Trusted by Professionals</h3>
                <p class="text-gray-600">Precision tools for engineers, scientists, and technical professionals worldwide</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary-600 mb-2">40+</div>
                    <div class="text-sm text-gray-600">Conversion Tools</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary-600 mb-2">99.9%</div>
                    <div class="text-sm text-gray-600">Accuracy Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary-600 mb-2">24/7</div>
                    <div class="text-sm text-gray-600">Available</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary-600 mb-2">Free</div>
                    <div class="text-sm text-gray-600">No Cost</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Why Choose ConvertPro?</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Professional-grade conversion tools designed for accuracy and reliability</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Precision Accuracy</h4>
                    <p class="text-gray-600">Industry-standard conversion factors ensure precise results for all calculations</p>
                </div>
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Lightning Fast</h4>
                    <p class="text-gray-600">Instant calculations with real-time conversion as you type</p>
                </div>
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Mobile Friendly</h4>
                    <p class="text-gray-600">Responsive design works perfectly on all devices and screen sizes</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>