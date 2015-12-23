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
            'iexperts.user.mapper.user' => 'IExperts\User\Mapper\UserMapperFactory'
        ),
        'aliases' => array(
        ),
    ),
    'hydrators' => array(
        'factories' => array(
            'IExperts\User\Hydrator\User' => 'IExperts\User\Service\Factory\UserHydratorFactory',
        ),
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
