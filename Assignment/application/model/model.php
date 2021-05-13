<?php
class Model {
    // Property declaration, in this case we are declaring a variable or handler that points to database connection, this will become a PDO object
    public $dbhandle;

    // Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
    public function __construct()
    {
        // Set up the database source name (DSN)
        $dsn = 'sqlite:./db/db1.db';

        // Then create connection to database with PDO() function
        try {
            // Change connection string for different databases, currently using SQLite
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            // $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Database connection created</br></br>';
        }
        catch (PDOException $e) {
            echo "I'm sorry, I'm afraid I can't connect to the database!";
            // Generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }

   
   
   
   
    public function getHomepageTxtResult() 
    {
        try {
            //Prepare a statement to get all records from HomepageTxt table
            $sql = 'SELECT * FROM HomepageTxt';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up arrays to return the results to the view
            $HomepageTxtResult = null;
            // Set up a variable to index each row of the array
            $i=-0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows
            while($data = $stmt->fetch()) {
                // Write db contents to results array for sending back to view
                $HomepageTxtResult[$i]['title'] = $data['title'];
                $HomepageTxtResult[$i]['subTitle'] = $data['subTitle'];
                $HomepageTxtResult[$i]['picDescription'] = $data['picDescription'];
                // increment row index
                $i++;
            }
        }
        catch(PDOException $e) {
            print new Exception($e->getMessage());
        }
        // Send response back to view
        return $HomepageTxtResult;
    }

    public function getModelTxtResult() 
    {
        try {
            //Prepare a statement to get all records from ModelTxt table
            $sql = 'SELECT * FROM ModelTxt';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up arrays to return the results to the view
            $ModelTxtResult = null;
            // Set up a variable to index each row of the array
            $i=-0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows
            while($data = $stmt->fetch()) {
                // Simple test to check we can output value from db in while loop
                // echo '</br>' . $data['x3dModelTitle'];
                // Write db contents to results array for sending back to view
                $ModelTxtResult[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $ModelTxtResult[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $ModelTxtResult[$i]['title'] = $data['title'];
                $ModelTxtResult[$i]['subTitle'] = $data['subTitle'];
                $ModelTxtResult[$i]['ModelTxtription'] = $data['ModelTxtription'];
                // increment row index
                $i++;
            }
        }
        catch(PDOException $e) {
            print new Exception($e->getMessage());
        }
        // Send response back to view
        return $ModelTxtResult;
    }

    public function getOtherTxtResult() 
    {
        try {
            //Prepare a statement to get all records from OtherTxt table
            $sql = 'SELECT * FROM OtherTxt';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up arrays to return the results to the view
            $OtherTxtResult = null;
            // Set up a variable to index each row of the array
            $i=-0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows
            while($data = $stmt->fetch()) {
                // Simple test to check we can output value from db in while loop
                // echo '</br>' . $data['x3dModelTitle'];
                // Write db contents to results array for sending back to view
                $OtherTxtResult[$i]['paragraph'] = $data['paragraph'];
                // increment row index
                $i++;
            }
        }
        catch(PDOException $e) {
            print new Exception($e->getMessage());
        }
        // Send response back to view
        return $OtherTxtResult;
    }
	
	
	

   // Create tables
    public function dbCreateTables()
    {
        try {
            $this->dbhandle->exec("DROP TABLE IF EXISTS HomepageTxt");
            $this->dbhandle->exec("CREATE TABLE HomepageTxt (Id INTEGER PRIMARY KEY, title TEXT, subTitle TEXT, picDescription TEXT)");
            $this->dbhandle->exec("DROP TABLE IF EXISTS ModelTxt");
            $this->dbhandle->exec("CREATE TABLE ModelTxt (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, title TEXT, subTitle TEXT, ModelTxtription TEXT)");
            $this->dbhandle->exec("DROP TABLE IF EXISTS OtherTxt");
            $this->dbhandle->exec("CREATE TABLE OtherTxt (Id INTEGER PRIMARY KEY,paragraph TEXT)");
            
            return "HomepageTxt, ModelTxt and OtherTxt tables are successfully created inside db1.db file";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }


	 // Insert data into tables

    public function dbInsertData() 
    {
        try {
            $this->dbhandle->exec(
            "INSERT INTO HomepageTxt (Id, title, subTitle, picDescription)
                VALUES (1, 'Coca Cola Great Britain', 'Founded in 1886 Dr John S Pemberton', 'The Cola Company is the worlds leading manufacturer, marketer and distributor of non alcohlic beverages and syrups, with over 400 brands');" .
            "INSERT INTO HomepageTxt (Id, title, subTitle, picDescription)
                VALUES (2, 'Fanta', 'Germany, 1940', 'Fanta was created during World War II in Nazi Germany by the German Coca Cola (GmbH) bottling company. Because of the war, there was no shipping between Nazi Germany and the United States. Therefore, the German bottling plant could no longer get Coca Cola syrup'); " .
            "INSERT INTO HomepageTxt (Id, title, subTitle, picDescription)
                VALUES (3, 'Coca Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special'); " .
            "INSERT INTO HomepageTxt (Id, title, subTitle, picDescription)
                VALUES (4, 'Costa', 'London, 1971', 'The Costa Coffee story began back in 1971 when Sergio and Bruno arrived in London with a burning desire to make great tasting coffee a part of everyday life. Setting up a small roastery in Fenchurch Street, they committed to crafting the finest quality coffee.'); ");

            $this->dbhandle->exec(
            "INSERT INTO ModelTxt (Id, x3dModelTitle, x3dCreationMethod, title, subTitle, ModelTxtription)
                VALUES (1, 'Fanta X3D Model', 'This X3D model of the Fanta can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Fanta', 'Nazi Germany', 'The soft drink Fanta was invented by Coca-Cola, an american company, inside of Nazi Germany during World War II. Developed at the height of the thid reich, the new soda ensured the brands continued popularity.'); " .
            "INSERT INTO ModelTxt (Id, x3dModelTitle, x3dCreationMethod, title, subTitle, ModelTxtription)
                VALUES (2, 'Coke X3D Model', 'This X3D model of the coke bottle has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Coca Cola', 'Something Special', 'On May 8, 1886, Dr. John Pemberton sold the first glass of Coca-Cola at Jacobs Pharmacy in downtown Atlanta. Serving nine drinks per day in its first year, Coca-Cola was new refreshment in its beginning.'); " .
            "INSERT INTO ModelTxt (Id, x3dModelTitle, x3dCreationMethod, title, subTitle, ModelTxtription)
                VALUES (3, 'Costa X3D Model', 'This X3D model of the costa cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Costa Coffee', 'Heart Of London', 'On a grey day in London in 1971, an incredible thing happened: a cup of Costa coffee was poured for the very first time. Its creators, the brothers Sergio and Bruno Costa, first sold their coffee to a handful of local caterers. Then to some delicatessens. A few years later, they opened their first coffee shop.'); ");
            
            $this->dbhandle->exec(
            "INSERT INTO OtherTxt (Id, paragraph)
                VALUES (1, '3D Images'); " .
            "INSERT INTO OtherTxt (Id, paragraph)
                VALUES (2, 'These 3D Gallery objects have been rendered in 3ds Max 2017 with Mental Ray'); " .
            "INSERT INTO OtherTxt (Id, paragraph)
                VALUES (3, '- Ability to change material of models via Javascript'); " .
				
			 "INSERT INTO OtherTxt (Id, paragraph)
                VALUES (4, '- Added audio clips to models'); " .

             "INSERT INTO OtherTxt (Id, paragraph)
                VALUES (5, '- MVC model uses sql lite to store more data and extend the functionality than that of the Labs.'); " .

             "INSERT INTO OtherTxt (Id, paragraph)
                VALUES (6, '- Third party search functionality'); " .				
				
            "INSERT INTO OtherTxt (Id, paragraph)
                VALUES (7, ''); ");

            return "X3D model data inserted successfully inside db1.db";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function getDBResult() {
        $modelData = $this->getModelTxtResult();
        $homeData = $this->getHomepageTxtResult();
        $otherData = $this->getOtherTxtResult();

        $result = null;

        $result[0] = $homeData;
        $result[1] = $modelData;
        $result[2] = $otherData;

        $this->dbhandle = NULL;

        return $result;
    }

}
?>