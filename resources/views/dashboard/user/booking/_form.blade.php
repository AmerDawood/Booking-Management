
    <div class="row g-3">
        <div class="col-xxl-6">
            <div class="mb-3">
                <label for="startDate" class="form-label">Start Date</label>
                <input type="datetime-local" class="form-control" id="startDate" name="start_date">
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-6">
            <div class="mb-3">
                <label for="endDate" class="form-label">End Date</label>
                <input type="datetime-local" class="form-control" id="endDate" name="end_date">
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-12">
            <div class="mb-3">
                <label for="guestCount" class="form-label">Guest Count</label>
                <input type="number" class="form-control" id="guestCount" name="guest_count" placeholder="Enter guest count" min="1">
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-12">
            <div class="mb-3">
                <label for="contactPhone" class="form-label">Contact Phone</label>
                <input type="tel" class="form-control" id="contactPhone" name="contact_phone" placeholder="Enter contact phone">
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-12">
            <div class="mb-3">
                <label for="content" class="form-label">Content (optional)</label>
                <textarea class="form-control" id="content" name="special_requests" placeholder="Enter special requests or notes"></textarea>
            </div>
        </div>
        <!--end col-->
        <div class="col-lg-12">
            <div class="hstack gap-2 justify-content-end">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <!--end col-->


        <input type="text" hidden name="space_id" value="{{ $space->id }}" id="">
        <input type="text" hidden name="user_id" value="{{ auth()->user()->id }}" id="">

    </div>
    <!--end row-->
