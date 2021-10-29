
@include("admin/header")

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">
        <h3>
            Insert Employee
        </h3>
            <form>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="fullName" placeholder="Full Name" > 
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" > 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" >   
                    </div>
                    <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" placeholder="City" >  
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info"><i class="fa fa-database"></i> Submit</button>
                    <a class="btn btn-secondary" href="{{route('w_admin.index')}}"><i class="fa fa-list-alt"></i> View All</a>
                </div>
            </form>
        </div>
    </div>
</div>

@include("admin/footer")


