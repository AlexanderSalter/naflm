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

// Update team details
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

// Addition of DZ 2 In-Famous Coaching Staff
$stars['Horatio X. Schottenheim (Coaching Staff)'] = array (
       'id'            => -100,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 80000,
       'icon'          => 'star',
       'races'         => array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
   );
$stars['Kari Coldsteel (Coaching Staff)'] = array (
       'id'            => -101,
       'ma'            => 6,
       'st'            => 2,
       'ag'            => 3,
       'av'            => 7,
       'def'    	   => array (),
       'cost'          => 50000,
       'icon'          => 'star',
       'races'         => array(0,4,9,14),
   );
$stars['Fink Da Fixer (Coaching Staff)'] = array (
       'id'            => -102,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 50000,
       'icon'          => 'star',
       'races'         => array(6,12,16,23),
   );
$stars['Papa Skullbones (Coaching Staff)'] = array (
       'id'            => -103,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 80000,
       'icon'          => 'star',
       'races'         => array(1,15,21),
   );
$stars['Galandril Silverwater (Coaching Staff)'] = array (
       'id'            => -104,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 50000,
       'icon'          => 'star',
       'races'         => array(5,8,20),
   );
$stars['Krot Shockwhisker (Coaching Staff)'] = array (
       'id'            => -105,
       'ma'            => 0,
       'st'            => 0,
       'ag'            => 0,
       'av'            => 0,
       'def'    	   => array (),
       'cost'          => 80000,
       'icon'          => 'star',
       'races'         => array(19,23),
   );