use mydb;

INSERT IGNORE INTO User_type (
			type_id,
            type_name
 			)
		VALUES(
				0,
            'test0'
         );
         
INSERT IGNORE INTO User_type (
			type_id,
            type_name
 			)
		VALUES(
				1,
            'test1'
         );

INSERT ignore INTO User_type (
			type_id,
            type_name
 			)
		VALUES(
				2,
            'test2'
         );


 INSERT INTO Users (
             User_id,
             User_name,
             User_type,
             User_psswrd
             )
         VALUES (
             1,
             'mike',
             0,
             '12patates'
         );


 INSERT INTO Users (
             User_id,
             User_name,
             User_type,
             User_psswrd
             )
         VALUES (
             2,
             'rania',
             1,
             'mango'
         );
         
 INSERT INTO Users (
             User_id,
             User_name,
             User_type,
             User_psswrd
             )
         VALUES (
             3,
             'krikor',
             2,
             'pop'
         );
