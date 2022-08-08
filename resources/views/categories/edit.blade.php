@extends('admin.layouts.index')

@section('title', 'Cập nhật công viêc')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Cập nhật công việc</h2>
        </div>

        <div class="col-md-12">
            <form method="post" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên Sách</label>
                    <input type="text" class="form-control" name="TENSACH" value="{{ $category->TENSACH }}" required>
                </div>

                <div class="form-group">
                    <label>ISBN</label>
                    <input class="form-control" rows="3" name="ISBN"  required>{{ $category->ISBN }}
                </div>
                <div class="form-group">
                    <label>Tác giả</label>
                    <select name="TACGIA" >
                        <option value="chơn">Chơn</option>
                        <option value="Luy">Luy</option>
                        <option value="Thuần">Thuần</option>
                        <option value="Dương">Dương</option>
                        <option value="Vinh">Vinh</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Thể Loại</label>
                    <select name="THELOAI" >
                        <option value="truyện cười">truyện cười</option>
                        <option value="truyện ngôn tình">truyện ngôn tình</option>
                        <option value="truyện kinh dị">truyện kinh dị</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label>Số Trang</label>
                    <input class="form-control" rows="3" name="SOTRANG"  required>{{ $category->SOTRANG }}
                </div>
                <div class="form-group">
                    <label>Năm xuất bản</label>
                    <input class="form-control" rows="3" name="NAMXUATBAN"  required>{{ $category->NAMXUATBAN }}
                </div>

                {{-- <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" name="image" class="form-control-file" >
                </div> --}}

                {{-- <div class="form-group">
                    <label>Ngày hết hạn</label>
                    <input type="date" name="due_date" class="form-control"  value="{{ $task->due_date }}" required>
                </div> --}}
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection