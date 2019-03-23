<?php
 function uploadCorpus()
{
	$corpus = Storage::files('/');

	foreach ($corpus as $key=> $file) {
		DB::insert('insert into files (id, file_name) values (?, ?)', [$key+1, $file]);
		$content = explode(' ',Storage::get($file));
		foreach ($content as $k => $word) {
			$stemm = Stemm::stem(strtolower($word), 'en');
			if(! in_array($stemm , $stopwords) ){
				
				DB::insert('insert into words (id, word, stemm) values (?, ?, ?)', [$k+1, strtolower($word ), $stemm]);
				DB::insert('insert into word_file (wordId, FileId, TF) values (?, ?, ?)', [$k+1 , $key +1,0]);
			}
		}
	}
}

