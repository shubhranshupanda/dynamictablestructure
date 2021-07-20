<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student List</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        
       
         <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js<?php //echo base_url() . 'assets/js/jquery.js' ?>"></script>
         <script type="text/javascript" src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"<?php //echo base_url() . 'assets/js/jquery.js' ?>"></script>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css<?php //echo base_url() . 'assets/css/style.css' ?>">
          <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css<?php //echo base_url() . 'assets/css/style.css' ?>">
    </head>
    <body>
       <div class="container mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-md-9">
                    <h3 class="heading mt-5 text-center headn">Dictionary Search Logs!</h3>
                    <div class="card p-4 mt-3">
                         
                       <div class="table-responsive text-nowrap">
                            <!--Table-->
                            <table class="table table-striped">

                              <!--Table head-->
                              <thead>
                                <tr>
                                  <th>#Sl No</th>
                                  <th>UserIP</th>
                                  <th>Search Word</th>
                                  <th>Time Stamp</th>
                                </tr>
                              </thead>
                              <!--Table head-->
                              <!--Table body-->     
                              <tbody>
                                <?php foreach($result as $val){?>
                                <tr>
                                  <th scope="row"><?php echo $val->th_id;?></th>
                                  <td><?php echo $val->th_userIP;?></td>
                                  <td><?php echo $val->th_keyword;?></td>
                                  <td><?php echo $val->th_timestamp;?></td>
                                </tr>
                                <?php } ?>
                              </tbody>
                              <!--Table body-->
                            </table>
                            
                            <!--Table-->
                          </div>
                        <div class="text-center mg-text"> <span class="mg-text"><a href='search'> <button class='btn btn-primary'>Back To Search Page</button></a></span> </div>
                    </div>
                </div>
            </div>
     
        </div>
    </body>
</html>




