<?xml version="1.0" encoding="UTF-8"?>
<?php exit(0);?>
<fn_sections>
	<type>dbview</type>
	<parent>menu_fauna</parent>
	<position>170</position>
	<title>Rilevamenti faunistici</title>
	<description></description>
	<startdate></startdate>
	<enddate></enddate>
	<status>1</status>
	<hidden>0</hidden>
	<accesskey></accesskey>
	<keywords></keywords>
	<sectionpath>sections</sectionpath>
	<level></level>
	<group_view>fauna,catasto_scrittura,archeologi,curatori</group_view>
	<group_edit></group_edit>
	<blocksmode></blocksmode>
	<blocks></blocks>
	<title_it>Rilevamenti faunistici</title_it>
	<description_it></description_it>
	<title_en></title_en>
	<description_en></description_en>
</fn_sections>

<fncf_dbview>
	<databasename>fndatabase</databasename>
	<recordsperpage>12</recordsperpage>
	<groupinsert>w_fauna</groupinsert>
	<groupadmin>w_fauna</groupadmin>
	<groupview>r_fauna</groupview>
	<mailalert></mailalert>
	<viewonlycreator>0</viewonlycreator>
	<generate_googlesitemap>0</generate_googlesitemap>
	<tables>ctl_faunacave</tables>
	<search_orders>name,recordinsert,recordupdate</search_orders>
	<defaultorder>recordupdate</defaultorder>
	<enable_comments_notify>0</enable_comments_notify>
	<search_min></search_min>
	<titlefield>name</titlefield>
	<descriptionfield>description</descriptionfield>
	<search_options></search_options>
	<navigate_groups>username</navigate_groups>
	<search_partfields></search_partfields>
	<search_fields>username</search_fields>
	<appendquery></appendquery>
	<image_titlefield>photo1</image_titlefield>
	<image_size>100</image_size>
	<image_size_h>300</image_size_h>
	<table_rules></table_rules>
	<enable_permissions_each_records>1</enable_permissions_each_records>
	<enable_permissions_edit_each_records>0</enable_permissions_edit_each_records>
	<permissions_records_groups>w_fauna,r_fauna</permissions_records_groups>
	<permissions_records_edit_groups>w_fauna</permissions_records_edit_groups>
	<enable_history>0</enable_history>
	<enable_export>0</enable_export>
	<enable_delete>1</enable_delete>
	<hide_on_delete>0</hide_on_delete>
	<default_show_groups>0</default_show_groups>
	<enable_statistics>0</enable_statistics>
	<search_query_native_mysql>0</search_query_native_mysql>
</fncf_dbview>