<?php
/**
 * Created by PhpStorm.
 * User: Thomas MEDARD
 * Date: 11/12/15
 * Time: 16:12
 */

class RSSPost {
    private $link;
    private $title;
    private $pubDate;
    private $description;
    private $guid;
    private $author;
    private $category;

    private $summary;

    public function __toString()
    {
        return '        <p><a href="' . (isset($this->link) ? $this->link : '') . '">'
            . (isset($this->title) ? $this->title : '') . '</a>'
        . '<br/>' . "\n"
        . "         " . (isset($this->pubDate) ? $this->pubDate : '')
            . (isset($this->author) ? ' by ' . $this->author : '')
        . '<br/>' . "\n"
        . "         " . (isset($this->summary) ? $this->summary : '')
        . '</p>';
    }

    public function summarizeText($max_len) {
        $summary = strip_tags($this->description);
        // Truncate summary line to 100 characters
        if (strlen($summary) > $max_len)
            $this->summary = substr($summary, 0, $max_len) . '...';
        else
            $this->summary = $this->description;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * @param mixed $pubDate
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param mixed $guid
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
    private $comments;

    function __construct()
    {

    }
}