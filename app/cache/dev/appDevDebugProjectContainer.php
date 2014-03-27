<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.cache' => 'getAssetic_CacheService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.yui_css' => 'getAssetic_Filter_YuiCssService',
            'assetic.filter.yui_js' => 'getAssetic_Filter_YuiJsService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assetic.value_supplier.default' => 'getAssetic_ValueSupplier_DefaultService',
            'bazinga.exposetranslation.controller' => 'getBazinga_Exposetranslation_ControllerService',
            'bazinga.exposetranslation.dumper.translation_dumper' => 'getBazinga_Exposetranslation_Dumper_TranslationDumperService',
            'bazinga.exposetranslation.finder.translation_finder' => 'getBazinga_Exposetranslation_Finder_TranslationFinderService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'ccdn_forum_forum.component.crumb_builder' => 'getCcdnForumForum_Component_CrumbBuilderService',
            'ccdn_forum_forum.component.crumb_factory' => 'getCcdnForumForum_Component_CrumbFactoryService',
            'ccdn_forum_forum.component.event_listener.flash' => 'getCcdnForumForum_Component_EventListener_FlashService',
            'ccdn_forum_forum.component.event_listener.stats' => 'getCcdnForumForum_Component_EventListener_StatsService',
            'ccdn_forum_forum.component.event_listener.subscriber' => 'getCcdnForumForum_Component_EventListener_SubscriberService',
            'ccdn_forum_forum.component.flood_control' => 'getCcdnForumForum_Component_FloodControlService',
            'ccdn_forum_forum.component.helper.pagination_config' => 'getCcdnForumForum_Component_Helper_PaginationConfigService',
            'ccdn_forum_forum.component.helper.post_lock' => 'getCcdnForumForum_Component_Helper_PostLockService',
            'ccdn_forum_forum.component.helper.role' => 'getCcdnForumForum_Component_Helper_RoleService',
            'ccdn_forum_forum.component.integrator.dashboard' => 'getCcdnForumForum_Component_Integrator_DashboardService',
            'ccdn_forum_forum.component.security.authorizer' => 'getCcdnForumForum_Component_Security_AuthorizerService',
            'ccdn_forum_forum.component.twig_extension.authorizer' => 'getCcdnForumForum_Component_TwigExtension_AuthorizerService',
            'ccdn_forum_forum.component.twig_extension.board_list' => 'getCcdnForumForum_Component_TwigExtension_BoardListService',
            'ccdn_forum_forum.form.handler.board_create' => 'getCcdnForumForum_Form_Handler_BoardCreateService',
            'ccdn_forum_forum.form.handler.board_delete' => 'getCcdnForumForum_Form_Handler_BoardDeleteService',
            'ccdn_forum_forum.form.handler.board_update' => 'getCcdnForumForum_Form_Handler_BoardUpdateService',
            'ccdn_forum_forum.form.handler.category_create' => 'getCcdnForumForum_Form_Handler_CategoryCreateService',
            'ccdn_forum_forum.form.handler.category_delete' => 'getCcdnForumForum_Form_Handler_CategoryDeleteService',
            'ccdn_forum_forum.form.handler.category_update' => 'getCcdnForumForum_Form_Handler_CategoryUpdateService',
            'ccdn_forum_forum.form.handler.change_topics_board' => 'getCcdnForumForum_Form_Handler_ChangeTopicsBoardService',
            'ccdn_forum_forum.form.handler.forum_create' => 'getCcdnForumForum_Form_Handler_ForumCreateService',
            'ccdn_forum_forum.form.handler.forum_delete' => 'getCcdnForumForum_Form_Handler_ForumDeleteService',
            'ccdn_forum_forum.form.handler.forum_update' => 'getCcdnForumForum_Form_Handler_ForumUpdateService',
            'ccdn_forum_forum.form.handler.post_create' => 'getCcdnForumForum_Form_Handler_PostCreateService',
            'ccdn_forum_forum.form.handler.post_delete' => 'getCcdnForumForum_Form_Handler_PostDeleteService',
            'ccdn_forum_forum.form.handler.post_unlock' => 'getCcdnForumForum_Form_Handler_PostUnlockService',
            'ccdn_forum_forum.form.handler.post_update' => 'getCcdnForumForum_Form_Handler_PostUpdateService',
            'ccdn_forum_forum.form.handler.topic_create' => 'getCcdnForumForum_Form_Handler_TopicCreateService',
            'ccdn_forum_forum.form.handler.topic_delete' => 'getCcdnForumForum_Form_Handler_TopicDeleteService',
            'ccdn_forum_forum.form.handler.topic_update' => 'getCcdnForumForum_Form_Handler_TopicUpdateService',
            'ccdn_forum_forum.form.type.board_create' => 'getCcdnForumForum_Form_Type_BoardCreateService',
            'ccdn_forum_forum.form.type.board_delete' => 'getCcdnForumForum_Form_Type_BoardDeleteService',
            'ccdn_forum_forum.form.type.board_update' => 'getCcdnForumForum_Form_Type_BoardUpdateService',
            'ccdn_forum_forum.form.type.category_create' => 'getCcdnForumForum_Form_Type_CategoryCreateService',
            'ccdn_forum_forum.form.type.category_delete' => 'getCcdnForumForum_Form_Type_CategoryDeleteService',
            'ccdn_forum_forum.form.type.category_update' => 'getCcdnForumForum_Form_Type_CategoryUpdateService',
            'ccdn_forum_forum.form.type.change_topics_board' => 'getCcdnForumForum_Form_Type_ChangeTopicsBoardService',
            'ccdn_forum_forum.form.type.forum_create' => 'getCcdnForumForum_Form_Type_ForumCreateService',
            'ccdn_forum_forum.form.type.forum_delete' => 'getCcdnForumForum_Form_Type_ForumDeleteService',
            'ccdn_forum_forum.form.type.forum_update' => 'getCcdnForumForum_Form_Type_ForumUpdateService',
            'ccdn_forum_forum.form.type.post_create' => 'getCcdnForumForum_Form_Type_PostCreateService',
            'ccdn_forum_forum.form.type.post_delete' => 'getCcdnForumForum_Form_Type_PostDeleteService',
            'ccdn_forum_forum.form.type.post_unlock' => 'getCcdnForumForum_Form_Type_PostUnlockService',
            'ccdn_forum_forum.form.type.post_update' => 'getCcdnForumForum_Form_Type_PostUpdateService',
            'ccdn_forum_forum.form.type.topic_create' => 'getCcdnForumForum_Form_Type_TopicCreateService',
            'ccdn_forum_forum.form.type.topic_delete' => 'getCcdnForumForum_Form_Type_TopicDeleteService',
            'ccdn_forum_forum.form.type.topic_update' => 'getCcdnForumForum_Form_Type_TopicUpdateService',
            'ccdn_forum_forum.gateway.board' => 'getCcdnForumForum_Gateway_BoardService',
            'ccdn_forum_forum.gateway.category' => 'getCcdnForumForum_Gateway_CategoryService',
            'ccdn_forum_forum.gateway.forum' => 'getCcdnForumForum_Gateway_ForumService',
            'ccdn_forum_forum.gateway.post' => 'getCcdnForumForum_Gateway_PostService',
            'ccdn_forum_forum.gateway.registry' => 'getCcdnForumForum_Gateway_RegistryService',
            'ccdn_forum_forum.gateway.subscription' => 'getCcdnForumForum_Gateway_SubscriptionService',
            'ccdn_forum_forum.gateway.topic' => 'getCcdnForumForum_Gateway_TopicService',
            'ccdn_forum_forum.manager.board' => 'getCcdnForumForum_Manager_BoardService',
            'ccdn_forum_forum.manager.category' => 'getCcdnForumForum_Manager_CategoryService',
            'ccdn_forum_forum.manager.forum' => 'getCcdnForumForum_Manager_ForumService',
            'ccdn_forum_forum.manager.post' => 'getCcdnForumForum_Manager_PostService',
            'ccdn_forum_forum.manager.registry' => 'getCcdnForumForum_Manager_RegistryService',
            'ccdn_forum_forum.manager.subscription' => 'getCcdnForumForum_Manager_SubscriptionService',
            'ccdn_forum_forum.manager.topic' => 'getCcdnForumForum_Manager_TopicService',
            'ccdn_forum_forum.model.board' => 'getCcdnForumForum_Model_BoardService',
            'ccdn_forum_forum.model.category' => 'getCcdnForumForum_Model_CategoryService',
            'ccdn_forum_forum.model.forum' => 'getCcdnForumForum_Model_ForumService',
            'ccdn_forum_forum.model.post' => 'getCcdnForumForum_Model_PostService',
            'ccdn_forum_forum.model.registry' => 'getCcdnForumForum_Model_RegistryService',
            'ccdn_forum_forum.model.subscription' => 'getCcdnForumForum_Model_SubscriptionService',
            'ccdn_forum_forum.model.topic' => 'getCcdnForumForum_Model_TopicService',
            'ccdn_forum_forum.repository.board' => 'getCcdnForumForum_Repository_BoardService',
            'ccdn_forum_forum.repository.category' => 'getCcdnForumForum_Repository_CategoryService',
            'ccdn_forum_forum.repository.forum' => 'getCcdnForumForum_Repository_ForumService',
            'ccdn_forum_forum.repository.post' => 'getCcdnForumForum_Repository_PostService',
            'ccdn_forum_forum.repository.registry' => 'getCcdnForumForum_Repository_RegistryService',
            'ccdn_forum_forum.repository.subscription' => 'getCcdnForumForum_Repository_SubscriptionService',
            'ccdn_forum_forum.repository.topic' => 'getCcdnForumForum_Repository_TopicService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'coresphere_console.toolbar' => 'getCoresphereConsole_ToolbarService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.deprecation_logger_listener' => 'getDebug_DeprecationLoggerListenerService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.repeated_field_parameters' => 'getForm_TypeExtension_RepeatedFieldParametersService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.validation_groups' => 'getForm_TypeExtension_ValidationGroupsService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.email_confirmation' => 'getFosUser_Listener_EmailConfirmationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username_email' => 'getFosUser_UserProvider_UsernameEmailService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'http_kernel' => 'getHttpKernelService',
            'jlfawebsite.geojsonbuilder' => 'getJlfawebsite_GeojsonbuilderService',
            'jms_aop.interceptor_loader' => 'getJmsAop_InterceptorLoaderService',
            'jms_aop.pointcut_container' => 'getJmsAop_PointcutContainerService',
            'jms_di_extra.controller_resolver' => 'getJmsDiExtra_ControllerResolverService',
            'jms_di_extra.metadata.converter' => 'getJmsDiExtra_Metadata_ConverterService',
            'jms_di_extra.metadata.metadata_factory' => 'getJmsDiExtra_Metadata_MetadataFactoryService',
            'jms_di_extra.metadata_driver' => 'getJmsDiExtra_MetadataDriverService',
            'jsfv.controller' => 'getJsfv_ControllerService',
            'jsfv.generator' => 'getJsfv_GeneratorService',
            'jsfv.repeated_field_listener' => 'getJsfv_RepeatedFieldListenerService',
            'jsfv.validation_groups_listener' => 'getJsfv_ValidationGroupsListenerService',
            'kernel' => 'getKernelService',
            'kernel.cache_warmer.jsformvalidation' => 'getKernel_CacheWarmer_JsformvalidationService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.templating.helper.pagination' => 'getKnpPaginator_Templating_Helper_PaginationService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'markdown.parser' => 'getMarkdown_ParserService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.firephp' => 'getMonolog_Handler_FirephpService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.deprecation' => 'getMonolog_Logger_DeprecationService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'ornicar_akismet' => 'getOrnicarAkismetService',
            'ornicar_akismet.adapter' => 'getOrnicarAkismet_AdapterService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'sdz_user.registration.form.type' => 'getSdzUser_Registration_Form_TypeService',
            'sdzblog.antispam' => 'getSdzblog_AntispamService',
            'sdzblog.beta_listener' => 'getSdzblog_BetaListenerService',
            'sdzblog.updatemap' => 'getSdzblog_UpdatemapService',
            'sdzblog.validator.akismet' => 'getSdzblog_Validator_AkismetService',
            'sdzblog.validator.antiflood' => 'getSdzblog_Validator_AntifloodService',
            'sdzblog.validator.sdzblog_isadressevalid' => 'getSdzblog_Validator_SdzblogIsadressevalidService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access.method_interceptor' => 'getSecurity_Access_MethodInterceptorService',
            'security.access.pointcut' => 'getSecurity_Access_PointcutService',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService',
            'security.acl.dbal.schema_listener' => 'getSecurity_Acl_Dbal_SchemaListenerService',
            'security.acl.object_identity_retrieval_strategy' => 'getSecurity_Acl_ObjectIdentityRetrievalStrategyService',
            'security.acl.permission.map' => 'getSecurity_Acl_Permission_MapService',
            'security.acl.permission_evaluator' => 'getSecurity_Acl_PermissionEvaluatorService',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService',
            'security.acl.security_identity_retrieval_strategy' => 'getSecurity_Acl_SecurityIdentityRetrievalStrategyService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.expressions.compiler' => 'getSecurity_Expressions_CompilerService',
            'security.expressions.handler' => 'getSecurity_Expressions_HandlerService',
            'security.expressions.reverse_interpreter' => 'getSecurity_Expressions_ReverseInterpreterService',
            'security.extra.metadata_driver' => 'getSecurity_Extra_MetadataDriverService',
            'security.extra.metadata_factory' => 'getSecurity_Extra_MetadataFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio.distribution.webconfigurator' => 'getSensio_Distribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.event_listener.locale' => 'getStofDoctrineExtensions_EventListener_LocaleService',
            'stof_doctrine_extensions.listener.translatable' => 'getStofDoctrineExtensions_Listener_TranslatableService',
            'stof_doctrine_extensions.listener.uploadable' => 'getStofDoctrineExtensions_Listener_UploadableService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.debug' => 'getTwig_Extension_DebugService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.extension.jsformvalidation' => 'getTwig_Extension_JsformvalidationService',
            'twig.extension.text' => 'getTwig_Extension_TextService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.expression' => 'getValidator_ExpressionService',
            'validator.mapping.class_metadata_factory' => 'getValidator_Mapping_ClassMetadataFactoryService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'debug.templating.engine.twig' => 'templating',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'jsfv' => 'jsfv.generator',
            'mailer' => 'swiftmailer.mailer.default',
            'security.acl.dbal.connection' => 'doctrine.dbal.default_connection',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'translator' => 'translator.default',
        );
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/Applications/MAMP/htdocs/jlfa/app/cache/dev/annotations', true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/Applications/MAMP/htdocs/jlfa/app/cache/dev/assetic/config'), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JlfaWebSiteBundle', '/Applications/MAMP/htdocs/jlfa/app/Resources/JlfaWebSiteBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JlfaWebSiteBundle', '/Applications/MAMP/htdocs/jlfa/src/Jlfa/WebSiteBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', '/Applications/MAMP/htdocs/jlfa/app/Resources/FOSUserBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SdzBlogBundle', '/Applications/MAMP/htdocs/jlfa/app/Resources/SdzBlogBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SdzBlogBundle', '/Applications/MAMP/htdocs/jlfa/src/Sdz/BlogBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JlfaForumBundle', '/Applications/MAMP/htdocs/jlfa/app/Resources/JlfaForumBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JlfaForumBundle', '/Applications/MAMP/htdocs/jlfa/src/Jlfa/ForumBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CCDNForumForumBundle', '/Applications/MAMP/htdocs/jlfa/app/Resources/CCDNForumForumBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CCDNForumForumBundle', '/Applications/MAMP/htdocs/jlfa/vendor/codeconsortium/ccdn-forum-bundle/CCDNForum/ForumBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/Applications/MAMP/htdocs/jlfa/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * @return Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        $instance = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('request'), $this->get('assetic.asset_manager'), $this->get('assetic.cache'), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        if ($this->has('assetic.value_supplier.default')) {
            $instance->setValueSupplier($this->get('assetic.value_supplier.default', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter.yui_css' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\Yui\CssCompressorFilter A Assetic\Filter\Yui\CssCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiCssService()
    {
        $this->services['assetic.filter.yui_css'] = $instance = new \Assetic\Filter\Yui\CssCompressorFilter('/Applications/MAMP/htdocs/jlfa/app/Resources/java/yuicompressor.jar', 'C:\\Program Files (x86)\\Java\\jre7\\bin\\java.exe');

        $instance->setCharset('UTF-8');
        $instance->setTimeout(NULL);
        $instance->setStackSize(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.yui_js' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\Yui\JsCompressorFilter A Assetic\Filter\Yui\JsCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiJsService()
    {
        $this->services['assetic.filter.yui_js'] = $instance = new \Assetic\Filter\Yui\JsCompressorFilter('/Applications/MAMP/htdocs/jlfa/app/Resources/java/yuicompressor.jar', 'C:\\Program Files (x86)\\Java\\jre7\\bin\\java.exe');

        $instance->setCharset('UTF-8');
        $instance->setTimeout(NULL);
        $instance->setStackSize(NULL);
        $instance->setNomunge(NULL);
        $instance->setPreserveSemi(NULL);
        $instance->setDisableOptimizations(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'yui_js' => 'assetic.filter.yui_js', 'yui_css' => 'assetic.filter.yui_css'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'bazinga.exposetranslation.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Bazinga\ExposeTranslationBundle\Controller\Controller A Bazinga\ExposeTranslationBundle\Controller\Controller instance.
     */
    protected function getBazinga_Exposetranslation_ControllerService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.exposetranslation.controller'] = $instance = new \Bazinga\ExposeTranslationBundle\Controller\Controller($this->get('translator.default'), $this->get('templating'), $this->get('bazinga.exposetranslation.finder.translation_finder'), '/Applications/MAMP/htdocs/jlfa/app/cache/dev/bazinga_expose_translation', true, '', array(0 => 'messages'));

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'bazinga.exposetranslation.dumper.translation_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Bazinga\ExposeTranslationBundle\Dumper\TranslationDumper A Bazinga\ExposeTranslationBundle\Dumper\TranslationDumper instance.
     */
    protected function getBazinga_Exposetranslation_Dumper_TranslationDumperService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.exposetranslation.dumper.translation_dumper'] = $instance = new \Bazinga\ExposeTranslationBundle\Dumper\TranslationDumper($this->get('kernel'), $this->get('templating'), $this->get('bazinga.exposetranslation.finder.translation_finder'), $this->get('router'), $this->get('filesystem'));

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'bazinga.exposetranslation.finder.translation_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Bazinga\ExposeTranslationBundle\Finder\TranslationFinder A Bazinga\ExposeTranslationBundle\Finder\TranslationFinder instance.
     */
    protected function getBazinga_Exposetranslation_Finder_TranslationFinderService()
    {
        return $this->services['bazinga.exposetranslation.finder.translation_finder'] = new \Bazinga\ExposeTranslationBundle\Finder\TranslationFinder($this->get('kernel'));
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/Applications/MAMP/htdocs/jlfa/app/Resources');

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => new \JMS\DiExtraBundle\HttpKernel\ControllerInjectorsWarmer($a, $this->get('jms_di_extra.controller_resolver'), array()), 6 => $this->get('kernel.cache_warmer.jsformvalidation')));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.crumb_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Crumbs\CrumbBuilder A CCDNForum\ForumBundle\Component\Crumbs\CrumbBuilder instance.
     */
    protected function getCcdnForumForum_Component_CrumbBuilderService()
    {
        return $this->services['ccdn_forum_forum.component.crumb_builder'] = new \CCDNForum\ForumBundle\Component\Crumbs\CrumbBuilder($this->get('ccdn_forum_forum.component.crumb_factory'));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.crumb_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Crumbs\Factory\CrumbFactory A CCDNForum\ForumBundle\Component\Crumbs\Factory\CrumbFactory instance.
     */
    protected function getCcdnForumForum_Component_CrumbFactoryService()
    {
        return $this->services['ccdn_forum_forum.component.crumb_factory'] = new \CCDNForum\ForumBundle\Component\Crumbs\Factory\CrumbFactory($this->get('translator.default'), $this->get('router'));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.event_listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Dispatcher\Listener\FlashListener A CCDNForum\ForumBundle\Component\Dispatcher\Listener\FlashListener instance.
     */
    protected function getCcdnForumForum_Component_EventListener_FlashService()
    {
        return $this->services['ccdn_forum_forum.component.event_listener.flash'] = new \CCDNForum\ForumBundle\Component\Dispatcher\Listener\FlashListener($this->get('session'));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.event_listener.stats' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Dispatcher\Listener\StatListener A CCDNForum\ForumBundle\Component\Dispatcher\Listener\StatListener instance.
     */
    protected function getCcdnForumForum_Component_EventListener_StatsService()
    {
        return $this->services['ccdn_forum_forum.component.event_listener.stats'] = new \CCDNForum\ForumBundle\Component\Dispatcher\Listener\StatListener($this->get('ccdn_forum_forum.model.board'), $this->get('ccdn_forum_forum.model.topic'), $this->get('ccdn_forum_forum.model.post'), $this->get('ccdn_forum_forum.model.registry'));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.event_listener.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Dispatcher\Listener\SubscriberListener A CCDNForum\ForumBundle\Component\Dispatcher\Listener\SubscriberListener instance.
     */
    protected function getCcdnForumForum_Component_EventListener_SubscriberService()
    {
        return $this->services['ccdn_forum_forum.component.event_listener.subscriber'] = new \CCDNForum\ForumBundle\Component\Dispatcher\Listener\SubscriberListener($this->get('ccdn_forum_forum.model.subscription'), $this->get('security.context'));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.flood_control' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\FloodControl A CCDNForum\ForumBundle\Component\FloodControl instance.
     */
    protected function getCcdnForumForum_Component_FloodControlService()
    {
        return $this->services['ccdn_forum_forum.component.flood_control'] = new \CCDNForum\ForumBundle\Component\FloodControl($this->get('security.context'), $this->get('session'), 'dev', 0, 0);
    }

    /**
     * Gets the 'ccdn_forum_forum.component.helper.pagination_config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Helper\PaginationConfigHelper A CCDNForum\ForumBundle\Component\Helper\PaginationConfigHelper instance.
     */
    protected function getCcdnForumForum_Component_Helper_PaginationConfigService()
    {
        return $this->services['ccdn_forum_forum.component.helper.pagination_config'] = new \CCDNForum\ForumBundle\Component\Helper\PaginationConfigHelper('50', '50', '20');
    }

    /**
     * Gets the 'ccdn_forum_forum.component.helper.post_lock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Helper\PostLockHelper A CCDNForum\ForumBundle\Component\Helper\PostLockHelper instance.
     */
    protected function getCcdnForumForum_Component_Helper_PostLockService()
    {
        return $this->services['ccdn_forum_forum.component.helper.post_lock'] = new \CCDNForum\ForumBundle\Component\Helper\PostLockHelper(true, '7');
    }

    /**
     * Gets the 'ccdn_forum_forum.component.helper.role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Helper\RoleHelper A CCDNForum\ForumBundle\Component\Helper\RoleHelper instance.
     */
    protected function getCcdnForumForum_Component_Helper_RoleService()
    {
        return $this->services['ccdn_forum_forum.component.helper.role'] = new \CCDNForum\ForumBundle\Component\Helper\RoleHelper($this->get('security.context'), array('ROLE_ADMIN' => array(0 => 'ROLE_AUTHOR', 1 => 'ROLE_MODERATOR'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.integrator.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Integrator\DashboardIntegrator A CCDNForum\ForumBundle\Component\Integrator\DashboardIntegrator instance.
     */
    protected function getCcdnForumForum_Component_Integrator_DashboardService()
    {
        return $this->services['ccdn_forum_forum.component.integrator.dashboard'] = new \CCDNForum\ForumBundle\Component\Integrator\DashboardIntegrator();
    }

    /**
     * Gets the 'ccdn_forum_forum.component.security.authorizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\Security\Authorizer A CCDNForum\ForumBundle\Component\Security\Authorizer instance.
     */
    protected function getCcdnForumForum_Component_Security_AuthorizerService()
    {
        return $this->services['ccdn_forum_forum.component.security.authorizer'] = new \CCDNForum\ForumBundle\Component\Security\Authorizer($this->get('security.context'), $this->get('ccdn_forum_forum.component.helper.post_lock'));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.twig_extension.authorizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\TwigExtension\AuthorizerExtension A CCDNForum\ForumBundle\Component\TwigExtension\AuthorizerExtension instance.
     */
    protected function getCcdnForumForum_Component_TwigExtension_AuthorizerService()
    {
        return $this->services['ccdn_forum_forum.component.twig_extension.authorizer'] = new \CCDNForum\ForumBundle\Component\TwigExtension\AuthorizerExtension($this->get('ccdn_forum_forum.component.security.authorizer'));
    }

    /**
     * Gets the 'ccdn_forum_forum.component.twig_extension.board_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Component\TwigExtension\BoardListExtension A CCDNForum\ForumBundle\Component\TwigExtension\BoardListExtension instance.
     */
    protected function getCcdnForumForum_Component_TwigExtension_BoardListService()
    {
        return $this->services['ccdn_forum_forum.component.twig_extension.board_list'] = new \CCDNForum\ForumBundle\Component\TwigExtension\BoardListExtension($this->get('ccdn_forum_forum.model.category'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.board_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardCreateFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardCreateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_BoardCreateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.board_create'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardCreateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.board_create'), $this->get('ccdn_forum_forum.model.board'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.board_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardDeleteFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardDeleteFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_BoardDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.handler.board_delete'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardDeleteFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.board_delete'), $this->get('ccdn_forum_forum.model.board'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.board_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardUpdateFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardUpdateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_BoardUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.board_update'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Board\BoardUpdateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.board_update'), $this->get('ccdn_forum_forum.model.board'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.category_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryCreateFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryCreateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_CategoryCreateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.category_create'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryCreateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.category_create'), $this->get('ccdn_forum_forum.model.category'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.category_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryDeleteFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryDeleteFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_CategoryDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.handler.category_delete'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryDeleteFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.category_delete'), $this->get('ccdn_forum_forum.model.category'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.category_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryUpdateFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryUpdateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_CategoryUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.category_update'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Category\CategoryUpdateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.category_update'), $this->get('ccdn_forum_forum.model.category'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.change_topics_board' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Moderator\Topic\TopicChangeBoardFormHandler A CCDNForum\ForumBundle\Form\Handler\Moderator\Topic\TopicChangeBoardFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_ChangeTopicsBoardService()
    {
        return $this->services['ccdn_forum_forum.form.handler.change_topics_board'] = new \CCDNForum\ForumBundle\Form\Handler\Moderator\Topic\TopicChangeBoardFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.change_topics_board'), $this->get('ccdn_forum_forum.model.topic'), $this->get('ccdn_forum_forum.model.board'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.forum_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumCreateFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumCreateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_ForumCreateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.forum_create'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumCreateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.forum_create'), $this->get('ccdn_forum_forum.model.forum'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.forum_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumDeleteFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumDeleteFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_ForumDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.handler.forum_delete'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumDeleteFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.forum_delete'), $this->get('ccdn_forum_forum.model.forum'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.forum_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumUpdateFormHandler A CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumUpdateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_ForumUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.forum_update'] = new \CCDNForum\ForumBundle\Form\Handler\Admin\Forum\ForumUpdateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.forum_update'), $this->get('ccdn_forum_forum.model.forum'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.post_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\User\Post\PostCreateFormHandler A CCDNForum\ForumBundle\Form\Handler\User\Post\PostCreateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_PostCreateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.post_create'] = new \CCDNForum\ForumBundle\Form\Handler\User\Post\PostCreateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.post_create'), $this->get('ccdn_forum_forum.model.post'), $this->get('ccdn_forum_forum.component.flood_control'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.post_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\User\Post\PostDeleteFormHandler A CCDNForum\ForumBundle\Form\Handler\User\Post\PostDeleteFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_PostDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.handler.post_delete'] = new \CCDNForum\ForumBundle\Form\Handler\User\Post\PostDeleteFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.post_delete'), $this->get('ccdn_forum_forum.model.post'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.post_unlock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Moderator\Post\PostUnlockFormHandler A CCDNForum\ForumBundle\Form\Handler\Moderator\Post\PostUnlockFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_PostUnlockService()
    {
        return $this->services['ccdn_forum_forum.form.handler.post_unlock'] = new \CCDNForum\ForumBundle\Form\Handler\Moderator\Post\PostUnlockFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.post_unlock'), $this->get('ccdn_forum_forum.model.post'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.post_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\User\Post\PostUpdateFormHandler A CCDNForum\ForumBundle\Form\Handler\User\Post\PostUpdateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_PostUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.post_update'] = new \CCDNForum\ForumBundle\Form\Handler\User\Post\PostUpdateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.post_update'), $this->get('ccdn_forum_forum.model.post'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.topic_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\User\Topic\TopicCreateFormHandler A CCDNForum\ForumBundle\Form\Handler\User\Topic\TopicCreateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_TopicCreateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.topic_create'] = new \CCDNForum\ForumBundle\Form\Handler\User\Topic\TopicCreateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.topic_create'), $this->get('ccdn_forum_forum.form.type.post_create'), $this->get('ccdn_forum_forum.model.topic'), $this->get('ccdn_forum_forum.model.post'), $this->get('ccdn_forum_forum.model.board'), $this->get('ccdn_forum_forum.component.flood_control'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.topic_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\Moderator\Topic\TopicDeleteFormHandler A CCDNForum\ForumBundle\Form\Handler\Moderator\Topic\TopicDeleteFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_TopicDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.handler.topic_delete'] = new \CCDNForum\ForumBundle\Form\Handler\Moderator\Topic\TopicDeleteFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.topic_delete'), $this->get('ccdn_forum_forum.model.topic'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.handler.topic_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Handler\User\Topic\TopicUpdateFormHandler A CCDNForum\ForumBundle\Form\Handler\User\Topic\TopicUpdateFormHandler instance.
     */
    protected function getCcdnForumForum_Form_Handler_TopicUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.handler.topic_update'] = new \CCDNForum\ForumBundle\Form\Handler\User\Topic\TopicUpdateFormHandler($this->get('debug.event_dispatcher'), $this->get('form.factory'), $this->get('ccdn_forum_forum.form.type.topic_update'), $this->get('ccdn_forum_forum.form.type.post_update'), $this->get('ccdn_forum_forum.model.topic'), $this->get('ccdn_forum_forum.model.post'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.board_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardCreateFormType A CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardCreateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_BoardCreateService()
    {
        return $this->services['ccdn_forum_forum.form.type.board_create'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardCreateFormType('CCDNForum\\ForumBundle\\Entity\\Board', 'CCDNForum\\ForumBundle\\Entity\\Category', $this->get('ccdn_forum_forum.component.helper.role'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.board_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardDeleteFormType A CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardDeleteFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_BoardDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.type.board_delete'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardDeleteFormType('CCDNForum\\ForumBundle\\Entity\\Board');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.board_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardUpdateFormType A CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardUpdateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_BoardUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.type.board_update'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Board\BoardUpdateFormType('CCDNForum\\ForumBundle\\Entity\\Board', 'CCDNForum\\ForumBundle\\Entity\\Category', $this->get('ccdn_forum_forum.component.helper.role'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.category_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryCreateFormType A CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryCreateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_CategoryCreateService()
    {
        return $this->services['ccdn_forum_forum.form.type.category_create'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryCreateFormType('CCDNForum\\ForumBundle\\Entity\\Category', 'CCDNForum\\ForumBundle\\Entity\\Forum', $this->get('ccdn_forum_forum.component.helper.role'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.category_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryDeleteFormType A CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryDeleteFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_CategoryDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.type.category_delete'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryDeleteFormType('CCDNForum\\ForumBundle\\Entity\\Category');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.category_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryUpdateFormType A CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryUpdateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_CategoryUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.type.category_update'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Category\CategoryUpdateFormType('CCDNForum\\ForumBundle\\Entity\\Category', 'CCDNForum\\ForumBundle\\Entity\\Forum', $this->get('ccdn_forum_forum.component.helper.role'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.change_topics_board' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Moderator\Topic\TopicChangeBoardFormType A CCDNForum\ForumBundle\Form\Type\Moderator\Topic\TopicChangeBoardFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_ChangeTopicsBoardService()
    {
        return $this->services['ccdn_forum_forum.form.type.change_topics_board'] = new \CCDNForum\ForumBundle\Form\Type\Moderator\Topic\TopicChangeBoardFormType('CCDNForum\\ForumBundle\\Entity\\Topic', 'CCDNForum\\ForumBundle\\Entity\\Board');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.forum_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumCreateFormType A CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumCreateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_ForumCreateService()
    {
        return $this->services['ccdn_forum_forum.form.type.forum_create'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumCreateFormType('CCDNForum\\ForumBundle\\Entity\\Forum', $this->get('ccdn_forum_forum.component.helper.role'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.forum_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumDeleteFormType A CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumDeleteFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_ForumDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.type.forum_delete'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumDeleteFormType('CCDNForum\\ForumBundle\\Entity\\Forum');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.forum_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumUpdateFormType A CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumUpdateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_ForumUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.type.forum_update'] = new \CCDNForum\ForumBundle\Form\Type\Admin\Forum\ForumUpdateFormType('CCDNForum\\ForumBundle\\Entity\\Forum', $this->get('ccdn_forum_forum.component.helper.role'));
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.post_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\User\Post\PostCreateFormType A CCDNForum\ForumBundle\Form\Type\User\Post\PostCreateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_PostCreateService()
    {
        return $this->services['ccdn_forum_forum.form.type.post_create'] = new \CCDNForum\ForumBundle\Form\Type\User\Post\PostCreateFormType('CCDNForum\\ForumBundle\\Entity\\Post');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.post_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\User\Post\PostDeleteFormType A CCDNForum\ForumBundle\Form\Type\User\Post\PostDeleteFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_PostDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.type.post_delete'] = new \CCDNForum\ForumBundle\Form\Type\User\Post\PostDeleteFormType('CCDNForum\\ForumBundle\\Entity\\Post');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.post_unlock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Moderator\Post\PostUnlockFormType A CCDNForum\ForumBundle\Form\Type\Moderator\Post\PostUnlockFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_PostUnlockService()
    {
        return $this->services['ccdn_forum_forum.form.type.post_unlock'] = new \CCDNForum\ForumBundle\Form\Type\Moderator\Post\PostUnlockFormType('CCDNForum\\ForumBundle\\Entity\\Post');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.post_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\User\Post\PostUpdateFormType A CCDNForum\ForumBundle\Form\Type\User\Post\PostUpdateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_PostUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.type.post_update'] = new \CCDNForum\ForumBundle\Form\Type\User\Post\PostUpdateFormType('CCDNForum\\ForumBundle\\Entity\\Post');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.topic_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\User\Topic\TopicCreateFormType A CCDNForum\ForumBundle\Form\Type\User\Topic\TopicCreateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_TopicCreateService()
    {
        return $this->services['ccdn_forum_forum.form.type.topic_create'] = new \CCDNForum\ForumBundle\Form\Type\User\Topic\TopicCreateFormType('CCDNForum\\ForumBundle\\Entity\\Topic');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.topic_delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\Moderator\Topic\TopicDeleteFormType A CCDNForum\ForumBundle\Form\Type\Moderator\Topic\TopicDeleteFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_TopicDeleteService()
    {
        return $this->services['ccdn_forum_forum.form.type.topic_delete'] = new \CCDNForum\ForumBundle\Form\Type\Moderator\Topic\TopicDeleteFormType('CCDNForum\\ForumBundle\\Entity\\Topic');
    }

    /**
     * Gets the 'ccdn_forum_forum.form.type.topic_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Form\Type\User\Topic\TopicUpdateFormType A CCDNForum\ForumBundle\Form\Type\User\Topic\TopicUpdateFormType instance.
     */
    protected function getCcdnForumForum_Form_Type_TopicUpdateService()
    {
        return $this->services['ccdn_forum_forum.form.type.topic_update'] = new \CCDNForum\ForumBundle\Form\Type\User\Topic\TopicUpdateFormType('CCDNForum\\ForumBundle\\Entity\\Topic');
    }

    /**
     * Gets the 'ccdn_forum_forum.gateway.board' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Gateway\BoardGateway A CCDNForum\ForumBundle\Model\Component\Gateway\BoardGateway instance.
     */
    protected function getCcdnForumForum_Gateway_BoardService()
    {
        return $this->services['ccdn_forum_forum.gateway.board'] = new \CCDNForum\ForumBundle\Model\Component\Gateway\BoardGateway($this->get('doctrine.orm.default_entity_manager'), 'CCDNForum\\ForumBundle\\Entity\\Board', $this->get('knp_paginator'), NULL);
    }

    /**
     * Gets the 'ccdn_forum_forum.gateway.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Gateway\CategoryGateway A CCDNForum\ForumBundle\Model\Component\Gateway\CategoryGateway instance.
     */
    protected function getCcdnForumForum_Gateway_CategoryService()
    {
        return $this->services['ccdn_forum_forum.gateway.category'] = new \CCDNForum\ForumBundle\Model\Component\Gateway\CategoryGateway($this->get('doctrine.orm.default_entity_manager'), 'CCDNForum\\ForumBundle\\Entity\\Category', $this->get('knp_paginator'), NULL);
    }

    /**
     * Gets the 'ccdn_forum_forum.gateway.forum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Gateway\ForumGateway A CCDNForum\ForumBundle\Model\Component\Gateway\ForumGateway instance.
     */
    protected function getCcdnForumForum_Gateway_ForumService()
    {
        return $this->services['ccdn_forum_forum.gateway.forum'] = new \CCDNForum\ForumBundle\Model\Component\Gateway\ForumGateway($this->get('doctrine.orm.default_entity_manager'), 'CCDNForum\\ForumBundle\\Entity\\Forum', $this->get('knp_paginator'), NULL);
    }

    /**
     * Gets the 'ccdn_forum_forum.gateway.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Gateway\PostGateway A CCDNForum\ForumBundle\Model\Component\Gateway\PostGateway instance.
     */
    protected function getCcdnForumForum_Gateway_PostService()
    {
        return $this->services['ccdn_forum_forum.gateway.post'] = new \CCDNForum\ForumBundle\Model\Component\Gateway\PostGateway($this->get('doctrine.orm.default_entity_manager'), 'CCDNForum\\ForumBundle\\Entity\\Post', $this->get('knp_paginator'), NULL);
    }

    /**
     * Gets the 'ccdn_forum_forum.gateway.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Gateway\RegistryGateway A CCDNForum\ForumBundle\Model\Component\Gateway\RegistryGateway instance.
     */
    protected function getCcdnForumForum_Gateway_RegistryService()
    {
        return $this->services['ccdn_forum_forum.gateway.registry'] = new \CCDNForum\ForumBundle\Model\Component\Gateway\RegistryGateway($this->get('doctrine.orm.default_entity_manager'), 'CCDNForum\\ForumBundle\\Entity\\Registry', $this->get('knp_paginator'), NULL);
    }

    /**
     * Gets the 'ccdn_forum_forum.gateway.subscription' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Gateway\SubscriptionGateway A CCDNForum\ForumBundle\Model\Component\Gateway\SubscriptionGateway instance.
     */
    protected function getCcdnForumForum_Gateway_SubscriptionService()
    {
        return $this->services['ccdn_forum_forum.gateway.subscription'] = new \CCDNForum\ForumBundle\Model\Component\Gateway\SubscriptionGateway($this->get('doctrine.orm.default_entity_manager'), 'CCDNForum\\ForumBundle\\Entity\\Subscription', $this->get('knp_paginator'), NULL);
    }

    /**
     * Gets the 'ccdn_forum_forum.gateway.topic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Gateway\TopicGateway A CCDNForum\ForumBundle\Model\Component\Gateway\TopicGateway instance.
     */
    protected function getCcdnForumForum_Gateway_TopicService()
    {
        return $this->services['ccdn_forum_forum.gateway.topic'] = new \CCDNForum\ForumBundle\Model\Component\Gateway\TopicGateway($this->get('doctrine.orm.default_entity_manager'), 'CCDNForum\\ForumBundle\\Entity\\Topic', $this->get('knp_paginator'), NULL);
    }

    /**
     * Gets the 'ccdn_forum_forum.manager.board' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Manager\BoardManager A CCDNForum\ForumBundle\Model\Component\Manager\BoardManager instance.
     */
    protected function getCcdnForumForum_Manager_BoardService()
    {
        return $this->services['ccdn_forum_forum.manager.board'] = new \CCDNForum\ForumBundle\Model\Component\Manager\BoardManager($this->get('ccdn_forum_forum.gateway.board'));
    }

    /**
     * Gets the 'ccdn_forum_forum.manager.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Manager\CategoryManager A CCDNForum\ForumBundle\Model\Component\Manager\CategoryManager instance.
     */
    protected function getCcdnForumForum_Manager_CategoryService()
    {
        return $this->services['ccdn_forum_forum.manager.category'] = new \CCDNForum\ForumBundle\Model\Component\Manager\CategoryManager($this->get('ccdn_forum_forum.gateway.category'));
    }

    /**
     * Gets the 'ccdn_forum_forum.manager.forum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Manager\ForumManager A CCDNForum\ForumBundle\Model\Component\Manager\ForumManager instance.
     */
    protected function getCcdnForumForum_Manager_ForumService()
    {
        return $this->services['ccdn_forum_forum.manager.forum'] = new \CCDNForum\ForumBundle\Model\Component\Manager\ForumManager($this->get('ccdn_forum_forum.gateway.forum'));
    }

    /**
     * Gets the 'ccdn_forum_forum.manager.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Manager\PostManager A CCDNForum\ForumBundle\Model\Component\Manager\PostManager instance.
     */
    protected function getCcdnForumForum_Manager_PostService()
    {
        return $this->services['ccdn_forum_forum.manager.post'] = new \CCDNForum\ForumBundle\Model\Component\Manager\PostManager($this->get('ccdn_forum_forum.gateway.post'), $this->get('ccdn_forum_forum.component.helper.post_lock'));
    }

    /**
     * Gets the 'ccdn_forum_forum.manager.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Manager\RegistryManager A CCDNForum\ForumBundle\Model\Component\Manager\RegistryManager instance.
     */
    protected function getCcdnForumForum_Manager_RegistryService()
    {
        return $this->services['ccdn_forum_forum.manager.registry'] = new \CCDNForum\ForumBundle\Model\Component\Manager\RegistryManager($this->get('ccdn_forum_forum.gateway.registry'));
    }

    /**
     * Gets the 'ccdn_forum_forum.manager.subscription' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Manager\SubscriptionManager A CCDNForum\ForumBundle\Model\Component\Manager\SubscriptionManager instance.
     */
    protected function getCcdnForumForum_Manager_SubscriptionService()
    {
        return $this->services['ccdn_forum_forum.manager.subscription'] = new \CCDNForum\ForumBundle\Model\Component\Manager\SubscriptionManager($this->get('ccdn_forum_forum.gateway.subscription'));
    }

    /**
     * Gets the 'ccdn_forum_forum.manager.topic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Manager\TopicManager A CCDNForum\ForumBundle\Model\Component\Manager\TopicManager instance.
     */
    protected function getCcdnForumForum_Manager_TopicService()
    {
        return $this->services['ccdn_forum_forum.manager.topic'] = new \CCDNForum\ForumBundle\Model\Component\Manager\TopicManager($this->get('ccdn_forum_forum.gateway.topic'), $this->get('ccdn_forum_forum.component.helper.post_lock'));
    }

    /**
     * Gets the 'ccdn_forum_forum.model.board' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\FrontModel\BoardModel A CCDNForum\ForumBundle\Model\FrontModel\BoardModel instance.
     */
    protected function getCcdnForumForum_Model_BoardService()
    {
        return $this->services['ccdn_forum_forum.model.board'] = new \CCDNForum\ForumBundle\Model\FrontModel\BoardModel($this->get('debug.event_dispatcher'), $this->get('ccdn_forum_forum.repository.board'), $this->get('ccdn_forum_forum.manager.board'));
    }

    /**
     * Gets the 'ccdn_forum_forum.model.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\FrontModel\CategoryModel A CCDNForum\ForumBundle\Model\FrontModel\CategoryModel instance.
     */
    protected function getCcdnForumForum_Model_CategoryService()
    {
        return $this->services['ccdn_forum_forum.model.category'] = new \CCDNForum\ForumBundle\Model\FrontModel\CategoryModel($this->get('debug.event_dispatcher'), $this->get('ccdn_forum_forum.repository.category'), $this->get('ccdn_forum_forum.manager.category'));
    }

    /**
     * Gets the 'ccdn_forum_forum.model.forum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\FrontModel\ForumModel A CCDNForum\ForumBundle\Model\FrontModel\ForumModel instance.
     */
    protected function getCcdnForumForum_Model_ForumService()
    {
        return $this->services['ccdn_forum_forum.model.forum'] = new \CCDNForum\ForumBundle\Model\FrontModel\ForumModel($this->get('debug.event_dispatcher'), $this->get('ccdn_forum_forum.repository.forum'), $this->get('ccdn_forum_forum.manager.forum'));
    }

    /**
     * Gets the 'ccdn_forum_forum.model.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\FrontModel\PostModel A CCDNForum\ForumBundle\Model\FrontModel\PostModel instance.
     */
    protected function getCcdnForumForum_Model_PostService()
    {
        return $this->services['ccdn_forum_forum.model.post'] = new \CCDNForum\ForumBundle\Model\FrontModel\PostModel($this->get('debug.event_dispatcher'), $this->get('ccdn_forum_forum.repository.post'), $this->get('ccdn_forum_forum.manager.post'));
    }

    /**
     * Gets the 'ccdn_forum_forum.model.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\FrontModel\RegistryModel A CCDNForum\ForumBundle\Model\FrontModel\RegistryModel instance.
     */
    protected function getCcdnForumForum_Model_RegistryService()
    {
        return $this->services['ccdn_forum_forum.model.registry'] = new \CCDNForum\ForumBundle\Model\FrontModel\RegistryModel($this->get('debug.event_dispatcher'), $this->get('ccdn_forum_forum.repository.registry'), $this->get('ccdn_forum_forum.manager.registry'));
    }

    /**
     * Gets the 'ccdn_forum_forum.model.subscription' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\FrontModel\SubscriptionModel A CCDNForum\ForumBundle\Model\FrontModel\SubscriptionModel instance.
     */
    protected function getCcdnForumForum_Model_SubscriptionService()
    {
        return $this->services['ccdn_forum_forum.model.subscription'] = new \CCDNForum\ForumBundle\Model\FrontModel\SubscriptionModel($this->get('debug.event_dispatcher'), $this->get('ccdn_forum_forum.repository.subscription'), $this->get('ccdn_forum_forum.manager.subscription'));
    }

    /**
     * Gets the 'ccdn_forum_forum.model.topic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\FrontModel\TopicModel A CCDNForum\ForumBundle\Model\FrontModel\TopicModel instance.
     */
    protected function getCcdnForumForum_Model_TopicService()
    {
        return $this->services['ccdn_forum_forum.model.topic'] = new \CCDNForum\ForumBundle\Model\FrontModel\TopicModel($this->get('debug.event_dispatcher'), $this->get('ccdn_forum_forum.repository.topic'), $this->get('ccdn_forum_forum.manager.topic'));
    }

    /**
     * Gets the 'ccdn_forum_forum.repository.board' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Repository\BoardRepository A CCDNForum\ForumBundle\Model\Component\Repository\BoardRepository instance.
     */
    protected function getCcdnForumForum_Repository_BoardService()
    {
        return $this->services['ccdn_forum_forum.repository.board'] = new \CCDNForum\ForumBundle\Model\Component\Repository\BoardRepository($this->get('ccdn_forum_forum.gateway.board'));
    }

    /**
     * Gets the 'ccdn_forum_forum.repository.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Repository\CategoryRepository A CCDNForum\ForumBundle\Model\Component\Repository\CategoryRepository instance.
     */
    protected function getCcdnForumForum_Repository_CategoryService()
    {
        return $this->services['ccdn_forum_forum.repository.category'] = new \CCDNForum\ForumBundle\Model\Component\Repository\CategoryRepository($this->get('ccdn_forum_forum.gateway.category'));
    }

    /**
     * Gets the 'ccdn_forum_forum.repository.forum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Repository\ForumRepository A CCDNForum\ForumBundle\Model\Component\Repository\ForumRepository instance.
     */
    protected function getCcdnForumForum_Repository_ForumService()
    {
        return $this->services['ccdn_forum_forum.repository.forum'] = new \CCDNForum\ForumBundle\Model\Component\Repository\ForumRepository($this->get('ccdn_forum_forum.gateway.forum'));
    }

    /**
     * Gets the 'ccdn_forum_forum.repository.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Repository\PostRepository A CCDNForum\ForumBundle\Model\Component\Repository\PostRepository instance.
     */
    protected function getCcdnForumForum_Repository_PostService()
    {
        return $this->services['ccdn_forum_forum.repository.post'] = new \CCDNForum\ForumBundle\Model\Component\Repository\PostRepository($this->get('ccdn_forum_forum.gateway.post'));
    }

    /**
     * Gets the 'ccdn_forum_forum.repository.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Repository\RegistryRepository A CCDNForum\ForumBundle\Model\Component\Repository\RegistryRepository instance.
     */
    protected function getCcdnForumForum_Repository_RegistryService()
    {
        return $this->services['ccdn_forum_forum.repository.registry'] = new \CCDNForum\ForumBundle\Model\Component\Repository\RegistryRepository($this->get('ccdn_forum_forum.gateway.registry'));
    }

    /**
     * Gets the 'ccdn_forum_forum.repository.subscription' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Repository\SubscriptionRepository A CCDNForum\ForumBundle\Model\Component\Repository\SubscriptionRepository instance.
     */
    protected function getCcdnForumForum_Repository_SubscriptionService()
    {
        return $this->services['ccdn_forum_forum.repository.subscription'] = new \CCDNForum\ForumBundle\Model\Component\Repository\SubscriptionRepository($this->get('ccdn_forum_forum.gateway.subscription'));
    }

    /**
     * Gets the 'ccdn_forum_forum.repository.topic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CCDNForum\ForumBundle\Model\Component\Repository\TopicRepository A CCDNForum\ForumBundle\Model\Component\Repository\TopicRepository instance.
     */
    protected function getCcdnForumForum_Repository_TopicService()
    {
        return $this->services['ccdn_forum_forum.repository.topic'] = new \CCDNForum\ForumBundle\Model\Component\Repository\TopicRepository($this->get('ccdn_forum_forum.gateway.topic'));
    }

    /**
     * Gets the 'coresphere_console.toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CoreSphere\ConsoleBundle\DataCollector\DataCollector A CoreSphere\ConsoleBundle\DataCollector\DataCollector instance.
     */
    protected function getCoresphereConsole_ToolbarService()
    {
        return $this->services['coresphere_console.toolbar'] = new \CoreSphere\ConsoleBundle\DataCollector\DataCollector();
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance.
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance.
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver($this->get('jms_di_extra.controller_resolver'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.deprecation_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_DeprecationLoggerListenerService()
    {
        return $this->services['debug.deprecation_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('deprecation', $this->get('monolog.logger.deprecation', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.emergency_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'before'), 0);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'pagination'), 0);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.sortable', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.filtration', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'pagination'), 1);
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'monolog.handler.firephp', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sdzblog.beta_listener', 1 => 'onKernelResponse'), 2);
        $instance->addListenerService('jsfv.pre_process', array(0 => 'jsfv.validation_groups_listener', 1 => 'onJsfvPreProcess'), 0);
        $instance->addListenerService('jsfv.post_process', array(0 => 'jsfv.repeated_field_listener', 1 => 'onJsfvPostProcess'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('debug.deprecation_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.locale', 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.email_confirmation', 'FOS\\UserBundle\\EventListener\\EmailConfirmationListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('ccdn_forum_forum.component.event_listener.flash', 'CCDNForum\\ForumBundle\\Component\\Dispatcher\\Listener\\FlashListener');
        $instance->addSubscriberService('ccdn_forum_forum.component.event_listener.subscriber', 'CCDNForum\\ForumBundle\\Component\\Dispatcher\\Listener\\SubscriberListener');
        $instance->addSubscriberService('ccdn_forum_forum.component.event_listener.stats', 'CCDNForum\\ForumBundle\\Component\\Dispatcher\\Listener\\StatListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance.
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.dynamic', 'markdown' => 'templating.helper.markdown', 'knp_pagination' => 'knp_paginator.templating.helper.pagination'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('geometry' => array('class' => 'CrEOF\\Spatial\\DBAL\\Types\\GeometryType', 'commented' => true), 'point' => array('class' => 'CrEOF\\Spatial\\DBAL\\Types\\Geometry\\PointType', 'commented' => true), 'polygon' => array('class' => 'CrEOF\\Spatial\\DBAL\\Types\\Geometry\\PolygonType', 'commented' => true), 'linestring' => array('class' => 'CrEOF\\Spatial\\DBAL\\Types\\Geometry\\LineStringType', 'commented' => true)));
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return stdClass A stdClass instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Gedmo\Sluggable\SluggableListener();
        $c->setAnnotationReader($this->get('annotation_reader'));

        $d = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $d->addResolveTargetEntity('Symfony\\Component\\Security\\Core\\User\\UserInterface', 'Sdz\\UserBundle\\Entity\\User', array());

        $e = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $e->addEventSubscriber(new \FOS\UserBundle\Doctrine\Orm\UserListener($this));
        $e->addEventSubscriber($c);
        $e->addEventSubscriber($this->get('stof_doctrine_extensions.listener.uploadable'));
        $e->addEventSubscriber($this->get('stof_doctrine_extensions.listener.translatable'));
        $e->addEventListener(array(0 => 'postPersist'), $this->get('sdzblog.updatemap'));
        $e->addEventListener(array(0 => 'postGenerateSchema'), 'security.acl.dbal.schema_listener');
        $e->addEventListener(array(0 => 'loadClassMetadata'), $d);

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_pgsql', 'host' => 'localhost', 'port' => 5433, 'dbname' => 'jlfa', 'user' => 'postgres', 'password' => 'admin', 'charset' => 'UTF8', 'driverOptions' => array()), $b, $e, array('enum' => 'string'));
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return EntityManager5333d09161c90_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager A EntityManager5333d09161c90_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        require_once '/Applications/MAMP/htdocs/jlfa/app/cache/dev/jms_diextra/doctrine/EntityManager_5333d09161c90.php';

        $a = $this->get('annotation_reader');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_0574889ffb11bf91aa5376a76ed4f39dda2aefc910ffad901fde95ef060725eb');

        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_0574889ffb11bf91aa5376a76ed4f39dda2aefc910ffad901fde95ef060725eb');

        $d = new \Doctrine\Common\Cache\ArrayCache();
        $d->setNamespace('sf2orm_default_0574889ffb11bf91aa5376a76ed4f39dda2aefc910ffad901fde95ef060725eb');

        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => '/Applications/MAMP/htdocs/jlfa/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translatable/Entity', 1 => '/Applications/MAMP/htdocs/jlfa/src/Sdz/BlogBundle/Entity', 2 => '/Applications/MAMP/htdocs/jlfa/src/Sdz/UserBundle/Entity'));

        $f = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver(array('/Applications/MAMP/htdocs/jlfa/vendor/codeconsortium/ccdn-forum-bundle/CCDNForum/ForumBundle/Resources/config/doctrine' => 'CCDNForum\\ForumBundle\\Entity'));
        $f->setGlobalBasename('mapping');

        $g = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine' => 'FOS\\UserBundle\\Entity'));
        $g->setGlobalBasename('mapping');

        $h = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $h->addDriver($e, 'Gedmo\\Translatable\\Entity');
        $h->addDriver($e, 'Sdz\\BlogBundle\\Entity');
        $h->addDriver($e, 'Sdz\\UserBundle\\Entity');
        $h->addDriver($f, 'CCDNForum\\ForumBundle\\Entity');
        $h->addDriver($g, 'FOS\\UserBundle\\Entity');
        $h->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine/model' => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $i = new \Doctrine\ORM\Configuration();
        $i->setEntityNamespaces(array('GedmoTranslatable' => 'Gedmo\\Translatable\\Entity', 'CCDNForumForumBundle' => 'CCDNForum\\ForumBundle\\Entity', 'SdzBlogBundle' => 'Sdz\\BlogBundle\\Entity', 'SdzUserBundle' => 'Sdz\\UserBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity'));
        $i->setMetadataCacheImpl($b);
        $i->setQueryCacheImpl($c);
        $i->setResultCacheImpl($d);
        $i->setMetadataDriverImpl($h);
        $i->setProxyDir('/Applications/MAMP/htdocs/jlfa/app/cache/dev/doctrine/orm/Proxies');
        $i->setProxyNamespace('Proxies');
        $i->setAutoGenerateProxyClasses(true);
        $i->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $i->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $i->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $i->addCustomNumericFunction('st_contains', 'CrEOF\\Spatial\\ORM\\Query\\AST\\Functions\\PostgreSql\\STContains');
        $i->addCustomNumericFunction('st_distance', 'CrEOF\\Spatial\\ORM\\Query\\AST\\Functions\\PostgreSql\\STDistance');
        $i->addCustomNumericFunction('st_area', 'CrEOF\\Spatial\\ORM\\Query\\AST\\Functions\\PostgreSql\\STArea');
        $i->addCustomNumericFunction('st_length', 'CrEOF\\Spatial\\ORM\\Query\\AST\\Functions\\PostgreSql\\STLength');
        $i->addCustomNumericFunction('st_geomfromtext', 'CrEOF\\Spatial\\ORM\\Query\\AST\\Functions\\PostgreSql\\STGeomFromText');

        $j = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $i);
        $this->get('doctrine.orm.default_manager_configurator')->configure($j);

        return $this->services['doctrine.orm.default_entity_manager'] = new \EntityManager5333d09161c90_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager($j, $this);
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/Applications/MAMP/htdocs/jlfa/app/Resources');
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('sdz_user_registration' => 'sdz_user.registration.form.type', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'form.type_extension.validation_groups'), 'repeated' => array(0 => 'form.type_extension.repeated.validator', 1 => 'form.type_extension.repeated_field_parameters'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance.
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.repeated_field_parameters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return APY\JsFormValidationBundle\Form\Extension\RepeatedTypeExtension A APY\JsFormValidationBundle\Form\Extension\RepeatedTypeExtension instance.
     */
    protected function getForm_TypeExtension_RepeatedFieldParametersService()
    {
        return $this->services['form.type_extension.repeated_field_parameters'] = new \APY\JsFormValidationBundle\Form\Extension\RepeatedTypeExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.validation_groups' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return APY\JsFormValidationBundle\Form\Extension\FormTypeExtension A APY\JsFormValidationBundle\Form\Extension\FormTypeExtension instance.
     */
    protected function getForm_TypeExtension_ValidationGroupsService()
    {
        $this->services['form.type_extension.validation_groups'] = $instance = new \APY\JsFormValidationBundle\Form\Extension\FormTypeExtension();

        $instance->setJsfv($this->get('jsfv.generator'));

        return $instance;
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }

    /**
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'fos_user_change_password', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance.
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('Sdz\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\AuthenticationListener A FOS\UserBundle\EventListener\AuthenticationListener instance.
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /**
     * Gets the 'fos_user.listener.email_confirmation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\EmailConfirmationListener A FOS\UserBundle\EventListener\EmailConfirmationListener instance.
     */
    protected function getFosUser_Listener_EmailConfirmationService()
    {
        return $this->services['fos_user.listener.email_confirmation'] = new \FOS\UserBundle\EventListener\EmailConfirmationListener($this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'), $this->get('router'), $this->get('session'));
    }

    /**
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance.
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));
    }

    /**
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance.
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance.
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }

    /**
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'fos_user_profile', array(0 => 'Profile', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance.
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Sdz\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'sdz_user_registration', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Sdz\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'fos_user_resetting', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance.
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('Sdz\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance.
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance.
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Doctrine\UserManager A FOS\UserBundle\Doctrine\UserManager instance.
     */
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('doctrine')->getManager(NULL), 'Sdz\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance.
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance.
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance.
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\FragmentHandler A Symfony\Component\HttpKernel\Fragment\FragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), true, $this->get('request_stack'));

        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        $instance->addRenderer($this->get('fragment.renderer.esi'));

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer A Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'));
    }

    /**
     * Gets the 'jlfawebsite.geojsonbuilder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Jlfa\WebSiteBundle\Jsonbuilder\GeoJsonBuilder A Jlfa\WebSiteBundle\Jsonbuilder\GeoJsonBuilder instance.
     */
    protected function getJlfawebsite_GeojsonbuilderService()
    {
        return $this->services['jlfawebsite.geojsonbuilder'] = new \Jlfa\WebSiteBundle\Jsonbuilder\GeoJsonBuilder($this->get('doctrine.orm.default_entity_manager'), $this->get('router'));
    }

    /**
     * Gets the 'jms_aop.interceptor_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\AopBundle\Aop\InterceptorLoader A JMS\AopBundle\Aop\InterceptorLoader instance.
     */
    protected function getJmsAop_InterceptorLoaderService()
    {
        return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, array());
    }

    /**
     * Gets the 'jms_aop.pointcut_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\AopBundle\Aop\PointcutContainer A JMS\AopBundle\Aop\PointcutContainer instance.
     */
    protected function getJmsAop_PointcutContainerService()
    {
        return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(array('security.access.method_interceptor' => $this->get('security.access.pointcut')));
    }

    /**
     * Gets the 'jms_di_extra.metadata.converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\DiExtraBundle\Metadata\MetadataConverter A JMS\DiExtraBundle\Metadata\MetadataConverter instance.
     */
    protected function getJmsDiExtra_Metadata_ConverterService()
    {
        return $this->services['jms_di_extra.metadata.converter'] = new \JMS\DiExtraBundle\Metadata\MetadataConverter();
    }

    /**
     * Gets the 'jms_di_extra.metadata.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getJmsDiExtra_Metadata_MetadataFactoryService()
    {
        $this->services['jms_di_extra.metadata.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_di_extra.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache('/Applications/MAMP/htdocs/jlfa/app/cache/dev/jms_diextra/metadata'));

        return $instance;
    }

    /**
     * Gets the 'jms_di_extra.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver A JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver instance.
     */
    protected function getJmsDiExtra_MetadataDriverService()
    {
        return $this->services['jms_di_extra.metadata_driver'] = new \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'));
    }

    /**
     * Gets the 'jsfv.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return APY\JsFormValidationBundle\Controller\Controller A APY\JsFormValidationBundle\Controller\Controller instance.
     */
    protected function getJsfv_ControllerService()
    {
        return $this->services['jsfv.controller'] = new \APY\JsFormValidationBundle\Controller\Controller($this);
    }

    /**
     * Gets the 'jsfv.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return APY\JsFormValidationBundle\Generator\FormValidationScriptGenerator A APY\JsFormValidationBundle\Generator\FormValidationScriptGenerator instance.
     */
    protected function getJsfv_GeneratorService()
    {
        return $this->services['jsfv.generator'] = new \APY\JsFormValidationBundle\Generator\FormValidationScriptGenerator($this);
    }

    /**
     * Gets the 'jsfv.repeated_field_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return APY\JsFormValidationBundle\EventListener\RepeatedFieldListener A APY\JsFormValidationBundle\EventListener\RepeatedFieldListener instance.
     */
    protected function getJsfv_RepeatedFieldListenerService()
    {
        return $this->services['jsfv.repeated_field_listener'] = new \APY\JsFormValidationBundle\EventListener\RepeatedFieldListener();
    }

    /**
     * Gets the 'jsfv.validation_groups_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return APY\JsFormValidationBundle\EventListener\ValidationGroupsListener A APY\JsFormValidationBundle\EventListener\ValidationGroupsListener instance.
     */
    protected function getJsfv_ValidationGroupsListenerService()
    {
        return $this->services['jsfv.validation_groups_listener'] = new \APY\JsFormValidationBundle\EventListener\ValidationGroupsListener();
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.cache_warmer.jsformvalidation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return APY\JsFormValidationBundle\CacheWarmer\JsFormValidationCacheWarmer A APY\JsFormValidationBundle\CacheWarmer\JsFormValidationCacheWarmer instance.
     */
    protected function getKernel_CacheWarmer_JsformvalidationService()
    {
        return $this->services['kernel.cache_warmer.jsformvalidation'] = new \APY\JsFormValidationBundle\CacheWarmer\JsFormValidationCacheWarmer($this);
    }

    /**
     * Gets the 'knp_paginator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Component\Pager\Paginator A Knp\Component\Pager\Paginator instance.
     */
    protected function getKnpPaginatorService()
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($this->get('debug.event_dispatcher'));

        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

        return $instance;
    }

    /**
     * Gets the 'knp_paginator.helper.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\PaginatorBundle\Helper\Processor A Knp\Bundle\PaginatorBundle\Helper\Processor instance.
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor($this->get('templating.helper.router'), $this->get('translator.default'));
    }

    /**
     * Gets the 'knp_paginator.subscriber.filtration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber A Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber instance.
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /**
     * Gets the 'knp_paginator.subscriber.paginate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber A Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber instance.
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /**
     * Gets the 'knp_paginator.subscriber.sliding_pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber A Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber instance.
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:sliding.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => 'KnpPaginatorBundle:Pagination:filtration.html.twig', 'defaultPageRange' => 5));
    }

    /**
     * Gets the 'knp_paginator.subscriber.sortable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber A Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber instance.
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /**
     * Gets the 'knp_paginator.templating.helper.pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\PaginatorBundle\Templating\PaginationHelper A Knp\Bundle\PaginatorBundle\Templating\PaginationHelper instance.
     */
    protected function getKnpPaginator_Templating_Helper_PaginationService()
    {
        return $this->services['knp_paginator.templating.helper.pagination'] = new \Knp\Bundle\PaginatorBundle\Templating\PaginationHelper($this->get('knp_paginator.helper.processor'), $this->get('debug.templating.engine.php'));
    }

    /**
     * Gets the 'knp_paginator.twig.extension.pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension A Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension instance.
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension($this->get('knp_paginator.helper.processor'));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'markdown.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\MarkdownBundle\Parser\Preset\Max A Knp\Bundle\MarkdownBundle\Parser\Preset\Max instance.
     */
    protected function getMarkdown_ParserService()
    {
        return $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max();
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.firephp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\FirePHPHandler A Symfony\Bridge\Monolog\Handler\FirePHPHandler instance.
     */
    protected function getMonolog_Handler_FirephpService()
    {
        return $this->services['monolog.handler.firephp'] = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler('/Applications/MAMP/htdocs/jlfa/app/logs/dev.log', 100, true);
    }

    /**
     * Gets the 'monolog.logger.deprecation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DeprecationService()
    {
        $this->services['monolog.logger.deprecation'] = $instance = new \Symfony\Bridge\Monolog\Logger('deprecation');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.emergency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'ornicar_akismet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Ornicar\AkismetBundle\Akismet\AkismetReal A Ornicar\AkismetBundle\Akismet\AkismetReal instance.
     * 
     * @throws InactiveScopeException when the 'ornicar_akismet' service is requested while the 'request' scope is not active
     */
    protected function getOrnicarAkismetService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ornicar_akismet', 'request');
        }

        return $this->services['ornicar_akismet'] = $this->scopedServices['request']['ornicar_akismet'] = new \Ornicar\AkismetBundle\Akismet\AkismetReal($this->get('ornicar_akismet.adapter'), $this->get('request'), true, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'ornicar_akismet.adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Ornicar\AkismetBundle\Adapter\AkismetBuzzAdapter A Ornicar\AkismetBundle\Adapter\AkismetBuzzAdapter instance.
     */
    protected function getOrnicarAkismet_AdapterService()
    {
        return $this->services['ornicar_akismet.adapter'] = new \Ornicar\AkismetBundle\Adapter\AkismetBuzzAdapter('votre_site', 'votre_cle');
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage('file:/Applications/MAMP/htdocs/jlfa/app/cache/dev/profiler', '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($d);
        $instance->add($this->get('coresphere_console.toolbar'));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false, $this->get('request_stack'));
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/Applications/MAMP/htdocs/jlfa/app/cache/dev/assetic/routing.yml', array('cache_dir' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager')));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'sdz_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sdz\UserBundle\Form\Type\RegistrationFormType A Sdz\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getSdzUser_Registration_Form_TypeService()
    {
        return $this->services['sdz_user.registration.form.type'] = new \Sdz\UserBundle\Form\Type\RegistrationFormType('Sdz\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'sdzblog.antispam' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sdz\BlogBundle\Antispam\SdzAntispam A Sdz\BlogBundle\Antispam\SdzAntispam instance.
     */
    protected function getSdzblog_AntispamService()
    {
        $this->services['sdzblog.antispam'] = $instance = new \Sdz\BlogBundle\Antispam\SdzAntispam($this->get('swiftmailer.mailer.default'), 3);

        $instance->setLocale('fr');

        return $instance;
    }

    /**
     * Gets the 'sdzblog.beta_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sdz\BlogBundle\Beta\BetaListener A Sdz\BlogBundle\Beta\BetaListener instance.
     */
    protected function getSdzblog_BetaListenerService()
    {
        return $this->services['sdzblog.beta_listener'] = new \Sdz\BlogBundle\Beta\BetaListener('2013-01-01');
    }

    /**
     * Gets the 'sdzblog.updatemap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sdz\UserBundle\Listener\MapUpdater A Sdz\UserBundle\Listener\MapUpdater instance.
     */
    protected function getSdzblog_UpdatemapService()
    {
        return $this->services['sdzblog.updatemap'] = new \Sdz\UserBundle\Listener\MapUpdater($this);
    }

    /**
     * Gets the 'sdzblog.validator.akismet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sdz\BlogBundle\Akismet\AkismetValidator A Sdz\BlogBundle\Akismet\AkismetValidator instance.
     * 
     * @throws InactiveScopeException when the 'sdzblog.validator.akismet' service is requested while the 'request' scope is not active
     */
    protected function getSdzblog_Validator_AkismetService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sdzblog.validator.akismet', 'request');
        }

        return $this->services['sdzblog.validator.akismet'] = $this->scopedServices['request']['sdzblog.validator.akismet'] = new \Sdz\BlogBundle\Akismet\AkismetValidator($this->get('ornicar_akismet'), $this->get('security.context'));
    }

    /**
     * Gets the 'sdzblog.validator.antiflood' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sdz\BlogBundle\Validator\AntiFloodValidator A Sdz\BlogBundle\Validator\AntiFloodValidator instance.
     * 
     * @throws InactiveScopeException when the 'sdzblog.validator.antiflood' service is requested while the 'request' scope is not active
     */
    protected function getSdzblog_Validator_AntifloodService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sdzblog.validator.antiflood', 'request');
        }

        return $this->services['sdzblog.validator.antiflood'] = $this->scopedServices['request']['sdzblog.validator.antiflood'] = new \Sdz\BlogBundle\Validator\AntiFloodValidator($this->get('request'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'sdzblog.validator.sdzblog_isadressevalid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sdz\UserBundle\Validator\IsAdresseValidValidator A Sdz\UserBundle\Validator\IsAdresseValidValidator instance.
     */
    protected function getSdzblog_Validator_SdzblogIsadressevalidService()
    {
        return $this->services['sdzblog.validator.sdzblog_isadressevalid'] = new \Sdz\UserBundle\Validator\IsAdresseValidValidator();
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager A JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.authentication.trust_resolver');
        $c = $this->get('security.role_hierarchy');

        $d = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\LazyLoadingExpressionVoter($this->get('security.expressions.handler'), $a);
        $d->setLazyCompiler($this, 'security.expressions.compiler');
        $d->setCacheDir('/Applications/MAMP/htdocs/jlfa/app/cache/dev/jms_security/expressions');

        return $this->services['security.access.decision_manager'] = new \JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => $d, 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $c), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($c), 3 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b), 4 => new \JMS\SecurityExtraBundle\Security\Acl\Voter\AclVoter($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map'), $a, true)), 'affirmative', false, true));
    }

    /**
     * Gets the 'security.access.method_interceptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor A JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor instance.
     */
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array(0 => new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AclAfterInvocationProvider($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map')))), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('security.extra.metadata_factory'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.access.pointcut' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut A JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut instance.
     */
    protected function getSecurity_Access_PointcutService()
    {
        $this->services['security.access.pointcut'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut($this->get('security.extra.metadata_factory'), false, array());

        $instance->setSecuredClasses(array());

        return $instance;
    }

    /**
     * Gets the 'security.acl.dbal.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Acl\Dbal\Schema A Symfony\Component\Security\Acl\Dbal\Schema instance.
     */
    protected function getSecurity_Acl_Dbal_SchemaService()
    {
        return $this->services['security.acl.dbal.schema'] = new \Symfony\Component\Security\Acl\Dbal\Schema(array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), $this->get('doctrine.dbal.default_connection'));
    }

    /**
     * Gets the 'security.acl.dbal.schema_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener A Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener instance.
     */
    protected function getSecurity_Acl_Dbal_SchemaListenerService()
    {
        return $this->services['security.acl.dbal.schema_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener($this->get('security.acl.dbal.schema'));
    }

    /**
     * Gets the 'security.acl.permission_evaluator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator A JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator instance.
     */
    protected function getSecurity_Acl_PermissionEvaluatorService()
    {
        return $this->services['security.acl.permission_evaluator'] = new \JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.acl.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Acl\Dbal\MutableAclProvider A Symfony\Component\Security\Acl\Dbal\MutableAclProvider instance.
     */
    protected function getSecurity_Acl_ProviderService()
    {
        return $this->services['security.acl.provider'] = new \Symfony\Component\Security\Acl\Dbal\MutableAclProvider($this->get('doctrine.dbal.default_connection'), new \Symfony\Component\Security\Acl\Domain\PermissionGrantingStrategy(), array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), NULL);
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance.
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false)), 'Sdz\\UserBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.expressions.compiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler A JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler instance.
     */
    protected function getSecurity_Expressions_CompilerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ContainerAwareVariableCompiler();
        $a->setMaps(array('trust_resolver' => 'security.authentication.trust_resolver', 'role_hierarchy' => 'security.role_hierarchy', 'permission_evaluator' => 'security.acl.permission_evaluator'), array());

        $this->services['security.expressions.compiler'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler();

        $instance->addFunctionCompiler(new \JMS\SecurityExtraBundle\Security\Acl\Expression\HasPermissionFunctionCompiler());
        $instance->addTypeCompiler(new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ParameterExpressionCompiler());
        $instance->addTypeCompiler($a);

        return $instance;
    }

    /**
     * Gets the 'security.expressions.reverse_interpreter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter A JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter instance.
     */
    protected function getSecurity_Expressions_ReverseInterpreterService()
    {
        return $this->services['security.expressions.reverse_interpreter'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter($this->get('security.expressions.compiler'), $this->get('security.expressions.handler'));
    }

    /**
     * Gets the 'security.extra.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\Driver\DriverChain A Metadata\Driver\DriverChain instance.
     */
    protected function getSecurity_Extra_MetadataDriverService()
    {
        return $this->services['security.extra.metadata_driver'] = new \Metadata\Driver\DriverChain(array(0 => new \JMS\SecurityExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.context');
        $c = $this->get('fos_user.user_provider.username_email');
        $d = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');

        $h = new \Symfony\Component\Security\Http\AccessMap();

        $i = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();
        $i->createUser(new \Symfony\Component\Security\Core\User\User('user', 'userpass', array(0 => 'ROLE_USER')));
        $i->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'adminpass', array(0 => 'ROLE_ADMIN')));

        $j = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $k = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $c), 'ThisTokenIsNotSoSecretChangeIt', 'main', array('name' => 'REMEMBERME', 'lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $a);

        $l = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $j, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($j, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => 'fos_user_security_logout'));
        $l->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $l->addHandler($k);

        $m = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($j, array('login_path' => 'fos_user_security_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $m->setProviderKey('main');

        $n = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, $this->get('security.authentication.session_strategy'), $j, 'main', $m, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $j, array('login_path' => 'fos_user_security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $a), array('check_path' => 'fos_user_security_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $a, $d, NULL);
        $n->setRememberMeServices($k);

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($h, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $i, 1 => $c), 'main', $a, $d), 2 => $l, 3 => $n, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($b, $k, $g, $a, $d), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5333d09149a33', $a), 6 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $h, $g)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $j, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $j, 'fos_user_security_login', false), NULL, NULL, $a));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_AUTHOR', 1 => 'ROLE_MODERATOR'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('/Applications/MAMP/htdocs/jlfa/app/cache/dev/secure_random.seed', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio.distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensio_Distribution_WebconfiguratorService()
    {
        return $this->services['sensio.distribution.webconfigurator'] = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator('/Applications/MAMP/htdocs/jlfa/app');
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance.
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance.
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/Applications/MAMP/htdocs/jlfa/app/cache/dev/sessions');
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('/Applications/MAMP/htdocs/jlfa/app/cache/dev/sessions', 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'stof_doctrine_extensions.event_listener.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stof\DoctrineExtensionsBundle\EventListener\LocaleListener A Stof\DoctrineExtensionsBundle\EventListener\LocaleListener instance.
     */
    protected function getStofDoctrineExtensions_EventListener_LocaleService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.locale'] = new \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener($this->get('stof_doctrine_extensions.listener.translatable'));
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance.
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($this->get('stof_doctrine_extensions.listener.uploadable'), 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this);
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('smtp.gmail.com');
        $instance->setPort(25);
        $instance->setEncryption('ssl');
        $instance->setUsername('bastien.eichenberger');
        $instance->setPassword('chabert17321732');
        $instance->setAuthMode('login');
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));

        return $instance;
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     * 
     * @throws InactiveScopeException when the 'templating.helper.assets' service is requested while the 'request' scope is not active
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/Applications/MAMP/htdocs/jlfa/app', 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));

        $instance->registerListener('main', 'fos_user_security_logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper instance.
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/translations', 'debug' => true));

        $instance->setFallbackLocales(array(0 => 'fr'));
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf', 'vi', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf', 'zh_TW', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ar.xlf', 'ar', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.el.xlf', 'el', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.gl.xlf', 'gl', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ua.xlf', 'ua', 'security');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/BlogBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/BlogBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/BlogBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/UserBundle/Resources/translations/FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/UserBundle/Resources/translations/FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/UserBundle/Resources/translations/FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/UserBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/UserBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Sdz/UserBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ar.yml', 'ar', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fa.yml', 'fa', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.he.yml', 'he', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.id.yml', 'id', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lt.yml', 'lt', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nb.yml', 'nb', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.vi.yml', 'vi', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fa.yml', 'fa', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lt.yml', 'lt', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nb.yml', 'nb', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Jlfa/WebSiteBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Jlfa/WebSiteBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Jlfa/ForumBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/src/Jlfa/ForumBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/codeconsortium/ccdn-forum-bundle/CCDNForum/ForumBundle/Resources/translations/CCDNForumForumBundle.en.yml', 'en', 'CCDNForumForumBundle');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/winzou/console-bundle/CoreSphere/ConsoleBundle/Resources/translations/messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/winzou/console-bundle/CoreSphere/ConsoleBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/winzou/console-bundle/CoreSphere/ConsoleBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/vendor/winzou/console-bundle/CoreSphere/ConsoleBundle/Resources/translations/messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/app/Resources/translations/messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/app/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/Applications/MAMP/htdocs/jlfa/app/Resources/translations/messages.fr.yml', 'fr', 'messages');

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('security.context');
        $b = $this->get('markdown.parser');

        $c = new \Knp\Bundle\MarkdownBundle\Helper\MarkdownHelper($b);
        $c->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Min(), 'min');
        $c->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Light(), 'light');
        $c->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Medium(), 'medium');
        $c->addParser($b, 'default');
        $c->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Flavored(), 'flavored');

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape_service' => NULL, 'autoescape_service_method' => NULL, 'cache' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/twig', 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension($this->get('twig.extension.intl'));
        $instance->addExtension($this->get('twig.extension.text'));
        $instance->addExtension($this->get('twig.extension.debug'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, '/Applications/MAMP/htdocs/jlfa/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(0 => 'JlfaWebSiteBundle', 1 => 'FOSUserBundle', 2 => 'SdzBlogBundle', 3 => 'JlfaForumBundle', 4 => 'CCDNForumForumBundle'), $this->get('assetic.value_supplier.default', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\SecurityExtraBundle\Twig\SecurityExtension($a));
        $instance->addExtension($this->get('sdzblog.antispam'));
        $instance->addExtension(new \Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension($c));
        $instance->addExtension($this->get('twig.extension.jsformvalidation'));
        $instance->addExtension($this->get('knp_paginator.twig.extension.pagination'));
        $instance->addExtension($this->get('ccdn_forum_forum.component.twig_extension.board_list'));
        $instance->addExtension($this->get('ccdn_forum_forum.component.twig_extension.authorizer'));
        $instance->addGlobal('app', $this->get('templating.globals'));

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Extension_Debug A Twig_Extension_Debug instance.
     */
    protected function getTwig_Extension_DebugService()
    {
        return $this->services['twig.extension.debug'] = new \Twig_Extension_Debug();
    }

    /**
     * Gets the 'twig.extension.intl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Extensions_Extension_Intl A Twig_Extensions_Extension_Intl instance.
     */
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }

    /**
     * Gets the 'twig.extension.jsformvalidation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return APY\JsFormValidationBundle\Twig\Extension\JsFormValidationTwigExtension A APY\JsFormValidationBundle\Twig\Extension\JsFormValidationTwigExtension instance.
     */
    protected function getTwig_Extension_JsformvalidationService()
    {
        return $this->services['twig.extension.jsformvalidation'] = new \APY\JsFormValidationBundle\Twig\Extension\JsFormValidationTwigExtension($this);
    }

    /**
     * Gets the 'twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance.
     */
    protected function getTwig_Extension_TextService()
    {
        return $this->services['twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/src/Sdz/BlogBundle/Resources/views', 'SdzBlog');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/src/Sdz/UserBundle/Resources/views', 'SdzUser');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/src/Jlfa/WebSiteBundle/Resources/views', 'JlfaWebSite');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/willdurand/js-translation-bundle/Bazinga/ExposeTranslationBundle/Resources/views', 'BazingaExposeTranslation');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/apy/jsfv-bundle/APY/JsFormValidationBundle/Resources/views', 'APYJsFormValidation');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/src/Jlfa/APYJsFormValidationBundle/Resources/views', 'JlfaAPYJsFormValidation');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/knplabs/knp-paginator-bundle/Knp/Bundle/PaginatorBundle/Resources/views', 'KnpPaginator');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/src/Jlfa/ForumBundle/Resources/views', 'JlfaForum');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/codeconsortium/ccdn-forum-bundle/CCDNForum/ForumBundle/Resources/views', 'CCDNForumForum');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', 'WebProfiler');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views', 'SensioDistribution');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/winzou/console-bundle/CoreSphere/ConsoleBundle/Resources/views', 'CoreSphereConsole');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/app/Resources/views');
        $instance->addPath('/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Validator A Symfony\Component\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('sdzblog_isAdresseValid' => 'sdzblog.validator.sdzblog_isadressevalid', 'validator.expression' => 'validator.expression', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'akismet' => 'sdzblog.validator.akismet', 'sdzblog_antiflood' => 'sdzblog.validator.antiflood')), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance.
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => 'DoctrineBundle:Collector:db'), 'coresphere_console.toolbar' => array(0 => 'coresphere_console', 1 => 'CoreSphereConsoleBundle:Toolbar:toolbar')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/Applications/MAMP/htdocs/jlfa/app/../web', true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'assetic.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Assetic\Cache\FilesystemCache A Assetic\Cache\FilesystemCache instance.
     */
    protected function getAssetic_CacheService()
    {
        return $this->services['assetic.cache'] = new \Assetic\Cache\FilesystemCache('/Applications/MAMP/htdocs/jlfa/app/cache/dev/assetic/assets');
    }

    /**
     * Gets the 'assetic.value_supplier.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\DefaultValueSupplier A Symfony\Bundle\AsseticBundle\DefaultValueSupplier instance.
     */
    protected function getAssetic_ValueSupplier_DefaultService()
    {
        return $this->services['assetic.value_supplier.default'] = new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'fos_user.user_provider.username_email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return FOS\UserBundle\Security\EmailUserProvider A FOS\UserBundle\Security\EmailUserProvider instance.
     */
    protected function getFosUser_UserProvider_UsernameEmailService()
    {
        return $this->services['fos_user.user_provider.username_email'] = new \FOS\UserBundle\Security\EmailUserProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'jms_di_extra.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\DiExtraBundle\HttpKernel\ControllerResolver A JMS\DiExtraBundle\HttpKernel\ControllerResolver instance.
     */
    protected function getJmsDiExtra_ControllerResolverService()
    {
        return $this->services['jms_di_extra.controller_resolver'] = new \JMS\DiExtraBundle\HttpKernel\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.acl.object_identity_retrieval_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy A Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy instance.
     */
    protected function getSecurity_Acl_ObjectIdentityRetrievalStrategyService()
    {
        return $this->services['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy();
    }

    /**
     * Gets the 'security.acl.permission.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Acl\Permission\BasicPermissionMap A Symfony\Component\Security\Acl\Permission\BasicPermissionMap instance.
     */
    protected function getSecurity_Acl_Permission_MapService()
    {
        return $this->services['security.acl.permission.map'] = new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap();
    }

    /**
     * Gets the 'security.acl.security_identity_retrieval_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy A Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy instance.
     */
    protected function getSecurity_Acl_SecurityIdentityRetrievalStrategyService()
    {
        return $this->services['security.acl.security_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy($this->get('security.role_hierarchy'), $this->get('security.authentication.trust_resolver'));
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('security.user_checker');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_provider.username_email'), $a, 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($a, 'ThisTokenIsNotSoSecretChangeIt', 'main'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5333d09149a33')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance.
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.expressions.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler A JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler instance.
     */
    protected function getSecurity_Expressions_HandlerService()
    {
        return $this->services['security.expressions.handler'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler($this);
    }

    /**
     * Gets the 'security.extra.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getSecurity_Extra_MetadataFactoryService()
    {
        $this->services['security.extra.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'security.extra.metadata_driver'), new \Metadata\Cache\FileCache('/Applications/MAMP/htdocs/jlfa/app/cache/dev/jms_security', true));

        $instance->setIncludeInterfaces(true);

        return $instance;
    }

    /**
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance.
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'stof_doctrine_extensions.listener.translatable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Gedmo\Translatable\TranslatableListener A Gedmo\Translatable\TranslatableListener instance.
     */
    protected function getStofDoctrineExtensions_Listener_TranslatableService()
    {
        $this->services['stof_doctrine_extensions.listener.translatable'] = $instance = new \Gedmo\Translatable\TranslatableListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultLocale('fr_FR');
        $instance->setTranslatableLocale('fr_FR');
        $instance->setTranslationFallback(true);
        $instance->setPersistDefaultLocaleTranslation(false);
        $instance->setSkipOnLoad(false);

        return $instance;
    }

    /**
     * Gets the 'stof_doctrine_extensions.listener.uploadable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Gedmo\Uploadable\UploadableListener A Gedmo\Uploadable\UploadableListener instance.
     */
    protected function getStofDoctrineExtensions_Listener_UploadableService()
    {
        $this->services['stof_doctrine_extensions.listener.uploadable'] = $instance = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());

        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $instance;
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/Applications/MAMP/htdocs/jlfa/app/cache/dev');
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Validator\Mapping\ClassMetadataFactory A Symfony\Component\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml', 1 => '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml', 2 => '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array(0 => '/Applications/MAMP/htdocs/jlfa/vendor/codeconsortium/ccdn-forum-bundle/CCDNForum/ForumBundle/Resources/config/validation.yml')))), NULL);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/Applications/MAMP/htdocs/jlfa/app',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev',
            'kernel.logs_dir' => '/Applications/MAMP/htdocs/jlfa/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'SdzBlogBundle' => 'Sdz\\BlogBundle\\SdzBlogBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'SdzUserBundle' => 'Sdz\\UserBundle\\SdzUserBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'KnpMarkdownBundle' => 'Knp\\Bundle\\MarkdownBundle\\KnpMarkdownBundle',
                'OrnicarAkismetBundle' => 'Ornicar\\AkismetBundle\\OrnicarAkismetBundle',
                'JlfaWebSiteBundle' => 'Jlfa\\WebSiteBundle\\JlfaWebSiteBundle',
                'BazingaExposeTranslationBundle' => 'Bazinga\\ExposeTranslationBundle\\BazingaExposeTranslationBundle',
                'APYJsFormValidationBundle' => 'APY\\JsFormValidationBundle\\APYJsFormValidationBundle',
                'JlfaAPYJsFormValidationBundle' => 'Jlfa\\APYJsFormValidationBundle\\JlfaAPYJsFormValidationBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'JlfaForumBundle' => 'Jlfa\\ForumBundle\\JlfaForumBundle',
                'CCDNForumForumBundle' => 'CCDNForum\\ForumBundle\\CCDNForumForumBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'CoreSphereConsoleBundle' => 'CoreSphere\\ConsoleBundle\\CoreSphereConsoleBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_pgsql',
            'database_host' => 'localhost',
            'database_port' => 5433,
            'database_name' => 'jlfa',
            'database_user' => 'postgres',
            'database_password' => 'admin',
            'locale' => 'fr',
            'locales' => 'fr|en|de',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'java_path' => 'C:\\Program Files (x86)\\Java\\jre7\\bin\\java.exe',
            'sdzblog.nombre_par_page' => 5,
            'sdzblog.dest_email' => 'vous@vous.Com',
            'akismet_key' => 'votre_cle',
            'akismet_url' => 'votre_site',
            'nombre_par_page' => 5,
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.container.dump' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/appDevDebugProjectContainer.xml',
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(

            ),
            'session.save_path' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/sessions',
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.helper.stopwatch.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'debug.templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/Applications/MAMP/htdocs/jlfa/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
                1 => '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml',
                2 => '/Applications/MAMP/htdocs/jlfa/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
                0 => '/Applications/MAMP/htdocs/jlfa/vendor/codeconsortium/ccdn-forum-bundle/CCDNForum/ForumBundle/Resources/config/validation.yml',
            ),
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.translation_domain' => 'validators',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => 'file:/Applications/MAMP/htdocs/jlfa/app/cache/dev/profiler',
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/assetic/routing.yml',
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_AUTHOR',
                    1 => 'ROLE_MODERATOR',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'security.acl.permission_granting_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\PermissionGrantingStrategy',
            'security.acl.voter.class' => 'Symfony\\Component\\Security\\Acl\\Voter\\AclVoter',
            'security.acl.permission.map.class' => 'Symfony\\Component\\Security\\Acl\\Permission\\BasicPermissionMap',
            'security.acl.object_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\ObjectIdentityRetrievalStrategy',
            'security.acl.security_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\SecurityIdentityRetrievalStrategy',
            'security.acl.cache.doctrine.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\DoctrineAclCache',
            'security.acl.collection_cache.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\AclCollectionCache',
            'security.acl.dbal.provider.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\MutableAclProvider',
            'security.acl.dbal.schema.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\Schema',
            'security.acl.dbal.schema_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\EventListener\\AclSchemaListener',
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape_service' => NULL,
                'autoescape_service_method' => NULL,
                'cache' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/twig',
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.firephp' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => 'ssl',
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'smtp.gmail.com',
            'swiftmailer.mailer.default.transport.smtp.username' => 'bastien.eichenberger',
            'swiftmailer.mailer.default.transport.smtp.password' => 'chabert17321732',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => 'login',
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/assetic',
            'assetic.bundles' => array(
                0 => 'JlfaWebSiteBundle',
                1 => 'FOSUserBundle',
                2 => 'SdzBlogBundle',
                3 => 'JlfaForumBundle',
                4 => 'CCDNForumForumBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/Applications/MAMP/htdocs/jlfa/app/../web',
            'assetic.write_to' => '/Applications/MAMP/htdocs/jlfa/app/../web',
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => 'C:\\Program Files (x86)\\Java\\jre7\\bin\\java.exe',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.yui_js.class' => 'Assetic\\Filter\\Yui\\JsCompressorFilter',
            'assetic.filter.yui_js.java' => 'C:\\Program Files (x86)\\Java\\jre7\\bin\\java.exe',
            'assetic.filter.yui_js.jar' => '/Applications/MAMP/htdocs/jlfa/app/Resources/java/yuicompressor.jar',
            'assetic.filter.yui_js.charset' => 'UTF-8',
            'assetic.filter.yui_js.stacksize' => NULL,
            'assetic.filter.yui_js.timeout' => NULL,
            'assetic.filter.yui_js.nomunge' => NULL,
            'assetic.filter.yui_js.preserve_semi' => NULL,
            'assetic.filter.yui_js.disable_optimizations' => NULL,
            'assetic.filter.yui_css.class' => 'Assetic\\Filter\\Yui\\CssCompressorFilter',
            'assetic.filter.yui_css.java' => 'C:\\Program Files (x86)\\Java\\jre7\\bin\\java.exe',
            'assetic.filter.yui_css.jar' => '/Applications/MAMP/htdocs/jlfa/app/Resources/java/yuicompressor.jar',
            'assetic.filter.yui_css.charset' => 'UTF-8',
            'assetic.filter.yui_css.stacksize' => NULL,
            'assetic.filter.yui_css.timeout' => NULL,
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'geometry' => array(
                    'class' => 'CrEOF\\Spatial\\DBAL\\Types\\GeometryType',
                    'commented' => true,
                ),
                'point' => array(
                    'class' => 'CrEOF\\Spatial\\DBAL\\Types\\Geometry\\PointType',
                    'commented' => true,
                ),
                'polygon' => array(
                    'class' => 'CrEOF\\Spatial\\DBAL\\Types\\Geometry\\PolygonType',
                    'commented' => true,
                ),
                'linestring' => array(
                    'class' => 'CrEOF\\Spatial\\DBAL\\Types\\Geometry\\LineStringType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'jms_aop.cache_dir' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/jms_aop',
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'jms_di_extra.metadata.driver.annotation_driver.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_di_extra.metadata.driver.configured_controller_injections.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\ConfiguredControllerInjectionsDriver',
            'jms_di_extra.metadata.driver.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_di_extra.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_di_extra.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_di_extra.metadata.converter.class' => 'JMS\\DiExtraBundle\\Metadata\\MetadataConverter',
            'jms_di_extra.controller_resolver.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerResolver',
            'jms_di_extra.controller_injectors_warmer.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerInjectorsWarmer',
            'jms_di_extra.all_bundles' => false,
            'jms_di_extra.bundles' => array(

            ),
            'jms_di_extra.directories' => array(

            ),
            'jms_di_extra.cache_dir' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/jms_diextra',
            'jms_di_extra.disable_grep' => false,
            'jms_di_extra.doctrine_integration' => true,
            'jms_di_extra.cache_warmer.controller_file_blacklist' => array(

            ),
            'jms_di_extra.doctrine_integration.entity_manager.file' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/jms_diextra/doctrine/EntityManager_5333d09161c90.php',
            'jms_di_extra.doctrine_integration.entity_manager.class' => 'EntityManager5333d09161c90_546a8d27f194334ee012bfe64f629947b07e4919\\__CG__\\Doctrine\\ORM\\EntityManager',
            'security.secured_services' => array(

            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.method_access_control' => array(

            ),
            'security.access.remembering_access_decision_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RememberingAccessDecisionManager',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'security.extra.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'security.extra.driver_chain.class' => 'Metadata\\Driver\\DriverChain',
            'security.extra.annotation_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'security.extra.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'security.access.secure_all_services' => false,
            'security.extra.cache_dir' => '/Applications/MAMP/htdocs/jlfa/app/cache/dev/jms_security',
            'security.acl.permission_evaluator.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\PermissionEvaluator',
            'security.acl.has_permission_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\HasPermissionFunctionCompiler',
            'security.expressions.voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\LazyLoadingExpressionVoter',
            'security.expressions.handler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ContainerAwareExpressionHandler',
            'security.expressions.compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ExpressionCompiler',
            'security.expressions.expression.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Expression',
            'security.expressions.variable_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ContainerAwareVariableCompiler',
            'security.expressions.parameter_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ParameterExpressionCompiler',
            'security.expressions.reverse_interpreter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ReverseInterpreter',
            'security.extra.config_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\ConfigDriver',
            'security.extra.twig_extension.class' => 'JMS\\SecurityExtraBundle\\Twig\\SecurityExtension',
            'security.authenticated_voter.disabled' => false,
            'security.role_voter.disabled' => false,
            'security.acl_voter.disabled' => false,
            'security.extra.iddqd_ignore_roles' => array(
                0 => 'ROLE_PREVIOUS_ADMIN',
            ),
            'security.iddqd_aliases' => array(

            ),
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'fr_FR',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => true,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Sdz\\UserBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => true,
            'fos_user.registration.form.type' => 'sdz_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'templating.helper.markdown.class' => 'Knp\\Bundle\\MarkdownBundle\\Helper\\MarkdownHelper',
            'bazinga.exposetranslation.finder.translation_finder.class' => 'Bazinga\\ExposeTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.exposetranslation.dumper.translation_dumper.class' => 'Bazinga\\ExposeTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.exposetranslation.controller.class' => 'Bazinga\\ExposeTranslationBundle\\Controller\\Controller',
            'apy_js_form_validation.enabled' => true,
            'apy_js_form_validation.yui_js' => false,
            'apy_js_form_validation.check_modes' => array(
                0 => 'submit',
                1 => 'blur',
            ),
            'apy_js_form_validation.script_directory' => 'bundles/jsformvalidation/js/',
            'apy_js_form_validation.validation_bundle' => 'APYJsFormValidationBundle',
            'apy_js_form_validation.javascript_framework' => 'jquery',
            'apy_js_form_validation.warmer_routes' => array(

            ),
            'apy_js_form_validation.identifier_field' => 'jsfv_identifier',
            'apy_js_form_validation.translation_group' => 'validators',
            'jsfv.generator.class' => 'APY\\JsFormValidationBundle\\Generator\\FormValidationScriptGenerator',
            'twig.extension.jsformvalidation.class' => 'APY\\JsFormValidationBundle\\Twig\\Extension\\JsFormValidationTwigExtension',
            'kernel.cache_warmer.jsformvalidation.class' => 'APY\\JsFormValidationBundle\\CacheWarmer\\JsFormValidationCacheWarmer',
            'form.type_extension.validation_groups.class' => 'APY\\JsFormValidationBundle\\Form\\Extension\\FormTypeExtension',
            'form.type_extension.repeated_field_parameters.class' => 'APY\\JsFormValidationBundle\\Form\\Extension\\RepeatedTypeExtension',
            'jsfv.validation_groups_listener.class' => 'APY\\JsFormValidationBundle\\EventListener\\ValidationGroupsListener',
            'jsfv.repeated_field_listener.class' => 'APY\\JsFormValidationBundle\\EventListener\\RepeatedFieldListener',
            'jsfv.controller.class' => 'APY\\JsFormValidationBundle\\Controller\\Controller',
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.templating.helper.pagination.class' => 'Knp\\Bundle\\PaginatorBundle\\Templating\\PaginationHelper',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:sliding.html.twig',
            'knp_paginator.template.filtration' => 'KnpPaginatorBundle:Pagination:filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'ccdn_forum_forum.entity.forum.class' => 'CCDNForum\\ForumBundle\\Entity\\Forum',
            'ccdn_forum_forum.entity.category.class' => 'CCDNForum\\ForumBundle\\Entity\\Category',
            'ccdn_forum_forum.entity.board.class' => 'CCDNForum\\ForumBundle\\Entity\\Board',
            'ccdn_forum_forum.entity.topic.class' => 'CCDNForum\\ForumBundle\\Entity\\Topic',
            'ccdn_forum_forum.entity.post.class' => 'CCDNForum\\ForumBundle\\Entity\\Post',
            'ccdn_forum_forum.entity.subscription.class' => 'CCDNForum\\ForumBundle\\Entity\\Subscription',
            'ccdn_forum_forum.entity.registry.class' => 'CCDNForum\\ForumBundle\\Entity\\Registry',
            'ccdn_forum_forum.gateway.forum.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Gateway\\ForumGateway',
            'ccdn_forum_forum.gateway.category.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Gateway\\CategoryGateway',
            'ccdn_forum_forum.gateway.board.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Gateway\\BoardGateway',
            'ccdn_forum_forum.gateway.topic.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Gateway\\TopicGateway',
            'ccdn_forum_forum.gateway.post.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Gateway\\PostGateway',
            'ccdn_forum_forum.gateway.subscription.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Gateway\\SubscriptionGateway',
            'ccdn_forum_forum.gateway.registry.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Gateway\\RegistryGateway',
            'ccdn_forum_forum.repository.forum.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Repository\\ForumRepository',
            'ccdn_forum_forum.repository.category.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Repository\\CategoryRepository',
            'ccdn_forum_forum.repository.board.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Repository\\BoardRepository',
            'ccdn_forum_forum.repository.topic.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Repository\\TopicRepository',
            'ccdn_forum_forum.repository.post.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Repository\\PostRepository',
            'ccdn_forum_forum.repository.subscription.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Repository\\SubscriptionRepository',
            'ccdn_forum_forum.repository.registry.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Repository\\RegistryRepository',
            'ccdn_forum_forum.manager.forum.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Manager\\ForumManager',
            'ccdn_forum_forum.manager.category.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Manager\\CategoryManager',
            'ccdn_forum_forum.manager.board.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Manager\\BoardManager',
            'ccdn_forum_forum.manager.topic.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Manager\\TopicManager',
            'ccdn_forum_forum.manager.post.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Manager\\PostManager',
            'ccdn_forum_forum.manager.subscription.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Manager\\SubscriptionManager',
            'ccdn_forum_forum.manager.registry.class' => 'CCDNForum\\ForumBundle\\Model\\Component\\Manager\\RegistryManager',
            'ccdn_forum_forum.model.forum.class' => 'CCDNForum\\ForumBundle\\Model\\FrontModel\\ForumModel',
            'ccdn_forum_forum.model.category.class' => 'CCDNForum\\ForumBundle\\Model\\FrontModel\\CategoryModel',
            'ccdn_forum_forum.model.board.class' => 'CCDNForum\\ForumBundle\\Model\\FrontModel\\BoardModel',
            'ccdn_forum_forum.model.topic.class' => 'CCDNForum\\ForumBundle\\Model\\FrontModel\\TopicModel',
            'ccdn_forum_forum.model.post.class' => 'CCDNForum\\ForumBundle\\Model\\FrontModel\\PostModel',
            'ccdn_forum_forum.model.subscription.class' => 'CCDNForum\\ForumBundle\\Model\\FrontModel\\SubscriptionModel',
            'ccdn_forum_forum.model.registry.class' => 'CCDNForum\\ForumBundle\\Model\\FrontModel\\RegistryModel',
            'ccdn_forum_forum.form.type.forum_create.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Forum\\ForumCreateFormType',
            'ccdn_forum_forum.form.type.forum_update.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Forum\\ForumUpdateFormType',
            'ccdn_forum_forum.form.type.forum_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Forum\\ForumDeleteFormType',
            'ccdn_forum_forum.form.type.category_create.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Category\\CategoryCreateFormType',
            'ccdn_forum_forum.form.type.category_update.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Category\\CategoryUpdateFormType',
            'ccdn_forum_forum.form.type.category_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Category\\CategoryDeleteFormType',
            'ccdn_forum_forum.form.type.board_create.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Board\\BoardCreateFormType',
            'ccdn_forum_forum.form.type.board_update.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Board\\BoardUpdateFormType',
            'ccdn_forum_forum.form.type.board_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Admin\\Board\\BoardDeleteFormType',
            'ccdn_forum_forum.form.type.topic_create.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\User\\Topic\\TopicCreateFormType',
            'ccdn_forum_forum.form.type.topic_update.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\User\\Topic\\TopicUpdateFormType',
            'ccdn_forum_forum.form.type.topic_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Moderator\\Topic\\TopicDeleteFormType',
            'ccdn_forum_forum.form.type.change_topics_board.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Moderator\\Topic\\TopicChangeBoardFormType',
            'ccdn_forum_forum.form.type.post_create.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\User\\Post\\PostCreateFormType',
            'ccdn_forum_forum.form.type.post_update.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\User\\Post\\PostUpdateFormType',
            'ccdn_forum_forum.form.type.post_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\User\\Post\\PostDeleteFormType',
            'ccdn_forum_forum.form.type.post_unlock.class' => 'CCDNForum\\ForumBundle\\Form\\Type\\Moderator\\Post\\PostUnlockFormType',
            'ccdn_forum_forum.form.handler.forum_create.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Forum\\ForumCreateFormHandler',
            'ccdn_forum_forum.form.handler.forum_update.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Forum\\ForumUpdateFormHandler',
            'ccdn_forum_forum.form.handler.forum_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Forum\\ForumDeleteFormHandler',
            'ccdn_forum_forum.form.handler.category_create.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Category\\CategoryCreateFormHandler',
            'ccdn_forum_forum.form.handler.category_update.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Category\\CategoryUpdateFormHandler',
            'ccdn_forum_forum.form.handler.category_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Category\\CategoryDeleteFormHandler',
            'ccdn_forum_forum.form.handler.board_create.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Board\\BoardCreateFormHandler',
            'ccdn_forum_forum.form.handler.board_update.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Board\\BoardUpdateFormHandler',
            'ccdn_forum_forum.form.handler.board_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Admin\\Board\\BoardDeleteFormHandler',
            'ccdn_forum_forum.form.handler.topic_create.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\User\\Topic\\TopicCreateFormHandler',
            'ccdn_forum_forum.form.handler.topic_update.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\User\\Topic\\TopicUpdateFormHandler',
            'ccdn_forum_forum.form.handler.topic_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Moderator\\Topic\\TopicDeleteFormHandler',
            'ccdn_forum_forum.form.handler.change_topics_board.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Moderator\\Topic\\TopicChangeBoardFormHandler',
            'ccdn_forum_forum.form.handler.post_create.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\User\\Post\\PostCreateFormHandler',
            'ccdn_forum_forum.form.handler.post_update.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\User\\Post\\PostUpdateFormHandler',
            'ccdn_forum_forum.form.handler.post_delete.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\User\\Post\\PostDeleteFormHandler',
            'ccdn_forum_forum.form.handler.post_unlock.class' => 'CCDNForum\\ForumBundle\\Form\\Handler\\Moderator\\Post\\PostUnlockFormHandler',
            'ccdn_forum_forum.component.integrator.dashboard.class' => 'CCDNForum\\ForumBundle\\Component\\Integrator\\DashboardIntegrator',
            'ccdn_forum_forum.component.crumb_factory.class' => 'CCDNForum\\ForumBundle\\Component\\Crumbs\\Factory\\CrumbFactory',
            'ccdn_forum_forum.component.crumb_builder.class' => 'CCDNForum\\ForumBundle\\Component\\Crumbs\\CrumbBuilder',
            'ccdn_forum_forum.component.security.authorizer.class' => 'CCDNForum\\ForumBundle\\Component\\Security\\Authorizer',
            'ccdn_forum_forum.component.flood_control.class' => 'CCDNForum\\ForumBundle\\Component\\FloodControl',
            'ccdn_forum_forum.component.helper.role.class' => 'CCDNForum\\ForumBundle\\Component\\Helper\\RoleHelper',
            'ccdn_forum_forum.component.helper.pagination_config.class' => 'CCDNForum\\ForumBundle\\Component\\Helper\\PaginationConfigHelper',
            'ccdn_forum_forum.component.helper.post_lock.class' => 'CCDNForum\\ForumBundle\\Component\\Helper\\PostLockHelper',
            'ccdn_forum_forum.component.twig_extension.board_list.class' => 'CCDNForum\\ForumBundle\\Component\\TwigExtension\\BoardListExtension',
            'ccdn_forum_forum.component.twig_extension.authorizer.class' => 'CCDNForum\\ForumBundle\\Component\\TwigExtension\\AuthorizerExtension',
            'ccdn_forum_forum.component.event_listener.flash.class' => 'CCDNForum\\ForumBundle\\Component\\Dispatcher\\Listener\\FlashListener',
            'ccdn_forum_forum.component.event_listener.subscriber.class' => 'CCDNForum\\ForumBundle\\Component\\Dispatcher\\Listener\\SubscriberListener',
            'ccdn_forum_forum.component.event_listener.stats.class' => 'CCDNForum\\ForumBundle\\Component\\Dispatcher\\Listener\\StatListener',
            'ccdn_forum_forum.template.engine' => 'twig',
            'ccdn_forum_forum.template.pager_theme' => NULL,
            'ccdn_forum_forum.fixtures.user_admin' => 'user-admin',
            'ccdn_forum_forum.seo.title_length' => '67',
            'ccdn_forum_forum.forum.admin.create.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.forum.admin.create.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.forum.admin.edit.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.forum.admin.edit.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.forum.admin.delete.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.forum.admin.delete.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.forum.admin.list.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.category.admin.create.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.category.admin.create.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.category.admin.edit.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.category.admin.edit.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.category.admin.delete.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.category.admin.delete.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.category.admin.list.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.category.user.last_post_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.category.user.index.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.category.user.show.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.board.admin.create.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.board.admin.create.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.board.admin.edit.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.board.admin.edit.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.board.admin.delete.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.board.admin.delete.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.board.admin.list.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.board.user.show.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.board.user.show.topics_per_page' => '50',
            'ccdn_forum_forum.board.user.show.topic_title_truncate' => '50',
            'ccdn_forum_forum.board.user.show.first_post_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.board.user.show.last_post_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.topic.moderator.change_board.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.topic.moderator.change_board.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.topic.moderator.delete.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.topic.moderator.delete.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.topic.user.flood_control.post_limit' => 0,
            'ccdn_forum_forum.topic.user.flood_control.block_for_minutes' => 0,
            'ccdn_forum_forum.topic.user.show.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.topic.user.show.posts_per_page' => '20',
            'ccdn_forum_forum.topic.user.show.closed_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.topic.user.show.deleted_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.topic.user.create.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.topic.user.create.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.topic.user.reply.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.topic.user.reply.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.post.moderator.unlock.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.post.moderator.unlock.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.post.user.show.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.post.user.edit.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.post.user.edit.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.post.user.delete.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.post.user.delete.form_theme' => 'form_div_layout.html.twig',
            'ccdn_forum_forum.post.user.lock.enable' => true,
            'ccdn_forum_forum.post.user.lock.after_days' => '7',
            'ccdn_forum_forum.item_post.created_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.item_post.edited_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.item_post.post_locked_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.item_post.deleted_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.subscription.list.layout_template' => 'CCDNForumForumBundle::base.html.twig',
            'ccdn_forum_forum.subscription.list.topics_per_page' => '50',
            'ccdn_forum_forum.subscription.list.topic_title_truncate' => '50',
            'ccdn_forum_forum.subscription.list.first_post_datetime_format' => 'd-m-Y - H:i',
            'ccdn_forum_forum.subscription.list.last_post_datetime_format' => 'd-m-Y - H:i',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio.distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => 'DoctrineBundle:Collector:db',
                ),
                'coresphere_console.toolbar' => array(
                    0 => 'coresphere_console',
                    1 => 'CoreSphereConsoleBundle:Toolbar:toolbar',
                ),
            ),
            'console.command.ids' => array(

            ),
        );
    }
}
