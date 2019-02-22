var Post = function($url,$subUrl,$id) {
	this.$url = $url+$subUrl+ "/"+$id;
	this.$data = Object();
	this.$sendPost = Post.ajax;
};

Post.ajax = {
	constructor:  Post,
	setPost : function($data){
		post.$data = $.ajax({
			url : post.$url,
			dataType : 'JSON',
			type : 'POST',
			data : $data,
			async: false,
			cache: false,
			contentType: false,
			processData: false,
		}).responseText;
	},
	getPost : function () {
		//JSON.parsepost.$data = ((Object.keys(post.$data ).length === 0))  ? {"estado" : false} : (post.$data);
		return post.$data;
	},
	setGet : function ($c,$data) {
		post.$data = $.ajax({
			url : post.$url+"/?"+$c+"="+$data,
			dataType : 'JSON',
			type : 'GET',
			async: false,
		}).responseText;
	},
	setNpost : function($data){
		post.$data = $.ajax({
			url : post.$url,
			dataType : 'JSON',
			type : 'POST',
			data : $data,
			async: false
		}).responseText;
	},
	getGEt : function () {
		post.$data = ((Object.keys(post.$data ).length === 0))  ? {"estado" : false} : (post.$data);
		return post.$data;
	},

};
//Post.ajax.constructor = Post;
Post.ajax.ajax = Post;
var urlPost = "";

