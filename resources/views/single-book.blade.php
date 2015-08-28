@extends('app')

@section('content')
<div class="container">
<div class="row" id="show_book">
<legend><h2>{{$book_name->name}} <span class="label" style="color:#6D7878 ;font-weight:400">By {{$book_name->author}} </span> </h2> </legend>

<div class="col-lg-4">
    
    //nipuna image upload and view here
    
    
    </div>
<div class="col-lg-8">
<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300; font-size:70%"> </h5>
<legend>Main Info</legend> 
<div hidden>


</div>
</div>


<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Cl Number</h5>
<div class="col-lg-9">
<h5  style="font-weight:600;font-size:110%"> {{$book_name->cl_number}}</h5>
 
</div>
</div>


<input type="text" id="book_name_id" value="{{$book_name->id}}" hidden="true">

<div class="form-group">
<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Series </h5>
<div class="col-lg-5">
<h5  style="font-weight:500;font-size:110%"><?php if($book_name->series=="" ||$book_name->series==null){
echo "None";

} 
else {
echo $book_name->series;

}
?></h5>
 
</div>
<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Series Number </h5>
<div class="col-lg-1">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->series_num=="" ||$book_name->series_num==null){
echo "None";

} 
else {
echo $book_name->series_num;

}
?></h5>
 
</div>
</div>


<div class="form-group">
<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Editor/Translator</h5>
<div class="col-lg-9">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->edit_translate=="" ||$book_name->edit_translate==null){
echo "None";

} 
else {
echo $book_name->edit_translate;

}
?></h5>
 
</div>
</div>




<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
<legend>Publisher Info</legend> 
<div hidden>


</div>
</div>



<div class="form-group">
<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Publisher</h5>
<div class="col-lg-9">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->publisher=="" ||$book_name->publisher==null){
echo "None";

} 
else {
echo $book_name->publisher;

}
?></h5>
 
</div>


</div> 



<div class="form-group">
<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Published Place</h5>
<div class="col-lg-5">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->published_place=="" ||$book_name->published_place==null){
echo "None";

} 
else {
echo $book_name->published_place;

}
?></h5>
 
</div> 



<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Published Year</h5>
<div class="col-lg-1">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->published_year=="" ||$book_name->published_year==null){
echo "None";

} 
else {
echo $book_name->published_year;

}
?></h5>
 
</div> 

</div> 

</div>

<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
<legend>Additional Info </legend> 
 
</div>



<div class="form-group">
<h5 for="name" class="col-lg-1 control-label"  style="font-weight:300;font-size:110%">Pages</h5>
<div class="col-lg-1">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->pages=="" ||$book_name->pages==null){
echo "None";

} 
else {
echo $book_name->pages;

}
?></h5>
 
</div> 



<h5 for="name" class="col-lg-1 control-label"  style="font-weight:300;font-size:110%">Height </h5>
<div class="col-lg-1">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->height=="" ||$book_name->height==null){
echo "None";

} 
else {
echo $book_name->height.'cm';

}
?></h5>
 
</div> 

 


 

 
<h5 for="name" class="col-lg-1 control-label"  style="font-weight:300;font-size:110%">ISBN</h5>
<div class="col-lg-2">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->isbn=="" ||$book_name->isbn==null){
echo "None";

} 
else {
echo $book_name->isbn;

}
?></h5>
 
</div> 



<h5 for="name" class="col-lg-1 control-label"  style="font-weight:300;font-size:110%">Remarks</h5>
<div class="col-lg-4">
<h5  style="font-weight:500;font-size:110%"> <?php if($book_name->remarks=="" ||$book_name->remarks==null){
echo "None";

} 
else {
echo $book_name->remarks;

}
?></h5>
 
</div> 

</div> 






<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
 <h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
<div class="col-lg-10">


</div>
    <div class="col-lg-2">

<button class="btn btn-primary btn-block" onclick="edit()"> Edit</button>
</div>
</div>












</div>
    
    
    
    
    
    
    
    
    <div id="edit_book" class="row">
 <div class="col-lg-5" style="margin-bottom:10px"><h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Name </h5><input class="form-control" id="name" placeholder="Name " type="text" required value="{{$book_name->name}}" ></div> <div class="col-lg-5"><h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Author</h5> <input class="form-control" id="author" placeholder="Name " type="text" required value="{{$book_name->author}}" > </div>   
        <legend></legend>
<div class="col-lg-4">
    
    //nipuna image upload and view here
    
    
    </div>
<div class="col-lg-8">
<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300; font-size:70%"> </h5>
<legend>Main Info</legend> 
<div hidden>


</div>
</div>


<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Cl Number</h5>
<div class="col-lg-9">
 
 
<input class="form-control" id="cl_num" placeholder="Name " type="text" required value="{{$book_name->cl_number}}" >
 <br>
</div>
</div>




<div class="form-group">
     
   <h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Series </h5>
<div class="col-lg-5">
 
<div >
<input class="form-control" id="series" placeholder="Name " type="text" required value="{{$book_name->series}}" >
</div>
</div>
<h5 for="name" class="col-lg-2 control-label"  style="font-weight:300;font-size:110%">Series Number </h5>
<div class="col-lg-2">
 
<div >
<input class="form-control" id="series_num" placeholder="Name " type="text" required value="{{$book_name->series_num}}" >
</div>
</div> 
 
</div>

