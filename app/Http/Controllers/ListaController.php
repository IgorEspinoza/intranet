<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use hash;
use App\Models\Lista;
use App\Models\User;
use mysql;

class ListaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        /* return view('includes.panel.lista'); */

        $people = Lista::all();
        return view('includes.panel.lista', compact('people'));

        /* $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = HTTP::get($url.'/personal-andesmar?'.env('URL_API_KEY').'='.env('URL_API_VALUE'));
        $data = $response->json();
        return view('includes.panel.lista', compact('data'));
 */
    }

    public function importar(Request $request)
    {

        /* if ($request->hasFile('selArchivo')) {
            $path = $request->file('selArchivo')->getRealPath();
            $datos =  Excel::load ($path, function ($reader) {
            })->get();

            if (!empty($datos) && $datos->count()) {
                $datos = $datos->toArray();
                for ($i = 0; $i < count($datos); $i++) {
                    $datosIportados[] = $datos[$i];
                }
            }

            Lista::insert($datosIportados);
        }
        return back();
         */
        /* $conn = new mysql(env('DB_HOST'),env('DB_USERNAME'),env('DB_PASSWORD'),env('DB_DATABASE')); */ 

        /* $conn = env('DB_CONNECTION');
        // Check connection
        if ($conn-> ) {
            header("HTTP/1.1 502 Bad Gateway");
            die("Error al conectar con la Base de Datos");
        }
 
        //obtenemos el archivo .csv
        $tipo = $_FILES['archivo']['type'];
 
        $tamanio = $_FILES['archivo']['size'];
 
        $archivotmp = $_FILES['archivo']['tmp_name'];
 
        //cargamos el archivo
        $lineas = file($archivotmp);
 
        //inicializamos variable a 0, esto nos ayudará a indicarle que no lea la primera línea
        $i=0;
 
        //Recorremos el bucle para leer línea por línea
        foreach ($lineas as $linea_num => $linea)
        {
        //abrimos bucle
        /*si es diferente a 0 significa que no se encuentra en la primera línea
        (con los títulos de las columnas) y por lo tanto puede leerla
        if($i != 0)
        {
            //abrimos condición, solo entrará en la condición a partir de la segunda pasada del bucle.
            /* La funcion explode nos ayuda a delimitar los campos, por lo tanto irá
            leyendo hasta que encuentre un ; 
            $datos = explode(";",$linea);
 
            //Almacenamos los datos que vamos leyendo en una variable

            $rut=trim($datos[0]);
            $nombres=trim($datos[1]);
            $apellido=trim($datos[2]);
            $cargo=trim($datos[3]);
            echo "rut: ".$rut."<br/>";
            echo "Ape P: ".$apellido."<br/>";
            echo "cargo: ".$cargo."<br/>";
            echo "Nombres: ".$nombres;
            echo"<hr/>";
            //guardamos en base de datos la línea leida
            $sql="INSERT INTO  listas(`rut`,`nombre`,`apellido`,`cargo`) values ('$rut', '$apellido','$nombres','$cargo')";

            if ($conn->query($sql) === TRUE) {
                header("HTTP/1.1 200 OK");
                echo"Archivo cargado exitosamente!<br/>";
            } else {
                header("HTTP/1.1 400 Bad Request ");
                echo "Error al cargar el archivo:";
                echo"<br/>".$conn->error;
            } 
            //cerramos condición
        }   
  
        /*Cuando pase la primera pasada se incrementará nuestro valor y a la siguiente pasada ya
        entraremos en la condición, de esta manera conseguimos que no lea la primera línea.
        $i++;
        //cerramos bucle
 
    }
    $conn->close();*/
    }


}
