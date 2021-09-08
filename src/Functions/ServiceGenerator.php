<?php
declare(strict_types=1);

namespace Berlioz\Generator\Command\Functions;

use Berlioz\Generator\Command\Enum\GeneratorEnum;
use Berlioz\Generator\Command\Helper\GeneratorInput;

class ServiceGenerator
{
        
    /**
     * serviceGenerator
     *
     * @return void
     */
    public function serviceGeneratorStart(): void
    {
        $serviceName = GeneratorInput::input("Please enter the name of your service" . PHP_EOL);
        $serviceFile = $serviceName . ".php";
        mkdir(GeneratorEnum::SERVICES_PATH . $serviceName, 0700);
        $fh = fopen(GeneratorEnum::SERVICES_PATH . $serviceName . '/' . $serviceFile, 'w') or die("can't open file");
        fwrite($fh, $this->serviceFileGenerator($serviceName));

        print_r(PHP_EOL);
        fclose($fh);

    }

       
    /**
     * serviceFileGenerator
     *
     * @param  mixed $serviceName
     * @return string
     */
    private function serviceFileGenerator(string $serviceName): string
    {
        $file_content = '<?php' . PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= 'declare(strict_types=1);' . PHP_EOL;
        $file_content .= 'namespace Sireniti\App\Service'.'\\'.$serviceName.'\\'.$serviceName.';'. PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= 'class ' . $serviceName . ' ' . PHP_EOL;
        $file_content .= '{' . PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= '}' . PHP_EOL;

        return $file_content;
    }
    
    /**
     * input
     *
     * @param  mixed $prompt
     * @return string
     */
    public function input(string $prompt = null): string
    {
        echo $prompt;
        $handle = fopen("php://stdin", "r");
        $output = fgets($handle);

        return trim($output);
    }
}