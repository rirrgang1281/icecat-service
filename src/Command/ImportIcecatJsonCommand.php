<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Command;

use Sdn\IcecatService\Service\ProductService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('sdn:icecat:json:import', description: 'Import Icecat JSON')]
class ImportIcecatJsonCommand extends Command
{
    public function __construct(
        private readonly ProductService $productService
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption('language', 'lang', InputOption::VALUE_OPTIONAL, 'Language of the product content')
            ->addOption('brand', 'br', InputOption::VALUE_OPTIONAL, 'Brand name')
            ->addOption('productCode', 'pc', InputOption::VALUE_OPTIONAL, 'Manufacturer product code')
            ->addOption('importList', 'ipl', InputOption::VALUE_OPTIONAL, 'Import a list of brands and manufacturer product codes');
    }

    /**
     * @SuppressWarnings("unused")
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $productContent = null;
        $language = '';
        $brand = '';
        $productCode = '';
        $output->writeln('Lese JSON aus');

        if (is_string($input->getOption('language'))) {
            $language = $input->getOption('language');
        }

        if (is_string($input->getOption('brand'))) {
            $brand = $input->getOption('brand');
        }

        if (is_string($input->getOption('productCode'))) {
            $productCode = $input->getOption('productCode');
        }

        if ($input->getOption('language')) {
            $productContent = $this->productService->getProductContent(
                $language,
                $brand,
                $productCode
            );
        }

        if (!$input->getOption('language')) {
            $productContent = $this->productService->getProductContentByBrandAndProductCode(
                $brand,
                $productCode
            );
        }

        return self::SUCCESS;
    }
}
