# solar_to_lunar_calendar_converter
A simple php script to convert solar date to lunar date.

## Requirements
PHP version 3.0 or higher

## Install
Copy configs and functions folders into your php script folder. 
Require solarToLunarDate functions in your PHP:
```
require_once 'functions/function_calendar.php';
```

## Usage
```
$arrMyLunarDate = solarToLunarDate($_POST["birthYear"],$_POST["birthMonth"],$_POST["birthDay"]);
```
