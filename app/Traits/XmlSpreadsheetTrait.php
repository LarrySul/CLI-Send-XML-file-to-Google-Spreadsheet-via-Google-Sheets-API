<?php

namespace App\Traits;

trait XmlSpreadsheetTrait
{
    public function formatXmlDataItemToArray(array $items) :array
    {
        $data = [];
        foreach ($items as $key => $item){
            $data[] = [
                $item['entity_id'] ?? '',
                $this->convertToStringIfArray($item['CategoryName']),
                $item['sku'],
                $this->convertToStringIfArray($item['name']),
                $this->convertToStringIfArray($item['description']),
                $this->convertToStringIfArray($item['shortdesc']),
                $this->convertToStringIfArray($item['price']),
                $item['link'] ?? '',
                $item['image'] ?? '',
                $this->convertToStringIfArray($item['Brand']),
                $this->convertToStringIfArray($item['Rating']),
                $item['CaffineType'] ?? '',
                $this->convertToStringIfArray($item['Count']),
                $this->convertToStringIfArray($item['Flavored']),
                $this->convertToStringIfArray($item['Seasonal']),
                $item['InStock'] ?? '',
                $item['Facebook'] ?? '',
                $item['IsKCup'] ?? '',
            ];
        }
        return $data;
    }

    public function decodeXmlDataToArray (string $xmlDataString) :array
    {
        $xmlObject = simplexml_load_string($xmlDataString);
        $json = json_encode($xmlObject);
        return (json_decode($json, true))['item']; 
    }

    public function convertToStringIfArray ($data): ?string
    {
        return  is_array($data) ? implode(', ', $data) : $data;
    }

    public function preparedGoogleSheetData(string $response_xml_data) : array
    {   $xmlData = $this->decodeXmlDataToArray($response_xml_data);
        return $this->formatXmlDataItemToArray($xmlData);
    }
}


