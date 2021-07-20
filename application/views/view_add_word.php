<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add Word</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        
       
         <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js<?php //echo base_url() . 'assets/js/jquery.js' ?>"></script>
       <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css<?php //echo base_url() . 'assets/css/style.css' ?>">
          <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css<?php //echo base_url() . 'assets/css/style.css' ?>">
                  
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    </head>
    <body>
       <div class="container mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-md-9">
                     <?php if (!empty($this->session->userdata('status'))) {
                        echo $this->session->flashdata('status');
                        $this->session->unset_userdata('status');
                       }
                    
                    ?>
                    <h3 class="heading mt-5 text-center headn">Add Word To Dictionary!</h3>
                    <div class="card p-4 mt-3">
                       <form class="form-horizontal" method='post' action='saveword'>
                       

                        <div class="form-group">
                            <label class="col-md-3" >Word Name</label>
                            <div class="col-md-9">
                                <input name="wordname" id="wordname" class="form-control" type="text" placeholder="Word Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3" >Word Meaning</label>
                            <div class="col-md-9">
                                <input name="wordmeaning" id="wordmeaning" class="form-control" type="text" placeholder="Word meaning" required>
                            </div>
                        </div>

                            

                       
                        <button class="btn btn-info" id="btn_add">Save</button>
                       
                        </form>
                    
                 <div class="text-center mg-text"> <span class="mg-text"><a href='search'> <button class='btn btn-primary'>Back To Search Page</button></a></span> </div>
                </div>
            </div>
     
        </div>
        

    </body>
</html>