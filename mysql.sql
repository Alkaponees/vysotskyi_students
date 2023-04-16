CREATE TABLE `students` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50)  NOT NULL DEFAULT '',
  `phone` VARCHAR(100)  NOT NULL DEFAULT '',
  `institute` VARCHAR(10) NOT NULL DEFAULT '',
  `course` VARCHAR(20)  NOT NULL DEFAULT '',
  `gender` VARCHAR(6)  NOT NULL DEFAULT 'male',
  PRIMARY KEY (`id`)
) ;

INSERT INTO students (name,institute,gender,phone,course) VALUES
('John Deo', 'ІКТА', 'female',"+380-555-158-047","КБ-206"),
( 'Max Ruin', 'IКНІ', 'male',"+380-353-848-142","КН-34"),
( 'Arnold','ІНЕМ', 'male',"+380-962-272-946","МА-207"),
( 'Krish Star', 'ІГСН',  'female',"+380-824-430-505","УМ-102"),
( 'John Mike', 'ІНЕМ',  'female',"+380-309-694-148","МА-206"),
( 'Alex John', 'ІКТА',  'male',"+380-535-522-848","КІ-208"),
( 'My John Rob', 'ІНЕМ',  'male',"+380-247-415-687","МА-204"),
( 'Asruid', 'ІКТА',  'male',"+380-785-193-181","КБ-206"),
( 'Tes Qry', 'IКНІ',  'male',"+380-263-118-254","КН-205"),
( 'Big John', 'ІКТА',  'female',"+380-441-851-666","КБ-206"),
( 'Ronald', 'ІНЕМ',  'female',"+380-316-364-388","МА-205"),
( 'Recky', 'IКНІ',  'female',"+380-358-998-967","КН-103"),
( 'Kty', 'ІГСН',  'female',"+380-651-634-535","УМ-205"),
( 'Bigy', 'ІКТА',  'female',"+380-671-771-827","КБ-207"),
( 'Tade Row', 'ІГСН',  'male',"+380-422-854-805","УМ-205"),
( 'Gimmy', 'IКНІ',  'male',"+380-848-121-472","КН-103"),
( 'Tumyu', 'IКНІ',  'male',"+380-782-433-145","КН-105"),
( 'Honny', 'ІГСН',  'male',"+380-941-018-984","УМ-35"),
( 'Tinny', 'ІНЕМ',  'male',"+380-717-550-371","МА-207"),
( 'Jackly', 'IКНІ',  'female',"+380-561-895-471","КН-42"),
( 'Babby John', 'ІНЕМ',  'female',"+380-224-951-903","МА-204"),
( 'Reggid', 'ІКТА',  'female',"+380-408-170-317","КІ-206"),
( 'Herod', 'ІНЕМ',  'male',"+380-853-693-294","МА-34"),
( 'Tiddy Now', 'IКНІ',  'male',"+380-050-343-498","КН-31"),
( 'Giff Tow', 'ІГСН',  'male',"+380-273-730-656","УМ-41"),
( 'Crelea', 'ІНЕМ',  'male',"+380-777-452-742","МА-41"),
( 'Big Nose', 'ІГСН',  'female',"+380-356-261-648","УМ-102"),
( 'Rojj Base', 'ІГСН',  'female',"+380-840-241-868","УМ-103"),
( 'Tess Played', 'ІНЕМ',  'male',"+380-435-738-853","МА-107"),
( 'Reppy Red', 'ІГСН',  'female',"+380-149-521-183","УМ-205");




