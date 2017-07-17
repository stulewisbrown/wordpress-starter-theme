<?php
	function hs_page_title() {
		if (get_field('post_heading')) {
	      the_field('post_heading');
	    } else {
	      the_title();
	    }
	}

