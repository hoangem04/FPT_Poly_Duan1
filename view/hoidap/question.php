<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }
</style>

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">

        </div>
    </div>
</div>
<div class="jb-login-register_area">
    <div class="container">
        <div>

        </div>
        <div class="row" style="justify-content: center;">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                <!-- form đăng nhập-->
                <form action="index.php?act=question" method="post">
                    <div class="login-form">
                        <h2 style="text-align: center;">Hỏi đáp</h2>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <labe style="font-weight: 700;">Họ và tên</labe>
                                <input type="text" name="name" placeholder="Nhập họ và tên của bạn" required>
                            </div>
                            <div class="col-md-12 col-12">
                                <labe style="font-weight: 700;">Email</labe>
                                <input type="email" name="email" placeholder="Nhập  địa chỉ email của bạn" required>
                            </div>
                            <div class="col-md-12 col-12">
                                <labe style="font-weight: 700;">Số điện thoại</labe>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại của bạn" required>
                            </div>
                            <div class="col-md-12 col-12">
                                <labe style="font-weight: 700;">Câu hỏi</labe> <br>
                                <textarea placeholder="Nhập câu hỏi của bạn..." name="contennt" required></textarea>
                            </div>
                            <div class="col-12 wrap-btn-sub" style="margin-left:30%;">
                                <input type="submit" class="btn-submit" name="btn_question" value="Gửi" style="margin-top: 30px;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>