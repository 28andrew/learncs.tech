# learncs.tech

This is the source code for my IB personal project, the website https://learncs.tech/.

# Self-hosted installation

## Requirements
- PHP >=7.0
- MySQL/a related fork like MariaDB

## Instructions
- Create database in SQL server
- Create structures: 
```
CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `source_id` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `resource_sources` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) DEFAULT NULL,
  `mla` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `resource_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `display_name` varchar(64) NOT NULL,
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `resource_tag_map` (
  `tag_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `statistics` (
  `name` varchar(25) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tutorial_completions` (
  `user` int(11) NOT NULL,
  `tutorial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pass_hash` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
- Clone repository files to your web root
- Copy `config.example.php` to `config.php`
- Edit config accordingly, especially make sure database details are correct
