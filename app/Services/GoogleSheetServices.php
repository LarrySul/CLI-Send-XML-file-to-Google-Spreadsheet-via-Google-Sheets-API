<?php

namespace App\Services;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;


class GoogleSheetServices
{
    public $client, $service, $spreadsheetId, $range;
    public function __construct()
    {
        $this->client = $this->getClient();
        $this->service = new Sheets($this->client);
        $this->spreadsheetId = config('google.sheet_id');
        $this->range = 'A:Z';
    }


    public function getClient()
    {
        $client = new Client();
        $client->setApplicationName('Google Sheets Demo');
        $client->setRedirectUri('https://localhost:8000/sheets');
        $client->setScopes(Sheets::SPREADSHEETS);
        $client->setAuthConfig(config('google.service.file'));
        $client->setAccessType('offline');
        return $client;
    }


    public function readSheetData()
    {
        $result = $this->service->spreadsheets_values->get($this->spreadsheetId, $this->range);
        return $result;
    }

    public function writeSheetData($xml_data)
    {
        $body = new ValueRange([
            'values' => $xml_data
        ]);

        $params = [
            'valueInputOption' => 'RAW'
        ];
       
        $result = $this->service->spreadsheets_values->update($this->spreadsheetId, $this->range,
        $body, $params);

        info(json_encode($result));
    }
}


