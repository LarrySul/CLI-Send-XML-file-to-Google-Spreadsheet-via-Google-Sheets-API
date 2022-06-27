<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Enums\FileLocationEnum;
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
        $mock_write_sheet_result = array(
            'spreadsheetId' => '1zd........-F8FaqY',
            'updatedCells' => 62100,
            'updatedColumns' => 18,
            'updatedDataType' => 'Google\\Service\\Sheets\\ValueRange',
            'updatedDataDataType' => '',
            'updatedRange' => 'Sheet1!A1:R3450',
            'updatedRows' => 3450,
            'internal_gapi_mappings' => 
           array (
           ),
            'modelData' => 
           array (
           ),
            'processed' => 
           array (
           ),
        );
        
        $this->artisan('xml-to-google-spreadsheet')
                ->expectsQuestion('Enter preferred xml data path', FileLocationEnum::LOCAL)
                ->expectsQuestion('Enter filename in public directory', 'coffee_feed.xml')
                ->assertSuccessful();
                
        $this->assertArrayHasKey('updatedRows', $mock_write_sheet_result, 'Check if updated rows is available');
        $this->assertEquals(3450, $mock_write_sheet_result['updatedRows'], 'Test if updated rows in sheet is 3450');
    }
}
