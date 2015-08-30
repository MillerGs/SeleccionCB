<div class="container">
    <br>
    <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
          <h1>Selecci&oacute;n Clicks and Bricks</h1>
            <h3>Bienvenido, este es una evaluaci&oacute;n desarrollado por Miller Gómez.</h3>
      </div>

    
    <!--CONTENIDO-->
    <div id="page-wrapper">
    <section class="row">
        <div class="col-lg-12">
            <h2 class="page-header text-left">Desarrollo de ejercicios propuestos</h2>
        </div>
        <!-- /.col-lg-12 -->
    </section>


    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 text-left">
                <div class="form-group">
                    <label >A continuaci&oacute;n seleccione uno de los ejercicios a operar :</label>
                    <select class="form-control input-sm" id="FiltroDato" name="FiltroDato" onchange="funcionFiltro();">
                        <option value="">Seleccione un ejercicio</option>
                        <option value="1"> Ejercicio 1 </option>
                        <option value="2"> Ejercicio 2 </option>
                        <option value="3"> Ejercicio 3 </option>
                        <option value="4"> Ejercicio 4 </option>
                        <option value="5"> Ejercicio 5 </option>
                        <option value="6"> Ejercicio 6 </option>
                        <option value="7"> Ejercicio 7 </option>
                    </select>
                </div>
            </div>
        </div>
    </div>

        
        
    <div class="col-md-12" id="ejercicio1" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <form action="?c=reporte&a=ReportePedidoPDF" method="POST" id="FrmPedido" target="_blank">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Fecha de Incio</label>
                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Fecha de Inicio" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de Fin</label>
                            <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="Fecha de Fin" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" class="btn btn-danger" value="Reportar PDF">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
        
        
    <div class="col-md-12" id="ejercicio2" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <form action="?c=reporte&a=ReportePedidoPDF" method="POST" id="FrmPedido" target="_blank">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Fecha de Incio</label>
                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Fecha de Inicio" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de Fin</label>
                            <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="Fecha de Fin" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" class="btn btn-danger" value="Reportar PDF">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
        
        
        <div class="col-md-12" id="ejercicio3" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <form action="?c=reporte&a=ReportePedidoPDF" method="POST" id="FrmPedido" target="_blank">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Fecha de Incio</label>
                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Fecha de Inicio" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de Fin</label>
                            <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="Fecha de Fin" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" class="btn btn-danger" value="Reportar PDF">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
        
        
        
        <div class="col-md-12" id="ejercicio4" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <form action="?c=reporte&a=ReportePedidoPDF" method="POST" id="FrmPedido" target="_blank">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Fecha de Incio</label>
                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Fecha de Inicio" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de Fin</label>
                            <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="Fecha de Fin" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" class="btn btn-danger" value="Reportar PDF">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
        
        
        <div class="col-md-12" id="ejercicio5" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <form action="?c=reporte&a=ReportePedidoPDF" method="POST" id="FrmPedido" target="_blank">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Fecha de Incio</label>
                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Fecha de Inicio" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de Fin</label>
                            <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="Fecha de Fin" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" class="btn btn-danger" value="Reportar PDF">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        
        
        <div class="col-md-12" id="ejercicio6" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <form action="?c=reporte&a=ReportePedidoPDF" method="POST" id="FrmPedido" target="_blank">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Fecha de Incio</label>
                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Fecha de Inicio" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de Fin</label>
                            <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="Fecha de Fin" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" class="btn btn-danger" value="Reportar PDF">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
        
        
        <div class="col-md-12" id="ejercicio7" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <form action="?c=reporte&a=ReportePedidoPDF" method="POST" id="FrmPedido" target="_blank">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Fecha de Incio</label>
                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Fecha de Inicio" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de Fin</label>
                            <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="Fecha de Fin" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" class="btn btn-danger" value="Reportar PDF">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- /container -->
</div>