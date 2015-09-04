<?php

namespace Rossey\Blns;

final class NaughtyStringsFactory
{
    /**
     * @var NaughtyString[]
     */
    private $naughtyStrings = [];

    /**
     * @param string $file optional file location
     */
    public function __construct($file = null)
    {
        $this->import($file);
    }

    /**
     * @param string $file
     */
    private function import($file)
    {
        $fileData = file_get_contents($file ? $file : __DIR__ . '/../resources/blns.txt');

        $naughtyStrings = explode("\n", $fileData);

        foreach ($naughtyStrings as $naughtyString) {
            $this->naughtyStrings[] = NaughtyString::create($naughtyString);
        }
    }

    /**
     * @return NaughtyString[]
     */
    public function getNaughtyStrings()
    {
        return $this->naughtyStrings;
    }
}
