<?php
/*
    WebMole, an automated explorer and tester for Web 2.0 applications
    Copyright (C) 2012-2013 Gabriel Le Breton, Fabien Maronnaud,
    Sylvain Hallé et al.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/* Prevent direct access to this file. */
if ($access != 'authorized')
	die('You are not allowed to view this file');
?>

<div id="oracle-test">
	<p>The javascript inserted in the following input <span class="label label-info">will be executed on each node during the exploration</span> to create a navigation filter if activated.</p>
    
    <div id="test-oracle-editor" class="editor"><?php echo htmlspecialchars(file_get_contents("config/default.test.oracle.js"), ENT_QUOTES); ?></div>
    <br />

    <label class="checkbox">
      <input type="checkbox" checked="<?php echo $CONFIG["Test-Oracle"]["default_enabled"]; ?>"> Enable Test Oracle
    </label>
    <div class="btn-group">
    	<a href="#" class="btn btn-primary" id="saveTestOracle"><i class="icon-hdd"></i> Save</a>
    	<a href="#" class="btn" id="revertTestOracle"><i class="icon-trash"></i> Revert changes</a>
    	<a href="#" class="btn" id="restoreTestOracle"><i class="icon-file"></i> Restore default</a>
    </div>
</div><!-- /#oracle-test -->
