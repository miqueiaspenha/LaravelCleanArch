<?php

require __DIR__ . '/vendor/autoload.php';

use SOLID\Report\Report;
// use SOLID\Export\ExportCSV;
use SOLID\Export\ExportHTML;

// $exportCSV = new ExportCSV();
$exportHTML = new ExportHTML();
echo (new Report($exportHTML))->viewReport();
