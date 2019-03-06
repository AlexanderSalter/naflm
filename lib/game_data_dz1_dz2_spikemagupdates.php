<?php

/*
 *  Copyright (c) Daniel Straalman <email is protected> 2009-2012. All Rights Reserved.
 *
 *
 *  This file is part of OBBLM.
 *
 *  OBBLM is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  OBBLM is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
 
require_once('lib/game_data_lrb6.php');
/*
#####
Death Zone 1 + 2 Updates
#####
*/
// Update team details DZ1 + DZ2
$DEA['Elven Union']= $DEA['Elf']; unset($DEA['Elf']);
$DEA['Goblin']['players']['Bomma'] = $DEA['Goblin']['players']['Bombardier']; unset($DEA['Goblin']['players']['Bombardier']);
$skillarray['E'][113] = $skillididx[113] = 'Swoop';
$DEA['Goblin']['players']['Doom Diver']	= array (
	'ma'        	=> 6,
	'st'        	=> 2,
	'ag'        	=> 3,
	'av'        	=> 7,
	'def'	    => array (104,108,113),
	'norm'		=> array ('A'),
	'doub'		=> array ('G','S', 'P'),
	'qty'			=> 1,
	'cost'			=> 60000,
	'icon'			=> 'goblin1',
	'pos_id'        => 66,
);
$DEA['Goblin']['players']['Ooligan'] = array (
	'ma'        	=> 6,
	'st'        	=> 2,
	'ag'        	=> 3,
	'av'        	=> 7,
	'def'	    => array (72,23,97,104,108),
	'norm'		=> array ('A'),
	'doub'		=> array ('G','S', 'P'),
	'qty'			=> 1,
	'cost'			=> 70000,
	'icon'			=> 'goblin1',
	'pos_id'        => 67,
);
$DEA['Chaos Renegades']= $DEA['Chaos Pact']; unset($DEA['Chaos Pact']);
$DEA['Chaos Renegades']['players']['Human Renegade'] = $DEA['Chaos Renegades']['players']['Marauder']; unset($DEA['Chaos Renegades']['players']['Marauder']);
$DEA['Chaos Renegades']['players']['Orc Renegade']	= array (
    				'ma'        	=> 5,
    				'st'        	=> 3,
    				'ag'        	=> 3,
    				'av'        	=> 9,
    				'def'	    => array (113),
    				'norm'		=> array ('G', 'M'),
    				'doub'		=> array ('A', 'S', 'P'),
    				'qty'			  => 1,
    				'cost'			  => 50000,
    				'icon'			  => 'olineman1',
    			    'pos_id'          => 217,
  			);
// Update star player details DZ1 + DZ2
$stars['Bo Gallanté'] = array (
       'id'            => -100,
       'ma'            => 8,
       'st'            => 3,
       'ag'            => 4,
       'av'            => 7,
       'def'    	   => array (23,99,26,28,29),
       'cost'          => 160000,
       'icon'          => 'star',
       'races'         => array(8),
   );
$stars['Glart Smashrip'] = array (
       'id'            => -101,
       'ma'            => 5,
       'st'            => 4,
       'ag'            => 2,
       'av'            => 8,
       'def'    	   => array (1,71,51,53,99,57),
       'cost'          => 190000,
       'icon'          => 'star',
       'races'         => array(19),
   );
$stars['Karla Von Kill'] = array (
       'id'            => -102,
       'ma'            => 6,
       'st'            => 4,
       'ag'            => 3,
       'av'            => 8,
       'def'    	   => array (1,2,23,24,99),
       'cost'          => 220000,
       'icon'          => 'star',
       'races'         => array(0,7,9,14),
   );
$stars['Kreek Rustgouger'] = array (
       'id'            => -103,
       'ma'            => 5,
       'st'            => 7,
       'ag'            => 2,
       'av'            => 9,
       'def'    	   => array (91,99,54,100,76,105),
       'cost'          => 130000,
       'icon'          => 'star',
       'races'         => array(19,23),
   );
