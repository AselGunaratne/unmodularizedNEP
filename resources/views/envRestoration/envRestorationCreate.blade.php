@extends('home')

@section('cont')

<kbd><a href="/envRestoration/index" class="text-white font-weight-bolder"><i class="fas fa-chevron-left"></i></i> BACK</a></kbd>
<div class="container">
    <h2 style="text-align:center;" class="text-dark">Add New Environment Restoration Project</h2>
    <hr>
    <div class="row justify-content-md-center border p-4 bg-white">
        <div class="col-10 ml-3">
            <form method="post" action="/envRestoration/store">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Title</span>
                    </div>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Environment Restoration Activity</span>
                        <select name="er_activity" class="custom-select">
                            <option selected>Select Activity</option>
                            <option value=1>Forest Preservation</option>
                            <option value=2>Coral Preservation</option>
                            <option value=3>Wetland Preservation</option>
                        </select>
                    </div>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Ecosystem</span>
                        <select name="ecosystem" class="custom-select">
                            <option selected>Select Ecosystem</option>
                            <option value=1>RainForest</option>
                            <option value=2>Grassland</option>
                            <option value=3>Coral Reef</option>
                            <option value=4>Wetland</option>
                        </select>
                    </div>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Land Parcel</span>
                    </div>
                    <input type="text" class="form-control" name="landParcelID" placeholder="Enter the land parcel id">
                </div>

                <br/>

                <div class="table-responsive">
                    <h5> Species </h5>
                    <form method="post" id="dynamic_form">
                    <span id="result"></span>
                    <table class="table table-bordered table-striped" id="species">
                        <thead>
                            <tr>
                                <th>Species Name</th>
                                <th >Species Count</th>
                                <th>Remarks</th>
                                <!--<th>Amendments</th> -->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                       <!--  <tfoot>
                            <tr>
                                <td colspan="2" align="right">&nbsp;</td>
                                <td>
                                    @csrf
                                    <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                                </td>
                            </tr>
                        </tfoot> -->
                    </table>
                     </form>
                </div>
                
                
                <input type="hidden" class="form-control" name="organization" value="{{Auth::user()->organization_id}}">
                <input type="hidden" class="form-control" name="created_by" value="{{Auth::user()->id}}">

                <div style="float:right;">
                    <button type="submit" name="status" value="1" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection