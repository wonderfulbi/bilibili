 @extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
    <h3 class="block-title">您的位置->管理栏目->添加分区</h3>

          <!-- Basic with panel-->
        <div class="block-area" id="basic">
            <h3 class="block-title">添加分区</h3>
            <div class="tile p-15">
                <form role="form" action=""  method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">分区名称</label>
                        <input type="name" class="form-control input-sm" id="exampleInputEmail1" placeholder="请输入您预创建分区名">
                    </div>


                     <div class="block-area" id="upload">
            <p>缩略图</p>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-preview thumbnail form-control"></div>

                <div>
                    <span class="btn btn-file btn-alt btn-sm">
                        <span class="fileupload-new">请选择图片</span>
                        <span class="fileupload-exists">切换</span>
                        <input type="file" />
                    </span>
                    <a href="#" class="btn fileupload-exists btn-sm" data-dismiss="fileupload">移除</a>
                </div>
            </div>
        </div>













                    <button type="submit" class="btn btn-sm m-t-10">确认提交</button>
                    <button type="reset" class="btn btn-sm m-t-10">重置</button>
                </form>
            </div>
        </div>
         <!-- File Upload -->

@endsection

@section('myscript')




        <script src="{{ asset('admins/js/fileupload.min.js') }}"></script> <!-- File Upload -->


        <!-- All JS functions -->
        <script src="{{ asset('admins/js/functions.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                /* Tag Select */
                (function(){
                    /* Limited */
                    $(".tag-select-limited").chosen({
                        max_selected_options: 5
                    });

                    /* Overflow */
                    $('.overflow').niceScroll();
                })();

                /* Input Masking - you can include your own way */
                (function(){
                    $('.mask-date').mask('00/00/0000');
                    $('.mask-time').mask('00:00:00');
                    $('.mask-date_time').mask('00/00/0000 00:00:00');
                    $('.mask-cep').mask('00000-000');
                    $('.mask-phone').mask('0000-0000');
                    $('.mask-phone_with_ddd').mask('(00) 0000-0000');
                    $('.mask-phone_us').mask('(000) 000-0000');
                    $('.mask-mixed').mask('AAA 000-S0S');
                    $('.mask-cpf').mask('000.000.000-00', {reverse: true});
                    $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
                    $('.mask-money2').mask("#.##0,00", {reverse: true, maxlength: false});
                    $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {translation: {'Z': {pattern: /[0-9]/, optional: true}}});
                    $('.mask-ip_address').mask('099.099.099.099');
                    $('.mask-percent').mask('##0,00%', {reverse: true});
                    $('.mask-credit_card').mask('0000 0000 0000 0000');
                })();

                /* Spinners */
                (function(){
                    //Basic
                    $('.spinner-1').spinedit();

                    //Set Value
                    $('.spinner-2').spinedit('setValue', 100);

                    //Set Minimum
                    $('.spinner-3').spinedit('setMinimum', -10);

                    //Set Maximum
                    $('.spinner-4').spinedit('setMaxmum', 100);

                    //Set Step
                    $('.spinner-5').spinedit('setStep', 10);

                    //Set Number Of Decimals
                    $('.spinner-6').spinedit('setNumberOfDecimals', 2);
                })();
            });
        </script>
@endsection