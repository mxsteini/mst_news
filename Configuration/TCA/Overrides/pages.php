<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(function ($extKey = 'mst_news') {

  $register = GeneralUtility::makeInstance(\MST\MstYaml2Tca\Tca\Registry::class);
  $register->loadFile($extKey, GeneralUtility::getFileAbsFileName('EXT:' . $extKey . '/Configuration/Yaml/pages.yaml'));

});

