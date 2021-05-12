<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Calcular cuantas fotos imprimes </h1>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                   <label for=""><h3>Cuanta foto se imprimran</h3></label>
                    <input type="text" id="cantidad" class="form-control">
                </div>
              </div>        
              <br>
              <hr>
              <form action="">
                <label for=""><h2>Tipo de foto</h2></label>
                  <select name="tipocolor" id="tipocolor" class="form-control">
                    <option value=""> </option>
                    <option value="color">A color </option>
                    <option value="b_y_n">A blanco y negro</option>
                  </select>
                  <br>
                  <button class="btn btn-primary" id="btnSeleccionar">Seleccionar</button>           
              </form>
              <div id="Contenido">
                <h3>Medidas de la foto </h3>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" id="Cuadro_3x4">
                  <label class="form-check-label" for="flexRadioDefault1"><h5>
                    3x4</h5>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" id="Cuadro_5x7" >
                  <label class="form-check-label" for="flexRadioDefault2"><h5>
                    5x7</h5>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" id="Cuadro_4x6">
                  <label class="form-check-label" for="flexRadioDefault1"><h5>
                    4x6</h5>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" id="Cuadro_6x8">
                  <label class="form-check-label" for="flexRadioDefault2"><h5>
                    6x8</h5>
                  </label>
                </div>
                <br>
                 <button class="btn btn-danger" id="btnCalcular" onclick="Calcular()">Calcular</button>
                                
                 <hr>
              </div>
              <div class="alert alert-success text-center" role="alert">
                <div id="Resultado"></div>
               </div>
               <div class="alert alert-success text-center" role="alert">
                <div id="Resultado2"></div>
               </div>
               <div class="alert alert-success text-center" role="alert">
                <div id="Resultado3"></div>
               </div>
               <div class="alert alert-success text-center" role="alert">
                <div id="Resultado4"></div>
               </div>
               <div class="alert alert-success text-center" role="alert">
                <div id="Resultado5"></div>
               </div>
               <div class="alert alert-success text-center" role="alert">
                <div id="Resultado6"></div>
               </div>
               <div class="alert alert-success text-center" role="alert">
                <div id="Resultado"></div>
               </div>
            </div>
          </div>
       </div>   
    </div> 

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
            $(document).ready(function(){
                $('#Contenido').hide();
                $('#btnSeleccionar').click(function(){
                      $('#Contenido').show();
                      $('#Cuadro_3x4').val("");
                      $('#Cuadro_5x7').val("");
                      $('#Cuadro_4x6').val("");
                      $('#Cuadro_6x8').val("");
                      $('#Resultado').text("");
                      let tipocolor = $('#tipocolor').val();
                      
                      return false;
                });
            });
            function Calcular() {
                let tipocolor = $('#tipocolor').val();
                let resultado = 0;
                let resultado1 = 0;
                let resultado2 = 0;
                let resultado3 = 0;
                let resultado4 = 0;
                let resultado5 = 0;
                let resultado6= 0;
                let resultado7= 0;
                let color_3x4=5.50;
                let color_4x6=6.20;
                let color_5x7=7.50;
                let color_6x8=9.00; 
                let color_byn_3x4=4.00;
                let color_byn_4x6=5.20;
                let color_byn_5x7=6.00;
                let color_byn_6x8=7.90;  
                
                let cantidad = parseFloat($('#cantidad').val());
                
                resultado  =cantidad * color_3x4;
                resultado1 =cantidad *  color_4x6;
                resultado2 =cantidad * color_5x7;
                resultado3 =cantidad * color_6x8;
                resultado4 = cantidad * color_byn_3x4;
                resultado5 = cantidad * color_byn_4x6;
                resultado6 = cantidad * color_byn_5x7;
                resultado7 = cantidad * color_byn_6x8;
                

                
                $('#Resultado').text(`Usted imprimio a ${tipocolor} y total a pagar ${resultado.toFixed(2)} pesos`);
                $$('#Contenido').hide();
            }
            

            
        </script>
  </body>
</html>