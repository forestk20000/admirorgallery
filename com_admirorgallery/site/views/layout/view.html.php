<?php
/**
 * @version     5.2.0
 * @package     Admiror Gallery (component)
 * @author      Igor Kekeljevic & Nikola Vasiljevski
 * @copyright   Copyright (C) 2010 - 2018 http://www.admiror-design-studio.com All Rights Reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.view');

class AdmirorgalleryViewLayout extends JViewLegacy
{

    function display($tpl = null)
    {

	$mainframe = JFactory::getApplication('site');
	$params = $mainframe->getParams();

	$this->assign( 'galleryName', $params->get( 'galleryName' ) );
	$this->assign( 'template', $params->get( 'template' ) );
	$this->assign( 'thumbWidth', $params->get( 'thumbWidth' ) );
	$this->assign( 'thumbHeight', $params->get( 'thumbHeight' ) );
	$this->assign( 'thumbAutoSize', $params->get( 'thumbAutoSize' ) );
	$this->assign( 'arrange', $params->get( 'arrange' ) );
	$this->assign( 'newImageTag', $params->get( 'newImageTag' ) );
	$this->assign( 'newImageDays', $params->get( 'newImageTag_days' ) );
	$this->assign( 'frameWidth', $params->get( 'frame_width' ) );
	$this->assign( 'frameHeight', $params->get( 'frame_height' ) );
	$this->assign( 'showSignature', $params->get( 'showSignature' ) );
	$this->assign( 'popupEngine', $params->get( 'popupEngine' ) );
	$this->assign( 'foregroundColor', $params->get( 'foregroundColor' ) );
	$this->assign( 'backgroundColor', $params->get( 'backgroundColor' ) );
	$this->assign( 'highliteColor', $params->get( 'highliteColor' ) );
	$this->assign( 'plainTextCaptions', $params->get( 'plainTextCaptions' ) );

        // Albums Support
	$this->assign( 'albumUse', $params->get( 'albumUse' ) );
        // Paginations Support
	$this->assign( 'paginUse', $params->get( 'paginUse' ) );
	$this->assign( 'paginImagesPerGallery', $params->get( 'paginImagesPerGallery' ) );
    

        parent::display($tpl);

    }
}