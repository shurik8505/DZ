<?php

abstract class Buildings
{
    public function favorite()
    {

        echo "This my " . strtolower(get_class($this)) . PHP_EOL;

    }
}
class Dom_v_sele extends Buildings {

}
class Dom_v_gorode extends Buildings{


}



$a = new Dom_v_sele();
$b = new Dom_v_gorode();

echo $a->favorite();
echo $b->favorite();
