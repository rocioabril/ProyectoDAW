
<!--Estilo valoración-->
<style>
#form {
    display: block;
    width: 250px;
    margin: 0 auto;
    height: 50px;
    border: 1px solid #d9d9d9;
  }
  
  #form p {
    display: block;
    text-align: center;
    font-size: 20px;
  }
  
  #form label {
    font-size: 20px;
  }

  .title-valorar{
    display: block;
    text-align: center;
    font-size: 20px;
  }
  
  input[type="radio"] {
    display: none;
  }
  
  label {
    color: grey;
  }
  
  .clasificacion {
    direction: rtl;
    unicode-bidi: bidi-override;
  }
  
  label:hover,
  label:hover ~ label {
    color: orange;
  }
  
  input[type="radio"]:checked ~ label {
    color: orange;
  }
    </style>
    <!--FIN Estilo valoración-->


<!-- Modal Valoracion -->
<div id="modalValoracion" class="modal fade" data-bs-backdrop="static" tabindex="-1">
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Valorar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      <div class="modal-body">
        <!-- Estrellas -->
        <form id="form">
        <p class="clasificacion">
        <input id="radio1" type="radio" name="estrellas" value="5"><!--
        --><label for="radio1">★</label><!--
        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
        --><label for="radio2">★</label><!--
        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
        --><label for="radio3">★</label><!--
        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
        --><label for="radio4">★</label><!--
        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
        --><label for="radio5">★</label>
        </p>
        </form>
      <!-- Fin Estrellas -->
        <p>Comentario:</p>
        <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar valoración</button>
            </div>
        </div>
    </div>
</div>

<!-- Fin Modal Valoracion -->