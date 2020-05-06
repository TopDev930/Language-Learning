<?php


namespace App\Http\Controllers\Page;


use App\Http\Controllers\LanguagePageController;

class SpanishForTeachersPageController extends LanguagePageController {
    protected function make()
    {
        parent::make();
        $this->tplConfig->addJS( ['jquery', 'flexslider', 'flexslider_component'] );
    }
}