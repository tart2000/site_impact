<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  intro: 
  	label: Bloc intro 
  	type: textarea 
  notif: 
    label: Notification
    type: text
    width: 1/2
  notifbtn: 
    label: Notification link
    type: url 
    width: 1/2
  text:
    label: Text
    type:  textarea
    size:  large