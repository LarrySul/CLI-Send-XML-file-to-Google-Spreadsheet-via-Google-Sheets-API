## CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API 😎😎


This CLI program is built on the LARAVEL FRAMEWORK. The program process a local or remote XML file and push the data of the XML file to a Google Spreadsheet via the Google Sheets API [Google Spreadsheet API](https://developers.google.com/sheets/).

The Google Sheets API use the REST APIs like [Sheets API](https://developers.google.com/sheets/api) and [Charts API](https://developers.google.com/chart/interactive/docs/spreadsheets/) to interact programmatically with Google Sheets.

## Repo Overview 🥳🥳

The repository contains source code on how to read XML data, format it and send to Googlesheet using the Googlesheet API.

Specifications in the clone include

<li> The program reads in a local or remote xml file (configurable as a parameter)</li> </br>

![Screenshot of read write operation via the CLI](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/terminal.png)


<li>Configurable Authentication against Google API with Service Account and Google cloud credentials </li>


<li> Writing of errors to logfile </li>


<li> Single CLI command to automate the read and write process in less than 5secs </li>

## Requirements 🔧🔧

<li> <a href="https://console.developers.google.com/">Register</a> and create a google console developer account set up a project retrieve your client credentials and then create a service account (download details in JSON).</li>

<li> Download <a href="https://www.php.net/downloads.php"> PHP V7 </a> and above. </li>

<li> Install <a href="https://getcomposer.org/download/"> Composer </a> </li>

## Steps to run locally 🧑‍💻👩‍💻

<li> Clone this repository: </li>

<pre> git clone https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/ </pre>

<li> Install dependencies: </li>

<pre> composer install </pre>

<li> Add the API key of your Google developer console and download the service account JSON to the storage directory. </li>

<li> Open the CLI in preferred editor and run the command: </li>

<pre> php artisan xml-to-google-spreadsheet </pre>

The command also accepts an optional parameter with the file path either local or remotely. The clone already ships with a default file coffee_feed.xml in the public directory.

<pre> php artisan xml-to-google-spreadsheet coffee_feed.xml </pre>

Once the command is done you'll get a success message in the CLI 😜 </br>

![Screenshot of start sheet](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/startsheet.png)


## Coding Style 🚀🚀

<li> Which patterns have been used: The coding pattern adopted is the creation pattern type where the business logic is hidden into services and traits.</li>

<li> How is your code structured: The code is well structure to use a creational design pattern, inheritance, DRY Principle, typehint of parameter and return type to functional declarations and lot more. </li>

<li> Have you applied SOLID and/or CLEAN CODE principles: Yes </li>

<li> Are tests available and how have they been set up : Yes, the project has a total of 5 test cases (4 Unit and 1 Feature). </li> </br>

![Screenshot of end sheet](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/testcase.png)


