<p>
    Adding a comment
</p>
<p>
    You may Add either a single image or a text.
</p>


<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="text">Comment</label>
        <div class="col-sm-5">
            <textarea class="form-control" rows="5" id="text" name="text" placeholder="Enter your comment"></textarea>
        </div>
    </div>
    <h4>OR</h4>
    <div class="form-group">
        <label class="control-label col-sm-2" for="file">Image</label>
        <div class="col-sm-5">
            <input class="form-control" name="file" type="file">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </div>
</form>
