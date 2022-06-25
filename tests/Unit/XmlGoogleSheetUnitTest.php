<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Traits\XmlSpreadsheetTrait;
use App\Services\GoogleSheetServices;

class XmlGoogleSheetUnitTest extends TestCase
{
    use  XmlSpreadsheetTrait;

    public function test_format_xml_data()
    {
        $response_xml_data = file_get_contents('public/coffee_feed.xml');
        $test = $this->decodeXmlDataToArray($response_xml_data);
        $this->assertIsArray($test);
    }

    public function test_decode_xml_data_to_array()
    {
        $data  = [[
            'entity_id' => '340',
            'CategoryName' => '',
            'sku' => '',
            'name' => '20',
            'description' => '',
            'shortdesc' => '',
            'price' => '41.6000',
            'link' => 'http://www.coffeeforless.com/green-mountain-coffee-french-roast-ground-coffee-24-2-2oz-bag.html',
            'image' => 'http://mcdn.coffeeforless.com/media/catalog/product/images/uploads/intro/frac_box.jpg',
            'Brand' => '',
            'Rating' => '',
            'CaffineType' => '',
            'Count' => '0',
            'Flavored' => '24',
            'Seasonal' => 'No',
            'InStock' => 'No',
            'Facebook' => '1',
            'IsKCup' => '0',
        ]];
        $test = $this->formatXmlDataItemToArray($data);
        $test_array = [$this->getSheetHeader(), array_values($data[0])];
        $this->assertEquals($test_array, $test);
    }

    public function test_array_to_string_converter()
    {
        $data = ['male'];
        $test = $this->convertToStringIfArray($data);
        $this->assertEquals('male', $test);
    }

    public function test_get_google_client_verification()
    {
        $client = (new GoogleSheetServices())->getClient();
        $this->assertIsObject($client);
    }
}
