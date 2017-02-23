<?php if(!defined('KIRBY')) exit ?>

title: Calendar
pages: false
files: false
fields:
	title:
		label: Title
		type:  text
	calendar:
		label: Calendar
		type: structure
		entry: >
			<strong>{{summary}}</strong><br>
			{{description}}<br>
			Beginning: {{_begin_date}} {{_begin_time}}<br>
			End: {{_end_date}} {{_end_time}}
		fields:
			summary:
				label: Title
				type: text
			description:
				label: Description
				type: textarea
				size: small
			_begin_date:
				label: Beginning date
				type: date
				format: MM/DD/YYYY
				width: 1/2
			_begin_time:
				label: Beginning time
				type: time
				interval: 15
				width: 1/2
			_end_date:
				label: Ending date
				type: date
				format: MM/DD/YYYY
				width: 1/2
			_end_time:
				label: Ending time
				type: time
				interval: 15
				width: 1/2
			link:
				label: Link
				type: url