<?php
return array( 
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\DOSCG',
                        'action' => 'index',
                    ),
                ),
            ),
            'doscg' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/[:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ),
                    'defaults' => array(
                        'controller' => 'Application\Controller\DOSCG',
                        'action' => 'index',
                        'id' => '',
                    ),
                ),
            ),
            'google' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/google[/:act]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Application\Controller\DOSCG',
                        'action' => 'google',
                    ),
                ),
            ),
            'line' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/line',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Application\Controller\DOSCG',
                        'action' => 'line',
                        'id' => '',
                    ),
                ),
            ),
            'cv' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/cv',
                    'defaults' => array(
                        'controller' => 'Application\Controller\DOSCG',
                        'action' => 'cv',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\DOSCG' => 'Application\Controller\DOSCGController',
        ),
    ),
    'view_manager' => array(
        'base_path' => '/',
        'doctype' => 'HTML5',
        'template_map' => array(
            'application/doscg/index'   => __DIR__ . '/../view/doscg/index.phtml',
            'application/doscg/api'     => __DIR__ . '/../view/doscg/api.phtml',
            'application/doscg/google'  => __DIR__ . '/../view/doscg/google.phtml',
            'application/doscg/line'    => __DIR__ . '/../view/doscg/line.phtml',
            'application/doscg/cv'      => __DIR__ . '/../view/doscg/cv.phtml',
            'layout/layout'             => __DIR__ . '/../view/layout/layout.phtml',
            'error/404'                 => __DIR__ . '/../view/error/404.phtml',
            'error/index'               => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
    ),
    // The following registers our custom view 
    // helper classes in view plugin manager.
    'view_helpers' => array(
        'invokables' => array(
            'mainMenu' => 'Application\View\Helper\Menu',
        )
    ),   
); 