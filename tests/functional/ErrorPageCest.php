<?php

class ErrorPageCest
{
    public function _before(\FunctionalTester $I)
    {
        $I->amOnRoute('site/error');
    }

    public function openErrorPage(\FunctionalTester $I)
    {
        $I->see('Not Found (#404)', 'h1');
        $I->seeResponseCodeIs(404);
    }
}
