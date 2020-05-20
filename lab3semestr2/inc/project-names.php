<?php

$cursor = $db->tasks->distinct('project');
$projectNames = $cursor;
