<?php
return array(
    'router' => array(
        'routes' => array(
        ),
    ),
    'hydrators' => array(
        'factories' => array(
        ),
        'shared' => array(
        )
    ),
    'service_manager' => array(
        'invokables' => array(
        ),
        'factories' => array(
        ),
        'aliases' => array(
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
        ),
    ),
    'zf-rest' => array(
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
        ),
        'accept_whitelist' => array(
        ),
        'content_type_whitelist' => array(
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
        ),
    ),
    'zf-content-validation' => array(
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
        ),
    ),
    'input_filter_specs' => array(
    ),
    'doctrine' => array(
        'driver' => array(
            'image_db_driver' => array(
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\XmlDriver',
                'paths' => array(
                    0 => __DIR__ . '/entity',
                ),
                'cache' => 'array',
            ),
            'orm_default' => array(
                'drivers' => array(
                    'IExperts\\User\\Entity' => 'image_db_driver',
                ),
            ),
        ),
    ),
    'data-fixture' => array(
        'fixtures' => __DIR__ . '/../src/IExperts/User/Fixture'
    ),
);
