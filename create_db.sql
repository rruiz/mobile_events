DROP TABLE IF EXISTS events;
CREATE TABLE events (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  location_id INT UNSIGNED,
  name VARCHAR(50),
  description TEXT,
  start_time DATETIME,
  end_time DATETIME,
  created_at DATETIME,
  password_hash CHAR(40) BINARY
  );

DROP TABLE IF EXISTS locations;
CREATE TABLE locations (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  oncampus BOOLEAN,
  geo_lat FLOAT,
  geo_long FLOAT
  );

INSERT INTO locations (name, oncampus)
  VALUES ("DLC", TRUE);

INSERT INTO events (name, description, location_id, start_time, end_time, created_at, password_hash)
  VALUES ('Fun Timez', "It'll be awesome, really.", 1, ADDTIME(NOW(), '2 0:0:0'), ADDTIME(NOW(), '2 3:0:0'), NOW(), SHA1('password'));
