<?php
    class groupForm1{
        function banyakForm1($type,$name,$isi, $class,$id)
        {
            return "<input type='$type' name='$name' class='$class' placeholder='$isi' id='$id' required>";
        }
    }
?>
