<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use PDF;


class PDFController extends Controller
{
    /*pdf de la carte */
    public function cartePDF()
    {
        $etudiants = Etudiant::get();

        $data = [
            'title' => 'Voici votre carte etudiant',
            'date' => date('m/d/Y'),
            'etudiants' => $etudiants
        ];

        $pdf = PDF::loadview('myPDF', $data);

        return $pdf->download('laraveluts.pdf');
    }
}
