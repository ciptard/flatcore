<?php

/*
must be a duplicate of fc_pages.php
except $table_name and column 'page_id_original'
 */

$database = "content";
$table_name = "fc_pages_cache";

$cols = array(
	"page_id"  => 'INTEGER NOT NULL PRIMARY KEY',
	"page_id_original" => 'INTEGER',
	"page_language"  => 'VARCHAR',
	"page_linkname"  => 'VARCHAR',
	"page_permalink" => 'VARCHAR',
	"page_title" => 'VARCHAR',
	"page_status" => 'VARCHAR',
	"page_usergroup" => 'VARCHAR',
	"page_content" => 'LONGTEXT',
	"page_extracontent" => 'TEXT',
	"page_sort" => 'VARCHAR',
	"page_lastedit" => 'VARCHAR',
	"page_lastedit_from" => 'VARCHAR',
	"page_meta_author" => 'VARCHAR',
	"page_meta_date" => 'VARCHAR',
	"page_meta_keywords" => 'VARCHAR',
	"page_meta_description" => 'VARCHAR',
	"page_meta_robots" => 'VARCHAR',
	"page_meta_enhanced" => 'VARCHAR',
	"page_head_styles" => 'VARCHAR',
	"page_head_enhanced" => 'VARCHAR',
	"page_template" => 'VARCHAR',
	"page_template_layout" => 'VARCHAR',
	"page_modul" => 'VARCHAR',
	"page_authorized_users" => 'VARCHAR',
	"page_version" => 'INTEGER',
	"page_version_date" => 'VARCHAR',
	"page_cache_type" => 'VARCHAR'
  );
  
  
 
?>