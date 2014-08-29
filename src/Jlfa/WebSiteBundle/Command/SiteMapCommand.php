<?php

namespace Jlfa\WebSiteBundle\Command;

/*
 * A Symfony2 Command for generating a sitemap for your site.
 * Execute with php app/console sitemap:generate
 */

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

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
        //$this->locales = $this->container->getParameter('locales');
        $this->links = array();
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->init();
        $output->writeln('Beginning sitemap generation');
        $output->writeln('Generating list of URLs...');
        $this->generateLinks();
        $output->writeln('Generating XML file...');
        $this->writeXML($this->links);
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


    protected function writeXML($list) {
        $this->initAppXmlObj();
        $this->updateXmlFile($list);
    }

    /**
     * Appends a row to a specific xml object
     *
     * @param SimpleXMLElement $xmlElement xml object for appending data
     * @param array $array row to add to the xml element
     * @return SimpleXMLElement
     */
    protected function addRow(SimpleXMLElement $xmlElement, array $array) {
        $record = $xmlElement->addChild('url');
        
        $record->addChild('loc', htmlspecialchars($array['url_fr']));
        $record->addChild('lastmod', htmlspecialchars($array['lastmod']));
        $record->addChild('changefreq', htmlspecialchars($array['changefreq']));
        $record->addChild('priority', htmlspecialchars($array['priority']));
        
        // set multilingue
        $link_fr = new SimpleXMLElement('<xhtml:link rel="alternate" hreflang="fr" href="' . htmlspecialchars($array['url_fr']) . '" />');
        $link_de = new SimpleXMLElement('<xhtml:link rel="alternate" hreflang="de" href="' . htmlspecialchars($array['url_de']) . '" />');
        $link_en = new SimpleXMLElement('<xhtml:link rel="alternate" hreflang="en" href="' . htmlspecialchars($array['url_en']) . '" />');
        
        $this->sxml_append($record, $link_fr);
        $this->sxml_append($record, $link_de);
        $this->sxml_append($record, $link_en);
        
        return $xmlElement;
    }

    /**
     * Updates the Xml object laying in SAVE_LOCATION
     *
     * @param $rows array an array of sitemap links
     */
    protected function updateXmlFile(array $rows) {
        foreach ($rows as $rowArray) {
            $this->addRow($this->sitemapXml, $rowArray);
        }
        $dom = dom_import_simplexml($this->sitemapXml)->ownerDocument;
        $dom->formatOutput = true;
        file_put_contents($this->xmlOutputFile, $dom->saveXML());
    }

    /**
     * Initiates the appXml object
     * @param InputInterface $input
     */
    private function initAppXmlObj() {
        $this->sitemapXml = new SimpleXMLElement('<urlset/>');
        $this->sitemapXml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $this->sitemapXml->addAttribute("xhtml:type", "xhtml:namespace", "http://www.w3.org/1999/xhtml"); // support multilingue
        $this->xmlOutputFile = self::getDir();
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
    
    private function sxml_append(SimpleXMLElement $to, SimpleXMLElement $from) {
        $toDom = dom_import_simplexml($to);
        $fromDom = dom_import_simplexml($from);
        $toDom->appendChild($toDom->ownerDocument->importNode($fromDom, true));
    }
    
    
}