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
  cover:
    label: Image
    type: selector
    mode: single
    types:
      - image
  ctas: 
    label: Calls to Action 
    type: structure 
    entry: >
      {{titre}}
    fields: 
      titre: 
        label: Titre
        type: text 
      fa: 
        label: Fa 
        type: text 
        width: 1/2 
      link: 
        label: Link
        type: url 
        width: 1/2 
      letexte: 
        label: Texte 
        type: textarea 