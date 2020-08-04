<?php

use Jinas\ISO\ISO3166;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test_return_a_country_by_alpha2_with_lowercase_letters()
    {
        $iso = new ISO3166();

        $result = $iso->whereAlpha2('no');

        $this->assertEquals('Norway', $result['country']);
        $this->assertEquals('NO', $result['alpha2']);
        $this->assertEquals('NOR', $result['alpha3']);
        $this->assertEquals('578', $result['numeric']);
    }

    public function test_return_a_country_by_alpha2_with_uppercase_letters()
    {
        $iso = new ISO3166();

        $result = $iso->whereAlpha2('BA');

        $this->assertEquals('Bosnia and Herzegovina', $result['country']);
        $this->assertEquals('BA', $result['alpha2']);
        $this->assertEquals('BIH', $result['alpha3']);
        $this->assertEquals('070', $result['numeric']);
    }

    public function test_return_a_country_by_alpha3_with_lowercase_letters()
    {
        $iso = new ISO3166();

        $result = $iso->whereAlpha3('png');

        $this->assertEquals('Papua New Guinea', $result['country']);
        $this->assertEquals('PG', $result['alpha2']);
        $this->assertEquals('PNG', $result['alpha3']);
        $this->assertEquals('598', $result['numeric']);
    }

    public function test_return_a_country_by_alpha3_with_uppercase_letters()
    {
        $iso = new ISO3166();

        $result = $iso->whereAlpha3('PNG');

        $this->assertEquals('Papua New Guinea', $result['country']);
        $this->assertEquals('PG', $result['alpha2']);
        $this->assertEquals('PNG', $result['alpha3']);
        $this->assertEquals('598', $result['numeric']);
    }

    public function test_return_a_country_by_country_name_with_lowercase_letters()
    {
        $iso = new ISO3166();

        $result = $iso->whereCountry('norway');

        $this->assertEquals('Norway', $result['country']);
        $this->assertEquals('NO', $result['alpha2']);
        $this->assertEquals('NOR', $result['alpha3']);
        $this->assertEquals('578', $result['numeric']);
    }

    public function test_return_a_country_by_country_name_with_uppercase_letters()
    {
        $iso = new ISO3166();

        $result = $iso->whereCountry('MALDIVES');

        $this->assertEquals('Maldives', $result['country']);
        $this->assertEquals('MV', $result['alpha2']);
        $this->assertEquals('MDV', $result['alpha3']);
        $this->assertEquals('462', $result['numeric']);
    }

    public function test_return_a_country_by_numeric()
    {
        $iso = new ISO3166();

        $result = $iso->whereNumeric(533);

        $this->assertEquals('Aruba', $result['country']);
        $this->assertEquals('AW', $result['alpha2']);
        $this->assertEquals('ABW', $result['alpha3']);
        $this->assertEquals('533', $result['numeric']);
    }
}
