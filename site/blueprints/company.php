<?php if(!defined('KIRBY')) exit ?>

title: Company
pages: false
files: true
fields:
  title:
    label: Company name
    type:  text
    width: 1/2
  link: 
  	label: Link
  	type: url 
  	width: 1/2
  baseline: 
  	label: Baseline 
  	type: text 
  logo: 
  	label: Logo
  	type: selector
  	mode: single
  	types:
  		- image
  description:
  	label: Description
  	type: textarea

