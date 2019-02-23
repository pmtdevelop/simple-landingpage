<form action="<?php echo $base_url?>/actions.php" method="post">
    <div class="form-group">
        <!-- <label >Họ tên</label> -->
        <input class="form-control" type="text" name="name"  placeholder="Họ tên">
    </div>
    <div class="form-group">
        <!-- <label >Email</label> -->
        <input type="email" class="form-control" name="email" placeholder="Nhập email">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <!-- <label >Số điện thoại</label> -->
        <input type="text" class="form-control" name="phone_number" placeholder="Nhập số điện thoại">
    </div>

    <!-- <div class="form-group">
        <label >Quê quán</label>
        <input class="form-control" type="text" name="city"  placeholder="Quê quán">
    </div> -->
    <button type="submit"  name="submit" value="submit" id="submit" class="frm-button btn-lg btn btn-primary" >Gửi</button>
</form>
