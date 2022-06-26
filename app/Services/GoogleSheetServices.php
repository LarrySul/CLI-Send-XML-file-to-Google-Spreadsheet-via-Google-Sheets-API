<?php

namespace App\Services;

use config;
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


    public function getClient() :object
    {
        $client = new Client();
        $client->setApplicationName(config('google.application_name'));
        $client->setRedirectUri(config('google.redirect_uri'));
        $client->setScopes(Sheets::SPREADSHEETS);
        $client->setAuthConfig(config('google.service.file'));
        $client->setAccessType(config('google.access_type'));
        return $client;
    }

    public function writeSheetData(array $xml_data) :object
    {
        $body = new ValueRange([
            'values' => $xml_data
        ]);

        $params = [
            'valueInputOption' => 'RAW'
        ];
       
        $result = $this->service->spreadsheets_values->update($this->spreadsheetId, $this->range,
        $body, $params);

        return $result;
    }
}


