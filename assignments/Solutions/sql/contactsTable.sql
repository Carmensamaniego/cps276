-- used and altered github.com/sshaper/cps276_examples/blob/master/php-form-validation-mod/sql/modTable.sql
--might need to change id int higher
--do I need 'contacts' in this table. It is in the instructions but I do not understand

CREATE TABLE `contactsTable` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `city` varchar(250) NOT NULL DEFAULT '',
  `state` varchar(250) NOT NULL DEFAULT '',
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `dob` varchar(250) NOT NULL DEFAULT '',
  `contacts` varchar(250) NOT NULL DEFAULT '',
  `age` varchar(250) NOT NULL DEFAULT '',
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
