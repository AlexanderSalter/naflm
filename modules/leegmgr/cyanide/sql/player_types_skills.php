<?php

$_t_player_types_skills = 
'
DROP TABLE IF EXISTS "Player_Type_Skills";
CREATE TABLE Player_Type_Skills (ID INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,idPlayer_Types INTEGER ,idSkill_Listing INTEGER ,DESCRIPTION VARCHAR(255) );
';

$_dat_palyer_types_skills = 
"
INSERT INTO player_type_skills VALUES (1, 2, 7, 'Human Catcher Dodge');
INSERT INTO player_type_skills VALUES (2, 2, 6, 'Human Catcher Catch');
INSERT INTO player_type_skills VALUES (3, 3, 47, 'Human Thrower Pass');
INSERT INTO player_type_skills VALUES (4, 3, 61, 'Human Thrower Sure Hands');
INSERT INTO player_type_skills VALUES (5, 4, 30, 'Human Blitzer Block');
INSERT INTO player_type_skills VALUES (6, 5, 31, 'Human Ogre Bone-Head');
INSERT INTO player_type_skills VALUES (7, 5, 13, 'Human Ogre Mighty Blow');
INSERT INTO player_type_skills VALUES (8, 5, 63, 'Human Ogre Thick Skull');
INSERT INTO player_type_skills VALUES (9, 5, 64, 'Human Ogre Throw Team-Mate');
INSERT INTO player_type_skills VALUES (10, 5, 44, 'Human Ogre Loner');
INSERT INTO player_type_skills VALUES (11, 6, 30, 'Dwarf Blocker Block');
INSERT INTO player_type_skills VALUES (12, 6, 63, 'Dwarf Blocker Thick Skull');
INSERT INTO player_type_skills VALUES (13, 6, 57, 'Dwarf Blocker Tackle');
INSERT INTO player_type_skills VALUES (14, 7, 61, 'Dwarf Runner Sure Hands');
INSERT INTO player_type_skills VALUES (15, 7, 63, 'Dwarf Runner Thick Skull');
INSERT INTO player_type_skills VALUES (16, 8, 63, 'Dwarf Blitzer Thick Skull');
INSERT INTO player_type_skills VALUES (17, 8, 30, 'Dwarf Blitzer Block');
INSERT INTO player_type_skills VALUES (18, 9, 30, 'Dwarf TrollSlayer Block');
INSERT INTO player_type_skills VALUES (19, 9, 63, 'Dwarf TrollSlayer Thick Skull');
INSERT INTO player_type_skills VALUES (20, 9, 26, 'Dwarf TrollSlayer Dauntless');
INSERT INTO player_type_skills VALUES (21, 9, 36, 'Dwarf TrollSlayer Frenzy');
INSERT INTO player_type_skills VALUES (27, 12, 6, 'Wood Elf Catcher Catch');
INSERT INTO player_type_skills VALUES (28, 12, 7, 'Wood Elf Catcher Dodge');
INSERT INTO player_type_skills VALUES (29, 13, 47, 'Wood Elf Thrower Pass');
INSERT INTO player_type_skills VALUES (30, 14, 30, 'Wood Elf Wardancer Block');
INSERT INTO player_type_skills VALUES (31, 14, 7, 'Wood Elf Wardancer Dodge');
INSERT INTO player_type_skills VALUES (32, 14, 11, 'Wood Elf Wardancer Leap');
INSERT INTO player_type_skills VALUES (33, 15, 13, 'Wood Elf Treeman Mighty Blow');
INSERT INTO player_type_skills VALUES (34, 15, 44, 'Wood Elf Treeman Loner');
INSERT INTO player_type_skills VALUES (35, 15, 17, 'Wood Elf Treeman Stand Firm');
INSERT INTO player_type_skills VALUES (36, 15, 58, 'Wood Elf Treeman Strong Arm');
INSERT INTO player_type_skills VALUES (37, 15, 63, 'Wood Elf Treeman Thick Skull');
INSERT INTO player_type_skills VALUES (38, 15, 64, 'Wood Elf Treeman ThrowTeam-Mate');
INSERT INTO player_type_skills VALUES (39, 15, 20, 'Wood Elf Treeman Take Root');
INSERT INTO player_type_skills VALUES (40, 17, 47, 'Skaven Thrower Pass');
INSERT INTO player_type_skills VALUES (41, 17, 61, 'Skaven Thrower Sure Hands');
INSERT INTO player_type_skills VALUES (42, 18, 7, 'Skaven Gutter Runner Dodge');
INSERT INTO player_type_skills VALUES (43, 19, 30, 'Skaven Blitzer Block');
INSERT INTO player_type_skills VALUES (44, 20, 36, 'Skaven Rat Ogre Frenzy');
INSERT INTO player_type_skills VALUES (45, 20, 13, 'Skaven Rat Ogre Mighty Blow');
INSERT INTO player_type_skills VALUES (46, 20, 44, 'Skaven Rat Ogre Loner');
INSERT INTO player_type_skills VALUES (47, 20, 49, 'Skaven Rat Ogre Prehensive Tail');
INSERT INTO player_type_skills VALUES (48, 20, 67, 'Skaven Rat Ogre Wild Animal');
INSERT INTO player_type_skills VALUES (49, 22, 52, 'Orc Goblin Right Stuff');
INSERT INTO player_type_skills VALUES (50, 22, 7, 'Orc Goblin Dodge');
INSERT INTO player_type_skills VALUES (51, 22, 59, 'Orc Goblin Stunty');
INSERT INTO player_type_skills VALUES (52, 23, 47, 'Orc Thrower Pass');
INSERT INTO player_type_skills VALUES (53, 23, 61, 'Orc Thrower Sure Hands');
INSERT INTO player_type_skills VALUES (54, 25, 30, 'Orc Blitzer Block');
INSERT INTO player_type_skills VALUES (55, 26, 44, 'Orc Troll Loner');
INSERT INTO player_type_skills VALUES (56, 26, 18, 'Orc Troll Always Hungry');
INSERT INTO player_type_skills VALUES (57, 26, 13, 'Orc Troll Mighty Blow');
INSERT INTO player_type_skills VALUES (58, 26, 51, 'Orc Troll Really Stupid');
INSERT INTO player_type_skills VALUES (59, 26, 19, 'Orc Troll Regeneration');
INSERT INTO player_type_skills VALUES (60, 26, 64, 'Orc Troll Throw Team-Mate');
INSERT INTO player_type_skills VALUES (61, 27, 59, 'Lizardman Skink Stunty');
INSERT INTO player_type_skills VALUES (62, 27, 7, 'Lizardman Skink Dodge');
INSERT INTO player_type_skills VALUES (63, 29, 44, 'Lizardman Kroxigor Loner');
INSERT INTO player_type_skills VALUES (64, 29, 13, 'Lizardman Kroxigor Mighty Blow');
INSERT INTO player_type_skills VALUES (65, 29, 31, 'Lizardman Kroxigor Bone-Head');
INSERT INTO player_type_skills VALUES (66, 29, 49, 'Lizardman Kroxigor PrehensiveTail');
INSERT INTO player_type_skills VALUES (67, 29, 63, 'Lizardman Kroxigor Thick Skull');
INSERT INTO player_type_skills VALUES (68, 30, 52, 'Goblin Gob Right Stuff');
INSERT INTO player_type_skills VALUES (69, 30, 7, 'Goblin Gob Dodge');
INSERT INTO player_type_skills VALUES (70, 30, 59, 'Goblin Gob Stunty');
INSERT INTO player_type_skills VALUES (71, 31, 54, 'Goblin Looney Secret Weapon');
INSERT INTO player_type_skills VALUES (72, 31, 59, 'Goblin Looney Stunty');
INSERT INTO player_type_skills VALUES (73, 31, 46, 'Goblin Looney No Hands');
INSERT INTO player_type_skills VALUES (74, 31, 25, 'Goblin Looney Chainsaw');
INSERT INTO player_type_skills VALUES (81, 34, 63, 'Chaos Minotaur Thick Skull');
INSERT INTO player_type_skills VALUES (82, 34, 13, 'Chaos Minotaur Mighty Blow');
INSERT INTO player_type_skills VALUES (83, 34, 15, 'Chaos Minotaur Horns');
INSERT INTO player_type_skills VALUES (84, 34, 36, 'Chaos Minotaur Frenzy');
INSERT INTO player_type_skills VALUES (85, 34, 44, 'Chaos Minotaur Loner');
INSERT INTO player_type_skills VALUES (86, 34, 67, 'Chaos Minotaur Wild Animal');
INSERT INTO player_type_skills VALUES (87, 32, 15, 'Chaos Beastman Horns');
INSERT INTO player_type_skills VALUES (88, 36, 44, 'Champion Grashnak Loner');
INSERT INTO player_type_skills VALUES (89, 36, 36, 'Champion Grashnak Frenzy');
INSERT INTO player_type_skills VALUES (90, 36, 15, 'Champion Grashnak Horns');
INSERT INTO player_type_skills VALUES (91, 36, 13, 'Champion Grashnak MBlow');
INSERT INTO player_type_skills VALUES (92, 36, 63, 'Champion Grashnak TSkull');
INSERT INTO player_type_skills VALUES (93, 37, 44, 'Champion Griff Loner');
INSERT INTO player_type_skills VALUES (94, 37, 30, 'Champion Griff Block');
INSERT INTO player_type_skills VALUES (95, 37, 7, 'Champion Griff Dodge');
INSERT INTO player_type_skills VALUES (96, 37, 35, 'Champion Griff Fend');
INSERT INTO player_type_skills VALUES (97, 37, 8, 'Champion Griff Sprint');
INSERT INTO player_type_skills VALUES (98, 37, 60, 'Champion Griff SFeet');
INSERT INTO player_type_skills VALUES (99, 38, 44, 'Champion Grim Loner');
INSERT INTO player_type_skills VALUES (100, 38, 36, 'Champion Grim Frenzy');
INSERT INTO player_type_skills VALUES (101, 38, 30, 'Champion Grim Block');
INSERT INTO player_type_skills VALUES (102, 38, 13, 'Champion Grim MBlow');
INSERT INTO player_type_skills VALUES (103, 38, 63, 'Champion Grim TSkull');
INSERT INTO player_type_skills VALUES (104, 38, 26, 'Champion Grim Dauntless');
INSERT INTO player_type_skills VALUES (105, 40, 44, 'Champion Jordell Loner');
INSERT INTO player_type_skills VALUES (106, 40, 30, 'Champion Jordell Block');
INSERT INTO player_type_skills VALUES (107, 40, 7, 'Champion Jordell Dodge');
INSERT INTO player_type_skills VALUES (108, 40, 28, 'Champion Jordell DivinCatch');
INSERT INTO player_type_skills VALUES (109, 40, 11, 'Champion Jordell Leap');
INSERT INTO player_type_skills VALUES (110, 40, 56, 'Champion Jordell SideStep');
INSERT INTO player_type_skills VALUES (112, 39, 44, 'Champion HeadSpliter Loner');
INSERT INTO player_type_skills VALUES (113, 39, 36, 'Champion HeadSpliter Frenzy');
INSERT INTO player_type_skills VALUES (114, 39, 13, 'Champion HeadSpliter MBlow');
INSERT INTO player_type_skills VALUES (115, 39, 49, 'Champion HeadSpliter Prehensile');
INSERT INTO player_type_skills VALUES (116, 41, 44, 'Champion Ripper Loner');
INSERT INTO player_type_skills VALUES (117, 41, 13, 'Champion Ripper MBlow');
INSERT INTO player_type_skills VALUES (118, 41, 37, 'Champion Ripper Grab');
INSERT INTO player_type_skills VALUES (119, 41, 19, 'Champion Ripper Regen');
INSERT INTO player_type_skills VALUES (120, 41, 64, 'Champion Ripper Throwteam');
INSERT INTO player_type_skills VALUES (121, 42, 44, 'Champion Slibli Loner');
INSERT INTO player_type_skills VALUES (122, 42, 30, 'Champion Slibli Block');
INSERT INTO player_type_skills VALUES (123, 42, 37, 'Champion Slibli Grab');
INSERT INTO player_type_skills VALUES (124, 42, 38, 'Champion Slibli Guard');
INSERT INTO player_type_skills VALUES (125, 42, 17, 'Champion Slibli StandFirm');
INSERT INTO player_type_skills VALUES (126, 43, 44, 'Champion Varag Loner');
INSERT INTO player_type_skills VALUES (127, 43, 30, 'Champion Varag Block');
INSERT INTO player_type_skills VALUES (128, 43, 13, 'Champion Varag MBlow');
INSERT INTO player_type_skills VALUES (129, 43, 63, 'Champion Varag TSkull');
INSERT INTO player_type_skills VALUES (130, 43, 41, 'Champion Varag JumpUp');
INSERT INTO player_type_skills VALUES (131, 44, 18, 'Goblin Troll Always Hungry');
INSERT INTO player_type_skills VALUES (132, 44, 44, 'Goblin Troll Loner');
INSERT INTO player_type_skills VALUES (133, 44, 13, 'Goblin Troll Mighty Blow');
INSERT INTO player_type_skills VALUES (134, 44, 51, 'Goblin Troll Really Stupid');
INSERT INTO player_type_skills VALUES (135, 44, 19, 'Goblin Troll Regeneration');
INSERT INTO player_type_skills VALUES (136, 44, 64, 'Goblin Troll Throw Team-Mate');
INSERT INTO player_type_skills VALUES (137, 45, 54, 'Gob Pogo');
INSERT INTO player_type_skills VALUES (138, 45, 7, 'Gob Pogo');
INSERT INTO player_type_skills VALUES (139, 45, 27, 'Gob Pogo');
INSERT INTO player_type_skills VALUES (140, 45, 11, 'Gob Pogo');
INSERT INTO player_type_skills VALUES (141, 45, 32, 'Gob Pogo');
INSERT INTO player_type_skills VALUES (142, 45, 59, 'Gob Pogo');
INSERT INTO player_type_skills VALUES (143, 46, 54, 'Gob Fanatic');
INSERT INTO player_type_skills VALUES (144, 46, 76, 'Gob Fanatic');
INSERT INTO player_type_skills VALUES (145, 46, 46, 'Gob Fanatic');
INSERT INTO player_type_skills VALUES (146, 46, 59, 'Gob Fanatic');
INSERT INTO player_type_skills VALUES (147, 48, 29, 'Elf Noir Runner');
INSERT INTO player_type_skills VALUES (148, 49, 55, 'Elf Noir Assasins');
INSERT INTO player_type_skills VALUES (149, 49, 77, 'Elf Noir Assassin');
INSERT INTO player_type_skills VALUES (150, 50, 30, 'Elf Noir Blitzer');
INSERT INTO player_type_skills VALUES (151, 51, 36, 'Elf Noir Furie');
INSERT INTO player_type_skills VALUES (152, 51, 7, 'Elf Noir Furie');
INSERT INTO player_type_skills VALUES (153, 51, 41, 'Elf Noir Furie');
INSERT INTO player_type_skills VALUES (154, 52, 44, 'Champion Horkon');
INSERT INTO player_type_skills VALUES (155, 52, 7, 'Champion Horkon');
INSERT INTO player_type_skills VALUES (156, 52, 11, 'Champion Horkon');
INSERT INTO player_type_skills VALUES (157, 52, 70, 'Champion Horkon');
INSERT INTO player_type_skills VALUES (158, 52, 55, 'Champion Horkon');
INSERT INTO player_type_skills VALUES (159, 52, 77, 'Champion Horkon');
INSERT INTO player_type_skills VALUES (160, 10, 22, 'Deathroller');
INSERT INTO player_type_skills VALUES (161, 10, 27, 'Deathroller');
INSERT INTO player_type_skills VALUES (162, 10, 40, 'Deathroller');
INSERT INTO player_type_skills VALUES (163, 10, 13, 'Deathroller');
INSERT INTO player_type_skills VALUES (164, 10, 46, 'Deathroller');
INSERT INTO player_type_skills VALUES (165, 10, 54, 'Deathroller');
INSERT INTO player_type_skills VALUES (166, 10, 17, 'Deathroller');
INSERT INTO player_type_skills VALUES (167, 53, 44, 'Champion Morg Loner');
INSERT INTO player_type_skills VALUES (168, 53, 30, 'Champion Morg Block');
INSERT INTO player_type_skills VALUES (169, 53, 13, 'Champion Morg Mighty Blow');
INSERT INTO player_type_skills VALUES (170, 53, 63, 'Champion Morg Thick Skull');
INSERT INTO player_type_skills VALUES (171, 53, 64, 'Champion Morg Throw Team Mate');
";

