<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataMahasiswa;
use Illuminate\Http\Response;
use App\Imports\MhsImport;
use App\Exports\MhsExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $mahasiswa = DataMahasiswa::get();
        return view('isi',['mahasiswa' => $mahasiswa]);
    }

    public function uploadContent(Request $request)
    {   
        $file = $request->file('uploaded_file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server 
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database 
            $filepath = public_path($location . "/" . $filename);
            Excel::import(new MhsImport, $filepath);
            return redirect('/dashboard')->with('message', 'Data Telah Tersimpan!'); 
        }
        else {
            //no file was uploaded
            throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        }
    }

    public function export() 
    {
        return Excel::download(new MhsExport, 'PKKMB2022.xlsx');
    }
        
    public function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } 
            else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
            }
        } 
        else {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }

    public function deleteData(Request $request)
    {
        DB::table('datausers')->where('NIM', $request -> NIM)->delete();
        return redirect('/dashboard')->with('message', 'Data berhasil dihapus!');
    }

    public function tambahData(Request $request)
    {
        return view('tambahdata');
    }

    public function submitData(Request $request)
    {
        
        $data = new DataMahasiswa;
        $data -> NIM = $request -> nim;
        $data -> NAMA = $request -> nama;
        $data -> PRODI = $request -> prodi;
        $data -> FAKULTAS = $request -> fakultas;
        $data[18] = $request -> delapanbelas;
        $data[19] = $request -> sembilanbelas;
        $data[20] = $request -> duapuluh;
        $data[22] = $request -> duapuluhdua;
        $data[23] = $request -> duapuluhtiga;
        $data[24] = $request -> duapuluhempat;
        $data[25] = $request -> duapuluhlima;
        $data[26] = $request -> duapuluhenam;
        $data[27] = $request -> duapuluhtujuh;
        $data -> STATUS = $request -> status;
        $data -> LINK = "127.0.0.1:8000/PKKMB/" . $request -> nim;
        
        $data -> save();
        return redirect('/dashboard')->with('message', 'Data Mahasiswa Telah Tersimpan!');
    }
}