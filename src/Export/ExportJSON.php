<?php

namespace SOLID\Export;

class ExportJSON implements ExportInterface
{

    public function doExport($data): string
    {
        return json_encode($data);
    }
}
