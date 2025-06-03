<?php

namespace SOLID\Export;

class ExportCSV extends ExportBase
{

    public function doExport($data)
    {
        return implode(', ', $data);
    }
}
