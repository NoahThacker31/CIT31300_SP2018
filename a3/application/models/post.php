<?php
class Post extends Model{
	function getPost($pID){
		$sql =  "SELECT t1.pID, t1.title, t1.content, t1.date, t1.uID, t1.categoryID,
                t2.uID, t2.first_name, t2.last_name,
                t3.categoryID, t3.name FROM posts t1 INNER JOIN users t2 INNER JOIN categories t3 ON 
                t1.uID = t2.uID AND t1.categoryID = t3.categoryID WHERE t1.pID = ?";
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		$post = $results;
		return $post;
	}
		
	public function getAllPosts($limit = 0){
		if($limit > 0){
			$numposts = ' LIMIT '.$limit;
		}
		$sql =  "SELECT t1.pID, t1.title, t1.content, t1.date, t1.uID, t1.categoryID,
                t2.uID, t2.first_name, t2.last_name,
                t3.categoryID, t3.name FROM posts t1 INNER JOIN users t2 INNER JOIN categories t3 ON 
                t1.uID = t2.uID AND t1.categoryID = t3.categoryID";
		// perform query
		$results = $this->db->execute($sql);
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}
		return $posts;
	}
	
	public function addPost($data){
		$sql='INSERT INTO posts (title,content,categoryID,date,uID) VALUES (?,?,?,?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
	}
	
    public function editPost($pID,$data){
        $sql = 'UPDATE posts SET title=?, content=?, categoryID=?, date=? WHERE pID = '.$pID;
        echo 'The sequel statement is '.$sql."<br><br>";
		$this->db->execute($sql,$data);
		$message = 'Post Updated.';
		return $message;
    }
}