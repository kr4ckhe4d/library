@extends('app')





@section('heading')

REGISTER READERS/BORROWERS


@endsection
@section('breadcrumb')


<li><a href="#">Readers/Borrowers</a>
                        </li>
                        <li class="active">
                            <strong>Register</strong>
                        </li>


@endsection





@section('sidebar')



      <li class=" ">
                    <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Books</span> </a>
                    <ul class="nav nav-second-level">
                        <li  ><a href="searchBooks">Search Books</a></li>
                        <li class="active"><a href="insertBooks">Insert Books</a></li>
 
                    </ul>
                </li>

  <li class="active">
                    <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Readers/Borrowers</span> </a>
                    <ul class="nav nav-second-level">
                        <li  ><a href="searchBooks">Search </a></li>
                        <li class="active"><a href="insertBooks">Register</a></li>
 
                    </ul>
                </li>



@endsection




@section('content')
<div class="container-fluid">
 
    <div id="disableform"> 
        <form onsubmit="return saveBook()">
    <div class=" form form-horizontal">
  <fieldset>
    <legend>Main Info </legend>
    <div class="form-group">
      <label for="name" class="col-lg-1 control-label">First Name</label>
      <div class="col-lg-5">
        <input class="form-control" id="fname" placeholder="First Name " type="text" required>
      </div>
        
        
        
        
        
        
        
        
         <label for="name" class="col-lg-1 control-label">Last Name</label>
      <div class="col-lg-5">
        <input class="form-control" id="lname" placeholder="Last Name " type="text" required>
      </div>
        
        
        
        
        
    </div>
      
      
      
           <div class="form-group">
          
          
      <label for="author" class="col-lg-1 control-label">Type</label>
      <div class="col-lg-5">
       <select class="form-control" id="type">
          
          <option value="LIB">Provincial Library</option>
           <option vlaue="BC">Book Reader Club Memeber</option>
           <option value="">Regular User </option>
                   
          
          
          </select>
      </div>
          
          
          
          
          
    </div>
      
            
      <div class="form-group">
      <label for="edit_translate" class="col-lg-1 control-label">NIC</label>
      <div class="col-lg-5">
        <input class="form-control" id="nic" placeholder="NIC Number " type="text">
      </div>
          
               <label for="edit_translate" class="col-lg-1 control-label">Ref. Number</label>
      <div class="col-lg-5">
        <input class="form-control" id="mp" placeholder="Reference Number" type="text">
      </div> 
          
          
          
    </div>
      
      
          <legend>Contact Info </legend>
      
      
      <div class="form-group">
          
          
      <label for="author" class="col-lg-1 control-label">Address Line 1</label>
      <div class="col-lg-11">
        <input class="form-control" id="add1" placeholder="Number and Street" type="text" required>
      </div>
          
          
          
          
          
    </div>
      
      
      <div class="form-group">
      <label for="cl_number" class="col-lg-1 control-label">Address Line 2</label>
      <div class="col-lg-5">
        <input class="form-control" id="cl_add2" placeholder="Town and city" type="text" required>
      </div>
          
          
             <label for="cl_number" class="col-lg-1 control-label">Address Line 3</label>
      <div class="col-lg-5">
        <input class="form-control" id="cl_add3" placeholder="District" type="text" required>
      </div>
          
          
          
          
          
          
    </div>
      
      
      <div class="form-group">
      <label for="edit_translate" class="col-lg-1 control-label">Land Phone</label>
      <div class="col-lg-5">
        <input class="form-control" id="lp" placeholder="Land Phone Number " type="text">
      </div>
          
               <label for="edit_translate" class="col-lg-1 control-label">Mobile Phone</label>
      <div class="col-lg-5">
        <input class="form-control" id="mp" placeholder="Mobile Phone Number" type="text">
      </div> 
          
          
          
    </div>
      
     
      
      
      
      
            
      <div class="form-group">
      <label for="edit_translate" class="col-lg-1 control-label">Email</label>
      <div class="col-lg-5">
        <input class="form-control" id="email" placeholder=" Email Address " type="email">
      </div>
          
 
          
    </div>
      
      <legend>Other Info</legend>
      
            
      <div class="form-group">
      <label for="edit_translate" class="col-lg-1 control-label">Status</label>
      <div class="col-lg-5">
       <select class="form-control" id="status">
          
          
          <option value="0">Memebrship Disabled</option>
             <option value="1">Memebrship Enabled</option>
          
          
          
          
          
          
          
          </select>
      </div>
          
          <label for="edit_translate" class="col-lg-1 control-label">Remarks</label>
      <div class="col-lg-5">
      <textarea class="form-control" id="remarks"></textarea>
      </div>
               
          
          
    </div>
      
      
      
    
      
      
   
        <div class="alert alert-dismissible alert-success" id="booksuccessupdate" hidden="true" >
   
  <strong> Updated Successfully!</strong>  
