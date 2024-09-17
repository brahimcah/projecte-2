   
     <br>
      <h2>Cites</h2>
      <?php  if ($result->num_rows > 0) { ?>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">DATA</th>
              <th scope="col">Tractament</th>
              <th scope="col">Estat</th>
              <th scope="col">Afegeix al calendari</th>
              <th scope="col">Modificar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php   while($row = $result->fetch_assoc()) {?>
            <tr>  
              <td> <?php echo $row['date_cita'] ?> </td>
              <td> <?php echo $row['tipo_cita'] ?> </td>
              <td> <?php echo $row['nom'] ?> </td>
              
              <td> <a title="Exportar a l'Outlook" href="">
										<img width="30" src="../img/microsoft_office_outlook.png" alt="Exportar a l'outlook" title="Exportar a l" class="exportarCalendariIcon">
									</a><b> - </b> <a title="Exportar en PDF" href="">
										<img width="30" src="../img/pdf.png" alt="Exportar a l'outlook" title="Exportar a l" class="exportarCalendariIcon">
									</a></td>
              <td><a title="Exportar en PDF" href="">
										<img width="25" src="../img/pen.png" alt="Exportar a l'outlook" title="Exportar a l" class="exportarCalendariIcon">
									</a></td>
              <td><a title="Exportar en PDF" href="">
										<img width="30" src="../img/bin.png" alt="Exportar a l'outlook" title="Exportar a l" class="exportarCalendariIcon">
									</a></td>
              <?php } 
              
            } else {
              //En cas de que no hi hagi cap regsitre es enviara la dades 
              echo "<h3><br> Actualment no te cap cita.</br></h3>";
            }
            $conn->close(); 
              
              ?>
            </tr>
          </tbody>
        </table>
      </div>