<?php
return array(
    'controllers' => array(
        'factories' => array(
            'SONApi\\V1\\Rpc\\Sum\\Controller' => 'SONApi\\V1\\Rpc\\Sum\\SumControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'son-api.rpc.sum' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/sum',
                    'defaults' => array(
                        'controller' => 'SONApi\\V1\\Rpc\\Sum\\Controller',
                        'action' => 'sum',
                    ),
                ),
            ),
            'son-api.rest.clientes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/clientes[/:clientes_id]',
                    'defaults' => array(
                        'controller' => 'SONApi\\V1\\Rest\\Clientes\\Controller',
                    ),
                ),
            ),
            'son-api.rest.tasks' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/tasks[/:tasks_id]',
                    'defaults' => array(
                        'controller' => 'SONApi\\V1\\Rest\\Tasks\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'son-api.rpc.sum',
            1 => 'son-api.rest.clientes',
            2 => 'son-api.rest.tasks',
        ),
    ),
    'zf-rpc' => array(
        'SONApi\\V1\\Rpc\\Sum\\Controller' => array(
            'service_name' => 'Sum',
            'http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'route_name' => 'son-api.rpc.sum',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'SONApi\\V1\\Rpc\\Sum\\Controller' => 'Json',
            'SONApi\\V1\\Rest\\Clientes\\Controller' => 'HalJson',
            'SONApi\\V1\\Rest\\Tasks\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'SONApi\\V1\\Rpc\\Sum\\Controller' => array(
                0 => 'application/vnd.son-api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'SONApi\\V1\\Rest\\Clientes\\Controller' => array(
                0 => 'application/vnd.son-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'SONApi\\V1\\Rest\\Tasks\\Controller' => array(
                0 => 'application/vnd.son-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'SONApi\\V1\\Rpc\\Sum\\Controller' => array(
                0 => 'application/vnd.son-api.v1+json',
                1 => 'application/json',
            ),
            'SONApi\\V1\\Rest\\Clientes\\Controller' => array(
                0 => 'application/vnd.son-api.v1+json',
                1 => 'application/json',
            ),
            'SONApi\\V1\\Rest\\Tasks\\Controller' => array(
                0 => 'application/vnd.son-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'SONApi\\V1\\Rest\\Clientes\\ClientesResource' => 'SONApi\\V1\\Rest\\Clientes\\ClientesResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'SONApi\\V1\\Rest\\Clientes\\Controller' => array(
            'listener' => 'SONApi\\V1\\Rest\\Clientes\\ClientesResource',
            'route_name' => 'son-api.rest.clientes',
            'route_identifier_name' => 'clientes_id',
            'collection_name' => 'clientes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'SONApi\\V1\\Rest\\Clientes\\ClientesEntity',
            'collection_class' => 'SONApi\\V1\\Rest\\Clientes\\ClientesCollection',
            'service_name' => 'Clientes',
        ),
        'SONApi\\V1\\Rest\\Tasks\\Controller' => array(
            'listener' => 'SONApi\\V1\\Rest\\Tasks\\TasksResource',
            'route_name' => 'son-api.rest.tasks',
            'route_identifier_name' => 'tasks_id',
            'collection_name' => 'tasks',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'SONApi\\V1\\Rest\\Tasks\\TasksEntity',
            'collection_class' => 'SONApi\\V1\\Rest\\Tasks\\TasksCollection',
            'service_name' => 'tasks',
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'SONApi\\V1\\Rest\\Clientes\\ClientesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'son-api.rest.clientes',
                'route_identifier_name' => 'clientes_id',
                'hydrator' => 'Zend\\Hydrator\\ObjectProperty',
            ),
            'SONApi\\V1\\Rest\\Clientes\\ClientesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'son-api.rest.clientes',
                'route_identifier_name' => 'clientes_id',
                'is_collection' => true,
            ),
            'SONApi\\V1\\Rest\\Tasks\\TasksEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'son-api.rest.tasks',
                'route_identifier_name' => 'tasks_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'SONApi\\V1\\Rest\\Tasks\\TasksCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'son-api.rest.tasks',
                'route_identifier_name' => 'tasks_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'SONApi\\V1\\Rest\\Tasks\\TasksResource' => array(
                'adapter_name' => 'MysqlAdapter',
                'table_name' => 'tasks',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'SONApi\\V1\\Rest\\Tasks\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'SONApi\\V1\\Rest\\Tasks\\Controller' => array(
            'input_filter' => 'SONApi\\V1\\Rest\\Tasks\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'SONApi\\V1\\Rest\\Tasks\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
            ),
        ),
    ),
);
