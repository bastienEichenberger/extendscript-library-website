<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/main')) {
            // _assetic_324f466
            if ($pathinfo === '/css/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '324f466',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_324f466',);
            }

            if (0 === strpos($pathinfo, '/css/main_')) {
                // _assetic_324f466_0
                if ($pathinfo === '/css/main_leaflet_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '324f466',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_324f466_0',);
                }

                // _assetic_324f466_1
                if ($pathinfo === '/css/main_map_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '324f466',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_324f466_1',);
                }

                if (0 === strpos($pathinfo, '/css/main_MarkerCluster')) {
                    // _assetic_324f466_2
                    if ($pathinfo === '/css/main_MarkerCluster_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '324f466',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_324f466_2',);
                    }

                    // _assetic_324f466_3
                    if ($pathinfo === '/css/main_MarkerCluster.Default_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '324f466',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_324f466_3',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/main')) {
            // _assetic_51021b2
            if ($pathinfo === '/js/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '51021b2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_51021b2',);
            }

            if (0 === strpos($pathinfo, '/js/main_')) {
                // _assetic_51021b2_0
                if ($pathinfo === '/js/main_countries_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51021b2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_51021b2_0',);
                }

                if (0 === strpos($pathinfo, '/js/main_m')) {
                    // _assetic_51021b2_1
                    if ($pathinfo === '/js/main_members_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51021b2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_51021b2_1',);
                    }

                    // _assetic_51021b2_2
                    if ($pathinfo === '/js/main_map-choropleth_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51021b2',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_51021b2_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/main')) {
            // _assetic_4428d6b
            if ($pathinfo === '/css/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4428d6b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4428d6b',);
            }

            // _assetic_4428d6b_0
            if ($pathinfo === '/css/main_prettify_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4428d6b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4428d6b_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/main')) {
            // _assetic_b00b151
            if ($pathinfo === '/js/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b00b151',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b00b151',);
            }

            // _assetic_b00b151_0
            if ($pathinfo === '/js/main_prettify_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b00b151',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b00b151_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/main')) {
            // _assetic_a5833f9
            if ($pathinfo === '/css/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a5833f9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a5833f9',);
            }

            // _assetic_a5833f9_0
            if ($pathinfo === '/css/main_form_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a5833f9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a5833f9_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/main')) {
            // _assetic_61ff6e3
            if ($pathinfo === '/js/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '61ff6e3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_61ff6e3',);
            }

            if (0 === strpos($pathinfo, '/js/main_')) {
                // _assetic_61ff6e3_0
                if ($pathinfo === '/js/main_jquery.geocomplete.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '61ff6e3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_61ff6e3_0',);
                }

                // _assetic_61ff6e3_1
                if ($pathinfo === '/js/main_translator.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '61ff6e3',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_61ff6e3_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/main')) {
            // _assetic_9a4c8fc
            if ($pathinfo === '/css/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9a4c8fc',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9a4c8fc',);
            }

            // _assetic_9a4c8fc_0
            if ($pathinfo === '/css/main_signin_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9a4c8fc',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9a4c8fc_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/main')) {
            if (0 === strpos($pathinfo, '/js/main.js')) {
                // _assetic_042232e
                if ($pathinfo === '/js/main.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '042232e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_042232e',);
                }

                // _assetic_28985a3
                if ($pathinfo === '/js/main.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28985a3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_28985a3',);
                }

            }

            // _assetic_28985a3_0
            if ($pathinfo === '/js/main_translator.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '28985a3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_28985a3_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/main')) {
            // _assetic_6cd9740
            if ($pathinfo === '/css/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6cd9740',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6cd9740',);
            }

            // _assetic_6cd9740_0
            if ($pathinfo === '/css/main_blog_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6cd9740',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6cd9740_0',);
            }

            // _assetic_a059ca5
            if ($pathinfo === '/css/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a059ca5',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a059ca5',);
            }

            // _assetic_a059ca5_0
            if ($pathinfo === '/css/main_forum_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a059ca5',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a059ca5_0',);
            }

            // _assetic_698357f
            if ($pathinfo === '/css/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '698357f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_698357f',);
            }

            if (0 === strpos($pathinfo, '/css/main_')) {
                // _assetic_698357f_0
                if ($pathinfo === '/css/main_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '698357f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_698357f_0',);
                }

                // _assetic_698357f_1
                if ($pathinfo === '/css/main_theme_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '698357f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_698357f_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/main')) {
            // _assetic_0304230
            if ($pathinfo === '/js/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0304230',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0304230',);
            }

            if (0 === strpos($pathinfo, '/js/main_')) {
                // _assetic_0304230_0
                if ($pathinfo === '/js/main_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0304230',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0304230_0',);
                }

                // _assetic_0304230_1
                if ($pathinfo === '/js/main_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0304230',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0304230_1',);
                }

                // _assetic_0304230_2
                if ($pathinfo === '/js/main_holder_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0304230',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_0304230_2',);
                }

                // _assetic_0304230_3
                if ($pathinfo === '/js/main_nav_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0304230',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_0304230_3',);
                }

            }

        }

        // SdzBlogBundle_traduction
        if (preg_match('#^/(?P<_locale>[^/]++)/traduction/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'SdzBlogBundle_traduction')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::traductionAction',));
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/console')) {
            // console
            if (rtrim($pathinfo, '/') === '/console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'console');
                }

                return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (preg_match('#^/console(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        // root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'root');
            }

            return array (  '_controller' => 'Jlfa\\WebSiteBundle\\Controller\\WebSiteController::homeAction',  'path' => '/fr/',  'permanent' => true,  '_route' => 'root',);
        }

        // jlfa_web_site_homepage
        if (preg_match('#^/(?P<_locale>fr|en|de)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'jlfa_web_site_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jlfa_web_site_homepage')), array (  '_controller' => 'Jlfa\\WebSiteBundle\\Controller\\WebSiteController::homeAction',));
        }

        // jlfa_web_site_startpage
        if (preg_match('#^/(?P<_locale>fr|en|de)/start$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jlfa_web_site_startpage')), array (  '_controller' => 'Jlfa\\WebSiteBundle\\Controller\\WebSiteController::startAction',));
        }

        // jlfa_web_site_participatepage
        if (preg_match('#^/(?P<_locale>fr|en|de)/participate$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jlfa_web_site_participatepage')), array (  '_controller' => 'Jlfa\\WebSiteBundle\\Controller\\WebSiteController::participateAction',));
        }

        // jlfa_web_site_todolistpage
        if (preg_match('#^/(?P<_locale>fr|en|de)/to\\-do\\-list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jlfa_web_site_todolistpage')), array (  '_controller' => 'Jlfa\\WebSiteBundle\\Controller\\WebSiteController::todolistAction',));
        }

        // jlfa_web_site_contributorspage
        if (preg_match('#^/(?P<_locale>fr|en|de)/contributors$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jlfa_web_site_contributorspage')), array (  '_controller' => 'Jlfa\\WebSiteBundle\\Controller\\WebSiteController::contributorsAction',));
        }

        // jlfa_web_site_licencespage
        if (preg_match('#^/(?P<_locale>fr|en|de)/licences$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jlfa_web_site_licencespage')), array (  '_controller' => 'Jlfa\\WebSiteBundle\\Controller\\WebSiteController::licencesAction',));
        }

        // jlfa_jsdoc
        if (preg_match('#^/(?P<_locale>fr|en|de)/jsdoc$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jlfa_jsdoc')), array (  '_controller' => 'Jlfa\\WebSiteBundle\\Controller\\WebSiteController::jsDocAction',));
        }

        // sdzblog_voir
        if (preg_match('#^/(?P<_locale>fr|en|de)/blog/post/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirAction',));
        }

        // sdzblog_accueil
        if (preg_match('#^/(?P<_locale>fr|en|de)/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_accueil')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
        }

        // sdzblog_add_post
        if (preg_match('#^/(?P<_locale>fr|en|de)/blog/add\\-post$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_add_post')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::addPostAction',));
        }

        // sdzblog_edit_post
        if (preg_match('#^/(?P<_locale>fr|en|de)/blog/edit\\-post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_edit_post')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::editAction',));
        }

        // sdzblog_supprimer
        if (preg_match('#^/(?P<_locale>fr|en|de)/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_supprimer')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::supprimerAction',));
        }

        // sdzblog_ajouter_commentaire
        if (preg_match('#^/(?P<_locale>fr|en|de)/blog/ajouter/(?P<id>\\d+)/commentaire$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sdzblog_ajouter_commentaire;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_ajouter_commentaire')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::ajouterCommentaireAction',));
        }
        not_sdzblog_ajouter_commentaire:

        // sdzblog_supprimer_commentaire
        if (preg_match('#^/(?P<_locale>fr|en|de)/blog/supprimer/commentaire/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_supprimer_commentaire')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::supprimerCommentaireAction',));
        }

        // fos_user_profile_show_by_username
        if (preg_match('#^/(?P<_locale>fr|en|de)/profile/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_profile_show_by_username;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show_by_username')), array (  '_controller' => 'Sdz\\UserBundle\\Controller\\ProfileController::showAction',));
        }
        not_fos_user_profile_show_by_username:

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>fr|en|de)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',));
        }

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>fr|en|de)/login_check$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>fr|en|de)/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_logout')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',));
        }

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'Sdz\\UserBundle\\Controller\\ProfileController::showAction',));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'Sdz\\UserBundle\\Controller\\ProfileController::editAction',));
        }

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>[^/]++)/register/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'Sdz\\UserBundle\\Controller\\RegistrationController::registerAction',));
        }

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/register/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'Sdz\\UserBundle\\Controller\\RegistrationController::checkEmailAction',));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sdz\\UserBundle\\Controller\\RegistrationController::confirmAction',));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirmed$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirmed;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'Sdz\\UserBundle\\Controller\\RegistrationController::confirmedAction',));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/request$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_request;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>[^/]++)/change\\-password/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',));
        }
        not_fos_user_change_password:

        // bazinga_exposetranslation_js
        if (0 === strpos($pathinfo, '/i18n') && preg_match('#^/i18n/(?P<domain_name>[^/]++)/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bazinga_exposetranslation_js')), array (  '_controller' => 'bazinga.exposetranslation.controller:exposeTranslationAction',  'domain_name' => 'messages',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/jsfv')) {
            // apy_js_form_validation_unique_entity
            if (0 === strpos($pathinfo, '/jsfv/unique-entity') && preg_match('#^/jsfv/unique\\-entity\\.(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apy_js_form_validation_unique_entity')), array (  '_controller' => 'jsfv.controller:uniqueEntityAction',  '_format' => 'json',));
            }

            // apy_js_form_validation_checkmx
            if (0 === strpos($pathinfo, '/jsfv/checkmx') && preg_match('#^/jsfv/checkmx(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apy_js_form_validation_checkmx')), array (  '_controller' => 'jsfv.controller:checkMxAction',  '_format' => 'json',));
            }

        }

        // ccdn_forum_admin_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminPanelController::IndexAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_forum_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/edit/(?P<forumId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/edit/(?P<forumId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/delete/(?P<forumId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/delete/(?P<forumId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_category_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/edit/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/edit/(?P<categoryId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/delete/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/delete/(?P<categoryId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_reorder_up
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/reorder/(?P<categoryId>[^/]++)/up$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_reorder_up')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::reorderAction',  '_locale' => 'en',  'direction' => 0,));
        }

        // ccdn_forum_admin_category_reorder_down
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/reorder/(?P<categoryId>[^/]++)/down$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_reorder_down')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::reorderAction',  '_locale' => 'en',  'direction' => 1,));
        }

        // ccdn_forum_admin_board_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_board_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/edit/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/edit/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/delete/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/delete/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_reorder_up
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/reorder/(?P<boardId>[^/]++)/up$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_reorder_up')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::reorderAction',  '_locale' => 'en',  'direction' => 0,));
        }

        // ccdn_forum_admin_board_reorder_down
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/reorder/(?P<boardId>[^/]++)/down$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_reorder_down')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::reorderAction',  '_locale' => 'en',  'direction' => 1,));
        }

        // ccdn_forum_moderator_topic_close
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/close$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_close')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::closeAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_reopen
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/reopen$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_reopen')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::reopenAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_sticky
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/sticky$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_sticky')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::stickyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_unsticky
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/unsticky$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_unsticky')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::unstickyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::deleteAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/delete/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::deleteProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_restore
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/restore$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_restore')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::restoreAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_change_board
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/change\\-board$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_change_board')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::changeBoardAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_change_board_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/change\\-board/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_change_board_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::changeBoardProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_post_lock
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/lock$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_lock')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::lockAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_unlock
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/unlock$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_unlock')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::unlockAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_unlock_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/unlock/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_unlock_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::unlockProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_restore
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/restore$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_restore')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::restoreAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_category_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum(?:/(?P<forumName>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_category_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserCategoryController::indexAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_category_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/category/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_category_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserCategoryController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_board_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/board/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_board_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserBoardController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/create/for\\-board/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::createAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/create/for\\-board/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::createProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_reply
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)/reply$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_reply')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::replyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_reply_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)/reply/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_reply_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::replyProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::editAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/edit/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::editProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::deleteAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/delete/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::deleteProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_subscription_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_user_subscription_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::indexAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_subscription_subscribe
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/topic/(?P<topicId>[^/]++)/subscribe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_subscribe')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::subscribeAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_subscription_unsubscribe
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/topic/(?P<topicId>[^/]++)/unsubscribe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_unsubscribe')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::unsubscribeAction',  '_locale' => 'en',));
        }

        // forum_jlfa_homepage
        if ($pathinfo === '/forum/jlfa') {
            return array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserCategoryController::indexAction',  '_locale' => 'en',  'forumName' => 'jlfa',  '_route' => 'forum_jlfa_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
