<?php

namespace Jlfa\WebSiteBundle\Command;

/*
 * A Symfony2 Command for generating a sitemap for your site.
 * Execute with php app/console sitemap:generate
 */

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use \DOMDocument;

class SiteMapCommand extends ContainerAwareCommand {

    const SAVE_LOCATION = '/../../../../web/sitemap.xml';

    private $router;
    private $links;
    private $locales;
    private $xmlOutputFile;
    private $sitemapXml;

    protected function configure() {
        $this
                ->setName('sitemap:generate')
                ->setDescription('Generate a sitemap');
    }

    protected function init() {
        $this->router = $this->getContainer()->get('router');
        $this->xmlOutputFile = self::getDir();
        $this->links = array();
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->init();
        $output->writeln('Beginning sitemap generation');
        $output->writeln('Generating list of URLs...');
        $this->generateLinks();
        $output->writeln('Generating XML file...');
        $this->updateXmlFile($this->links);
        $output->writeln('Complete!');
       
    }

    /*     * **************************************************** */

    /*
     * Call all the functions here which should add links to the collection.
     * In each of the functions called you should look up necessary data from your data source
     * in order to generate the links for each page.
     */

    protected function generateLinks() {
        $this->getSiteLinks();
        // add getForum and getBlog
    }

    /*
     * This is an example function for settings links. Create more functions for each section 
     * of your site.
     */

    protected function getForumLinks() {
        /**
         * @todo get forum links add the db connection
         */
    }

    protected function getBlogLinks() {
        /**
         * @todo get blog links add the db connection
         */
    }

    /*
     * This is an example function for settings links. Create more functions for each section 
     * of your site.
     */

    protected function getSiteLinks() {
        $this->addURL('jlfa_web_site_homepage', 'daily', '1.0');
        $this->addURL('jlfa_web_site_startpage', 'daily', '0.6' );
        $this->addURL('jlfa_web_site_participatepage', 'daily', '0.6' );
        $this->addURL('jlfa_web_site_contributorspage', 'daily', '0.6' );
        $this->addURL('jlfa_web_site_licencespage', 'daily', '0.6' );
        
    }


    /**
     * Appends a row to a specific xml object
     */
    protected function addRow(\DOMElement $root, array $array) {
        // $root = $this->sitemapXml->appendChild($this->sitemapXml->createElement('urlset')); 
        $urlNode = $root->appendChild($this->sitemapXml->createElement('url'));
        
        $urlNode->appendChild($this->sitemapXml->createElement('loc', htmlspecialchars($array['url_fr']) ) );
        $urlNode->appendChild($this->sitemapXml->createElement('lastmod', htmlspecialchars($array['lastmod']) ) );
        $urlNode->appendChild($this->sitemapXml->createElement('changefreq', htmlspecialchars($array['changefreq']) ) );
        $urlNode->appendChild($this->sitemapXml->createElement('priority', htmlspecialchars($array['priority']) ) );
        
        // set multilingue
        $link_fr_node = $this->sitemapXml->createElementNS('http://www.w3.org/1999/xhtml', 'xhtml:link', '');
        $link_fr_node->setAttribute("rel", "alternate");
        $link_fr_node->setAttribute("hreflang", "fr");
        $link_fr_node->setAttribute("href", htmlspecialchars($array['url_fr']));
        $urlNode->appendChild($link_fr_node);
        
        $link_de_node = $this->sitemapXml->createElementNS('http://www.w3.org/1999/xhtml', 'xhtml:link', '');
        $link_de_node->setAttribute("rel", "alternate");
        $link_de_node->setAttribute("hreflang", "de");
        $link_de_node->setAttribute("href", htmlspecialchars($array['url_de']));
        $urlNode->appendChild($link_de_node);
        
        $link_en_node = $this->sitemapXml->createElementNS('http://www.w3.org/1999/xhtml', 'xhtml:link', '');
        $link_en_node->setAttribute("rel", "alternate");
        $link_en_node->setAttribute("hreflang", "en");
        $link_en_node->setAttribute("href", htmlspecialchars($array['url_en']));
        $urlNode->appendChild($link_en_node);
        
    }

    /**
     * Updates the Xml object laying in SAVE_LOCATION
     *
     * @param $rows array an array of sitemap links
     */
    protected function updateXmlFile(array $rows) {
        
        $this->sitemapXml = new DOMDocument('1.0','UTF-8');
        $this->sitemapXml->formatOutput = true; // display with formating
        
        // root urlset
        $root = $this->sitemapXml->appendChild($this->sitemapXml->createElement('urlset')); 
        // xmlns
        $root->appendChild($this->sitemapXml->createAttribute('xmlns'))->appendChild($this->sitemapXml->createTextNode("http://www.sitemaps.org/schemas/sitemap/0.9"));
        // xmlns:xhtml
        $root->appendChild($this->sitemapXml->createAttribute('xmlns:xhtml'))->appendChild($this->sitemapXml->createTextNode("http://www.w3.org/1999/xhtml"));
        
        // record each links
        foreach ($rows as $rowArray) {
            $this->addRow($root, $rowArray);
        }
        
        file_put_contents($this->xmlOutputFile, $this->sitemapXml->saveXML());
    }

    
    
    
    private function addURL($url, $lastmod, $priority) {
        
        $url_fr = $this->router->generate($url, array('_locale' => 'fr'), true);
        $url_de = $this->router->generate($url, array('_locale' => 'de'), true);
        $url_en = $this->router->generate($url, array('_locale' => 'en'), true);
        array_push($this->links, 
                array(
                    'url_fr' => $url_fr, 
                    'lastmod' => $lastmod, 
                    'changefreq' => date('c',time() ), 
                    'priority' => $priority,
                    'url_de' => $url_de,
                    'url_en' => $url_en
                )
        );
    }
    
    private static function getDir() {
        return __DIR__. self::SAVE_LOCATION;
    }
   
   
    
    
}