<div class="form-group">
<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Editor/Translator</h5>
<div class="col-lg-9">
 
<div  >
<input class="form-control" id="edit_translate" placeholder="Name " type="text" required value="{{$book_name->edit_translate}}" >

</div>
</div>
</div>




<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
<legend>Publisher Info</legend> 
<div hidden>


</div>
</div>



<div class="form-group">
<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Publisher</h5>
<div class="col-lg-9">
 
<div >
<input class="form-control" id="publisher" placeholder="Name " type="text" required value="{{$book_name->publisher}}" >
<br>
</div>
</div>


</div> 



<div class="form-group">
<h5 for="name" class="col-lg-3 control-label"  style="font-weight:300;font-size:110%">Published Place</h5>
<div class="col-lg-5">
 
<div  >
<input class="form-control" id="published_place" placeholder="Name " type="text" required value="{{$book_name->published_place}}" >

</div>
</div> 



<h5 for="name" class="col-lg-2 control-label"  style="font-weight:300;font-size:110%">Published Year</h5>
<div class="col-lg-2">
 
<div  >
<input class="form-control" id="published_year" placeholder="Name " type="text" required value="{{$book_name->published_year}}" >

</div>
</div> 

</div> 

</div>

<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
<legend>Additional Info </legend> 
<div hidden>


</div>
</div>



<div class="form-group">
<h5 for="name" class="col-lg-1 control-label"  style="font-weight:300;font-size:110%">Pages</h5>
<div class="col-lg-1">
 
<div  >
<input class="form-control" id="pages" placeholder="Name " type="text" required value="{{$book_name->pages}}" >

</div>
</div> 



<h5 for="name" class="col-lg-1 control-label"  style="font-weight:300;font-size:110%">Height </h5>
<div class="col-lg-1">
 
<div  >
<input class="form-control" id="height" placeholder="Name " type="text" required value="{{$book_name->height}}" >

</div>
</div> 

 


 

 
<h5 for="name" class="col-lg-1 control-label"  style="font-weight:300;font-size:110%">ISBN</h5>
<div class="col-lg-2">

<div  >
<input class="form-control" id="isbn" placeholder="Name " type="text" required value="{{$book_name->isbn}}" >

</div>
</div> 



<h5 for="name" class="col-lg-1 control-label"  style="font-weight:300;font-size:110%">Remarks</h5>
<div class="col-lg-4">
 
<div  >
<input class="form-control" id="remarks" placeholder="Name " type="text" required value="{{$book_name->remarks}}" >

</div>
</div> 

</div> 






<div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
 <h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
<div class="col-lg-10">


</div>
    <div class="col-lg-2">

<button class="btn btn-success btn-block" onclick="update()"> Update</button>
</div>
</div>












</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="row">
    
   <div class="form-group">
<h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
<legend>Copies </legend> 
<div hidden>


</div>
</div>

    
    
    
    <table class="table table-striped table-hover">
    
    <thead>
        
    <th> ID</th>  
    <th> Available</th>
    <th> Reserved </th> 
        <th> Date Added </th> 
        <th> Date Updated </th> 
        <th class="col-lg-1">  </th>
    <th class="col-lg-1">  </th>
    
    <th class="col-lg-1">   </th>
        
    </thead>
    <tbody>
        
        @foreach ($book as $b)
        
        <tr>
        <td> {{$b->id}}</td>
        <td> <?php  
            
            if ($b->status=="0"||$b->status==0){
            echo "Yes";
            }
                else{
                
                echo "No";
                
                }
             ?>
             </td>
        <td>  <?php  
            
            if ($b->reserved=="1"||$b->reserved==1){
            echo "Yes";
                }
                else{
                
                echo "No";
                
                }
             ?> </td>
            
            
             <td> {{$b->date_added}}</td>
             <td> {{$b->date_updated}}</td>
            
            
        <td> <button type="button" class="btn btn-success btn-block" <?php  if ($b->status=="1"||$b->status==1){
            echo "disabled";
            } ?>  >Lend</button></td>
        <td> <a  href='/library/public/single-copy?id={{$b->id}}'  class ="btn btn-primary btn-block">View</a>    </td>
             <td> <button type="button" class="btn btn-danger btn-block">Remove</button>    </td>
        </tr>
        
        
        
        @endforeach
        </tbody>
    
    
    </table>
    
    
    
    
    
    
    </div>

</div>
</div>


<script>

function reset(){

document.getElementById("show_book").removeAttribute("hidden",false);

 document.getElementById("edit_book").setAttribute("hidden",true);
}
    
function edit(){
    document.getElementById("show_book").setAttribute("hidden",true);

 document.getElementById("edit_book").removeAttribute("hidden",false);
}


function update(){

      var book_name_id = $('#book_name_id').val();
     
     var name = $('#name').val();
 var author = $('#author').val();
 var cl_num = $('#cl_num').val();    
 var edit = $('#edit_translate').val();
     
 var publisher = $('#publisher').val();  
 var published_place = $('#published_place').val();      
 var published_year = $('#published_year').val();      
     
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
     document.getElementById("show_book").removeAttribute("hidden",false);

 document.getElementById("edit_book").setAttribute("hidden",true);
   
        window.location.reload();
        
        },
	 error: function(xhr, ajaxOptions, thrownError) {
      alert("error");
      }	 
    });
    
    
    
    
    
    
    




}





</script>
@endsection

