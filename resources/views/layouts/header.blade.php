<header class="header">
    <div class="div_menu">
        <div id="vnt-menutop" class="header_nav">
            <div class="container">
                <div class="header-top">
                    <div class="header-left">
                        <div class="logo"><h1><a onmousedown="return rwt(this,'advertise',1859)" href="https://www.xtmobile.vn/" target="_self" title=""><img src="https://www.xtmobile.vn/vnt_upload/weblink/logoxt-01-01.png" width="172" alt="" class="png"></a><strong style="display: none">XTmobile.vn - Cửa Hàng Bán Lẻ Điện Thoại, Phụ Kiện Tại TP.HCM</strong> </h1></div>
                        <div class="headert_search">
                            <div class="box_search">
                                <script language="javascript">
                                    function check_search(f)
                                    {
                                        var ok = 1;
                                        var key_default = "Bạn muốn tìm gì ?" ;
                                        var keyword = f.keyword.value;
                                        var key_len = f.keyword.value.length;
                                        if( (keyword==key_default) || (keyword=='') )		{
                                            alert("Vui lòng nhập từ khóa");
                                            f.keyword.focus();
                                            return false;
                                            ok = 0;
                                        }
                                        if( key_len<2 ){
                                            alert("Từ khóa tới thiểu là 2 ký tự");
                                            f.keyword.focus();
                                            return false;
                                            ok =0;
                                        }
                                        return true;

                                    }


                                    $(document).ready(function(){
                                        if($('#formSearch').length ){
                                            document.querySelector('#formSearch').addEventListener('submit', function(e) {
                                                e.preventDefault();
                                                var str = $.trim($('#search-keyword').val());
                                                str= str.toLowerCase();
                                                str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
                                                str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
                                                str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
                                                str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
                                                str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
                                                str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
                                                str= str.replace(/đ/g,"d");
                                                str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
                                                str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
                                                str= str.replace(/^\-+|\-+$/g,"");
                                                location.href = ROOT+"san-pham/search/keyword/" + str;
                                            }, false);

                                        }

                                    });



                                </script>
                                <form id="formSearch" name="formSearch" method="post" action="" autocomplete="off">
                                    <input name="do_search" value="1" type="hidden">
                                    <input name="keyword" id="search-keyword" type="text" required="" class="text_search" placeholder="Bạn muốn tìm gì ?" value="" autocomplete="off" onkeydown="CheckTimer()" onkeyup="SuggestSearch(event);">
                                    <input type="hidden" id="fpc_id" name="fpc_id">
                                    <button id="do_submit" name="do_submit" type="submit" class="btn_search" value="Tìm kiếm"></button>
                                    <a href="javascript:;" class="close_box_search"><img src="https://www.xtmobile.vn/skins/default/images/icon_close_search.png"></a>
                                </form>
                                <div id="SuggestSearch"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="menutop row"><ul class="dropdown"><li class="icon_1" id="menu_1"><a href="https://www.xtmobile.vn/dien-thoai" target="_self"><i class="icon"></i><span>Điện thoại</span></a></li><li class="icon_2" id="menu_155"><a href="https://www.xtmobile.vn/apple" target="_self"><i class="icon"></i><span>iPhone</span></a></li><li class="icon_3" id="menu_240"><a href="https://www.xtmobile.vn/macbook" target="_self"><i class="icon"></i><span>Macbook</span></a></li><li class="icon_4" id="menu_242"><a href="https://www.xtmobile.vn/ipad" target="_self"><i class="icon"></i><span>Tablet</span></a></li><li class="icon_5" id="menu_6"><a href="https://www.xtmobile.vn/watch" target="_self"><i class="icon"></i><span>Đồng Hồ</span></a></li><li class="icon_6" id="menu_4"><a href="https://www.xtmobile.vn/phu-kien" target="_self"><i class="icon"></i><span>PHỤ KIỆN</span></a></li><li class="icon_7" id="menu_99"><a href="https://www.xtmobile.vn/ban-tra-gop" target="_self"><i class="icon"></i><span>Trả góp</span></a></li><li class="icon_8" id="menu_8"><a href="https://www.xtmobile.vn/khuyen-mai" target="_self"><i class="icon"></i><span>Khuyến Mãi</span></a></li><li class="icon_9" id="menu_42"><a href="https://www.xtmobile.vn/tin-tuc" target="_self"><i class="icon"></i><span>Tin tức</span></a></li></ul></div>
                </div></div>
        </div>
    </div>
</header>
