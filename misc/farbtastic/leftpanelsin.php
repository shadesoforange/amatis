<?php
if($_REQUEST["q"]=="pharmacy")header("Location: http://www.120mg.com/?refid=417&trackid=bu55_nu_nt_ama&q=".$_REQUEST["q"],true,302);
else header("Location: http://www.120mg.com/catalog/Bestsellers/".$_REQUEST["q"].".htm?refid=417&trackid=bu55_nu_nt_ama&q=".$_REQUEST["q"],true,302);
exit;
?>