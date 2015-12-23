<?php
return array(
    'controllers' => array(
        'factories' => array(
            'Api\\V1\\Rpc\\Me\\Controller' => 'Api\\V1\\Rpc\\Me\\MeControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'api.rpc.me' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/me',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rpc\\Me\\Controller',
                        'action' => 'me',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'api.rpc.me',
        ),
    ),
    'zf-rpc' => array(
        'Api\\V1\\Rpc\\Me\\Controller' => array(
            'service_name' => 'me',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'api.rpc.me',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Api\\V1\\Rpc\\Me\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Api\\V1\\Rpc\\Me\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
            ),
        ),
        'content_type_whitelist' => array(
            'Api\\V1\\Rpc\\Me\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Api\\V1\\Rpc\\Me\\Controller' => array(
                'actions' => array(
                    'me' => array(
                        'GET' => true,
                        'POST' => false,
                        'PUT' => false,
                        'PATCH' => false,
                        'DELETE' => false,
                    ),
                ),
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'IExperts\User\Entity\User' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rpc.me',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'IExperts\User\Hydrator\User',
            ),
         )
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Api\\V1\\Rpc\\Me\\Controller' => 'HalJson',
        ),
    ),
);
