<?php

namespace SOLID\Export;

class ExportHTML implements ExportInterface
{
    public function doExport($data): string
    {
        return 'HTML relatório';
    }
}
