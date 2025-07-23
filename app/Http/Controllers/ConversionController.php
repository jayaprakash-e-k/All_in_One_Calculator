<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function index()
    {
        return view('conversion.index');
    }

    // Length and area conversions    
    public function length()
    {
        return view('conversion.length');
    }

    public function area()
    {
        return view('conversion.area');
    }
    
    public function acreage()
    {
        return view('conversion.acreage');
    }

    public function aresToHectares()
    {
        return view('conversion.ares_to_hectares');
    }

    public function astronomicalUnit()
    {
        return view('conversion.astronomical_unit');
    }

    public function decimeterToMeter()
    {
        return view('conversion.decimeter_to_meter');
    }

    public function feetInches()
    {
        return view('conversion.feet_inches');
    }

    public function heightInInches()
    {
        return view('conversion.height_in_inches');
    }

    public function inchesToFraction()
    {
        return view('conversion.inches_to_fraction');
    }

    public function lightYearConversion()
    {
        return view('conversion.light_year');
    }

    public function meshToMicron()
    {
        return view('conversion.mesh_to_micron');
    }

    public function pixelsToInches()
    {
        return view('conversion.pixels_to_inches');
    }

    // Volume and weight conversions
    public function ccfToGallons()
    {
        return view('conversion.ccf_to_gallons');
    }

    public function cubicFeetCalculator()
    {
        return view('conversion.cubic_feet');
    }

    public function cubicMeterCalculator()
    {
        return view('conversion.cubic_meter');
    }

    public function cubicYardsToTons()
    {
        return view('conversion.cubic_yards_to_tons');
    }

    public function decagramToGram()
    {
        return view('conversion.decagram_to_gram');
    }

    public function mgToMl()
    {
        return view('conversion.mg_to_ml');
    }

    public function litersToCentiliters()
    {
        return view('conversion.liters_to_centiliters');
    }

    public function weightConverter()
    {
        return view('conversion.weight_converter');
    }

    public function poundsAndOunces()
    {
        return view('conversion.pounds_and_ounces');
    }

    public function mlToCups()
    {
        return view('conversion.ml_to_cups');
    }

    public function quartsToPounds()
    {
        return view('conversion.quarts_to_pounds');
    }

    public function gallonCalculator()
    {
        return view('conversion.gallon_calculator');
    }

    public function gallonsToPounds()
    {
        return view('conversion.gallons_to_pounds');
    }

    public function gramsToOunces()
    {
        return view('conversion.grams_to_ounces');
    }

    public function dropsToMl()
    {
        return view('conversion.drops_to_ml');
    }

    public function ozToCups()
    {
        return view('conversion.oz_to_cups');
    }

    public function pintsToPounds()
    {
        return view('conversion.pints_to_pounds');
    }

    public function volumeConverter()
    {
        return view('conversion.volume_converter');
    }

    public function kgToGallons()
    {
        return view('conversion.kg_to_gallons');
    }

    public function mcgToMg()
    {
        return view('conversion.mcg_to_mg');
    }

    // Force, pressure, and torque conversions
    public function forceConverter()
    {
        return view('conversion.force_converter');
    }

    public function inchLbsToNm()
    {
        return view('conversion.inchlbs_to_nm');
    }

    public function inchLbsToFtLbs()
    {
        return view('conversion.inchlbs_to_ftlbs');
    }

    public function lbsToNewtons()
    {
        return view('conversion.lbs_to_newtons');
    }

    public function newtonMeterCalculator()
    {
        return view('conversion.newton_meter_calculator');
    }

    public function nmToFtlbsConverter()
    {
        return view('conversion.nm_to_ftlbs_converter');
    }

    public function nmToInchLbs()
    {
        return view('conversion.nm_to_inlbs');
    }

    public function pressureConverter()
    {
        return view('conversion.pressure_converter');
    }

    public function psiToGpm()
    {
        return view('conversion.psi_to_gpm');
    }

    public function torqueToHp()
    {
        return view('conversion.torque_to_hp');
    }

    public function torrToAtm()
    {
        return view('conversion.torr_to_atm');
    }

    //Geographic & Mapping Tools
    public function coordinatesConverter()
    {
        return view('conversion.coordinates_converter');
    }

    public function dmsCalculator()
    {
        return view('conversion.dms_calculator');
    }

    public function latLongToUtm()
    {
        return view('conversion.lat_long_to_utm');
    }

    public function scaleCalculator()
    {
        return view('conversion.scale_calculator');
    }

    public function billionToTrillionConverter()
    {
        return view('conversion.billion_to_trillion_converter');
    }

    public function croreToLakhConverter()
    {
        return view('conversion.crore_to_lakh_converter');
    }

    public function croreToMillionConverter()
    {
        return view('conversion.crore_to_million_converter');
    }

    public function millionToBillionConverter()
    {
        return view('conversion.million_to_billion_converter');
    }

    public function millionToLakhConverter()
    {
        return view('conversion.million_to_lakh_converter');
    }

    public function millionToThousandConverter()
    {
        return view('conversion.million_to_thousand_converter');
    }

    public function numberToBillionConverter()
    {
        return view('conversion.number_to_billion_converter');
    }

    public function numberToMillionConverter()
    {
        return view('conversion.number_to_million_converter');
    }

    // Number System Conversions Tools
    public function binaryConverter()
    {
        return view('conversion.binary_converter');
    }

    public function binaryToHexadecimalConverter()
    {
        return view('conversion.binary_to_hexadecimal_converter');
    }

    public function binaryToOctalConverter()
    {
        return view('conversion.binary_to_octal_converter');
    }

    public function decimalToHexadecimalConverter()
    {
        return view('conversion.decimal_to_hexadecimal_converter');
    }

    public function decimalToOctalConverter()
    {
        return view('conversion.decimal_to_octal_converter');
    }

    public function romanNumeralsConverter()
    {
        return view('conversion.roman_numerals_converter');
    }

    // Data & Technical Conversion Tools
    public function byteConversionCalculator()
    {
        return view('conversion.byte_conversion_calculator');
    }

    public function capacitanceConverter()
    {
        return view('conversion.capacitance_converter');
    }

    public function kbToMbConverter()
    {
        return view('conversion.kb_to_mb_converter');
    }

    public function mbpsCalculator()
    {
        return view('conversion.mbps_calculator');
    }

    public function mbpsToGbpsConverter()
    {
        return view('conversion.mbps_to_gbps_converter');
    }

    public function mbToGbConverter()
    {
        return view('conversion.mb_to_gb_converter');
    }

    public function unixTimeConverter()
    {
        return view('conversion.unix_time_converter');
    }

    // Time & Date Conversion Tools
    public function militaryTimeConverter()
    {
        return view('conversion.military_time_converter');
    }

    public function minutesToHoursConverter()
    {
        return view('conversion.minutes_to_hours_converter');
    }

    public function timeUnitConverter()
    {
        return view('conversion.time_unit_converter');
    }

    public function timeZonesConverter()
    {
        return view('conversion.time_zones_converter');
    }

    public function yearsToDecadesCalculator()
    {
        return view('conversion.years_to_decades_calculator');
    }

    // Specialized Measurement Conversion Tools
    
    public function angleConversionCalculator()
    {
        return view('conversion.angle_conversion_calculator');
    }

    public function densityConversion()
    {
        return view('conversion.density_conversion');
    }

    public function hardnessConversionCalculator()
    {
        return view('conversion.hardness_conversion_calculator');
    }

    public function radiationConverter()
    {
        return view('conversion.radiation_converter');
    }

    public function naturalGasConverter()
    {
        return view('conversion.natural_gas_converter');
    }

    public function dimensionalAnalysisCalculator()
    {
        return view('conversion.dimensional_analysis_calculator');
    }

    public function cgsSystemOfUnitsConverter()
    {
        return view('conversion.cgs_system_of_units_converter');
    }

    public function weirdUnitsConverter()
    {
        return view('conversion.weird_units_converter');
    }

    // Speed & Motion Conversion Tools
    
    public function msToKmhConverter()
    {
        return view('conversion.ms_to_kmh_converter');
    }

    public function knotsToKphConverter()
    {
        return view('conversion.knots_to_kph_converter');
    }

    public function knotsToMphConverter()
    {
        return view('conversion.knots_to_mph_converter');
    }

    public function mpgToL100kmConverter()
    {
        return view('conversion.mpg_to_l100km_converter');
    }

    public function speedConversion()
    {
        return view('conversion.speed_conversion');
    }

    // Energy & Power Conversion Tools
    
    public function energyConversionCalculator()
    {
        return view('conversion.energy_conversion_calculator');
    }

    public function powerConverter()
    {
        return view('conversion.power_converter');
    }

    public function joulesToVoltsCalculator()
    {
        return view('conversion.joules_to_volts_calculator');
    }

    public function nmToJoulesCalculator()
    {
        return view('conversion.nm_to_joules_calculator');
    }

    public function dbmToWattsCalculator()
    {
        return view('conversion.dbm_to_watts_calculator');
    }

    public function rmsToWattsConverter()
    {
        return view('conversion.rms_to_watts_converter');
    }

    // Currency & Financial Conversion Tools
    
    public function centsToDollarsCalculator()
    {
        return view('conversion.cents_to_dollars_calculator');
    }

    public function dimesToDollarsCalculator()
    {
        return view('conversion.dimes_to_dollars_calculator');
    }

    public function nickelsToDollarsCalculator()
    {
        return view('conversion.nickels_to_dollars_calculator');
    }

    public function penniesToDollarsCalculator()
    {
        return view('conversion.pennies_to_dollars_calculator');
    }

    // Digital & Technical Conversion Tools 
       
    public function pxToEmConverter()
    {
        return view('conversion.px_to_em_converter');
    }

    public function ppmCalculator()
    {
        return view('conversion.ppm_calculator');
    }

    public function ppmToMgLConverter()
    {
        return view('conversion.ppm_to_mg_l_converter');
    }

    public function cpsCalculator()
    {
        return view('conversion.cps_calculator');
    }

    public function paperQuantityConverter()
    {
        return view('conversion.paper_quantity_converter');
    }

    // Utility & General Conversion Tools
    
    public function ccfToThermsCalculator()
    {
        return view('conversion.ccf_to_therms_calculator');
    }

    public function conversionCalculator()
    {
        return view('conversion.conversion_calculator');
    }

    public function gramsToCaloriesCalculator()
    {
        return view('conversion.grams_to_calories_calculator');
    }

    public function quantityConverter()
    {
        return view('conversion.quantity_converter');
    }

    public function temperatureConversion()
    {
        return view('conversion.temperature_conversion');
    }
}