<?php if(!defined('KIRBY')) exit ?>

title: Partners
pages:
  template: partner
  hidden: true
files: false
fields:
  title:
    label: Title
    type:  text
  Bloclist:
    label: Partners
    type: subpagelist
    filter: 
  		template: partner