</div>
      
         <div class="alert alert-dismissible alert-success" id="booksuccess" hidden="true" >
   
  <strong> Success!</strong>  
</div>
      
         <div class="alert alert-dismissible alert-danger" id="bookerror"  hidden="true" >
   
  <strong> Error! Please make sure you have filled Name, Author  and CL number and try again.</strong>  
</div>
      
      
    <div class="form-group">
      <div class="col-lg-3 col-lg-offset-2" align="right" >
        
        
      </div>
        <div class="col-lg-2  " align="right" style="padding-right:0cm" >
        <button type="reset" class="btn btn-default btn-block">Cancel</button>
      </div>
         <div class="col-lg-2  " align="right" style="padding-right:0cm" >
        <button type="button" class="btn btn-success btn-block" onclick="rset()">Done</button>
      </div>
        <div class="col-lg-2  " align="right" >
            <div id="booksave" >
        <button type="submit"    class="btn btn-primary btn-block " style="padding-right:0cm">Save</button>
                </div>
             <div id="bookupdate" hidden="true">
             <button type="button"  onclick="updateBook()" class="btn btn-success btn-block " style="padding-right:0cm" >Update</button>
                 </div>
            
            <div id="bookedit" hidden="true">
             <button type="button"  onclick="editBook()" class="btn btn-primary btn-block " style="padding-right:0cm" >Edit</button>
                 </div>
      </div>
           
        <div class="col-lg-1 col-lg-offset-2" align="right" >
           
      </div>
    </div>
      
      
      
      <script>
          
          
          function rset(){
          
          
          location.href="searchBooks";
          
          }
          
          
          </script>
      
     
      
  </fieldset>
</div>
        </form>
    </div>
   <fieldset>
    
     <legend>Copies</legend>
      
      
      
   
       
       
       <div id="copytable"></div>
      
       
        <div class="form-group">
      <div class="col-lg-7 col-lg-offset-2" align="right" >
        
        
      </div>
         
        
        <div class="col-lg-2  " align="right" style="padding-right:0cm">
            <button type="button" id="addcopy" onclick="openCopy()" class="btn btn-primary btn-block " disabled="true" >Add Copy </button>
        </div>
        <div class="col-lg-1 col-lg-offset-2" align="right" >
           
      </div>
    </div>
       
       
       
    
    </fieldset> 
    
    
    <br> <br>
    
    
    
    
    
    
    
</div>
 <!-- Modal -->
<div  class="modal fade" id="add_copies">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Add a Copy</h4>
      </div>
      <div class="modal-body">
          <div class="alert alert-dismissible alert-danger" id="copyerror" hidden="true">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Error!</strong>  System encountered an issue. The most likely cause might be the Book ID already existing in the system.
</div>
                 <div class="alert alert-dismissible alert-success" id="copysuccess" hidden="true">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong> Success!</strong>  
</div>
       <form class="form-horizontal">
          <fieldset>
          
              <div class="form-group">
      <label for="copyid" class="col-lg-2 control-label">Book ID</label>
      <div class="col-lg-10">
        <input class="form-control" id="copyid" placeholder=" Unique ID of the book Copy " type="Number">
      </div>
    
      
    </div>
               
         
               <div class="form-group">
      <label for="copydate" class="col-lg-2 control-label">Date</label>
      <div class="col-lg-10">
        <input class="form-control" id="copydate" placeholder="    " type="text" value="<?php echo date("Y-m-d");  ?>">
      </div>
    
      
    </div>
              
              
              
              
              
              
              
              
                   <div class="form-group">
      <label for="copyremarks" class="col-lg-2 control-label">Remarks</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="copyremarks"></textarea>
       
      </div>
    
      
    </div>
                     
          
          </fieldset>
          
          </form>
          
          
          
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="saveCopy()">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!---------------------------------------Image upload Modal----------------------------------------->
<div  class="modal fade" id="ftp_img">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Select Image</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="upload_form" enctype="multipart/form-data" onsubmit="" method="post" action="upload.php">
                    <fieldset>
                        <span class="btn btn-default btn-file btn-primary">Browse
                            <input type="file" name="file">
                        </span>
<div >
                        <input type="text" class="form-control" id="imname" name="imname" hidden>
    </div>
                    </fieldset>
            </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                        <span class="sr-only">0% Complete</span>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit" >Upload</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
                
            </div>
        </div>
    </div>
</div>





<div  class="modal fade" id="delConfirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Confirm</h4>
      </div>
      <div class="modal-body">
 
          Are you sure you want to delete coppy <strong id="delid"></strong>?
          
          
      </div>
      <div class="modal-footer">
             <button type="button" class="btn btn-warning" id="delYes" onclick="">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
     
      </div>
    </div>
  </div>
