CREATE TABLE `Kindergarten` (
	`kin_id` int(11) NOT NULL,
	`kin_name` varchar(255) NOT NULL,
	`kin_address` varchar(255) NOT NULL,
	`kin_tel` varchar(255) NOT NULL,
	`kin_login` varchar(255) NOT NULL UNIQUE,
	`kin_pass` varchar(255) NOT NULL,
	`kin_lic_id` int(11) NOT NULL,
	PRIMARY KEY (`kin_id`)
);

CREATE TABLE ` License` (
	`lic_id` int(11) NOT NULL,
	`lic_number` varchar(255) NOT NULL,
	`lic_fileWay` varchar(255) NOT NULL,
	PRIMARY KEY (`lic_id`)
);

CREATE TABLE `Group` (
	`gr_id` int(11) NOT NULL,
	`gr_number` varchar(255) NOT NULL,
	`gr_ageLimit` varchar(255) NOT NULL,
	`gr_seatsNumber` int(3) NOT NULL,
	`gr_freeSeatsNumber` int(3) NOT NULL,
	`gr_yearPrice` double NOT NULL,
	`gr_kin_id` int(11) NOT NULL,
	PRIMARY KEY (`gr_id`)
);

CREATE TABLE `Child` (
	`ch_id` int(11) NOT NULL,
	`ch_lastName` varchar(255) NOT NULL,
	`ch_firstName` varchar(255) NOT NULL,
	`ch_patronymic` varchar(255) NOT NULL,
	`ch_birthDate` DATE NOT NULL,
	`ch_par_id` int(11) NOT NULL,
	`ch_birthСert_id` int(11) NOT NULL,
	`ch_insPol_id` int(11) NOT NULL,
	`ch_healthCert_id` int(11) NOT NULL,
	`ch_vacCert_id` int(11) NOT NULL,
	`ch_gr_id` int(11) NOT NULL,
	PRIMARY KEY (`ch_id`)
);

CREATE TABLE `Parent` (
	`par_id` int(11) NOT NULL,
	`par_lastName` varchar(255) NOT NULL,
	`par_firstName` varchar(255) NOT NULL,
	`par_patronymic` varchar(255) NOT NULL,
	`par_tel` varchar(255) NOT NULL,
	`par_email` varchar(255) NOT NULL,
	`par_login` varchar(255) NOT NULL UNIQUE,
	`par_pass` varchar(255) NOT NULL,
	`par_passport_id` int(11) NOT NULL,
	PRIMARY KEY (`par_id`)
);

CREATE TABLE `Passport` (
	`pas_id` int(11) NOT NULL,
	`pas_ser` int(4) NOT NULL,
	`pas_number` int(6) NOT NULL,
	`pas_issDate` DATE NOT NULL,
	`pas_issName` varchar(255) NOT NULL,
	`pas_fileWay` varchar(255) NOT NULL,
	PRIMARY KEY (`pas_id`)
);

CREATE TABLE `Claim` (
	`cl_id` int(11) NOT NULL,
	`cl_gr_id` int(11) NOT NULL,
	`cl_ch_id` int(11) NOT NULL,
	`cl_st_id` int(11) NOT NULL,
	PRIMARY KEY (`cl_id`)
);

CREATE TABLE `Status` (
	`st_id` int(11) NOT NULL,
	PRIMARY KEY (`st_id`)
);

CREATE TABLE `Birth_Certificate` (
	`bC_id` int(11) NOT NULL,
	`bC_fileWay` varchar(255) NOT NULL,
	PRIMARY KEY (`bC_id`)
);

CREATE TABLE `Vac_Certificate` (
	`vC_id` int(11) NOT NULL,
	`vC_fileWay` varchar(255) NOT NULL,
	PRIMARY KEY (`vC_id`)
);

CREATE TABLE `Health_Certificate` (
	`hC_id` int(11) NOT NULL,
	`hC_fileWay` varchar(255) NOT NULL,
	PRIMARY KEY (`hC_id`)
);

CREATE TABLE `Insurance_Policy` (
	`iP_id` int(11) NOT NULL,
	`iP_fileWay` varchar(255) NOT NULL,
	`iP_number` int(11) NOT NULL,
	PRIMARY KEY (`iP_id`)
);

ALTER TABLE `Kindergarten` ADD CONSTRAINT `Kindergarten_fk0` FOREIGN KEY (`kin_lic_id`) REFERENCES ` License`(`lic_id`);

ALTER TABLE `Group` ADD CONSTRAINT `Group_fk0` FOREIGN KEY (`gr_kin_id`) REFERENCES `Kindergarten`(`kin_id`);

ALTER TABLE `Child` ADD CONSTRAINT `Child_fk0` FOREIGN KEY (`ch_par_id`) REFERENCES `Parent`(`par_id`);

ALTER TABLE `Child` ADD CONSTRAINT `Child_fk1` FOREIGN KEY (`ch_birthСert_id`) REFERENCES `Birth_Certificate`(`bC_id`);

ALTER TABLE `Child` ADD CONSTRAINT `Child_fk2` FOREIGN KEY (`ch_insPol_id`) REFERENCES `Insurance_Policy`(`iP_id`);

ALTER TABLE `Child` ADD CONSTRAINT `Child_fk3` FOREIGN KEY (`ch_healthCert_id`) REFERENCES `Health_Certificate`(`hC_id`);

ALTER TABLE `Child` ADD CONSTRAINT `Child_fk4` FOREIGN KEY (`ch_vacCert_id`) REFERENCES `Vac_Certificate`(`vC_id`);

ALTER TABLE `Child` ADD CONSTRAINT `Child_fk5` FOREIGN KEY (`ch_gr_id`) REFERENCES `Group`(`gr_id`);

ALTER TABLE `Parent` ADD CONSTRAINT `Parent_fk0` FOREIGN KEY (`par_passport_id`) REFERENCES `Passport`(`pas_id`);

ALTER TABLE `Claim` ADD CONSTRAINT `Claim_fk0` FOREIGN KEY (`cl_gr_id`) REFERENCES `Group`(`gr_id`);

ALTER TABLE `Claim` ADD CONSTRAINT `Claim_fk1` FOREIGN KEY (`cl_ch_id`) REFERENCES `Child`(`ch_id`);

ALTER TABLE `Claim` ADD CONSTRAINT `Claim_fk2` FOREIGN KEY (`cl_st_id`) REFERENCES `Status`(`st_id`);

