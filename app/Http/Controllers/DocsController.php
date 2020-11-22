<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \PhpOffice\PhpWord\PhpWord;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DocsController extends Controller
{
    public function get_form()
    {
        return view('report_form');
    }

    public function engine_form()
    {
        return view('engine_form');
    }

    public function  doc_create(Request $request)
    {
       // dd($request);
       $phpWord = new PhpWord();

        echo $request->doc;

        $section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
        $section->addText(
            '"Learn from yesterday, live for today, hope for tomorrow. '
            . 'The important thing is not to stop questioning." '
            . '(Albert Einstein)'
        );

        /*
         * Note: it's possible to customize font style of the Text element you add in three ways:
         * - inline;
         * - using named font style (new font style object will be implicitly created);
         * - using explicitly created font style object.
         */

// Adding Text element with font customized inline...
        $section->addText(
            '"Great achievement is usually born of great sacrifice, '
            . 'and is never the result of selfishness." '
            . '(Napoleon Hill)',
            array('name' => 'Tahoma', 'size' => 10)
        );

// Adding Text element with font customized using named font style...
        $fontStyleName = 'oneUserDefinedStyle';
        $phpWord->addFontStyle(
            $fontStyleName,
            array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
        );
        $section->addText(
            '"The greatest accomplishment is not in never falling, '
            . 'but in rising again after you fall." '
            . '(Vince Lombardi)',
            $fontStyleName
        );

// Adding Text element with font customized using explicitly created font style object...
        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setBold(true);
        $fontStyle->setName('Tahoma');
        $fontStyle->setSize(13);
        $myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
        $myTextElement->setFontStyle($fontStyle);

// Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('output/name.docx');

    }

    public  function  create_work_plan()
    {

    }

    public  function  create_act_spisaniya_gsm()
    {

    }

    public  function  create_spravka_o_rabote()
    {

    }

    public  function  create_svodny_otchet_gsm()
    {

    }

}
