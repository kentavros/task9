<?php
class HtmlHelper
{

    /**
     * Table method
     * @param array $arr[][$v,$v,$v]
     * @param array $th
     * @param bool $caption
     * @return string
     * @throws Exception
     */
    public static function table(array $arr, array $th=[], $caption=false, $classTable=false, $classCaption=false, $classTh=false)
    {
        if(!empty($arr))
        {
            $table = '<table class="'.$classTable.'">';
            if ($caption)
            {
                $table .= '<caption class="'.$classCaption.'"><h3>'.(string)$caption.'</h3></caption>';
            }
            if ((count($th)) == (count($arr[0])))
            {
                $table .= '<tr>';
                foreach ($th as $v)
                {
                    $table .= '<th class="'.$classTh.'">'.$v.'</th>';
                }
                $table .= '</tr>';
            }

            $tr = count($arr);
            for($i=0; $i<$tr; $i++)
            {
                $table .='<tr>';

                    for ($n=0; $n<count($arr[$i]); $n++)
                    {
                      $table .='<td>'.$arr[$i][$n].'</td>';
                    }

                $table .= '</tr>';
        }
        $table .= '<table>';
        return $table;
        }
        else
        {
            throw new Exception(ERR_ARR);
        }
    }


    /**
     * To bild select tag
     * @param array $opt
     * @param $selected
     * @param bool $mult
     * @return string
     */
    public static function select(array $opt, $selected, $mult=false)
    {
        if ($mult != false)
        {
            $sel = '<select multiple size="'.$mult.'">';
        }
        else
        {
            $sel = '<select>';
        }
        $countOpt= count($opt);
        for ($i=0; $i<$countOpt; $i++)
        {
            if ($i == (int)$selected)
            {
                $sel .= '<option selected value="'.$i.'">'.$opt[$i].'</option>';
            }
            else
            {
                $sel .= '<option value="'.$i.'">'.$opt[$i].'</option>';
            }
        }
        $sel .= '</select>';
        return $sel;
    }


    /**
     * To bild list ol or ul
     * @param array $li
     * @param bool $ol
     * @return string
     */
    public static function ulol(array $li, $ol=false)
    {
        $countLi = count($li);
        if ($ol)
        {
            $list = '<ol>';
            for ($i=0; $i<$countLi; $i++)
            {
                $list .= '<li>'.$li[$i].'</li>';
            }
            $list .= '</ol>';
        }
        else
        {
            $list = '<ul>';
                for ($i=0; $i<$countLi; $i++)
                {
                    $list .= '<li>'.$li[$i].'</li>';
                }
            $list .= '</ul>';
        }
        return $list;
    }

    /**
     * dl list bild
     * @param array $dl
     * @return string
     */
    public static function dldtdd(array $dl, $styleDt=false, $styleDd=false)
    {
        $list = '<dl>';
            foreach ($dl as $k=>$v)
            {
                $list .= '<dt style="'.$styleDt.'">'.$k.'</dt><dd style="'.$styleDd.'">'.$v.'</dd>';
            }
        $list .= '</dl>';
            return $list;
    }

    /**
     * bild radio and checkbox input
     * @param array $val
     * @param $name
     * @param bool $check
     * @return string
     */
    public static function inputRadioCheckbox(array $val, $name, $check=false, $valueS=false)
    {
        if ($check)
        {
            $input = '';
            foreach ($val as $k=>$v)
            {
                $input .= '<input type="checkbox" ';
                $input .='name="'.(string) $name.'" value="'.$k.'" />'.$v.'<br>';
            }
            $input .= '<input type="submit" value="'.$valueS.'">';
            return $input;
        }
        else
        {
            $input = '';
            foreach ($val as $k=>$v)
            {
                $input .= '<input type="radio" ';
                $input .='name="'.(string) $name.'" value="'.$k.'" />'.$v.'<br>';
            }
            $input .= '<input type="submit" value="'.$valueS.'">';
            return $input;
        }
    }
}
?>
