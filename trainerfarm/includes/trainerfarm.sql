--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assignments` (
  `assignment_id` int NOT NULL AUTO_INCREMENT,
  `course_id` int DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  `assignment_title` varchar(250) DEFAULT NULL,
  `assignment_desc` text,
  `assignment_due` date DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  `assignment_attach` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignments`
--

LOCK TABLES `assignments` WRITE;
/*!40000 ALTER TABLE `assignments` DISABLE KEYS */;
INSERT INTO `assignments` VALUES (1,1,2,'title','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n','2023-05-31','2023-05-25 23:10:02',NULL),(2,3,2,'Assignment title','Assignment lorem','2023-05-01','2023-05-25 23:17:44',NULL);
/*!40000 ALTER TABLE `assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course` (
  `course_id` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(200) NOT NULL,
  `course_category_id` int DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  `description` text,
  `course_week` int DEFAULT NULL,
  `course_price` varchar(100) DEFAULT NULL,
  `course_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-active 0-inactive',
  `updated_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'title',2,2,' description',NULL,NULL,1,'2023-05-17 23:22:50'),(2,'title upated',3,2,' description updated',NULL,NULL,1,'2023-05-17 23:22:50'),(3,'title',2,2,' course_category_id',NULL,NULL,1,'2023-05-17 23:25:03'),(4,'titlew',2,2,' ',4,'$2003',2,'2023-05-17 23:26:45'),(5,'new course',6,4,' ',NULL,NULL,1,'2023-05-18 20:40:31'),(6,'23 may',4,4,' desc',23,'$500',1,'2023-05-23 21:39:27');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_category`
--

DROP TABLE IF EXISTS `course_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `provided_by` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_category`
--

LOCK TABLES `course_category` WRITE;
/*!40000 ALTER TABLE `course_category` DISABLE KEYS */;
INSERT INTO `course_category` VALUES (1,'Programming1','google',2,'2023-05-16 23:10:23'),(2,'Programming6','google',2,'2023-05-16 23:16:33'),(3,'database new','oracle',1,'2023-05-16 23:17:22'),(4,'Programming','google',2,'2023-05-16 23:17:56'),(5,'Programming2','google',1,'2023-05-16 23:20:45'),(6,'Programming3','google',1,'2023-05-17 22:45:00'),(7,'Rabia','google',1,'2023-05-17 23:09:22');
/*!40000 ALTER TABLE `course_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `notification_type` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_surname` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_message` text,
  `updated_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,'chat',NULL,NULL,NULL,'abc@gmail.com','message','2023-05-27 16:53:08'),(2,'Ask a Question',NULL,NULL,NULL,'','msg','2023-05-30 20:39:31'),(3,'Email Support','abc','def','0099998','','mesg','2023-05-30 20:45:32'),(4,'Chat',NULL,NULL,NULL,'abc@gmail.com','msgsgsgsgsgsgs','2023-05-30 21:31:40');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_course`
--

DROP TABLE IF EXISTS `student_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  `joined_at` date DEFAULT NULL,
  `status` int DEFAULT '1',
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `current_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_course`
--

LOCK TABLES `student_course` WRITE;
/*!40000 ALTER TABLE `student_course` DISABLE KEYS */;
INSERT INTO `student_course` VALUES (1,5,1,'2023-05-01',1,'2023-05-15 20:58:15','Enrolled');
/*!40000 ALTER TABLE `student_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_register`
--

DROP TABLE IF EXISTS `student_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_register` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL COMMENT 'user_id',
  `course_id` int DEFAULT NULL,
  `status` int DEFAULT '1' COMMENT '1 learning - 0 graduated',
  `updated_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_register`
--

LOCK TABLES `student_register` WRITE;
/*!40000 ALTER TABLE `student_register` DISABLE KEYS */;
INSERT INTO `student_register` VALUES (1,3,1,1,'2023-05-18 20:32:07');
/*!40000 ALTER TABLE `student_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `submissions` (
  `submission_id` int NOT NULL AUTO_INCREMENT,
  `assignment_id` int DEFAULT NULL,
  `student_id` int DEFAULT NULL,
  `submission_date` date DEFAULT NULL,
  `submission_attach` varchar(250) DEFAULT NULL,
  `update_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`submission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submissions`
--

LOCK TABLES `submissions` WRITE;
/*!40000 ALTER TABLE `submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_type`
--


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_type` (
  `user_type_id` int NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(50) NOT NULL,
  `user_type_status` tinyint(1) DEFAULT NULL COMMENT '1-active 0-inactive',
  `updated_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_type`
--

LOCK TABLES `user_type` WRITE;
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT INTO `user_type` VALUES (1,'superadmin',1,'2023-05-08 20:31:31'),(2,'teacher',1,'2023-05-08 20:31:50'),(3,'student',1,'2023-05-08 20:32:02');
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_fullname` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `linkedin` varchar(200) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `user_type_id` int DEFAULT NULL COMMENT 'user_type',
  `user_status` tinyint(1) DEFAULT NULL COMMENT '1-active 0-inactive',
  `update_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  KEY `user_type_id` (`user_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'superadmin','admin123','Rabia','03162132475','rabiamushtaqmithani@gmail.com','google.com','Pakistan','Karachi',1,1,'2023-05-08 20:32:53'),(2,'teacher','admin123','TrainerFarm Teacher 1',NULL,NULL,NULL,NULL,NULL,2,1,'2023-05-08 20:33:15'),(3,'student','','TrainerFarm Student','90-998088-89','abc@gmail.com','google.com','India','Mumbai',3,2,'2023-05-08 20:33:41'),(4,'teacher2','admin123','TrainerFarm Teacher 2',NULL,NULL,NULL,NULL,NULL,2,1,'2023-05-08 20:33:15'),(5,'student1','admin123','New Student','','student@gmail.com','','','',3,1,'2023-05-21 00:18:10'),(6,'','','Rabia','03162132475','rabiamushtaqmithani@gmail.com','','Pakistan','Karachi',3,1,'2023-05-23 21:42:52'),(7,'student134','','Rabia','03162132475','rabiamushtaqmithani@gmail.com','','Pakistan','Karachi',3,1,'2023-05-23 22:05:04'),(8,'teacher1','admin123','Rabia','03162132475','rabiamushtaqmithani@gmail.com','','Pakistan','Karachi',2,2,'2023-05-23 23:29:53'),(9,'happy','admin123','happy bday','88797979','happy@gmail.com','','Pakistan','Karachi',3,1,'2023-05-30 22:09:21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
