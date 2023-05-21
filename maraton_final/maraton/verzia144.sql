use maraton_db;

delete from faq;
delete from new;
delete from user;
delete from runner;
delete from contact;


INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`, `datetime`)
VALUES ('1', 'Marketa Brisova', 'marketabrisova@gmail.com', '$2a$12$d1FzvRB/PCxNXTXWFgpqFeEPbvqI3bKAq3kdWBNJrQje4K6ugOPD2', 2, now());

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`, `datetime`)
VALUES ('2', 'Marketa Brisova - Bezec', 'marketabrisova.bezec@gmail.com', '$2a$12$d1FzvRB/PCxNXTXWFgpqFeEPbvqI3bKAq3kdWBNJrQje4K6ugOPD2', 1, now());

INSERT INTO `runner` (`id`, `name`, `surname`, `email`, `address`, `datetime`)
VALUES ('1', 'Marketa', 'Bri', 'marketabrisova.bezec@gmail.com', 'Zilina', now());

INSERT INTO `runner` (`id`, `name`, `surname`, `email`, `address`, `datetime`)
VALUES ('2', 'Marketa', 'Bri2', 'marketabrisova.bezec@gmail.com', 'Zilina', now());

INSERT INTO `runner` (`id`, `name`, `surname`, `email`, `address`, `datetime`)
VALUES ('3', 'Marketa', 'Bri3', 'marketabrisova.bezec@gmail.com', 'Zilina', now());


INSERT INTO `new` (`new`, `user`, `datetime`)
VALUES ('Zaciname s pripravami \r\n', '1', now());

INSERT INTO `faq` (`id`, `ask`, `question`, `user`, `datetime`)
VALUES ('1', 'Kedy bude prebiehať beh ? ', 'V termine ktoré ú uvedene na stránke. Konkretné 22.7.2023', '1', now());


INSERT INTO `contact` (`id`, `name`, `email`, `message`, `datetime`)
VALUES ('1', 'Jozo', 'jozo@email.sk', 'Dobry den,\r\n\r\nmam otazku k pretekom\r\n\r\n\r\nDakujem ', now());

