<?php
// auto-generated by sfPhpConfigHandler
// date: 2014/06/11 03:31:55
ini_set('magic_quotes_runtime', '');
ini_set('log_errors', '1');
ini_set('arg_separator.output', '&amp;');
if (ini_get('magic_quotes_gpc') != false)
{
  sfLogger::getInstance()->warning('{sfPhpConfigHandler} php.ini "magic_quotes_gpc" key is better set to "false" (current value is "\'\'" - php.ini location: "/etc/php5/apache2/php.ini").');
}

if (ini_get('register_globals') != false)
{
  sfLogger::getInstance()->warning('{sfPhpConfigHandler} php.ini "register_globals" key is better set to "false" (current value is "\'\'" - php.ini location: "/etc/php5/apache2/php.ini").');
}

if (ini_get('session.auto_start') != false)
{
  sfLogger::getInstance()->warning('{sfPhpConfigHandler} php.ini "session.auto_start" key is better set to "false" (current value is "\'0\'" - php.ini location: "/etc/php5/apache2/php.ini").');
}

