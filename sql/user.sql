-- INSERT DEDICATED DB USER
DROP USER IF EXISTS authenticator_user@localhost;
FLUSH PRIVILEGES;
CREATE USER authenticator_user@localhost IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON authenticator7000.* TO authenticator_user@localhost;
FLUSH PRIVILEGES;