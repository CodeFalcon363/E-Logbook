<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Save Records</h4>
                    </div>
                    <div class="card-body">
                        <form  action="{{route('records.Save')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Student</label>
                                <input type="text" name="student" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Course</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Session date</label>
                                <input type="date" name="session_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <input type="text" name="level" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="company_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Company Phone Number</label>
                                <input type="text" name="company_phone_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Company Address</label>
                                <input type="text" name="company_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Date Reported</label>
                                <input type="date" name="date_reported" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Industry Supervisor Name</label>
                                <input type="text" name="industry_supervisor_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Company Supervisor Telephone</label>
                                <input type="text" name="company_supervisor_telephone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Company Supervisor Post</label>
                                <input type="text" name="company_supervisor_post" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Monthly Allowance</label>
                                <input type="text" name="monthly_allowance" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Residential Address During Training</label>
                                <textarea name="residential_address_during_training" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Final Training Date</label>
                                <input type="date" name="final_training_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>School Supervisor Staff id</label>
                                <input type="text" name="school_supervisor_staff_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Grade</label>
                                <input type="text" name="grade" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Comment</label>
                                <textarea name="comment" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Comment By</label>
                                <input type="text" name="comment_by" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Graded by</label>
                                <input type="text" name="graded_by" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
