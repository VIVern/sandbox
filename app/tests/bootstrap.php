<?php

require_once 'vendor/autoload.php';
\VCR\VCR::configure()->setCassettePath('tests/tmdb_cassete');
\VCR\VCR::configure()->setStorage('json');
\VCR\VCR::configure()->setMode('new_episodes');
\VCR\VCR::turnOn();