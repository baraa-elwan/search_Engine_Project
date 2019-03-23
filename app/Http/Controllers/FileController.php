<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Tokenizer\Tokenizer;
use Smalot\PdfParser\Parser;
use App\Helpers\Porter;
use Skyeng\Lemmatizer;
use Skyeng\Lemma;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FileController
{


    public $lemmatizer;


    public function __construct(Type $var = null) {
        $this->lemmatizer = new Lemmatizer();
        $this->numbersRegex = '/\d+[.\d+]?/';
    }
  

    public function addlookupTable(Type $var = null)
    {
        $path = storage_path('app\\public\\codes.json');
        $data = json_decode(file_get_contents($path), true);
        // dd($data);
        foreach ($data as $id => $value) {
            DB::insert('insert into lookup (id, name, code) values (?, ?,?)', [$id, $value['Name'], $value['Code']]);
        }
    }

    public function getOrginal($token)
    {
       $orginal = DB::select('select name from lookup where code = :t', ['t'=>$token]);
        return $orginal[0]->name;
    }


    public function replaceAppreviations($content)
    {
        $abbreviations = '/(\w+).(\w+)/';
        return preg_replace($abbreviations, '$1$2', $content);
    }


    public function replaceDate($content)
    {
        $dateRegex ="/(\d{1,2})\s*(\/|\-|\:)\s*(\d{1,2})\s*(\/|\-|\:)\s*(\d{4})/";
        return preg_replace($dateRegex, '$1/$3/$5', $content);
    }


    public function matchDate($token)
    {
        $matches =[];
        $dateRegex ="/(\d{1,2})\/(\d{1,2})\/(\d{4})/";
        preg_match($dateRegex, $token, $matches);
        return $matches;
    }

    public function matchCurrency($token)
    {
        $matches=[];
        $currencyRegex = '/\d+[.\d+]?\s*\$/';
        preg_match_all($currencyRegex, $token, $matches);
        return  $matches[0]; 
    }

    public function matchEmail($token)
    {
        $emailRegex ='/([a-zA-Z0-9-_.]+)@([a-zA-Z0-9-_.]+).([a-z]{2,})/';
        $matches=[];
        preg_match_all($emailRegex, $token, $matches);
        return $matches[0];
    }
 
    public function matchUrl($token)
    {
        $siteRegex = '#(((https?|ftp)://)?(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i';
        $matches=[];
        preg_match_all($siteRegex, $token, $matches);
        return $matches[0];
    }



    public function readText($filename)
    {
        return Storage::get($filename);
    }

    public function readPDF($filename)
    {
        $parser =  new Parser();
        return $parser->parseFile(storage_path('\\app\\public\\'.$filename))->getText();
    }

    public function readHtml($filename)
    {
        return  file_get_html(storage_path('\\app\\public\\'.$filename))->plaintext;
    }


    public function isStopWord($word)
    {
        return in_array($word, stopwords());
    }


    public function upload(Request $request)
    {
        $f = $request->file('file');
        $path = Storage::putFileAs(
            '/', $f,$f->getClientOriginalName()
        );
        DB::insert('insert into files (file_name) values ( ?)', [$file]);

        $content = $this->readContent($f);
    } 

    public function readContent($file)
    {
        $ext = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName();
        switch($ext){
            case 'txt':
              return $this->readHtml($filename);
              break;
            case 'pdf':
               
                return $this->readPDF($filename);
            break;

            case 'html':
            return $this->readHtml($filename);
                break;
        } 
    } 

    public function stemm($word)
    {
        return Porter::Stem($word);
    }

    public function lemma($word)
    {
        $lemmas = $this-> lemmatizer->getOnlyLemmas($word); 
    	dd($lemmas);
    }

}
