<?php

 namespace App\Helpers\Lemmatizer\Dictionary;

use App\Helpers\Lemmatizer\Dictionary\FindIrregularBaseBehavior\IrregularBaseFinder;
use App\Helpers\Lemmatizer\Dictionary\FindRegularBaseBehavior\AdjectiveRegularBaseFinder;
use App\Helpers\Lemmatizer\Lemma;

class Adverb extends PartOfSpeech {
  public function __construct() {
    $this->findIrregularBaseBehavior = new IrregularBaseFinder($this);
    $this->findRegularBaseBehavior = new AdjectiveRegularBaseFinder($this);
  }

  /**
   * @inheritdoc
   */
  public function getPartOfSpeechAsString() {
    return Lemma::POS_ADVERB;
  }

  /**
   * @inheritdoc
   */
  protected function loadWordsList() {
    return require __DIR__ . "/Config/list.adverb.php";
  }

  /**
   * @inheritdoc
   */
  protected function loadWordsExceptions() {
    return require __DIR__ . "/Config/exceptions.adverb.php";
  }
}
