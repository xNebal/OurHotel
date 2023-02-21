@extends('layouts.master')
@section('title')
ADD ROOM
@endsection
@section('css')
@endsection
@section('Dashboard')
@endsection
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Add Room</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="/store" method="POST">
                @csrf
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Room price</label>
                                <input class="form-control" type="text" name="price" id="price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Room Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option>Suite</option>
                                    <option>Standard</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Bed Number</label>
                    <select class="form-control" id="bed_number" name="bed_number">
                        <option>Select</option>
                        <option>1</option>
                        <option>2</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Room state</label>
                    <select class="form-control" id="state" name="state">
                        <option>available</option>
                        <option>unavailable</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Room description</label>
                    <input class="form-control" type="text" id="description" name="description"> 
                </div>
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary buttonedit ml-2">Save</button>
<button type="button" class="btn btn-primary buttonedit">Cancel</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
$(function() {
    $('#datetimepicker3').datetimepicker({
        format: 'LT'
    });
});
</script>
@endsection

@section('script')

@endsection