
CREATE TABLE users  (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    data_nascita DATE,
    email VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE posts (
    id integer primary key auto_increment,
    id_user integer not null,
    time timestamp not null default current_timestamp,
    nlikes integer default 0,
    /* ncomments integer default 0, */
    content json,
    foreign key(id_user) references users(id) on delete cascade on update cascade
);

CREATE TABLE likes (
    id_user integer not null,
    id_post integer not null,
    foreign key(id_user) references users(id) on delete cascade on update cascade,
    foreign key(id_post) references posts(id) on delete cascade on update cascade,
    primary key(id_user, id_post)
) Engine = InnoDB;

DELIMITER //
CREATE TRIGGER likes_trigger
AFTER INSERT ON likes
FOR EACH ROW
BEGIN
UPDATE posts 
SET nlikes = nlikes + 1
WHERE id = new.id_post;
END //
DELIMITER ;


DELIMITER //
CREATE TRIGGER unlikes_trigger
AFTER DELETE ON likes
FOR EACH ROW
BEGIN
UPDATE posts 
SET nlikes = nlikes - 1
WHERE id = old.id_post;
END //
DELIMITER ;

