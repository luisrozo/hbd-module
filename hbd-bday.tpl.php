<p class="date">
        <?php 
            $bday = new DateTime($date["year"]."-".$date["month"]."-".$date["day"]);
            $today = new DateTime($date["year"]."-".date("m-d"));
        
            echo "<center>";
            if($bday == $today) {
                
                $today = new DateTime(date("Y-m-d"));
                $edad = date_diff($today, $bday)->format("%y");
                
                echo "<h2 style=\"background-color:DodgerBlue;\">¡Feliz cumpleaños!</h2> <h3 style=\"color:DodgerBlue\">Ya son <b>".$edad."</b>, ¿eh? ;)</h3>";
                
            } else {
                
                $date["year"] = $date["year"] - 1;
                $today = new DateTime($date["year"]."-".date("m-d"));
                $diff = date_diff($today, $bday);
                
                
                if($diff->format("%m") == 0) {
                    if($diff->format("%d") == 1) {
                        echo "<h3 style=\"color:DodgerBlue\">Queda <b>".$diff->format("%d")." día</b> para tu cumpleaños.</h3>";
                    } else {
                        echo "<h3 style=\"color:DodgerBlue\">Quedan <b>".$diff->format("%d")." días</b> para tu cumpleaños.</h3>";
                    }
                } elseif($diff->format("%m") == 1) {
                    if($diff->format("%d") == 0) {
                        echo "<h3 style=\"color:DodgerBlue\">Queda <b>".$diff->format("%m")." mes</b> para tu cumpleaños.</h3>";
                    } elseif($diff->format("%d") == 1) {
                        echo "<h3 style=\"color:DodgerBlue\">Queda <b>".$diff->format("%m")." mes</b> y <b>".$diff->format("%d")." día</b> para tu cumpleaños.</h3>";
                    } else {
                        echo "<h3 style=\"color:DodgerBlue\">Queda <b>".$diff->format("%m")." mes</b> y <b>".$diff->format("%d")." días</b> para tu cumpleaños.</h3>";
                    }
                } else {
                    if($diff->format("%d") == 0) {
                        echo "<h3 style=\"color:DodgerBlue\">Quedan <b>".$diff->format("%m")." meses</b> para tu cumpleaños.</h3>";
                    } elseif($diff->format("%d") == 1) {
                        echo "<h3 style=\"color:DodgerBlue\">Quedan <b>".$diff->format("%m")." meses</b> y <b>".$diff->format("%d")." día</b> para tu cumpleaños.</h3>";
                    } else {
                        echo "<h3 style=\"color:DodgerBlue\">Quedan <b>".$diff->format("%m")." meses</b> y <b>".$diff->format("%d")." días</b> para tu cumpleaños.</h3>";
                    }
                }
                
            }
            echo "</center>";
        ?>
</p>