<?php declare(strict_types=1);

namespace EdmondsCommerce\CatalinTrainingXML\Reddit;

use SimpleXMLElement;

class Feed
{
    // https://www.reddit.com/r/CafeRacers/
    public function getFeed()
    {
        $feed = file_get_contents('https://www.reddit.com/r/CafeRacers/.rss');

        $xml = new SimpleXMLElement($feed);

        $result = $xml->entry[1];

        return $result;
    }
}