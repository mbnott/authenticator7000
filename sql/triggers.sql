USE authenticator7000;

DELIMITER |

CREATE TRIGGER user_updated BEFORE UPDATE ON users
    FOR EACH ROW BEGIN
    SET new.updated_at := now();
END;
|

DELIMITER     ;