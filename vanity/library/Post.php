<?php
class Post
{
    public function __construct($data = null)
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $this->$key = $value;
            }
        }
    }
    
    public function loadUser()
    {
        if (!$this->user) {
            $this->user = User::getBy('id', $this->user_id);
        }
    }
    
    public static function create($user_id, $content)
    {
        $sql = "INSERT INTO posts (`user_id`, `content`, `created_at`)
        		VALUES (?, ?, ?)";
        $db = Database::getInstance();
        $db->query($sql, array($user_id, $content, time()));
        if ($db->numRows()) {
            return true;
        }
        return false;
    }
    
    public function getTimestamp()
    {
        return date("Y-m-d H:i:s", $this->created_at);
    }
    
    public static function get($num = 5)
    {
        $db = Database::getInstance();
        $sql = "SELECT * 
        		FROM posts
        		ORDER BY created_at DESC
        		LIMIT ?";
        $results = $db->query($sql, $num);
        $postObjects = array();
        foreach ($results as $result) {
            $post = new Post($result);
            $post->loadUser();
            $postObjects[] = $post;
        }
        return $postObjects;
    }
}