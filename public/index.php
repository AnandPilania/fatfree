<?php

$f3=require(__DIR__.'/../lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9){ trigger_error('PCRE version is out of date'); }

$f3->config(__DIR__.'/../config/config.ini');

$routes = require __DIR__.'/../routes/web.php';

$f3->run();
