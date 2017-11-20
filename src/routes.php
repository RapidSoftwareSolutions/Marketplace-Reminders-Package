<?php
$routes = [
'webhookEvent',
    'metadata',
    'listReminders',
    'getSingleReminder',
    'createEmailReminder',
    'createSmsReminder',
    'createWebhookReminder',
    'updateReminder',
    'deleteReminder',
    'getAccountUsage'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

