<?php

namespace SOLID\Export;

use SOLID\Export\ExportBase;

class ExportHTML extends ExportBase
{
    public function doExport($data)
    {
        return 'HTML relatório';
    }
}
