<?php

require __DIR__ . '/vendor/autoload.php';

use SOLID\Report\Report;
use SOLID\Export\ExportCSV;

$exportCSV = new ExportCSV();

echo (new Report($exportCSV))->viewReport();
