<?php

namespace LetsBonus\Domain\ExternalData\NormalizedDataItem\Service;

use LetsBonus\Domain\ExternalData\NormalizedDataItem\NormalizedDataItem;

/**
 * Class NormalizeTabDataService
 */
class NormalizeTabDataService implements INormalizeDataService
{
    public function normalize(NormalizeDataServiceRequest $request)
    {
        $rows = $this->parseRows($request);

        if (empty($rows) || $rows[0] == null) {
            throw new \InvalidArgumentException('The content is empty');
        }

        $rows = $this->deleteHeaderRow($rows);

        return $this->buildNormalizedDataItems($rows);
    }

    /**
     * @param NormalizeDataServiceRequest $request
     *
     * @return array
     */
    private function parseRows(NormalizeDataServiceRequest $request)
    {
        return str_getcsv($request->data(), "\n");
    }

    /**
     * @param array $rows
     *
     * @return array
     */
    private function deleteHeaderRow($rows)
    {
        return array_slice($rows, 1);
    }

    /**
     * @param $rows
     *
     * @return NormalizedDataItem[]
     */
    private function buildNormalizedDataItems($rows)
    {
        $items = [];
        foreach ($rows as $row) {
            $items[] = $this->buildNormalizedDataItem($row);
        }

        return $items;
    }

    /**
     * @param $row
     *
     * @return NormalizedDataItem
     */
    private function buildNormalizedDataItem($row)
    {
        $columns = $this->getColumnsFromRow($row);

        return new NormalizedDataItem(
            $columns[0],
            $columns[1],
            (float) $columns[2],
            new \DateTime($columns[3]),
            new \DateTime($columns[4]),
            $columns[5],
            $columns[6]
        );
    }

    /**
     * @param $row
     *
     * @return array
     */
    private function getColumnsFromRow($row)
    {
        return str_getcsv($row, "\t");
    }
}
