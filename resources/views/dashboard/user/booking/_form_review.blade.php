<div class="row g-3">
    <div class="col-xxl-12">
        <div class="mb-3">
            <div class="star-rating">
                <span class="far fa-star" data-rating="1"></span>
                <span class="far fa-star" data-rating="2"></span>
                <span class="far fa-star" data-rating="3"></span>
                <span class="far fa-star" data-rating="4"></span>
                <span class="far fa-star" data-rating="5"></span>
            </div>
            <input type="hidden" name="rating" id="rating" value="0">
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-12">
        <div class="mb-3">
            <label for="content" class="form-label">Comment</label>
            <textarea class="form-control" id="content" name="comment" placeholder="Enter comment for this space"></textarea>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-12">
        <div class="hstack gap-2 justify-content-end">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    {{-- <input type="hidden" name="space_id" value="1"> --}}

    <!--end col-->
</div>
<!--end row-->
