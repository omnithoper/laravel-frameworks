<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DROP TABLE IF EXISTS `student`;
        /*!40101 SET @saved_cs_client     = @@character_set_client */;
        /*!40101 SET character_set_client = utf8 */;
        CREATE TABLE `student` (
          `student_id` int(11) NOT NULL AUTO_INCREMENT,
          `science_id` int(11) DEFAULT '0',
          `history_id` int(11) DEFAULT '0',
          `math_id` int(11) DEFAULT '0',
          `email` varchar(50) DEFAULT NULL,
          `first_name` varchar(255) DEFAULT NULL,
          `last_name` varchar(255) DEFAULT NULL,
          `username` varchar(50) DEFAULT NULL,
          `password` varchar(50) DEFAULT NULL,
          `facebook_id` varchar(100) DEFAULT NULL,
          `google_id` varchar(100) DEFAULT NULL,
          PRIMARY KEY (`student_id`)
        ) ENGINE=MyISAM AUTO_INCREMENT=245 DEFAULT CHARSET=utf8;
        /*!40101 SET character_set_client = @saved_cs_client */;

        --
        -- Dumping data for table `student`
        --

        LOCK TABLES `student` WRITE;
        /*!40000 ALTER TABLE `student` DISABLE KEYS */;
        INSERT INTO `student` VALUES (106,0,0,0,NULL,'Amanda','Cabrera',NULL,NULL,'',''),(174,0,0,0,NULL,'Michael','Guttierrez',NULL,NULL,'',''),(49,2,1,1,NULL,'Lyn','Banzon','','','',''),(50,1,3,3,NULL,'Michael ','Magtira',NULL,NULL,'',''),(51,1,3,1,NULL,'Christian','Magtira',NULL,NULL,'',''),(52,3,3,3,NULL,'Jr','Montezon',NULL,NULL,'',''),(125,0,0,0,NULL,'cesar','sanglitan',NULL,NULL,'',''),(115,0,0,0,NULL,'kevin','nash',NULL,NULL,'',''),(143,0,0,0,NULL,'ed','dno',NULL,NULL,'',''),(117,0,0,0,NULL,'scott','hall',NULL,NULL,'',''),(160,0,0,0,NULL,'Sunday','bostonterrier',NULL,NULL,'',''),(172,0,0,0,NULL,'Ronaldo','Cabrera',NULL,NULL,'',''),(215,0,0,0,NULL,'boy','Cabrera',NULL,'10a34637ad661d98ba3344717656fcc76209c2f8','',''),(225,0,0,0,NULL,'gerald','kupal','gerald','d0e75148e85bcccebd0dafc9f1e2f78707b579bd','',''),(220,0,0,0,NULL,'eric ','albano',NULL,NULL,'',''),(221,0,0,0,NULL,'amy','sitchon',NULL,NULL,'',''),(222,0,0,0,NULL,'dennis','jacobe','dennis','15afc15301f669017837a87977d777efff6865ca','',''),(223,0,0,0,NULL,'adolf','hitler','adolf','b17a576fb87caea99c3746ef4ea7ebba28a8ffa7','',''),(224,0,0,0,NULL,'tests','tests','test','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3','',''),(226,0,0,0,NULL,'arnold','spiritu','arnold','37857929647ce9d4c2c68e27ea26c9bbc45b2712','',''),(231,0,0,0,NULL,'Anthony',NULL,NULL,NULL,'10212293349758483',NULL),(232,0,0,0,NULL,'Anthony','Cabrera',NULL,NULL,NULL,'108638933120139723951'),(240,0,0,0,'omnithopter22@gmail.com','Anthony','Cabrera','omnithopter','ebe82a9c391f67739578dfa0022d9633aa1e1351',NULL,NULL),(241,0,0,0,'omnithopter@gmail.com','Anthony','Cabrera','sunday22','ebe82a9c391f67739578dfa0022d9633aa1e1351',NULL,NULL),(242,0,0,0,NULL,'Michael',NULL,NULL,NULL,'1570061843076207',NULL),(243,0,0,0,NULL,'Carlo',NULL,NULL,NULL,'200864530476802',NULL),(244,0,0,0,NULL,'Amelia','Romero','amelia','96b0eaa2d74f736684bbfb1080a933c447aa8c9c',NULL,NULL);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
