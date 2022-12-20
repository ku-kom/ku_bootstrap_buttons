CREATE TABLE tx_kubootstrapbuttons_group_item (
    tt_content int(11) unsigned DEFAULT '0',
    link varchar(1024) DEFAULT '' NOT NULL,
    link_title varchar(255) DEFAULT '' NOT NULL,
    link_icon_set varchar(255) DEFAULT '' NOT NULL,
    link_icon_identifier varchar(255) DEFAULT '' NOT NULL,
    link_icon int(11) unsigned DEFAULT '0',
    link_size varchar(64) DEFAULT '' NOT NULL,
    link_class varchar(255) DEFAULT '' NOT NULL,
);


CREATE TABLE tt_content (
    tx_kubootstrapbuttons_group_item int(11) unsigned DEFAULT '0',
);