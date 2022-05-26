<?php

namespace App\Http\Controllers\Template;

use Illuminate\Http\Request;
use TIGIrapuato\LaraSUU\Session\SUUSession; 

class MainController extends Controller
{
    public function tramite_index()
    {

        $data = [
            'title' => 'Titulo',
            'descripcion' => 'Descripcion',
            'keywords' => 'palabras clave',
            //tramite ejemplo
            'tramite' => 'Tramite Y',
            'costos' => '$ 100 mx',
            'canal_de_atencion' => 'Canal de atencion',
            // Clave Trámite
            'clave_tramite' => 'TM/DC/033',
            // Dependencia Tesorería Municipal
            'dependencia' => 'Dependencia Tesorería Municipal',
            //Categoría
            'categoria' => 'Ordenamiento Territorial, Desarrollo Urbano',
            // Fecha actualización
            'fecha_actualizacion' => '19-05-2024',
            'tramites_relacionados' => [
                [
                    'descripcion' => 'Avalúo de predios rústicos sin levantamiento sin construcción',
                    'imagen' => 'http://plantillalocal.irapuato.gob.mx/images/banner/banner-27.jpg',
                ],
                [
                    'descripcion' => 'Permiso de Construcción( Colocación de Estructura Anuncios)',
                    'imagen' => 'http://plantillalocal.irapuato.gob.mx/images/banner/banner-27.jpg',
                ],
                [
                    'descripcion' => 'Permiso de construcción (bardeo)    ',
                    'imagen' => 'http://plantillalocal.irapuato.gob.mx/images/banner/banner-27.jpg',
                ],
                [
                    'descripcion' => 'Permiso de Construcción (Obra nueva)',
                    'imagen' => 'http://plantillalocal.irapuato.gob.mx/images/banner/banner-27.jpg',
                ],
                [
                    'descripcion' => 'Ventanilla de Construcción Simplificada hasta 1600 m2',
                    'imagen' => 'http://plantillalocal.irapuato.gob.mx/images/banner/banner-27.jpg',
                ],
            ],
            'categorias' => [
                'Empresariales',
                'Educación',
                'Previsión Social',
                'Contrucción',
                'Medio Ambiente',
            ],




        ];
        return view('templates/inicio_tramite')->with($data);
    }

    public function index()
    {
        return view('templates/inicio',
                    ["user_email"=>SUUSession::getEmail(),
                     "suu_id"=>SUUSession::getSUUId()]
        );
    }
}
