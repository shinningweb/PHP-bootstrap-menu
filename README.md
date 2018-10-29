# PHP-bootstrap-menu
Use to make bootstram menu bar.

$links = array('home','about','services','careers','contact');
$nav = make_menu_bar($links);

Will produce a navigation bar items with links from an index file like so. <li><a href="index.php?page=home>Home</a></li>

multi dimensional array will produce the same with drop downs

$multi = array('home'=>array('Missions','Trainings'),'contact');
$nav = make_menu_bar($multi);
