<?php
include('libs/config.php');
include('libs/HtmlHelper.php');

// HTMLHelper for table
try
{
    $th = ['header1', 'header2', 'header3'];
    $arrForTable[]= ['Petya', 'Masha', 'Sasha'];
    $arrForTable[] = ['Katia', 'Fedr', 'Misha'];
    $tab = HtmlHelper::table($arrForTable, $th, 'Table for Html Helper Class');
    $tab2 = HtmlHelper::table($arrForTable, $th);
    $th3 =[];
    $tab3 = HtmlHelper::table($arrForTable, $th3);
}
catch (Exception $e)
{
    $msg = $e->getMessage();
}

//HTMLHelper for select
$arrForSelect = ['Please, Make a choise','them1', 'them2', 'them3', 'them4', 'them5', 'them6'];
$select = HtmlHelper::select($arrForSelect, 0, 3);
$select2 = HtmlHelper::select($arrForSelect, 3);

//HTMLHelper for ul - ol
$arrForList = ['apple', 'orange', 'cherry', 'pear', 'grapefruit', 'lime'];
$list = HtmlHelper::ulol($arrForList, 1);
$list2 = HtmlHelper::ulol($arrForList);

//HTMLHelper for dl dt dd
$arrForDl = [
    'Stimulus'=>'So in ancient Greece was called the <br>sharp peak, which drove the bull',
    'Restaurant' => 'In the middle of the 18th century the Parisian<br> culinary specialist Boulanger discovered<br>
     a simple tavern. As an advertisement, he wrote: <br>"Come here everyone who has a bad stomach.<br>
     Restoring your strength. " So there was the <br>world\'s first restorer (in French pronunciation - a restaurant)<br>'
];
$listDl = HtmlHelper::dldtdd($arrForDl);
//$listDl2 = HtmlHelper::dldtdd($arrForDl, );

//HTMLHelper for checkbox and radiobutton
$arrForcheck = ['d'=>'dog', 'c'=>'cat', 'm'=>'mouse'];
$check = HtmlHelper::inputRadioCheckbox($arrForcheck, 'name', 1 );
$rad = HtmlHelper::inputRadioCheckbox($arrForcheck, 'name');

include ('template/tmp.php');
?>
