<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(function ($extKey = 'mst_news') {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extKey,
        'Configuration/TypoScript/',
        'mst news'
    );
    
});

