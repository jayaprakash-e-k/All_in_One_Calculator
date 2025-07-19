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

    // New calculators
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
}