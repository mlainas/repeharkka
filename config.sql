        
        
        
        CREATE TABLE IF NOT EXISTS user(
        first_name varchar(50) NOT NULL,
        last_name varchar(50) NOT NULL,
        username varchar(50) NOT NULL,
        password varchar(150) NOT NULL,
        PRIMARY KEY (username)
        );

        CREATE TABLE IF NOT EXISTS info(
        username int primary key auto_increment,
        address varchar(50) not null,
	    zip varchar(10) not null,
	    city varchar(30) not null,
        phone varchar(10) not null
        );
        

        INSERT IGNORE INTO user VALUES ('Mikko', 'Lainas', 'Miku', 'elmiku'),('Niko', 'Nistikko', 'Nipa', 'nipsu'),('Mikael','Mahti', 'Mika', 'akim')
        
        INSERT INTO info (address, zip, city, phone) VALUES ('Reipastie', 90100, 'Oulu', 0506661666);