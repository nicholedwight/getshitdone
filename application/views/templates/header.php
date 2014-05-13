<html>
<head>
	<title>Get Shit Done</title>
	<link rel="stylesheet" href="<?=base_url('assets/css/normalize.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300">
</head>
<body>
	<aside class="categories">
		<ul>
			<li>
				<a href="<?php echo site_url('all') ?>">All</a>
				<a></a>
			</li>
			<li>
				<a href="<?php echo site_url('work') ?>">Work<a>
				<a href="<?php echo site_url('work_create') ?>">+</a>
			</li>
			<li>
				<a href="<?php echo site_url('school') ?>">School</a>
				<a href="<?php echo site_url('school_create') ?>">+</a>
			</li>
			<li>
				<a href="<?php echo site_url('news') ?>">News</a>
				<a href="<?php echo site_url('news/create') ?>">+</a>
			</li>
			<li>
				<a href="<?php echo site_url('groceries') ?>">Groceries</a>
				<a href="<?php echo site_url('groceries_create') ?>">+</a>
			</li>
		</ul>
	</aside>
	<aside class="logout">
		<a href="<?php echo site_url('logout') ?>">Logout</a>
	</aside>
	<div class="list">
		<div class="heading-list">
			<h2>List</h2>
		</div>
		<div class="list-content">
