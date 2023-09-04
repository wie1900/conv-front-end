<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



# Number to Words Converter (Front-End)

This is a front-end-app providing conversion from a number to words, what is sometimes required for invoices, contracts etc. It currently supports numbers from one to Nonillion plus two digits after separation point (optionally).

## Screenshot

![ntwc](resources/assets/images/ntwc.gif)

## Usage
Insert any number with length 1-30 digits plus 1-2 digits separated by 'dot' for tenths and hundredths (optionally), e.g. 20 or 20.99 and click _Let convert_. To clear both input fields choose _Clear fields_.

## Architecture
The conversion provides class _NWConv_:

app \ Custom \ [NWConv.php](/app/Custom/NWConv.php)

The length of the input number can be extended by adding new values in the _$names_ array and changing validating rule in the controller to the appropriate value (currently: 30):

app \ Http \ Controllers \ [ConvController.php](/app/Http/Controllers/ConvController.php)

## Tests
The application has been tested using PHPUnit tests:

tests \ Feature \ [nvconvTest.php](/tests/Feature/nvconvTest.php)

## What was used

- Laravel 9
- PHP 8
- Bootstrap 5
- Javascript
- PHPUnit

## Working version

The working version is available at:

[https://app.deadygo.com/conv](https://app.deadygo.com/conv)
