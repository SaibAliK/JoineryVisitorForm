<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Models\AfterAssessment;

class AssessmentExport implements FromView, WithTitle
{
    public function view(): View
    {
	    return view('exports.assessments', [
		    'assessments' => AfterAssessment::orderBy('id', 'desc')->get()
	    ]);
    }

    public function title(): string
    {
        return 'After Assessments';
    }
}
