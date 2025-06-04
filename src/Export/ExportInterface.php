<?php

namespace SOLID\Export;

interface ExportInterface
{
    public function doExport($data): string;
}
