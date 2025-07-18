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
    
    // New calculators
    Route::get('/nm-to-inchlbs', [ConversionController::class, 'nmToInchLbs'])->name('conversion.nmToInchLbs');
    Route::get('/pressure-converter', [ConversionController::class, 'pressureConverter'])->name('conversion.pressureConverter');
    Route::get('/psi-to-gpm', [ConversionController::class, 'psiToGpm'])->name('conversion.psiToGpm');
    Route::get('/torque-to-hp', [ConversionController::class, 'torqueToHp'])->name('conversion.torqueToHp');
    Route::get('/torr-to-atm', [ConversionController::class, 'torrToAtm'])->name('conversion.torrToAtm');
});

Route::get('/', function () {
    return view('welcome');
});