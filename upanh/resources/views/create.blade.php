
<form method="post" action="{{ route("store") }}" enctype="multipart/form-data">
	@csrf
    <div class="form-group">
        <label for="exampleFormControlFile1">Ảnh</label>
        <input type="file" name="image" class="form-control-file" >
    </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
</form>

