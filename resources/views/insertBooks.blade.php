@extends('app')





@section('heading')

INSERT BOOKS


@endsection
@section('breadcrumb')


<li><a href="#">Books</a>
                        </li>
                        <li class="active">
                            <strong>InsertBooks</strong>
                        </li>


@endsection





@section('sidebar')



      <li class="active">
                    <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Books</span> </a>
                    <ul class="nav nav-second-level">
                        <li  ><a href="searchBooks">Search Books</a></li>
                        <li class="active"><a href="insertBooks">Insert Books</a></li>
 
                    </ul>
                </li>





@endsection




@section('content')
<div class="container">
 
    <div id="disableform"> 
        <form onsubmit="return saveBook()">
    <div class=" form form-horizontal">
  <fieldset>
    <legend>Main Info </legend>
    <div class="form-group">
      <label for="name" class="col-lg-1 control-label">Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="name" placeholder="Name " type="text" required>
      </div>
    </div>
      
      
      <div class="form-group">
      <label for="author" class="col-lg-1 control-label">Author</label>
      <div class="col-lg-10">
        <input class="form-control" id="author" placeholder="Author " type="text" required>
      </div>
    </div>
      
      
      <div class="form-group">
      <label for="cl_number" class="col-lg-1 control-label">Cl Number</label>
      <div class="col-lg-10">
        <input class="form-control" id="cl_number" placeholder="Classification Number " type="text" required>
      </div>
    </div>
      
      
      <div class="form-group">
      <label for="edit_translate" class="col-lg-1 control-label">Editor</label>
      <div class="col-lg-10">
        <input class="form-control" id="edit_translate" placeholder="Editor/Translator Name " type="text">
      </div>
    </div>
      
       <legend>Publisher Info</legend>
       <div class="form-group">
      <label for="publisher" class="col-lg-1 control-label">Publisher</label>
      <div class="col-lg-10">
        <input class="form-control" id="publisher" placeholder="Publisher Name " type="text">
      </div>
    </div>
      
      
      
       <div class="form-group">
      <label for="published_place" class="col-lg-1 control-label">Published Place</label>
      <div class="col-lg-5">
        <input class="form-control" id="published_place" placeholder="  " type="text">
      </div>
   
      
      
           
      <label for="year" class="col-lg-1 control-label">Published Year</label>
      <div class="col-lg-4">
        <input class="form-control" id="year" placeholder=" Year " type="text">
      </div>
    </div>
      
      <legend>Physical Info</legend>
      
         
      <div class="form-group">
          <div class="col-lg-6">
              
              <div class="col-lg-10">
                  <label for="img" class="col-lg-2 control-label">Image</label>
                  <button class="btn btn-primary" onclick="ftp()">Select an Image</button> 
                  <img id="book_cover" height="400px" width="300px" hidden="true"  src="#">
                  
              </div>
              
                
                  
                
          </div>
      
       <div class="col-lg-5">
        <div class="row">
      <label for="pages" class="col-lg-2 control-label">Pages</label>
      <div class="col-lg-10">
        <input class="form-control" id="pages" placeholder=" Number of Pages " type="text">
      </div>
    
      </div>  <br>
       <div class="row">
      <label for="height" class="col-lg-2 control-label">Height (cm)</label>
      <div class="col-lg-10">
        <input class="form-control" id="height" placeholder=" Height of the book in cm " type="text">
      </div>
          </div>
          
          <div id="debug">
        <h2>Debug</h2>
        <div>
          <ul>
            <!-- Debug lines will be added here -->
          </ul>
        </div>
      </div> 
           <div id="fileList">
        
        <!-- Files will be places here -->

      </div>
          
           </div>
         
      <div class="form-group">
          <div class="col-lg-6">
              
              <div class="wrapper">
            
      <div class="left-column">
        <!-- D&D Markup -->
        <div id="drag-and-drop-zone" class="uploader">
          <div>Drag &amp; Drop Images Here</div>
          <div class="or">-or-</div>
          <div class="browser">
            <label>
              <span>Click to open the file Browser</span>
              <input type="file" name="files[]" multiple="multiple" title='Click to add Files'>
            </label>
          </div>
        </div>
        <!-- /D&D Markup -->
      </div>
        
      
 
