<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DROP TABLE IF EXISTS `subjects`;
        /*!40101 SET @saved_cs_client     = @@character_set_client */;
        /*!40101 SET character_set_client = utf8 */;
        CREATE TABLE `subjects` (
          `subject_id` int(11) NOT NULL AUTO_INCREMENT,
          `subject` char(60) DEFAULT NULL,
          `lec_unit` int(2) DEFAULT '0',
          `lab_unit` int(2) DEFAULT '0',
          `subject_unit` int(2) DEFAULT '0',
          PRIMARY KEY (`subject_id`)
        ) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
        /*!40101 SET character_set_client = @saved_cs_client */;

        --
        -- Dumping data for table `subjects`
        --

        LOCK TABLES `subjects` WRITE;
        /*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
        INSERT INTO `subjects` VALUES (1,'Communication Skills 1',3,NULL,3),(2,'College Algebra',3,0,3),(3,'Plane and Spherical Trigonometry',3,0,3),(4,'Introduction to Computing',2,1,3),(5,'Knowledge Work Software and Presentation Skills',2,1,3),(6,'Physical Fitness',2,0,2),(7,'Euthenics 1',1,0,1),(8,'National Service Training Program 1',0,0,3),(9,'Communication Skills 2',3,NULL,3),(10,'Komunikasyon sa Akademikong Filipino',3,0,3),(11,'Analytic Geometry',3,NULL,3),(12,'Computer Programming 1',2,1,3),(44,'bostons',3,1,4),(38,'test',1,1,2),(42,'teats',3,1,4),(13,'Introduction to Information System',2,1,3),(14,'Rhythim Activities',2,0,2),(15,'Euthenics 2',1,0,1),(16,'National Service Training Program',0,0,3);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
