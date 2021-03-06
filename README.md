# Triad Examples
Here you can find use cases for Triad PHP framework.

- Empty Project 
contains very basic way to implement MVP handler.
- REST Service 
contains sample of JSON REST API server that handles simple user creation and editing.
- Smarty Webpage
contains sample of custom template engine implementation
- Minimal
very basic and simple html handler without using MVP and namespaces 

In order to make them working you have to download and copy 
latest [Triad PHP Framework](https://github.com/triadphp/triad) into `/libs/` directory. 
If you want to use Redis in REST Service example, download copy 
latest [Predis PHP library](https://github.com/nrk/predis) into `/libs/` directory - othewise 
disable redis in config.php file.

# Prerequisites
- PHP 5.3 or better
- PDO compatible database for REST Service example

## Projects structure
- `app/` - application root (constant `APP_DIR`)
- `app/config.php` - main configuration file, containing service settings
- `app/bootstrap.php` - loads framework and autoloader, define default response type here
- `app/Exception/` - optional - custom app exceptions
- `app/Main/Application.php` - custom application initialization and error handling
- `app/Main/Presenter.php` - app parent presenter containing most common method and most used services
- `app/Models/` - optional - custom app models
- `app/Presenters/Home.php` - default presenter if no other match 
- `app/Presenters/` - custom application presenters
- `app/Templates/` - optional - smarty or other template engine templates
- `libs/Triad` - place Triad PHP Framework here (so that Load.php is under `libs/Triad/Load.php`)
- `libs/` - optional - other application libraries (constant `LIBS_DIR`)
- `tmp/` - optional - temp storage (constant `TMP_DIR`)
- `www/index.php` or `index.php` - loader for application - includes `app/bootstrap.php`
- `www/` or `/` - folder containing webpage assets, static resources

## Creating a new application
- Take example of your choice and change main namespace name in app folder -  
e.g. for `Empty Project` replace all `MyEmptyProject` to desired name.
- update `app/config.php` and define service and webpage settings (database dns, redis, ...)
- optional - implement custom response type (smarty), check `Smarty Webpage/app/Main/SmartyResponse.php` example
- set default response type in `app/bootstrap.php`
- initialize custom services in `app/Main/Application.php` (init)
- do custom error handling in `app/Main/Application.php` (handleException)
- define shortcuts for presenters in `app/Main/Presenter.php`
- start creating and editing presenters in `app/Presenters/`...

## Author
- [Marek Vavrecan](mailto:vavrecan@gmail.com)
- [Donate by PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=DX479UBWGSMUG&lc=US&item_name=PHP%20Triad&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted)

## License
- [GNU General Public License, version 3](http://www.gnu.org/licenses/gpl-3.0.html)
