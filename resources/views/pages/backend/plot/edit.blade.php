<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">Update Plot</h3>
            <div class="modal-body">
                <form autocomplete="off" method="POST"
                    action="{{ route('plot.edit', ['unique_key' => $plotdata->unique_key]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Plot No <span style="color: red">*</span></label>
                        <input class="form-control" type="numer" placeholder="Enter your plot no" name="plot_no"
                            required="" value="{{ $plotdata->plot_no }}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" style="margin-top: 10px">Sq.ft <span style="color: red">*</span></label>
                        <input class="form-control" type="text" name="Sq_ft" placeholder="Enter your plot Sq.ft"
                            required="" value="{{ $plotdata->Sq_ft }}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-labe" style="margin-top: 10px">Rate Per Sq.ft <span style="color: red">*</span></label>
                        <input class="form-control"type="numer" name="rate_per_Sq_ft"
                            placeholder="Enter your Rate Per Sq.ft" required="" value="{{ $plotdata->rate_per_Sq_ft }}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Block <span style="color: red">*</span></label>
                        <select class="form-select" id="publishStatus" name="block" required="">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" style="margin-top: 10px">Facing <span style="color: red">*</span></label>
                        <select class="form-select" id="publishStatus" name="facing" required="">
                            <option>North</option>
                            <option>South</option>
                            <option>East</option>
                            <option>West</option>
                        </select>
                    </div>
                    <div class="col-md-12" style="margin-top: 50px;">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
