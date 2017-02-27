<?php if(!defined('KIRBY')) exit ?>

title: Categories
pages:
  template: category
  hidden: true
files: false
fields:
  title:
    label: Title
    type:  text
  Bloclist:
    label: Catégories de personnes
    type: subpagelist
    filter: 
  		template: bloc
