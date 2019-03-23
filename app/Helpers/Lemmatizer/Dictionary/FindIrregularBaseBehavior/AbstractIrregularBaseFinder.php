<?php

 namespace App\Helpers\Lemmatizer\Dictionary\FindIrregularBaseBehavior;

use App\Helpers\Lemmatizer\Dictionary\PartOfSpeech;
use App\Helpers\Lemmatizer\Word;

abstract class AbstractIrregularBaseFinder {
  /**
   * @var PartOfSpeech
   */
  protected $partOfSpeech;

  /**
   * @param PartOfSpeech $partOfSpeech
   */
  public function __construct(PartOfSpeech $partOfSpeech) {
    $this->partOfSpeech = $partOfSpeech;
  }

  /**
   * @param Word $word
   *
   * @return null|string
   */
  abstract public function getIrregularBase(Word $word);
}