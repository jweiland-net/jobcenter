#
# Table structure for table 'tx_jobcenter_domain_model_contact'
#
CREATE TABLE tx_jobcenter_domain_model_contact (
	salutation int(11) DEFAULT '0' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	room_number varchar(255) DEFAULT '' NOT NULL,
	telephone varchar(255) DEFAULT '' NOT NULL,
	handicapped tinyint(1) unsigned DEFAULT '0' NOT NULL,
	self_reliance tinyint(1) unsigned DEFAULT '0' NOT NULL,
	letters int(11) unsigned DEFAULT '0' NOT NULL,
	is_fallback tinyint(4) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_jobcenter_domain_model_employer_contact'
#
CREATE TABLE tx_jobcenter_domain_model_employer_contact (
	salutation int(11) DEFAULT '0' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	zip int(11) DEFAULT '0' NOT NULL,
	room_number varchar(255) DEFAULT '' NOT NULL,
	telephone varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	image int(11) DEFAULT '0' NOT NULL,
	is_fallback tinyint(4) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_jobcenter_domain_model_letter'
#
CREATE TABLE tx_jobcenter_domain_model_letter (
	contact int(11) unsigned DEFAULT '0' NOT NULL,

	letter_start varchar(255) DEFAULT '' NOT NULL,
	letter_end varchar(255) DEFAULT '' NOT NULL,
);

#
# Table structure for table 'tx_jobcenter_domain_model_zip'
#
CREATE TABLE tx_jobcenter_domain_model_zip (
	employer_contact int(11) unsigned DEFAULT '0' NOT NULL,

	zip varchar(255) DEFAULT '' NOT NULL,
);
