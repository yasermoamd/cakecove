## Creating Database: 
* Creating a `food` database:
     ```
       CREATE DATABASE food;
     ```

    ## Working with tables:
    - Creating a `cake` table:
        ```
            CREATE TABLE cake (
                product_id int AUTO_INCREMENT primary key NOT NULL,
                product_name varchar(255),
                product_price decimal(4,2),
                product_description text,
                product_image text
            );
        ``` 

    - Creating a `users` table:
        ```
            CREATE TABLE users (
                id int AUTO_INCREMENT primary key NOT NULL,
                email varchar(255),
                password varchar(255),
                username varchar(128)
            );
        ``` 

     -  Creating a `cart` table:
        ```
            CREATE TABLE cart (
                id INT PRIMARY KEY AUTO_INCREMENT,
                product_id INT NOT NULL,
                quantity INT NOT NULL,
                session_id VARCHAR(255) NOT NULL,  
                KEY (product_id) 
            );
        ```

    -  Create a `order` table:
        ```
            CREATE TABLE orders (
                order_id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                address TEXT NOT NULL,
                email VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );
        ```


 ## Inserting data into `cake` table: 

    INSERT INTO cake (product_id, product_name, product_price, product_description, product_image) VALUES (0, 'Ramen', 24, 'Beloved Japanese dish that has gained international popularity for its comforting and flavorful appeal.', 'https://www.forkknifeswoon.com/wp-content/uploads/2014/10/simple-homemade-chicken-ramen-fork-knife-swoon-01.jpg');

    INSERT INTO cake (product_name, product_price, product_description, product_image) VALUES ('Paella', 14, 'Iconic Spanish dish with saffron-infused rice, seafood, and vibrant flavors in one delectable medley.', 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/paella-837f12c.jpg?quality=90&resize=440,400');

    INSERT INTO cake (product_name, product_price, product_description, product_image) VALUES ('Pierogi', 19, 'Polish dumplings, filled with potatoes, cheese, or meat, boiled or fried for perfection.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Pierogi_z_mas%C5%82em_-_2023.03.31.jpg/640px-Pierogi_z_mas%C5%82em_-_2023.03.31.jpg');

    INSERT INTO cake (product_name, product_price, product_description, product_image) VALUES ('Moussaka', 21, 'Layers of eggplant, minced meat, and béchamel; a rich, savory Greek casserole delight.', 'https://www.recipetineats.com/wp-content/uploads/2019/03/Greek-Moussaka_3-re-edited-SQ.jpg');

    INSERT INTO cake (product_name, product_price, product_description, product_image) VALUES('Eisbein', 26, 'German delicacy featuring slow-cooked, crispy pork knuckle, known for its savory, tender indulgence.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Eisbein-2.jpg/1200px-Eisbein-2.jpg');

    INSERT INTO cake (product_name, product_price, product_description, product_image) VALUES ('Moussaka', 21, 'Layers of eggplant, minced meat, and béchamel; a rich, savory Greek casserole delight.', 'https://www.recipetineats.com/wp-content/uploads/2019/03/Greek-Moussaka_3-re-edited-SQ.jpg');

    INSERT INTO cake (product_name, product_price, product_description, product_image) VALUES ('FILLET TOWER BURGER', 20, 'Savor perfection with our Fillet Tower Burger—succulent fillet, stacked high for an unrivaled taste experience.', 'https://3.bp.blogspot.com/_mPs1GewkiJg/Slz-ZKxURuI/AAAAAAAAAD8/yvJxg_8N_1Y/s320/product-fillet-tower.jpg');

    INSERT INTO cake (product_name, product_price, product_description, product_image) VALUES ('Margherita Pizza', 17, 'Thin crust, ripe tomatoes, fresh mozzarella, basil. A timeless, flavorful pizza delight.', 'https://st3.idealista.it/cms/archivie/styles/idcms_large_desktop/public/2019-05/media/image/margherita_wikipedia.jpg?fv=bOcWknfe&itok=9WM7SPJF');
   

Created By [Vladoss](https://github.com/VladZtn)
