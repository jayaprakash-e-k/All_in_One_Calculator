<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversionController;

Route::prefix('conversion')->group(function () {
    
    // Length and area conversions
    Route::get('/', [ConversionController::class, 'index'])->name('conversion.index');
    Route::get('/length', [ConversionController::class, 'length'])->name('conversion.length');
    Route::get('/area', [ConversionController::class, 'area'])->name('conversion.area');
    Route::get('/acreage', [ConversionController::class, 'acreage'])->name('conversion.acreage');
    Route::get('/ares-to-hectares', [ConversionController::class, 'aresToHectares'])->name('conversion.aresToHectares');
    Route::get('/astronomical-unit', [ConversionController::class, 'astronomicalUnit'])->name('conversion.astronomicalUnit');
    Route::get('/decimeter-to-meter', [ConversionController::class, 'decimeterToMeter'])->name('conversion.decimeterToMeter');
    Route::get('/feet-inches', [ConversionController::class, 'feetInches'])->name('conversion.feetInches');
    Route::get('/height-in-inches', [ConversionController::class, 'heightInInches'])->name('conversion.heightInInches');
    Route::get('/inches-to-fraction', [ConversionController::class, 'inchesToFraction'])->name('conversion.inchesToFraction');
    Route::get('/lightyear-conversion', [ConversionController::class, 'lightYearConversion'])->name('conversion.lightYear');
    Route::get('/mesh-to-micron', [ConversionController::class, 'meshToMicron'])->name('conversion.meshToMicron');
    Route::get('/pixels-to-inches', [ConversionController::class, 'pixelsToInches'])->name('conversion.pixelsToInches');

    // Volume and weight conversions
    Route::get('/ccf-to-gallons', [ConversionController::class, 'ccfToGallons'])->name('conversion.ccfToGallons');
    Route::get('/cubic-feet-calculator', [ConversionController::class, 'cubicFeetCalculator'])->name('conversion.cubicFeet');
    Route::get('/cubic-meter-calculator', [ConversionController::class, 'cubicMeterCalculator'])->name('conversion.cubicMeter');
    Route::get('/cubic-yards-to-tons', [ConversionController::class, 'cubicYardsToTons'])->name('conversion.cubicYardsToTons');
    Route::get('/decagram-to-gram', [ConversionController::class, 'decagramToGram'])->name('conversion.decagramToGram');
    Route::get('/mg-to-ml', [ConversionController::class, 'mgToMl'])->name('conversion.mgToMl');
    Route::get('/liters-to-centiliters', [ConversionController::class, 'litersToCentiliters'])->name('conversion.litersToCentiliters');
    Route::get('/weight-converter', [ConversionController::class, 'weightConverter'])->name('conversion.weightConverter');
    Route::get('/pounds-and-ounces', [ConversionController::class, 'poundsAndOunces'])->name('conversion.poundsAndOunces');
    Route::get('/ml-to-cups', [ConversionController::class, 'mlToCups'])->name('conversion.mlToCups');
    Route::get('/quarts-to-pounds', [ConversionController::class, 'quartsToPounds'])->name('conversion.quartsToPounds');
    Route::get('/gallon-calculator', [ConversionController::class, 'gallonCalculator'])->name('conversion.gallonCalculator');
    Route::get('/gallons-to-pounds', [ConversionController::class, 'gallonsToPounds'])->name('conversion.gallonsToPounds');
    Route::get('/grams-to-ounces', [ConversionController::class, 'gramsToOunces'])->name('conversion.gramsToOunces');
    Route::get('/drops-to-ml', [ConversionController::class, 'dropsToMl'])->name('conversion.dropsToMl');
    Route::get('/oz-to-cups', [ConversionController::class, 'ozToCups'])->name('conversion.ozToCups');
    Route::get('/pints-to-pounds', [ConversionController::class, 'pintsToPounds'])->name('conversion.pintsToPounds');
    Route::get('/volume', [ConversionController::class, 'volumeConverter'])->name('conversion.volume');
    Route::get('/kg-to-gallons', [ConversionController::class, 'kgToGallons'])->name('conversion.kgToGallons');
    Route::get('/mcg-to-mg', [ConversionController::class, 'mcgToMg'])->name('conversion.mcgToMg');

    // Force, pressure, and torque conversions
    Route::get('/force-converter', [ConversionController::class, 'forceConverter'])->name('conversion.forceConverter');
    Route::get('/inchlbs-to-nm', [ConversionController::class, 'inchLbsToNm'])->name('conversion.inchLbsToNm');
    Route::get('/inchlbs-to-ftlbs', [ConversionController::class, 'inchLbsToFtLbs'])->name('conversion.inchLbsToFtLbs');
    Route::get('/lbs-to-newtons', [ConversionController::class, 'lbsToNewtons'])->name('conversion.lbsToNewtons');
    Route::get('/newton-meter-calculator', [ConversionController::class, 'newtonMeterCalculator'])->name('conversion.newtonMeterCalculator');
    Route::get('/nm-to-ftlbs-converter', [ConversionController::class, 'nmToFtlbsConverter'])->name('conversion.nmToFtlbsConverter');
    Route::get('/nm-to-inchlbs', [ConversionController::class, 'nmToInchLbs'])->name('conversion.nmToInchLbs');
    Route::get('/pressure-converter', [ConversionController::class, 'pressureConverter'])->name('conversion.pressureConverter');
    Route::get('/psi-to-gpm', [ConversionController::class, 'psiToGpm'])->name('conversion.psiToGpm');
    Route::get('/torque-to-hp', [ConversionController::class, 'torqueToHp'])->name('conversion.torqueToHp');
    Route::get('/torr-to-atm', [ConversionController::class, 'torrToAtm'])->name('conversion.torrToAtm');

    // Geographic & Mapping Tools
    Route::get('/coordinates-converter', [ConversionController::class, 'coordinatesConverter'])->name('conversion.coordinatesConverter');
    Route::get('/dms-calculator', [ConversionController::class, 'dmsCalculator'])->name('conversion.dmsCalculator');
    Route::get('/lat-long-to-utm', [ConversionController::class, 'latLongToUtm'])->name('conversion.latLongToUtm');
    Route::get('/scale-calculator', [ConversionController::class, 'scaleCalculator'])->name('conversion.scaleCalculator');

    // Number Conversions Tools
    Route::get('/billion-to-trillion-converter', [ConversionController::class, 'billionToTrillionConverter'])->name('conversion.billionToTrillionConverter');
    Route::get('/crore-to-lakh-converter', [ConversionController::class, 'croreToLakhConverter'])->name('conversion.croreToLakhConverter');
    Route::get('/crore-to-million-converter', [ConversionController::class, 'croreToMillionConverter'])->name('conversion.croreToMillionConverter');
    Route::get('/million-to-billion-converter', [ConversionController::class, 'millionToBillionConverter'])->name('conversion.millionToBillionConverter');
    Route::get('/million-to-lakh-converter', [ConversionController::class, 'millionToLakhConverter'])->name('conversion.millionToLakhConverter');
    Route::get('/million-to-thousand-converter', [ConversionController::class, 'millionToThousandConverter'])->name('conversion.millionToThousandConverter');
    Route::get('/number-to-billion-converter', [ConversionController::class, 'numberToBillionConverter'])->name('conversion.numberToBillionConverter');
    Route::get('/number-to-million-converter', [ConversionController::class, 'numberToMillionConverter'])->name('conversion.numberToMillionConverter');

    // Number System Conversions Tools
    Route::get('/binary-converter', [ConversionController::class, 'binaryConverter'])->name('conversion.binaryConverter');
    Route::get('/binary-to-hexadecimal-converter', [ConversionController::class, 'binaryToHexadecimalConverter'])->name('conversion.binaryToHexadecimalConverter');
    Route::get('/binary-to-octal-converter', [ConversionController::class, 'binaryToOctalConverter'])->name('conversion.binaryToOctalConverter');
    Route::get('/decimal-to-hexadecimal-converter', [ConversionController::class, 'decimalToHexadecimalConverter'])->name('conversion.decimalToHexadecimalConverter');
    Route::get('/decimal-to-octal-converter', [ConversionController::class, 'decimalToOctalConverter'])->name('conversion.decimalToOctalConverter');
    Route::get('/roman-numerals-converter', [ConversionController::class, 'romanNumeralsConverter'])->name('conversion.romanNumeralsConverter');

    // Data & Technical Conversion Tools
    Route::get('/byte-conversion-calculator', [ConversionController::class, 'byteConversionCalculator'])->name('conversion.byteConversionCalculator');
    Route::get('/capacitance-converter', [ConversionController::class, 'capacitanceConverter'])->name('conversion.capacitanceConverter');
    Route::get('/kb-to-mb-converter', [ConversionController::class, 'kbToMbConverter'])->name('conversion.kbToMbConverter');
    Route::get('/mbps-calculator', [ConversionController::class, 'mbpsCalculator'])->name('conversion.mbpsCalculator');
    Route::get('/mbps-to-gbps-converter', [ConversionController::class, 'mbpsToGbpsConverter'])->name('conversion.mbpsToGbpsConverter');
    Route::get('/mb-to-gb-converter', [ConversionController::class, 'mbToGbConverter'])->name('conversion.mbToGbConverter');
    Route::get('/unix-time-converter', [ConversionController::class, 'unixTimeConverter'])->name('conversion.unixTimeConverter');

    // Time & Date Conversion Tools
    Route::get('/military-time-converter', [ConversionController::class, 'militaryTimeConverter'])->name('conversion.militaryTimeConverter');
    Route::get('/minutes-to-hours-converter', [ConversionController::class, 'minutesToHoursConverter'])->name('conversion.minutesToHoursConverter');
    Route::get('/time-unit-converter', [ConversionController::class, 'timeUnitConverter'])->name('conversion.timeUnitConverter');
    Route::get('/time-zones-converter', [ConversionController::class, 'timeZonesConverter'])->name('conversion.timeZonesConverter');
    Route::get('/years-to-decades-calculator', [ConversionController::class, 'yearsToDecadesCalculator'])->name('conversion.yearsToDecadesCalculator');

    // Specialized Measurement Conversion Tools
    Route::get('/angle-conversion-calculator', [ConversionController::class, 'angleConversionCalculator'])->name('conversion.angleConversionCalculator');
    Route::get('/density-conversion', [ConversionController::class, 'densityConversion'])->name('conversion.densityConversion');
    Route::get('/hardness-conversion-calculator', [ConversionController::class, 'hardnessConversionCalculator'])->name('conversion.hardnessConversionCalculator');
    Route::get('/radiation-converter', [ConversionController::class, 'radiationConverter'])->name('conversion.radiationConverter');
    Route::get('/natural-gas-converter', [ConversionController::class, 'naturalGasConverter'])->name('conversion.naturalGasConverter');
    Route::get('/dimensional-analysis-calculator', [ConversionController::class, 'dimensionalAnalysisCalculator'])->name('conversion.dimensionalAnalysisCalculator');
    Route::get('/cgs-system-of-units-converter', [ConversionController::class, 'cgsSystemOfUnitsConverter'])->name('conversion.cgsSystemOfUnitsConverter');
    Route::get('/weird-units-converter', [ConversionController::class, 'weirdUnitsConverter'])->name('conversion.weirdUnitsConverter');

    // Speed & Motion Conversion Tools
    Route::get('/m-s-to-km-h-converter', [ConversionController::class, 'msToKmhConverter'])->name('conversion.msToKmhConverter');
    Route::get('/knots-to-kph-converter', [ConversionController::class, 'knotsToKphConverter'])->name('conversion.knotsToKphConverter');
    Route::get('/knots-to-mph-converter', [ConversionController::class, 'knotsToMphConverter'])->name('conversion.knotsToMphConverter');
    Route::get('/mpg-to-l-100km-converter', [ConversionController::class, 'mpgToL100kmConverter'])->name('conversion.mpgToL100kmConverter');
    Route::get('/speed-conversion', [ConversionController::class, 'speedConversion'])->name('conversion.speedConversion');

    // Energy & Power Calculators Routes
    Route::get('/energy-conversion-calculator', [ConversionController::class, 'energyConversionCalculator'])->name('conversion.energyConversionCalculator');
    Route::get('/power-converter', [ConversionController::class, 'powerConverter'])->name('conversion.powerConverter');
    Route::get('/joules-to-volts-calculator', [ConversionController::class, 'joulesToVoltsCalculator'])->name('conversion.joulesToVoltsCalculator');
    Route::get('/nm-to-joules-calculator', [ConversionController::class, 'nmToJoulesCalculator'])->name('conversion.nmToJoulesCalculator');
    Route::get('/dbm-to-watts-calculator', [ConversionController::class, 'dbmToWattsCalculator'])->name('conversion.dbmToWattsCalculator');
    Route::get('/rms-to-watts-converter', [ConversionController::class, 'rmsToWattsConverter'])->name('conversion.rmsToWattsConverter');

    // Currency & Financial Conversion Tools
    Route::get('/cents-to-dollars-calculator', [ConversionController::class, 'centsToDollarsCalculator'])->name('conversion.centsToDollarsCalculator');
    Route::get('/dimes-to-dollars-calculator', [ConversionController::class, 'dimesToDollarsCalculator'])->name('conversion.dimesToDollarsCalculator');
    Route::get('/nickels-to-dollars-calculator', [ConversionController::class, 'nickelsToDollarsCalculator'])->name('conversion.nickelsToDollarsCalculator');
    Route::get('/pennies-to-dollars-calculator', [ConversionController::class, 'penniesToDollarsCalculator'])->name('conversion.penniesToDollarsCalculator');

    // Digital & Technical Calculators Routes
    Route::get('/px-to-em-converter', [ConversionController::class, 'pxToEmConverter'])->name('conversion.pxToEmConverter');
    Route::get('/ppm-calculator', [ConversionController::class, 'ppmCalculator'])->name('conversion.ppmCalculator');
    Route::get('/ppm-to-mg-l-converter', [ConversionController::class, 'ppmToMgLConverter'])->name('conversion.ppmToMgLConverter');
    Route::get('/cps-calculator', [ConversionController::class, 'cpsCalculator'])->name('conversion.cpsCalculator');
    Route::get('/paper-quantity-converter', [ConversionController::class, 'paperQuantityConverter'])->name('conversion.paperQuantityConverter');

    // Utility & General Conversion Tools
    Route::get('/ccf-to-therms-calculator', [ConversionController::class, 'ccfToThermsCalculator'])->name('conversion.ccfToThermsCalculator');
    Route::get('/conversion-calculator', [ConversionController::class, 'conversionCalculator'])->name('conversion.conversionCalculator');
    Route::get('/grams-to-calories-calculator', [ConversionController::class, 'gramsToCaloriesCalculator'])->name('conversion.gramsToCaloriesCalculator');
    Route::get('/quantity-converter', [ConversionController::class, 'quantityConverter'])->name('conversion.quantityConverter');
    Route::get('/temperature-conversion', [ConversionController::class, 'temperatureConversion'])->name('conversion.temperatureConversion');

});

Route::get('/', function () {
    return view('welcome');
});