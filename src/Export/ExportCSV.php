<?php

namespace SOLID\Export;

class ExportCSV implements ExportInterface
{

    public function doExport($data): string
    {
        return implode(', ', $data);
    }
}
