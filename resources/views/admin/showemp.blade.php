
@include("admin/header")



<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">

<h3><a class="btn btn-secondary" href="{{route('w_admin.create')}}"><i class="fa fa-plus"></i> Create New</a> Employee List</h3>
<table class="table table-stripped">
<thead>
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th></th>
    </tr>
    <tbody>
       <tr>
           <td>text</td>
           <td>text</td>
           <td>text</td>
           <td>text</td>
           <td><a href="#"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
            <a href="#" ><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>
       </tr>
    </tbody>
</thead>
</table>
</div>
</div>

</div>









@include("admin/footer")