$stars['Madcap Miggz'] = array (
       'id'            => -104,
       'ma'            => 6,
       'st'            => 4,
       'ag'            => 3,
       'av'            => 8,
       'def'    	   => array (50,71,25,99,100,79,112),
       'cost'          => 170000,
       'icon'          => 'star',
       'races'         => array(6,23),
   );
$stars['Lucien (+ Valen)'] = array (
       'id'            => -105,
       'ma'            => 7,
       'st'            => 3,
       'ag'            => 4,
       'av'            => 8,
       'def'    	   => array (1,99,54,13),
       'cost'          => 390000,
       'icon'          => 'star',
       'races'         => array(5,8,20),
   );
$stars['Valen (included in Lucien)'] = array (
       'id'            => -106,
       'ma'            => 7,
       'st'            => 3,
       'ag'            => 5,
       'av'            => 7,
       'def'    	   => array (40,99,44,45,46,12),
       'cost'          => 0,
       'icon'          => 'star',
       'races'         => array(5,8,20),
   );
// Addition of DZ 2 In-Famous Coaching Staff
$coachingstaff['Horatio X. Schottenheim (Coaching Staff)'] = array (
       'id'            => -1001,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 80000,
       'icon'          => 'star',
       'races'         => array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
   );
$coachingstaff['Kari Coldsteel (Coaching Staff)'] = array (
       'id'            => -1002,
       'ma'            => 6,
       'st'            => 2,
       'ag'            => 3,
       'av'            => 7,
       'def'    	   => array (1,2,5,99),
       'cost'          => 50000,
       'icon'          => 'star',
       'races'         => array(0,4,9,14),
   );
$coachingstaff['Fink Da Fixer (Coaching Staff)'] = array (
       'id'            => -1003,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 50000,
       'icon'          => 'star',
       'races'         => array(6,12,16,23),
   );
$coachingstaff['Papa Skullbones (Coaching Staff)'] = array (
       'id'            => -1004,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 80000,
       'icon'          => 'star',
       'races'         => array(1,15,21),
   );
$coachingstaff['Galandril Silverwater (Coaching Staff)'] = array (
       'id'            => -1005,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 50000,
       'icon'          => 'star',
       'races'         => array(5,8,20),
   );
$coachingstaff['Krot Shockwhisker (Coaching Staff)'] = array (
       'id'            => -1006,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 80000,
       'icon'          => 'star',
       'races'         => array(19,23),
   );
