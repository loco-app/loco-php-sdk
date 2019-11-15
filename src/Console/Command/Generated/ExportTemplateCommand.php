<?php

namespace Loco\Console\Command\Generated;

use Loco\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Auto-generated Loco API console command.
 */
class ExportTemplateCommand extends Command
{
    /**
     * Configure loco:export:template command
     *
     * @internal
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     */
    protected function configure()
    {
        $this
            ->setName('loco:export:template')
            ->setMethod('exportTemplate')
            ->setDescription('Export a template containing only source keys')
            ->addArgument('ext', InputArgument::OPTIONAL, 'Target file type specified as a file extension', 'json')
            ->addOption('format', '', InputOption::VALUE_REQUIRED, 'More specific format of file type. e.g. <code>symfony</code> applies to <code>php</code>, <code>xlf</code> &amp; <code>yml</code>', null)
            ->addOption('filter', '', InputOption::VALUE_REQUIRED, 'Filter assets by comma-separated tag names. Match any tag with `*` and negate tags by prefixing with `!`', null)
            ->addOption('index', '', InputOption::VALUE_REQUIRED, 'Override default lookup key for the file format: "id", "text" or a custom alias', null)
            ->addOption('source', '', InputOption::VALUE_REQUIRED, 'Specify alternative source locale instead of project default', null)
            ->addOption('namespace', '', InputOption::VALUE_REQUIRED, 'Override the project name for some language packs that use it as a key prefix', null)
            ->addOption('fallback', '', InputOption::VALUE_REQUIRED, 'Fallback locale for untranslated assets, specified as short code. e.g. `en` or `en_GB`', null)
            ->addOption('order', '', InputOption::VALUE_REQUIRED, 'Export translations according to asset order', null)
            ->addOption('status', '', InputOption::VALUE_REQUIRED, 'Export translations with a specific status or flag. Negate values by prefixing with `!`. e.g. "translated", or "!fuzzy".', null)
            ->addOption('printf', '', InputOption::VALUE_REQUIRED, 'Force alternative "printf" style. <a href="https://localise.biz/help/developers/printf">See string formatting</a>', null)
            ->addOption('charset', '', InputOption::VALUE_REQUIRED, 'Specify preferred character encoding. Alternative to `Accept-Charset` header but accepts a single value which must be valid.', null)
            ->addOption('breaks', '', InputOption::VALUE_REQUIRED, 'Force platform-specific line-endings. Default is Unix (LF) breaks.', null)
            ->addOption('no-comments', '', InputOption::VALUE_REQUIRED, 'Disable rendering of redundant inline comments including the Loco banner.', null)
            ->addOption('no-folding', '', InputOption::VALUE_REQUIRED, 'Protect <a href="https://localise.biz/help/developers/asset-ids#folding">dot-separated keys</a> so that `foo.bar` is not folded into object properties.', null)
        ;
        parent::configure();
    }
}
