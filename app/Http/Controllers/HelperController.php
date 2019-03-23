<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use TeamTNT\TNTSearch\TNTSearch;
use Illuminate\Support\Facades\DB;


class HelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corpus = Storage::files('/public');
        dd($corpus);

        foreach ($corpus as $key=> $file) {
            DB::insert('insert into files (id, file_name) values (?, ?)', [$key+1, $file]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tnt = new TNTSearch;

        $tnt->loadConfig([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'searchengine',
            'username'  => 'root',
            'password'  => '',
            'storage'   => '/storage/indexFolder',
            'stemmer'   => \TeamTNT\TNTSearch\Stemmer\PorterStemmer::class//optional
        ]);

        $indexer = $tnt->createIndex('informationRetrival.index');
        $indexer->query('SELECT id, file_name FROM files;');
        $indexer->setLanguage('english');
        $indexer->run();
        $indexer->setPrimaryKey('file_id');
        $indexer->includePrimaryKey();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
