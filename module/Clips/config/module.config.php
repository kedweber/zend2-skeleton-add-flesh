<?php
/**
 * CLiPs - WEBerStudio.net
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @license   All rights reserved
 */
$developmentEnvironment = (isset($_SERVER['APPLICATION_ENV']) && $_SERVER['APPLICATION_ENV'] == 'development')? true: false;
return array(
    'router' => array(
        'routes' => array(
            'help' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/help',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller' => 'Question',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/admin',
//                    'constraints' => array(
//                        'model' => '[a-zA-Z][a-zA-Z0-9_-]*',
//                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller'    => 'Question',
                        'action'        => 'index',
                    ),
                ),
            ),
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'login' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/login',
                    'defaults' => array(
                        'page' => 1,
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller' => 'Account',
                        'action' => 'login',
                    ),
                ),
            ),
            'logout' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/logout',
                    'defaults' => array(
                        'page' => 1,
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller' => 'Account',
                        'action' => 'logout',
                    ),
                ),
            ),
            'register' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/register',
                    'defaults' => array(
                        'page' => 1,
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller' => 'Account',
                        'action' => 'register',
                    ),
                ),
            ),
            'profile' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/profile',
                    'defaults' => array(
                        'page' => 1,
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller' => 'Account',
                        'action' => 'register',
                    ),
                ),
            ),
            'password' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/password/reset',
                    'defaults' => array(
                        'page' => 1,
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller' => 'Account',
                        'action' => 'passwordReset',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/clips',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Clips\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            // AbstractFactoryInterface implementations, or any PHP callbacks
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            // Aliasing a FQCN to a service name, known Service name and upon another alias
            'translator' => 'MvcTranslator',
        ),
        'factories' => array(
            // TODO
            // 'ServiceNames' => names and instances of classes implementing FactoryInterface, or PHP callbacks
            //'Access'     => 'Clips\Factory\Service\UserServiceFactory',
            //'RegisterForm' => function ($serviceManager) {
            //    $form = new Clips\Form\Register();
            //    $form->setInputFilter($serviceManager->get('RegistrationInputFilter'));
            //    return $form;
            //},
            //'Clips\Controller\Question' => 'Clips\Factory\Controller\QuestionControllerFactory',
//            'userService' => function ($sm) {
//                /** @noinspection PhpUndefinedMethodInspection */
//                return new \Clips\Service\UserService($sm->get('clips'), $sm);
//            },
        ),
        'invokables' => array(
            // 'ServiceNames' => 'Clips\ClassNames'
            'UserInputFilter' => 'SomeModule\InputFilter\User',
        ),
        'services' => array(
            // 'ServiceNames' => 'Clips\Service\ServiceName()'
            //'UserService' => new Clips\Service\UserService(),
        ),
        'shared' => array(
            // Sharing rights: to Singleton or Not to Singleton
            //'RegisterForm' => false,
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Clips\Controller\Index' => 'Clips\Controller\IndexController',
            'Clips\Controller\Account' => 'Clips\Controller\AccountController',
            'Clips\Controller\Section' => 'Clips\Controller\SectionController',
            'Clips\Controller\Question' => 'Clips\Controller\QuestionController'
        ),
        'factories' => array(
            // TODO Factories and Repositories for Entity Injection
            //'Clips\Controller\Question' => 'Clips\Factory\Form\QuestionFormFactory',
        ),
    ),
    'form_elements' => array(
        'factories' => array(
            //'Clips\Form\QuestionForm' => 'Clips\Factory\Form\QuestionFormFactory',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    // DOCTRINE ORM SETTINGS [With tons of comments because it does not hurt performance, and improves yours]
    // So array_merge($that, $brain) in your Corpus Callosum and pray it survives your Hippocampus.
    'doctrine' => array(
        // Metadata Mapping driver configuration
        'driver' => array(
            'Clips_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    __DIR__ . '/../src/Clips/Entity'
                )
            ),
            // Configuration for service `doctrine.driver.orm_default` service
            'orm_default' => array(
                // By default, the ORM module uses a driver chain. This allows multiple
                // modules to define their own entities. Keeping it individualistic, just sayin'.
                'class'   => 'Doctrine\ORM\Mapping\Driver\DriverChain',
                // Map of driver names to be used within this driver chain, indexed by
                // entity namespace
                'drivers' => array(
                    'Clips\Entity' =>  'Clips_driver'
                ),
            ),
        ),
        // See http://docs.doctrine-project.org/en/latest/reference/configuration.html
        'configuration' => array(
            // Configuration for service `doctrine.configuration.orm_default` service
            'orm_default' => array(

                // CACHE
                // All CACHE services can be found as `doctrine.cache.$thisSetting` unless otherwise noted
                // metadata cache instance to use. The retrieved service name will
                'metadata_cache' => 'array',
                // DQL queries parsing cache instance to use. The retrieved service
                // name will be `doctrine.cache.$thisSetting`
                'query_cache' => 'array',
                // ResultSet cache to use.
                'result_cache' => 'array',
                // Hydration cache to use.
                'hydration_cache' => 'array',
                // Second level cache configuration (see doc to learn about configuration)
                'second_level_cache' => array(),

                // DRIVER
                // Mapping DRIVER instance to use, here the default chained driver.
                // The retrieved service name will be `doctrine.driver.$thisSetting`
                'driver'            => 'orm_default',

                // PROXIES
                // Generate PROXIES automatically (turn off for production)
                'generate_proxies' => $developmentEnvironment,
                // directory where proxies will be stored. By default, this is in
                // the `data` directory of your application
                // 'proxy_dir'         => 'data/DoctrineORMModule/Proxy',
                // namespace for generated proxy classes
                'proxy_namespace'   => 'DoctrineORMModule\Proxy',

                // FILTERS
                // SQL filters. See http://docs.doctrine-project.org/en/latest/reference/filters.html
                'filters'           => array(),

                // Custom DQL functions.
                // You can grab common MySQL ones at https://github.com/beberlei/DoctrineExtensions
                // Further docs at http://docs.doctrine-project.org/en/latest/cookbook/dql-user-defined-functions.html
                'datetime_functions' => array(),
                'string_functions' => array(),
                // Declare Custom Doctrine Query Language (DQL) Functions
                'numeric_functions' => array(
                    //'ROUND' => 'Path\To\My\Query\round'
                ),

                // Declare Custom Types
                'types' => array(
                    //'GEODETIC' => 'Modulename\Types\Mercator',
                    //'KedWeber' => 'Uniqueunicoded'
                ),
                // Set a Default Repository
                //'default_repository_class_name' => 'SomeCustomRepository'
            ),
        ),
        'connection' => array(
            'orm_default' => array(
                // Register Type Mappings
                'doctrine_type_mappings' => array(
                    // 'ENUM' => 'string' //Doctrine Type Mapping entry.
                ),
                // Set a Doctrine type comment (DC2Type:myType)
                'doctrineCommentedTypes' => array(
                    //'KedWeber'
                ),
            ),
        ),
        'entity_resolver' => array(
            'orm_default' => array(
                //Define Relationships with Abstract Classes and Interfaces (ResolveTargetEntityListener)
                'resolvers' => array(
                    //'Clips\\InvoiceModule\\Model\\InvoiceSubjectInterface', 'Clips\\CustomerModule\\Entity\\Customer'
                )
            )
        )
    ),
);
