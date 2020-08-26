<?xml version="1.0" encoding="UTF-8"?>
<?php exit(0);?>
<fn_sections>
	<type>dbview</type>
	<parent>menu_natural</parent>
	<position>40</position>
	<title>Grotte</title>
	<description></description>
	<startdate></startdate>
	<enddate></enddate>
	<status>1</status>
	<hidden>0</hidden>
	<accesskey></accesskey>
	<keywords></keywords>
	<sectionpath>sections</sectionpath>
	<level></level>
	<group_view></group_view>
	<group_edit></group_edit>
	<blocksmode></blocksmode>
	<blocks></blocks>
	<title_it>Grotte</title_it>
	<description_it></description_it>
	<title_en></title_en>
	<description_en></description_en>
</fn_sections>

<fncf_dbview>
	<databasename>fndatabase</databasename>
	<recordsperpage>16</recordsperpage>
	<enablecomments>0</enablecomments>
	<enableranks>0</enableranks>
	<groupinsert>w_caves</groupinsert>
	<groupadmin>w_caves</groupadmin>
	<groupview></groupview>
	<mailalert></mailalert>
	<viewonlycreator>0</viewonlycreator>
	<generate_googlesitemap>1</generate_googlesitemap>
	<tables>ctl_caves</tables>
	<search_orders>name,recordupdate</search_orders>
	<defaultorder>recordupdate</defaultorder>
	<enable_comments_notify>0</enable_comments_notify>
	<search_min></search_min>
	<titlefield>code,name</titlefield>
	<descriptionfield>description</descriptionfield>
	<search_options>archeological,closed</search_options>
	<navigate_groups>regione,provincia,comune,areas</navigate_groups>
	<search_partfields>name</search_partfields>
	<search_fields>code</search_fields>
	<appendquery></appendquery>
	<image_titlefield>photo1</image_titlefield>
	<image_size>100</image_size>
	<table_rules>ctl_caves_rules</table_rules>
	<default_view_mode>icon</default_view_mode>
	<enable_permissions_each_records>0</enable_permissions_each_records>
	<enable_permissions_edit_each_records>0</enable_permissions_edit_each_records>
	<permissions_records_groups>r_caves,w_caves</permissions_records_groups>
	<permissions_records_edit_groups>r_caves,w_caves</permissions_records_edit_groups>
	<enable_history>1</enable_history>
	<enable_rss>1</enable_rss>
	<enable_export>1</enable_export>
	<enable_delete>1</enable_delete>
	<hide_on_delete>0</hide_on_delete>
	<default_show_groups>1</default_show_groups>
	<enable_statistics>0</enable_statistics>
	<search_query_native_mysql>0</search_query_native_mysql>
	<image_size_h>300</image_size_h>
</fncf_dbview>