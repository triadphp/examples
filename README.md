Triad Examples
========

Here you can find use cases for Triad PHP framework.

- Empty Project 
contains very basic way to implement MVP handler.

- REST Service 
contains sample of JSON REST API server that handles simple user creation and editing.


In order to make them working you have to download and copy 
latest [Triad PHP Framework](https://github.com/triadphp/triad) into /libs/ directory. 
If you want to use Redis in REST Service example, download copy 
latest [Predis PHP library](https://github.com/nrk/predis) into /libs/ directory - othewise 
disable redis in config.php file.

Creating a new application from example
--------
- Take example of your choice and change main namespace name in app folder -  
e.g. for Empty Project replace all MyEmptyProject to desired name.
- update app/config.php and define service and webpage settings (database dns, redis, ...)
- optional - implement custom response type (smarty) 
- set default response type in app/bootstrap.php
- initialize custom services in app/Main/Application.php (init)
- do custom error handling in app/Main/Application.php (handleException)
- define shortcuts for presenters in app/Main/Presenter.php
- start creating and editing presenters in app/Presenters/...