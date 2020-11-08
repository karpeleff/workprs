<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;

    class UploadController extends Controller
    {
        public function getForm()
        {
            return view('upload-form');
        }

        public function upload(Request $request)
        {
            foreach ($request->file() as $file) {
                foreach ($file as $f) {
                    $f->move(storage_path('docs'), time().'_'.$f->getClientOriginalName());
                }
            }
            return view('upload-form');
        }
    }
