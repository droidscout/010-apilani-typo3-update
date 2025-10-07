<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$N1pYbUdISmdFZmZLd2NESw$sk1DyFzkj74zv6qguuYjsM59+qYAXfEbpiCYXScg/8I',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'db',
                'defaultTableOptions' => [
                    'charset' => 'utf8mb4',
                    'collation' => 'utf8mb4_unicode_ci',
                ],
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => 'db',
                'port' => 3306,
                'user' => 'db',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'ns_all_sliders' => [
            'jquery' => '0',
        ],
        't3sbootstrap' => [
            'animateCss' => '0',
            'bootswatch' => 'none',
            'cTypeClass' => '0',
            'chapter' => '0',
            'color' => '1',
            'container' => '1',
            'cssCodeEditor' => '0',
            'customHeaderClass' => '',
            'customScss' => '0',
            'customSubtitleColor' => '',
            'customTitleColor' => '',
            'editScss' => '0',
            'extNews' => '1',
            'extraStyle' => '0',
            'figureClass' => '',
            'flexformExtend' => '0',
            'flexformMinCol' => '0',
            'flexformModify' => '0',
            'flexformNoDefault' => '0',
            'fontawesomepagetitle' => '1',
            'footerInfo' => '1',
            'imageClass' => '',
            'imgCopyright' => '0',
            'imgtag' => '0',
            'keepVariables' => '0',
            'lazyLoad' => '0',
            'linkHoverEffect' => '0',
            'origimage' => '0',
            'preview' => '1',
            'previewClosedCollapsible' => '0',
            'ratio' => '0',
            'sectionOrder' => '0',
            'sitepackage' => '0',
            'spacing' => '0',
            't3sbconcatenate' => '0',
            't3sbminify' => '0',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => true,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '1c7b7e68ca74a3820572a1abe95aebc5688812236ef2e926d3a023adab00718e1938cadaee6fc29a41e02ef34ef0dffe',
        'exceptionalErrors' => 12290,
        'features' => [
            'extbase.consistentDateTimeHandling' => true,
            'frontend.cache.autoTagging' => true,
            'security.system.enforceAllowedFileExtensions' => true,
        ],
        'sitename' => 'APILANI Update',
        'systemMaintainers' => [
            1,
        ],
    ],
];
