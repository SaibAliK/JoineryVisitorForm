<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Models\Arrival;

class ArrivalExport implements FromView, WithTitle
{
    public function view(): View
    {
	    return view('exports.arrival', [
		    'arrivals' => Arrival::with('afterassessment')->orderBy('id', 'desc')->get()
	    ]);
    }

    public function title(): string
    {
        return 'Arrivals';
    }
}
