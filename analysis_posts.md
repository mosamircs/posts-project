# what this project about?
	- it's a block of posts has posts has comments 
## How we work on it ?
	using laravel and eloquont ORM
## User:
	- properties:
		1. id (int | Not Null | unique | increments)
		2. name (string |  Not null)
		3. password (string | Not Null)
	- methods:
		1. add post (store)
		2. show post specific by id and its comments(show)
		3. list all posts and its comments (index)
	
	## posts:
		- user has Many Posts:
			- properties:
				1. id (int | Not Null | unique | increments)
				2. text (string | Not NUll)
			- methods:
				- methods:
					1. add comment (store)
					2. show comment specific by post id (show)
					3. list all comments for specficby  user and by specific post

			## Comments:
				- post has many comments:
						- properties:
							1. id (int | Not Null | unique | increments) 
							2. text (string | Not NUll)
