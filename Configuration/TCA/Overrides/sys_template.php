<?php
defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ku_bootstrap_buttons',
    'Configuration/TypoScript',
    'KU Bootstrap Buttons'
);