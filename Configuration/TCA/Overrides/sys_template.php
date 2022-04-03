<?php

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'chatbot_frontend',
    'Configuration/TypoScript',
    'Chatbot Frontend'
);