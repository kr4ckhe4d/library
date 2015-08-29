@extends('app')








@section('heading')

SEARCH BOOKS


@endsection
@section('breadcrumb')


<li><a href="#">Books</a>
</li>
<li class="active">
    <strong>SearchBooks</strong>
</li>


@endsection





@section('sidebar')



<li class="active">
    <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Books</span> </a>
    <ul class="nav nav-second-level">
        <li class="active" ><a href="searchBooks">Search Books</a></li>
        <li ><a href="insertBooks">Insert Books</a></li>

    </ul>
</li>





@endsection


















@section('content')
<div class="container" style="width:99%" >
    <br>
    <div class="row">

        <form class="form-horizontal">


            <div class="form-group">


                <div class="col-lg-3">
                    <input class="form-control"   oninput="searchf()" id="search" placeholder="Enter Keyword" type="text">
                </div>


                <div class="col-lg-3" style="padding-left:0cm;">
                    <select class="form-control" id="selectsearch" onchange="searchf()">
                        <option value="author" selected>Author</option>
                        <option  value="name">Name</option>
                        <option value="cl_number">Cl Number</option>
                        <option value="publisher">Publisher</option>
                        <option value="edit_translate">Editor/Translator</option>
                        <option value="series">Series</option>
                    </select>
                </div>
                <div class="col-lg-1" style="padding-left:0cm;">
                    <button type="button" class="btn btn-primary btn-block" onclick="searchf()">Search</button>
                </div>

            </div>






        </form> 
    </div>
    <br>
    <div class="row">



        <table class="table table-hover table-striped">

            <thead>
                <th class="col-md-3"> Name</th>
                <th class="col-md-2">Author</th>
                <th class="col-md-1">Cl Number</th>

                <th class="col-md-1">Editor/Translator</th>
                <th class="col-md-2">Series</th>
                <th class="col-md-1">Series No.</th>

                <th class="col-md-1">Availabale</th>   
                <th class="col-md-1"></th>    

            </thead>

            <tbody id="searchbody">






            </tbody>



        </table>





    </div>




</div>







<script>


    function reset(){




        var search = '';   
        var select = 'name';

        var data = 'search='+search+'&select='+select;
        $.ajax({
            type: "get",
            url: '/library/public/searchBooks1',
            data: data,

            success : function(data){

                var body ="";


                for(var i=0;i<data.length; i++){

                    body+= '<tr> <td style="font-weight:400; font-size:110%"><a style="color:black;" href="/library/public/single-book?id='+data[i].id+'">'+ data[i].name +'</a></td> <td style="font-weight:400; font-size:110%">'+ data[i].author +'</td> <td style="font-weight:400; font-size:110%"><center>'+ data[i].cl_number+'</center></td>   <td style="font-weight:400; font-size:110%">'+data[i].edit_translate+'</td> <td style="font-weight:400; font-size:110%">'+data[i].series+'</td> <td style="font-weight:400; font-size:110%"> <center>'+data[i].series_num+'</center></td> <td style="font-weight:400; font-size:110%"><center>'+ data[i].available+'</center></td> <td><a href="/library/public/single-book?id='+data[i].id+'" class="btn btn-primary btn-block">View</a> </td></tr>';







                }

                document.getElementById("searchbody").innerHTML = body;



            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert("error");
            }	 
        });








    }


    function searchf(){

        var search = $('#search').val();   
        var select = $('#selectsearch').val();

        var data = 'search='+search+'&select='+select;
        $.ajax({
            type: "get",
            url: '/library/public/searchBooks1',
            data: data,

            success : function(data){

                var body ="";


                for(var i=0;i<data.length; i++){

                    body+= '<tr> <td style="font-weight:400; font-size:110%"><a style="color:black;" href="/library/public/single-book?id='+data[i].id+'">'+ data[i].name +'</a></td> <td style="font-weight:400; font-size:110%">'+ data[i].author +'</td> <td style="font-weight:400; font-size:110%"><center>'+ data[i].cl_number+'</center></td>   <td style="font-weight:400; font-size:110%">'+data[i].edit_translate+'</td> <td style="font-weight:400; font-size:110%">'+data[i].series+'</td> <td style="font-weight:400; font-size:110%"> <center>'+data[i].series_num+'</center></td> <td style="font-weight:400; font-size:110%"><center>'+ data[i].available+'</center></td> <td><a href="/library/public/single-book?id='+data[i].id+'" class="btn btn-primary btn-block">View</a> </td></tr>';







                }

                document.getElementById("searchbody").innerHTML = body;



            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert("error");
            }	 
        });






    }
</script>





@endsection