</div>













<input type="text" id="book_name_id" hidden>
 <script>
     
     
     function editBook(){
     
           document.getElementById("booksuccess").setAttribute("hidden",true);
      document.getElementById("booksuccessupdate").setAttribute("hidden",true);
         document.getElementById("bookerror").setAttribute("hidden",true);
     document.getElementById("bookedit").setAttribute("hidden",true); 
         
          $('#disableform').find('input, textarea').prop('disabled',false);
         
         
         document.getElementById("bookupdate").removeAttribute("hidden",false); 
     
     
     
     }
     
     
function deleteConfirm(a){
    
     document.getElementById("delYes").setAttribute("onclick","deleteCopy("+a+")");
      document.getElementById("delid").innerHTML = "ID "+a;
$('#delConfirm').modal('show');
 
}
   
     
     
     
     
     function deleteCopy(a){
     
     var book_name_id = $('#book_name_id').val();
      var data = "bnid="+book_name_id+"&cid="+a;
     
     $.ajax({
    type: "get",
    url: '/library/public/deleteCopy',
    data: data,
        
    success : function(data){
   $('#delConfirm').modal('hide');
        
        
        var body="";
        if(data.length>0){
        body+= '<table class="table table-striped table-hover"><thead><th> ID</th><th>Date added </th><th>Date updated </th><th> Reserved</th><th>Status</th><th>Remarks</th><th></th> </thead> <tbody> ';
        
        for(var i =0; i<data.length; i++){
            
            
            var res="";
            var stat ="";
        
            if (data[i].reserved == 0){
            res = "No";
            }
            else{
            
            res ="Yes";
            
            }
            
            if (data[i].status == 0){
            stat = "Available";
            }
            else{
            
            stat ="Not Available";
            
            }
            
            body+= '<tr> <td> '+ data[i].id + '</td><td>'+data[i].date_added+'</td><td>'+data[i].date_updated+'</td><td>'+res+'</td><td>'+stat+'</td><td>'+data[i].remarks+'</td><td><button class="btn btn-danger" onclick="deleteConfirm('+ data[i].id+')"> Remove </button></td></tr>';
        
        
        
        
        }
        
            body+= '</tbody> </table>';
       
        
        }
        document.getElementById("copytable").innerHTML=body;
        
        },
	 error: function(xhr, ajaxOptions, thrownError) {
       document.getElementById("copyerror").removeAttribute("hidden",false);
      }	 
    });
         
         
         
         
         
         
         
         
         
         
         
         
     }
     
     
     
     function saveCopy(){
     
     
     var book_name_id = $('#book_name_id').val();
     var copyid= $('#copyid').val();
     var copydate = $('#copydate').val();
     var copyremarks= $('#copyremarks').val();
     
     
     var data = "bnid="+book_name_id+"&cid="+copyid+"&copydate="+copydate+"&copyremarks="+copyremarks;
        
         
         
         
         
          $.ajax({
    type: "get",
    url: '/library/public/addCopy',
    data: data,
        
    success : function(data){
   document.getElementById("copysuccess").removeAttribute("hidden",false);
        
        
        var body="";
        if(data.length>0){
        body+= '<table class="table table-striped table-hover"><thead><th> ID</th><th>Date added </th><th>Date updated </th><th> Reserved</th><th>Status</th><th>Remarks</th><th></th> </thead> <tbody> ';
        
        for(var i =0; i<data.length; i++){
            
            
            var res="";
            var stat ="";
        
            if (data[i].reserved == 0){
            res = "No";
            }
            else{
            
            res ="Yes";
            
            }
            
            if (data[i].status == 0){
            stat = "Available";
            }
            else{
            
            stat ="Not Available";
            
            }
            
            body+= '<tr> <td> '+ data[i].id + '</td><td>'+data[i].date_added+'</td><td>'+data[i].date_updated+'</td><td>'+res+'</td><td>'+stat+'</td><td>'+data[i].remarks+'</td><td><button class="btn btn-danger" onclick="deleteConfirm('+ data[i].id+')"> Remove </button></td></tr>';
        
        
        
        
        }
        
            body+= '</tbody> </table>';
       
        
        }
        document.getElementById("copytable").innerHTML=body;
        $('#add_copies').modal('hide');
        
        },
	 error: function(xhr, ajaxOptions, thrownError) {
       document.getElementById("copyerror").removeAttribute("hidden",false);
      }	 
    });
         
         
         
         
         
         
         
         
         
         
         
     }
     
     
 function updateBook(){
      document.getElementById("booksuccess").setAttribute("hidden",true);
      document.getElementById("booksuccessupdate").setAttribute("hidden",true);
      document.getElementById("bookerror").setAttribute("hidden",true);
      var book_name_id = $('#book_name_id').val();
     
     var name = $('#name').val();
 var author = $('#author').val();
 var cl_num = $('#cl_number').val();    
 var edit = $('#edit_translate').val();
     
 var publisher = $('#publisher').val();  
 var published_place = $('#published_place').val();      
 var published_year = $('#year').val();      
     
 var pages = $('#pages').val();     
 var height = $('#height').val();        
        
 var series = $('#series').val();      
 var series_num = $('#series_num').val();      
 var isbn = $('#isbn').val();      
 var remarks = $('#remarks').val();       
     
     
     var data = "name="+name+"&author="+author+"&cl_num="+cl_num+"&edit="+edit+"&publisher="+publisher+"&published_place="+published_place+"&published_year="+published_year+"&pages="+pages+"&height="+height+"&series="+series+"&series_num="+series_num+"&isbn="+isbn+"&remarks="+remarks+"&bnid="+book_name_id;
    
     
     
     
 
  $.ajax({
    type: "get",
    url: '/library/public/updateBook',
    data: data,
        
    success : function(data){
     
         document.getElementById("booksuccessupdate").removeAttribute("hidden",false);
            $('#disableform').find('input, textarea').prop('disabled',true);
        document.getElementById("bookupdate").setAttribute("hidden",true); 
        document.getElementById("bookedit").removeAttribute("hidden",false); 
        
        
        },
	 error: function(xhr, ajaxOptions, thrownError) {
       document.getElementById("bookerror").removeAttribute("hidden",false);
      }	 
    });
 
 
     
     
     
     
     
     
     
     
     }
     
     
 function saveBook(){
 
  document.getElementById("bookerror").setAttribute("hidden",true);
     
 var name = $('#name').val();
 var author = $('#author').val();
 var cl_num = $('#cl_number').val();    
 var edit = $('#edit_translate').val();
     
 var publisher = $('#publisher').val();  
 var published_place = $('#published_place').val();      
 var published_year = $('#year').val();      
     
 var pages = $('#pages').val();     
 var height = $('#height').val();        
        
 var series = $('#series').val();      
 var series_num = $('#series_num').val();      
 var isbn = $('#isbn').val();      
 var remarks = $('#remarks').val();       
     
     
     var data = "name="+name+"&author="+author+"&cl_num="+cl_num+"&edit="+edit+"&publisher="+publisher+"&published_place="+published_place+"&published_year="+published_year+"&pages="+pages+"&height="+height+"&series="+series+"&series_num="+series_num+"&isbn="+isbn+"&remarks="+remarks;
    
     
     
     
 
  $.ajax({
    type: "get",
    url: '/library/public/addBook',
    data: data,
        
    success : function(data){
        
        $('#disableform').find('input, textarea').prop('disabled',true);
        
        
        
    document.getElementById("book_name_id").value=data;
       document.getElementById("booksuccess").removeAttribute("hidden",false);
        document.getElementById("booksave").setAttribute("hidden",true);
         document.getElementById("bookedit").removeAttribute("hidden",false); 
         document.getElementById("addcopy").removeAttribute("disabled",false);
        
        
        
        },
	 error: function(xhr, ajaxOptions, thrownError) {
       document.getElementById("bookerror").removeAttribute("hidden",false);
      }	 
    });
 
 
 return false;
 
 }

     function ftp(){
         //var a=$('#name').val();
         //document.getElementById("imname").value = a;
         //var imggg=document.getElementById("imname");
         
         var imgname="";
         $('#ftp_img').modal('show');
        
         $('#upload_form').ajaxForm({
        beforeSend:function(){
            $('.progress').show();
            var imggg = $("#imname").val();
            imgname="ftp://chiefmin:Gnuplot222@209.140.30.92/public_library/"+imggg+".jpeg";
        },
        uploadProgress:function(event,position,total,percentComplete){
            $(".progress-bar").width(percentComplete+'%');
            $(".sr-only").html(percentComplete+'%');
        },
        success:function(){
            $("#book_cover").attr("src",imgname);
            document.getElementById("book_cover").removeAttribute("hidden",false);
        },
        complete:function(){}
    });
        $(".progress").hide();
     }
     
     
     
     
     
     
function openCopy(){
    
     document.getElementById("bookerror").setAttribute("hidden",true);
     document.getElementById("booksuccess").setAttribute("hidden",true);
      document.getElementById("booksuccessupdate").setAttribute("hidden",true);
    
     document.getElementById("copysuccess").setAttribute("hidden",true);
     document.getElementById("copyerror").setAttribute("hidden",true);
$('#add_copies').modal('show');
 
}


    
     
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    
      
     
</script>

@endsection
