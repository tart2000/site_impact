<?php if(!defined('KIRBY')) exit ?>

title: Mentor
pages: false
sortable:true
files: 
  width: 1000
  height: 1000
fields:
  title:
    label: Name
    type:  text
  category: 
    label: Category
    type: select
    options: query
    query:
      page: categories
    width: 1/2
  skill:
  	label: Title
  	type: text 
  	width: 1/2
  company:
  	label: Company
  	type: text
  	width: 1/2
  mentorLink:
    label: Link
    type: Url
    width: 1/2