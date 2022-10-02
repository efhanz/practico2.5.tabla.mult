
<?php

function showhome1() {
    include_once "templates/header.php";
    //en el formulario se va la action y entra javascript con un "ID"
    echo '
    <form id="form-calc" method="GET" >
        <input type="number" name="numero1">
        <select name="op">
            <option value="calcular">calcular</option>
        </select>
    
        <input class="btn btn-outline-success me-2" type="submit" value="Generar tabla">
        
        <span id="resultado"></span>    
    </form>';

   include_once "templates/footer.php";
   }

function showtabla($cantidad) {
    include_once "templates/header.php";
    echo ($cantidad);
    showtable($cantidad);
    include_once "templates/footer.php";
}


function showtable($cantidad) {
    include_once "templates/header.php";

    $nummax = $cantidad;
    echo ("<table>");

    echo ("<thead>");
    for ($columna = 0; $columna <= $nummax; $columna ++) {
        echo ("<th class='highlight'> $columna");
    };
    echo ("<tbody>");
    
    for ($fila = 1; $fila <= $nummax; $fila ++) {
        echo ("<tr>");
        echo ("<th class='highlight'>$fila");
        for ($columna = 1; $columna <= $nummax; $columna ++) {
           
           if (($fila ==$columna) ) {  //($fila==1) || ($columna==0)  
            $highlight = 'class="highlight"';
               echo ("<td $highlight>");
            }
            else {
            echo ("<td>");   
        };
          
           echo ($fila*$columna);
          
           echo ("</td>");
       };
       echo ("</th>");
       echo ("</tr>");
    };
 
    include_once "templates/footer.php";

}