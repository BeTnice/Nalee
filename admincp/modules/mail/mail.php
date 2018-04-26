<h3 class="page-header">Mail</h3>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mail</th>
      
        <th></th>
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from mail ";
                                  $run = mysql_query($sql);
                             
                            $i = 0;
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr>
      
        <td><?php echo $i++ ?></td>
        <td><?php echo $ds['mail'] ?></td>
   

        
        <td class="noExl"><?php if($_SESSION["level"] ==1){ ?><a href="modules/mail/function.php?id=<?php echo $ds['id_mail'] ?>"><button name="" class="form-control btn-primary">Xóa</button></a><?php } ?></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>
  <button class="btn btn-primary export">Export</button>

  <script>
    $(".export").click(function(){

  $(".table").table2excel({
          exclude: ".noExl",
          name: "Excel Document Name",
          filename: "Mail",
          fileext: ".xls",
          exclude_img: true,
          exclude_links: true,
          exclude_inputs: true
        });

});

  </script>