<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetSiteJournalResponse
{

    /**
     * @var ArrayOfSitejournal $siteJournalArray
     */
    protected $siteJournalArray = null;

    /**
     * @param ArrayOfSitejournal $siteJournalArray
     */
    public function __construct($siteJournalArray = null)
    {
      $this->siteJournalArray = $siteJournalArray;
    }

    /**
     * @return ArrayOfSitejournal
     */
    public function getSiteJournalArray()
    {
      return $this->siteJournalArray;
    }

    /**
     * @param ArrayOfSitejournal $siteJournalArray
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetSiteJournalResponse
     */
    public function setSiteJournalArray($siteJournalArray)
    {
      $this->siteJournalArray = $siteJournalArray;
      return $this;
    }

}
