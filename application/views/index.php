
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TULASSI TECHNOLOGY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <style>
            .fakeimg {
                height: 200px;
                background: #aaa;
            }
        </style>
    </head>
    <body>

        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>TULASSI TECHNOLOGY</h1>
            <p>Task Under The @2nd round Of Interview</p> 
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>    
                </ul>
              </div>  -->
        </nav>

        <div class="container-fluid" style="margin-top:30px">
            <form action='post_data' method='post' id='form-id'>
             <?php   $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            ?>

            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <div class="row">

                <div class="col-sm-12">
                    <h2 class="text-center">TULLASSI TASK</h2>
                    <h5 class="text-center">TEST DATE, JULY 19, 2021 - SUBMISSION DATE JULY 20, 2021</h5>
                    <div class="card">
                        <div class="card-header">

                            <div class="well clearfix">
                                <a class="btn btn-primary pull-right add-record" data-added="0"><i class="glyphicon glyphicon-plus"></i> Add Row</a>
                                <?php if(validation_errors()){echo "<div class='alert alert-danger'>".validation_errors()."</div>";} ?>
                                 <?php if (!empty($this->session->userdata('status'))) {
                                    echo $this->session->flashdata('status');
                                    $this->session->unset_userdata('status');
                                   }
                                   ?>
                            </div>
                        </div>
                        
                      </div>
                   
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered notranslate" id="flockTable">
                            <thead>
                                <tr>
                                    <th>#S.No</th>
                                    <th>Action</th>
                                    <th>Flock<span class='star'>*</span></th>
                                    <th>Date<span class='star'>*</span></th>
                                    <th>Age<span class='star'>*</span></th>
                                    <th>Mort</th>
                                    <th>Culls</th>
                                    <th>B.Wt</th>
                                    <th>E.Wt</th>
                                    <th>Water</th>
                                    <th>Feed<span class='star'>*</span></th>
                                    <th>Kg'S<span class='star'>*</span></th>
                                    <th>BBE</th>
                                    <th>BDE</th>
                                    <th>BJE</th>
                                    <th>BLE</th>
                                    <th>BME</th>
                                    <th>BSE</th>
                                    <th>BXLE</th>
                                    <th>LBE</th>
                                    <th>PWE</th>
                                    
                                </tr>
                                </thead>
                                <tbody id="tbl_flock_body">
                                   
                                    <tr id='table-tr-1' data-id='1'>
                                        <td><code class="w3-codespan"><span class="sn">1</span>.</code></td>
                                        <td><code class="w3-codespan">
                                        <div class="well clearfix">
                                             <a class="delete-record" data-id='1' data-added="0"><i class="glyphicon glyphicon-plus"></i>Delete</a>
                                        </div>
                                        </td>
                                        <td>
                                            <code class="w3-codespan">
                                                <select name='flock[]' id='flock' class='good'>
                                                    <option id='flock_data' value=''>Choose..</option>
                                                        <?php 

                                                        foreach($flock as $row)
                                                        { 
                                                          echo '<option value="'.$row->id.'">'.$row->flock.'</option>';
                                                        }
                                                        ?>
                                                    
                                                </select>
                                            </code>
                                        </td>
                                        <td><code class="w3-codespan"><input type='text' name='date[]' id='date' class='date-id-1'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='age[]' id='age'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='mort[]' id='mort'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='culls[]' id='culls'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='bwt[]' id='bwt'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='ewt[]' id='ewt'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='water[]' id='water'></code></td>
                                        <td>
                                            <code class="w3-codespan">
                                                <select name='feed[]' id='feed'>
                                                    <option id='feed_data' value=''>Choose..</option>
           
                                                        <?php 

                                                        foreach($feed as $row)
                                                        { 
                                                          echo '<option value="'.$row->cat.'">'.$row->cat.'</option>';
                                                        }
                                                        ?>
                                                </select>
                                            </code>
                                        </td>
                                        <td><code class="w3-codespan"><input type='text' name='kgs[]' id='kgs'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='bbe[]' id='bbe'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='bde[]' id='bde'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='bje[]' id='bje'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='ble[]' id='ble'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='bme[]' id='bme'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='bse[]' id='bse'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='bxle[]' id='bxe'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='lbe[]' id='lbe'></code></td>
                                        <td><code class="w3-codespan"><input type='text' name='pwe[]' id='pwe'></code></td>
                                        
                                    </tr>
                              
                            </tbody>
                             </form>
                        </table>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-12'>
                     <div class="card-header text-center">

                            <div class="well clearfix">
                                <a class="btn btn-primary post-btn" data-added="0"><i class="glyphicon glyphicon-plus"></i> Save</a>
                                 <a class="btn btn-danger" data-added="0"><i class="glyphicon glyphicon-plus"></i> Cancel</a>
                            </div>
                        </div>
                </div>
            </div>
          </form>  
        </div>
        
                    <div style="display:none;">
                        <table id='sample_table'>
                            
                         <tr>
                             <td><code class="w3-codespan"><span class="sn"></span>.</code></td>
                             <td><code class="w3-codespan"><div class="well clearfix">
                                         <a class="delete-record" data-added="0"><i class="glyphicon glyphicon-plus"></i>Delete</a>
                                    </div></code></td>
                                    <td>
                                        <code class="w3-codespan">
                                             <select name='flock[]' id='flock' class='good'>
                                                    <option id='flock_data' value=''>Choose..</option>
                                                        <?php 

                                                        foreach($flock as $row)
                                                        { 
                                                          echo '<option value="'.$row->id.'">'.$row->flock.'</option>';
                                                        }
                                                        ?>
                                                    
                                                </select>
                                        </code>
                                    </td>
                                    <td><code class="w3-codespan"><input type='text' name='date[]' id='date' class='date-id-'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='age[]' id='age'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='mort[]' id='mort'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='culls[]' id='culls'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='bwt[]' id='bwt'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='ewt[]' id='ewt'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='water[]' id='water'></code></td>
                                    <td>
                                        <code class="w3-codespan">
                                            <select name='feed[]' id='feed'>
                                                <option id='feed_data' value=''>Choose..</option>
                                                <?php 

                                                foreach($feed as $row)
                                                { 
                                                  echo '<option value="'.$row->cat.'">'.$row->cat.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </code>
                                    </td>
                                    <td><code class="w3-codespan"><input type='text' name='kgs[]' id='kgs'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='bbe[]' id='bbe'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='bde[]' id='bde'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='bje[]' id='bje'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='ble[]' id='ble'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='bme[]' id='bme'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='bse[]' id='bse'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='bxle[]' id='bxe'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='lbe[]' id='lbe'></code></td>
                                    <td><code class="w3-codespan"><input type='text' name='pwe[]' id='pwe'></code></td>
                                    

                                </tr>
                           
                        </table>
                     </div>

        <div class="jumbotron text-center" style="margin-bottom:0">
            <p>@Copy Right 2021-TULASSI TECHNOLOGY</p>
        </div>

    </body>
</html>

<style>
    input{
        width:100%;
    }
    .star{
        color:red;
    }
    .btn{
        margin:10px;
    }
</style>

<script>
$(document).ready(function () {
jQuery(document).delegate('.add-record', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table tr'),
     size = jQuery('#flockTable >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'table-tr-'+size);
     element.attr('data-id', size);
     element.find('.delete-record').attr('data-id', size);
     element.appendTo('#tbl_flock_body');
     element.find('.date-id-').attr('class', 'date-id-'+size);
     element.find('.sn').html(size);
   });  
   
  

jQuery(document).delegate('.delete-record', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#table-tr-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_flock_body tr').each(function(index) {
      //alert(index);;
      $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
$("body").delegate("[name='flock[]']", "change", function(){
    var csrf_test_name = '<?php echo $this->security->get_csrf_token_name(); ?>',csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    var flock = $(this).find(":selected").val();
    $flocktrid = $(this).parent().parent().parent().attr('id');
    $slid  = $('#'+$flocktrid).data("id");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'autoload_flock',
        data: {flock: flock,[csrf_test_name]:csrfHash},
        success: function (return_val) {
            if (return_val.error == 0) {
                
            } else {
               
               if(return_val.date == null || return_val.date == '0000-00-00' || return_val.date==''){
                  
                   var trid = $('#'+$flocktrid).prev('tr').attr('id');
                    $prev_date = $('#'+trid+' td:eq(3) code #date').val();
                   
                    var days = 1;
                    var result = new Date(new Date($prev_date).setDate(new Date($prev_date).getDate() + days));
                    $newDate=result.toISOString().substr(0, 10); // 2019-01-02
                   $('#'+$flocktrid).find("#date").val($newDate);
               }else{
                   $('#'+$flocktrid).find("#date").val(return_val.date);
               }
               if(return_val.age == null || return_val.age == '0' || return_val.age==''){
                   var trid = $('#'+$flocktrid).prev('tr').attr('id');
                    $prev_age = $('#'+trid+' td:eq(4) code #age').val();
                    $prev_age++;
                    $('#'+$flocktrid).find("#age").val($prev_age);
               }else{
               $('#'+$flocktrid).find("#age").val(return_val.age);
                 }
            }
        },
        error: function (a, b, c) {

        }
    });

   });
   $("body").delegate("#mort,#culls,#bwt,#ewt,#water", "keydown", function(e){
       return /^\d*$/.test(e.originalEvent.key);
   });
   $("body").delegate("#kgs", "keydown", function(e){
       return /^-?(\d*\.)?\d*$/.test(e.originalEvent.key);
   });
   
   $('.post-btn').click(function(){
       if(validate()){
           $('#form-id').submit();
       }
       
   });
   
   $("body").delegate("[name='feed[]']", "change", function(){
    var csrf_test_name = '<?php echo $this->security->get_csrf_token_name(); ?>',csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    var feed = $(this).find(":selected").val();
    $flocktrid = $(this).parent().parent().parent().attr('id');
    $slid  = $('#'+$flocktrid).data("id");
    $header = ['bbe','bde','bje','ble','bme','bse','bxle','lbe','pwe'];
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'autoload_gategory',
        data: {feed: feed,[csrf_test_name]:csrfHash},
        success: function (return_val) {
            if (return_val.error == 0) {
                
            } else {
                $cnt = 21;
                for($i=1; $i<=10;$i++){
                    $("#"+$flocktrid+' td:eq('+$cnt+')').remove();
                    $cnt--;
                }
                
                for($i=0; $i<return_val.length;$i++){
                    $html ='<td><code class="w3-codespan"><input type="text" name="'+$header[$i]+'[]" id="'+$header[$i]+'"></code></td>';
                    $("#"+$flocktrid).append($html);
                   
                }
              
            }
        },
        error: function (a, b, c) {

        }
    });

   });
   
});

function validate(){
   $flk = $('#flock').val();
   $date= $('#date').val();
   $age = $('#age').val();
   $feed = $('#feed').val();
   $kgs = $('#kgs').val();
   $returnval = true;
    if($flk ==''){
        $('#flock').css('border-color','red');
        $returnval = false;
    }else{
        $('#flock').css('border-color','black');
    }
    
    if($feed ==''){
        $('#feed').css('border-color','red');
        $returnval = false;
    }else{
        $('#feed').css('border-color','black');
    }
    
    if($date ==''){
        $('#date').css('border-color','red');
        $returnval = false;
    }else{
        $('#date').css('border-color','black');
    }
    
    if($age ==''){
        $('#age').css('border-color','red');
        $returnval = false;
    }else{
        $('#age').css('border-color','black');
    }
    
    if($kgs ==''){
        $('#kgs').css('border-color','red');
        $returnval = false;
    }else{
        $('#kgs').css('border-color','black');
    }
    return $returnval;
}
  
</script>