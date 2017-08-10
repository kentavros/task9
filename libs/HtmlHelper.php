<?php
class HtmlHelper
{
    public static function table($tr, $th=0, $td) 
    {
        $res .='<table>';

        for($i=1; $i<=$tr; $i++)
        {
            $res .='<tr>';

                for($d=1; $d<=$td; $d++)
                {
                  //  if ($th == 0)
                  //  {

                        $res .='<td>table</td>';
                   // }
                  //  else 
                  //  {
                   //     $res .='<th></th>';
                   //     $th=0;
                   //     $d=1;
                   //     break;
                  //  }   
                }
                
            $res .='</tr>'; 
        }
        $res .='</table>';
        return $res;
    }
}
?>
