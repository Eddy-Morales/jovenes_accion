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
    </div>

    <!-- FORMULARIO -->
    <form action="/AplicativoANT/save.php?next=/AplicativoANT/no-profesionales/Infraestructura.php" method="post" class="space-y-6 rounded-md" id="form_infogeneral">
      <!-- Identificación Institucional -->
      <section>
        <h2 class="mb-3 border-b pb-1 text-md font-bold uppercase">Identificación Institucional</h2>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <label for="escuela_nombre" class="font-semibold ">Nombre de la Escuela:</label>
            <input type="text" id="escuela_nombre" name="escuela_nombre" class="w-full rounded border p-2 " required />
          </div>

          <div>
            <label for="director_nombre" class="font-semibold">Nombre del Director General Administrativo:</label>
            <input type="text" id="director_nombre" name="director_nombre" class=" w-full rounded border p-2" required />
          </div>

          <div>
            <label for="provincia" class="font-semibold">Provincia:</label>
            <input type="text" id="provincia" name="provincia" class="w-full rounded border p-2" required />
          </div>

          <div>
            <label for="canton" class="font-semibold">Cantón:</label>
            <input type="text" id="canton" name="canton" class="w-full rounded border p-2" required />
          </div>

          <div class="md:col-span-2">
            <label for="direccion_insitu" class="font-semibold">Dirección de la Inspección In Situ:</label>
            <input type="text" id="direccion_insitu" name="direccion_insitu" class="w-full rounded border p-2" required />
          </div>

          <div>
            <label for="ruc" class="font-semibold">Número de RUC:</label>
            <input type="text" id="ruc" name="ruc" class="w-full rounded border p-2" />
          </div>

          <div>
            <label for="telefono" class="font-semibold">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="w-full rounded border p-2" />
          </div>

          <div>
            <label for="email" class="font-semibold">Correo Electrónico:</label>
            <input type="email" id="email" name="email" class="w-full rounded border p-2" />
          </div>

          <div class="md:col-span-2">
            <label for="resolucion_nro" class="font-semibold">Nro. de Resolución de Funcionamiento:</label>
            <input type="text" id="resolucion_nro" name="resolucion_nro" class="w-full rounded border p-2" />
          </div>
        </div>
      </section>

      <!-- Tipo de cursos -->
      <section>
        <h2 class="mb-3 border-b pb-1 text-md font-bold uppercase">Tipo de Cursos a Capacitar</h2>

        <div class="flex gap-6">
          <label class="inline-flex items-center">
            <input type="checkbox" name="cursos[]" value="A" class="mr-2" />
            A
          </label>

          <label class="inline-flex items-center">
            <input type="checkbox" name="cursos[]" value="B" class="mr-2" />
            B
          </label>
        </div>
      </section>

      <!-- Recuperación de puntos / Actualización -->
      <section>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <span class="mb-1 block font-semibold">Imparte clases de recuperación de puntos:</span>
            <div class="flex gap-6">
              <label class="inline-flex items-center">
                <input type="radio" name="recuperacion" value="SI" class="mr-2" required />
                Sí
              </label>
              <label class="inline-flex items-center">
                <input type="radio" name="recuperacion" value="NO" class="mr-2" />
                No
              </label>
            </div>
          </div>

          <div>
            <span class="mb-1 block font-semibold">Ha realizado proceso de actualización de conocimientos (último año):</span>
            <div class="flex gap-6">
              <label class="inline-flex items-center">
                <input type="radio" name="actualizacion" value="SI" class="mr-2" required />
                Sí
              </label>
              <label class="inline-flex items-center">
                <input type="radio" name="actualizacion" value="NO" class="mr-2" />
                No
              </label>
            </div>
          </div>
        </div>
      </section>

      <!-- Instalaciones -->
      <section>
        <h2 class="mt-6 mb-3 border-b pb-1 text-md font-bold uppercase">Instalaciones</h2>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <span class="mb-2 block font-semibold">Tipo de tenencia</span>

            <label class="mb-1 block">
              <input type="checkbox" name="instalacion[]" value="PROPIAS" class="mr-2" />
              Propias
            </label>

            <label class="mb-1 block">
              <input type="checkbox" name="instalacion[]" value="ALQUILADAS" class="mr-2" />
              Alquiladas
            </label>

            <label class="mb-1 block">
              <input type="checkbox" name="instalacion[]" value="COMODATO" class="mr-2" />
              Comodato
            </label>
          </div>

          <div>
            <label for="vigencia_alquiler" class="mb-1 block font-semibold">Alquilada - Vigencia de contrato:</label>
            <input type="text" id="vigencia_alquiler" name="vigencia_alquiler" class="w-full rounded border p-2" />

            <label for="vigencia_comodato" class="mb-1 mt-3 block font-semibold">Comodato - Vigencia de comodato:</label>
            <input type="text" id="vigencia_comodato" name="vigencia_comodato" class="w-full rounded border p-2" />
          </div>
        </div>
      </section>

      <!-- Documentos habilitantes -->
      <section>
        <h2 class="mt-6 mb-3 border-b pb-1 text-md font-bold uppercase">Documentos Habilitantes</h2>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <label for="gerente_nombre" class="font-semibold">Nombre del Gerente o Representante Legal:</label>
            <input type="text" id="gerente_nombre" name="gerente_nombre" class="w-full rounded border p-2" />
          </div>

          <div>
            <label for="nombramiento_nro" class="font-semibold">Nro. documento de nombramiento:</label>
            <input type="text" id="nombramiento_nro" name="nombramiento_nro" class="w-full rounded border p-2" />
          </div>

          <div>
            <label for="impuesto_predial" class="font-semibold">Impuesto Predial - Nro. y fecha de vigencia:</label>
            <input type="text" id="impuesto_predial" name="impuesto_predial" class="w-full rounded border p-2" />
          </div>

          <div>
            <label for="patente_municipal" class="font-semibold">Patente Municipal - Nro. y fecha de vigencia:</label>
            <input type="text" id="patente_municipal" name="patente_municipal" class="w-full rounded border p-2" />
          </div>
        </div>
      </section>

      <!-- Observaciones -->
      <section>
        <label for="observaciones" class="font-semibold">Observaciones Generales:</label>
        <textarea id="observaciones" name="observaciones" rows="4" class="w-full rounded border p-2"></textarea>
      </section>

      <!-- Identificación de Responsabilidad -->
      <section>
        <h2 class="mt-6 mb-3 border-b pb-1 text-md font-bold uppercase">Identificación de Responsabilidad de la Inspección</h2>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div>
            <label for="responsable_escuela" class="font-semibold">Responsable de la escuela</label>
            <input type="text" id="responsable_escuela" name="responsable_escuela" class="mb-2 w-full rounded border p-2" />

            <label for="responsable_nombre" class="font-semibold">Nombre del inspector</label>
            <input type="text" id="responsable_nombre" name="responsable_nombre" class="mb-2 w-full rounded border p-2" />

            <label for="fecha_inspeccion" class="font-semibold">Fecha de Inspección</label>
            <input type="date" id="fecha_inspeccion" name="fecha_inspeccion" class="mb-2 w-full rounded border p-2" />

            <label for="responsable_ci" class="font-semibold">C.I.</label>
            <input type="text" id="responsable_ci" name="responsable_ci" class="mb-2 w-full rounded border p-2" />

            <label for="responsable_cargo" class="font-semibold">Cargo</label>
            <input type="text" id="responsable_cargo" name="responsable_cargo" class="mb-2 w-full rounded border p-2" />
          </div>
        </div>
      </section>

      <!-- Botón enviar -->
      <div class="pt-4">
        <button type="submit"
          class="inline-flex items-center gap-2 rounded bg-green-600 px-4 py-2 text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400">
          Siguiente
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>


      <p class="mt-4 text-sm italic text-gray-600">Nota: La información que consta en las actas debe tener el sustento correspondiente.</p>
    </form>
  </div>
</body>

</html>