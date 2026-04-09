<?php

return json_decode(<<<'JSON'
{
  "categories": [
    {
      "slug": "length-and-area-conversions",
      "title": "Length & Area Conversions",
      "description": "Precise conversions for length, area, and spatial measurements",
      "tools": [
        {
          "key": "length-and-area-conversions::length",
          "slug": "length",
          "route_name": "conversion.length-and-area-conversions.length",
          "view": "conversion.length-and-area-conversions.length",
          "title": "Length Converter",
          "description": "Meters, feet, inches, kilometers",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 21l3-3 3 3M7 3l3 3 3-3M4 12h16\"></path>\n                                </svg>",
          "badge": {
            "label": "BASIC",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::area",
          "slug": "area",
          "route_name": "conversion.length-and-area-conversions.area",
          "view": "conversion.length-and-area-conversions.area",
          "title": "Area Converter",
          "description": "Square units, acres, hectares",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\"></rect>\n                                </svg>",
          "badge": {
            "label": "BASIC",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::acreage",
          "slug": "acreage",
          "route_name": "conversion.length-and-area-conversions.acreage",
          "view": "conversion.length-and-area-conversions.acreage",
          "title": "Acreage Calculator",
          "description": "Acres to various area units",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "LAND",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::ares-to-hectares",
          "slug": "ares-to-hectares",
          "route_name": "conversion.length-and-area-conversions.ares-to-hectares",
          "view": "conversion.length-and-area-conversions.ares_to_hectares",
          "title": "Ares to Hectares",
          "description": "Metric area unit conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z\"></path>\n                                </svg>",
          "badge": {
            "label": "METRIC",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::astronomical-unit",
          "slug": "astronomical-unit",
          "route_name": "conversion.length-and-area-conversions.astronomical-unit",
          "view": "conversion.length-and-area-conversions.astronomical_unit",
          "title": "Astronomical Units",
          "description": "AU, light-years, parsecs",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\"></path>\n                                </svg>",
          "badge": {
            "label": "SPACE",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::decimeter-to-meter",
          "slug": "decimeter-to-meter",
          "route_name": "conversion.length-and-area-conversions.decimeter-to-meter",
          "view": "conversion.length-and-area-conversions.decimeter_to_meter",
          "title": "Decimeter to Meter",
          "description": "Simple metric conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-rose-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z\"></path>\n                                </svg>",
          "badge": {
            "label": "METRIC",
            "class": "text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::feet-inches",
          "slug": "feet-inches",
          "route_name": "conversion.length-and-area-conversions.feet-inches",
          "view": "conversion.length-and-area-conversions.feet_inches",
          "title": "Feet & Inches",
          "description": "Imperial to metric conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-violet-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-violet-50 rounded-lg group-hover:bg-violet-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-violet-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 15l5-5 5 5\"></path>\n                                </svg>",
          "badge": {
            "label": "IMPERIAL",
            "class": "text-xs font-medium text-white bg-violet-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::height-in-inches",
          "slug": "height-in-inches",
          "route_name": "conversion.length-and-area-conversions.height-in-inches",
          "view": "conversion.length-and-area-conversions.height_in_inches",
          "title": "Height in Inches",
          "description": "Human height conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "HEIGHT",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::inches-to-fraction",
          "slug": "inches-to-fraction",
          "route_name": "conversion.length-and-area-conversions.inches-to-fraction",
          "view": "conversion.length-and-area-conversions.inches_to_fraction",
          "title": "Inches to Fraction",
          "description": "Decimal to fraction conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-amber-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "FRACTION",
            "class": "text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::lightyear-conversion",
          "slug": "lightyear-conversion",
          "route_name": "conversion.length-and-area-conversions.lightyear-conversion",
          "view": "conversion.length-and-area-conversions.light_year",
          "title": "Light Year Converter",
          "description": "Astronomical distance units",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z\"></path>\n                                </svg>",
          "badge": {
            "label": "COSMIC",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::mesh-to-micron",
          "slug": "mesh-to-micron",
          "route_name": "conversion.length-and-area-conversions.mesh-to-micron",
          "view": "conversion.length-and-area-conversions.mesh_to_micron",
          "title": "Mesh to Micron",
          "description": "Screen mesh conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-sky-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-sky-50 rounded-lg group-hover:bg-sky-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-sky-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14-7H5m14 14H5\"></path>\n                                </svg>",
          "badge": {
            "label": "MESH",
            "class": "text-xs font-medium text-white bg-sky-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "length-and-area-conversions::pixels-to-inches",
          "slug": "pixels-to-inches",
          "route_name": "conversion.length-and-area-conversions.pixels-to-inches",
          "view": "conversion.length-and-area-conversions.pixels_to_inches",
          "title": "Pixels to Inches",
          "description": "Digital to physical units",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-rose-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "DIGITAL",
            "class": "text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "volume-and-weight-conversions",
      "title": "Volume & Weight Conversions",
      "description": "Comprehensive tools for mass, weight, and volume calculations",
      "tools": [
        {
          "key": "volume-and-weight-conversions::weight-converter",
          "slug": "weight-converter",
          "route_name": "conversion.volume-and-weight-conversions.weight-converter",
          "view": "conversion.volume-and-weight-conversions.weight_converter",
          "title": "Weight Converter",
          "description": "Grams, pounds, kilograms, ounces",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3\"></path>\n                                </svg>",
          "badge": {
            "label": "BASIC",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::volume",
          "slug": "volume",
          "route_name": "conversion.volume-and-weight-conversions.volume",
          "view": "conversion.volume-and-weight-conversions.volume_converter",
          "title": "Volume Converter",
          "description": "Liters, gallons, cubic units",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-cyan-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4\"></path>\n                                </svg>",
          "badge": {
            "label": "BASIC",
            "class": "text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::ccf-to-gallons",
          "slug": "ccf-to-gallons",
          "route_name": "conversion.volume-and-weight-conversions.ccf-to-gallons",
          "view": "conversion.volume-and-weight-conversions.ccf_to_gallons",
          "title": "CCF to Gallons",
          "description": "Hundred cubic feet conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-orange-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4\"></path>\n                                </svg>",
          "badge": {
            "label": "VOLUME",
            "class": "text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::cubic-feet-calculator",
          "slug": "cubic-feet-calculator",
          "route_name": "conversion.volume-and-weight-conversions.cubic-feet-calculator",
          "view": "conversion.volume-and-weight-conversions.cubic_feet",
          "title": "Cubic Feet Calculator",
          "description": "Volume calculations in ft³",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14-7H5m14 14H5\"></path>\n                                </svg>",
          "badge": {
            "label": "CUBIC",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::cubic-meter-calculator",
          "slug": "cubic-meter-calculator",
          "route_name": "conversion.volume-and-weight-conversions.cubic-meter-calculator",
          "view": "conversion.volume-and-weight-conversions.cubic_meter",
          "title": "Cubic Meter Calculator",
          "description": "Volume calculations in m³",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14-7H5m14 14H5\"></path>\n                                </svg>",
          "badge": {
            "label": "METRIC",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::cubic-yards-to-tons",
          "slug": "cubic-yards-to-tons",
          "route_name": "conversion.volume-and-weight-conversions.cubic-yards-to-tons",
          "view": "conversion.volume-and-weight-conversions.cubic_yards_to_tons",
          "title": "Cubic Yards to Tons",
          "description": "Volume to weight for materials",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3\"></path>\n                                </svg>",
          "badge": {
            "label": "MATERIAL",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::decagram-to-gram",
          "slug": "decagram-to-gram",
          "route_name": "conversion.volume-and-weight-conversions.decagram-to-gram",
          "view": "conversion.volume-and-weight-conversions.decagram_to_gram",
          "title": "Decagram to Gram",
          "description": "Metric weight conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3\"></path>\n                                </svg>",
          "badge": {
            "label": "WEIGHT",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::drops-to-ml",
          "slug": "drops-to-ml",
          "route_name": "conversion.volume-and-weight-conversions.drops-to-ml",
          "view": "conversion.volume-and-weight-conversions.drops_to_ml",
          "title": "Drops to mL",
          "description": "Small volume measurements",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-teal-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12\"></path>\n                                </svg>",
          "badge": {
            "label": "DROPS",
            "class": "text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::gallon-calculator",
          "slug": "gallon-calculator",
          "route_name": "conversion.volume-and-weight-conversions.gallon-calculator",
          "view": "conversion.volume-and-weight-conversions.gallon_calculator",
          "title": "Gallon Calculator",
          "description": "Comprehensive gallon conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\"></path>\n                                </svg>",
          "badge": {
            "label": "FLUID",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::gallons-to-pounds",
          "slug": "gallons-to-pounds",
          "route_name": "conversion.volume-and-weight-conversions.gallons-to-pounds",
          "view": "conversion.volume-and-weight-conversions.gallons_to_pounds",
          "title": "Gallons to Pounds",
          "description": "Liquid volume to weight",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-amber-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3\"></path>\n                                </svg>",
          "badge": {
            "label": "LIQUID",
            "class": "text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::grams-to-ounces",
          "slug": "grams-to-ounces",
          "route_name": "conversion.volume-and-weight-conversions.grams-to-ounces",
          "view": "conversion.volume-and-weight-conversions.grams_to_ounces",
          "title": "Grams to Ounces",
          "description": "Metric to imperial weight",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-rose-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3\"></path>\n                                </svg>",
          "badge": {
            "label": "WEIGHT",
            "class": "text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::kg-to-gallons",
          "slug": "kg-to-gallons",
          "route_name": "conversion.volume-and-weight-conversions.kg-to-gallons",
          "view": "conversion.volume-and-weight-conversions.kg_to_gallons",
          "title": "Kg to Gallons",
          "description": "Weight to volume for water",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7l4-4m0 0l4 4m-4-4v18\"></path>\n                                </svg>",
          "badge": {
            "label": "WATER",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::liters-to-centiliters",
          "slug": "liters-to-centiliters",
          "route_name": "conversion.volume-and-weight-conversions.liters-to-centiliters",
          "view": "conversion.volume-and-weight-conversions.liters_to_centiliters",
          "title": "Liters to Centiliters",
          "description": "Metric volume conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>\n                                </svg>",
          "badge": {
            "label": "METRIC",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::mcg-to-mg",
          "slug": "mcg-to-mg",
          "route_name": "conversion.volume-and-weight-conversions.mcg-to-mg",
          "view": "conversion.volume-and-weight-conversions.mcg_to_mg",
          "title": "mcg to mg",
          "description": "Microgram to milligram",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-pink-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-pink-50 rounded-lg group-hover:bg-pink-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-pink-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z\"></path>\n                                </svg>",
          "badge": {
            "label": "MICRO",
            "class": "text-xs font-medium text-white bg-pink-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::mg-to-ml",
          "slug": "mg-to-ml",
          "route_name": "conversion.volume-and-weight-conversions.mg-to-ml",
          "view": "conversion.volume-and-weight-conversions.mg_to_ml",
          "title": "mg to mL",
          "description": "Medical dosage conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-pink-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-pink-50 rounded-lg group-hover:bg-pink-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-pink-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z\"></path>\n                                </svg>",
          "badge": {
            "label": "MEDICAL",
            "class": "text-xs font-medium text-white bg-pink-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::ml-to-cups",
          "slug": "ml-to-cups",
          "route_name": "conversion.volume-and-weight-conversions.ml-to-cups",
          "view": "conversion.volume-and-weight-conversions.ml_to_cups",
          "title": "mL to Cups",
          "description": "Cooking measurement conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "COOKING",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::oz-to-cups",
          "slug": "oz-to-cups",
          "route_name": "conversion.volume-and-weight-conversions.oz-to-cups",
          "view": "conversion.volume-and-weight-conversions.oz_to_cups",
          "title": "Oz to Cups",
          "description": "Fluid ounce conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-cyan-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "COOKING",
            "class": "text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::pints-to-pounds",
          "slug": "pints-to-pounds",
          "route_name": "conversion.volume-and-weight-conversions.pints-to-pounds",
          "view": "conversion.volume-and-weight-conversions.pints_to_pounds",
          "title": "Pints to Pounds",
          "description": "Volume to weight conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3\"></path>\n                                </svg>",
          "badge": {
            "label": "LIQUID",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::pounds-and-ounces",
          "slug": "pounds-and-ounces",
          "route_name": "conversion.volume-and-weight-conversions.pounds-and-ounces",
          "view": "conversion.volume-and-weight-conversions.pounds_and_ounces",
          "title": "Pounds & Ounces",
          "description": "Mixed unit conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-teal-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3\"></path>\n                                </svg>",
          "badge": {
            "label": "MIXED",
            "class": "text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "volume-and-weight-conversions::quarts-to-pounds",
          "slug": "quarts-to-pounds",
          "route_name": "conversion.volume-and-weight-conversions.quarts-to-pounds",
          "view": "conversion.volume-and-weight-conversions.quarts_to_pounds",
          "title": "Quarts to Pounds",
          "description": "Volume to weight conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-fuchsia-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-fuchsia-50 rounded-lg group-hover:bg-fuchsia-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-fuchsia-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3\"></path>\n                                </svg>",
          "badge": {
            "label": "LIQUID",
            "class": "text-xs font-medium text-white bg-fuchsia-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "engineering-and-technical-conversions",
      "title": "Engineering & Technical Conversions",
      "description": "Professional tools for force, pressure, torque, and power calculations",
      "tools": [
        {
          "key": "engineering-and-technical-conversions::pressure-converter",
          "slug": "pressure-converter",
          "route_name": "conversion.engineering-and-technical-conversions.pressure-converter",
          "view": "conversion.engineering-and-technical-conversions.pressure_converter",
          "title": "Pressure Converter",
          "description": "PSI, bar, pascal, atmosphere",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "PRO",
            "class": "text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::torque-to-hp",
          "slug": "torque-to-hp",
          "route_name": "conversion.engineering-and-technical-conversions.torque-to-hp",
          "view": "conversion.engineering-and-technical-conversions.torque_to_hp",
          "title": "Torque to HP",
          "description": "Power calculations from torque",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-orange-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1\"></path>\n                                </svg>",
          "badge": {
            "label": "PRO",
            "class": "text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::nm-to-inchlbs",
          "slug": "nm-to-inchlbs",
          "route_name": "conversion.engineering-and-technical-conversions.nm-to-inchlbs",
          "view": "conversion.engineering-and-technical-conversions.nm_to_inlbs",
          "title": "Nm to in-lbs",
          "description": "Torque unit conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\"></path>\n                                </svg>",
          "badge": {
            "label": "PRO",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::psi-to-gpm",
          "slug": "psi-to-gpm",
          "route_name": "conversion.engineering-and-technical-conversions.psi-to-gpm",
          "view": "conversion.engineering-and-technical-conversions.psi_to_gpm",
          "title": "PSI to GPM",
          "description": "Flow rate calculations",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-teal-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10\"></path>\n                                </svg>",
          "badge": {
            "label": "FLOW",
            "class": "text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::torr-to-atm",
          "slug": "torr-to-atm",
          "route_name": "conversion.engineering-and-technical-conversions.torr-to-atm",
          "view": "conversion.engineering-and-technical-conversions.torr_to_atm",
          "title": "Torr to atm",
          "description": "Vacuum pressure units",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-gray-400 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-gray-50 rounded-lg group-hover:bg-gray-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z\"></path>\n                                </svg>",
          "badge": {
            "label": "VACUUM",
            "class": "text-xs font-medium text-white bg-gray-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::force-converter",
          "slug": "force-converter",
          "route_name": "conversion.engineering-and-technical-conversions.force-converter",
          "view": "conversion.engineering-and-technical-conversions.force_converter",
          "title": "Force Converter",
          "description": "Newtons, pounds-force, kgf",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z\"></path>\n                                </svg>",
          "badge": {
            "label": "FORCE",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::inchlbs-to-nm",
          "slug": "inchlbs-to-nm",
          "route_name": "conversion.engineering-and-technical-conversions.inchlbs-to-nm",
          "view": "conversion.engineering-and-technical-conversions.inchlbs_to_nm",
          "title": "in-lbs ↔ Nm",
          "description": "Torque unit conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\"></path>\n                                </svg>",
          "badge": {
            "label": "TORQUE",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::inchlbs-to-ftlbs",
          "slug": "inchlbs-to-ftlbs",
          "route_name": "conversion.engineering-and-technical-conversions.inchlbs-to-ftlbs",
          "view": "conversion.engineering-and-technical-conversions.inchlbs_to_ftlbs",
          "title": "in-lbs ↔ ft-lbs",
          "description": "Torque converter",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-orange-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\"></path>\n                                </svg>",
          "badge": {
            "label": "TORQUE",
            "class": "text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::lbs-to-newtons",
          "slug": "lbs-to-newtons",
          "route_name": "conversion.engineering-and-technical-conversions.lbs-to-newtons",
          "view": "conversion.engineering-and-technical-conversions.lbs_to_newtons",
          "title": "Lbs ↔ Newtons",
          "description": "Force converter",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-pink-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-pink-50 rounded-lg group-hover:bg-pink-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-pink-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z\"></path>\n                                </svg>",
          "badge": {
            "label": "FORCE",
            "class": "text-xs font-medium text-white bg-pink-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::newton-meter-calculator",
          "slug": "newton-meter-calculator",
          "route_name": "conversion.engineering-and-technical-conversions.newton-meter-calculator",
          "view": "conversion.engineering-and-technical-conversions.newton_meter_calculator",
          "title": "Torque (Nm)",
          "description": "Newton Meter Calculator",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "CALC",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "engineering-and-technical-conversions::nm-to-ftlbs-converter",
          "slug": "nm-to-ftlbs-converter",
          "route_name": "conversion.engineering-and-technical-conversions.nm-to-ftlbs-converter",
          "view": "conversion.engineering-and-technical-conversions.nm_to_ftlbs_converter",
          "title": "Torque (ft-lbs)",
          "description": "Nm to ft-lbs Converter",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\"></path>\n                                </svg>",
          "badge": {
            "label": "TORQUE",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "geographic-and-mapping-tools",
      "title": "Geographic & Mapping Tools",
      "description": "Professional tools for geographic coordinate conversion and mapping tasks",
      "tools": [
        {
          "key": "geographic-and-mapping-tools::coordinates-converter",
          "slug": "coordinates-converter",
          "route_name": "conversion.geographic-and-mapping-tools.coordinates-converter",
          "view": "conversion.geographic-and-mapping-tools.coordinates_converter",
          "title": "Coordinates",
          "description": "Geographic coordinate conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-emerald-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-emerald-50 rounded-lg group-hover:bg-emerald-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-emerald-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3\"></path>\n                                </svg>",
          "badge": {
            "label": "GEO",
            "class": "text-xs font-medium text-white bg-emerald-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "geographic-and-mapping-tools::dms-calculator",
          "slug": "dms-calculator",
          "route_name": "conversion.geographic-and-mapping-tools.dms-calculator",
          "view": "conversion.geographic-and-mapping-tools.dms_calculator",
          "title": "DMS Calculator",
          "description": "Degrees Minutes Seconds",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "ANGLE",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "geographic-and-mapping-tools::lat-long-to-utm",
          "slug": "lat-long-to-utm",
          "route_name": "conversion.geographic-and-mapping-tools.lat-long-to-utm",
          "view": "conversion.geographic-and-mapping-tools.lat_long_to_utm",
          "title": "Lat/Long to UTM",
          "description": "Coordinate projection",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"></path>\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "UTM",
            "class": "text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "geographic-and-mapping-tools::scale-calculator",
          "slug": "scale-calculator",
          "route_name": "conversion.geographic-and-mapping-tools.scale-calculator",
          "view": "conversion.geographic-and-mapping-tools.scale_calculator",
          "title": "Scale Calculator",
          "description": "Calculate map scales and ratios",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-cyan-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z\"></path>\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 5v14l11-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "SCALE",
            "class": "text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "number-conversion-tools",
      "title": "Number Conversion Tools",
      "description": "Professional tools for number conversion tasks",
      "tools": [
        {
          "key": "number-conversion-tools::billion-to-trillion-converter",
          "slug": "billion-to-trillion-converter",
          "route_name": "conversion.number-conversion-tools.billion-to-trillion-converter",
          "view": "conversion.number-conversion-tools.billion_to_trillion_converter",
          "title": "Billion to Trillion",
          "description": "Convert billions to trillions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1\"></path>\n                                </svg>",
          "badge": {
            "label": "NUMBERS",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-conversion-tools::crore-to-lakh-converter",
          "slug": "crore-to-lakh-converter",
          "route_name": "conversion.number-conversion-tools.crore-to-lakh-converter",
          "view": "conversion.number-conversion-tools.crore_to_lakh_converter",
          "title": "Crore to Lakh",
          "description": "Convert crores to lakhs",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "INDIAN",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-conversion-tools::crore-to-million-converter",
          "slug": "crore-to-million-converter",
          "route_name": "conversion.number-conversion-tools.crore-to-million-converter",
          "view": "conversion.number-conversion-tools.crore_to_million_converter",
          "title": "Crore to Million",
          "description": "Convert between Indian and Western systems",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z\"></path>\n                                </svg>",
          "badge": {
            "label": "GLOBAL",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-conversion-tools::million-to-billion-converter",
          "slug": "million-to-billion-converter",
          "route_name": "conversion.number-conversion-tools.million-to-billion-converter",
          "view": "conversion.number-conversion-tools.million_to_billion_converter",
          "title": "Million to Billion",
          "description": "Convert millions to billions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 7h8m0 0v8m0-8l-8 8-4-4-6 6\"></path>\n                                </svg>",
          "badge": {
            "label": "WESTERN",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-conversion-tools::million-to-lakh-converter",
          "slug": "million-to-lakh-converter",
          "route_name": "conversion.number-conversion-tools.million-to-lakh-converter",
          "view": "conversion.number-conversion-tools.million_to_lakh_converter",
          "title": "Million to Lakh",
          "description": "Convert between Western and Indian systems",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-rose-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4M4 16l4-4\"></path>\n                                </svg>",
          "badge": {
            "label": "CROSS",
            "class": "text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-conversion-tools::million-to-thousand-converter",
          "slug": "million-to-thousand-converter",
          "route_name": "conversion.number-conversion-tools.million-to-thousand-converter",
          "view": "conversion.number-conversion-tools.million_to_thousand_converter",
          "title": "Million to Thousand",
          "description": "Convert millions to thousands",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-teal-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-7 7m0 0l-7-7m0 0l7-7 7 7z\"></path>\n                                </svg>",
          "badge": {
            "label": "SCALE",
            "class": "text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-conversion-tools::number-to-billion-converter",
          "slug": "number-to-billion-converter",
          "route_name": "conversion.number-conversion-tools.number-to-billion-converter",
          "view": "conversion.number-conversion-tools.number_to_billion_converter",
          "title": "Number to Billion",
          "description": "Convert any number to billions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-amber-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11\"></path>\n                                </svg>",
          "badge": {
            "label": "SCALE",
            "class": "text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-conversion-tools::number-to-million-converter",
          "slug": "number-to-million-converter",
          "route_name": "conversion.number-conversion-tools.number-to-million-converter",
          "view": "conversion.number-conversion-tools.number_to_million_converter",
          "title": "Number to Million",
          "description": "Convert any number to millions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-amber-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "SCALE",
            "class": "text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "number-system-conversion-tools",
      "title": "Number System Conversion Tools",
      "description": "Professional tools for number system conversion tasks",
      "tools": [
        {
          "key": "number-system-conversion-tools::binary-converter",
          "slug": "binary-converter",
          "route_name": "conversion.number-system-conversion-tools.binary-converter",
          "view": "conversion.number-system-conversion-tools.binary_converter",
          "title": "Binary Converter",
          "description": "Convert binary to decimal and other systems",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z\"></path>\n                                </svg>",
          "badge": {
            "label": "BINARY",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-system-conversion-tools::binary-to-hexadecimal-converter",
          "slug": "binary-to-hexadecimal-converter",
          "route_name": "conversion.number-system-conversion-tools.binary-to-hexadecimal-converter",
          "view": "conversion.number-system-conversion-tools.binary_to_hexadecimal_converter",
          "title": "Binary to Hexadecimal",
          "description": "Convert binary to hexadecimal",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "BIN→HEX",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-system-conversion-tools::binary-to-octal-converter",
          "slug": "binary-to-octal-converter",
          "route_name": "conversion.number-system-conversion-tools.binary-to-octal-converter",
          "view": "conversion.number-system-conversion-tools.binary_to_octal_converter",
          "title": "Binary to Octal",
          "description": "Convert binary to octal",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4\"></path>\n                                </svg>",
          "badge": {
            "label": "BIN→OCT",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-system-conversion-tools::decimal-to-hexadecimal-converter",
          "slug": "decimal-to-hexadecimal-converter",
          "route_name": "conversion.number-system-conversion-tools.decimal-to-hexadecimal-converter",
          "view": "conversion.number-system-conversion-tools.decimal_to_hexadecimal_converter",
          "title": "Decimal to Hexadecimal",
          "description": "Convert decimal to hexadecimal",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z\"></path>\n                                </svg>",
          "badge": {
            "label": "DEC→HEX",
            "class": "text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-system-conversion-tools::decimal-to-octal-converter",
          "slug": "decimal-to-octal-converter",
          "route_name": "conversion.number-system-conversion-tools.decimal-to-octal-converter",
          "view": "conversion.number-system-conversion-tools.decimal_to_octal_converter",
          "title": "Decimal to Octal",
          "description": "Convert decimal to octal",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-orange-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\"></path>\n                                </svg>",
          "badge": {
            "label": "DEC→OCT",
            "class": "text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "number-system-conversion-tools::roman-numerals-converter",
          "slug": "roman-numerals-converter",
          "route_name": "conversion.number-system-conversion-tools.roman-numerals-converter",
          "view": "conversion.number-system-conversion-tools.roman_numerals_converter",
          "title": "Roman Numerals",
          "description": "Convert Roman numerals to decimal",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "ROMAN",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "data-and-technical-conversion-tools",
      "title": "Data & Technical Conversion Tools",
      "description": "Professional tools for data and technical conversion tasks",
      "tools": [
        {
          "key": "data-and-technical-conversion-tools::byte-conversion-calculator",
          "slug": "byte-conversion-calculator",
          "route_name": "conversion.data-and-technical-conversion-tools.byte-conversion-calculator",
          "view": "conversion.data-and-technical-conversion-tools.byte_conversion_calculator",
          "title": "Byte Conversion Calculator",
          "description": "Convert between all byte units (B, KB, MB, GB, TB)",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-teal-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z\"></path>\n                                </svg>",
          "badge": {
            "label": "BYTES",
            "class": "text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "data-and-technical-conversion-tools::capacitance-converter",
          "slug": "capacitance-converter",
          "route_name": "conversion.data-and-technical-conversion-tools.capacitance-converter",
          "view": "conversion.data-and-technical-conversion-tools.capacitance_converter",
          "title": "Capacitance Converter",
          "description": "Convert capacitance units (F, mF, μF, nF, pF)",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "ELECTRICAL",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "data-and-technical-conversion-tools::kb-to-mb-converter",
          "slug": "kb-to-mb-converter",
          "route_name": "conversion.data-and-technical-conversion-tools.kb-to-mb-converter",
          "view": "conversion.data-and-technical-conversion-tools.kb_to_mb_converter",
          "title": "kB to MB Converter",
          "description": "Convert kilobytes to megabytes",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-cyan-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "KB→MB",
            "class": "text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "data-and-technical-conversion-tools::mbps-calculator",
          "slug": "mbps-calculator",
          "route_name": "conversion.data-and-technical-conversion-tools.mbps-calculator",
          "view": "conversion.data-and-technical-conversion-tools.mbps_calculator",
          "title": "Mbps Calculator",
          "description": "Calculate network speeds and data transfer rates",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 7h8m0 0v8m0-8l-8 8-4-4-6 6\"></path>\n                                </svg>",
          "badge": {
            "label": "SPEED",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "data-and-technical-conversion-tools::mbps-to-gbps-converter",
          "slug": "mbps-to-gbps-converter",
          "route_name": "conversion.data-and-technical-conversion-tools.mbps-to-gbps-converter",
          "view": "conversion.data-and-technical-conversion-tools.mbps_to_gbps_converter",
          "title": "Mbps to Gbps Converter",
          "description": "Convert megabits to gigabits per second",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10\"></path>\n                                </svg>",
          "badge": {
            "label": "MBPS→GBPS",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "data-and-technical-conversion-tools::mb-to-gb-converter",
          "slug": "mb-to-gb-converter",
          "route_name": "conversion.data-and-technical-conversion-tools.mb-to-gb-converter",
          "view": "conversion.data-and-technical-conversion-tools.mb_to_gb_converter",
          "title": "MB to GB Converter",
          "description": "Convert megabytes to gigabytes",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4\"></path>\n                                </svg>",
          "badge": {
            "label": "MB→GB",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "data-and-technical-conversion-tools::unix-time-converter",
          "slug": "unix-time-converter",
          "route_name": "conversion.data-and-technical-conversion-tools.unix-time-converter",
          "view": "conversion.data-and-technical-conversion-tools.unix_time_converter",
          "title": "Unix Time Converter",
          "description": "Convert Unix timestamps to human-readable dates",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-orange-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "UNIX",
            "class": "text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "time-and-date-conversion-tools",
      "title": "Time & Date Conversion Tools",
      "description": "Professional tools for time and date conversion tasks",
      "tools": [
        {
          "key": "time-and-date-conversion-tools::military-time-converter",
          "slug": "military-time-converter",
          "route_name": "conversion.time-and-date-conversion-tools.military-time-converter",
          "view": "conversion.time-and-date-conversion-tools.military_time_converter",
          "title": "Military Time Converter",
          "description": "Convert between 12-hour and 24-hour time formats",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-emerald-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-emerald-50 rounded-lg group-hover:bg-emerald-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-emerald-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "MILITARY",
            "class": "text-xs font-medium text-white bg-emerald-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "time-and-date-conversion-tools::minutes-to-hours-converter",
          "slug": "minutes-to-hours-converter",
          "route_name": "conversion.time-and-date-conversion-tools.minutes-to-hours-converter",
          "view": "conversion.time-and-date-conversion-tools.minutes_to_hours_converter",
          "title": "Minutes to Hours Converter",
          "description": "Convert minutes to hours and vice versa",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "MIN→HR",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "time-and-date-conversion-tools::time-unit-converter",
          "slug": "time-unit-converter",
          "route_name": "conversion.time-and-date-conversion-tools.time-unit-converter",
          "view": "conversion.time-and-date-conversion-tools.time_unit_converter",
          "title": "Time Unit Converter",
          "description": "Convert between all time units (seconds, minutes, hours, days)",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-violet-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-violet-50 rounded-lg group-hover:bg-violet-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-violet-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "UNITS",
            "class": "text-xs font-medium text-white bg-violet-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "time-and-date-conversion-tools::time-zones-converter",
          "slug": "time-zones-converter",
          "route_name": "conversion.time-and-date-conversion-tools.time-zones-converter",
          "view": "conversion.time-and-date-conversion-tools.time_zones_converter",
          "title": "Time Zones Converter",
          "description": "Convert time between different time zones worldwide",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-amber-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-amber-50 rounded-lg group-hover:bg-amber-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-amber-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "ZONES",
            "class": "text-xs font-medium text-white bg-amber-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "time-and-date-conversion-tools::years-to-decades-calculator",
          "slug": "years-to-decades-calculator",
          "route_name": "conversion.time-and-date-conversion-tools.years-to-decades-calculator",
          "view": "conversion.time-and-date-conversion-tools.years_to_decades_calculator",
          "title": "Years to Decades Calculator",
          "description": "Convert years to decades, centuries, and millennia",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-rose-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "YEARS",
            "class": "text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "specialized-measurement-conversion-tools",
      "title": "Specialized Measurement Conversion Tools",
      "description": "Professional tools for specialized measurement conversion tasks",
      "tools": [
        {
          "key": "specialized-measurement-conversion-tools::angle-conversion-calculator",
          "slug": "angle-conversion-calculator",
          "route_name": "conversion.specialized-measurement-conversion-tools.angle-conversion-calculator",
          "view": "conversion.specialized-measurement-conversion-tools.angle_conversion_calculator",
          "title": "Angle Conversion Calculator",
          "description": "Degrees, radians, gradians conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>\n                                </svg>",
          "badge": {
            "label": "ANGLE",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "specialized-measurement-conversion-tools::density-conversion",
          "slug": "density-conversion",
          "route_name": "conversion.specialized-measurement-conversion-tools.density-conversion",
          "view": "conversion.specialized-measurement-conversion-tools.density_conversion",
          "title": "Density Conversion",
          "description": "Mass per unit volume calculations",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4\"></path>\n                                </svg>",
          "badge": {
            "label": "DENSITY",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "specialized-measurement-conversion-tools::hardness-conversion-calculator",
          "slug": "hardness-conversion-calculator",
          "route_name": "conversion.specialized-measurement-conversion-tools.hardness-conversion-calculator",
          "view": "conversion.specialized-measurement-conversion-tools.hardness_conversion_calculator",
          "title": "Hardness Conversion Calculator",
          "description": "Rockwell, Brinell, Vickers scales",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\"></path>\n                                </svg>",
          "badge": {
            "label": "MATERIAL",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "specialized-measurement-conversion-tools::radiation-converter",
          "slug": "radiation-converter",
          "route_name": "conversion.specialized-measurement-conversion-tools.radiation-converter",
          "view": "conversion.specialized-measurement-conversion-tools.radiation_converter",
          "title": "Radiation Converter",
          "description": "Radiation dose and exposure units",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "NUCLEAR",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "specialized-measurement-conversion-tools::natural-gas-converter",
          "slug": "natural-gas-converter",
          "route_name": "conversion.specialized-measurement-conversion-tools.natural-gas-converter",
          "view": "conversion.specialized-measurement-conversion-tools.natural_gas_converter",
          "title": "Natural Gas Converter",
          "description": "Gas volume and energy conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z\"></path>\n                                </svg>",
          "badge": {
            "label": "GAS",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "specialized-measurement-conversion-tools::dimensional-analysis-calculator",
          "slug": "dimensional-analysis-calculator",
          "route_name": "conversion.specialized-measurement-conversion-tools.dimensional-analysis-calculator",
          "view": "conversion.specialized-measurement-conversion-tools.dimensional_analysis_calculator",
          "title": "Dimensional Analysis Calculator",
          "description": "Unit analysis and conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-teal-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "ANALYSIS",
            "class": "text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "specialized-measurement-conversion-tools::cgs-system-of-units-converter",
          "slug": "cgs-system-of-units-converter",
          "route_name": "conversion.specialized-measurement-conversion-tools.cgs-system-of-units-converter",
          "view": "conversion.specialized-measurement-conversion-tools.cgs_system_of_units_converter",
          "title": "CGS System of Units Converter",
          "description": "Centimeter-gram-second conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-rose-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-rose-50 rounded-lg group-hover:bg-rose-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-rose-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\"></path>\n                                </svg>",
          "badge": {
            "label": "CGS",
            "class": "text-xs font-medium text-white bg-rose-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "specialized-measurement-conversion-tools::weird-units-converter",
          "slug": "weird-units-converter",
          "route_name": "conversion.specialized-measurement-conversion-tools.weird-units-converter",
          "view": "conversion.specialized-measurement-conversion-tools.weird_units_converter",
          "title": "Weird Units Converter",
          "description": "Unusual and fun unit conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-orange-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"></path>\n                                </svg>",
          "badge": {
            "label": "WEIRD",
            "class": "text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "speed-and-motion-conversion-tools",
      "title": "Speed & Motion Conversion Tools",
      "description": "Professional tools for speed and motion conversion tasks",
      "tools": [
        {
          "key": "speed-and-motion-conversion-tools::m-s-to-km-h-converter",
          "slug": "m-s-to-km-h-converter",
          "route_name": "conversion.speed-and-motion-conversion-tools.m-s-to-km-h-converter",
          "view": "conversion.speed-and-motion-conversion-tools.ms_to_kmh_converter",
          "title": "m/s to km/h Converter",
          "description": "Meters per second to kilometers per hour",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "SPEED",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "speed-and-motion-conversion-tools::knots-to-kph-converter",
          "slug": "knots-to-kph-converter",
          "route_name": "conversion.speed-and-motion-conversion-tools.knots-to-kph-converter",
          "view": "conversion.speed-and-motion-conversion-tools.knots_to_kph_converter",
          "title": "Knots to kph Converter",
          "description": "Nautical speed to metric conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "NAUTICAL",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "speed-and-motion-conversion-tools::knots-to-mph-converter",
          "slug": "knots-to-mph-converter",
          "route_name": "conversion.speed-and-motion-conversion-tools.knots-to-mph-converter",
          "view": "conversion.speed-and-motion-conversion-tools.knots_to_mph_converter",
          "title": "Knots to mph Converter",
          "description": "Nautical to imperial speed conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "NAUTICAL",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "speed-and-motion-conversion-tools::mpg-to-l-100km-converter",
          "slug": "mpg-to-l-100km-converter",
          "route_name": "conversion.speed-and-motion-conversion-tools.mpg-to-l-100km-converter",
          "view": "conversion.speed-and-motion-conversion-tools.mpg_to_l100km_converter",
          "title": "MPG to L/100 km Converter",
          "description": "Fuel economy conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>\n                                </svg>",
          "badge": {
            "label": "FUEL",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "speed-and-motion-conversion-tools::speed-conversion",
          "slug": "speed-conversion",
          "route_name": "conversion.speed-and-motion-conversion-tools.speed-conversion",
          "view": "conversion.speed-and-motion-conversion-tools.speed_conversion",
          "title": "Speed Conversion",
          "description": "Universal speed unit converter",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "SPEED",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "energy-and-power-conversion-tools",
      "title": "Energy & Power Conversion Tools",
      "description": "Professional tools for energy and power conversion tasks",
      "tools": [
        {
          "key": "energy-and-power-conversion-tools::energy-conversion-calculator",
          "slug": "energy-conversion-calculator",
          "route_name": "conversion.energy-and-power-conversion-tools.energy-conversion-calculator",
          "view": "conversion.energy-and-power-conversion-tools.energy_conversion_calculator",
          "title": "Energy Conversion Calculator",
          "description": "Joules, calories, BTU, kWh conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "ENERGY",
            "class": "text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "energy-and-power-conversion-tools::power-converter",
          "slug": "power-converter",
          "route_name": "conversion.energy-and-power-conversion-tools.power-converter",
          "view": "conversion.energy-and-power-conversion-tools.power_converter",
          "title": "Power Converter",
          "description": "Watts, horsepower, BTU/h conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-orange-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "POWER",
            "class": "text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "energy-and-power-conversion-tools::joules-to-volts-calculator",
          "slug": "joules-to-volts-calculator",
          "route_name": "conversion.energy-and-power-conversion-tools.joules-to-volts-calculator",
          "view": "conversion.energy-and-power-conversion-tools.joules_to_volts_calculator",
          "title": "Joules to Volts Calculator",
          "description": "Energy to electrical potential conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>\n                                </svg>",
          "badge": {
            "label": "ELECTRIC",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "energy-and-power-conversion-tools::nm-to-joules-calculator",
          "slug": "nm-to-joules-calculator",
          "route_name": "conversion.energy-and-power-conversion-tools.nm-to-joules-calculator",
          "view": "conversion.energy-and-power-conversion-tools.nm_to_joules_calculator",
          "title": "Nm to Joules Calculator",
          "description": "Torque to energy conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357 2m15.357-2H15\"></path>\n                                </svg>",
          "badge": {
            "label": "TORQUE",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "energy-and-power-conversion-tools::dbm-to-watts-calculator",
          "slug": "dbm-to-watts-calculator",
          "route_name": "conversion.energy-and-power-conversion-tools.dbm-to-watts-calculator",
          "view": "conversion.energy-and-power-conversion-tools.dbm_to_watts_calculator",
          "title": "dBm to Watts Calculator",
          "description": "RF power conversion calculator",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0\"></path>\n                                </svg>",
          "badge": {
            "label": "RF",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "energy-and-power-conversion-tools::rms-to-watts-converter",
          "slug": "rms-to-watts-converter",
          "route_name": "conversion.energy-and-power-conversion-tools.rms-to-watts-converter",
          "view": "conversion.energy-and-power-conversion-tools.rms_to_watts_converter",
          "title": "RMS to Watts Converter",
          "description": "RMS power calculations",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>\n                                </svg>",
          "badge": {
            "label": "RMS",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "currency-and-financial-conversion-tools",
      "title": "Currency & Financial Conversion Tools",
      "description": "Professional tools for currency and financial conversion tasks",
      "tools": [
        {
          "key": "currency-and-financial-conversion-tools::cents-to-dollars-calculator",
          "slug": "cents-to-dollars-calculator",
          "route_name": "conversion.currency-and-financial-conversion-tools.cents-to-dollars-calculator",
          "view": "conversion.currency-and-financial-conversion-tools.cents_to_dollars_calculator",
          "title": "Cents to Dollars Calculator",
          "description": "Convert cents to dollar amounts",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1\"></path>\n                                </svg>",
          "badge": {
            "label": "MONEY",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "currency-and-financial-conversion-tools::dimes-to-dollars-calculator",
          "slug": "dimes-to-dollars-calculator",
          "route_name": "conversion.currency-and-financial-conversion-tools.dimes-to-dollars-calculator",
          "view": "conversion.currency-and-financial-conversion-tools.dimes_to_dollars_calculator",
          "title": "Dimes to Dollars Calculator",
          "description": "Convert dimes to dollar amounts",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1\"></path>\n                                </svg>",
          "badge": {
            "label": "COIN",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "currency-and-financial-conversion-tools::nickels-to-dollars-calculator",
          "slug": "nickels-to-dollars-calculator",
          "route_name": "conversion.currency-and-financial-conversion-tools.nickels-to-dollars-calculator",
          "view": "conversion.currency-and-financial-conversion-tools.nickels_to_dollars_calculator",
          "title": "Nickels to Dollars Calculator",
          "description": "Convert nickels to dollar amounts",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1\"></path>\n                                </svg>",
          "badge": {
            "label": "COIN",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "currency-and-financial-conversion-tools::pennies-to-dollars-calculator",
          "slug": "pennies-to-dollars-calculator",
          "route_name": "conversion.currency-and-financial-conversion-tools.pennies-to-dollars-calculator",
          "view": "conversion.currency-and-financial-conversion-tools.pennies_to_dollars_calculator",
          "title": "Pennies to Dollars Calculator",
          "description": "Convert pennies to dollar amounts",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1\"></path>\n                                </svg>",
          "badge": {
            "label": "COIN",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "digital-and-technical-conversion-tools",
      "title": "Digital & Technical Conversion Tools",
      "description": "Professional tools for digital and technical conversion tasks",
      "tools": [
        {
          "key": "digital-and-technical-conversion-tools::px-to-em-converter",
          "slug": "px-to-em-converter",
          "route_name": "conversion.digital-and-technical-conversion-tools.px-to-em-converter",
          "view": "conversion.digital-and-technical-conversion-tools.px_to_em_converter",
          "title": "Px to Em Converter",
          "description": "CSS pixel to em unit conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-indigo-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-indigo-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "WEB",
            "class": "text-xs font-medium text-white bg-indigo-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "digital-and-technical-conversion-tools::ppm-calculator",
          "slug": "ppm-calculator",
          "route_name": "conversion.digital-and-technical-conversion-tools.ppm-calculator",
          "view": "conversion.digital-and-technical-conversion-tools.ppm_calculator",
          "title": "PPM Calculator",
          "description": "Parts per million calculations",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-teal-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-teal-50 rounded-lg group-hover:bg-teal-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-teal-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "PPM",
            "class": "text-xs font-medium text-white bg-teal-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "digital-and-technical-conversion-tools::ppm-to-mg-l-converter",
          "slug": "ppm-to-mg-l-converter",
          "route_name": "conversion.digital-and-technical-conversion-tools.ppm-to-mg-l-converter",
          "view": "conversion.digital-and-technical-conversion-tools.ppm_to_mg_l_converter",
          "title": "PPM to mg/L Converter",
          "description": "Water quality concentration units",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-cyan-50 rounded-lg group-hover:bg-cyan-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-cyan-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14-7H5m14 14H5\"></path>\n                                </svg>",
          "badge": {
            "label": "WATER",
            "class": "text-xs font-medium text-white bg-cyan-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "digital-and-technical-conversion-tools::cps-calculator",
          "slug": "cps-calculator",
          "route_name": "conversion.digital-and-technical-conversion-tools.cps-calculator",
          "view": "conversion.digital-and-technical-conversion-tools.cps_calculator",
          "title": "CPS Calculator",
          "description": "Cycles per second calculations",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-pink-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-pink-50 rounded-lg group-hover:bg-pink-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-pink-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path>\n                                </svg>",
          "badge": {
            "label": "RATE",
            "class": "text-xs font-medium text-white bg-pink-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "digital-and-technical-conversion-tools::paper-quantity-converter",
          "slug": "paper-quantity-converter",
          "route_name": "conversion.digital-and-technical-conversion-tools.paper-quantity-converter",
          "view": "conversion.digital-and-technical-conversion-tools.paper_quantity_converter",
          "title": "Paper Quantity Converter",
          "description": "Ream, sheet, and paper conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-orange-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-orange-50 rounded-lg group-hover:bg-orange-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-orange-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "PAPER",
            "class": "text-xs font-medium text-white bg-orange-500 px-2 py-1 rounded-full"
          }
        }
      ]
    },
    {
      "slug": "utility-and-general-conversion-tools",
      "title": "Utility & General Conversion Tools",
      "description": "Professional tools for utility and general conversion tasks",
      "tools": [
        {
          "key": "utility-and-general-conversion-tools::ccf-to-therms-calculator",
          "slug": "ccf-to-therms-calculator",
          "route_name": "conversion.utility-and-general-conversion-tools.ccf-to-therms-calculator",
          "view": "conversion.utility-and-general-conversion-tools.ccf_to_therms_calculator",
          "title": "CCF to Therms Calculator",
          "description": "Gas volume to energy conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z\"></path>\n                                </svg>",
          "badge": {
            "label": "GAS",
            "class": "text-xs font-medium text-white bg-blue-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "utility-and-general-conversion-tools::conversion-calculator",
          "slug": "conversion-calculator",
          "route_name": "conversion.utility-and-general-conversion-tools.conversion-calculator",
          "view": "conversion.utility-and-general-conversion-tools.conversion_calculator",
          "title": "Conversion Calculator",
          "description": "General purpose conversion tool",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-purple-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-purple-50 rounded-lg group-hover:bg-purple-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "GENERAL",
            "class": "text-xs font-medium text-white bg-purple-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "utility-and-general-conversion-tools::grams-to-calories-calculator",
          "slug": "grams-to-calories-calculator",
          "route_name": "conversion.utility-and-general-conversion-tools.grams-to-calories-calculator",
          "view": "conversion.utility-and-general-conversion-tools.grams_to_calories_calculator",
          "title": "Grams To Calories Calculator",
          "description": "Food weight to energy conversion",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-green-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-green-50 rounded-lg group-hover:bg-green-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3\"></path>\n                                </svg>",
          "badge": {
            "label": "FOOD",
            "class": "text-xs font-medium text-white bg-green-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "utility-and-general-conversion-tools::quantity-converter",
          "slug": "quantity-converter",
          "route_name": "conversion.utility-and-general-conversion-tools.quantity-converter",
          "view": "conversion.utility-and-general-conversion-tools.quantity_converter",
          "title": "Quantity Converter",
          "description": "Count and quantity conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-yellow-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-yellow-50 rounded-lg group-hover:bg-yellow-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z\"></path>\n                                </svg>",
          "badge": {
            "label": "COUNT",
            "class": "text-xs font-medium text-white bg-yellow-500 px-2 py-1 rounded-full"
          }
        },
        {
          "key": "utility-and-general-conversion-tools::temperature-conversion",
          "slug": "temperature-conversion",
          "route_name": "conversion.utility-and-general-conversion-tools.temperature-conversion",
          "view": "conversion.utility-and-general-conversion-tools.temperature_conversion",
          "title": "Temperature Conversion",
          "description": "Celsius, Fahrenheit, Kelvin conversions",
          "card_class": "group bg-white border border-gray-200 rounded-xl p-6 hover:border-red-300 hover:shadow-lg transition-all duration-200",
          "icon_wrapper_class": "p-2 bg-red-50 rounded-lg group-hover:bg-red-100 transition-colors",
          "icon_svg": "<svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">\n                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>\n                                </svg>",
          "badge": {
            "label": "TEMP",
            "class": "text-xs font-medium text-white bg-red-500 px-2 py-1 rounded-full"
          }
        }
      ]
    }
  ],
  "calculators": {
    "length-and-area-conversions::length": {
      "route_name": "conversion.length-and-area-conversions.length",
      "view": "conversion.length-and-area-conversions.length",
      "category_slug": "length-and-area-conversions",
      "slug": "length",
      "title": "Length Converter"
    },
    "length-and-area-conversions::area": {
      "route_name": "conversion.length-and-area-conversions.area",
      "view": "conversion.length-and-area-conversions.area",
      "category_slug": "length-and-area-conversions",
      "slug": "area",
      "title": "Area Converter"
    },
    "length-and-area-conversions::acreage": {
      "route_name": "conversion.length-and-area-conversions.acreage",
      "view": "conversion.length-and-area-conversions.acreage",
      "category_slug": "length-and-area-conversions",
      "slug": "acreage",
      "title": "Acreage Calculator"
    },
    "length-and-area-conversions::ares-to-hectares": {
      "route_name": "conversion.length-and-area-conversions.ares-to-hectares",
      "view": "conversion.length-and-area-conversions.ares_to_hectares",
      "category_slug": "length-and-area-conversions",
      "slug": "ares-to-hectares",
      "title": "Ares to Hectares"
    },
    "length-and-area-conversions::astronomical-unit": {
      "route_name": "conversion.length-and-area-conversions.astronomical-unit",
      "view": "conversion.length-and-area-conversions.astronomical_unit",
      "category_slug": "length-and-area-conversions",
      "slug": "astronomical-unit",
      "title": "Astronomical Units"
    },
    "length-and-area-conversions::decimeter-to-meter": {
      "route_name": "conversion.length-and-area-conversions.decimeter-to-meter",
      "view": "conversion.length-and-area-conversions.decimeter_to_meter",
      "category_slug": "length-and-area-conversions",
      "slug": "decimeter-to-meter",
      "title": "Decimeter to Meter"
    },
    "length-and-area-conversions::feet-inches": {
      "route_name": "conversion.length-and-area-conversions.feet-inches",
      "view": "conversion.length-and-area-conversions.feet_inches",
      "category_slug": "length-and-area-conversions",
      "slug": "feet-inches",
      "title": "Feet & Inches"
    },
    "length-and-area-conversions::height-in-inches": {
      "route_name": "conversion.length-and-area-conversions.height-in-inches",
      "view": "conversion.length-and-area-conversions.height_in_inches",
      "category_slug": "length-and-area-conversions",
      "slug": "height-in-inches",
      "title": "Height in Inches"
    },
    "length-and-area-conversions::inches-to-fraction": {
      "route_name": "conversion.length-and-area-conversions.inches-to-fraction",
      "view": "conversion.length-and-area-conversions.inches_to_fraction",
      "category_slug": "length-and-area-conversions",
      "slug": "inches-to-fraction",
      "title": "Inches to Fraction"
    },
    "length-and-area-conversions::lightyear-conversion": {
      "route_name": "conversion.length-and-area-conversions.lightyear-conversion",
      "view": "conversion.length-and-area-conversions.light_year",
      "category_slug": "length-and-area-conversions",
      "slug": "lightyear-conversion",
      "title": "Light Year Converter"
    },
    "length-and-area-conversions::mesh-to-micron": {
      "route_name": "conversion.length-and-area-conversions.mesh-to-micron",
      "view": "conversion.length-and-area-conversions.mesh_to_micron",
      "category_slug": "length-and-area-conversions",
      "slug": "mesh-to-micron",
      "title": "Mesh to Micron"
    },
    "length-and-area-conversions::pixels-to-inches": {
      "route_name": "conversion.length-and-area-conversions.pixels-to-inches",
      "view": "conversion.length-and-area-conversions.pixels_to_inches",
      "category_slug": "length-and-area-conversions",
      "slug": "pixels-to-inches",
      "title": "Pixels to Inches"
    },
    "volume-and-weight-conversions::weight-converter": {
      "route_name": "conversion.volume-and-weight-conversions.weight-converter",
      "view": "conversion.volume-and-weight-conversions.weight_converter",
      "category_slug": "volume-and-weight-conversions",
      "slug": "weight-converter",
      "title": "Weight Converter"
    },
    "volume-and-weight-conversions::volume": {
      "route_name": "conversion.volume-and-weight-conversions.volume",
      "view": "conversion.volume-and-weight-conversions.volume_converter",
      "category_slug": "volume-and-weight-conversions",
      "slug": "volume",
      "title": "Volume Converter"
    },
    "volume-and-weight-conversions::ccf-to-gallons": {
      "route_name": "conversion.volume-and-weight-conversions.ccf-to-gallons",
      "view": "conversion.volume-and-weight-conversions.ccf_to_gallons",
      "category_slug": "volume-and-weight-conversions",
      "slug": "ccf-to-gallons",
      "title": "CCF to Gallons"
    },
    "volume-and-weight-conversions::cubic-feet-calculator": {
      "route_name": "conversion.volume-and-weight-conversions.cubic-feet-calculator",
      "view": "conversion.volume-and-weight-conversions.cubic_feet",
      "category_slug": "volume-and-weight-conversions",
      "slug": "cubic-feet-calculator",
      "title": "Cubic Feet Calculator"
    },
    "volume-and-weight-conversions::cubic-meter-calculator": {
      "route_name": "conversion.volume-and-weight-conversions.cubic-meter-calculator",
      "view": "conversion.volume-and-weight-conversions.cubic_meter",
      "category_slug": "volume-and-weight-conversions",
      "slug": "cubic-meter-calculator",
      "title": "Cubic Meter Calculator"
    },
    "volume-and-weight-conversions::cubic-yards-to-tons": {
      "route_name": "conversion.volume-and-weight-conversions.cubic-yards-to-tons",
      "view": "conversion.volume-and-weight-conversions.cubic_yards_to_tons",
      "category_slug": "volume-and-weight-conversions",
      "slug": "cubic-yards-to-tons",
      "title": "Cubic Yards to Tons"
    },
    "volume-and-weight-conversions::decagram-to-gram": {
      "route_name": "conversion.volume-and-weight-conversions.decagram-to-gram",
      "view": "conversion.volume-and-weight-conversions.decagram_to_gram",
      "category_slug": "volume-and-weight-conversions",
      "slug": "decagram-to-gram",
      "title": "Decagram to Gram"
    },
    "volume-and-weight-conversions::drops-to-ml": {
      "route_name": "conversion.volume-and-weight-conversions.drops-to-ml",
      "view": "conversion.volume-and-weight-conversions.drops_to_ml",
      "category_slug": "volume-and-weight-conversions",
      "slug": "drops-to-ml",
      "title": "Drops to mL"
    },
    "volume-and-weight-conversions::gallon-calculator": {
      "route_name": "conversion.volume-and-weight-conversions.gallon-calculator",
      "view": "conversion.volume-and-weight-conversions.gallon_calculator",
      "category_slug": "volume-and-weight-conversions",
      "slug": "gallon-calculator",
      "title": "Gallon Calculator"
    },
    "volume-and-weight-conversions::gallons-to-pounds": {
      "route_name": "conversion.volume-and-weight-conversions.gallons-to-pounds",
      "view": "conversion.volume-and-weight-conversions.gallons_to_pounds",
      "category_slug": "volume-and-weight-conversions",
      "slug": "gallons-to-pounds",
      "title": "Gallons to Pounds"
    },
    "volume-and-weight-conversions::grams-to-ounces": {
      "route_name": "conversion.volume-and-weight-conversions.grams-to-ounces",
      "view": "conversion.volume-and-weight-conversions.grams_to_ounces",
      "category_slug": "volume-and-weight-conversions",
      "slug": "grams-to-ounces",
      "title": "Grams to Ounces"
    },
    "volume-and-weight-conversions::kg-to-gallons": {
      "route_name": "conversion.volume-and-weight-conversions.kg-to-gallons",
      "view": "conversion.volume-and-weight-conversions.kg_to_gallons",
      "category_slug": "volume-and-weight-conversions",
      "slug": "kg-to-gallons",
      "title": "Kg to Gallons"
    },
    "volume-and-weight-conversions::liters-to-centiliters": {
      "route_name": "conversion.volume-and-weight-conversions.liters-to-centiliters",
      "view": "conversion.volume-and-weight-conversions.liters_to_centiliters",
      "category_slug": "volume-and-weight-conversions",
      "slug": "liters-to-centiliters",
      "title": "Liters to Centiliters"
    },
    "volume-and-weight-conversions::mcg-to-mg": {
      "route_name": "conversion.volume-and-weight-conversions.mcg-to-mg",
      "view": "conversion.volume-and-weight-conversions.mcg_to_mg",
      "category_slug": "volume-and-weight-conversions",
      "slug": "mcg-to-mg",
      "title": "mcg to mg"
    },
    "volume-and-weight-conversions::mg-to-ml": {
      "route_name": "conversion.volume-and-weight-conversions.mg-to-ml",
      "view": "conversion.volume-and-weight-conversions.mg_to_ml",
      "category_slug": "volume-and-weight-conversions",
      "slug": "mg-to-ml",
      "title": "mg to mL"
    },
    "volume-and-weight-conversions::ml-to-cups": {
      "route_name": "conversion.volume-and-weight-conversions.ml-to-cups",
      "view": "conversion.volume-and-weight-conversions.ml_to_cups",
      "category_slug": "volume-and-weight-conversions",
      "slug": "ml-to-cups",
      "title": "mL to Cups"
    },
    "volume-and-weight-conversions::oz-to-cups": {
      "route_name": "conversion.volume-and-weight-conversions.oz-to-cups",
      "view": "conversion.volume-and-weight-conversions.oz_to_cups",
      "category_slug": "volume-and-weight-conversions",
      "slug": "oz-to-cups",
      "title": "Oz to Cups"
    },
    "volume-and-weight-conversions::pints-to-pounds": {
      "route_name": "conversion.volume-and-weight-conversions.pints-to-pounds",
      "view": "conversion.volume-and-weight-conversions.pints_to_pounds",
      "category_slug": "volume-and-weight-conversions",
      "slug": "pints-to-pounds",
      "title": "Pints to Pounds"
    },
    "volume-and-weight-conversions::pounds-and-ounces": {
      "route_name": "conversion.volume-and-weight-conversions.pounds-and-ounces",
      "view": "conversion.volume-and-weight-conversions.pounds_and_ounces",
      "category_slug": "volume-and-weight-conversions",
      "slug": "pounds-and-ounces",
      "title": "Pounds & Ounces"
    },
    "volume-and-weight-conversions::quarts-to-pounds": {
      "route_name": "conversion.volume-and-weight-conversions.quarts-to-pounds",
      "view": "conversion.volume-and-weight-conversions.quarts_to_pounds",
      "category_slug": "volume-and-weight-conversions",
      "slug": "quarts-to-pounds",
      "title": "Quarts to Pounds"
    },
    "engineering-and-technical-conversions::pressure-converter": {
      "route_name": "conversion.engineering-and-technical-conversions.pressure-converter",
      "view": "conversion.engineering-and-technical-conversions.pressure_converter",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "pressure-converter",
      "title": "Pressure Converter"
    },
    "engineering-and-technical-conversions::torque-to-hp": {
      "route_name": "conversion.engineering-and-technical-conversions.torque-to-hp",
      "view": "conversion.engineering-and-technical-conversions.torque_to_hp",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "torque-to-hp",
      "title": "Torque to HP"
    },
    "engineering-and-technical-conversions::nm-to-inchlbs": {
      "route_name": "conversion.engineering-and-technical-conversions.nm-to-inchlbs",
      "view": "conversion.engineering-and-technical-conversions.nm_to_inlbs",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "nm-to-inchlbs",
      "title": "Nm to in-lbs"
    },
    "engineering-and-technical-conversions::psi-to-gpm": {
      "route_name": "conversion.engineering-and-technical-conversions.psi-to-gpm",
      "view": "conversion.engineering-and-technical-conversions.psi_to_gpm",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "psi-to-gpm",
      "title": "PSI to GPM"
    },
    "engineering-and-technical-conversions::torr-to-atm": {
      "route_name": "conversion.engineering-and-technical-conversions.torr-to-atm",
      "view": "conversion.engineering-and-technical-conversions.torr_to_atm",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "torr-to-atm",
      "title": "Torr to atm"
    },
    "engineering-and-technical-conversions::force-converter": {
      "route_name": "conversion.engineering-and-technical-conversions.force-converter",
      "view": "conversion.engineering-and-technical-conversions.force_converter",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "force-converter",
      "title": "Force Converter"
    },
    "engineering-and-technical-conversions::inchlbs-to-nm": {
      "route_name": "conversion.engineering-and-technical-conversions.inchlbs-to-nm",
      "view": "conversion.engineering-and-technical-conversions.inchlbs_to_nm",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "inchlbs-to-nm",
      "title": "in-lbs ↔ Nm"
    },
    "engineering-and-technical-conversions::inchlbs-to-ftlbs": {
      "route_name": "conversion.engineering-and-technical-conversions.inchlbs-to-ftlbs",
      "view": "conversion.engineering-and-technical-conversions.inchlbs_to_ftlbs",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "inchlbs-to-ftlbs",
      "title": "in-lbs ↔ ft-lbs"
    },
    "engineering-and-technical-conversions::lbs-to-newtons": {
      "route_name": "conversion.engineering-and-technical-conversions.lbs-to-newtons",
      "view": "conversion.engineering-and-technical-conversions.lbs_to_newtons",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "lbs-to-newtons",
      "title": "Lbs ↔ Newtons"
    },
    "engineering-and-technical-conversions::newton-meter-calculator": {
      "route_name": "conversion.engineering-and-technical-conversions.newton-meter-calculator",
      "view": "conversion.engineering-and-technical-conversions.newton_meter_calculator",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "newton-meter-calculator",
      "title": "Torque (Nm)"
    },
    "engineering-and-technical-conversions::nm-to-ftlbs-converter": {
      "route_name": "conversion.engineering-and-technical-conversions.nm-to-ftlbs-converter",
      "view": "conversion.engineering-and-technical-conversions.nm_to_ftlbs_converter",
      "category_slug": "engineering-and-technical-conversions",
      "slug": "nm-to-ftlbs-converter",
      "title": "Torque (ft-lbs)"
    },
    "geographic-and-mapping-tools::coordinates-converter": {
      "route_name": "conversion.geographic-and-mapping-tools.coordinates-converter",
      "view": "conversion.geographic-and-mapping-tools.coordinates_converter",
      "category_slug": "geographic-and-mapping-tools",
      "slug": "coordinates-converter",
      "title": "Coordinates"
    },
    "geographic-and-mapping-tools::dms-calculator": {
      "route_name": "conversion.geographic-and-mapping-tools.dms-calculator",
      "view": "conversion.geographic-and-mapping-tools.dms_calculator",
      "category_slug": "geographic-and-mapping-tools",
      "slug": "dms-calculator",
      "title": "DMS Calculator"
    },
    "geographic-and-mapping-tools::lat-long-to-utm": {
      "route_name": "conversion.geographic-and-mapping-tools.lat-long-to-utm",
      "view": "conversion.geographic-and-mapping-tools.lat_long_to_utm",
      "category_slug": "geographic-and-mapping-tools",
      "slug": "lat-long-to-utm",
      "title": "Lat/Long to UTM"
    },
    "geographic-and-mapping-tools::scale-calculator": {
      "route_name": "conversion.geographic-and-mapping-tools.scale-calculator",
      "view": "conversion.geographic-and-mapping-tools.scale_calculator",
      "category_slug": "geographic-and-mapping-tools",
      "slug": "scale-calculator",
      "title": "Scale Calculator"
    },
    "number-conversion-tools::billion-to-trillion-converter": {
      "route_name": "conversion.number-conversion-tools.billion-to-trillion-converter",
      "view": "conversion.number-conversion-tools.billion_to_trillion_converter",
      "category_slug": "number-conversion-tools",
      "slug": "billion-to-trillion-converter",
      "title": "Billion to Trillion"
    },
    "number-conversion-tools::crore-to-lakh-converter": {
      "route_name": "conversion.number-conversion-tools.crore-to-lakh-converter",
      "view": "conversion.number-conversion-tools.crore_to_lakh_converter",
      "category_slug": "number-conversion-tools",
      "slug": "crore-to-lakh-converter",
      "title": "Crore to Lakh"
    },
    "number-conversion-tools::crore-to-million-converter": {
      "route_name": "conversion.number-conversion-tools.crore-to-million-converter",
      "view": "conversion.number-conversion-tools.crore_to_million_converter",
      "category_slug": "number-conversion-tools",
      "slug": "crore-to-million-converter",
      "title": "Crore to Million"
    },
    "number-conversion-tools::million-to-billion-converter": {
      "route_name": "conversion.number-conversion-tools.million-to-billion-converter",
      "view": "conversion.number-conversion-tools.million_to_billion_converter",
      "category_slug": "number-conversion-tools",
      "slug": "million-to-billion-converter",
      "title": "Million to Billion"
    },
    "number-conversion-tools::million-to-lakh-converter": {
      "route_name": "conversion.number-conversion-tools.million-to-lakh-converter",
      "view": "conversion.number-conversion-tools.million_to_lakh_converter",
      "category_slug": "number-conversion-tools",
      "slug": "million-to-lakh-converter",
      "title": "Million to Lakh"
    },
    "number-conversion-tools::million-to-thousand-converter": {
      "route_name": "conversion.number-conversion-tools.million-to-thousand-converter",
      "view": "conversion.number-conversion-tools.million_to_thousand_converter",
      "category_slug": "number-conversion-tools",
      "slug": "million-to-thousand-converter",
      "title": "Million to Thousand"
    },
    "number-conversion-tools::number-to-billion-converter": {
      "route_name": "conversion.number-conversion-tools.number-to-billion-converter",
      "view": "conversion.number-conversion-tools.number_to_billion_converter",
      "category_slug": "number-conversion-tools",
      "slug": "number-to-billion-converter",
      "title": "Number to Billion"
    },
    "number-conversion-tools::number-to-million-converter": {
      "route_name": "conversion.number-conversion-tools.number-to-million-converter",
      "view": "conversion.number-conversion-tools.number_to_million_converter",
      "category_slug": "number-conversion-tools",
      "slug": "number-to-million-converter",
      "title": "Number to Million"
    },
    "number-system-conversion-tools::binary-converter": {
      "route_name": "conversion.number-system-conversion-tools.binary-converter",
      "view": "conversion.number-system-conversion-tools.binary_converter",
      "category_slug": "number-system-conversion-tools",
      "slug": "binary-converter",
      "title": "Binary Converter"
    },
    "number-system-conversion-tools::binary-to-hexadecimal-converter": {
      "route_name": "conversion.number-system-conversion-tools.binary-to-hexadecimal-converter",
      "view": "conversion.number-system-conversion-tools.binary_to_hexadecimal_converter",
      "category_slug": "number-system-conversion-tools",
      "slug": "binary-to-hexadecimal-converter",
      "title": "Binary to Hexadecimal"
    },
    "number-system-conversion-tools::binary-to-octal-converter": {
      "route_name": "conversion.number-system-conversion-tools.binary-to-octal-converter",
      "view": "conversion.number-system-conversion-tools.binary_to_octal_converter",
      "category_slug": "number-system-conversion-tools",
      "slug": "binary-to-octal-converter",
      "title": "Binary to Octal"
    },
    "number-system-conversion-tools::decimal-to-hexadecimal-converter": {
      "route_name": "conversion.number-system-conversion-tools.decimal-to-hexadecimal-converter",
      "view": "conversion.number-system-conversion-tools.decimal_to_hexadecimal_converter",
      "category_slug": "number-system-conversion-tools",
      "slug": "decimal-to-hexadecimal-converter",
      "title": "Decimal to Hexadecimal"
    },
    "number-system-conversion-tools::decimal-to-octal-converter": {
      "route_name": "conversion.number-system-conversion-tools.decimal-to-octal-converter",
      "view": "conversion.number-system-conversion-tools.decimal_to_octal_converter",
      "category_slug": "number-system-conversion-tools",
      "slug": "decimal-to-octal-converter",
      "title": "Decimal to Octal"
    },
    "number-system-conversion-tools::roman-numerals-converter": {
      "route_name": "conversion.number-system-conversion-tools.roman-numerals-converter",
      "view": "conversion.number-system-conversion-tools.roman_numerals_converter",
      "category_slug": "number-system-conversion-tools",
      "slug": "roman-numerals-converter",
      "title": "Roman Numerals"
    },
    "data-and-technical-conversion-tools::byte-conversion-calculator": {
      "route_name": "conversion.data-and-technical-conversion-tools.byte-conversion-calculator",
      "view": "conversion.data-and-technical-conversion-tools.byte_conversion_calculator",
      "category_slug": "data-and-technical-conversion-tools",
      "slug": "byte-conversion-calculator",
      "title": "Byte Conversion Calculator"
    },
    "data-and-technical-conversion-tools::capacitance-converter": {
      "route_name": "conversion.data-and-technical-conversion-tools.capacitance-converter",
      "view": "conversion.data-and-technical-conversion-tools.capacitance_converter",
      "category_slug": "data-and-technical-conversion-tools",
      "slug": "capacitance-converter",
      "title": "Capacitance Converter"
    },
    "data-and-technical-conversion-tools::kb-to-mb-converter": {
      "route_name": "conversion.data-and-technical-conversion-tools.kb-to-mb-converter",
      "view": "conversion.data-and-technical-conversion-tools.kb_to_mb_converter",
      "category_slug": "data-and-technical-conversion-tools",
      "slug": "kb-to-mb-converter",
      "title": "kB to MB Converter"
    },
    "data-and-technical-conversion-tools::mbps-calculator": {
      "route_name": "conversion.data-and-technical-conversion-tools.mbps-calculator",
      "view": "conversion.data-and-technical-conversion-tools.mbps_calculator",
      "category_slug": "data-and-technical-conversion-tools",
      "slug": "mbps-calculator",
      "title": "Mbps Calculator"
    },
    "data-and-technical-conversion-tools::mbps-to-gbps-converter": {
      "route_name": "conversion.data-and-technical-conversion-tools.mbps-to-gbps-converter",
      "view": "conversion.data-and-technical-conversion-tools.mbps_to_gbps_converter",
      "category_slug": "data-and-technical-conversion-tools",
      "slug": "mbps-to-gbps-converter",
      "title": "Mbps to Gbps Converter"
    },
    "data-and-technical-conversion-tools::mb-to-gb-converter": {
      "route_name": "conversion.data-and-technical-conversion-tools.mb-to-gb-converter",
      "view": "conversion.data-and-technical-conversion-tools.mb_to_gb_converter",
      "category_slug": "data-and-technical-conversion-tools",
      "slug": "mb-to-gb-converter",
      "title": "MB to GB Converter"
    },
    "data-and-technical-conversion-tools::unix-time-converter": {
      "route_name": "conversion.data-and-technical-conversion-tools.unix-time-converter",
      "view": "conversion.data-and-technical-conversion-tools.unix_time_converter",
      "category_slug": "data-and-technical-conversion-tools",
      "slug": "unix-time-converter",
      "title": "Unix Time Converter"
    },
    "time-and-date-conversion-tools::military-time-converter": {
      "route_name": "conversion.time-and-date-conversion-tools.military-time-converter",
      "view": "conversion.time-and-date-conversion-tools.military_time_converter",
      "category_slug": "time-and-date-conversion-tools",
      "slug": "military-time-converter",
      "title": "Military Time Converter"
    },
    "time-and-date-conversion-tools::minutes-to-hours-converter": {
      "route_name": "conversion.time-and-date-conversion-tools.minutes-to-hours-converter",
      "view": "conversion.time-and-date-conversion-tools.minutes_to_hours_converter",
      "category_slug": "time-and-date-conversion-tools",
      "slug": "minutes-to-hours-converter",
      "title": "Minutes to Hours Converter"
    },
    "time-and-date-conversion-tools::time-unit-converter": {
      "route_name": "conversion.time-and-date-conversion-tools.time-unit-converter",
      "view": "conversion.time-and-date-conversion-tools.time_unit_converter",
      "category_slug": "time-and-date-conversion-tools",
      "slug": "time-unit-converter",
      "title": "Time Unit Converter"
    },
    "time-and-date-conversion-tools::time-zones-converter": {
      "route_name": "conversion.time-and-date-conversion-tools.time-zones-converter",
      "view": "conversion.time-and-date-conversion-tools.time_zones_converter",
      "category_slug": "time-and-date-conversion-tools",
      "slug": "time-zones-converter",
      "title": "Time Zones Converter"
    },
    "time-and-date-conversion-tools::years-to-decades-calculator": {
      "route_name": "conversion.time-and-date-conversion-tools.years-to-decades-calculator",
      "view": "conversion.time-and-date-conversion-tools.years_to_decades_calculator",
      "category_slug": "time-and-date-conversion-tools",
      "slug": "years-to-decades-calculator",
      "title": "Years to Decades Calculator"
    },
    "specialized-measurement-conversion-tools::angle-conversion-calculator": {
      "route_name": "conversion.specialized-measurement-conversion-tools.angle-conversion-calculator",
      "view": "conversion.specialized-measurement-conversion-tools.angle_conversion_calculator",
      "category_slug": "specialized-measurement-conversion-tools",
      "slug": "angle-conversion-calculator",
      "title": "Angle Conversion Calculator"
    },
    "specialized-measurement-conversion-tools::density-conversion": {
      "route_name": "conversion.specialized-measurement-conversion-tools.density-conversion",
      "view": "conversion.specialized-measurement-conversion-tools.density_conversion",
      "category_slug": "specialized-measurement-conversion-tools",
      "slug": "density-conversion",
      "title": "Density Conversion"
    },
    "specialized-measurement-conversion-tools::hardness-conversion-calculator": {
      "route_name": "conversion.specialized-measurement-conversion-tools.hardness-conversion-calculator",
      "view": "conversion.specialized-measurement-conversion-tools.hardness_conversion_calculator",
      "category_slug": "specialized-measurement-conversion-tools",
      "slug": "hardness-conversion-calculator",
      "title": "Hardness Conversion Calculator"
    },
    "specialized-measurement-conversion-tools::radiation-converter": {
      "route_name": "conversion.specialized-measurement-conversion-tools.radiation-converter",
      "view": "conversion.specialized-measurement-conversion-tools.radiation_converter",
      "category_slug": "specialized-measurement-conversion-tools",
      "slug": "radiation-converter",
      "title": "Radiation Converter"
    },
    "specialized-measurement-conversion-tools::natural-gas-converter": {
      "route_name": "conversion.specialized-measurement-conversion-tools.natural-gas-converter",
      "view": "conversion.specialized-measurement-conversion-tools.natural_gas_converter",
      "category_slug": "specialized-measurement-conversion-tools",
      "slug": "natural-gas-converter",
      "title": "Natural Gas Converter"
    },
    "specialized-measurement-conversion-tools::dimensional-analysis-calculator": {
      "route_name": "conversion.specialized-measurement-conversion-tools.dimensional-analysis-calculator",
      "view": "conversion.specialized-measurement-conversion-tools.dimensional_analysis_calculator",
      "category_slug": "specialized-measurement-conversion-tools",
      "slug": "dimensional-analysis-calculator",
      "title": "Dimensional Analysis Calculator"
    },
    "specialized-measurement-conversion-tools::cgs-system-of-units-converter": {
      "route_name": "conversion.specialized-measurement-conversion-tools.cgs-system-of-units-converter",
      "view": "conversion.specialized-measurement-conversion-tools.cgs_system_of_units_converter",
      "category_slug": "specialized-measurement-conversion-tools",
      "slug": "cgs-system-of-units-converter",
      "title": "CGS System of Units Converter"
    },
    "specialized-measurement-conversion-tools::weird-units-converter": {
      "route_name": "conversion.specialized-measurement-conversion-tools.weird-units-converter",
      "view": "conversion.specialized-measurement-conversion-tools.weird_units_converter",
      "category_slug": "specialized-measurement-conversion-tools",
      "slug": "weird-units-converter",
      "title": "Weird Units Converter"
    },
    "speed-and-motion-conversion-tools::m-s-to-km-h-converter": {
      "route_name": "conversion.speed-and-motion-conversion-tools.m-s-to-km-h-converter",
      "view": "conversion.speed-and-motion-conversion-tools.ms_to_kmh_converter",
      "category_slug": "speed-and-motion-conversion-tools",
      "slug": "m-s-to-km-h-converter",
      "title": "m/s to km/h Converter"
    },
    "speed-and-motion-conversion-tools::knots-to-kph-converter": {
      "route_name": "conversion.speed-and-motion-conversion-tools.knots-to-kph-converter",
      "view": "conversion.speed-and-motion-conversion-tools.knots_to_kph_converter",
      "category_slug": "speed-and-motion-conversion-tools",
      "slug": "knots-to-kph-converter",
      "title": "Knots to kph Converter"
    },
    "speed-and-motion-conversion-tools::knots-to-mph-converter": {
      "route_name": "conversion.speed-and-motion-conversion-tools.knots-to-mph-converter",
      "view": "conversion.speed-and-motion-conversion-tools.knots_to_mph_converter",
      "category_slug": "speed-and-motion-conversion-tools",
      "slug": "knots-to-mph-converter",
      "title": "Knots to mph Converter"
    },
    "speed-and-motion-conversion-tools::mpg-to-l-100km-converter": {
      "route_name": "conversion.speed-and-motion-conversion-tools.mpg-to-l-100km-converter",
      "view": "conversion.speed-and-motion-conversion-tools.mpg_to_l100km_converter",
      "category_slug": "speed-and-motion-conversion-tools",
      "slug": "mpg-to-l-100km-converter",
      "title": "MPG to L/100 km Converter"
    },
    "speed-and-motion-conversion-tools::speed-conversion": {
      "route_name": "conversion.speed-and-motion-conversion-tools.speed-conversion",
      "view": "conversion.speed-and-motion-conversion-tools.speed_conversion",
      "category_slug": "speed-and-motion-conversion-tools",
      "slug": "speed-conversion",
      "title": "Speed Conversion"
    },
    "energy-and-power-conversion-tools::energy-conversion-calculator": {
      "route_name": "conversion.energy-and-power-conversion-tools.energy-conversion-calculator",
      "view": "conversion.energy-and-power-conversion-tools.energy_conversion_calculator",
      "category_slug": "energy-and-power-conversion-tools",
      "slug": "energy-conversion-calculator",
      "title": "Energy Conversion Calculator"
    },
    "energy-and-power-conversion-tools::power-converter": {
      "route_name": "conversion.energy-and-power-conversion-tools.power-converter",
      "view": "conversion.energy-and-power-conversion-tools.power_converter",
      "category_slug": "energy-and-power-conversion-tools",
      "slug": "power-converter",
      "title": "Power Converter"
    },
    "energy-and-power-conversion-tools::joules-to-volts-calculator": {
      "route_name": "conversion.energy-and-power-conversion-tools.joules-to-volts-calculator",
      "view": "conversion.energy-and-power-conversion-tools.joules_to_volts_calculator",
      "category_slug": "energy-and-power-conversion-tools",
      "slug": "joules-to-volts-calculator",
      "title": "Joules to Volts Calculator"
    },
    "energy-and-power-conversion-tools::nm-to-joules-calculator": {
      "route_name": "conversion.energy-and-power-conversion-tools.nm-to-joules-calculator",
      "view": "conversion.energy-and-power-conversion-tools.nm_to_joules_calculator",
      "category_slug": "energy-and-power-conversion-tools",
      "slug": "nm-to-joules-calculator",
      "title": "Nm to Joules Calculator"
    },
    "energy-and-power-conversion-tools::dbm-to-watts-calculator": {
      "route_name": "conversion.energy-and-power-conversion-tools.dbm-to-watts-calculator",
      "view": "conversion.energy-and-power-conversion-tools.dbm_to_watts_calculator",
      "category_slug": "energy-and-power-conversion-tools",
      "slug": "dbm-to-watts-calculator",
      "title": "dBm to Watts Calculator"
    },
    "energy-and-power-conversion-tools::rms-to-watts-converter": {
      "route_name": "conversion.energy-and-power-conversion-tools.rms-to-watts-converter",
      "view": "conversion.energy-and-power-conversion-tools.rms_to_watts_converter",
      "category_slug": "energy-and-power-conversion-tools",
      "slug": "rms-to-watts-converter",
      "title": "RMS to Watts Converter"
    },
    "currency-and-financial-conversion-tools::cents-to-dollars-calculator": {
      "route_name": "conversion.currency-and-financial-conversion-tools.cents-to-dollars-calculator",
      "view": "conversion.currency-and-financial-conversion-tools.cents_to_dollars_calculator",
      "category_slug": "currency-and-financial-conversion-tools",
      "slug": "cents-to-dollars-calculator",
      "title": "Cents to Dollars Calculator"
    },
    "currency-and-financial-conversion-tools::dimes-to-dollars-calculator": {
      "route_name": "conversion.currency-and-financial-conversion-tools.dimes-to-dollars-calculator",
      "view": "conversion.currency-and-financial-conversion-tools.dimes_to_dollars_calculator",
      "category_slug": "currency-and-financial-conversion-tools",
      "slug": "dimes-to-dollars-calculator",
      "title": "Dimes to Dollars Calculator"
    },
    "currency-and-financial-conversion-tools::nickels-to-dollars-calculator": {
      "route_name": "conversion.currency-and-financial-conversion-tools.nickels-to-dollars-calculator",
      "view": "conversion.currency-and-financial-conversion-tools.nickels_to_dollars_calculator",
      "category_slug": "currency-and-financial-conversion-tools",
      "slug": "nickels-to-dollars-calculator",
      "title": "Nickels to Dollars Calculator"
    },
    "currency-and-financial-conversion-tools::pennies-to-dollars-calculator": {
      "route_name": "conversion.currency-and-financial-conversion-tools.pennies-to-dollars-calculator",
      "view": "conversion.currency-and-financial-conversion-tools.pennies_to_dollars_calculator",
      "category_slug": "currency-and-financial-conversion-tools",
      "slug": "pennies-to-dollars-calculator",
      "title": "Pennies to Dollars Calculator"
    },
    "digital-and-technical-conversion-tools::px-to-em-converter": {
      "route_name": "conversion.digital-and-technical-conversion-tools.px-to-em-converter",
      "view": "conversion.digital-and-technical-conversion-tools.px_to_em_converter",
      "category_slug": "digital-and-technical-conversion-tools",
      "slug": "px-to-em-converter",
      "title": "Px to Em Converter"
    },
    "digital-and-technical-conversion-tools::ppm-calculator": {
      "route_name": "conversion.digital-and-technical-conversion-tools.ppm-calculator",
      "view": "conversion.digital-and-technical-conversion-tools.ppm_calculator",
      "category_slug": "digital-and-technical-conversion-tools",
      "slug": "ppm-calculator",
      "title": "PPM Calculator"
    },
    "digital-and-technical-conversion-tools::ppm-to-mg-l-converter": {
      "route_name": "conversion.digital-and-technical-conversion-tools.ppm-to-mg-l-converter",
      "view": "conversion.digital-and-technical-conversion-tools.ppm_to_mg_l_converter",
      "category_slug": "digital-and-technical-conversion-tools",
      "slug": "ppm-to-mg-l-converter",
      "title": "PPM to mg/L Converter"
    },
    "digital-and-technical-conversion-tools::cps-calculator": {
      "route_name": "conversion.digital-and-technical-conversion-tools.cps-calculator",
      "view": "conversion.digital-and-technical-conversion-tools.cps_calculator",
      "category_slug": "digital-and-technical-conversion-tools",
      "slug": "cps-calculator",
      "title": "CPS Calculator"
    },
    "digital-and-technical-conversion-tools::paper-quantity-converter": {
      "route_name": "conversion.digital-and-technical-conversion-tools.paper-quantity-converter",
      "view": "conversion.digital-and-technical-conversion-tools.paper_quantity_converter",
      "category_slug": "digital-and-technical-conversion-tools",
      "slug": "paper-quantity-converter",
      "title": "Paper Quantity Converter"
    },
    "utility-and-general-conversion-tools::ccf-to-therms-calculator": {
      "route_name": "conversion.utility-and-general-conversion-tools.ccf-to-therms-calculator",
      "view": "conversion.utility-and-general-conversion-tools.ccf_to_therms_calculator",
      "category_slug": "utility-and-general-conversion-tools",
      "slug": "ccf-to-therms-calculator",
      "title": "CCF to Therms Calculator"
    },
    "utility-and-general-conversion-tools::conversion-calculator": {
      "route_name": "conversion.utility-and-general-conversion-tools.conversion-calculator",
      "view": "conversion.utility-and-general-conversion-tools.conversion_calculator",
      "category_slug": "utility-and-general-conversion-tools",
      "slug": "conversion-calculator",
      "title": "Conversion Calculator"
    },
    "utility-and-general-conversion-tools::grams-to-calories-calculator": {
      "route_name": "conversion.utility-and-general-conversion-tools.grams-to-calories-calculator",
      "view": "conversion.utility-and-general-conversion-tools.grams_to_calories_calculator",
      "category_slug": "utility-and-general-conversion-tools",
      "slug": "grams-to-calories-calculator",
      "title": "Grams To Calories Calculator"
    },
    "utility-and-general-conversion-tools::quantity-converter": {
      "route_name": "conversion.utility-and-general-conversion-tools.quantity-converter",
      "view": "conversion.utility-and-general-conversion-tools.quantity_converter",
      "category_slug": "utility-and-general-conversion-tools",
      "slug": "quantity-converter",
      "title": "Quantity Converter"
    },
    "utility-and-general-conversion-tools::temperature-conversion": {
      "route_name": "conversion.utility-and-general-conversion-tools.temperature-conversion",
      "view": "conversion.utility-and-general-conversion-tools.temperature_conversion",
      "category_slug": "utility-and-general-conversion-tools",
      "slug": "temperature-conversion",
      "title": "Temperature Conversion"
    }
  }
}
JSON
, true, 512, JSON_THROW_ON_ERROR);
