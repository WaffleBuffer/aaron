<?php
/**
 * Created by PhpStorm.
 * User: m14002147
 * Date: 11/12/15
 * Time: 15:58
 */

require_once 'rssPost.php';

class RssFeed {
    private $url;
    private $rssPosts = array();

    /**
     * @return array
     */
    public function getRssPosts()
    {
        return $this->rssPosts;
    }

    /**
     * RssFeed constructor.
     * @param $url_or_file
     */
    function __construct($url_or_file)
    {
        $this->url = $this->resolveFile($url_or_file);

        //DEBUG---------
        //$this->url = $url_or_file;
        //$xmlFile = simplexml_load_file($this->url);
        //----------DEBUG
        //echo '<br/>' . $this->url . '<br/>';
        if (!($xmlFile = simplexml_load_file($this->url)))
        {
            return;
        }
        $data = $xmlFile->channel;
        foreach ($data->item as $item)
        {
            $post = new RSSPost();

            if (isset($item->link)) {
                $post->setLink($item->link);
            }
            if (isset($item->title)) {

                $post->setTitle($item->title);
            }
            if (isset($item->pubDate)) {
                $post->setPubDate($item->pubDate);
            }
            if (isset($item->description)) {
                $post->setDescription($item->description);
            }
            if (isset($item->guid)) {
                $post->setGuid($item->guid);
            }
            if (isset($item->author)) {
                $post->setAuthor($item->author);
            }
            if (isset($item->category)) {
                $post->setCategory($item->category);
            }
            $post->summarizeText(100);
            $this->rssPosts[] = $post;
        }
    }

    private function resolveFile($file_or_url) {
        if (!preg_match('|^https?:|', $file_or_url))
            $feed_uri = $_SERVER['DOCUMENT_ROOT'] .'/shared/xml/'. $file_or_url;
        else
            $feed_uri = $file_or_url;

        return $feed_uri;
    }


}
