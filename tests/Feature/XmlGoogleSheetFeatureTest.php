<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Traits\XmlSpreadsheetTrait;
use Illuminate\Testing\TestResponse;
use App\Services\GoogleSheetServices;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class XmlGoogleSheetFeatureTest extends TestCase
{
    use  XmlSpreadsheetTrait;

    public function test_write_xml_data_to_google_sheet()
    {
        $response_xml_data = file_get_contents('public/coffee_feed.xml');
        $data = $this->preparedGoogleSheetData($response_xml_data);
        $test = (new GoogleSheetServices())->writeSheetData($data);
        $this->assertInstanceOf("Google\\Service\\Sheets\\UpdateValuesResponse", $test);
    }
}
