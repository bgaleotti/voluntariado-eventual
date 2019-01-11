<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Actividad::class, function (Faker $faker) {

      $fecha = Carbon::parse(now())->addDays(5);
      $fecha_fin = $fecha->copy()->addMinute();

      $persona = factory(\App\Persona::class)->create();

    return [
      'idTipo' => factory(\App\Tipo::class)->create()->idTipo,
      'fechaCreacion' => $fecha->format('Y-m-d H:i:s'),
      'fechaModificacion' => $fecha->format('Y-m-d H:i:s'),
      'fechaInicio' => $fecha->format('Y-m-d H:i:s'),
      'fechaFin' => $fecha_fin->format('Y-m-d H:i:s'),
      'fechaInicioFinFormato' => null,
      'fechaInicioInscripciones' => $fecha->copy()->subDays(10)->format('Y-m-d H:i:s'),
      'fechaFinInscripciones' => $fecha->copy()->subMinute()->format('Y-m-d H:i:s'),
      'limiteInscripciones' => "0",
      'idUnidadOrganizacional' => 1,
      'idOficina' => factory(\App\Oficina::class)->create()->id,
      'nombreActividad' => $faker->sentence(2,true),
      'descripcion' => $faker->paragraph,
      'lugar' => $faker->city,
      'casasPlanificadas' => "0",
      'casasConstruidas' => "0",
      'comentarios' => "",
      'tipoConstruccion' => "",
      'estadoConstruccion' => "Abierta",
      'idPrograma' => null,
      'mensajeInscripcion' => $faker->paragraph,
      'idEncuestaDinamica' => 0,
      'numConstruccion' => null,
      'pApMat' => 1,
      'pDNI' => 1,
      'pFonoMovil' => 1,
      'pUniversidad' => 1,
      'pCarrera' => 1,
      'pAnoEstudio' => 1,
      'pAcompanante' => 0,
      'tPortugues' => 0,
      'enviarMail' => 1,
      'actividadSecundaria' => 1,
      'compromiso' => 1,
      'idListaCTCT' => "",
      'mostrarFB' => 0,
      'presupuesto' => null,
      'inscripcion' => null,
      'inscripcionInterna' => 0,
      'idPersonaCreacion' => $persona->idPersona,
      'idPersonaModificacion' => 1,
      'idEmpresa' => null,
      'costo' => null,
      'moneda' => "ARS",
      'estadoDefault' => null,
      'puntosEnvio' => null,
      'captaciones' => null,
      'pAcompanantePost' => null,
      'mailBeca' => null,
      'idFormulario' => null,
      'fechaInicioEvaluaciones' => $fecha_fin->copy()->addMinute()->format('Y-m-d H:i:s'),
      'fechaFinEvaluaciones' => $fecha_fin->copy()->addDays(10)->format('Y-m-d H:i:s'),
      'idAsentamiento' => null,
      'idZona' => null,
      'linkFormularioEvaluacion' => null,
      'statusMailSeguimiento' => null,
      'mailSeguimiento' => null,
      'destacada' => null,
      'EnviarMailPago' => null,
      'MailPago' => null,
      'CostoConMoneda' => null,
      'LinkPago' => null,
      'PuntosEnvioUL' => null,
      'CaptacionesUL' => null,
      'idPais' => factory(\App\Pais::class)->create()->id,
      'idProvincia' => factory(\App\Provincia::class)->create()->id,
      'idLocalidad' => factory(\App\Localidad::class)->create()->id,
      'idCoordinador' => $persona->idPersona,
      'beca' => null,
      'montoMin' => "100.00",
      'montoMax' => "0.00"
        //
    ];
});
