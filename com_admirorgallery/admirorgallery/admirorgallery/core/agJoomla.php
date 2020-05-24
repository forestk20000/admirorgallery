<?php
/**
 * @version     5.5.0
 * @package     Admiror Gallery (plugin)
 * @subpackage  admirorgallery
 * @author      Igor Kekeljevic & Nikola Vasiljevski
 * @copyright   Copyright (C) 2010 - 2017 http://www.admiror-design-studio.com All Rights Reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die();

// Import library dependencies
jimport('joomla.event.plugin');
jimport('joomla.plugin.plugin');
jimport('joomla.filesystem.folder');

class agJoomla implements CmsInterface
{

    private $doc;

    function __construct($document)
    {
        $this->doc = JFactory::getDocument();
    }

    public function LoadClass(): void
    {}

    public function AddJsFile(string $path): void
    {
        $this->doc->addScript($path);
    }

    public function GetFiles(string $path): array
    {
        return JFolder::files($path);
    }

    public function AddToPathway(string $item, string $link): void
    {
        JFactory::getApplication()->getPathway()->addItem($item, $link);
    }

    public function GetFolders(string $path): array
    {
        return JFolder::folders($path);
    }

    public function GetAlbumPath(string $key): ?string
    {
        return JFactory::getApplication()->input->getPath($key);
    }

    public function SetTitle(string $title): void
    {
        JFactory::getDocument()->setTitle($title);
    }

    public function GetActiveLanguageTag(string $path): string
    {
        return strtolower(JFactory::getLanguage()->getTag());
    }

    public function CreateFolder(string $path): bool
    {
        return JFolder::create($path, 0755);
    }

    public function AddCss(string $path): void
    {
        $this->doc->addStyleSheet($path);
    }

    public function GetActivePage(string $key): ?int
    {
        return JFactory::getApplication()->input->getInt($key);
    }

    public function BreadcrumbsNeeded(): bool
    {
        $active = JFactory::getApplication()->getMenu()->getActive();
        return (isset($active) && $active->query['view'] == 'layout');
    }

    public function Text(int $string_id): string
    {
        return JText::_($string_id);
    }
    
    public function TextConcat(string $string_id, $value): string
    {
        return JText::sprintf($string_id, $value);
    }

    public static function SecurityCheck(): void
    {
        defined('_JEXEC') or die();
    }

    public function AddJsDeclaration(string $script): void
    {
        $this->doc->addScriptDeclaration($script);
    }
}
