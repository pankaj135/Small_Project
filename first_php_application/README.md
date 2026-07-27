# Small_Project
## Create a ```database``` for Runing this application
```bash
 CREATE DATABASE first_application;
```
### use DataBase
```bash
 USE first_application;
```


## Create a ```Table``` for Runing this application
```bash
CREATE TABLE user_data (id INT NOT NULL , name VARCHAR(30) NOT NULL , email VARCHAR(50) NOT NULL , phone_no BIGINT NOT NULL , PRIMARY KEY (id), UNIQUE (email), UNIQUE (phone_no));
```
