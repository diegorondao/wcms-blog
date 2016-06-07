<?php

function blog_fetch_all_cats() {
	return blog_db_select('categories', ['*']);
}