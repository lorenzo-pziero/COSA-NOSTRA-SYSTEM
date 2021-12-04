<?php

$hierarquia = array(

    array(
        'nome_cargo'=>'BOSS',
        'subordinados'=>array(
            //Inicio: Consigliere
            array(
                'nome_cargo'=>'Consigliere')
                    //Termino: Consigliere    
                )
            ),
            //Inicio: UNDERBOSS
            array(
                'nome_cargo'=>'UNDERBOSS',
                'subordinados'=>array(
                    //Inicio: 'Caporegimes'
                    array(
                        'nome_cargo'=>'Caporegimes',
                        'subordinados'=>array(
                            //Inicio: Soldiers
                            array(
                                'nome_cargo'=>'Soldiers'
                            )
                            //Termino: Soldiers
                        )
                    ),
                    //Termino: Caporegimes
                    //Inicio: Associates
                    array(
                        'nome_cargo'=>'Associates',
                         )
                         //Termino: Associates
                        )

                    )
                     //Termino: UNDERBOSS
        );
                 

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo[ 'nome_cargo' ];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;

}

echo "<strong>COSA NOSTRA SYSTEM</strong>";

echo exibe($hierarquia);

?>


