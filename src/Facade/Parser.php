<?php 
namespace manhdoan91\BrowserDetect\Facade;

use Illuminate\Support\Facades\Facade;

class Parser extends Facade {

    /**
     * {@inheritDocs}
     */
    protected static function getFacadeAccessor() {  return \manhdoan91\BrowserDetect\Parser::class; }
}