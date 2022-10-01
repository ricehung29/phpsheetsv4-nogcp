# phpsheetsv4-nogcp

![](https://img.shields.io/github/stars/ricehung29/phpsheetsv4-nogcp.svg) 
![](https://img.shields.io/github/forks/ricehung29/phpsheetsv4-nogcp.svg) 
![](https://img.shields.io/github/issues/ricehung29/phpsheetsv4-nogcp.svg) 

## Introduction 
  A new way for accessing Google Sheets data , simple yet powerful  .

## Features
  - Access Google Sheets data without GCP API Key
  - No limits with G-suite account
  - No extra environment needed
  - Hiding data source
  - Easy to configure 
  - Ready to use


## Usage (Developing)
### Prepare Google sheets 

  1. Publish to web as csv format <br>
  ![screen-gif](https://github.com/ricehung29/phpsheetsv4-nogcp/blob/main/source/first_step.gif?raw=true)
  
  2. Copy sheets key <br>
  <img src="https://github.com/ricehung29/phpsheetsv4-nogcp/blob/main/source/second_step.png?raw=true" width=40% ></img>
  
### Applicate to PHP projects
  1. Download ```phpsheetsv4-nogcp.php``` and place it into directory <br>
  <img src="https://github.com/ricehung29/phpsheetsv4-nogcp/blob/main/source/file_directory.png?raw=true" width=40% ></img>
  
  2. Using the function <br>
  Reminder : the system will automatically delete the first row of excel
  
  ```
  include 'phpsheetsv4-nogcp.php';
  $lines = getSheets('links you get'); 
  ```
  
  <img src="https://github.com/ricehung29/phpsheetsv4-nogcp/blob/main/source/thrid.png?raw=true" width=40%></img>
  
  3. Use the returned data <br>
  Using a foreach , we can print the data out and display it .
  (Left : Google Sheet , Right : Webpage)
  
  <img src="https://github.com/ricehung29/phpsheetsv4-nogcp/blob/main/source/excel_compare.png?raw=true" width=40%></img>
  <img src="https://github.com/ricehung29/phpsheetsv4-nogcp/blob/main/source/web_example.png?raw=true" width=40%></img>

## License
[MIT](http://opensource.org/licenses/MIT)

(C) 2022 ricehung29
