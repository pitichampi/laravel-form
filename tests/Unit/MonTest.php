<?php
/*
  Created by Pierre Bernardeau.
  For Influa
  Date: 11/10/2019
  Time: 10:56

        _
    ,--'_`--.
  ,/( \   / )\.
 //  \ \_/ /  \\
|/___/     \___\|
((___       ___))    Join the Empire !!!  ﴾̵ ̵◎̵ ̵﴿
|\   \  _  /   /|
 \\  / / \ \  //
  `\(_/___\_)/'
    `--._.--'

 */
namespace Test\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MonTest extends TestCase
{
    /**
     * Un test
     *
     * @return void
     * @dataProvider arrayProvider
     */
    public function testExample($test)
    {
        $this->assertContains($test,[1,2,3],"erreur du contains");
    }

    public function arrayProvider()
    {
        return [
            [1],
            [2],
            [3]
        ];

    }
}
