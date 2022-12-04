-- used  github.com/sshaper/cps276_examples/blob/master/php-form-validation-mod/sql/modTable.sql
--might need to change id int higher

CREATE TABLE `admins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `status` varchar(250) DEFAULT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


INSERT INTO admins(name, email, password, status)
VALUES('Carmen', 'csamanicg@admin.com', '$2y$10$tzxgJ6/ratN.qfbTKVO7feFQNvD6t/m9U04JsmAlCGHlY0iD/yejq
', 'admin');
INSERT INTO admins(name, email, password, status)
VALUES('Carmen', 'csamanicg@staff.com', '$2y$10$tzxgJ6/ratN.qfbTKVO7feFQNvD6t/m9U04JsmAlCGHlY0iD/yejq
', 'staff');
