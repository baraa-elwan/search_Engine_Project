<?php

 namespace App\Helpers\Lemmatizer\Dictionary;

use App\Helpers\Lemmatizer\Dictionary\FindIrregularBaseBehavior\IrregularBaseFinder;
use App\Helpers\Lemmatizer\Dictionary\FindRegularBaseBehavior\VerbRegularBaseFinder;
use App\Helpers\Lemmatizer\Lemma;

class Verb extends PartOfSpeech {
  public function __construct() {
    $this->findIrregularBaseBehavior = new IrregularBaseFinder($this);
    $this->findRegularBaseBehavior = new VerbRegularBaseFinder($this);
  }

  /**
   * @return string
   */
  public function getPartOfSpeechAsString() {
    return Lemma::POS_VERB;
  }

  /**
   * @inheritdoc
   */
  protected function loadWordsList() {
    return require __DIR__ . "/Config/list.verb.php";
  }

  /**
   * @inheritdoc
   */
  protected function loadWordsExceptions() {
    return require __DIR__ . "/Config/exceptions.verb.php";
  }
}
