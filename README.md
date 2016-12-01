# solar_to_lunar_calendar_converter
A simple php script to convert solar date to lunar date(R.O.C calendar).

## Requirements
- PHP version 3.0 or higher
- The valid solar date is 1882/1/1 ~ 2049/12/31 

## Install
Copy configs and functions folders into your php script folder. 
Require solarToLunarDate functions in your PHP:
```
require_once 'functions/function_calendar.php';
```

## Usage
```
$arrLunarDate = solarToLunarDate($_POST["birthYear"],$_POST["birthMonth"],$_POST["birthDay"]);
```

## Example
```
require_once 'functions/function_calendar.php';
$arrLunarDate = solarToLunarDate(1980,12,25);
echo $arrLunarDate[0];
echo $arrLunarDate[1];
echo $arrLunarDate[2];
```
output is 69/11/19



