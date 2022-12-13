<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Result;
use Illuminate\Support\Facades\Storage;
use \Mpdf\Mpdf as PDF;

class PDFController extends Controller
{
    //

    public function quiz($id){
        $paper = Quiz::where('id',$id )->first();
        if ($paper){
            $data = [
                'paper' => $paper,
            ];
            // Setup a filename
            $documentFileName = $paper->name." quiz paper.pdf";
            // Create the mPDF document
            $document = new PDF([
                'default_font' => 'trebuchetms',
                'mode' => 'utf-8',
                'format' => 'A4',
                'margin_header' => '3',
                'margin_top' => '20',
                'margin_bottom' => '20',
                'margin_footer' => '2',
            ]);

            $document->SetWatermarkText(setting('site.title'));
            $document->showWatermarkText = true;
            $document->allow_charset_conversion = true; // Set by default to TRUE
            //$document->charset_in = 'windows-1252';
            $document->autoLangToFont = true;
            $document->autoScriptToLang = true;
            // Set some header informations for output
            $header = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $documentFileName . '"',
            ];

            // Write some simple Content
            $document->WriteHTML(view('pdf.question', $data));
            // Save PDF on your public storage
            Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
            // Get file back from storage with the give header informations
            return Storage::disk('public')->download($documentFileName, 'Request', $header); //

        }else{
            abort(404);
        }
    }
    public function answer($id){
        $paper = Quiz::where('id',$id)->first();
        if ($paper){
            $data = [
                'paper' => $paper,
            ];
            // Setup a filename
            $documentFileName = $paper->name." quiz answer.pdf";
            // Create the mPDF document
            $document = new PDF([
                'default_font' => 'trebuchetms',
                'mode' => 'utf-8',
                'format' => 'A4',
                'margin_header' => '3',
                'margin_top' => '20',
                'margin_bottom' => '20',
                'margin_footer' => '2',
            ]);

            $document->SetWatermarkText(setting('site.title'));
            $document->showWatermarkText = true;
            $document->allow_charset_conversion = true; // Set by default to TRUE
            //$document->charset_in = 'windows-1252';
            $document->autoLangToFont = true;
            $document->autoScriptToLang = true;
            // Set some header informations for output
            $header = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $documentFileName . '"',
            ];
            // Write some simple Content
            $document->WriteHTML(view('pdf.answer', $data));
            // Save PDF on your public storage
            Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
            // Get file back from storage with the give header informations
            return Storage::disk('public')->download($documentFileName, 'Request', $header); //
        }else{
            abort(404);
        }

    }
    public function rank($id){

        $paper = Quiz::where('id',$id )->first();
        if ($paper){
            $results = Result::where('quiz_id', $id)->orderBy('mark', 'DESC')->orderBy('time', 'ASC')->orderBy('created_at', 'ASC')->get();
            $data = [
                'paper' => $paper,
                'results'=> $results,
            ];
            // Setup a filename
            $documentFileName = $paper->name." quiz rank.pdf";
            // Create the mPDF document
            $document = new PDF([
                'default_font' => 'trebuchetms',
                'mode' => 'utf-8',
                'format' => 'A4',
                'margin_header' => '3',
                'margin_top' => '20',
                'margin_bottom' => '20',
                'margin_footer' => '2',
            ]);

            $document->SetWatermarkText(setting('site.title'));
            $document->showWatermarkText = true;
            $document->allow_charset_conversion = true; // Set by default to TRUE
            //$document->charset_in = 'windows-1252';
            $document->autoLangToFont = true;
            $document->autoScriptToLang = true;
            // Set some header informations for output
            $header = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $documentFileName . '"',
            ];

            // Write some simple Content
            $document->WriteHTML(view('pdf.rank', $data));
            // Save PDF on your public storage
            Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
            // Get file back from storage with the give header informations
            return Storage::disk('public')->download($documentFileName, 'Request', $header); //
        }else{
            abort(404);
        }

    }
    public function card($id){
        $result = Result::where('id',$id )->first();
        if ($result){
            $paper = $result->quiz;
            $data = [
                'paper' => $paper,
                'result'=>$result,
            ];
            // Setup a filename
            $documentFileName = $paper->name." Result Card.pdf";

            // Create the mPDF document
            $document = new PDF([
                'default_font' => 'trebuchetms',
                'mode' => 'utf-8',
                'format' => 'A4',
                'margin_header' => '3',
                'margin_top' => '20',
                'margin_bottom' => '20',
                'margin_footer' => '2',
            ]);

            $document->SetWatermarkText(setting('site.title'));
            $document->showWatermarkText = true;
            $document->allow_charset_conversion = true; // Set by default to TRUE
            //$document->charset_in = 'windows-1252';
            $document->autoLangToFont = true;
            $document->autoScriptToLang = true;
            // Set some header informations for output
            $header = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $documentFileName . '"',
            ];

            // Write some simple Content
            $document->WriteHTML(view('pdf.card', $data));
            // Save PDF on your public storage
            Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
            // Get file back from storage with the give header informations
            return Storage::disk('public')->download($documentFileName, 'Request', $header); //
        }else{
            abort(404);
        }

    }
    public function attempt($id){
        $result = Result::where('id',$id )->first();
        if ($result){
            $paper = $result->quiz;
            $data = [
                'paper' => $paper,
                'result'=>$result,
            ];
            // Setup a filename
            $documentFileName = $paper->name." attempt.pdf";

            // Create the mPDF document
            $document = new PDF([
                'default_font' => 'trebuchetms',
                'mode' => 'utf-8',
                'format' => 'A4',
                'margin_header' => '3',
                'margin_top' => '20',
                'margin_bottom' => '20',
                'margin_footer' => '2',
            ]);

            $document->SetWatermarkText(setting('site.title'));
            $document->showWatermarkText = true;
            $document->allow_charset_conversion = true; // Set by default to TRUE
            //$document->charset_in = 'windows-1252';
            $document->autoLangToFont = true;
            $document->autoScriptToLang = true;
            // Set some header informations for output
            $header = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $documentFileName . '"',
            ];

            // Write some simple Content
            $document->WriteHTML(view('pdf.attempt', $data));
            // Save PDF on your public storage
            Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
            // Get file back from storage with the give header informations
            return Storage::disk('public')->download($documentFileName, 'Request', $header); //
        }else{
            abort(404);
        }
    }
}
