<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ConversionController extends Controller
{
    public function index(): View
    {
        return view('conversion.index', [
            'categories' => config('conversion.categories', []),
        ]);
    }

    public function show(string $calculator): View
    {
        $calculatorConfig = config("conversion.calculators.{$calculator}");

        abort_if(!is_array($calculatorConfig) || empty($calculatorConfig['view']), 404);

        return view($calculatorConfig['view']);
    }
}