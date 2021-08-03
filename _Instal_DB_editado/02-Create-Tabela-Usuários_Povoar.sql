CREATE TABLE IF NOT EXISTS `db_mtw`.`users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto incrementing user_id de cada usuário, índice exclusivo',
  `user_name` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Nome do usuário, exclusivo',
  `user_password_hash` varchar(255) COLLATE utf8_general_ci NOT NULL COMMENT 'Senha do usuário em formato criptografado hash',
  `user_email` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'E-mail do usuário, exclusivo',
  `user_cpf` varchar(14) COLLATE utf8_general_ci NOT NULL COMMENT 'CPF do usuário, exclusivo',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_cpf` (`user_cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados dos usuarios';
