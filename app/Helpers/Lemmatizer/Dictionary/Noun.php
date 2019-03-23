<?php

 namespace App\Helpers\Lemmatizer\Dictionary;

use App\Helpers\Lemmatizer\Dictionary\FindIrregularBaseBehavior\IrregularBaseFinder;
use App\Helpers\Lemmatizer\Dictionary\FindRegularBaseBehavior\NounRegularBaseFinder;
use App\Helpers\Lemmatizer\Lemma;

class Noun extends PartOfSpeech {
  public function __construct() {
    $this->findIrregularBaseBehavior = new IrregularBaseFinder($this);
    $this->findRegularBaseBehavior = new NounRegularBaseFinder($this);
  }

  /**
   * @inheritdoc
   */
  public function getPartOfSpeechAsString() {
    return Lemma::POS_NOUN;
  }

  /**
   * @inheritdoc
   */
  protected function loadWordsList() {
    return require __DIR__ . "/Config/list.noun.php";
  }

  /**
   * @inheritdoc
   */
  protected function loadWordsExceptions() {
    return require __DIR__ . "/Config/exceptions.noun.php";
  }
}
