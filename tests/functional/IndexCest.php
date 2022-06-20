<?php

class IndexCest
{
    public function _before(\FunctionalTester $I)
    {
        $I->amOnRoute('site/index');
    }

    public function openIndexPage(\FunctionalTester $I)
    {
        $I->see('Congratulations!', 'h1');
    }
}
