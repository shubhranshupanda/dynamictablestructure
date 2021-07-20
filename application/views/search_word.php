<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search Word Inside Dictionary</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        
       
        
       <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css<?php //echo base_url() . 'assets/css/style.css' ?>">
          <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
                  
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    </head>
    <body>
       <div class="container mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-md-9">
                   
                    <div class="card p-4 mt-3">
                       
                        <h3 class="heading mt-5 text-center">Search Your Favourite Word!</h3>
                        <form method="post" action="search">
                        <div class="d-flex justify-content-center px-5">
                            <div class="search"> <input type="text" class="search-input" placeholder="Search..." name="search_string" required="required"> <button  type='submit' class="search-icon"> <i class="fa fa-search"></i> </button> </div>
                        </div>
                        </form>
                        <div class="row mt-4 g-1 px-4 mb-5">
                            <div class="col-md-6">
                                 
                            </div>
                            <div class="col-md-3">
                                
                                 <div class="text-center mg-text"> <span class="mg-text"><a href='addword'> Add Word To Dictionary</a></span> </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center mg-text"> <span class="mg-text"><a href='searchlogs'> Search logs</a></span> </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
     <?php if($display == 1){?>
            <div class="row d-flex justify-content-center">
                <div class="col-md-9">
                     <div class="cards p-4 mt-3">
                          <div class="row mt-4 g-1 px-4 mb-5">
                                <div class='col-md-3'>
                                    <div class='styl'>Word</div>
                                    <div class="card-inner p-3 d-flex flex-column align-items-center"> <?php echo $result[0]; ?></div>

                                </div>
                                <div class='col-md-9'>
                                  <div class='styl'>Meaning</div>
                                     <div class="card-inner p-3 d-flex flex-column align-items-center">  <?php echo $result[1]; ?></div>

                                </div>
                          </div>
                        </div>
                     </div>
                </div>
            
     <?php }elseif($display == 2){ ?>
             <div class="row d-flex justify-content-center">
                <div class="col-md-9">
                     <div class="cardss p-4 mt-3">
                          <div class="row mt-4 g-1 px-4 mb-5">
                                <div class='col-md-12'>
                                    
                                    <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                        <div class='alert alert-danger'>Oops! Currently the word is not in our dictionary!</div>
                                    </div>

                                </div>
                               
                          </div>
                        </div>
                     </div>
                </div>
            <?php } ?>
        </div>
        

    </body>
</html>
























































