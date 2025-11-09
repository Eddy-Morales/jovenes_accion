<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acta de Inspección - ANT</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../js/script.js"></script>
</head>

<body class="bg-gradient-to-br from-green-100 via-blue-100 to-slate-100 text-gray-900">
  <div class="mx-auto my-8 max-w-5xl rounded-lg border border-gray-300 bg-white p-8 shadow-lg">

    <!-- Encabezado -->
    <div class="mb-6 border-b pb-4 text-center">
      <img src="img/logo.png" alt="ANT" class="mx-auto mb-3 h-14" />
      <h1 class="text-lg font-bold uppercase">Acta de Inspección para Escuelas de Capacitación para Conductores No Profesionales</h1>
      <p class="mt-2 text-sm font-semibold">Formato de inspección Nro. 1</p>
      <h2 class="mb-3  pb-1 text-md font-bold uppercase">Instalaciones</h2>
    </div>

    <!-- FORMULARIO ÚNICO -->
    <form action="/AplicativoANT/save.php?next=/AplicativoANT/generar_word.php" method="post" class="space-y-6 rounded-md" id="form_instalaciones">

      <!-- AULAS -->
      <section>
        <h2 class="mb-3 border-b pb-1 text-md font-bold uppercase">Aulas</h2>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <label class="font-semibold">Tipo de licencia</label>
            <div class="flex gap-6">
              <label class="inline-flex items-center">
                <input type="checkbox" name="cursos[]" value="A" class="mr-2" />
                A
              </label>

              <label class="inline-flex items-center">
                <input type="checkbox" name="cursos[]" value="B" class="mr-2" />
                B
              </label>

              <label class="inline-flex items-center">
                <input type="checkbox" name="cursos[]" value="Puntos" class="mr-2" />
                Recuperacón de puntos
              </label>

            </div>
          </div>

          <div>
            <label class="font-semibold">Cantidad de aulas verificadas</label>
            <input type="number" name="aulas_cantidad_verificadas" class="w-full rounded border p-2" />
          </div>

          <div>
            <label class="font-semibold">Capacidad que tienen las aulas</label>
            <input type="number" name="aulas_capacidad" class="w-full rounded border p-2" />
          </div>

          <div>
            <span class="mb-1 block font-semibold">Equipo didáctico</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="equipo_didactico" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="equipo_didactico" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Equipo tecnológico (TV o proyector)</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="equipo_tecnologico" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="equipo_tecnologico" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Materiales didácticos o señalización</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="material_didactico" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="material_didactico" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Cuenta con mobiliario adecuado (pupitres, pizarrón, etc.)</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="aulas_mobiliario_adecuado" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="aulas_mobiliario_adecuado" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Mobiliario docente — Estación de trabajo</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="mobiliario_docente" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="mobiliario_docente" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Mobiliario docente — Computador para el docente</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="docente_computador" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="docente_computador" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div>
            <label class="font-semibold">Número de aulas autorizadas (en resolución ANT)</label>
            <input type="number" name="aulas_num_autorizadas" class="w-full rounded border p-2" />
          </div>

          <div>
            <label class="font-semibold">Número de resolución donde se autorizan las aulas </label>
            <input type="text" name="aulas_num_resolucion" class="w-full rounded border p-2" />
          </div>

          <div>
            <span class="mb-1 block font-semibold">Acceso para personas con discapacidad</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="aulas_acceso_discapacidad" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="aulas_acceso_discapacidad" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div class="md:col-span-2">
            <label class="font-semibold">Observaciones de las aulas inspeccionadas</label>
            <textarea name="aulas_observaciones" rows="3" class="w-full rounded border p-2"></textarea>
          </div>
        </div>
      </section>

      <!-- AULA TALLER -->
      <section>
        <h2 class="mb-3 border-b pb-1 text-md font-bold uppercase">Aula Taller</h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <span class="mb-1 block font-semibold">¿Está dentro de la escuela?</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="taller_dentro_escuela" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="taller_dentro_escuela" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Cuenta con recursos prácticos para capacitación mecánica</span>
            <label class="inline-flex items-center mr-6">
              <input type="radio" name="taller_recursos_mecanica" value="SI" class="mr-2" /> Sí
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="taller_recursos_mecanica" value="NO" class="mr-2" /> No
            </label>
          </div>

          <div class="md:col-span-2">
            <label class="font-semibold">Detalle de materiales para capacitación mecánica</label>
            <textarea name="taller_detalle_materiales" rows="3" class="w-full rounded border p-2"></textarea>
          </div>

          <div class="md:col-span-2">
            <label class="font-semibold">Observaciones del aula taller</label>
            <textarea name="taller_observaciones" rows="3" class="w-full rounded border p-2"></textarea>
          </div>
        </div>
      </section>

      <!-- ÁREA ADMINISTRATIVA -->
      <section>
        <h2 class="mb-3 border-b pb-1 text-md font-bold uppercase">Área Administrativa</h2>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <!-- SI / NO items -->
          <div>
            <span class="mb-1 block font-semibold">Dirección general</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_direccion_general" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_direccion_general" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Secretaría académica</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_secretaria_academica" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_secretaria_academica" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Información</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_informacion" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_informacion" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Sala de espera / recepción</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_sala_espera_recepcion" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_sala_espera_recepcion" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Archivo</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_archivo" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_archivo" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Supervisión / inspección</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_supervision_inspeccion" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_supervision_inspeccion" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Contabilidad / tesorería</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_contabilidad_tesoreria" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_contabilidad_tesoreria" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Asesoría técnica en educación y seguridad vial</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_educacion_seguridad_vial" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_educacion_seguridad_vial" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Accesos para personas con discapacidad</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="adm_accesos_discapacidad" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="adm_accesos_discapacidad" value="NO" class="mr-2" />No</label>
          </div>

          <div class="md:col-span-2">
            <label class="font-semibold">Observaciones del área administrativa</label>
            <textarea name="adm_observaciones" rows="3" class="w-full rounded border p-2"></textarea>
          </div>
        </div>
      </section>

      <!-- PRÁCTICA DE CONDUCCIÓN LICENCIA TIPO B -->
      <section>
        <h2 class="mb-3 border-b pb-1 text-md font-bold uppercase">Práctica de Conducción — Licencia Tipo B</h2>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <span class="mb-1 block font-semibold">¿Tiene parque vial?</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="parque_vial" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="parque_vial" value="NO" class="mr-2" />No</label>
          </div>

          <div class="md:col-span-2">
            <label class="font-semibold">Dirección donde está ubicado el parque vial</label>
            <input type="text" name="ubicacion_pvial" class="w-full rounded border p-2" />
          </div>

          <div>
            <span class="mb-1 block font-semibold">¿Tiene circuito vial autorizado por el GAD?</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="pv_circuito_gad" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="pv_circuito_gad" value="NO" class="mr-2" />No</label>
          </div>

          <div>
            <label class="font-semibold">Número de autorización</label>
            <input type="text" name="pv_num_autorizacion" class="w-full rounded border p-2" />
          </div>

          <div>
            <label class="font-semibold">Nombre de la institución que emite</label>
            <input type="text" name="pv_institucion_emite" class="w-full rounded border p-2" />
          </div>

          <div>
            <label class="font-semibold">Fecha de vigencia de la autorización</label>
            <input type="date" name="pv_fecha_vigencia" class="w-full rounded border p-2" />
          </div>


          <div class="md:col-span-2">
            <span class="mb-1 block font-semibold">¿Cuenta con señalización horizontal y vertical?</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="pv_senalizacion_hv" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="pv_senalizacion_hv" value="NO" class="mr-2" />No</label>
          </div>

          <div class="md:col-span-2">
            <label class="font-semibold">Observaciones de prácticas de conducción</label>
            <textarea name="pv_observaciones" rows="3" class="w-full rounded border p-2"></textarea>
          </div>
        </div>
      </section>

      <!-- BATERÍAS SANITARIAS Y PARQUEADERO -->
      <section>
        <h2 class="mb-3 border-b pb-1 text-md font-bold uppercase">Baterías Sanitarias y Parqueadero</h2>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <label class="font-semibold">Número de baterías destinado a mujeres</label>
            <input type="number" name="bs_num_mujeres" class="w-full rounded border p-2" />
          </div>

          <div>
            <label class="font-semibold">Número de baterías destinado a hombres</label>
            <input type="number" name="bs_num_hombres" class="w-full rounded border p-2" />
          </div>
        </div>

        <div class="mt-2">
          <span class="mb-2 block font-semibold">Implementos</span>
          <div class="grid grid-cols-1 gap-2 md:grid-cols-3">
            <label class="inline-flex items-center"><input type="checkbox" name="imp_jabon" class="mr-2" />Jabón</label>
            <label class="inline-flex items-center"><input type="checkbox" name="imp_alcohol" class="mr-2" />Alcohol</label>
            <label class="inline-flex items-center"><input type="checkbox" name="imp_papel_higienico" class="mr-2" />Papel higiénico</label>
            <label class="inline-flex items-center"><input type="checkbox" name="imp_basurero_tapa" class="mr-2" />Basurero con tapa</label>
            <label class="inline-flex items-center"><input type="checkbox" name="imp_toallas_desechables" class="mr-2" />Toallas desechables</label>
            <label class="inline-flex items-center"><input type="checkbox" name="imp_senalizacion" class="mr-2" />Señalización</label>
          </div>
        </div>

        <div class="mt-2">
          <span class="mb-1 block font-semibold">¿Los baños están adecuados para personas con discapacidad?</span>
          <label class="inline-flex items-center mr-6"><input type="radio" name="bs_banos_discapacidad" value="SI" class="mr-2" />Sí</label>
          <label class="inline-flex items-center"><input type="radio" name="bs_banos_discapacidad" value="NO" class="mr-2" />No</label>
        </div>

        <div class="mt-2">
          <label class="font-semibold">Observaciones de las baterías sanitarias</label>
          <textarea name="bs_observaciones" rows="3" class="w-full rounded border p-2"></textarea>
        </div>

        <div class="mt-4 border-t pt-4">
          <h3 class="mb-2 text-md font-semibold">Parqueadero</h3>

          <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
              <label class="font-semibold">Número de estacionamientos de vehículos de instrucción práctica</label>
              <input type="number" name="pq_num_estacionamientos_instruccion" class="w-full rounded border p-2" />
            </div>
            <div>
              <label class="font-semibold">Número de estacionamientos de usuarios/personal de la escuela</label>
              <input type="number" name="pq_num_estacionamientos_usuarios" class="w-full rounded border p-2" />
            </div>
          </div>

          <div class="mt-2">
            <span class="mb-1 block font-semibold">¿Parquea en zona pública?</span>
            <label class="inline-flex items-center mr-6"><input type="radio" name="pq_zona_publica" value="SI" class="mr-2" />Sí</label>
            <label class="inline-flex items-center"><input type="radio" name="pq_zona_publica" value="NO" class="mr-2" />No</label>
          </div>

          <div class="mt-2">
            <label class="font-semibold">Observaciones de los parqueaderos</label>
            <textarea name="pq_observaciones" rows="3" class="w-full rounded border p-2"></textarea>
          </div>
        </div>
      </section>

      <!-- SEGURIDADES -->
      <section>
        <div class="md:col-span-2">
          <label class="font-semibold">Fecha de inspección</label>
          <input type="date" name="fecha_inspeccion" class="w-full rounded border p-2 md:w-1/3" />
        </div>
        <p class="mt-2 text-sm italic text-gray-600">Nota: La información que consta en las actas debe tener el sustento correspondiente.</p>
      </section>

      <!-- Botones de acción -->
      <div class="flex justify-between items-center pt-6">
        <!-- Botón Volver -->
        <button type="button"
          onclick="window.location.href='../no-profesionales/Info_general.php'"
          class="inline-flex items-center gap-2 rounded-md border border-gray-300 bg-white px-5 py-2.5 text-gray-700 shadow-sm transition hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
          Volver
        </button>

        <!-- Botón Generar Word -->
        <button type="submit"
          class="inline-flex items-center gap-2 rounded-md bg-blue-600 px-5 py-2.5 text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
          Generar Word
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <!-- Icono de “documento con flecha de descarga” -->
            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z" />
            <path d="M14 3.5V9h5.5" fill="white" opacity=".25" />
            <path d="M12 11v5m0 0l-2.5-2.5M12 16l2.5-2.5" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>



  </div>
  </form>
  </div>
</body>

</html>