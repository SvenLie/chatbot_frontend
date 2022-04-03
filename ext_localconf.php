<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ChatbotFrontend',
    'Chatbot',
    [
        \SvenLie\ChatbotFrontend\Controller\ChatbotController::class => 'index',
    ],
    // non-cacheable actions
    [
        \SvenLie\ChatbotFrontend\Controller\ChatbotController::class => 'index',
    ],
);