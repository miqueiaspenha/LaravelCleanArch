<?php

require __DIR__ . '/vendor/autoload.php';

use SOLID\Report\Report;
// use SOLID\Export\ExportCSV;
// use SOLID\Export\ExportHTML;
use SOLID\Export\ExportJSON;

// $export = new ExportCSV();
// $export = new ExportHTML();
$export = new ExportJSON();
echo (new Report($export))->viewReport();