/*
#####
Spike Mag 1 Updates
#####
*/
// Update team details Spike 1
$DEA['Chaos Chosen']= $DEA['Chaos']; unset($DEA['Chaos']);
$DEA['Chaos Chosen']['players']['Beastman Runners'] = $DEA['Chaos Chosen']['players']['Beastman']; unset($DEA['Chaos Chosen']['players']['Beastman']);
$DEA['Chaos Chosen']['players']['Chosen Blockers'] = $DEA['Chaos Chosen']['players']['Chaos Warrior']; unset($DEA['Chaos Chosen']['players']['Chaos Warrior']);
// Update star player details Spike 1
$stars['Lewdgrip Whiparm']['cost']   = 160000;
$stars['Lewdgrip Whiparm']['def']   = array (99, 45, 58, 12, 77, 23);
$stars['Bilerot Vomitflesh'] = array (
	'id'            => -200,
	'ma'            => 4,
	'st'            => 5,
	'ag'            => 2,
	'av'            => 9,
	'def'    	   => array (3,72,74,99),
	'cost'          => 180000,
	'icon'          => 'star',
	'races'         => array(1,15),
);
$stars['Withergrasp Doubledrool'] = array (
	'id'            => -201,
	'ma'            => 6,
	'st'            => 3,
	'ag'            => 3,
	'av'            => 8,
	'def'    	   => array (99,76,13,77,78,14),
	'cost'          => 170000,
	'icon'          => 'star',
	'races'         => array(1,15,21),
);
$stars['Scyla Anfingrimm'] = array (
	'id'            => -202,
	'ma'            => 5,
	'st'            => 5,
	'ag'            => 1,
	'av'            => 9,
	'def'    	   => array (71,5,99,76,59,112),
	'cost'          => 250000,
	'icon'          => 'star',
	'races'         => array(1,15,21),
);
$skillarray['E'][115] = $skillididx[115] = 'Monstrous Mouth';
$stars['Gobbler Grimlich'] = array (
	'id'            => -203,
	'ma'            => 5,
	'st'            => 4,
	'ag'            => 2,
	'av'            => 9,
	'def'    	   => array (70,72,25,99,103,77,79,115),
	'cost'          => 230000,
	'icon'          => 'star',
	'races'         => array(1,15,23),
);
$stars['Guffle Pusmaw'] = array (
	'id'            => -204,
	'ma'            => 5,
	'st'            => 3,
	'ag'            => 4,
	'av'            => 9,
	'def'    	   => array (74,99,101,115),
	'cost'          => 210000,
	'icon'          => 'star',
	'races'         => array(1,15,23),
);
// Update inducements Spike 1
unset($inducements['Wizard']);
//Chaos Sorcerer
$coachingstaff['Chaos Sorcerer (Wizard)'] = array (
	'id'            => -1007,
	'ma'            => 0,
	'st'            => 0,
	'ag'            => 0,
	'av'            => 0,
	'def'    	   => array (),
	'cost'          => 150000,
	'icon'          => 'star',
	'races'         => array(1,2,15,21),
);
//Hireling Sports Wizard
$coachingstaff['Hireling Sports-Wizard (Wizard)'] = array (
	'id'            => -1008,
	'ma'            => 0,
	'st'            => 0,
	'ag'            => 0,
	'av'            => 0,
	'def'    	   => array (),
	'cost'          => 150000,
	'icon'          => 'star',
	'races'         => array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23),
);
/*
#####
Spike Mag 2 Updates
#####
*/
// Update team details Spike 2
// Update star player details Spike 2
$stars['Asperon Thorn'] = array (
	'id'            => -205,
	'ma'            => 6,
	'st'            => 3,
	'ag'            => 4,
	'av'            => 8,
	'def'    	   => array (42,7,99,45,46,12),
	'cost'          => 160000,
	'icon'          => 'star',
	'races'         => array(3,5,8),
);
$stars['Elijah Doom'] = array (
	'id'            => -206,
	'ma'            => 6,
	'st'            => 3,
	'ag'            => 4,
	'av'            => 9,
	'def'    	   => array (4,52,99,57,14),
	'cost'          => 190000,
	'icon'          => 'star',
	'races'         => array(3,5),
);
$stars['Kiroth Krakeneye'] = array (
	'id'            => -207,
	'ma'            => 7,
	'st'            => 3,
	'ag'            => 4,
	'av'            => 8,
	'def'    	   => array (72,74,99,8,13,77),
	'cost'          => 170000,
	'icon'          => 'star',
	'races'         => array(3,5),
);
$stars['Mordrix Hex'] = array (
	'id'            => -208,
	'ma'            => 7,
	'st'            => 3,
	'ag'            => 4,
	'av'            => 7,
	'def'    	   => array (1,2,23,4,5,99,54),
	'cost'          => 230000,
	'icon'          => 'star',
	'races'         => array(3),
);
$stars['Roxanna Darknail'] = array (
	'id'            => -209,
	'ma'            => 8,
	'st'            => 3,
	'ag'            => 5,
	'av'            => 7,
	'def'    	   => array (23,5,24,53,25,99),
	'cost'          => 250000,
	'icon'          => 'star',
	'races'         => array(0,3),
);
$stars['Jeremiah Kool (Golden Era)'] = array (
	'id'            => -210,
	'ma'            => 8,
	'st'            => 3,
	'ag'            => 5,
	'av'            => 8,
	'def'    	   => array (1,23,21,41,7,99,44,45,26),
	'cost'          => 390000,
	'icon'          => 'star',
	'races'         => array(3),
);
// Update inducements Spike 2
$inducements['Specialist Assistant Coaches'] = array (
	'cost' => 20000,
	'max'  => 20,
	'reduced_cost' => 20000,
	'reduced_cost_races' => array(),
);
$inducements['Temp Agency Cheerleaders'] = array (
	'cost' => 20000,
	'max'  => 20,
	'reduced_cost' => 20000,
	'reduced_cost_races' => array(),
);
//Weather Mage
$inducements['Weather Mage'] = array (
	'cost' => 30000,
	'max'  => 1,
	'reduced_cost' => 30000,
	'reduced_cost_races' => array(),
);
//Druchii Sports Sorceress
$coachingstaff['Druchii Sports Sorceress(Wizard)'] = array (
	'id'            => -1009,
	'ma'            => 0,
	'st'            => 0,
	'ag'            => 0,
	'av'            => 0,
	'def'    	   => array (),
	'cost'          => 150000,
	'icon'          => 'star',
	'races'         => array(3,5),
);
/*
#####
Spike Mag 3 Updates
#####
*/
// Update team details Spike 3
$DEA['Nurgle']['players']['Bloater'] = $DEA['Nurgle']['players']['Nurgle Warrior']; unset($DEA['Nurgle']['players']['Nurgle Warrior']);
$DEA['Nurgle']['players']['Rotspawn'] = $DEA['Nurgle']['players']['Beast of Nurgle']; unset($DEA['Nurgle']['players']['Beast of Nurgle']);
// Update star player details Spike 3
$stars['Bulla Shardhorn'] = array (
	'id'            => -211,
	'ma'            => 6,
	'st'            => 3,
	'ag'            => 3,
	'av'            => 8,
	'def'    	   => array (1,73,74,75,99,101,103,106,78),
	'cost'          => 230000,
	'icon'          => 'star',
	'races'         => array(15),
);
$stars['Tolly Glocklinger'] = array (
	'id'            => -212,
	'ma'            => 3,
	'st'            => 7,
	'ag'            => 2,
	'av'            => 9,
	'def'    	   => array (91,72,74,99,100,101,105,57),
	'cost'          => 110000,
	'icon'          => 'star',
	'races'         => array(15),
);
// Update inducements Spike 3
//Plague Doctors
$coachingstaff['Plague Doctors (Coaching Staff)'] = array (
	'id'            => -1010,
	'ma'            => 0,
	'st'            => 0,
	'ag'            => 0,
	'av'            => 0,
	'def'    	   => array (),
	'cost'          => 100000,
	'icon'          => 'star',
	'races'         => array(1,15),
);
//Cavorting Nurglings
$coachingstaff['Cavorting Nurglings (Coaching Staff)'] = array (
	'id'            => -1011,
	'ma'            => 0,
	'st'            => 0,
	'ag'            => 0,
	'av'            => 0,
	'def'    	   => array (),
	'cost'          => 40000,
	'icon'          => 'star',
	'races'         => array(15),
);
//Horticulturalist of Nurgle
$coachingstaff['Horticulturalist of Nurgle (Wizard)'] = array (
	'id'            => -1012,
	'ma'            => 0,
	'st'            => 0,
	'ag'            => 0,
	'av'            => 0,
	'def'    	   => array (),
	'cost'          => 150000,
	'icon'          => 'star',
	'races'         => array(1,15,21),
);
/*
#####
Spike Mag 4 Updates
#####
*/
//Update team details Spike 4
//Update star player details Spike 4
	//Frank N Stein
	//Bryce 'The Slice' Cambuel
	//Ivan 'The Animal' Deathshroud
	//Skrull Halfheight
	//'Rotten' Rick Bupkeis
	//Throttlesnot 'The Impaler'
	//Gretchen Wachter 'The Blood Bowl Widow'
//Update inducements Spike 4
	//Sports Necrotheurge