</div>
     
       
    </div>
      
      
      
      
       <legend>Additional Info</legend>
     
      
      
        <div class="form-group">
      <label for="series" class="col-lg-1 control-label">Title Series</label>
      <div class="col-lg-5">
        <input class="form-control" id="series" placeholder=" Name of the  Series  " type="text">
      </div>
    
      <label for="series_num" class="col-lg-1 control-label"> Series Number</label>
      <div class="col-lg-4">
        <input class="form-control" id="series_num" placeholder=" Series Number" type="text">
      </div>
    </div>
     
        <div class="form-group">
      <label for="isbn" class="col-lg-1 control-label">ISBN</label>
      <div class="col-lg-10">
        <input class="form-control" id="isbn" placeholder=" ISBN number" type="text">
      </div>
    </div>
       
      
      
      
      
      
    <div class="form-group">
      <label for="remarks" class="col-lg-1 control-label">Remarks</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="remarks"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
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


    
      
      //-- Some functions to work with our UI
      function add_log(message)
      {
        var template = '<li>[' + new Date().getTime() + '] - ' + message + '</li>';
        
        $('#debug').find('ul').prepend(template);
      }
      
      function add_file(id, file)
      {
        var template = '' +
          '<div class="file" id="uploadFile' + id + '">' +
            '<div class="info">' +
              '#1 - <span class="filename" title="Size: ' + file.size + 'bytes - Mimetype: ' + file.type + '">' + file.name + '</span><br /><small>Status: <span class="status">Waiting</span></small>' +
            '</div>' +
            '<div class="bar">' +
              '<div class="progress" style="width:0%"></div>' +
            '</div>' +
          '</div>';
          
    $('#fileList').prepend(template);
      }
      
      function update_file_status(id, status, message)
      {
        $('#uploadFile' + id).find('span.status').html(message).addClass(status);
      }
      
      function update_file_progress(id, percent)
      {
        $('#uploadFile' + id).find('div.progress').width(percent);
      }
      
      // Upload Plugin itself
      $('#drag-and-drop-zone').dmUploader({
        url: "{{ URL::asset('/src/upload.php') }}",
        dataType: 'json',
        allowedTypes: 'image/*',
        /*extFilter: 'jpg;png;gif',*/
        onInit: function(){
          add_log('Penguin initialized :)');
        },
        onBeforeUpload: function(id){
          add_log('Starting the upload of #' + id);
          
          update_file_status(id, 'uploading', 'Uploading...');
        },
        onNewFile: function(id, file){
          add_log('New file added to queue #' + id);
          
          add_file(id, file);
        },
        onComplete: function(){
          add_log('All pending tranfers finished');
        },
        onUploadProgress: function(id, percent){
          var percentStr = percent + '%';

          update_file_progress(id, percentStr);
        },
        onUploadSuccess: function(id, data){
          add_log('Upload of file #' + id + ' completed');
          
          add_log('Server Response for file #' + id + ': ' + JSON.stringify(data));
          
          update_file_status(id, 'success', 'Upload Complete');
          
          update_file_progress(id, '100%');
        },
        onUploadError: function(id, message){
          add_log('Failed to Upload file #' + id + ': ' + message);
          
          update_file_status(id, 'error', message);
        },
        onFileTypeError: function(file){
          add_log('File \'' + file.name + '\' cannot be added: must be an image');
          
        },
        onFileSizeError: function(file){
          add_log('File \'' + file.name + '\' cannot be added: size excess limit');
        },
        /*onFileExtError: function(file){
          $.danidemo.addLog('#demo-debug', 'error', 'File \'' + file.name + '\' has a Not Allowed Extension');
        },*/
        onFallbackMode: function(message){
          alert('Browser not supported(do something else here!): ' + message);
        }
      });
     
</script>

@endsection
