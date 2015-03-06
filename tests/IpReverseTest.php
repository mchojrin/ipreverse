<?php

require_once __DIR__.'/../vendor/autoload.php';

libxml_use_internal_errors(true);

use Arall\IpReverse;

class IpReverseTest extends PHPUnit_Framework_TestCase
{

    public function testBingLookup()
    {
        $ipReverse = new IpReverse('69.50.225.155', 'bing');
        $this->assertContains('www.eff.org', $ipReverse->hosts);
    }

    public function testHurricaneLookup()
    {
        $ipReverse = new IpReverse('69.50.225.155', 'hurricane');
        $this->assertContains('eff.org', $ipReverse->hosts);
    }
}
