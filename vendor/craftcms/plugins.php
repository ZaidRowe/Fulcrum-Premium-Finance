<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'doublesecretagency/craft-bootstrap' => 
  array (
    'class' => 'doublesecretagency\\bootstrap\\Bootstrap',
    'basePath' => $vendorDir . '/doublesecretagency/craft-bootstrap/src',
    'handle' => 'bootstrap',
    'aliases' => 
    array (
      '@doublesecretagency/bootstrap' => $vendorDir . '/doublesecretagency/craft-bootstrap/src',
    ),
    'name' => 'Bootstrap',
    'version' => '4.1.3.1',
    'schemaVersion' => '0.0.0',
    'description' => 'Build your site with the Bootstrap front-end framework.',
    'developer' => 'Double Secret Agency',
    'developerUrl' => 'https://www.doublesecretagency.com/plugins',
    'documentationUrl' => 'https://github.com/doublesecretagency/craft-bootstrap/blob/v4/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/doublesecretagency/craft-bootstrap/v4/CHANGELOG.md',
  ),
  'craftcms/contact-form' => 
  array (
    'class' => 'craft\\contactform\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form/src',
    'handle' => 'contact-form',
    'aliases' => 
    array (
      '@craft/contactform' => $vendorDir . '/craftcms/contact-form/src',
    ),
    'name' => 'Contact Form',
    'version' => '2.2.7',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/contact-form/blob/v2/README.md',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.7.1',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
);
