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
        foreach ($xml->entry as $t)
        {
            print_r($t->title[0]->asXML());
            print_r("\n");
            print_r($t->author->name->asXML());
            print_r("\n");
            print_r("\n");
        }
    }
}