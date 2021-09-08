<?php
declare(strict_types=1);

namespace Berlioz\Generator\Command\Functions;
use Berlioz\Generator\Command\Enum\GeneratorEnum;
use Berlioz\Generator\Command\Helper\GeneratorInput;

class ControllerGenerator
{    
    
    /**
     * controllerFileGenerator
     *
     * @param  mixed $controllerName
     * @return string
     */
    public function controllerFileGenerator($controllerName): string
    {
        $file_content = '<?php' . PHP_EOL;
        $file_content .= "/**" . PHP_EOL;
        $file_content .= "* This file is part of Berlioz framework." . PHP_EOL;
        $file_content .= "*" . PHP_EOL;
        $file_content .= "* @license   https://opensource.org/licenses/MIT MIT License" . PHP_EOL;
        $file_content .= "* @copyright 2020 Ronan GIRON" . PHP_EOL;
        $file_content .= "* @author    Ronan GIRON <https://github.com/ElGigi>" . PHP_EOL;
        $file_content .= "*" . PHP_EOL;
        $file_content .= "* For the full copyright and license information, please view the LICENSE" . PHP_EOL;
        $file_content .= "* file that was distributed with this source code, to the root." . PHP_EOL;
        $file_content .= "*/" . PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= 'declare(strict_types=1);' . PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= 'namespace App\Controller;' . PHP_EOL;
        $file_content .= 'use Berlioz\HttpCore\Controller\AbstractController;' . PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= 'class ' . $controllerName . 'Controller extends AbstractController' . PHP_EOL;
        $file_content .= '{' . PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= PHP_EOL;
        $file_content .= '}' . PHP_EOL;

        return $file_content;
    }
    
       
    /**
     * controllerGenerator
     *
     * @return string
     */
    public function controllerGenerator(): string
    {
        $controllerName = GeneratorInput::input("Please enter the name of your controller" . PHP_EOL);
        $controllerFile = $controllerName . "Controller.php";
        mkdir(GeneratorEnum::CONTROLLERS_PATH . $controllerName, 0700);
        $fh = fopen(GeneratorEnum::CONTROLLERS_PATH . $controllerName . $controllerFile, 'w') or die("can't open file");
        fwrite($fh, $this->controllerFileGenerator($controllerName));

        print_r(PHP_EOL);
        fclose($fh);

        return "Thank you !" . PHP_EOL;
    }
}