global $settings;
if ($settings['leegmgr_cyanide_edition'] == 2) {
    $_dat_palyer_types_skills .= "
INSERT INTO player_type_skills VALUES (172, 54, 19, 'Undead Skeleton Regeneration');
INSERT INTO player_type_skills VALUES (173, 55, 19, 'Undead Zombie Regeneration');
INSERT INTO player_type_skills VALUES (174, 56, 7, 'Undead Ghoul Dodge');
INSERT INTO player_type_skills VALUES (175, 57, 30, 'Undead Wight Block');
INSERT INTO player_type_skills VALUES (176, 57, 19, 'Undead Wight Regeneration');
INSERT INTO player_type_skills VALUES (177, 58, 13, 'Undead Mummy Mighty Blow');
INSERT INTO player_type_skills VALUES (178, 58, 19, 'Undead Mummy Regeneration');
INSERT INTO player_type_skills VALUES (179, 59, 44, 'Champion Count Luthor von Drakenborg Loner');
INSERT INTO player_type_skills VALUES (180, 59, 30, 'Champion Count Luthor von Drakenborg Block');
INSERT INTO player_type_skills VALUES (181, 59, 7, 'Champion Count Luthor von Drakenborg Dodge');
INSERT INTO player_type_skills VALUES (182, 59, 78, 'Champion Count Luthor von Drakenborg Hypnotic Gaze');
INSERT INTO player_type_skills VALUES (183, 59, 19, 'Champion Count Luthor von Drakenborg Regeneration');
INSERT INTO player_type_skills VALUES (204, 60, 7, 'Halfling Halfling Dodge');
INSERT INTO player_type_skills VALUES (205, 60, 52, 'Halfling Halfling Right Stuff');
INSERT INTO player_type_skills VALUES (206, 60, 59, 'Halfling Halfling Stunty');
INSERT INTO player_type_skills VALUES (207, 61, 13, 'Halfling Treeman Mighty Blow');
INSERT INTO player_type_skills VALUES (209, 61, 17, 'Halfling Treeman Stand Firm');
INSERT INTO player_type_skills VALUES (210, 61, 58, 'Halfling Treeman Strong Arm');
INSERT INTO player_type_skills VALUES (211, 61, 63, 'Halfling Treeman Thick Skull');
INSERT INTO player_type_skills VALUES (212, 61, 64, 'Halfling Treeman ThrowTeam-Mate');
INSERT INTO player_type_skills VALUES (213, 61, 20, 'Halfling Treeman Take Root');
INSERT INTO player_type_skills VALUES (214, 62, 30, 'Norse Lineman Block');
INSERT INTO player_type_skills VALUES (215, 63, 30, 'Norse Thrower Block');
INSERT INTO player_type_skills VALUES (216, 63, 47, 'Norse Thrower Pass');
INSERT INTO player_type_skills VALUES (217, 64, 30, 'Norse Runner Block');
INSERT INTO player_type_skills VALUES (218, 64, 26, 'Norse Runner Dauntless');
INSERT INTO player_type_skills VALUES (219, 65, 30, 'Norse Berserker Block');
INSERT INTO player_type_skills VALUES (220, 65, 36, 'Norse Berserker Frenzy');
INSERT INTO player_type_skills VALUES (221, 65, 41, 'Norse Berserker Jump Up');
INSERT INTO player_type_skills VALUES (222, 66, 36, 'Norse Ulfwerener Frenzy');
INSERT INTO player_type_skills VALUES (226, 67, 36, 'Norse Yhetee Frenzy');
INSERT INTO player_type_skills VALUES (223, 67, 44, 'Norse Yhetee Loner');
INSERT INTO player_type_skills VALUES (224, 67, 75, 'Norse Yhetee Claws');
INSERT INTO player_type_skills VALUES (225, 67, 33, 'Norse Yhetee Disturbing Presence');
INSERT INTO player_type_skills VALUES (227, 67, 67, 'Norse Yhetee Wild Animal');
INSERT INTO player_type_skills VALUES (228, 68, 7, 'Amazon Linewoman Dodge');
INSERT INTO player_type_skills VALUES (229, 69, 7, 'Amazon Thrower Dodge');
INSERT INTO player_type_skills VALUES (230, 69, 47, 'Amazon Thrower Pass');
INSERT INTO player_type_skills VALUES (231, 70, 7, 'Amazon Catcher Dodge');
INSERT INTO player_type_skills VALUES (232, 70, 6, 'Amazon Catcher Catch');
INSERT INTO player_type_skills VALUES (233, 71, 7, 'Amazon Blitzer Dodge');
INSERT INTO player_type_skills VALUES (234, 71, 30, 'Amazon Blitzer Block');
INSERT INTO player_type_skills VALUES (235, 73, 47, 'Elf Thrower Pass');
INSERT INTO player_type_skills VALUES (236, 74, 6, 'Elf Catcher Catch');
INSERT INTO player_type_skills VALUES (237, 74, 45, 'Elf Catcher Nerves of Steel');
INSERT INTO player_type_skills VALUES (238, 75, 30, 'Elf Blitzer Block');
INSERT INTO player_type_skills VALUES (239, 75, 56, 'Elf Blitzer Sidestep');
INSERT INTO player_type_skills VALUES (240, 78, 47, 'High Elf Thrower Pass');
INSERT INTO player_type_skills VALUES (241, 78, 53, 'High Elf Thrower Safe Throw');
INSERT INTO player_type_skills VALUES (242, 79, 6, 'High Elf Catcher Catch');
INSERT INTO player_type_skills VALUES (243, 80, 30, 'High Elf Blitzer Block');
INSERT INTO player_type_skills VALUES (244, 81, 19, 'Khemri Skeleton Regeneration');
INSERT INTO player_type_skills VALUES (245, 81, 63, 'Khemri Skeleton Thick Skull');
INSERT INTO player_type_skills VALUES (246, 82, 47, 'Khemri Thro-Ra Pass');
INSERT INTO player_type_skills VALUES (247, 82, 19, 'Khemri Thro-Ra Regeneration');
INSERT INTO player_type_skills VALUES (248, 82, 61, 'Khemri Thro-Ra Sure Hands');
INSERT INTO player_type_skills VALUES (249, 83, 30, 'Khemri Blitz-Ra Block');
INSERT INTO player_type_skills VALUES (250, 83, 19, 'Khemri Blitz-Ra Regeneration');
INSERT INTO player_type_skills VALUES (252, 84, 19, 'Khemri Tomb Guardian Regeneration');
INSERT INTO player_type_skills VALUES (251, 84, 81, 'Khemri Tomb Guardian Decay');
INSERT INTO player_type_skills VALUES (253, 86, 19, 'Necromantic Zombie Regeneration');
INSERT INTO player_type_skills VALUES (254, 87, 7, 'Necromantic Ghoul Dodge');
INSERT INTO player_type_skills VALUES (255, 88, 30, 'Necromantic Wight Block');
INSERT INTO player_type_skills VALUES (256, 88, 19, 'Necromantic Wight Regeneration');
INSERT INTO player_type_skills VALUES (257, 89, 19, 'Necromantic Flesh Golem Regeneration');
INSERT INTO player_type_skills VALUES (258, 89, 17, 'Necromantic Flesh Golem Stand Firm');
INSERT INTO player_type_skills VALUES (259, 89, 63, 'Necromantic Flesh Golem Thick Skull');
INSERT INTO player_type_skills VALUES (260, 90, 75, 'Necromantic Werewolf Claws');
INSERT INTO player_type_skills VALUES (261, 90, 36, 'Necromantic Werewolf Frenzy');
INSERT INTO player_type_skills VALUES (262, 90, 19, 'Necromantic Werewolf Regeneration');
INSERT INTO player_type_skills VALUES (263, 91, 81, 'Nurgle Rotter Decay');
INSERT INTO player_type_skills VALUES (264, 91, 82, 'Nurgle Rotter Nurgles Rot');
INSERT INTO player_type_skills VALUES (265, 92, 15, 'Nurgle Pestigor Horns');
INSERT INTO player_type_skills VALUES (266, 92, 82, 'Nurgle Pestigor Nurgles Rot');
INSERT INTO player_type_skills VALUES (267, 92, 19, 'Nurgle Pestigor Regeneration');
INSERT INTO player_type_skills VALUES (271, 93, 19, 'Nurgle Nurgle Warrior Regeneration');
INSERT INTO player_type_skills VALUES (270, 93, 82, 'Nurgle Nurgle Warrior Nurgles Rot');
INSERT INTO player_type_skills VALUES (268, 93, 33, 'Nurgle Nurgle Warrior Disturbing Presence');
INSERT INTO player_type_skills VALUES (269, 93, 10, 'Nurgle Nurgle Warrior Foul Appearance');
INSERT INTO player_type_skills VALUES (274, 94, 10, 'Nurgle Beast of Nurgle Foul Appearance');
INSERT INTO player_type_skills VALUES (273, 94, 33, 'Nurgle Beast of Nurgle Disturbing Presence');
INSERT INTO player_type_skills VALUES (272, 94, 44, 'Nurgle Beast of Nurgle Loner');
INSERT INTO player_type_skills VALUES (275, 94, 13, 'Nurgle Beast of Nurgle Mighty Blow');
INSERT INTO player_type_skills VALUES (276, 94, 82, 'Nurgle Beast of Nurgle Nurgles Rot');
INSERT INTO player_type_skills VALUES (277, 94, 51, 'Nurgle Beast of Nurgle Really Stupid');
INSERT INTO player_type_skills VALUES (278, 94, 19, 'Nurgle Beast of Nurgle Regeneration');
INSERT INTO player_type_skills VALUES (279, 94, 69, 'Nurgle Beast of Nurgle Tentacles');
INSERT INTO player_type_skills VALUES (280, 95, 7, 'Ogre Snotling Dodge');
INSERT INTO player_type_skills VALUES (281, 95, 52, 'Ogre Snotling Right Stuff');
INSERT INTO player_type_skills VALUES (282, 95, 56, 'Ogre Snotling Side Step');
INSERT INTO player_type_skills VALUES (283, 95, 59, 'Ogre Snotling Stunty');
INSERT INTO player_type_skills VALUES (284, 95, 83, 'Ogre Snotling Titchy');
INSERT INTO player_type_skills VALUES (285, 96, 31, 'Ogre Ogre Bone-Head');
INSERT INTO player_type_skills VALUES (286, 96, 13, 'Ogre Ogre Mighty Blow');
INSERT INTO player_type_skills VALUES (287, 96, 63, 'Ogre Ogre Thick Skull');
INSERT INTO player_type_skills VALUES (288, 96, 64, 'Ogre Ogre Throw Team-Mate');
INSERT INTO player_type_skills VALUES (289, 98, 84, 'Vampire Vampire Blood Lust');
INSERT INTO player_type_skills VALUES (290, 98, 78, 'Vampire Vampire Hypnotic Gaze');
INSERT INTO player_type_skills VALUES (291, 98, 19, 'Vampire Vampire Regeneration');
INSERT INTO player_type_skills VALUES (292, 10, 44, 'Deathroller Loner');				
INSERT INTO player_type_skills VALUES (293, 54, 63, 'Undead Skeleton Thick Skull');			
INSERT INTO player_type_skills VALUES (294, 12, 8, 'Wood Elf Catcher Sprint');				
INSERT INTO player_type_skills VALUES (295, 106, 44, 'Champion Hammerblow Loner');				
INSERT INTO player_type_skills VALUES (296, 106, 75, 'Champion Hammerblow Claws');				
INSERT INTO player_type_skills VALUES (297, 106, 33, 'Champion Hammerblow DisturbingPresence');				
INSERT INTO player_type_skills VALUES (298, 106, 36, 'Champion Hammerblow Frenzy');				
INSERT INTO player_type_skills VALUES (299, 106, 19, 'Champion Hammerblow Regeneration');				
INSERT INTO player_type_skills VALUES (300, 106, 63, 'Champion Hammerblow ThickSkull');				
INSERT INTO player_type_skills VALUES (301, 105, 44, 'Champion Ramtut Loner');				
INSERT INTO player_type_skills VALUES (302, 105, 22, 'Champion Ramtut BreakTackle');				
INSERT INTO player_type_skills VALUES (303, 105, 13, 'Champion Ramtut Mighty Blow');				
INSERT INTO player_type_skills VALUES (304, 105, 19, 'Champion Ramtut Regeneration');				
INSERT INTO player_type_skills VALUES (305, 105, 68, 'Champion Ramtut Wrestle');				
INSERT INTO player_type_skills VALUES (306, 104, 44, 'Champion Nekbrekerekh Loner');				
INSERT INTO player_type_skills VALUES (307, 104, 30, 'Champion Nekbrekerekh Block');				
INSERT INTO player_type_skills VALUES (308, 104, 22, 'Champion Nekbrekerekh BreakTackle');				
INSERT INTO player_type_skills VALUES (309, 104, 40, 'Champion Nekbrekerekh Juggernaut');				
INSERT INTO player_type_skills VALUES (310, 104, 19, 'Champion Nekbrekerekh Regeneration');				
INSERT INTO player_type_skills VALUES (311, 104, 1, 'Champion Nekbrekerekh StripBall');				
INSERT INTO player_type_skills VALUES (312, 103, 44, 'Champion Deeproot Loner');				
INSERT INTO player_type_skills VALUES (313, 103, 30, 'Champion Deeproot Block');				
INSERT INTO player_type_skills VALUES (314, 103, 13, 'Champion Deeproot MightyBlow');				
INSERT INTO player_type_skills VALUES (315, 103, 17, 'Champion Deeproot StandFirm');				
INSERT INTO player_type_skills VALUES (316, 103, 58, 'Champion Deeproot StrongArm');				
INSERT INTO player_type_skills VALUES (317, 103, 63, 'Champion Deeproot ThickSkulle');				
INSERT INTO player_type_skills VALUES (318, 103, 64, 'Champion Deeproot ThrowTeamMate');				
INSERT INTO player_type_skills VALUES (319, 102, 44, 'Champion Borak Loner');				
INSERT INTO player_type_skills VALUES (320, 102, 30, 'Champion Borak Block');				
INSERT INTO player_type_skills VALUES (321, 102, 27, 'Champion Borak DirtyPlayer');				
INSERT INTO player_type_skills VALUES (322, 102, 13, 'Champion Borak MightyBlow');				
INSERT INTO player_type_skills VALUES (323, 101, 44, 'Champion Eldril Loner');				
INSERT INTO player_type_skills VALUES (324, 101, 6, 'Champion Eldril Catch');				
INSERT INTO player_type_skills VALUES (325, 101, 7, 'Champion Eldril Dodge');				
INSERT INTO player_type_skills VALUES (326, 101, 78, 'Champion Eldril Hyptnotic Gaze');				
INSERT INTO player_type_skills VALUES (327, 101, 45, 'Champion Eldril NervesOfSteel');				
INSERT INTO player_type_skills VALUES (328, 101, 9, 'Champion Eldril PassBlock');				
INSERT INTO player_type_skills VALUES (329, 100, 44, 'Champion Scrappa Loner');				
INSERT INTO player_type_skills VALUES (330, 100, 27, 'Champion Scrappa DirtyPlayer');				
INSERT INTO player_type_skills VALUES (331, 100, 7, 'Champion Scrappa Dodge');				
INSERT INTO player_type_skills VALUES (332, 100, 11, 'Champion Scrappa Leap');				
INSERT INTO player_type_skills VALUES (333, 100, 52, 'Champion Scrappa RightStuff');				
INSERT INTO player_type_skills VALUES (334, 100, 8, 'Champion Scrappa Sprint');				
INSERT INTO player_type_skills VALUES (335, 100, 59, 'Champion Scrappa Stunty');				
INSERT INTO player_type_skills VALUES (336, 100, 60, 'Champion Scrappa SureFeet');				
INSERT INTO player_type_skills VALUES (337, 100, 32, 'Champion Scrappa VeryLongLegs');				
INSERT INTO player_type_skills VALUES (338, 99, 44, 'Champions Zara Loner');				
INSERT INTO player_type_skills VALUES (339, 99, 30, 'Champions Zara Block');				
INSERT INTO player_type_skills VALUES (340, 99, 26, 'Champions Zara Dauntless');				
INSERT INTO player_type_skills VALUES (341, 99,	7, 'Champions Zara Dodge');				
INSERT INTO player_type_skills VALUES (342, 99,	41, 'Champions Zara JumpUp');				
INSERT INTO player_type_skills VALUES (343, 99,	77, 'Champions Zara Stab');				
INSERT INTO player_type_skills VALUES (344, 99,	79, 'Champions Zara Stakes');				
INSERT INTO player_type_skills VALUES (345, 107, 80, 'Goblin Bombardier Bombardier');
INSERT INTO player_type_skills VALUES (346, 107, 7, 'Goblin Bombardier Dodge');
INSERT INTO player_type_skills VALUES (347, 107, 59, 'Goblin Bombardier Stunty');
INSERT INTO player_type_skills VALUES (348, 107, 54, 'Goblin Bombardier Secret Weapon');
";
}
?>
