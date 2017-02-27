<?php if(!defined('KIRBY')) exit ?>

title: Module
pages:
  template: bloc
  hidden: true
files: false
fields:
  title:
    label: Title
    type:  text
  description: 
  	label: Description 
  	type: textarea
  Bloclist:
    label: Blocs de contenu
    type: subpagelist
    filter: 
  		template: bloc
