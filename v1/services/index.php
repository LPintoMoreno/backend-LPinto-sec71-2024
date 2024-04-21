<?php
include_once '../version1.php';

// valores de los parametros
$existeId = false;
$valorId = 0;

if (count($_parametros) > 0){
    foreach ($_parametros as $p) {
        if (strpos($p, 'id') !== false){
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if ($_version == 'v1') {
    if ($_mantenedor == 'services') {
        switch ($_metodo) {
            case 'GET':
                if ($_header == $_token_get){
                    /*include_once 'controller.php';
                    include_once '../conexion.php';
                    $control = new Controlador();
                    $lista = $control->getAll();*/
                    $lista = [
                        "data" => [
                            "servicios" => [
                                [
                                    "titulo" => ["esp" => "Consultor Digital"],
                                    "contenido" => ["esp" => "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos."]
                                ],
                                [
                                    "titulo" => ["esp" => "Soluciones multiexperiencia"],
                                    "contenido" => ["esp" => "Deleitamos a las personas usuarias con experiencias interconectadas a través de aplicaciones web, móviles, interfaces conversacionales, digital twin, IoT y AR. Su arquitectura puede adaptarse y evolucionar para adaptarse a los cambios de tu organización."]
                                ],
                                [
                                    "titulo" => ["esp" => "Evolución de ecosistemas"],
                                    "contenido" => ["esp" => "Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creamos soluciones robustas en tecnologías de vanguardia."]
                                ],
                                [
                                    "titulo" => ["esp" => "Soluciones Low-Code"],
                                    "contenido" => ["esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores."]
                                ]
                            ]
                        ]
                    ];
                    http_response_code(200);
                    echo json_encode(["data" => $lista]);
                } else {
                    http_response_code(405);
                    echo json_encode(["Error" => "No itiene autorizacion GET"]);
                }
                break;
            default:
                http_response_code(405);
                echo json_encode(["Error" => "No implementado"]);
                break;
        }
    }
}