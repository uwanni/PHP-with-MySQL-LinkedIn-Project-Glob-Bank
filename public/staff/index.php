<?php 
    require_once ('../../private/initialize.php');
    $page_title = 'Staff Menu' ;
    include(SHARED_PATH.'/staffHeader.php');
?>



<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li>
                <a href="<?php echo url_for('/staff/subjects/index.php');?>">Subjects</a>
            </li>
        </ul>
    </div>
</div>

<?php
    include(SHARED_PATH.'/staffFooter.php'); 
?>