<?php

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

use Gulliver72\ModifiedStdLanguageModule\Classes\StdLanguageModule;
use RobinTheHood\ModifiedStdModule\Classes\StdModule;

require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class fs_italian_language_package extends StdModule
{
  
  function __construct() 
  {
    $this->init('MODULE_FS_ITALIAN_LANGUAGE_PACKAGE');
    $this->keys_dispnone = ['MODULE_FS_ITALIAN_LANGUAGE_PACKAGE_STATUS'];
  }

  function process($file) 
  {
    xtc_redirect(xtc_href_link_admin('admin/' . FILENAME_LANGUAGES));
  }

  public function keys()
  {
    return [];
  }

  function getDescription()
  {
    if (!$this->getEnabled()) return TEXT_LANGUAGE_DESRIPTION;
    $languages_id_query = xtc_db_query("SELECT languages_id, status, status_admin FROM languages WHERE code = 'it'");
    $languages_id_result = xtc_db_fetch_array($languages_id_query);
    $description = TEXT_LANGUAGE_CONFIGURATION . '<br/><br/>';
    $description .= sprintf(TEXT_LANGUAGE_STATUS, $languages_id_result['status'] == 1 ?  TEXT_ACTIVE : TEXT_INACTIVE);
    $description .= '<br/><br/>' . sprintf(TEXT_LANGUAGE_STATUS_ADMIN, $languages_id_result['status_admin'] == 1 ?  TEXT_ACTIVE : TEXT_INACTIVE);

    return $description;
  }

  function display() 
  {
    $languages_id_query = xtc_db_query("SELECT languages_id, status, status_admin FROM languages WHERE code = 'it'");
    $languages_id_result = xtc_db_fetch_array($languages_id_query);
    $description = TEXT_LANGUAGE_CONFIGURATION . '<br/><br/>';
    $description .= sprintf(TEXT_LANGUAGE_STATUS, $languages_id_result['status'] == 1 ? TEXT_ACTIVE : TEXT_INACTIVE);
    $description .= '<br/><br/>' . sprintf(TEXT_LANGUAGE_STATUS_ADMIN, $languages_id_result['status_admin'] == 1 ? TEXT_ACTIVE : TEXT_INACTIVE);

    return ['text' => $description . '<br /><div align="center">' . xtc_button(BUTTON_EDIT) .
                      xtc_button_link(BUTTON_CANCEL, xtc_href_link(FILENAME_MODULE_EXPORT, 'set=' . $_GET['set'] . '&module=fs_italian_language_package')) . "</div>"];
  }
    
  function install() 
  {
    $sort_order_query = xtc_db_query("SELECT sort_order FROM languages ORDER BY sort_order DESC LIMIT 1");
    $sort_order_result = xtc_db_fetch_array($sort_order_query);
    $italianLanguageData = [
      'name' => 'Italiana',
      'code' => 'it',
      'image' => 'icon.gif',
      'sort_order' => $sort_order_result['sort_order'] ? (int)$sort_order_result['sort_order']  + 1 : 1,
      'language_charset' => 'utf8',
      'directory' => 'italian'
    ];
    $this->stdLanguageModule->init($italianLanguageData, 0);
    parent::install();
  }

  function remove() 
  {
    $stdLanguageModule = new StdLanguageModule;
    $stdLanguageModule->setLanguageIdByCode('it');
    $stdLanguageModule->deleteLanguage();
    parent::remove();
  }

}