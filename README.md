## About CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API

This CLI program process a local or remote XML file and push the data of the XML file to a Google Spreadsheet via the Google Sheets API [Google Spreadsheet API](https://developers.google.com/sheets/).

The Google Sheets use the REST APIs like [Sheets API](https://developers.google.com/sheets/api) and [Charts API](https://developers.google.com/chart/interactive/docs/spreadsheets/) to interact programmatically with Google Sheets.

## Specification
● The program should reads in a local or remote xml file (configurable as a parameter): This ensures users of the application are able to read and write based on preference via the CLI. An image belows how it's done
![Screenshot of read write operation via the CLI](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/terminal.png)

● Authentication against Google API should be configurable: To use google sheet one needs to be authenticated and to this end you're required to set up a developer account via [Console Google Developer](https://console.cloud.google.com/apis/credentials). Retrieve your client credentials and download your service account credentials in a JSON format. The service account JSON credential should be copied to the storage directory, while other credentials be added to the .env file of your project.
![Screenshot of cloud console](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/consolecloud.png)

● Errors should be written to a logfile: Error handling is very much setup on this project. Errors are written everyday to the Log file and you're able to keep track of daily exceptions and error thrown in the application. Below is a screenshot of the log file

![Screenshot of log file](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/log.png)

## Coding Style
● Which patterns have been used? 
The coding pattern adopted is the creation pattern type where the business logic is hidden into services and traits.<br />

● How easy is it to set up the environment and run your code? 
To set up the project you need to have PHP installed on your machine and then proceed to clone the project. Sign up to google cloud to retrieve your credentials and add to the .env file and then proceed to the terminal. If you don't have a xml you can opt for the local option that lets you send XML to Google Sheet with the data available at the **public directory > coffee_feed.xml** on this repository.

### In the terminal do the followings 

#### run composer install command to install all of the project dependencies </br>

#### run php artisan xml-to-google-spreadsheet to launch the command </br >

This is the CLI command to start the operation and it ships with an optional parameter that let's you specify a file path  </br >

#### run php artisan xml-to-google-spreadsheet coffee_feed.xml </br >

OR if file is avialable via remote location </br >

#### run php artisan xml-to-google-spreadsheet https://raw.githubusercontent.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/master/public/coffee_feed.xml

Then you can follow the options available on the CLI to complete the process. Once the process is done you'll get a "The command is successful!" message in the terminal meaning the file has been successfully uploaded to Google sheet.

![Screenshot of terminal file](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/terminal.png)

![Screenshot of start sheet](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/startsheet.png)

![Screenshot of end sheet](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/endsheet .png)

● How is your code structured? The code is well structure to use a creational design pattern, inheritance, DRY Principle, typehint of parameter and return type to functional declarations and lot more. <br />
● Have you applied SOLID and/or CLEAN CODE principles? Yes <br />
● Are tests available and how have they been set up? Yes, the project has a total of 5 test cases (4 Unit and 1 Feature).

![Screenshot of end sheet](https://github.com/LarrySul/CLI-Send-XML-file-to-Google-Spreadsheet-via-Google-Sheets-API/blob/master/public/screenshots/testcase.png)


