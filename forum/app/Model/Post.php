<?php
	class Post extends AppModel{
		public function isOwnedBy($post, $user) {
    		return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
		}
		public $hasMany=array('Comment'=>array('classname'=>'Comment',
												'foreignKey'=>'post_id',
												'dependent'=>true));
		//public $hasMany=array('Comment');										
		public $belongsTo=array(
			'User'
		);
	}
?>