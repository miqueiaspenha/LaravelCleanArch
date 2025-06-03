<?php

namespace SOLID\Report;

use SOLID\Export\ExportBase;

class Report
{
    public function __construct(public ExportBase $export) {}

    public function viewReport()
    {
        $reportData = $this->getReport();
        return $this->export->doExport($reportData);
    }

    public function getReport(): array
    {
        return [
            'data',
            'data2',
            'insight 1'
        ];
    }
}
