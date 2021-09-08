<?php
declare(strict_types=1);
namespace Berlioz\Generator\Command\Helper;


/**
 * Class GeneratorInput
 *
 * @package Berlioz\Generator\Command\Helper
 */
class GeneratorInput
{
    /**
     * @param string|null $prompt
     *
     * @return string
     */
    public static function input(string $prompt = null): string
    {
        echo $prompt;
        $handle = fopen("php://stdin", "r");
        $output = fgets($handle);

        return trim($output);
    }
}