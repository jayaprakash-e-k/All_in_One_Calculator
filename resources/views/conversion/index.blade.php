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

            <!-- Geographic & Mapping Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Geographic & Mapping Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for geographic coordinate conversion and mapping tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.coordinatesConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-emerald-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-emerald-50 rounded-lg group-hover:bg-emerald-100 transition-colors">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-emerald-500 px-2 py-1 rounded-full">GEO</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Coordinates</h4>
                        <p class="text-sm text-gray-600">Geographic coordinate conversion</p>
                    </a>

                    <a href="{{ route('conversion.dmsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">ANGLE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">DMS Calculator</h4>
                        <p class="text-sm text-gray-600">Degrees Minutes Seconds</p>
                    </a>

                    <a href="{{ route('conversion.latLongToUtm') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full">UTM</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Lat/Long to UTM</h4>
                        <p class="text-sm text-gray-600">Coordinate projection</p>
                    </a>

                    <a href="{{ route('conversion.scaleCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors">
                                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full">SCALE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Scale Calculator</h4>
                        <p class="text-sm text-gray-600">Calculate map scales and ratios</p>
                    </a>
                </div>
            </div>

            <!-- Number Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Number Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for number conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.billionToTrillionConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">NUMBERS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Billion to Trillion</h4>
                        <p class="text-sm text-gray-600">Convert billions to trillions</p>
                    </a>

                    <a href="{{ route('conversion.croreToLakhConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">INDIAN</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Crore to Lakh</h4>
                        <p class="text-sm text-gray-600">Convert crores to lakhs</p>
                    </a>

                    <a href="{{ route('conversion.croreToMillionConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">GLOBAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Crore to Million</h4>
                        <p class="text-sm text-gray-600">Convert between Indian and Western systems</p>
                    </a>

                    <a href="{{ route('conversion.millionToBillionConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">WESTERN</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Million to Billion</h4>
                        <p class="text-sm text-gray-600">Convert millions to billions</p>
                    </a>

                    <a href="{{ route('conversion.millionToLakhConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors">
                                <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4M4 16l4-4"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full">CROSS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Million to Lakh</h4>
                        <p class="text-sm text-gray-600">Convert between Western and Indian systems</p>
                    </a>

                    <a href="{{ route('conversion.millionToThousandConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m0 0l7-7 7 7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full">SCALE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Million to Thousand</h4>
                        <p class="text-sm text-gray-600">Convert millions to thousands</p>
                    </a>

                    <a href="{{ route('conversion.numberToBillionConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full">SCALE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Number to Billion</h4>
                        <p class="text-sm text-gray-600">Convert any number to billions</p>
                    </a>

                    <a href="{{ route('conversion.numberToMillionConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full">SCALE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Number to Million</h4>
                        <p class="text-sm text-gray-600">Convert any number to millions</p>
                    </a>
                </div>
            </div>

            <!-- Number System Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Number System Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for number system conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.binaryConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">BINARY</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Binary Converter</h4>
                        <p class="text-sm text-gray-600">Convert binary to decimal and other systems</p>
                    </a>

                    <a href="{{ route('conversion.binaryToHexadecimalConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">BIN→HEX</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Binary to Hexadecimal</h4>
                        <p class="text-sm text-gray-600">Convert binary to hexadecimal</p>
                    </a>

                    <a href="{{ route('conversion.binaryToOctalConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">BIN→OCT</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Binary to Octal</h4>
                        <p class="text-sm text-gray-600">Convert binary to octal</p>
                    </a>

                    <a href="{{ route('conversion.decimalToHexadecimalConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full">DEC→HEX</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Decimal to Hexadecimal</h4>
                        <p class="text-sm text-gray-600">Convert decimal to hexadecimal</p>
                    </a>

                    <a href="{{ route('conversion.decimalToOctalConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full">DEC→OCT</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Decimal to Octal</h4>
                        <p class="text-sm text-gray-600">Convert decimal to octal</p>
                    </a>

                    <a href="{{ route('conversion.romanNumeralsConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">ROMAN</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Roman Numerals</h4>
                        <p class="text-sm text-gray-600">Convert Roman numerals to decimal</p>
                    </a>
                </div>
            </div>

            <!-- Data & Technical Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Data & Technical Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for data and technical conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.byteConversionCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full">BYTES</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Byte Conversion Calculator</h4>
                        <p class="text-sm text-gray-600">Convert between all byte units (B, KB, MB, GB, TB)</p>
                    </a>

                    <a href="{{ route('conversion.capacitanceConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">ELECTRICAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Capacitance Converter</h4>
                        <p class="text-sm text-gray-600">Convert capacitance units (F, mF, μF, nF, pF)</p>
                    </a>

                    <a href="{{ route('conversion.kbToMbConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors">
                                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full">KB→MB</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">kB to MB Converter</h4>
                        <p class="text-sm text-gray-600">Convert kilobytes to megabytes</p>
                    </a>

                    <a href="{{ route('conversion.mbpsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">SPEED</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Mbps Calculator</h4>
                        <p class="text-sm text-gray-600">Calculate network speeds and data transfer rates</p>
                    </a>

                    <a href="{{ route('conversion.mbpsToGbpsConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">MBPS→GBPS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Mbps to Gbps Converter</h4>
                        <p class="text-sm text-gray-600">Convert megabits to gigabits per second</p>
                    </a>

                    <a href="{{ route('conversion.mbToGbConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">MB→GB</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">MB to GB Converter</h4>
                        <p class="text-sm text-gray-600">Convert megabytes to gigabytes</p>
                    </a>

                    <a href="{{ route('conversion.unixTimeConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full">UNIX</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Unix Time Converter</h4>
                        <p class="text-sm text-gray-600">Convert Unix timestamps to human-readable dates</p>
                    </a>
                </div>
            </div>

            <!-- Time & Date Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Time & Date Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for time and date conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.militaryTimeConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-emerald-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-emerald-50 rounded-lg group-hover:bg-emerald-100 transition-colors">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-emerald-500 px-2 py-1 rounded-full">MILITARY</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Military Time Converter</h4>
                        <p class="text-sm text-gray-600">Convert between 12-hour and 24-hour time formats</p>
                    </a>

                    <a href="{{ route('conversion.minutesToHoursConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">MIN→HR</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Minutes to Hours Converter</h4>
                        <p class="text-sm text-gray-600">Convert minutes to hours and vice versa</p>
                    </a>

                    <a href="{{ route('conversion.timeUnitConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-violet-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-violet-50 rounded-lg group-hover:bg-violet-100 transition-colors">
                                <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-violet-500 px-2 py-1 rounded-full">UNITS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Time Unit Converter</h4>
                        <p class="text-sm text-gray-600">Convert between all time units (seconds, minutes, hours, days)</p>
                    </a>

                    <a href="{{ route('conversion.timeZonesConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full">ZONES</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Time Zones Converter</h4>
                        <p class="text-sm text-gray-600">Convert time between different time zones worldwide</p>
                    </a>

                    <a href="{{ route('conversion.yearsToDecadesCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors">
                                <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full">YEARS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Years to Decades Calculator</h4>
                        <p class="text-sm text-gray-600">Convert years to decades, centuries, and millennia</p>
                    </a>
                </div>
            </div>

            <!-- Specialized Measurement Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Specialized Measurement Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for specialized measurement conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.angleConversionCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">ANGLE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Angle Conversion Calculator</h4>
                        <p class="text-sm text-gray-600">Degrees, radians, gradians conversions</p>
                    </a>

                    <!-- Density Conversion -->
                    <a href="{{ route('conversion.densityConversion') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">DENSITY</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Density Conversion</h4>
                        <p class="text-sm text-gray-600">Mass per unit volume calculations</p>
                    </a>

                    <!-- Hardness Conversion Calculator -->
                    <a href="{{ route('conversion.hardnessConversionCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">MATERIAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Hardness Conversion Calculator</h4>
                        <p class="text-sm text-gray-600">Rockwell, Brinell, Vickers scales</p>
                    </a>

                    <!-- Radiation Converter -->
                    <a href="{{ route('conversion.radiationConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">NUCLEAR</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Radiation Converter</h4>
                        <p class="text-sm text-gray-600">Radiation dose and exposure units</p>
                    </a>

                    <!-- Natural Gas Converter -->
                    <a href="{{ route('conversion.naturalGasConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">GAS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Natural Gas Converter</h4>
                        <p class="text-sm text-gray-600">Gas volume and energy conversions</p>
                    </a>

                    <!-- Dimensional Analysis Calculator -->
                    <a href="{{ route('conversion.dimensionalAnalysisCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full">ANALYSIS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Dimensional Analysis Calculator</h4>
                        <p class="text-sm text-gray-600">Unit analysis and conversions</p>
                    </a>

                    <!-- CGS System of Units Converter -->
                    <a href="{{ route('conversion.cgsSystemOfUnitsConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors">
                                <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full">CGS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">CGS System of Units Converter</h4>
                        <p class="text-sm text-gray-600">Centimeter-gram-second conversions</p>
                    </a>

                    <!-- Weird Units Converter -->
                    <a href="{{ route('conversion.weirdUnitsConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full">WEIRD</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Weird Units Converter</h4>
                        <p class="text-sm text-gray-600">Unusual and fun unit conversions</p>
                    </a>
                </div>
            </div>

            <!-- Speed & Motion Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Speed & Motion Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for speed and motion conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.msToKmhConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">SPEED</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">m/s to km/h Converter</h4>
                        <p class="text-sm text-gray-600">Meters per second to kilometers per hour</p>
                    </a>

                    <!-- Knots to kph Converter -->
                    <a href="{{ route('conversion.knotsToKphConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">NAUTICAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Knots to kph Converter</h4>
                        <p class="text-sm text-gray-600">Nautical speed to metric conversion</p>
                    </a>

                    <!-- Knots to mph Converter -->
                    <a href="{{ route('conversion.knotsToMphConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">NAUTICAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Knots to mph Converter</h4>
                        <p class="text-sm text-gray-600">Nautical to imperial speed conversion</p>
                    </a>

                    <!-- MPG to L/100 km Converter -->
                    <a href="{{ route('conversion.mpgToL100kmConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">FUEL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">MPG to L/100 km Converter</h4>
                        <p class="text-sm text-gray-600">Fuel economy conversions</p>
                    </a>

                    <!-- Speed Conversion -->
                    <a href="{{ route('conversion.speedConversion') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">SPEED</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Speed Conversion</h4>
                        <p class="text-sm text-gray-600">Universal speed unit converter</p>
                    </a>
                </div>
            </div>

            <!-- Energy & Power Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Energy & Power Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for energy and power conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.energyConversionCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full">ENERGY</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Energy Conversion Calculator</h4>
                        <p class="text-sm text-gray-600">Joules, calories, BTU, kWh conversions</p>
                    </a>

                    <!-- Power Converter -->
                    <a href="{{ route('conversion.powerConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full">POWER</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Power Converter</h4>
                        <p class="text-sm text-gray-600">Watts, horsepower, BTU/h conversions</p>
                    </a>

                    <!-- Joules to Volts Calculator -->
                    <a href="{{ route('conversion.joulesToVoltsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">ELECTRIC</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Joules to Volts Calculator</h4>
                        <p class="text-sm text-gray-600">Energy to electrical potential conversion</p>
                    </a>

                    <!-- Nm to Joules Calculator -->
                    <a href="{{ route('conversion.nmToJoulesCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357 2m15.357-2H15"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">TORQUE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Nm to Joules Calculator</h4>
                        <p class="text-sm text-gray-600">Torque to energy conversion</p>
                    </a>

                    <!-- dBm to Watts Calculator -->
                    <a href="{{ route('conversion.dbmToWattsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">RF</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">dBm to Watts Calculator</h4>
                        <p class="text-sm text-gray-600">RF power conversion calculator</p>
                    </a>

                    <!-- RMS to Watts Converter -->
                    <a href="{{ route('conversion.rmsToWattsConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">RMS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">RMS to Watts Converter</h4>
                        <p class="text-sm text-gray-600">RMS power calculations</p>
                    </a>
                </div>
            </div>

            <!-- Currency & Financial Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Currency & Financial Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for currency and financial conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.centsToDollarsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">MONEY</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Cents to Dollars Calculator</h4>
                        <p class="text-sm text-gray-600">Convert cents to dollar amounts</p>
                    </a>

                    <!-- Dimes to Dollars Calculator -->
                    <a href="{{ route('conversion.dimesToDollarsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">COIN</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Dimes to Dollars Calculator</h4>
                        <p class="text-sm text-gray-600">Convert dimes to dollar amounts</p>
                    </a>

                    <!-- Nickels to Dollars Calculator -->
                    <a href="{{ route('conversion.nickelsToDollarsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">COIN</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Nickels to Dollars Calculator</h4>
                        <p class="text-sm text-gray-600">Convert nickels to dollar amounts</p>
                    </a>

                    <!-- Pennies to Dollars Calculator -->
                    <a href="{{ route('conversion.penniesToDollarsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">COIN</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Pennies to Dollars Calculator</h4>
                        <p class="text-sm text-gray-600">Convert pennies to dollar amounts</p>
                    </a>
                </div>
            </div>

            <!-- Digital & Technical Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Digital & Technical Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for digital and technical conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.pxToEmConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full">WEB</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Px to Em Converter</h4>
                        <p class="text-sm text-gray-600">CSS pixel to em unit conversion</p>
                    </a>

                    <!-- PPM Calculator -->
                    <a href="{{ route('conversion.ppmCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full">PPM</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">PPM Calculator</h4>
                        <p class="text-sm text-gray-600">Parts per million calculations</p>
                    </a>

                    <!-- PPM to mg/L Converter -->
                    <a href="{{ route('conversion.ppmToMgLConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors">
                                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14-7H5m14 14H5"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full">WATER</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">PPM to mg/L Converter</h4>
                        <p class="text-sm text-gray-600">Water quality concentration units</p>
                    </a>

                    <!-- CPS Calculator -->
                    <a href="{{ route('conversion.cpsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-pink-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-pink-50 rounded-lg group-hover:bg-pink-100 transition-colors">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-pink-500 px-2 py-1 rounded-full">RATE</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">CPS Calculator</h4>
                        <p class="text-sm text-gray-600">Cycles per second calculations</p>
                    </a>

                    <!-- Paper Quantity Converter -->
                    <a href="{{ route('conversion.paperQuantityConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full">PAPER</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Paper Quantity Converter</h4>
                        <p class="text-sm text-gray-600">Ream, sheet, and paper conversions</p>
                    </a>
                </div>
            </div>

            <!-- Utility & General Conversion Tools -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Utility & General Conversion Tools</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Professional tools for utility and general conversion tasks</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('conversion.ccfToThermsCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full">GAS</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">CCF to Therms Calculator</h4>
                        <p class="text-sm text-gray-600">Gas volume to energy conversion</p>
                    </a>

                    <!-- Conversion Calculator -->
                    <a href="{{ route('conversion.conversionCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full">GENERAL</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Conversion Calculator</h4>
                        <p class="text-sm text-gray-600">General purpose conversion tool</p>
                    </a>

                    <!-- Grams To Calories Calculator -->
                    <a href="{{ route('conversion.gramsToCaloriesCalculator') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full">FOOD</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Grams To Calories Calculator</h4>
                        <p class="text-sm text-gray-600">Food weight to energy conversion</p>
                    </a>

                    <!-- Quantity Converter -->
                    <a href="{{ route('conversion.quantityConverter') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full">COUNT</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Quantity Converter</h4>
                        <p class="text-sm text-gray-600">Count and quantity conversions</p>
                    </a>

                    <!-- Temperature Conversion -->
                    <a href="{{ route('conversion.temperatureConversion') }}" class="group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full">TEMP</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Temperature Conversion</h4>
                        <p class="text-sm text-gray-600">Celsius, Fahrenheit, Kelvin conversions</p>
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